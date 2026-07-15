@extends('Manager Role.Manager Dashboard - MG.layout')

@section('title', 'Add Supplier - MG')

@push('styles')
    <link rel="stylesheet" href="{{ asset('Manager Role/Add Supplier - MG/css/add.css') }}">
@endpush

@section('content')
@php
    $img = fn ($file) => asset('Manager Role/Add Supplier - MG/images/' . $file);
@endphp
<section class="mgr-add-supplier" data-name="Add Supplier - MG" data-node-id="9:30">
    <div class="mgr-add-supplier__intro">
        <h2 class="mgr-add-supplier__title">Add New Supplier</h2>
        <p class="mgr-add-supplier__subtitle">
            Register a new vendor in the system to begin issuing purchase requests and tracking inventory.
        </p>
    </div>

    <form class="mgr-add-supplier__card" action="#" method="POST">
        @csrf

        <div class="mgr-add-supplier__field">
            <label class="mgr-add-supplier__label" for="supplier_name">Supplier Name</label>
            <input
                id="supplier_name"
                name="supplier_name"
                type="text"
                class="mgr-add-supplier__input"
                placeholder="e.g. Global Logistics Corp"
            >
        </div>

        <div class="mgr-add-supplier__field">
            <label class="mgr-add-supplier__label" for="contact_person">Contact Person</label>
            <input
                id="contact_person"
                name="contact_person"
                type="text"
                class="mgr-add-supplier__input"
                placeholder="Full name of primary contact"
            >
        </div>

        <div class="mgr-add-supplier__grid">
            <div class="mgr-add-supplier__field">
                <label class="mgr-add-supplier__label" for="email">Email Address</label>
                <div class="mgr-add-supplier__input-icon">
                    <img src="{{ $img('icon-email.svg') }}" alt="" width="17" height="14">
                    <input
                        id="email"
                        name="email"
                        type="email"
                        class="mgr-add-supplier__input"
                        placeholder="contact@supplier.com"
                    >
                </div>
            </div>
            <div class="mgr-add-supplier__field">
                <label class="mgr-add-supplier__label" for="phone">Phone Number</label>
                <div class="mgr-add-supplier__input-icon">
                    <img src="{{ $img('icon-phone.svg') }}" alt="" width="15" height="15">
                    <input
                        id="phone"
                        name="phone"
                        type="tel"
                        class="mgr-add-supplier__input"
                        placeholder="+1 (555) 000-0000"
                    >
                </div>
            </div>
        </div>

        <div class="mgr-add-supplier__field">
            <label class="mgr-add-supplier__label" for="address">Business Address</label>
            <textarea
                id="address"
                name="address"
                class="mgr-add-supplier__textarea"
                rows="4"
                placeholder="Full street address, city, state, and zip code"
            ></textarea>
        </div>

        <div class="mgr-add-supplier__footer">
            <p class="mgr-add-supplier__note">
                <img src="{{ $img('icon-info.svg') }}" alt="" width="15" height="15">
                All information is encrypted and stored according to compliance standards.
            </p>
            <div class="mgr-add-supplier__actions">
                <a href="{{ route('manager.suppliers') }}" class="mgr-add-supplier__cancel">Cancel</a>
                <button type="submit" class="mgr-add-supplier__submit">Save Supplier</button>
            </div>
        </div>
    </form>
</section>
@endsection
