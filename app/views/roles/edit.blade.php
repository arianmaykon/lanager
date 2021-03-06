@extends('layouts.default')
@section('content')
	@include('layouts.default.title')
	@include('layouts.default.alerts')

	{{ Form::model($role, ['route' => ['roles.update', $role->id], 'method' => 'PUT', 'class' => 'form-horizontal']) }}
		@include('roles.partials.form')
	{{ Form::close() }}

@endsection
