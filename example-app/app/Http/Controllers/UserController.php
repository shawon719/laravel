<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function show($id){
        $user=Users::find($id);
        return view('user',compact('user'));
    }
}
