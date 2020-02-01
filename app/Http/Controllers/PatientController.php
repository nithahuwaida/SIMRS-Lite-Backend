<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Patient;

class PatientController extends Controller
{
    public function index()
    {
        $patients=Patient::all();
        return response($patients);
    }
    public function store(Request $request){
        $patients = new Patient();
        $patients->name = $request->input('name');
        $patients->address = $request->input('address');
        $patients->phone_number = $request->input('phone_number');
        $patients->polyclinic_id = $request->input('polyclinic_id');
        $patients->save();
        return response('Berhasil Menambah Poli Klinik', $patients);       
    }
}
