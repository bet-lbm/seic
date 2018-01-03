@extends('layouts.base')

@section('content')
	<div class="page-title">
		<div>
	    	<h1><i class="fa fa-users"></i> <small> Alumnos</small> </h1>
	  	</div>
	  	<div>
	    	<a class="btn btn-primary btn-flat" href="{{ route('alumnos.create') }}"><i class="fa fa-lg fa-plus"></i></a>
	 	 </div>
	</div>	
  	<alumnos></alumnos>    
@endsection