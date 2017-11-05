@extends('layouts.frontend.app')

@section('content')
    <section class="content-header">
        <h1>
            Comercio
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('frontend.comercios.show_fields')
                    <a href="{!! route('frontend.comercios.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
