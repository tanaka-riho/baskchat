<ul class="nav nav-tabs nav-justified mb-3">
    <li class="nav-item"><a href="{{ route('users.show', ['id' => $user->id]) }}" class="nav-link {{ Request::is('users/' . $user->id) ? 'active' : '' }}">TimeLine <span class="badge badge-secondary">{{ $count_posts }}</span></a></li>
    <li class="nav-item"><a href="{{ route('users.likes', ['id' => $user->id]) }}" class="nav-link {{ Request::is('users/*/likes') ? 'active' : '' }}">いいね！ <span class="badge badge-secondary">{{ $count_likes }}</span></a></li>
</ul>