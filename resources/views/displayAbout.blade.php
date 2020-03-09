@extends('layouts.master')
@section('title','Assignment')
@section('form')


<div class="container">
	<center>

		<button type="button" class="btn btn-primary btn-lg btn-block mt-2 mb-4" disabled="true"><strong>LIST OF DATA</strong></button>

	</center>



  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Activity</h6>
    </div>
    
    <div class="card-body">
    	<p>First Name: {{ $firstname }}</p>
    	<p>Last Name : {{ $lastname }}</p>
    	<p>Age : {{ $age }}</p>
      <p>Gender : {{ $gender }}</p>
      <p>Nickname : {{ $data }}</p>
      <p>Address : {{ $address }}</p>
      <p>Contact : {{ $contact }}</p>
      <p>Email : {{ $email }}</p>
    </div>
  </div>

  <center>
	<div class="form-group row">
	    <div class="col-xl-12">
	    <a class="btn btn-outline-success" href="/activity"> GO BACK</a>
	  </div>
	</div>
	</center>

</div>


@endsection
