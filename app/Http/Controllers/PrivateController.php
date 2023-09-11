<?php

namespace App\Http\Controllers;

use App\Models\Alert;
use Illuminate\Http\Request;
use App\Models\Child;
use App\Models\Program;
use Illuminate\Support\Facades\Auth;

class PrivateController extends Controller
{
    public function index(){
        $alert = Alert::where('id',Auth::user()->program)->first();
        $child = Child::where('id', Auth::user()->child_id)->first();
        $program = Program::where('id', Auth::user()->program)->first();
        return view('private')->with(compact('child', 'alert', 'program'));
    }
}
