<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\CompanyAccount;
use App\Models\CompanyDetail;
use App\Contracts\compDetail;
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

protected $comp;
public function __construct(compDetail $comp){
  $this->comp= $comp;
}
public function detail(request $req){
 
return $this->comp->detail();
    // $user = new companyDetailservice();
    // $user -> name =$name;
    // $user ->comp_name= $comp;
    // $user -> contact =$contact;

       return redirect()->route('view.add');
  }

  public function comp(){
    $comp=companyUser::get();
    return view('addcust', compact('comp'));
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

// public function search(request $req){
//   $slug=str::slug('name', '-')->companyDetail::where('name', 'likes' ,'%'.$req->name.'%')->paginate(5);

//   return view('search', compact('slug'));

// }


}
