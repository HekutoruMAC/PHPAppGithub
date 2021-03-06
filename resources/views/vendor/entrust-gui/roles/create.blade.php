@extends('layouts.app')

@section('heading', 'Create Role')

@section('content')



<section class="content-header">
        <h1 class="pull-left">Nuevo Rol</h1>
        <!--Estos br son para darle el espacio del search-->
        <br/>
        <br/>
        <br/>
        <br/>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('entrust-gui::roles.index') !!}">Volver a Roles</a>
        </h1>
</section>

<div class="content">

  <div class="clearfix"></div>

    <div class="clearfix"></div>
  	<div class="box box-primary">
  	    <div class="box-body">


			<form action="{{ route('entrust-gui::roles.store') }}" method="post" role="form">
			    @include('entrust-gui::roles.partials.form')
			    <button type="submit" class="btn btn-labeled btn-primary"><span class="btn-label"><i class="fa fa-plus"></i></span>{{ trans('entrust-gui::button.create') }}</button>
			    <a class="btn btn-labeled btn-default" href="{{ route('entrust-gui::roles.index') }}"><span class="btn-label"><i class="fa fa-chevron-left"></i></span>{{ trans('entrust-gui::button.cancel') }}</a>
			</form>

		</div>
 	 </div>
</div>

@endsection
