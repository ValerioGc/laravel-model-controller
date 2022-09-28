@extends('layout.app')

@section('page-title', 'Laravel Movies')

@section('movies-container')
    <ul class="card-container">
        @foreach($movies as $card)
            <li class="card">$card</li>
        @endforeach
    </ul>
@endsection
