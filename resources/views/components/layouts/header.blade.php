<header>
    @if(Auth::check() && Auth::user()->is_admin == 1)
        <x-layouts.admin-nav></x-layouts.admin-nav>
    @elseif(Auth::check() && Auth::user()->is_admin == 0)
        <x-layouts.user-nav></x-layouts.user-nav>
    @else
        <x-layouts.nav></x-layouts.nav>
    @endif
</header>
