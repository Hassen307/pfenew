@extends('layouts.app')
 
@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Role Management</h2>
	        </div>
	        <div class="pull-right">
	        	
	            <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a>
	           
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
			<th><b>No</b></th>
			<th><b>Name</b></th>
			<th><b>Description</b></th>
			<th width="280px"><b>Action</b></th>
		</tr>
	@foreach ($roles as $key => $role)
	<tr>
		<td><b>{{ ++$i }}</b></td>
		<td><b>{{ $role->display_name }}</b></td>
		<td><b>{{ $role->description }}</b></td>
		<td>
			<a class="btn btn-success" href="{{ route('roles.show',$role->id) }}">Show</a>
			@permission('role-edit')
			<a class="btn btn-success" href="{{ route('roles.edit',$role->id) }}">Edit</a>
			@endpermission
			@permission('role-delete')
			{!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        	{!! Form::close() !!}
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $roles->render() !!}
        </br></br></br></br></br></br></br></br></br></br></br></br>
@endsection