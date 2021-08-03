<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class preferance extends Model
{
    use HasFactory;
    protected $primaryKey = 'pref_id';
    protected $fillable = [
        'user_id','prefered_location','notice_period','expexted_ctc','current_ctc','department'
    ];
}
