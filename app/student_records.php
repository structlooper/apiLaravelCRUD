<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student_records extends Model
{
    protected $table  = "student_records";
    protected $fillable = [
        'studentName' , 'studentClass','rollNumber'
    ];
}
