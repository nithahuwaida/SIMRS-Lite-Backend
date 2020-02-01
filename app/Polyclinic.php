<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Polyclinic extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable;

    protected $table='polyclinics';
    protected $primaryKey='id';
    protected $fillable = ['id','polyclinic'];

    public function user(){
    	return $this->hasMany('App\User','polyclinic_id','id');
    }
    public function patient(){
    	return $this->hasMany('App\Patient','patient_id','id');
    }
}