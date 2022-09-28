@extends('layout.app')

@section('page-title', 'Laravel Movies')

@section('movies-container')
    <div class="container">
        <ul class="card-container">
            @foreach($movies as $card)
                <li class="card">
                    <h3>{{$card['title']}}</h3>
                    <p>{{$card['date']}}</p>
                    <p>{{$card['vote']}}</p>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
