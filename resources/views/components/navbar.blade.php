<nav id='navbar' class='navbar bg-white'>
    <div class='container d-flex justify-between items-center'>
        <a href='{{ url('/') }}'>
            <img
                src="{{ asset('img/frastyle-logo.svg')}}"
                alt='Logo Frastyle CSS Framework'
                class='logo'
            />
        </a>
        <div class='linkNavbar text-right'>
            {{ $slot }}
        </div>
    </div>
</nav>