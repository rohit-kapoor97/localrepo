<?php

namespace App\Services;
use App\Contracts\companyInterface;
use App\Models\CompanyAccount;


class companyAccountservice implements companyInterface{

    public function creatuser(array $data){
        return companyAccount::create($data);

    }

    





}


?>