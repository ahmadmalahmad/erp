<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    protected $fillable = [
        'name','created_by'
    ];

    public function branch(){
        return $this->hasOne('App\Models\Branch','id','branch_id');
    }

    public function department(){
        return $this->hasOne(Department::class,'id','department_id');
    }

    public function unit(){
        return $this->hasOne(Unit::class,'id','unit_id');
    }

    public function section(){
        return $this->hasOne(Section::class,'id','section_id');
    }
}
