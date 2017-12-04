<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{


    public $fillable = ['first_name','last_name','gender','email','dob','address','bloodgroup','city','district','diagnosed','is_diagnosed_before'];
    public $timestamps = false;
    protected $primaryKey = 'patients_id';
}
