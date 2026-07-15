@extends('Manager Role.Manager Dashboard - MG.layout')

@section('title', 'Update Purchase Order Status - MG')

@push('styles')
    <link rel="stylesheet" href="{{ asset('Manager Role/Update Purchase Order Status - MG/css/update.css') }}">
@endpush

@section('content')
@php
    $img = fn ($file) => asset('Manager Role/Update Purchase Order Status - MG/images/' . $file);
@endphp
<section class="mgr-po-update" data-name="Update Purchase Order Status - MG" data-node-id="111:3250">
    <div class="mgr-po-update__intro">
        <h2 class="mgr-po-update__title">
            Update status <span class="mgr-po-update__dot">·</span> PO-2051
        </h2>
        <p class="mgr-po-update__subtitle">
            Modify the current progression of this purchase order. All updates are logged for auditing.
        </p>
    </div>

    <form class="mgr-po-update__card" action="#" method="POST">
        @csrf
        <div class="mgr-po-update__row">
            <div class="mgr-po-update__field">
                <label class="mgr-po-update__label" for="supplier">Supplier</label>
                <input id="supplier" type="text" class="mgr-po-update__input is-readonly" value="Global Logistics Corp" readonly>
            </div>
            <div class="mgr-po-update__field">
                <label class="mgr-po-update__label" for="total_amount">Total Amount</label>
                <input id="total_amount" type="text" class="mgr-po-update__input is-readonly" value="$12,450.00 USD" readonly>
            </div>
        </div>

        <div class="mgr-po-update__field">
            <label class="mgr-po-update__label" for="current_status">Current Status</label>
            <div class="mgr-po-update__current">
                <span class="mgr-po-update__pill">
                    <span class="mgr-po-update__pill-dot" aria-hidden="true"></span>
                    Pending
                </span>
            </div>
        </div>

        <div class="mgr-po-update__field">
            <label class="mgr-po-update__label" for="new_status">New Status</label>
            <div class="mgr-po-update__select-wrap">
                <select id="new_status" name="new_status" class="mgr-po-update__select">
                    <option value="Order" selected>Order</option>
                    <option value="Ordered">Ordered</option>
                    <option value="Received">Received</option>
                    <option value="Pending">Pending</option>
                    <option value="Rejected">Rejected</option>
                </select>
                <img class="mgr-po-update__chevron" src="{{ $img('chevron.svg') }}" alt="" width="16" height="16">
            </div>
        </div>

        <div class="mgr-po-update__actions">
            <a href="{{ route('manager.orders') }}" class="mgr-po-update__cancel">Cancel</a>
            <button type="submit" class="mgr-po-update__submit">
                Update status
                <img src="{{ $img('play.svg') }}" alt="" width="14" height="14">
            </button>
        </div>
    </form>
</section>
@endsection
