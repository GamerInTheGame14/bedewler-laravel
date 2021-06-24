@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-dark"> Yza </a>
    <br><br>
    <h1>
        {{ $post->name }}
    </h1>
    <br>
    <img style="width: 100%" class="img-thumbnail" src="../storage/cover_images/{{$post->cover_image}}" alt="here is cover">
    <br><br>
    <h4>
        {{ $post->generation }}
    </h4>
    <div>
        <p>
            {{ $post->description }}
        </p>
    </div>
    <hr>
    <small>
        {{ $post->created_at }} senesinde, <span class="text-success">{{ $post->user->name }}</span> tarapyndan döredildi
    </small>
    <hr>
    <div class="d-flex justify-content-between">
        @if (!Auth::guest())
            @if (Auth::user()->id == $post->user->id)
                <a href="/posts/{{$post->id}}/edit" class="btn btn-info text-light">Üýtget</a>
                {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Öçürmek', ['class' => 'btn btn-danger']) }}
                {!! Form::close() !!}
            @endif
        @endif
    </div>
    
@endsection