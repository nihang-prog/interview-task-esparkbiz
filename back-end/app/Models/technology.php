<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class technology extends Model
{
    use HasFactory;
    protected $primaryKey = 'tech_id';
    protected $fillable = [
        'user_id','php','plevel','mysql','mlevel','laravel','llevel','oracle','olevel'
    ];
}
