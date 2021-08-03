<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class language extends Model
{
    use HasFactory;
    protected $primaryKey = 'language_id';
    protected $fillable = [
        'user_id','hindi','hread','hwrite','hspeak','english','eread','ewrite','espeak','gujarati','gread','gwrite','gspeak'
    ];
}
