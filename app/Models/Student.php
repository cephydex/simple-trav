<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $fillable = [
        'fname'
         ,'lname'
         ,'sex'
         ,'dob'
         ,'father_name'
         ,'mother_name'
         ,'hometown'
         ,'nationality'
         ,'address'
    ];
}
