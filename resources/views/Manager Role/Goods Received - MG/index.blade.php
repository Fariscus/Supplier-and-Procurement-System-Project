@extends('Manager Role.Manager Dashboard - MG.layout')

@section('title', 'Goods Received - MG')

@push('styles')
    <link rel="stylesheet" href="{{ asset('Manager Role/Goods Received - MG/css/goods.css') }}">
@endpush

@section('content')
<section class="mgr-goods" data-name="Good receive lists - MG" data-node-id="127:3461">
    <div class="mgr-goods__intro">
        <div>
            <h2 class="mgr-goods__title">Goods Received</h2>
            <p class="mgr-goods__subtitle">Track and manage inventory deliveries and warehouse intakes.</p>
        </div>
        <a href="{{ route('manager.goods.create') }}" class="mgr-goods__create">+ Log New Delivery</a>
    </div>

    <div class="mgr-goods__filters">
        <div class="mgr-goods__search">
            <svg class="mgr-goods__search-icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="1.6"/>
                <path d="M16.5 16.5L21 21" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>
            </svg>
            <input
                type="search"
                class="mgr-goods__search-input"
                placeholder="Search by Receive ID or PO Reference..."
                aria-label="Search goods received"
            >
        </div>
        <div class="mgr-goods__date">
            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <rect x="3" y="5" width="18" height="16" rx="2" stroke="currentColor" stroke-width="1.5"/>
                <path d="M3 9h18M8 3v4M16 3v4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
            <span>Date Range: Jun 01, 2026 - Jun 30, 2026</span>
        </div>
    </div>

    <div class="mgr-goods__card">
        <div class="mgr-goods__table-wrap">
            <table class="mgr-goods__table">
                <thead>
                    <tr>
                        <th scope="col">Receive ID</th>
                        <th scope="col">PO Ref</th>
                        <th scope="col">Received By</th>
                        <th scope="col">Date</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $rows = [
                            ['id' => 'GR-2026-8812', 'po' => 'PO-9920-XF', 'initials' => 'JD', 'name' => 'John Doe', 'avatar' => 'jd', 'date' => 'Jun 22, 2026'],
                            ['id' => 'GR-2026-8790', 'po' => 'PO-9915-AB', 'initials' => 'AS', 'name' => 'Anna Soto', 'avatar' => 'as', 'date' => 'Jun 20, 2026'],
                            ['id' => 'GR-2026-8744', 'po' => 'PO-9901-KK', 'initials' => 'MK', 'name' => 'Maria Kim', 'avatar' => 'mk', 'date' => 'Jun 18, 2026'],
                            ['id' => 'GR-2026-8701', 'po' => 'PO-9888-TR', 'initials' => 'ML', 'name' => 'Maya Lee', 'avatar' => 'ml', 'date' => 'Jun 15, 2026'],
                            ['id' => 'GR-2026-8655', 'po' => 'PO-9870-ZX', 'initials' => 'VH', 'name' => 'Vattana Hean', 'avatar' => 'vh', 'date' => 'Jun 12, 2026'],
                        ];
                    @endphp
                    @foreach ($rows as $row)
                        <tr>
                            <td class="mgr-goods__id">{{ $row['id'] }}</td>
                            <td class="mgr-goods__po">{{ $row['po'] }}</td>
                            <td>
                                <span class="mgr-goods__person">
                                    <span class="mgr-goods__avatar mgr-goods__avatar--{{ $row['avatar'] }}" aria-hidden="true">{{ $row['initials'] }}</span>
                                    {{ $row['name'] }}
                                </span>
                            </td>
                            <td>{{ $row['date'] }}</td>
                            <td>
                                <a href="{{ route('manager.goods.show') }}" class="mgr-goods__view" aria-label="View {{ $row['id'] }}">
                                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                        <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12z" stroke="currentColor" stroke-width="1.6"/>
                                        <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.6"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mgr-goods__footer">
            <p class="mgr-goods__count">Showing 1 to 5 of 124 entries.</p>
            <nav class="mgr-goods__pager" aria-label="Pagination">
                <a href="#" class="mgr-goods__page is-disabled" aria-disabled="true">&lt;</a>
                <a href="#" class="mgr-goods__page is-active" aria-current="page">1</a>
                <a href="#" class="mgr-goods__page">2</a>
                <a href="#" class="mgr-goods__page">3</a>
                <a href="#" class="mgr-goods__page">&gt;</a>
            </nav>
        </div>
    </div>
</section>
@endsection
