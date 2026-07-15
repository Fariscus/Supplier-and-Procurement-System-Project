@extends('Staff Role.Staff Dashboard - ST.layout')

@section('title', 'Inventory - ST')

@section('header')
    <h1 class="staff-header__title">Good Morning, Vattana</h1>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('Staff Role/Inventory - ST/css/inventory.css') }}">
@endpush

@section('content')
<section class="inventory" data-name="Inventory - ST">
    <div class="inventory__intro">
        <h2 class="inventory__title">Inventory Management</h2>
        <p class="inventory__subtitle">Real-time stock tracking and fulfillment status</p>
    </div>

    <div class="inventory__kpis">
        <article class="inventory__kpi">
            <p class="inventory__kpi-label">Inventory Value</p>
            <p class="inventory__kpi-value">$4.2M</p>
        </article>
        <article class="inventory__kpi">
            <p class="inventory__kpi-label">Stock Items</p>
            <p class="inventory__kpi-value">24</p>
        </article>
    </div>

    <div class="inventory__card">
        <div class="inventory__tabs">
            <button type="button" class="inventory__tab is-active">All Items</button>
        </div>

        <div class="inventory__table-wrap">
            <table class="inventory__table">
                <thead>
                    <tr>
                        <th scope="col">Item Name</th>
                        <th scope="col">Stock Quantity</th>
                        <th scope="col">Last Updated</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $items = [
                            [
                                'name' => 'Dell Latitude 5420 Laptop',
                                'desc' => 'Core i7, 16GB RAM, 512GB SSD',
                                'qty' => '8 Units',
                                'zero' => false,
                                'updated' => '2 hours ago',
                                'icon' => 'laptop',
                            ],
                            [
                                'name' => 'HP LaserJet Pro M404n',
                                'desc' => 'Monochrome Enterprise',
                                'qty' => '42 Units',
                                'zero' => false,
                                'updated' => 'Yesterday, 4:15 PM',
                                'icon' => 'printer',
                            ],
                            [
                                'name' => 'Logitech MX Master 3S',
                                'desc' => 'Wireless Performance Mouse',
                                'qty' => '0 Units',
                                'zero' => true,
                                'updated' => '3 days ago',
                                'icon' => 'mouse',
                            ],
                            [
                                'name' => 'LG UltraFine 27" 4K',
                                'desc' => 'Ergo Design, USB-C',
                                'qty' => '115 Units',
                                'zero' => false,
                                'updated' => 'Oct 12, 2023',
                                'icon' => 'monitor',
                            ],
                        ];
                    @endphp
                    @foreach ($items as $item)
                        <tr>
                            <td>
                                <div class="inventory__item">
                                    <span class="inventory__item-icon" aria-hidden="true">
                                        @if ($item['icon'] === 'laptop')
                                            <svg viewBox="0 0 24 24" fill="none"><rect x="3" y="5" width="18" height="12" rx="2" stroke="currentColor" stroke-width="1.6"/><path d="M2 19h20" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg>
                                        @elseif ($item['icon'] === 'printer')
                                            <svg viewBox="0 0 24 24" fill="none"><path d="M7 8V4h10v4M7 17h10v3H7v-3z" stroke="currentColor" stroke-width="1.6"/><rect x="4" y="8" width="16" height="9" rx="2" stroke="currentColor" stroke-width="1.6"/></svg>
                                        @elseif ($item['icon'] === 'mouse')
                                            <svg viewBox="0 0 24 24" fill="none"><rect x="7" y="3" width="10" height="18" rx="5" stroke="currentColor" stroke-width="1.6"/><path d="M12 7v4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg>
                                        @else
                                            <svg viewBox="0 0 24 24" fill="none"><rect x="3" y="5" width="18" height="14" rx="2" stroke="currentColor" stroke-width="1.6"/><path d="M8 19v2M16 19v2" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg>
                                        @endif
                                    </span>
                                    <div class="inventory__item-text">
                                        <p class="inventory__item-name">{{ $item['name'] }}</p>
                                        <p class="inventory__item-desc">{{ $item['desc'] }}</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="inventory__qty {{ $item['zero'] ? 'is-zero' : '' }}">{{ $item['qty'] }}</p>
                            </td>
                            <td>
                                <p class="inventory__updated">{{ $item['updated'] }}</p>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="inventory__footer">
            <p class="inventory__count">Showing 1-10 of 1,248 items</p>
            <nav class="inventory__pager" aria-label="Pagination">
                <a href="#" class="inventory__page is-disabled" aria-disabled="true">&lt;</a>
                <a href="#" class="inventory__page is-active" aria-current="page">1</a>
                <a href="#" class="inventory__page">2</a>
                <a href="#" class="inventory__page">3</a>
                <a href="#" class="inventory__page">&gt;</a>
            </nav>
        </div>
    </div>
</section>
@endsection
