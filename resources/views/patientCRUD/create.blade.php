@extends('layouts.app')
 
@section('content')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  } );
  </script>
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Create New Patient</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('patientCRUD.index') }}"> Back</a>
	        </div>
	    </div>
	</div>
	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoops!</strong> There were some problems with your input.<br><br>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	{!! Form::open(array('route' => 'patientCRUD.store','method'=>'POST')) !!}
	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>First Name:</strong>
                {!! Form::text('first_name', null, array('placeholder' => ' first name','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Last Name:</strong>
                {!! Form::text('last_name', null, array('placeholder' => ' last name','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
             
			<strong>Gender:</strong>
                {!! Form::select('gender',['M'=>'Male','F'=>'Female']) !!}
            </div>
        </div>


        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">

                <strong>Date Of Birth </strong>
                {!! Form::date('dob') !!}

            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Address:</strong>
                {!! Form::text('address', null, array('placeholder' => ' address of patient','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
             
			<strong>City:</strong>
                {!! Form::select('city',['khi' => 'karachi','swl' => 'sahiwal','hyd' => 'hyderabad','mux' => 'multan','fbd' => 'faisalabad'],'khi') !!}
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>District:</strong>
                {!! Form::text('district', null, array('placeholder' => 'district','class' => 'form-control')) !!}
            </div>
        </div>


        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Contact Number:</strong>
                {!! Form::number('contact', null, array('placeholder' => 'contact num of patient','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

                <strong>Blood Group:</strong>
                {!! Form::select('bloodgroup',['O+'=>'O+','O-'=>'O-','A+'=>'A+','A-'=>'A-','AB+'=> 'AB+','AB-'=>'AB-']) !!}
            </div>
        </div>



        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
             

			    <strong>Diagnosis:</strong>
                {!! Form::textarea('diagnosed', null, array('placeholder' => 'Diagnosed','class' => 'form-control','style'=>'height:100px')) !!}
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
             

			<strong>Has been diagnosed before:</strong>
            Yes : {!! Form::radio('is_diagnosed_before', 1); !!}
            No : {!! Form::radio('is_diagnosed_before',0)!!}   
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button type="submit" class="btn btn-primary">Submit</button>
        </div>
	</div>
	{!! Form::close() !!}
@endsection