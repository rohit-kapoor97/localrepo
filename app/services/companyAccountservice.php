<?php

namespace App\Services;
use App\Contracts\companyInterface;
use App\Models\CompanyAccount;
use App\Models\CompanyDetail;


class companyAccountservice implements companyInterface{

    public function creatuser(array $data){
        companyAccount::where('cust_id')->create($data);
        return redirect()->route('show.amount');

    }
   public function detail(){
    return companyAccount::where('cust_id')->get();
    
    }
    
    public function getDetailById($id){
        return ;
    }

    public function getUserById($id){
        
        $user=companyDetail::with('getAccountDetail')->find($id);
        return $user;
        

    }
    public function editUser($id, array $add){
        return ; 
    }
    public function payment(){
        return ;
    }
    public function searchuser(){
        
     $view=companyAccount::where('cust_id')->get();
     return $view;
    }

    





}


?>