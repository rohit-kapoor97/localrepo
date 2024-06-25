<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class companyUser extends Model
{
    protected $fillable=['companyname', 'comp_id'];
    public $timestamp=false;


    public function usercomp(){
      return $this->belongsTo(User::class);
    }
    use HasFactory;
}
