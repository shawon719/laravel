<?php

namespace App\Http\Controllers;

use App\Models\StudentModel;
use Illuminate\Http\Request;
use Redirect;

class MyController extends Controller
{
    //this is for view data from database
    public function views(){
        // Fetch all items from the database
        $stsData= StudentModel::all();
        return view('home',compact('stsData'));
    }
    //end view section

    //start delete section

    public function destroy($id){
            $dst= StudentModel::find($id);
            if($dst){
                $dst->delete();
            }
            return Redirect::to('/h');
    }

    //insertion part
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $student= new StudentModel;
        $student->name= $request->name;
        $student->email=$request->email;
        $student->contact=$request->contact;
        $student->address = $request->address;
        $student->save();
        return Redirect::to('/h');
    }//end insertion part

    //start edit part

    public function update($student_id){
            $student= StudentModel::find($student_id);
            return view('edit',compact('student'));
    }
    public function editStore(Request $request){
        $student=StudentModel::find($request->student_id);
        $student->name=$request->name;
        $student->email=$request->email;
        $student->contact=$request->contact;
        $student->address=$request->address;
        $student->save();
        return Redirect::to('/h');
    }
}
