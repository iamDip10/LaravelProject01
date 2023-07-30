<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
class dashboardController extends Controller
{
    public function index(Request $req, $obj) {
        //echo $obj;
        $user = student::find($obj) ;

        return view('dashboard', ['users'=> $user, 'email'=> $obj]) ;
    }
}
