@extends('layouts.app')
 
@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Edit Treatment </h2>
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
	{!! Form::model($item, ['method' => 'PATCH','route' => ['treatmentCRUD.update', $item->treatments_id]]) !!}
	<div class="row">
		div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6">
			<div class="form-group">
				<strong> Treatment Name:</strong>
				{!! Form::text('name', null, array('placeholder' => ' eg: vaccination campaign','class' => 'form-control')) !!}
			</div>
		</div>


		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">

				<strong>Gender:</strong>
				{!! Form::select('treatment_type',['vn' => 'vaccination','bltr' => 'bleeding treatment','fvtr' => 'fever treatment','lab' => 'labortary tests','clinic' => 'clinical treatment']) !!}
			</div>
		</div>


		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">

				<strong>Gender:</strong>
				{!! Form::select('treatment_type',['vn' => 'vaccination','bltr' => 'bleeding treatment','fvtr' => 'fever treatment','lab' => 'labortary tests','clinic' => 'clinical treatment']) !!}
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

				<strong>Handled by  foreign Doctor:</strong>

				{!! Form::checkbox('is_foreign_doctor',1) !!}
				{!! Form::checkbox('is_foreign_doctor',0) !!}

			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button type="submit" class="btn btn-primary">Submit</button>
        </div>
	</div>
	{!! Form::close() !!}
@endsection
