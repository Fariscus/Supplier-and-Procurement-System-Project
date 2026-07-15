@extends('Manager Role.Manager Dashboard - MG.layout')

@section('title', 'Inventory Lists - MG')

@push('styles')
    <link rel="stylesheet" href="{{ asset('Manager Role/Inventory Lists - MG/css/inventory.css') }}">
@endpush

@section('content')
@php
    $img = fn ($file) => asset('Manager Role/Inventory Lists - MG/images/' . $file);
@endphp
<section class="mgr-inv" data-name="inventory Lists - MG" data-node-id="127:5944">
    <div class="mgr-inv__intro">
        <h2 class="mgr-inv__title">Inventory Management</h2>
        <p class="mgr-inv__subtitle">Real-time stock tracking and fulfillment status.</p>
    </div>

    <div class="mgr-inv__kpis">
        <article class="mgr-inv__kpi">
            <p class="mgr-inv__kpi-label">Inventory Value</p>
            <p class="mgr-inv__kpi-value">$4.2M</p>
        </article>
        <article class="mgr-inv__kpi">
            <p class="mgr-inv__kpi-label">Stock Items</p>
            <p class="mgr-inv__kpi-value">24</p>
        </article>
    </div>

    <div class="mgr-inv__card">
        <div class="mgr-inv__table-wrap">
            <table class="mgr-inv__table">
                <thead>
                    <tr>
                        <th scope="col">Item Name</th>
                        <th scope="col">Stock Quantity</th>
                        <th scope="col">Last Updated</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $items = [
                            [
                                'name' => 'Dell Latitude 5420 Laptop',
                                'desc' => 'Core i7, 16GB RAM, 512GB SSD',
                                'qty' => '8 Units',
                                'updated' => '2 hours ago',
                                'icon' => 'icon-laptop.svg',
                            ],
                            [
                                'name' => 'HP LaserJet Pro M404n',
                                'desc' => 'Monochrome Enterprise',
                                'qty' => '42 Units',
                                'updated' => 'Yesterday, 4:15 PM',
                                'icon' => 'icon-printer.svg',
                            ],
                            [
                                'name' => 'Logitech MX Master 3S',
                                'desc' => 'Wireless Performance Mouse',
                                'qty' => '0 Units',
                                'updated' => '3 days ago',
                                'icon' => 'icon-mouse.svg',
                            ],
                            [
                                'name' => 'LG UltraFine 27" 4K',
                                'desc' => 'Ergo Design, USB-C',
                                'qty' => '115 Units',
                                'updated' => 'Oct 12, 2023',
                                'icon' => 'icon-monitor.svg',
                            ],
                        ];
                    @endphp
                    @foreach ($items as $item)
                        <tr>
                            <td>
                                <div class="mgr-inv__item">
                                    <span class="mgr-inv__item-icon" aria-hidden="true">
                                        <img src="{{ $img($item['icon']) }}" alt="" width="24" height="18">
                                    </span>
                                    <div class="mgr-inv__item-text">
                                        <p class="mgr-inv__item-name">{{ $item['name'] }}</p>
                                        <p class="mgr-inv__item-desc">{{ $item['desc'] }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="mgr-inv__qty">{{ $item['qty'] }}</td>
                            <td class="mgr-inv__updated">{{ $item['updated'] }}</td>
                            <td>
                                <a href="{{ route('manager.inventory.adjust') }}" class="mgr-inv__more" aria-label="Adjust {{ $item['name'] }}">
                                    <img src="{{ $img('more.svg') }}" alt="" width="4" height="16">
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mgr-inv__footer">
            <p class="mgr-inv__count">Showing 1-10 of 1,248 items</p>
            <nav class="mgr-inv__pager" aria-label="Pagination">
                <a href="#" class="mgr-inv__page mgr-inv__page--icon is-disabled" aria-disabled="true">
                    <img src="{{ $img('chevron-left.svg') }}" alt="" width="8" height="12">
                </a>
                <a href="#" class="mgr-inv__page is-active" aria-current="page">1</a>
                <a href="#" class="mgr-inv__page">2</a>
                <a href="#" class="mgr-inv__page">3</a>
                <span class="mgr-inv__ellipsis">…</span>
                <a href="#" class="mgr-inv__page">125</a>
                <a href="#" class="mgr-inv__page mgr-inv__page--icon">
                    <img src="{{ $img('chevron-right.svg') }}" alt="" width="8" height="12">
                </a>
            </nav>
        </div>
    </div>
</section>
@endsection
