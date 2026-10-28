<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сообщение № {{$mes->id }}</title>
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
	<div class="mes">
            <h1>{{ $mes->name}}</h1>
            <p>{{ $mes->text_message}}</p> 
 </div>	    
</body>
</html>
