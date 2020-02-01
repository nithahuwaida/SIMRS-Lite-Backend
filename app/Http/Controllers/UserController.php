<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Hash;

class UserController extends Controller
{
    public function index()
    {
        $users=User::all();
        return response($users);
    }
    public function store(Request $request){
        $cek= User::where('name',$request->name)->count();
        if($cek==0){
            $users = new User();
            $users->name = $request->input('name');
            $users->address = $request->input('address');
            $users->phone_number = $request->input('phone_number');
            $users->username = $request->input('username');
            $users->password = Hash::make($request->input('password'));
            $users->role_id = $request->input('role_id');
            $users->polyclinic_id = $request->input('polyclinic_id');
            $users->save();
            return response('Berhasil Menambah User', $users);
        }else{
            return response('Gagal Menambah User');
        }
        
    }
}
