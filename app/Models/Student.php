<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'last_name','birth_year', 'gender'];
    protected $primaryKey = 'id';

    public function subjects(){
        return $this->belongsToMany('App\Models\Subject', 'students_subjects' ,'id_student','id_subject'); //
    }

}
