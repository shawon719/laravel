<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Country;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //
    public function show()
{
    // Eager load the product relationship and fetch the company by ID
    $company = Company::with('product')->get();

// return $company;
    // Pass the company to the view
    return view('company', compact('company'));
}


public function index()
{
    $countries = Country::with('posts')->get();
    return view('country', compact('countries')); // ✅ ঠিক
}


}
