@extends('layouts.app')
 
@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Users Management</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
	        </div>
	    </div>
	</div>
	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
	@endif
       
        @if ($message = Session::get('successdel'))
		<div class="alert alert-danger">
			<p>{{ $message }}</p>
		</div>
	@endif
	<table class="table table-bordered">
		<tr>
			<th><b>No</b></th>
			<th><b>Name</b></th>
			<th><b>Email</b></th>
			<th><b>Roles</b></th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($data as $key => $user)
	<tr>
            
		<td><b>{{ ++$i }}</b></td>
		<td><b>{{ $user->name }}</b></td>
		<td><b>{{ $user->email }}</b></td>
		<td>
                    
                    
		
				
					<label>{{$user->roles->display_name}}</label>
				
		</td>
		<td>
			<a class="btn btn-success" href="{{ route('users.show',$user->id) }}">Show</a>
			<a class="btn btn-success" href="{{ route('users.edit',$user->id) }}">Edit</a>
			{!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        	{!! Form::close() !!}
		</td>
	</tr>
	@endforeach
	</table>
	{!! $data->render() !!}
        </br></br></br></br></br></br></br></br></br></br></br></br>
@endsection