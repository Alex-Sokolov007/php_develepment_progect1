<header id="header">
    <div class="img_in_header"> 
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZyRHEuXbpgISQ_TO8JIoI0gLP9d9n7eO2jpaxJjPqdg&s=10" alt="">
        <h2>Laravel project from Sanek</h2>
    </div>
    <nav>
        <ul class="header_nav">
            <a href="{{ route("home") }}"><li>Главная</li></a>
            <a href="{{route("aboute")}}"><li>Побочная</li></a>
            <a href="/aboute/4"><li>Побочная с id</li></a>
            <a href=""><li>Ещё какая-то</li></a>
        </ul>
    </nav>
</header>