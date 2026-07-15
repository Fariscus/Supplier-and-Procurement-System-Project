@extends('Manager Role.Manager Dashboard - MG.layout')

@section('title', 'Good Receive Detail - MG')

@push('styles')
    <link rel="stylesheet" href="{{ asset('Manager Role/Good Receive Detail - MG/css/detail.css') }}">
@endpush

@section('content')
@php
    $img = fn ($file) => asset('Manager Role/Good Receive Detail - MG/images/' . $file);
@endphp
<section class="mgr-gr-detail" data-name="Good receive detail - MG" data-node-id="127:3736">
    <div class="mgr-gr-detail__top">
        <div class="mgr-gr-detail__back-row">
            <a href="{{ route('manager.goods') }}" class="mgr-gr-detail__back" aria-label="Back to Goods Received">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="M15 18l-6-6 6-6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
            <h2 class="mgr-gr-detail__ref">GR-3011 · PO-2049</h2>
        </div>
        <div class="mgr-gr-detail__status-row">
            <p class="mgr-gr-detail__note-label">Goods Received Note</p>
            <span class="mgr-gr-detail__badge">RECEIVED</span>
        </div>
    </div>

    <div class="mgr-gr-detail__layout">
        <article class="mgr-gr-detail__card">
            <div class="mgr-gr-detail__card-head">
                <h3 class="mgr-gr-detail__card-title">General Information</h3>
                <svg class="mgr-gr-detail__info-icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.6"/>
                    <path d="M12 10v6M12 7.5h.01" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                </svg>
            </div>

            <div class="mgr-gr-detail__meta">
                <div class="mgr-gr-detail__meta-item">
                    <span class="mgr-gr-detail__meta-label">Linked PO</span>
                    <p class="mgr-gr-detail__meta-value">PO-2049</p>
                </div>
                <div class="mgr-gr-detail__meta-item">
                    <span class="mgr-gr-detail__meta-label">Received By</span>
                    <p class="mgr-gr-detail__meta-value">
                        <span class="mgr-gr-detail__person">
                            <span class="mgr-gr-detail__avatar" aria-hidden="true">JS</span>
                            Jane Smith
                        </span>
                    </p>
                </div>
                <div class="mgr-gr-detail__meta-item">
                    <span class="mgr-gr-detail__meta-label">Receive Date</span>
                    <p class="mgr-gr-detail__meta-value">Oct 24, 2023</p>
                </div>
                <div class="mgr-gr-detail__meta-item">
                    <span class="mgr-gr-detail__meta-label">Good Receive Items</span>
                    <p class="mgr-gr-detail__meta-value">6</p>
                </div>
            </div>

            <div class="mgr-gr-detail__remarks">
                <span class="mgr-gr-detail__remarks-label">Remarks</span>
                <p class="mgr-gr-detail__remarks-box">
                    “All items inspected upon arrival. Packaging was intact and no damages were found. Matched against the packing list and purchase order. Ready for inventory logging.”
                </p>
            </div>
        </article>

        <aside class="mgr-gr-detail__art">
            <img
                src="{{ $img('warehouse-delivery.svg') }}"
                alt="Warehouse staff unloading delivery boxes from a truck"
            >
        </aside>
    </div>
</section>
@endsection
