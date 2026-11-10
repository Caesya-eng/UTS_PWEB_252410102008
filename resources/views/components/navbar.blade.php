@props(['username' => ''])

<nav class="navbar">

    <a href="{{ $username ? route('dashboard', ['username' => $username]) : route('login') }}"
       class="brand">

        <span class="brand-icon">🐰</span>

        <span>
            <strong>RabyPudding</strong>
            <small>Management System</small>
        </span>

    </a>

    @if($username)

    <div class="nav-menu">

        <a href="{{ route('dashboard', ['username' => $username]) }}">
            Dashboard
        </a>

        <a href="{{ route('pengelolaan', ['username' => $username]) }}">
            Pengelolaan
        </a>

        <a href="{{ route('profile', ['username' => $username]) }}">
            Profile
        </a>

        <a href="{{ route('login') }}" class="logout">
            Logout
        </a>

    </div>

    @endif

</nav>