<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CompanyDetail;

class CompanyAccount extends Model
{

    protected $fillable=[
        'amount',
        'item',
        'type',
        'cust_id',
    ];
    public function getDetailCompany(){
        return $this->belongsTo(CompanyDetail::class);
    }
    use HasFactory;
}
