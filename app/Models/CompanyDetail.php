<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyDetail extends Model
{

    protected $fillable=[
        'name',
        'comp_name',
        'contact',
        'user_id',
        'company_id',
   ];
   public $timeStamp= false;
    use HasFactory;
}
