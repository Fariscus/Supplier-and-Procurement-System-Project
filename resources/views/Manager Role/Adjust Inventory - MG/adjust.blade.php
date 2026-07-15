@extends('Manager Role.Manager Dashboard - MG.layout')

@section('title', 'Adjust Inventory - MG')

@push('styles')
    <link rel="stylesheet" href="{{ asset('Manager Role/Adjust Inventory - MG/css/adjust.css') }}">
@endpush

@section('content')
@php
    $img = fn ($file) => asset('Manager Role/Adjust Inventory - MG/images/' . $file);
@endphp
<section class="mgr-adj" data-name="Adjust Inventory - MG" data-node-id="116:1947">
    <form class="mgr-adj__card" action="#" method="POST">
        @csrf

        <div class="mgr-adj__head">
            <div>
                <h2 class="mgr-adj__title">Adjust inventory</h2>
                <p class="mgr-adj__subtitle">Manually correct stock levels for audit or damage reconciliation.</p>
            </div>
            <span class="mgr-adj__badge">WAREHOUSE_A</span>
        </div>

        <div class="mgr-adj__body">
            <div class="mgr-adj__grid">
                <div class="mgr-adj__field">
                    <label class="mgr-adj__label" for="item_name">Item</label>
                    <div class="mgr-adj__readonly">
                        <img src="{{ $img('icon-item.svg') }}" alt="" width="19" height="20">
                        <input
                            id="item_name"
                            name="item_name"
                            type="text"
                            class="mgr-adj__input"
                            value="Dell Latitude 5420 - Core i7 16GB"
                            readonly
                        >
                    </div>
                </div>
                <div class="mgr-adj__field">
                    <label class="mgr-adj__label" for="stock_qty">Stock Quantity</label>
                    <div class="mgr-adj__qty">
                        <input
                            id="stock_qty"
                            name="stock_qty"
                            type="text"
                            class="mgr-adj__input"
                            value="124"
                        >
                        <span class="mgr-adj__units">UNITS</span>
                    </div>
                </div>
            </div>

            <div class="mgr-adj__alert" role="note">
                <img src="{{ $img('icon-info.svg') }}" alt="" width="20" height="20">
                <p>
                    All inventory adjustments are logged for audit purposes. High-volume adjustments (&gt;50 units) require secondary approval
                    from a Department Head.
                </p>
            </div>
        </div>

        <div class="mgr-adj__footer">
            <a href="{{ route('manager.inventory') }}" class="mgr-adj__cancel">Cancel</a>
            <button type="submit" class="mgr-adj__submit">Save adjustment</button>
        </div>
    </form>
</section>
@endsection
