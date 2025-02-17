<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DbController extends Controller
{
   public function index()
    {
        $users = DB::table('dbquery')->get();
 
        return view('database.index', ['users' => $users]);
    }
}
