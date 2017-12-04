@extends('layouts.app')
 
@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Initiatives CRUD</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('initiative-create')
	            <a class="btn btn-success" href="{{ route('initiativeCRUD.create') }}"> Create New Item</a>
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
			<th>Title</th>
			<th>Location</th>
			<th>Start Date</th>
			<th>End Date</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($items as $key => $item)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $item->name }}</td>
		<td>{{ $cities[$item->location] }}</td>
		<td>{{ $item->start_date}}</td>
		<td>{{ $item->end_date}}</td>
		<td>
			<a class="btn btn-info" href="{{ route('initiativeCRUD.show',$item->initiative_id) }}">Show</a>
			@permission('initiative-edit')
			<a class="btn btn-primary" href="{{ route('initiativeCRUD.edit',$item->initiative_id) }}">Edit</a>
			@endpermission
			@permission('initiative-delete')
			{!! Form::open(['method' => 'DELETE','route' => ['initiativeCRUD.destroy', $item->initiative_id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        	{!! Form::close() !!}
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $items->render() !!}
@endsection
