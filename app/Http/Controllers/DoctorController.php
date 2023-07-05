<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function doctor_list()
    {
        $doctor = Doctor::all();
        return view('admin.doctor_list', [
            'doctor' => $doctor
        ]);
    }

    public function delete_doctor($id)
    {
        $doctor_delete = Doctor::find($id);
        $doctor_delete->delete();

        return redirect()->back()->with('doctor', 'Delete doctor is Successful');
    }
}
