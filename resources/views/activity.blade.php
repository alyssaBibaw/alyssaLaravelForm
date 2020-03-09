@extends('layouts.master')
@section('title','Activity')
@section('form')


<div class="container">

 <button type="button" class="btn btn-primary btn-lg btn-block mt-2 mb-4" disabled="true"><strong>Alyssa Montemayor</strong></button>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Activity:</h6>
    </div>
    <div class="card-body">
      <form method="POST" action="/displayDatas" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group row">   
                
              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                  <span class="col-form-label-sm">First Name</span>
                <input type="text" name="firstname" class="form-control">
                <div class="text-danger"> {{$errors->first("firstname")}} </div> <br>
                  <span class="col-form-label-sm" id="firstname"></span>
              </div>
               
              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                <span class="col-form-label-sm">Last Name</span>
                  <input type="text" name="lastname" class="form-control"> 
                  <div class="text-danger"> {{$errors->first("lastname")}} </div> <br>
                  <span class="col-form-label-sm" id="lastname"></span>
                
              </div>
            
              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                <span class="col-form-label-sm">Age</span> 
                  <input type="number" name="age" class="form-control"> 
                  <div class="text-danger"> {{$errors->first("age")}} </div> <br>
                    <span class="col-form-label-sm" id="age"></span>
                </div>
              
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                <span class="col-form-label-sm">Gender</span> <br>
                  <input type="radio" name="gender" value="Male">Male <br>
                   <input type="radio" name="gender" value="Female">Female <br>
                    <div class="text-danger"> {{$errors->first("gender")}} </div> <br>
                    <span class="col-form-label-sm" id="gender"></span>
                   
                </div>
                
             <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                <span class="col-form-label-sm">Address</span>
                  <input type="text" name="address" class="form-control"> 
                   <div class="text-danger"> {{$errors->first("address")}} </div> <br>
                    <span class="col-form-label-sm" id="address"></span>

              </div>
                
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                <span class="col-form-label-sm">Contact</span> 
                  <input type="number" name="contact" class="form-control"> 
                   <div class="text-danger"> {{$errors->first("contact")}} </div> <br>
                    <span class="col-form-label-sm" id="contact"></span>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                <span class="col-form-label-sm">Email</span>
                  <input type="text" name="email" class="form-control"> 
                   <div class="text-danger"> {{$errors->first("email")}} </div> <br>
                    <span class="col-form-label-sm" id="email"></span>

              </div>

        </div>
                   
              </div>


          <center>
            <div class="form-group row">
                <div class="col-xl-12">
                <input type="submit"  class="btn btn-outline-success">
              </div>
            </div>
          </center>

      </form>
      <br>
      @if(count($errors) > 0 )
      <div class="alert alert-danger"></div>
      @foreach ($errors-> all() as $err)
      <br>
      {{$err}}
      @endforeach

</div>
@endif 


    </div>
  </div>

</div>
@endsection
