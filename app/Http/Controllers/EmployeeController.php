<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function GetEmpId(Request $request){
        dd($request->session()->get('empid'));
    }
}
