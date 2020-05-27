<header class="sm-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark"> 
        <a class="navbar-brand" href="/">Tokyo2020</a>
         
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                
             @if (Auth::check())
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item">{!! link_to_route('users.show', 'マイページ', ['id' => Auth::id()]) !!}</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><a href="{{ action('CountriesController@index') }}">注目Player</a></li>
                            <li class="dropdown-item"><a href="{{ action('GamesController@index') }}">試合日程</a></li>
                            <li class="dropdown-item"><a href="#">試合結果</a></li>
                            <li class="dropdown-item"><a href="#">予想投票</a></li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item">{!! link_to_route('logout.get', 'ログアウト') !!}</li>
                        </ul>
                    </li>
                @else
                    {!! link_to_route('signup.get', '会員登録', [], ['class' => 'btn btn-outline-light btn-sm']) !!}
                    {!! link_to_route('login', 'ログイン', [], ['class' => 'btn btn-outline-light btn-sm']) !!}
                @endif
            </ul>
        </div>
    </nav>
</header>    