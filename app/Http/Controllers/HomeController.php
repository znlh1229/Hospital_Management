<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {
                $showDoctor = Doctor::all();

                return view('user.home', compact('showDoctor'));
            } else {
                return view('admin.home');
            }
        } else {
            return redirect()->back();
        }
    }

    public function index()
    {
        if (Auth::id()) {  //Admin can't reach home page
            return redirect('home');
        } else {
            $showDoctor = Doctor::all();
            return  view('user.home', compact('showDoctor'));
        }
    }

    public function appointment(Request $request)
    {
        $data = new Appointment;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->date = $request->date;
        $data->doctor = $request->doctor;
        $data->phone = $request->number;
        $data->message = $request->message;
        $data->status = 'In Progress';

        if (Auth::id()) {  //when user login the user_id reach db //Not Login - user_id not input

            $data->user_id = Auth::user()->id;
        }
        $data->save();
        return redirect()->back()->with('message', 'Appointment Request Successful.We will contact with you soon');
    }

    public function show_appointment()
    {
        if (Auth::id()) {
            $userid = Auth::user()->id;
            $appoint = Appointment::all();
            return view('user.my_appointment', compact('appoint'));
        } else {
            return redirect()->back();
        }
    }

    public function cancel_appointment($id)
    {
        $data = Appointment::find($id);
        $data->delete();
        return redirect()->back()->with('delete_success', 'Appointment Cancel is successful');
    }
}
