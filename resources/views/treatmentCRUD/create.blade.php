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
	            <h2>Create New Dengue Treatment</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('treatmentCRUD.index') }}"> Back</a>
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
	{!! Form::open(array('route' => 'treatmentCRUD.store','method'=>'POST')) !!}
	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong> Treatment Name:</strong>
                {!! Form::text('treatment_name', null, array('placeholder' => ' eg: vaccination campaign','class' => 'form-control')) !!}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
             
			<strong>Treatment Type :</strong>
                {!! Form::select('treatment_type',['vn' => 'vaccination','bltr' => 'bleeding treatment','fvtr' => 'fever treatment','lab' => 'labortary tests','clinic' => 'clinical treatment']) !!}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

                <strong>Origin:</strong>
                {!! Form::select('origin',['r' => 'testing','bltr' => 'bleeding treatment','fvtr' => 'fever treatment','lab' => 'labortary tests','clinic' => 'clinical treatment']) !!}
            </div>
        </div>


        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
             

			    <strong>Description of Treatment:</strong>
                {!! Form::textarea('description', null, array('placeholder' => 'Description of treatment','class' => 'form-control','style'=>'height:100px')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

                <strong>Doctor Name:</strong>
                {!! Form::select('dr_name',['jb' => 'Dr james bond ','mj' => 'Dr micheal jackson','jc' => 'Dr jackie chan','ws' => 'Dr william stallins','ew' => 'Dr ema watson']) !!}
            </div>
        </div>

		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
             
			<strong>Handled by  foreign Doctor:</strong>
            <br>
               <label>yes </label> {!! Form::radio('is_foreign_doctor',1) !!}
             <br>  <label> no  </label> {!! Form::radio('is_foreign_doctor', 0) !!}

            </div>
        </div>


        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
             

			    <strong>Description of Doctor:</strong>
                {!! Form::textarea('details', null, array('placeholder' => 'Description of doctor','class' => 'form-control','style'=>'height:100px')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button type="submit" class="btn btn-primary">Submit</button>
        </div>
	</div>
	{!! Form::close() !!}
@endsection