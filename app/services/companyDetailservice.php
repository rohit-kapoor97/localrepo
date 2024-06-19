<?php

namespace App\Services;
use App\Contracts\companyInterface;
use App\Models\CompanyDetail;

class companyDetailservice implements CompanyInterface{
    
       protected $company;
       protected $name;
       protected $contact;
       
       public function creatuser(array $data){
        return CompanyDetail::create($data);
          }

        public function detail()
        {
            return companyDetail::all();

        }
         public function getUserById($id){
          return companyDetail::find($id);
          }

          public function editUser($id,array $add){
          companyDetail::find($id)->update($add);
           return redirect()->route('user.all');
         }


         public function payment(){
          return companyDetail::with('getAccountDetail')->get();
         }


    }






?>