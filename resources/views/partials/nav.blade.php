<ul>
    <li><a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">@lang('Home')</a></li>
    <li><a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">@lang('About')</a></li>
    <li><a class="{{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">@lang('Contact')</a></li>
    <li><a class="{{ request()->routeIs('project.*') ? 'active' : '' }}" href="{{ route('project.index') }}">@lang('Portfolio')</a></li>
</ul>