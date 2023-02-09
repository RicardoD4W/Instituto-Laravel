<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_Subject extends Model
{
    use HasFactory;
    protected $fillable = ['id_student', 'id_subject','date_eval','note'];
    public $timestamps = false;
    protected $primaryKey = 'id_subject';
    public $table = "students_subjects";
    
}
