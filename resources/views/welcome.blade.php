<link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

@extends('layouts.app')

@section('content')
     
    <h1 class="riho" style="text-align:center">🏀バスケットボール</h1>
        
    
     <div class="container">      
    <div class="main_visual" "col-sm-4">
        <img src="{{ Storage::disk('s3')->url('basketball.jpg') }}" alt="試合中の写真">
        
    </div>
    
        <div class="row">
            <div class="col-sm-4">
                <div class="player">
                <a href="{{ action('CountriesController@index') }}">
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
            <div class="col-sm-4">
            </div>    
            
            <div class="col-sm-6">
                @include('posts.posts', ['posts' => $posts])
            </div>
            <div class="col-sm-3">
            @if(Auth::check())
            @if (Auth::id() == $user->id)
                {!! Form::open(['route' => 'posts.store']) !!}
                    <div class="form-group">
                        {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '2']) !!}
                        {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                    </div>
                {!! Form::close() !!}
            @endif
            @endif
            </div>
        </div>
            
        </div>
    </div>
@endsection