<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My profile') | SPS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500;700&family=Hanken+Grotesk:wght@400;500;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('Staff Role/Staff Dashboard - ST/css/staff.css') }}">
    <link rel="stylesheet" href="{{ asset('Staff Role/My Profile - ST/css/profile.css') }}">
    @stack('styles')
</head>
<body class="staff-app">
<aside class="staff-sidebar" data-name="Sidebar">
    <div class="staff-sidebar__brand">
        <p class="staff-sidebar__brand-title">Supplier and Procurement System</p>
        <p class="staff-sidebar__brand-sub">Modern Admin Dashboard</p>
    </div>

    <nav class="staff-sidebar__nav" aria-label="Staff navigation">
        <a href="{{ route('staff.dashboard') }}" class="staff-nav-item">
            <span class="staff-nav-item__bar" aria-hidden="true"></span>
            <span class="staff-nav-item__icon">
                <img src="{{ asset('Staff Role/Staff Dashboard - ST/images/icon-dashboard.svg') }}" alt="" width="20" height="20">
            </span>
            <span class="staff-nav-item__label">Dashboard</span>
        </a>
        <a href="{{ route('staff.prs') }}" class="staff-nav-item">
            <span class="staff-nav-item__bar" aria-hidden="true"></span>
            <span class="staff-nav-item__icon">
                <img src="{{ asset('Staff Role/Staff Dashboard - ST/images/icon-my-request.svg') }}" alt="" width="20" height="20">
            </span>
            <span class="staff-nav-item__label">My Request</span>
        </a>
        <a href="{{ route('staff.quotations') }}" class="staff-nav-item">
            <span class="staff-nav-item__bar" aria-hidden="true"></span>
            <span class="staff-nav-item__icon">
                <img src="{{ asset('Staff Role/Staff Dashboard - ST/images/icon-quotations.svg') }}" alt="" width="20" height="20">
            </span>
            <span class="staff-nav-item__label">Quotations</span>
        </a>
        <a href="{{ route('staff.goods') }}" class="staff-nav-item">
            <span class="staff-nav-item__bar" aria-hidden="true"></span>
            <span class="staff-nav-item__icon">
                <img src="{{ asset('Staff Role/Staff Dashboard - ST/images/icon-goods-received.svg') }}" alt="" width="20" height="20">
            </span>
            <span class="staff-nav-item__label">Goods Received</span>
        </a>
        <a href="{{ route('staff.inventory') }}" class="staff-nav-item">
            <span class="staff-nav-item__bar" aria-hidden="true"></span>
            <span class="staff-nav-item__icon">
                <img src="{{ asset('Staff Role/Staff Dashboard - ST/images/icon-inventory.svg') }}" alt="" width="20" height="20">
            </span>
            <span class="staff-nav-item__label">Inventory</span>
        </a>
    </nav>
</aside>

<div class="staff-main">
    <header class="staff-header profile-header">
        <div class="staff-header__greeting">
            @hasSection('header')
                @yield('header')
            @else
                <h1 class="staff-header__title">My profile</h1>
            @endif
        </div>
        <div class="profile-header__user">
            <span class="profile-header__name">Dara Sok</span>
            <span class="profile-header__sep" aria-hidden="true">·</span>
            <span class="profile-header__role">Staff</span>
        </div>
    </header>

    <main class="staff-content profile-content">
        @yield('content')
    </main>
</div>

@stack('scripts')
</body>
</html>
