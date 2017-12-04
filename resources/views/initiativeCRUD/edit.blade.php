@extends('layouts.app')
 
@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Edit New Initiative</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('initiativeCRUD.index') }}"> Back</a>
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
	{!! Form::model($item, ['method' => 'PATCH','route' => ['initiativeCRUD.update', $item->initiative_id]]) !!}
	<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Title:</strong>
                {!! Form::text('name', null, array('placeholder' => 'name','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
             
			<strong>Location:</strong>
				{!! Form::select('location',['khi' => 'karachi','swl' => 'sahiwal','hyd' => 'hyderabad','mux' => 'multan','fbd' => 'faisalabad']) !!}
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
             

			    <strong>Description:</strong>
                {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'height:100px')) !!}
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
             
			<strong>Previously Initiative Taken?:</strong>
                {!! Form::checkbox('is_pre',1) !!}

            </div>
        </div><div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
             
			<strong>Start Date:</strong>
                {!! Form::date('start_date') !!}
            </div>
        </div><div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
             
			<strong>End Date:</strong>
                {!! Form::date('end_date') !!}
            </div>
        </div><div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
             
			<strong>Conducted By:</strong>
                {!! Form::text('conducted_by', null, array('placeholder' => 'Conducted_by','class' => 'form-control')) !!}
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
             
			<strong>Donation amount:</strong>
                {!! Form::number('donation_amount', null, array('placeholder' => 'Donation Amount','class' => 'form-control','style' =>'width:450px')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button type="submit" class="btn btn-primary">Submit</button>
        </div>
	</div>
	{!! Form::close() !!}
@endsection
