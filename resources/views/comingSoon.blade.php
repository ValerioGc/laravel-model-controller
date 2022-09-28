@extends('layout.app')

@section('page-title', 'Coming Soon')

@section('movies-container')
    <div class="container">
        <ul class="card-container">
            @foreach($movies as $card)
                <li class="card">{{$card['title']}}</li>
            @endforeach
        </ul>
    </div>
@endsection
