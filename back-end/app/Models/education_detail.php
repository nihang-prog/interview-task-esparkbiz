<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class education_detail extends Model
{
    use HasFactory;
    protected $primaryKey = 'edu_id';
    protected $fillable = [
        'user_id','ssc_board_name','ssc_passing_year','ssc_percentage','hsc_board_name','hsc_passing_year','hsc_percentage','degree_course_name','degree_university',
        'degree_passing_year','degree_percentage','master_course_name','master_university','master_passing_year','master_percentage'
    ];
}
