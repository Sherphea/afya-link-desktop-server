<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

Class Patient extends Model{

    use SoftDeletes;

    protected $fillable = [
        'patient_no', 
        'first_name',
        'second_name',
        'last_name',
        'gender',
        'date_of_birth',
        'approximate_DOB',
        'patient_type'
    ];
    
    protected $dates = ['deleted_at'];

}