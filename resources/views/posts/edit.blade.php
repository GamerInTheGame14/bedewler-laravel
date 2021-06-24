@extends('layouts.app')

@section('content')
    <h1> Maglumat goşmak </h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{ Form::label('name', 'Ady') }}
            {{ Form::text('name', $post->name, ['class' => 'form-control', 'placeholder' => 'Garaýel']) }}
        </div>
        <div class="form-group">
            {{ Form::label('generation', 'Nesli') }}
            {{ Form::text('generation', $post->generation, ['class' => 'form-control', 'placeholder' => 'Gülaýym we Merdana diýen atlaryň neslinden']) }}
        </div>
        <div class="form-group">
            {{ Form::label('age', 'Ýaşy') }}
            {!! Form::number('age', $post->age, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {{ Form::label('description', 'Giňişleýin') }}
            {{ Form::textarea('description', $post->description, ['class' => 'form-control', 'placeholder' => 'Giňişleýin maglumat']) }}
        </div>
        <div class="form-control">
            {{ Form::file('cover_image') }}
        </div>
        <br>
        {{ Form::hidden('_method', 'PUT') }}
        {{ Form::submit('Ýatda sakla', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection