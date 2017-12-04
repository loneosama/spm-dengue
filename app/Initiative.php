<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Initiative extends Model
{
    public $fillable = ['name','location','description','is_pre','start_date','end_date','conducted_by','donation_amount'];
    public $timestamps = false;
    protected $primaryKey = 'initiative_id';
}
