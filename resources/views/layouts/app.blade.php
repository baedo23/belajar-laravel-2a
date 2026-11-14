<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravel 13 App' }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="navbar">
        <div class="container nav-inner">
            <a href="{{ route('mahasiswa.index') }}" class="brand">
                <span class="brand-dot"></span>
                <span>Praktikum<span class="brand-muted">Baedo</span></span>
            </a>
            <nav class="nav-links">
                <a href="{{ route('mahasiswa.index') }}"
                   class="nav-item {{ request()->routeIs('mahasiswa.*') ? 'active' : '' }}">
                    Daftar Mahasiswa
                </a>
                <a href="{{ route('kalkulator.segitiga') }}"
                   class="nav-item {{ request()->routeIs('kalkulator.*') ? 'active' : '' }}">
                    Kalkulator Segitiga
                </a>
            </nav>
        </div>
    </header>

    <main class="container main-content">
        @yield('content')
    </main>
</body>
</html>