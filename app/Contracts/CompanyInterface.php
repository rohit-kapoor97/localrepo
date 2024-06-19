<?php
namespace App\Contracts;


interface CompanyInterface{

  public function creatuser(array $data);
  public function detail();
  public function getUserById($id);
  public function editUser($id, array $add);
  public function payment();

}




?>