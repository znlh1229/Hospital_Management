<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    public function add_doctor_store()
    {
        return view('admin.add_doctor');
    }

    public function upload_doctor(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'phone' => 'required',
            'speciality' => 'required',
            'room' => ['required', Rule::unique('doctors', 'room')],
            'image' => 'required',
        ]);


        $doctor = new Doctor;
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
        return redirect()->back()->with('success', 'Add Doctor is Successful....');
    }

    public function check_appointment()
    {
        $data = Appointment::all();
        return view('admin.check_appointment', compact('data'));
    }
    public function approved($id)
    {
        $data = Appointment::find($id);
        $data->status = 'Approved';
        $data->save();
        return redirect()->back();
    }

    public function cancel($id)
    {
        $cancel = Appointment::find($id);
        $cancel->status = 'Cancel';
        $cancel->save();
        return redirect()->back();
    }
}
