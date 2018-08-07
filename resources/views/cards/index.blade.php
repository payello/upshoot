<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Upshoot - Cards</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>

<body>
    <div class="container-fluid">
        <h1>Upshoot Project</h1>
        <h2>Shuffled Playing Cards</h2>
        <div class="row">
            <div class="d-flex flex-row playingCard">
                @foreach($cards->shuffle() as $card)
                    <div class="card p-2">
                        {{ substr($card, 0, strrpos($card, ' '))}}
                        <img class="suitImage" src="{{ asset('/images/' . explode(' ', $card)[1] . '.png') }}"
                             alt="{{ explode(' ', $card)[1] }}">
                    </div>
                @endforeach
            </div>
        </div>
        <h2>Sorted Playing Cards</h2>
        <div class="row">
            <div class="d-flex flex-row playingCard">
                @foreach($cards as $card)
                    <div class="card p-2">
                        {{ substr($card, 0, strrpos($card, ' '))}}
                        <img class="suitImage" src="{{ asset('/images/' . explode(' ', $card)[1] . '.png') }}"
                             alt="{{ explode(' ', $card)[1] }}">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>