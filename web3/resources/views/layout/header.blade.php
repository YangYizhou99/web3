<header class="header">
    <div class="container bg-light d-flex justify-content-between align-items-center">
        <div class="d-flex">
            <a class="logo">media</a>
            <form class="form-inline my-2 my-lg-0 ml-3">
                <input class="form-control form-control-sm" type="search" placeholder="search" aria-label="Search">
                <button class="btn btn-sm btn-outline-success ml-2 px-4" type="submit">search</button>
            </form>
        </div>
        <div class="right-btn">
            @auth
                <a href="{{ route('user.info') }}" class="text-dark mr-3 text-decoration-none">
                    <img width="30" height="30" src="{{ auth()->user()->avatar ? asset('storage/' . auth()->user()->avatar) : asset('img/default/avatar.jpg') }}" class="rounded-pill" alt="...">
                    {{--                    <span>{{ \Illuminate\Support\Facades\Auth::user()->name }}</span>--}}
                    <span>{{ auth()->user()->name }}</span>
                </a>
                <form method="post" action="{{ route('logout') }}" class="d-inline" id="logout">
                    @csrf
                    <a href="javascript:;" onclick="document.getElementById('logout').submit()" class="text-dark text-decoration-none">exit</a>
                </form>
            @else
                <a href="{{route('login')}}" class="btn btn-sm btn-primary">login</a>
                <a href="{{route('register')}}" class="btn btn-sm btn-outline-success ml-2">registration</a>
            @endauth
        </div>
    </div>
</header>
