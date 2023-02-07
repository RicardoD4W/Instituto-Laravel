<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'credits','hour'];
    protected $primaryKey = 'id';

    public function student(){
        return $this->belongsToMany('App\Models\Student', 'students_subjects' ,'id_subject','id_student');
    }

}
