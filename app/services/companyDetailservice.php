<?php

namespace App\Services;
use App\Contracts\compDetail;
use App\Models\CompanyDetail;

class companyDetailservice implements detailCompany{
    
    

        protected $name=[];
        protected $company=[];
        protected $contact=[];

        public function __construct($name, $company, $contact){
          return $this->name=$name;
          return $this->company=$company;
          return $this->contact=$contact;
        }


        public function creatuser($name, $company, $contact){
          return $this->name=$name;
          return $this->company=$company;
          return $this->contact=$contact;

        }

        public function detail()
        {
            return $this->name->all();
            return $this->company->all();
            return $this->contact->all();
        }


    }






?>