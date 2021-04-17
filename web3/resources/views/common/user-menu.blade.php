<div class="card">
    <ul class="list-group list-group-flush text-center">
        <li class="list-group-item {{ $nav == 'info' ? 'bg-primary' : '' }}"><a class="{{ $nav == 'info' ? 'text-white' : '' }}" href="{{route("user.info")}}">info</a></li>
        <li class="list-group-item {{ $nav == 'avatar' ? 'bg-primary' : '' }}"><a class="{{ $nav == 'avatar' ? 'text-white' : '' }}" href="{{route('user.avatar')}}">image</a></li>
        <li class="list-group-item {{ $nav == 'news' ? 'bg-primary' : '' }}"><a class="{{ $nav == 'news' ? 'text-white' : '' }}" href="{{route('user.news')}}">news</a></li>
    </ul>
</div>
