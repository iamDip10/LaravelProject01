<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class signupController extends Controller
{
    public function index() {
        return view('signup');
    }

    public function push(Request $req) {
        $student = new student;
        $student->fisrtname = $req['fname'];
        $student->lastname = $req['lname'];
        $student->email = $req['mail'];
        $student->password = $req['pass'] ;
        $student->batch = $req['batch'] ;
        $student->department = $req['dept'];
        $student->phonenumber = $req['phn'] ;

        $student->save();
        return view('signup') ;
    }
}
