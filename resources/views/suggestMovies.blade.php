
@extends('layout.app')

@section('page-title', 'Suggest Movies')

@section('movies-container')
    <div class="container form-container">
        <form action="" method="get">
            <label for="nameMovie">Movie Name:</label>
            <input type="text" name="nameMovie" required />
            <label for="yearMovie">Movie Year:</label>
            <input type="text" name="yearMovie" />
            <label>Is the movie avaible?</label>
            <label for="status">Yes</label>
            <input type="radio" name="status" value="yes" />
            <label for="status">No</label>
            <input type="radio" name="status" value="no" />
            <button type="submit">Enter</button>
        </form>
    </div>
@endsection
