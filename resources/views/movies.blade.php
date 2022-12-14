@extends('layout.app')

@section('page-title', Request::route()->getName())

@section('movies-container')
    <div class="container">
        <ul class="card-container">
            @foreach($movies as $card)
                <li class="card">
                    <h3>{{$card['title']}}</h3>
                    <p><strong>Data:</strong></p>
                    <p> {{$card['date']}}</p>
                    <p><strong>Voto:</strong></p>
                    <p>{{$card['vote']}}</p>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
