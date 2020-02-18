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


   public function activity() {

      return view('activity');

   }


   public function displayDatas(Request $request){
    
    $firstname = $request->input('firstname');
    $lastname = $request->input('lastname');
    $age = $request->input('age');

    return view('displayAbout',['firstname' => $firstname,'lastname' => $lastname, 'age' => $age]);

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
      
      Alert::success('Success Title', 'Success Message');
      return view('form');


   }
}
