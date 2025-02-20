<?php

namespace App\Http\Controllers;

use App\Models\StudentModel;
use Illuminate\Http\Request;
use Redirect;

class StudentController extends Controller
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
            // if($dst){
            //     $dst->delete();
            // }
            // return Redirect::to('/h');

            //delete er json format
        if(!$dst){
            return $dst()->json([
                'message' => 'User not found!'
            ],404);
        }

        $dst->delete();

        return response()->json([
            'message' => 'user succesfully deleted'
        ],200);




            //from chatu
        // if (!dst) {
        //     return response()->json(['message' => 'User not found'], 404);
        // }

        // $dst->delete();

        // return response()->json(['message' => 'User deleted successfully'], 200);
        
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





     public function index(){
        $users = StudentModel::all();

        return response()->json([
        'results' => $users
        ],200);
    }


    public function show($id){

        //$users = StudentModel::find($id);
        // $users = StudentModel::all();

        // if(!$users){
        //     return response()->json([
        //         'message' => 'user not found'
        //     ],404);
        // }

        // return response()->json([
        //     'user' => $users
        // ],200);

                 // সমস্ত ইউজার ডাটাবেস থেকে আনুন
        $users = StudentModel::all();

        // JSON ফরম্যাটে ডাটা রিটার্ন করুন
        return response()->json([
            'status' => 'success',
            'users' => $users
        ], 200);




    }



















}
