@extends('Manager Role.Manager Dashboard - MG.layout')

@section('title', 'Create Purchase Order - MG')

@push('styles')
    <link rel="stylesheet" href="{{ asset('Manager Role/Create Purchase Order - MG/css/create.css') }}">
@endpush

@section('content')
@php
    $img = fn ($file) => asset('Manager Role/Create Purchase Order - MG/images/' . $file);
@endphp
<section class="mgr-po-create" data-name="Create purchase order - MG" data-node-id="111:2929">
    <div class="mgr-po-create__intro">
        <h2 class="mgr-po-create__title">Create Purchase Order</h2>
        <p class="mgr-po-create__subtitle">
            Enter the details below to generate a new purchase order from an existing request and quotation.
        </p>
    </div>

    <form class="mgr-po-create__card" action="#" method="POST" data-name="Main Form Card">
        @csrf

        <div class="mgr-po-create__card-head">
            <div class="mgr-po-create__card-title-wrap">
                <span class="mgr-po-create__card-icon" aria-hidden="true">
                    <img src="{{ $img('icon-order.svg') }}" alt="" width="18" height="20">
                </span>
                <h3 class="mgr-po-create__card-title">Order Information</h3>
            </div>
            <span class="mgr-po-create__draft">Draft Mode</span>
        </div>

        <div class="mgr-po-create__body">
            <div class="mgr-po-create__grid">
                <div class="mgr-po-create__field" data-name="Purchase Request Dropdown">
                    <label class="mgr-po-create__label" for="purchase_request">
                        Purchase Request <span class="mgr-po-create__req">*</span>
                    </label>
                    <div class="mgr-po-create__select-wrap">
                        <select id="purchase_request" name="purchase_request" class="mgr-po-create__select" required>
                            <option value="" selected disabled>Select a pending request</option>
                            <option value="PR-8820-24">PR-8820-24</option>
                            <option value="PR-1029">PR-1029</option>
                            <option value="PR-00001">PR-00001</option>
                        </select>
                        <img class="mgr-po-create__chevron" src="{{ $img('chevron.svg') }}" alt="" width="12" height="8">
                    </div>
                </div>

                <div class="mgr-po-create__field" data-name="Quotation Used Dropdown">
                    <label class="mgr-po-create__label" for="quotation_used">
                        Quotation Used <span class="mgr-po-create__req">*</span>
                    </label>
                    <div class="mgr-po-create__select-wrap">
                        <select id="quotation_used" name="quotation_used" class="mgr-po-create__select" required>
                            <option value="" selected disabled>Select a pending request</option>
                            <option value="Q-00001">Q-00001 · Golden Rice Co.</option>
                            <option value="Q-00012">Q-00012 · FreshMart Supplies</option>
                        </select>
                        <img class="mgr-po-create__chevron" src="{{ $img('chevron.svg') }}" alt="" width="12" height="8">
                    </div>
                </div>

                <div class="mgr-po-create__field" data-name="Supplier (Read-only)">
                    <label class="mgr-po-create__label" for="supplier">Supplier</label>
                    <div class="mgr-po-create__readonly">
                        <img src="{{ $img('icon-supplier.svg') }}" alt="" width="12" height="11">
                        <input
                            id="supplier"
                            name="supplier"
                            type="text"
                            class="mgr-po-create__input is-readonly"
                            value="Global Systems Inc."
                            readonly
                        >
                    </div>
                    <span class="mgr-po-create__hint">Automatically populated from quotation</span>
                </div>

                <div class="mgr-po-create__field" data-name="PO Date (Datepicker)">
                    <label class="mgr-po-create__label" for="po_date">PO Date</label>
                    <input
                        id="po_date"
                        name="po_date"
                        type="text"
                        class="mgr-po-create__input"
                        value="06/22/2024"
                    >
                </div>
            </div>

            <div class="mgr-po-create__total" data-name="Total Amount (Read-only)">
                <div class="mgr-po-create__total-left">
                    <span class="mgr-po-create__total-icon" aria-hidden="true">
                        <img src="{{ $img('icon-amount.svg') }}" alt="" width="22" height="16">
                    </span>
                    <div class="mgr-po-create__total-copy">
                        <span class="mgr-po-create__total-label">Total Order Amount</span>
                        <p class="mgr-po-create__total-value">$14,582.00</p>
                    </div>
                </div>
                <p class="mgr-po-create__total-note">Includes 8.5% Tax &amp; Shipping</p>
            </div>

            <div class="mgr-po-create__actions" data-name="Actions">
                <a href="{{ route('manager.orders') }}" class="mgr-po-create__cancel">Cancel</a>
                <button type="submit" class="mgr-po-create__submit">
                    <img src="{{ $img('check.svg') }}" alt="" width="12" height="12">
                    Create purchase order
                </button>
            </div>
        </div>
    </form>
</section>
@endsection
