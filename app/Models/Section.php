<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'name','created_by'
    ];

    public function branch(){
        return $this->hasOne('App\Models\Branch','id','branch_id');
    }

    public function department(){
        return $this->hasOne('App\Models\Department','id','department_id');
    }

    public function unit(){
        return $this->hasOne('App\Models\Unit','id','unit_id');
    }
}
