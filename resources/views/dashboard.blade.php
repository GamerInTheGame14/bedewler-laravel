@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <a href="/posts/create" class="btn btn-primary"> Maglumat goş </a>
                    <br><br><br>
                    <h3> Siziň ýüklän maglumatlaryňyz </h3>
                    <br><br><br>
                    <table class="table table-striped">
                        @if (count($posts) > 0)
                            @foreach ($posts as $post)
                                <tr>
                                    <th> {{ $post->name }} </th>
                                    <th>
                                        <a href="/posts/{{$post->id}}/edit" class="btn btn-info text-light">Üýtget</a>
                                    </th>
                                    <th>
                                        {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                                            {{ Form::hidden('_method', 'DELETE') }}
                                            {{ Form::submit('Öçürmek', ['class' => 'btn btn-danger']) }}
                                        {!! Form::close() !!}
                                    </th>
                                </tr>
                            @endforeach
                        @else 
                            <p>Maglumat tapylmady</p>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
