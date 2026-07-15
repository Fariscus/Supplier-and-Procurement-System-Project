<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Manager Dashboard') | SPS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500;700&family=Hanken+Grotesk:wght@400;500;700&family=Inter:wght@400;700&family=Istok+Web:wght@400;700&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('Manager Role/Manager Dashboard - MG/css/manager.css') }}">
    @stack('styles')
</head>
<body class="manager-app">
<aside class="mgr-sidebar" data-name="Sidebar">
    <div class="mgr-sidebar__brand">
        <p class="mgr-sidebar__brand-title">Supplier and Procurement System</p>
        <p class="mgr-sidebar__brand-sub">Modern Admin Dashboard</p>
    </div>

    <nav class="mgr-sidebar__nav" aria-label="Manager navigation">
        @php
            $img = fn ($file) => asset('Manager Role/Manager Dashboard - MG/images/' . $file);
            $nav = [
                ['route' => 'manager.dashboard', 'match' => 'manager.dashboard', 'label' => 'Dashboard', 'icon' => 'icon-dashboard.svg'],
                ['route' => 'manager.prs', 'match' => 'manager.prs*', 'label' => 'Purchase Request', 'icon' => 'icon-purchase-request.svg'],
                ['route' => 'manager.quotations', 'match' => 'manager.quotations*', 'label' => 'Quotations', 'icon' => 'icon-quotations.svg'],
                ['route' => 'manager.orders', 'match' => 'manager.orders*', 'label' => 'Purchase Orders', 'icon' => 'icon-purchase-orders.svg'],
                ['route' => 'manager.goods', 'match' => 'manager.goods*', 'label' => 'Goods Received', 'icon' => 'icon-goods-received.svg'],
                ['route' => 'manager.inventory', 'match' => 'manager.inventory*', 'label' => 'Inventory', 'icon' => 'icon-inventory.svg'],
                ['route' => 'manager.suppliers', 'match' => 'manager.suppliers*', 'label' => 'Suppliers', 'icon' => 'icon-suppliers.svg'],
                ['route' => 'manager.users', 'match' => 'manager.users*', 'label' => 'Users', 'icon' => 'icon-users.svg'],
                ['route' => 'manager.report', 'match' => 'manager.report*', 'label' => 'Report', 'icon' => 'icon-report.svg'],
            ];
        @endphp
        @foreach ($nav as $item)
            <a
                href="{{ $item['route'] ? route($item['route']) : '#' }}"
                class="mgr-nav-item {{ request()->routeIs($item['match']) ? 'is-active' : '' }}"
            >
                <span class="mgr-nav-item__bar" aria-hidden="true"></span>
                <span class="mgr-nav-item__icon">
                    <img src="{{ $img($item['icon']) }}" alt="" width="20" height="20">
                </span>
                <span class="mgr-nav-item__label">{{ $item['label'] }}</span>
            </a>
        @endforeach
    </nav>
</aside>

<div class="mgr-main">
    <header class="mgr-header">
        <div class="mgr-header__greeting">
            @hasSection('header')
                @yield('header')
            @else
                <h1 class="mgr-header__title">Good Morning, Vattana</h1>
            @endif
        </div>
        @hasSection('header_user')
            @yield('header_user')
        @else
            <a href="{{ route('manager.profile') }}" class="mgr-header__profile" aria-label="Open my profile">
                <div class="mgr-avatar" aria-hidden="true">VH</div>
                <div class="mgr-header__user">
                    <span class="mgr-header__name">Vattana Hean - Manager</span>
                </div>
            </a>
        @endif
    </header>

    <main class="mgr-content">
        @yield('content')
    </main>
</div>

@stack('scripts')
</body>
</html>
