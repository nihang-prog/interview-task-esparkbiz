<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class work_experience extends Model
{
    use HasFactory;
    protected $primaryKey = 'exp_id';
    protected $fillable = [
        'user_id','company_name','designation','from','to'
    ];
}
