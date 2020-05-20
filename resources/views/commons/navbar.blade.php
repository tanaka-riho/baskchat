<header class="sm-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark"> 
        <a class="navbar-brand" href="/">Tokyo2020</a>
         
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                {!! link_to_route('signup.get', '会員登録', [], ['class' => 'btn btn-outline-light btn-sm']) !!}
                <li class="nav-item"><a href="#" class="nav-link">ログイン</a></li>
            </ul>
        </div>
    </nav>
</header>