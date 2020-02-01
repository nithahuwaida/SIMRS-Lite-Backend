<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Poatient extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable;

    protected $table='patients';
    protected $primaryKey='id';
    protected $fillable = ['id','name', 'address','phone_number', 'polyclinic_id'];

    public function polyclinic(){
    	return $this->belongsTo('App\Polyclinic','polyclinic_id','id');
    }
}