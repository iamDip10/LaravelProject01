<?php

namespace App\Http\Controllers;
use App\Models\student;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index() {
        return view('index');
    }

    public function validates(Request $req) {
        $student = student::find($req['email']) ;
        echo $student;
        if ($student && $student->password == $req['pass']) {
            return redirect()->route('dashb', ['obj'=>$req['email']]);
        }else {
            return view('index') ;
        }
    }
}
