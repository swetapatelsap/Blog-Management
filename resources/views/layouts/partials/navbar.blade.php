<header class="p-3 bg-dark text-white site-header">
    @auth
        <div class="site-identity">
            <h1><a href="#">Blog Management</a></h1>
            <a href="{{route('home.index')}}">Dashboard</a>
            <a href="{{route('posts.index')}}">Posts</a>
        </div>
        <nav class="site-navigation">
            <ul class="nav">
                <li><a href="#"> {{auth()->user()->name}}</a></li>
                <li><a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a></li>
            </ul>
        </nav>
    @endauth

    @guest
        <div class="text-end">
            <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
            <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
        </div>
    @endguest
    {{-- </div>
 </div>--}}
</header>
