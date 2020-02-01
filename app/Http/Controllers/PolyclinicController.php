<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Polyclinic;

class PolyclinicController extends Controller
{
    public function index()
    {
        $polyclinics=Polyclinic::all();
        return response($polyclinics);
    }
    public function store(Request $request){
        $cek= Polyclinic::where('polyclinic',$request->polyclinic)->count();
        if($cek==0){
            $polyclinics = new Polyclinic();
            $polyclinics->polyclinic = $request->input('polyclinic');
            $polyclinics->save();
            return response('Berhasil Menambah Poli Klinik', $polyclinics);
        }else{
            return response('Gagal Menambah Poli Klinik');
        }
        
    }
}
