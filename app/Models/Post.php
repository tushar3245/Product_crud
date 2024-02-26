<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'name',
        'father_name',
        'mother_name',
        'date_of_birth',
        'gender',
        'undergraduate_name',
        'admission_session',
        'reg_no',
        'batch',
        'year_of_passing',
        'graduating_session_class',
        'cgpa',
        'graduate_name',
        'session',
        'reg_id_no',
        'g_batch',
        'year_passing',
        'graduating_session_2',
        'official_address',
        'employer',
        'designation',
        'present_address',
        'mobile',
        'email',
        'paid',
        'bank_name',
        'branch',
        'bank_no',
        'transformation',
        'potu',
        'screenshot',




        // Add other attributes here if needed
    ];
}
