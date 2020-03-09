@extends('layouts.master')
@section('title','PHIL POST')
@section('form')


<div class="container">
	<center>

		<img src="{{ asset('image/phlpostLogo.png') }}">

		<button type="button" class="btn btn-primary btn-lg btn-block mt-2 mb-4" disabled="true"><strong>LIST OF DATA</strong></button>

	</center>



  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">List of Data</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Lastname</th>
              <th>Firstname</th>
              <th>Middlename</th>
              @foreach($user as $users)              
            </tr>
          </thead>
          
          <tbody>
            <tr>
            
              <td>{{ $users->lastname }} </td>
              <td>{{ $users->firstname }} </td>
              <td>{{ $users->middlename }} </td>


            </tr>
          </tbody>
              @endforeach
        </table>
      </div>
    </div>
  </div>



</div>

@endsection
