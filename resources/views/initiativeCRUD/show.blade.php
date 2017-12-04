@extends('layouts.app')
 
@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2> Show Initiatives</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('initiativeCRUD.index') }}"> Back</a>
	        </div>
	    </div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{ $item->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Location:</strong>
                {{ $cities[$item->location] }}
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Initiative Type</strong>
                @if( $item->is_pre)
					Pre Initiative
				
				@else
					Post Initiative
				
				@endif
            </div>
        </div><div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $item->description }}
            </div>
        </div><div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Start Date:</strong>
                {{ $item->start_date }}
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>End Date:</strong>
                {{ $item->end_date }}
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Donation Amount $:</strong>
                {{ $item->donation_amount }}
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Conducted by:</strong>
                {{ $item->conducted_by }}
            </div>
        </div>
	</div>
@endsection
