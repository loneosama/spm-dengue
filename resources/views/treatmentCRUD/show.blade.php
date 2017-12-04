@extends('layouts.app')
 
@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2> Show Initiatives</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('treatmentCRUD.index') }}"> Back</a>
	        </div>
	    </div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Treatment Name:</strong>
                {{ $item->treatment_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description of Treatment:</strong>
                {{ $item->description }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Treatment Type:</strong>
                {{ $treatment_types[$item->treatment_type] }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Treatment Origin:</strong>
                {{ $origins[$item->origin] }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Doctor Name:</strong>
                {{ $doctors[$item->dr_name] }}
				@if($item->is_foreign_doctor)
				<strong>This is a foreign Doctor</strong>
				@else
				<strong>This is not a foreign Doctor</strong>
				@endif
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description of Doctor:</strong>
                {{ $item->details }}
            </div>
        </div>
	</div>
@endsection


