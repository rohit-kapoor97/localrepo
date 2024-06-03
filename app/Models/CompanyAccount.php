<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyAccount extends Model
{

    protected $fillable=[
        'amount',
        'item',
        'type',
        'cust_id',
    ];
    use HasFactory;
}
