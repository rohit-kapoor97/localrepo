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


    }






?>