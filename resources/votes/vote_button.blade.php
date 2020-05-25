@if(Auth::check())
@if (Auth::user()->is_like($post->id))
        {!! Form::open(['route' => ['votes.unvote', $vote->id], 'method' => 'delete']) !!}
            {!! Form::submit('取り消し', ['class' => "btn btn-outline-secondary btn-sm"]) !!}
        {!! Form::close() !!}
@else
        {!! Form::open(['route' => ['votes.vote', $vote->id]]) !!}
            {!! Form::submit('勝つ', ['class' => "btn btn-outline-danger btn-sm"]) !!}
        {!! Form::close() !!}
@endif
@endif