<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Events</title>
        <style>

        </style>
    </head>

    <body>
        <h1>{{$events->count()}} Events</h1>
            @foreach ($events as $event)
                <article>
                    <h1>{{ $event->name }}</h1>
                    <p>{{ $event->description }}</p>
                    <p>{{ $event->price }} euros</p>
                    <p>Lieu: {{ $event->location }}</p>
                    <p>Date: {{ $event->starts_at->format('d/m/Y à H:i:s') }}</p>
                </article>
                @if (!$loop->last)
                    <hr>
                @endif
            @endforeach

    </body>
</html>
