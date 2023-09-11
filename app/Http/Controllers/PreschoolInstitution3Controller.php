<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PreschoolInstitution3;


class PreschoolInstitution3Controller extends Controller
{
    public function index(){
        $context = [
            'bbs' => PreschoolInstitution3::latest()->get()];
        return view('our_employees', $context);
    }
}
