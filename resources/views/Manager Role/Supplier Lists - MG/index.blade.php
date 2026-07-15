@extends('Manager Role.Manager Dashboard - MG.layout')

@section('title', 'Supplier Lists - MG')

@push('styles')
    <link rel="stylesheet" href="{{ asset('Manager Role/Supplier Lists - MG/css/suppliers.css') }}">
@endpush

@section('content')
@php
    $img = fn ($file) => asset('Manager Role/Supplier Lists - MG/images/' . $file);
@endphp
<section class="mgr-suppliers" data-name="Supplier Lists - MG" data-node-id="5:42">
    <div class="mgr-suppliers__intro">
        <div>
            <h2 class="mgr-suppliers__title">Suppliers</h2>
            <p class="mgr-suppliers__subtitle">Manage and monitor your enterprise vendor network.</p>
        </div>
        <a href="{{ route('manager.suppliers.create') }}" class="mgr-suppliers__add">
            <img src="{{ $img('plus.svg') }}" alt="" width="12" height="12">
            Add Supplier
        </a>
    </div>

    <div class="mgr-suppliers__card">
        <div class="mgr-suppliers__card-head">
            <h3 class="mgr-suppliers__card-title">Recent suppliers - all Departments</h3>
            <span class="mgr-suppliers__total">6 TOTAL</span>
        </div>

        <div class="mgr-suppliers__table-wrap">
            <table class="mgr-suppliers__table">
                <thead>
                    <tr>
                        <th scope="col">Supplier</th>
                        <th scope="col">Contact Person</th>
                        <th scope="col">Email</th>
                        <th scope="col">Status</th>
                        <th scope="col" class="is-right">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $rows = [
                            [
                                'name' => 'Golden Rice Co.',
                                'contact' => 'Mr. Dara Sok',
                                'email' => 'dara@gmail.com',
                                'status' => 'Active',
                                'icon' => 'icon-golden-rice.svg',
                            ],
                            [
                                'name' => 'FreshMart Supplier',
                                'contact' => 'Ms. Lina Pich',
                                'email' => 'lina@gmail.com',
                                'status' => 'Active',
                                'icon' => 'icon-freshmart.svg',
                            ],
                            [
                                'name' => 'DR Foruniture',
                                'contact' => 'Mr. Vuthy Heng',
                                'email' => 'vuth@gmail.com',
                                'status' => 'Inactive',
                                'icon' => 'icon-furniture.svg',
                            ],
                            [
                                'name' => 'Global Logistics Ltd',
                                'contact' => 'Sarah Connor',
                                'email' => 'sconnor@global.com',
                                'status' => 'Active',
                                'icon' => 'icon-logistics.svg',
                            ],
                        ];
                    @endphp
                    @foreach ($rows as $row)
                        <tr>
                            <td>
                                <div class="mgr-suppliers__vendor">
                                    <span class="mgr-suppliers__vendor-icon" aria-hidden="true">
                                        <img src="{{ $img($row['icon']) }}" alt="" width="22" height="18">
                                    </span>
                                    <span class="mgr-suppliers__vendor-name">{{ $row['name'] }}</span>
                                </div>
                            </td>
                            <td>{{ $row['contact'] }}</td>
                            <td>
                                <a href="mailto:{{ $row['email'] }}" class="mgr-suppliers__email">{{ $row['email'] }}</a>
                            </td>
                            <td>
                                <span class="mgr-suppliers__status mgr-suppliers__status--{{ strtolower($row['status']) }}">
                                    <span class="mgr-suppliers__status-dot" aria-hidden="true"></span>
                                    {{ $row['status'] }}
                                </span>
                            </td>
                            <td class="is-right">
                                <a href="{{ route('manager.suppliers.show') }}" class="mgr-suppliers__view">
                                    View Details
                                    <img src="{{ $img('chevron-right.svg') }}" alt="" width="6" height="9">
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mgr-suppliers__footer">
            <p class="mgr-suppliers__count">Showing 3 of 6 suppliers</p>
            <nav class="mgr-suppliers__pager" aria-label="Pagination">
                <a href="#" class="mgr-suppliers__page mgr-suppliers__page--icon is-disabled" aria-disabled="true">
                    <img src="{{ $img('chevron-left.svg') }}" alt="" width="8" height="12">
                </a>
                <a href="#" class="mgr-suppliers__page is-active" aria-current="page">1</a>
                <a href="#" class="mgr-suppliers__page">2</a>
                <a href="#" class="mgr-suppliers__page mgr-suppliers__page--icon">
                    <img src="{{ $img('chevron-right-page.svg') }}" alt="" width="8" height="12">
                </a>
            </nav>
        </div>
    </div>
</section>
@endsection
