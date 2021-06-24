@extends('layouts.app')

@section('content')
    <h1> Bedewler </h1>
    <br><br><br>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width: 100%" class="img-thumbnail" src="storage/cover_images/{{$post->cover_image}}" alt="here is cover">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3>
                            <a href="/posts/{{$post->id}}">{{ $post->name }}</a>
                        </h3>
                        <p>
                            {{ $post->generation }}
                        </p>
                        <small>
                            {{ $post->created_at }} senesinde, <span class="text-success">{{ $post->user->name }}</span> tarapyndan döredildi
                        </small>
                    </div>
                </div>
            </div>
            <br><br><br>
        @endforeach
        {{ $posts }}
    @else
        <p>Hiç hili bedew barada maglumat ýok</p>
    @endif
@endsection