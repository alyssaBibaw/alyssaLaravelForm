@extends('layouts.master')
@section('title','Assignment')
@section('form')


<div class="container">

 <button type="button" class="btn btn-primary btn-lg btn-block mt-2 mb-4" disabled="true"><strong>Alyssa Montemayor</strong></button>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Assignment:</h6>
    </div>
    <div class="card-body">
      <form method="POST" action="/displayDatas" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group row">   
                
              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                  <span class="col-form-label-sm">First Name</span>
                <input type="text" name="firstname" class="form-control">
                  <span class="col-form-label-sm" id="firstname"></span>
              </div>
               
              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                <span class="col-form-label-sm">Last Name</span>
                  <input type="text" name="lastname" class="form-control"> 
                    <span class="col-form-label-sm" id="lastname"></span>
              </div>
            
              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                <span class="col-form-label-sm">Age</span>
                  <input type="number" name="age" class="form-control"> 
                    <span class="col-form-label-sm" id="age"></span>
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
    </div>
  </div>

</div>
@endsection
