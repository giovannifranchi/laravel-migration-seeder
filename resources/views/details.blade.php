<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details</title>
    @vite('resources/js/app.js')
</head>
<body>

    <div class="container">
        <h1>Train {{$train->train_code}} Details</h1>
        <div class="card">
            <h3>Wagons: {{$train->n_wagons}}</h3>
            <h3>On Time: {{$train->on_time ? 'yes' : 'delay'}}</h3>
            <h3>Cancelled: {{$train->cancelled ? 'yes' : 'no'}}</h3>
        </div>
    </div>
    
</body>
</html>