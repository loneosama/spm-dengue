@extends('layouts.app')
 
@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Treatment CRUD</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('treatment-create')
	            <a class="btn btn-success" href="{{ route('treatmentCRUD.create') }}"> Create New treatment </a>
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
			<th>Treatment Name</th>
			<th>Treatment Type</th>
			<th>Description</th>
			<th>Doctor</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($items as $key => $item)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $item->treatment_name }}</td>
		<td>{{ $treatment_types[$item->treatment_type] }}</td>
		<td>{{ $item->description }}</td>
		<td>{{ $doctors[$item->dr_name] }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('treatmentCRUD.show',$item->treatments_id) }}">Show</a>
			@permission('treatment-edit')
			<a class="btn btn-primary" href="{{ route('treatmentCRUD.edit',$item->treatments_id) }}">Edit</a>
			@endpermission
			@permission('treatment-delete')
			{!! Form::open(['method' => 'DELETE','route' => ['treatmentCRUD.destroy', $item->treatments_id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        	{!! Form::close() !!}
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $items->render() !!}
@endsection
