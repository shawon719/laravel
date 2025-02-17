<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function viewData()
    {
   
    $employee = Employee::with('products')->get();
    //dd($employee);
     return view('employee', compact('employee'));


    }
}
