@extends('layouts.app')
 
@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Create New Role</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
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
        {{$i=0}}
	{!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Display Name:</strong>
                {!! Form::text('display_name', null, array('placeholder' => 'Display Name','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'height:100px')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Permission:</strong>
                <br/>
                
                
                
                <table class="table table-bordered">
		<tr>
			
			<th><b>Name</b></th>
			<th><b>Access</b></th>
			<th><b>Denied</b></th>
			
		</tr>
	@foreach ($permission as $value)
	<tr>
            
		
		<td><b>{{ $value->name }}</b></td>
		<!--<td> {{ Form::radio('result[$i]', $value->id, false, ['class' => 'icheck']) }}</td>
                <td> {{ Form::radio('result[$i]', -1, true, ['class' => 'icheck']) }}</td>
                
              <td> {{ Form::radio('num?php echo $i; ?>', 1, false, ['class' => 'icheck']) }}</td>
                <td> {{ Form::radio('num?php echo $i; ?>', 2, true, ['class' => 'icheck']) }}</td>-->
                
               
                
               <td> {{ Form::radio('result['.$value->id.']', '1', false) }} </td>
               <td> {{ Form::radio('result['.$value->id.']', '0', true) }} </td>
		
	</tr>
	@endforeach
	</table>
	
        </br></br></br></br></br></br></br></br></br></br></br></br>
                
                
                
                
               <!-- @foreach($permission as $value)
                	<label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                	{{ $value->display_name }}</label>
                	<br/>
                @endforeach-->
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button type="submit" class="btn btn-success">Submit</button>
        </div>
           
	</div>
	{!! Form::close() !!}
        
     
        
        
        {!! Form::open(array('route' => 'roles.store2','method'=>'POST')) !!}
        {{ Form::text('permiss') }}
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button type="submit" class="btn btn-success">Submit</button>
        </div>
         {!! Form::close() !!}
@endsection