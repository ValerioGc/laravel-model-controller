@extends('layout.app')

@section('page-title', 'Home')

@section('movies-container')
    <div class="home-container">
        <h1>Seleziona una <strong>categoria</strong> per vedere i film</h1>
        <div class="container-links">
            <ul class="links-container">
                @foreach($links as $link)
                    <a href="{{route($link)}}" class="link">
                        {{$link}}
                    </a>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
