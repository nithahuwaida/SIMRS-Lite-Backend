<?php

namespace App;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Role extends Model
{
    use Authenticatable, Authorizable;

    protected $table='roles';
    protected $primaryKey='id';
    protected $fillable = ['id','role'];

    public function role(){
    	return $this->hasMany('App\User','role_id','id');
    }
}