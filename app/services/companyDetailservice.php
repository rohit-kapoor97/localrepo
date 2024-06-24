<?php

namespace App\Services;
use App\Contracts\companyInterface;
use App\Models\CompanyDetail;
use Illuminate\Support\Facades\Auth;
use App\Models\user;


class companyDetailservice implements CompanyInterface{
    
     
       
       public function creatuser(array $data){
        return CompanyDetail::create($data);
          }

        public function detail()
        {
            return companyDetail::with('userDetail')->where('user_id', Auth::id())->get();

        }
   
        public function getUserById($id)
        {
          return companyDetail::find($id);
          }

          public function editUser($id,array $add)
          {
          companyDetail::find($id)->update($add);
           return redirect()->route('user.all');
         }


         public function payment()
         {
          return companyDetail::with('getAccountDetail')->where('user_id', Auth::id())->get();
         }
        
         public function getDetailById($id)
         {
          return companyDetail::delete($id);
 
         }
         public function search($view){
          return companyDetail::where('name', 'LIKE', '%".$view."%')->get();
         }

    }






?>