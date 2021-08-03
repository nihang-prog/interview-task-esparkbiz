<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class referance_contact extends Model
{
    use HasFactory;
    protected $primaryKey = 'refcon_id';
    protected $fillable = [
        'user_id','ref_name1','ref_mobile1','ref_reloation1','ref_name2','ref_mobile2','ref_reloation2'
    ];
}
