<?php

namespace App\Services;

use App\Models\CompanyDetail;

class companyDetailservice{
    
    public function creatUser($name, $comp, $contact){

        $user = new CompanyDetail();
        $user -> name =$name;
        $user ->comp_name= $comp;
        $user -> contact =$contact;

        $user ->save();
        return $user;


    }
}





?>