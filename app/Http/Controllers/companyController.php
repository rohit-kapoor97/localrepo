<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CompanyAccount;
use App\Models\CompanyDetail;
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


  public function create(request $req){
        $req->validate([
            "compname" => 'required',
            "coustname" => 'required',
            "coustnum" => 'required',
        ]);

        CompanyDetail::create([
              'comp_name' => $req ->compname,
              'name' => $req -> coustname,
              'contact' => $req -> coustnum,
            'user_id' => $req ->userid,
           ]);

           return redirect()->route('comp.view');
  }

  public function comp(){
    return view('addcust');
  }

  public function view(){
    $users=CompanyDetail::all();
    return view('addview', compact('users'));
  }

  public function coustmeredit(request $edit){
    companyDetail::where('id', $edit->id)->update([

        'name' => $edit -> coustname,
        'contact' => $edit -> coustnum,
    ]);
    return redirect()->route('view.add');
  }
  public function editview($id){
    $users=companyDetail::find($id);
    return view('update')->with('users', $users);
  }

  public function showamount(){
    $users=companyDetail::with('getAccountDetail')->get();


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
}
