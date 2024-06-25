<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Services\companyDetailservice;
use App\Contracts\companyInterface;
use App\Services\companyAccountservice;
use App\Services\companyUserservice;
use Illuminate\Support\Facades\Auth;


class companyController extends Controller
{

public function company(request $req){
 $req->validate([
    "namecompany" => 'required',
 ]);
 $data=[
    'companyname' => $req ->namecompany,
    'comp_id' =>$req->compid,
 ];

 $this->compuser->creatuser($data);
 return redirect()->route('view.coust');

    }
    public function showcomp(){
        return view('addcomp');
    }

protected $service;
protected $account;
protected $compuser;

public function __construct(companyDetailservice $service, companyAccountservice $account, companyUserservice $compuser ){
  $this->service=$service;
  $this->account=$account;
  $this->compuser=$compuser;
}

public function store(request $req){
 $data=[
  
  "comp_name"=>$req->compname,
  "name"=>$req->coustname,
  "contact"=>$req->coustnum,
  "user_id"=>$req->userid,

 ];


$this->service->creatuser($data);
   
return redirect()->route('user.all');
  }


  public function getdetail(){
    $users=$this->service->detail();
    return view('addview',compact('users'));
  }

  public function comp(){
    $user=$this->compuser->detail();
    return view('addcust', compact('user'));
  }

  public function compview(){
    $user=$this->compuser->detail();
    return view('viewcomp', compact('user'));
  }

  public function view(){
    $users=CompanyDetail::all();
    return response()->json($users);
    // return view('addview', compact('users'));
  }

  public function custview(){
    $users=$this->service->detail();
    return view('viewcust')->with('users', $users);
  }

  public function customeredit(request $request, $id){
    $this->service->editUser($id, $add=[
      "name" => $request -> coustname,
        "contact" => $request -> coustnum,
    ]);
     return $this->service->editUser($id, $add);
   
  }
  public function editview($id){
    $users=$this->service->getUserById($id);
    return view('update')->with('users', $users);
  }

  public function showamount(){
    $users=$this->service->payment();
    return view('payment', compact('users'));
}
public function destroy(){
  Auth::logout();
  return redirect()->route('login');
}

// companyAccount



public function amountshow(request $req){
$req->validate([
    "custamount" => 'required',

]);
$data=[
    'amount' => $req ->custamount,
    'item' => $req -> coustitem,
    'type' => $req -> addtype,
    'cust_id' => $req -> userid,
  
  ];
return $this->account->creatuser($data);
  }

  public function listitem(request $req){
    $users=$this->account->detail();
   
    return view('itemlist', compact('users'));
  }


  public function viewamount($id){
    $user=$this->account->getUserById($id);
    return view('addpay')->with('user', $user);
  }


  public function searchre(request $req){
 
    $users=$this->service->searchuser();
    // dd($users);
   
    return view('search', compact('users'));

}

public function delete($id){
  
  $this->service->getDetailById($id);
  return redirect()->route('user.all');
}


}
