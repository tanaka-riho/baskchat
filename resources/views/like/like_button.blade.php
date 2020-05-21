@if(Auth::check())
@if (Auth::user()->is_like($post->id))
        {!! Form::open(['route' => ['likes.unlike', $post->id], 'method' => 'delete']) !!}
            {!! Form::submit('取り消し', ['class' => "btn btn-outline-secondary btn-sm"]) !!}
        {!! Form::close() !!}
@else
        {!! Form::open(['route' => ['likes.like', $post->id]]) !!}
            {!! Form::submit('いいね！', ['class' => "btn btn-outline-warning btn-sm"]) !!}
        {!! Form::close() !!}
@endif
@endif