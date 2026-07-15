@extends('Manager Role.Manager Dashboard - MG.layout')

@section('title', 'Purchase Order List - MG')

@push('styles')
    <link rel="stylesheet" href="{{ asset('Manager Role/Purchase Order List - MG/css/list.css') }}">
@endpush

@section('content')
@php
    $img = fn ($file) => asset('Manager Role/Purchase Order List - MG/images/' . $file);
@endphp
<section class="mgr-po-list" data-name="Purchase Order List - MG" data-node-id="111:1508">
    <div class="mgr-po-list__header">
        <h2 class="mgr-po-list__title">Purchase Orders</h2>
        <a href="{{ route('manager.orders.create') }}" class="mgr-po-list__create">
            <img src="{{ $img('plus.svg') }}" alt="" width="14" height="14">
            Create PO
        </a>
    </div>

    <div class="mgr-po-list__table-wrap">
        <table class="mgr-po-list__table">
            <thead>
                <tr>
                    <th scope="col">
                        <span class="mgr-po-list__th-sort">
                            PO ID
                            <img src="{{ $img('sort.svg') }}" alt="" width="12" height="12">
                        </span>
                    </th>
                    <th scope="col">PR REF</th>
                    <th scope="col">SUPPLIER</th>
                    <th scope="col">TOTAL</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $rows = [
                        ['id' => '#PO-2023-8841', 'pr' => '#PR-1029', 'supplier' => 'Logistics Global Ltd.', 'total' => '$12,450.00', 'status' => 'ORDERED', 'detail' => 'approved'],
                        ['id' => '#PO-2023-8839', 'pr' => '#PR-1025', 'supplier' => 'Advanced Tech Systems', 'total' => '$3,120.50', 'status' => 'RECEIVED', 'detail' => 'approved'],
                        ['id' => '#PO-2023-8835', 'pr' => '#PR-1011', 'supplier' => 'Urban Office Supplies', 'total' => '$845.00', 'status' => 'PENDING', 'detail' => 'pending'],
                        ['id' => '#PO-2023-8832', 'pr' => '#PR-1008', 'supplier' => 'Elite Consultancy Services', 'total' => '$25,000.00', 'status' => 'RECEIVED', 'detail' => 'approved'],
                        ['id' => '#PO-2023-8828', 'pr' => '#PR-0995', 'supplier' => 'Modern Printing House', 'total' => '$1,200.00', 'status' => 'ORDERED', 'detail' => 'approved'],
                    ];
                @endphp
                @foreach ($rows as $row)
                    <tr>
                        <td class="mgr-po-list__id">{{ $row['id'] }}</td>
                        <td>{{ $row['pr'] }}</td>
                        <td>{{ $row['supplier'] }}</td>
                        <td>{{ $row['total'] }}</td>
                        <td>
                            <span class="mgr-po-list__status mgr-po-list__status--{{ strtolower($row['status']) }}">
                                <span class="mgr-po-list__dot" aria-hidden="true"></span>
                                {{ $row['status'] }}
                            </span>
                        </td>
                        <td class="mgr-po-list__actions">
                            <div class="mgr-po-list__menu">
                                <button type="button" class="mgr-po-list__more" aria-label="Actions for {{ $row['id'] }}">
                                    <img src="{{ $img('more.svg') }}" alt="" width="18" height="18">
                                </button>
                                <div class="mgr-po-list__dropdown">
                                    <a href="{{ route('manager.orders.detail.' . $row['detail']) }}">View detail</a>
                                    <a href="{{ route('manager.orders.update') }}">Update status</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mgr-po-list__footer">
        <p class="mgr-po-list__results">Showing 1 to 5 of 42 results</p>
        <nav class="mgr-po-list__pager" aria-label="Pagination">
            <button type="button" class="mgr-po-list__page-btn" aria-label="Previous page">
                <img src="{{ $img('chevron-left.svg') }}" alt="" width="16" height="16">
            </button>
            <button type="button" class="mgr-po-list__page is-active">1</button>
            <button type="button" class="mgr-po-list__page">2</button>
            <button type="button" class="mgr-po-list__page">3</button>
            <span class="mgr-po-list__ellipsis">...</span>
            <button type="button" class="mgr-po-list__page">9</button>
            <button type="button" class="mgr-po-list__page-btn" aria-label="Next page">
                <img src="{{ $img('chevron-right.svg') }}" alt="" width="16" height="16">
            </button>
        </nav>
    </div>
</section>
@endsection
