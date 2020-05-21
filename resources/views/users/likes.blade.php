@extends('layouts.app')

@section('content')
    <div class="row">
       
        <div class="col-sm-8">
            @include('users.navtabs', ['user' => $user])
            @include('posts.posts', ['posts' => $posts])
        </div>
    </div>
@endsection