<link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="text-center" "sm-4">
        <p><h1>🏀バスケットボール</h1></p>
    </div>
    <div class="main_visual" "sm-4">
        <img src="//www.asahicom.jp/olympics/2020/images/game/basketball.jpg" alt="試合中の写真">
    </div>
    
        <div class="row">
            <div class="col-sm-4">
                <div class="player">
                <a href="#">
                    <img alt="James Harden" src="//ak-static.cms.nba.com/wp-content/uploads/headshots/nba/latest/260x190/201935.png" onerror="this.onerror=null;this.src='//www.nba.com/.element/img/2.0/sect/statscube/players/large/default_nba_headshot_v2.png';"></img>
                </a>
                <div class='p'>注目Player</div>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="calendar">
                <a href="#">
                    <img src="images/calendar.png"></a>
                    <div class='p'>試合日程</div>
                </div>
            </div>
             
            <div class="col-sm-4">
                <div class="result">
                <a href="#">
                    <img src="images/cup.jpg">
                </a>
                <div class='p'>試合結果</div>
                </div>
            </div>
            
        <div class="row">　
            //ここに投票機能表示
            <div class="col-sm-4">
                @if (count($posts) > 0)
                    @include('posts.posts', ['posts' => $posts])
                @endif
            </div>
        </div>
            
        </div>
    </div>
@endsection