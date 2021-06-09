<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            background-color: darkorange;
            text-align:center;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
        }
    </style>
</head>

<body>

    <h1>Ecco la mail della nuova auto</h1>

    <p>

        nome: {{$car -> name}},
        modello: {{$car -> model}}
    </p>
    
        piloti: 
        @foreach ($car -> pilots as $pilot)

            <p> 
                {{ $pilot -> name}} - {{ $pilot -> lastname}}
            </p>
            
        @endforeach
    


    
</body>
</html>