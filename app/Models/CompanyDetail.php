<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CompanyAccount;
use App\Models\user;

class CompanyDetail extends Model
{

    protected $fillable=[
        'comp_name',
        'name',
        'contact',
        'user_id',
       ];

   public $timeStamp=false;

   public function getAccountDetail(){
    return $this->hasMany(CompanyAccount::class, 'cust_id', 'id');
   }

   public function userDetail(){
    return $this->belongsTo(user::class);
   }

    use HasFactory;
}
