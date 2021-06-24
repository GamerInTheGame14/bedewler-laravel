@extends('layouts.app')

@section('content')
    <h1> Maglumat goşmak </h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{ Form::label('name', 'Ady') }}
            {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Garaýel']) }}
        </div>
        <div class="form-group">
            {{ Form::label('generation', 'Nesli') }}
            {{ Form::text('generation', '', ['class' => 'form-control', 'placeholder' => 'Gülaýym we Merdana diýen atlaryň neslinden']) }}
        </div>
        <div class="form-group">
            {{ Form::label('age', 'Ýaşy') }}
            {!! Form::number('age', '', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {{ Form::label('description', 'Giňişleýin') }}
            {{ Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Giňişleýin maglumat']) }}
        </div>
        <div class="form-group">
            {{ Form::file('cover_image') }}
        </div>
        {{ Form::submit('Ýatda sakla', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection