@extends('layouts.app')

@section('content')
    
    <div class="text-center" "sm-4">
        <p><h1>Who will Win??</h1></p>
        <p><h2>7月26日（日） 10:00 - 12:00</h2></p>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="japan">
                    <a href="{{ action('GamesController@index') }}">
                    <img src="{{ Storage::disk('s3')->url('japan.png') }}"</a>
                    @if (Auth::id() == $vote->user_id)
                        {!! Form::open(['route' => ['votes.destroy', $vote->id], 'method' => 'delete']) !!}
                            {!! Form::submit('勝つ', ['class' => 'btn btn-outline-primary btn-sm']) !!}
                        {!! Form::close() !!}
                    @endif
                </div>
            </div>
            
            <div class="col-sm-4">
              <div class="text-center">
                <h2>VS</h2>
              </div>
              
            <div class="col-sm-4">
                <div class="usa">
                    <a href="{{ action('GamesController@index') }}">
                    <img src="{{ Storage::disk('s3')->url('usa.png') }}"</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
            <div class="col-sm-4">
       
        
@endsection