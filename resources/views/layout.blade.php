<body>
<div id="app">
    <div style="background-color: #343a40;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark container">
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-auto">
                    @php $locale = session()->get('locale'); @endphp
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            @switch($locale)
                                @case('en')
                                <img src="{{asset('https://upload.wikimedia.org/wikipedia/en/thumb/a/a4/Flag_of_the_United_States.svg/188px-Flag_of_the_United_States.svg.png')}}" style="width:20px"> English
                                @break
                                @case('ru')
                                <img src="{{asset('https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Flag_of_Russia.svg/375px-Flag_of_Russia.svg.png')}}" style="width:20px"> Руский
                                @break
                                @case('kz')
                                <img src="{{asset('https://upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Flag_of_Kazakhstan.svg/203px-Flag_of_Kazakhstan.svg.png')}}" style="width:20px"> Қазақша
                                @break
                            @endswitch
                            <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/en"><img src="{{asset('https://upload.wikimedia.org/wikipedia/en/thumb/a/a4/Flag_of_the_United_States.svg/188px-Flag_of_the_United_States.svg.png')}}" style="width:20px"> English</a>
                            <a class="dropdown-item" href="/ru"><img src="{{asset('https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Flag_of_Russia.svg/375px-Flag_of_Russia.svg.png')}}" style="width:20px"> Руский</a>
                            <a class="dropdown-item" href="/kz"><img src="{{asset('https://upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Flag_of_Kazakhstan.svg/203px-Flag_of_Kazakhstan.svg.png')}}" style="width:20px"> Қазақша</a>
                            
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <main class="py-4">
        @yield('content')
    </main>
</div>  
</body>
</html>