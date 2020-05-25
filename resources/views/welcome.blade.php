<link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="text-center" "sm-4">
        <p><h1>🏀バスケットボール</h1></p>
    </div>
    <div class="main_visual" "sm-4">
        <img src="{{ Storage::disk('s3')->url('basketball.jpg') }}" alt="試合中の写真">
        
    </div>
    
        <div class="row">
            <div class="col-sm-4">
                <div class="player">
                <a href="#">
                    <img src="{{ Storage::disk('s3')->url('Stephen-c.png') }}"
                    </a>
                <div class='p'>注目Player</div>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="calendar">
                <a href="{{ action('GamesController@index') }}">
                    <img src="{{ Storage::disk('s3')->url('Tokyo-logo.png') }}"</a>
                    <div class='p'>試合日程</div>
                </div>
            </div>
             
            <div class="col-sm-4">
                <div class="result">
                <a href="#">
                    <img src="{{ Storage::disk('s3')->url('メダル.jpg') }}"
                </a>
                <div class='p'>試合結果</div>
                </div>
            </div>
        
        <div class="row">
            <div class="col-sm-6">
            </div>    
            //ここに投票機能表示
            @include('votes.index', ['votes' => $votes])
            <div class="col-sm-6">
                @include('posts.posts', ['posts' => $posts])
            </div>
        </div>
            
        </div>
    </div>
@endsection