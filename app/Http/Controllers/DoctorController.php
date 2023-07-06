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

    public function update_doctor($id)
    {
        $data = Doctor::find($id);
        return view('admin.edit_doctor', compact('data'));
    }

    public function edit_doctor(Request $request, $id)
    {

        $doctor = Doctor::find($id);
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        $doctor->room = $request->room;
        $image = $request->image;
        if ($image) {

            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('doctorimage', $imagename);
            $doctor->image = $imagename;
        }

        $doctor->save();
        return redirect()->back()->with('success', 'Edit Doctor is Successful....');
    }
}
