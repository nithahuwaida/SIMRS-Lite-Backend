<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Role;

class RoleController extends Controller
{
    public function index()
    {
        $role=Role::all();
        return response()->json(['status' => 'success', 'data' => $role]);
    }
    public function store(Request $request){
        $cek= Role::where('role',$request->role)->count();
        if($cek==0){
            $role = new Role();
            $role->role = $request->input('role');
            $role->save();
            return response()->json('Berhasil Menambah Role');
        }else{
            return response()->json('Gagal Menambah Role');
        }
        
    }
}
