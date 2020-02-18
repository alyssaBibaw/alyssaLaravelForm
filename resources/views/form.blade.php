@extends('layouts.master')
@section('title','PHIL POST')
@section('form')


<div class="container">
	<center>

		<img src="{{ asset('image/phlpostLogo.png') }}">

		<button type="button" class="btn btn-primary btn-lg btn-block mt-2 mb-4" disabled="true"><strong>PART-I TO BE FILLED OUT BY APPLICANTS</strong></button>

	</center>


	<form method="POST" action="/insertData" enctype="multipart/form-data" id="insertData">
		{{ csrf_field() }}
		<div class="form-group row">   

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"><label for="name" class="col-form-label">Applicant Name:</label></div>
              
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                <span class="col-form-label-sm">Last Name</span>
              <input type="text" name="lastname" class="form-control" autocomplete="off">
                <span class="col-form-label-sm" id="lastname"></span>
            </div>
             
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
              <span class="col-form-label-sm">First Name</span>
                <input type="text" name="firstname" class="form-control"> 
                  <span class="col-form-label-sm" id="firstname"></span>
            </div>
          
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
              <span class="col-form-label-sm">Middle Name</span>
                <input type="text" name="middlename" class="form-control"> 
                  <span class="col-form-label-sm" id="middlename"></span>
            </div>
  		</div>

  	<center>
			<div class="form-group row">
	  			<div class="col-xl-12">
					<input type="submit"  class="btn btn-outline-success">

          <a href="/displayData" class="btn btn-outline-danger">Display</a>

				</div>
			</div>
		</center>

	</form>
</div>
@endsection
