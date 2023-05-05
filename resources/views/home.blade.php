<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
         @vite('resources/js/app.js')
    </head>
    <body>
        <div class="container">
            <div class="row gy-3">
                @foreach ($trains as $item)
                    <div class="col-12 col-md-4 h-100">
                        <div class="card p-3">
                            <h2>Company: {{$item->company}}</h2>
                            <h4>From: {{$item->departure_station}}</h4>
                            <h4>To: {{$item->arrival_station}}</h4>
                            <h5>Departure Time: {{$item->departure_time}}</h5>
                            <h5>Arrival Time: {{$item->arrival_time}}</h5>
                            <h6>CODE: <a href="{{route('details', $item->id)}}">{{$item->train_code}}</a></h6>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </body>
</html>
