<ul>
    <li><a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">@lang('Home')</a></li>
    <li><a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">@lang('About')</a></li>
    <li><a class="{{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">@lang('Contact')</a></li>
    <li><a class="{{ request()->routeIs('project.*') ? 'active' : '' }}" href="{{ route('project.index') }}">@lang('Portfolio')</a></li>

    @guest
        <li><a href="{{ route('login') }}">Iniciar Sesion</a></li>
    @else
        <li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Cerrar Sesion</a></li>

        <form action="{{ route('logout') }}" method="POST" class="d-none" id="logout-form">
            @csrf
        </form>
    @endguest

</ul>