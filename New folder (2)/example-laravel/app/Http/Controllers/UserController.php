<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;
use Redirect;


class UserController extends Controller
{
    public function sharmony(){
          // Fetch all items from the database
          $stsData = Item::all();
          return view('home',compact('stsData'));
    }


    public function index(){
        return view('demo');
    }

    //delete er section
    public function destroy($id){
        $sts= Item::find($id);
        if($sts){
            $sts->delete();
        }
        return Redirect::to('/h');
    }


    //create page name
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $student = new Item;
        $student->name=$request->name;
        $student->email=$request->email;
        $student->contact=$request->contact;
        $student->save();
        return Redirect::to('/h');
    }


    //edit work
    public function update($student_id){
        $student=Item::find($student_id);
        return view('edit',compact('student'));
    }
    public function editStore(Request $request){
        $student= Item::find($request->student_id);
        $student->name= $request->name;
        $student->email=$request->email;
        $student->contact=$request->contact;
        $student->save();
        return Redirect::to('/h');
    }
}
