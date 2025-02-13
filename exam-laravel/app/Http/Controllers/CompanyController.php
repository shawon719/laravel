<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Companys;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //
    // public function show($id){
    //         $com=Companys::with('brand')->find($id);
    //         dd($com);
    //         // return view('brand',compact('companys'));
    // }


    public function show()
{
    $companies = Companys::with('products')->get();
    return view('companies.show', compact('companies'));
}
}
