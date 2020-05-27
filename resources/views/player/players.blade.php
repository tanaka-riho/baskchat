@extends('layouts.app')

@section('content')
<h1>選手一覧</h1>

<div class="container">  
<div class="row">
    <img src="{{ Storage::disk('s3')->url('ぱちむら.jpg') }}" height=100px>
    <img src="{{ Storage::disk('s3')->url('Stephen-c.png') }}" height=100px>    
    <img src="{{ Storage::disk('s3')->url('ザイオン.jpg') }}" height=100px>
    <img src="{{ Storage::disk('s3')->url('テイタム.png') }}" height=100px>

    
    
</div>
 @foreach($players as $player)

     <table class="table table-bordered">
        <tr>
            <th>選手名</th>
            <td>{{ $player->name }}</td>
        </tr>
        <tr>
            <th>ポイント</th>
            <td>{{ $player->information }}</td>
        </tr>
        <tr>
            <th>国</th>
            <td>{{ $player->country_id }}</td>
        </tr>
    </table>

@endforeach

@endsection