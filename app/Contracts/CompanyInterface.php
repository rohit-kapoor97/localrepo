<?php
namespace App\Contracts;


interface CompanyInterface{

  public function creatuser(array $data);
  public function detail();
  public function getDetailById($id);
  public function getUserById($id);
  public function editUser($id, array $add);
  public function payment();
  public function searchuser();


}




?>