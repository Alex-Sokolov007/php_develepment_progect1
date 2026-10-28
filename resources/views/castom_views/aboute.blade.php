<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Побочная страница</title>
    <!-- vite(['resources/css/app.css', 'resources/js/app.js']) -->
    
</head>


<body>
    @include('blox/header')
    <main>
        
            @foreach($messages as $mes)
            <div class="mes">
<form action="/aboute/{{$mes->id}}/edit" method="POST">
               <input name="name" value="{{ $mes->name}}" >
                <textarea name="text_message">{{ $mes->text_message}}</textarea>
		<button type="submit">Обновить</button>
</form>
		<a href="/aboute/{{$mes->id}}"><p>подробнее</p></a>
<form action="/aboute/{{$mes->id}}/delete" method="POST">
    @csrf
    <button type="submit">Удалить</button>
</form>	
            </div>
                @endforeach
        
    </main>
    @include('blox/footer')

</body>
</html>
