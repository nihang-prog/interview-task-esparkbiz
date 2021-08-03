<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class basic_detail extends Model
{
    use HasFactory;
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'fname','lname','designation','address1','address2','email','phone','city','state','zipcode','gender','relstatus','dob'
    ];
}
