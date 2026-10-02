<style>
    .navbar {
        background-color: #121528;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        padding: 16px 32px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
    }

    .navbar-container {
        max-width: 1100px;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .navbar-brand {
        font-size: 1.25rem;
        font-weight: 700;
        color: #ffffff;
        text-decoration: none;
        letter-spacing: 0.5px;
    }

    .navbar-brand span {
        color: #e5a93b;
    }

    .navbar-menu {
        display: flex;
        list-style: none;
        gap: 24px;
        align-items: center;
    }

    .navbar-link {
        color: #a0aec0;
        text-decoration: none;
        font-size: 0.95rem;
        font-weight: 500;
        padding: 8px 16px;
        border-radius: 12px;
        transition: all 0.25s ease;
    }

    .navbar-link:hover {
        color: #e5a93b;
        background-color: rgba(229, 169, 59, 0.1);
    }

    .navbar-link.active {
        color: #e5a93b;
        background-color: #1a1e36;
        border: 1px solid rgba(229, 169, 59, 0.3);
        font-weight: 600;
    }
</style>

<nav class="navbar">
    <div class="navbar-container">
        <a href="{{ url('/user') }}" class="navbar-brand">
            Praktikum<span>Web</span> Lanjut
        </a>

        <ul class="navbar-menu">
            <li>
                <a href="{{ url('/user') }}" class="navbar-link {{ request()->is('user') ? 'active' : '' }}">
                    List Pengguna
                </a>
            </li>
            <li>
                <a href="{{ route('user.create') }}" class="navbar-link {{ request()->is('user/create') ? 'active' : '' }}">
                    Tambah Pengguna
                </a>
            </li>
            <li>
                <a href="{{ url('/profile') }}" class="navbar-link {{ request()->is('profile*') ? 'active' : '' }}">
                    Profile
                </a>
            </li>
        </ul>
    </div>
</nav>