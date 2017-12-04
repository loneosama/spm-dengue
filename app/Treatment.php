<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{

    public $fillable = ['treatment_name','treatment_type','description','origin','dr_name','is_foreign_doctor','details'];
    //public $timestamps = false;
    protected $primaryKey = 'treatments_id';
}
