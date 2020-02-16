<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\ValidationRequest;
use DB;
use Storage;
use RealRashid\SweetAlert\Facades\Alert;


class FormController extends Controller
{
    public function Form() {
      return view('form');

   }

   public function displayData(){
      $user = DB::select("SELECT * from insert_table");
      return view('display',['user' => $user]);
   }

   public function insertData(Request $request){

      $lastname = $request->lastname;
      $firstname = $request->firstname;
      $middlename = $request->middlename;

      DB::INSERT("INSERT into insert_table(lastname,firstname,middlename)VALUES(?,?,?)",[$lastname,$firstname,$middlename]);
      //$user = DB::select("SELECT * from insert_table");

     // return redirect()->back() ->with('alert', 'Record Successfully Inserted!');
      Alert::success('Success Title', 'Success Message');
      return view('form');


   }
}
