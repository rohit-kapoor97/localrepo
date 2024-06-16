<?php

namespace App\Services;
use App\Contracts\compDetail;
use App\Models\CompanyDetail;

class companyDetailservice implements compDetail{
    
    

        protected $name=[];
        protected $company=[];
        protected $contact=[];

        public function detail( $name, $company, $contact){
          return $this->name=$name;
          return $this->company=$company;
          return $this->contact=$contact;
        }


        // public function getUsers()
        // {
        //     return $this->name->getAllUsers();
        //     return $this->company->getAllUsers();
        //     return $this->contact->getAllUsers();
        // }


    }






?>