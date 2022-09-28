<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yeld('page-name')</title>
    </head>
    <body>
        <div class="container">
            <ul class="card-container">
                @foreach($movies as $card)
                    <li class="card">$card</li>
                @endforeach
            </ul>
        </div>
    </body>
</html>
