<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CompanyAccount;

class CompanyDetail extends Model
{

    protected $fillable=[
        'name',
        'comp_name',
        'contact',
        'user_id',
       
   ];
   public $timeStamp= false;

   public function getAccountDetail(){
    return $this->hasMany(CompanyAccount::class, 'cust_id', 'id');
   }

    use HasFactory;
}
