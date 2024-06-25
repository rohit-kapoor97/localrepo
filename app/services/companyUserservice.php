<?php
namespace App\Services;
use App\Contracts\companyInterface;
use App\Models\companyUser;
use Illuminate\Support\Facades\Auth;
use App\Models\user;


class companyUserservice implements companyInterface{

    public function creatuser(array $data){
        return companyUser::create($data);
    }
    public function detail(){
        return companyUser::get();
    }
    public function getDetailById($id){
        return;
    }
    public function getUserById($id){
        return;
    }
    public function editUser($id, array $add){
        return;
    }
    public function payment(){
        return;
    }
    public function searchuser(){
        return;
    }

}

?>