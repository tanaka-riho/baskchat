<link rel="stylesheet" href="{{ asset('css/country.css') }}">
@extends('layouts.app')

@section('content')
<h1 class="riho" style="text-align:center">注目Player</h1>

<div class="container">     
    <div class="row">
        <div class="col-sm-4">
            <div class="japan">
                <a href="{{ action('PlayersController@index') }}">
                    <img src="{{ Storage::disk('s3')->url('japan.png') }}">
                <div class='p'>日本
                </div>
                </a>
            
            
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="calendar">
                <a href="{{ action('PlayersController@index') }}">
                    <img src="{{ Storage::disk('s3')->url('usa.jpg') }}">
                    <div class='p'>アメリカ</div>
                    </a>
                    
                </div>
            </div>
             
            <div class="col-sm-4">
                <div class="result">
                <a href="{{ action('PlayersController@index') }}">
                    <img src="{{ Storage::disk('s3')->url('arzentin.png') }}">
                <div class='p'>アルゼンチン</div>
                </a>
                
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="calendar">
                <a href="{{ action('PlayersController@index') }}">
                    <img src="{{ Storage::disk('s3')->url('spein.png') }}">
                    <div class='p'>スペイン</div>
                    </a>
                    
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="calendar">
                <a href="{{ action('PlayersController@index') }}">
                    <img src="{{ Storage::disk('s3')->url('france.jpg') }}">
                    <div class='p'>フランス</div>
                    </a>
                    
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="calendar">
                <a href="{{ action('PlayersController@index') }}">
                    <img src="{{ Storage::disk('s3')->url('naigeria.png') }}">
                    <div class='p'>ナイジェリア</div>
                    </a>
                    
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="calendar">
                <a href="{{ action('PlayersController@index') }}">
                    <img src="{{ Storage::disk('s3')->url('iran.png') }}">
                    <div class='p'>イラン</div>
                    </a>
                    
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="calendar">
                <a href="{{ action('PlayersController@index') }}">
                    <img src="{{ Storage::disk('s3')->url('australia.png') }}">
                    <div class='p'>オーストラリア</div>
                    </a>
                    
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="calendar">
                <a href="{{ action('PlayersController@index') }}">
                    <img src="{{ Storage::disk('s3')->url('mitei.png') }}">
                    <div class='p'>未定</div>
                    </a>
                    
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="calendar">
                <a href="{{ action('PlayersController@index') }}">
                    <img src="{{ Storage::disk('s3')->url('mitei.png') }}">
                    <div class='p'>未定</div>
                    </a>
                    
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="calendar">
                <a href="{{ action('PlayersController@index') }}">
                    <img src="{{ Storage::disk('s3')->url('mitei.png') }}">
                    <div class='p'>未定</div>
                    </a>
                    
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="calendar">
                <a href="{{ action('PlayersController@index') }}">
                    <img src="{{ Storage::disk('s3')->url('mitei.png') }}">
                    <div class='p'>未定</div>
                    </a>
                    
                </div>
            </div>

@endsection