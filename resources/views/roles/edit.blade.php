@extends('layouts.master')
 
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Edit Role</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
	        </div>
	    </div>
	</div>
	@include('layouts.notifications')
	{!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
	<div class="row">
	    <div class="col-md-12">
	        <div class="white-block">
	            <div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Display Name:</strong>
                {!! Form::text('display_name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
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
                <strong>Permissions:</strong>
                <ul class="check-list clearfix">
                @foreach($permission as $value)
                    <li class="col-sm-4">
                	<label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                	{{ $value->display_name }}</label>
                    </li>
                @endforeach
                </ul>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center submit-blk">
				<button type="submit" class="btn btn-primary">Submit</button>
        </div>
	</div>
            </div>
        </div>
    </div>
	{!! Form::close() !!}
    </div>
@endsection