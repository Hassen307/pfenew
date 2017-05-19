@extends('layouts.app')
 
@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Users Management</h2>
	        </div>
	        
	    </div>
	</div>
	
	<table class="table table-bordered">
		<tr>
			<th><b>No</b></th>
			<th><b>Name</b></th>
			<th><b>Access</b></th>
			<th><b>Denied</b></th>
			
		</tr>
	@foreach ($data as $key => $permission)
	<tr>
            
		<td><b>{{ ++$i }}</b></td>
		<td><b>{{ $permission->name }}</b></td>
		<td><b></b></td>
                <td>			
		</td>
		
	</tr>
	@endforeach
	</table>
	{!! $data->render() !!}
        </br></br></br></br></br></br></br></br></br></br></br></br>
@endsection