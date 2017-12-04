@extends('layouts.app')
 
@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Patients CRUD</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('patient-create')
	            <a class="btn btn-success" href="{{ route('patientCRUD.create') }}"> Create New Patient </a>
	            @endpermission
	        </div>
	    </div>
	</div>
	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
	@endif
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Diagnosis</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($items as $key => $item)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $item->first_name }} {{$item->last_name}}</td>
		<td>{{ $item->diagnosed }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('patientCRUD.show',$item->patients_id) }}">Show</a>
			@permission('patient-edit')
			<a class="btn btn-primary" href="{{ route('patientCRUD.edit',$item->patients_id) }}">Edit</a>
			@endpermission
			@permission('patient-delete')
			{!! Form::open(['method' => 'DELETE','route' => ['patientCRUD.destroy', $item->patients_id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        	{!! Form::close() !!}
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $items->render() !!}
@endsection
