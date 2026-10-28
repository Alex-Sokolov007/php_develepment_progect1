<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    {{-- <link rel="stylesheet" href="{{ asset('/css/main.css') }}">  --}}
    <link rel="stylesheet" href="{{ asset('css/main.css') }}?v={{ filemtime(public_path('css/main.css')) }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница созданная Великим и могучим (нет) саней</title>
    @vite(["resources/css/app.css"])
    {{-- @vite(["css/app.css"]) --}}

</head>


<!-- Окно вывода ошибок -->
@if ($errors->any())

    <div class="errors_div">
        {{-- <button class="close_button" id="closeBTN">x</button> --}}
        
        <ul>
            @foreach ($errors->all() as $err)
                <li translate="yes">{{ $err }}</li>
            @endforeach
        </ul>
    <h3 translate="yes">please try again</h3>

    </div>
    
@endif{{-- error frame --}}


<body>
    @include('blox/header')
    <main>
        <div class="from_form">
            <form action="/aboute" method="post" class="test_form">
                @csrf
                <input type="text" placeholder='Назови своё имя путник' name="name">
                <textarea placeholder='Ввидите букви' name="text_from_user"></textarea>

                <button type="submit">кнопка</button>
            </form>
        </div>   
    </main>
    @include('blox/footer')
    

</body>
</html>