<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\CompanyAccount;
use App\Services\companyDetailservice;
use App\Contracts\companyInterface;
use App\Models\companyUser;


class companyController extends Controller
{

public function company(request $req){
 $req->validate([
    "namecompany" => 'required',
 ]);
 companyUser::create([
    'companyname' => $req ->namecompany,
 ]);
 return redirect()->route('view.coust');

    }
    public function showcomp(){
        return view('addcomp');
    }

protected $service;
public function __construct(companyDetailservice $service){
  $this->service=$service;
}


public function store(request $req){
 $data=[
  
  "comp_name"=>$req->compname,
  "name"=>$req->coustname,
  "contact"=>$req->coustnum,

 ];


$this->service->creatuser($data);
   
return redirect()->route('user.all');
  }


  public function getdetail(){
    $users=$this->service->detail();
    return view('addview',compact('users'));
  }

  public function comp(){
    $user=companyUser::get();
    return view('addcust', compact('user'));
  }

  public function compview(){
    $user=companyUser::get();
    return view('viewcomp', compact('user'));
  }

  public function view(){
    $users=CompanyDetail::all();
    return response()->json($users);
    // return view('addview', compact('users'));
  }

  public function custview(){
    $users=companyDetail::get();
    return view('viewcust')->with('users', $users);
  }

  public function coustmeredit(request $request, $id){
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

public function amountshow(request $req){
$req->validate([
    "custamount" => 'required',

]);
CompanyAccount::where('cust_id', $req->id)->create([
    'amount' => $req ->custamount,
    'item' => $req -> coustitem,
    'type' => $req -> addtype,
    'cust_id' => $req -> userid,
  
]);
return redirect()->route('show.amount');
  }

  public function viewamount($id){
    $user=companyDetail::find($id);
    return view('addpay')->with('user', $user);
  }

  public function listitem(request $req){
    $users=companyAccount::where('cust_id', $req->id)->get();


    return view('itemlist', compact('users'));
}

// public function search(request $req){
//   $slug=str::slug('name', '-')->companyDetail::where('name', 'likes' ,'%'.$req->name.'%')->paginate(5);

//   return view('search', compact('slug'));

// }


}
