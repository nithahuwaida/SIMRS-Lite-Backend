<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable;

    protected $table='users';
    protected $primaryKey='id';
    protected $fillable = [
        'id','name', 'address','phone_number','username', 'password', 'role_id', 'polyclinic_id'
    ];

    public function role(){
    	return $this->belongsTo('App\Role','id','role_id');
    }
    public function polyclinic(){
    	return $this->belongsTo('App\Polyclinic','id','polyclinic_id');
    }

    protected $hidden = [
        'password',
    ];
}
