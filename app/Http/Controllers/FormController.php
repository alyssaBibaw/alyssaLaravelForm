<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\ValidationRequest;
use DB;
use Storage;
use RealRashid\SweetAlert\Facades\Alert;


class FormController extends Controller
{

   public function Login() {
      return view('login');

   }

   public function Buttons() {
      return view('buttons');

   }

   public function Dashboard() {
      return view('dashboard');

   }

   public function card() {
      return view('card');

   }


   public function activity() {

      return view('activity');

   }


   /*public function displayDatas(Request $request){
    
    $firstname = $request->input('firstname');
    $lastname = $request->input('lastname');
    $age = $request->input('age');
    $gender = $request->input('gender');
    $address = $request->input('address');
    $contact = $request->input('contact');
    $email = $request->input('email');
    


    if($gender=="Male") {
    $data="Uncle";

    } else {
     $data="Ante";

    }
    


    return view('displayAbout',['firstname' => $firstname,'lastname' => $lastname, 'age' => $age , 'gender' => $gender , 'address' => $address, 'contact' => $contact, 'email' => $email, 'data' => $data]);
*/
   
   public function displayDatas (Request $req) {
    $firstname = $req->input('firstname'); 
    $lastname = $req->input('lastname');
    $age = $req->input('age');
    $gender = $req->input('gender');
    $address = $req->input('address');
    $contact = $req->input('contact');
    $email = $req->input('email');

    $this->validate($req,[
      'firstname' =>'required|alpha',
      'lastname'  =>'required|alpha',
      'age'       =>'required|integer|min:2|between:18,70',
      'gender'  =>'required|alpha',
      'address'  =>'required|alpha',
      'contact'  =>'required|max:11',
      'email'  =>'required|alpha',
    ]);



    return view('displayAbout',['firstname' => $firstname,'lastname' => $lastname, 'age' => $age , 'gender' => $gender , 'address' => $address, 'contact' => $contact, 'email' => $email, 'data' => $data]);

    
   }




}
