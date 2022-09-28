
@extends('layout.app')

@section('page-title', 'Suggest Movies')

@section('movies-container')
    <div class="container form-container">
        <div class="sub-form-container">
            <h2>Suggest a Movie</h2>
            <form action="" method="post">
                <label for="nameMovie">Movie Name:</label>
                <input type="text" name="nameMovie" required />
                <label for="yearMovie">Movie Year:</label>
                <input type="text" name="yearMovie" />
                <label>Is the movie avaible?</label>
                <label for="status">Yes</label>
                <input type="radio" name="status" value="yes" required />
                <label for="status">No</label>
                <input type="radio" name="status" value="no" required />
                <button type="submit">Enter</button>
            </form>
        </div>
    </div>
@endsection
