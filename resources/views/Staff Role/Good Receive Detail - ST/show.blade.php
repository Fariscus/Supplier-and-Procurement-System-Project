@extends('Staff Role.Staff Dashboard - ST.layout')

@section('title', 'Good Receive Detail - ST')

@section('header')
    <h1 class="staff-header__title">Good Morning, Vattana</h1>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('Staff Role/Good Receive Detail - ST/css/gr-detail.css') }}">
@endpush

@section('content')
<section class="gr-detail" data-name="Good Receive Detail - ST">
    <div class="gr-detail__top">
        <div class="gr-detail__back-row">
            <a href="{{ route('staff.goods') }}" class="gr-detail__back" aria-label="Back to Goods Received">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="M15 18l-6-6 6-6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
            <h2 class="gr-detail__ref">GR-3011 · PO-2049</h2>
        </div>
        <div class="gr-detail__status-row">
            <p class="gr-detail__note-label">Goods Received Note</p>
            <span class="gr-detail__badge">RECEIVED</span>
        </div>
    </div>

    <div class="gr-detail__layout">
        <article class="gr-detail__card">
            <div class="gr-detail__card-head">
                <h3 class="gr-detail__card-title">General Information</h3>
                <svg class="gr-detail__info-icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.6"/>
                    <path d="M12 10v6M12 7.5h.01" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                </svg>
            </div>

            <div class="gr-detail__meta">
                <div class="gr-detail__meta-item">
                    <span class="gr-detail__meta-label">Linked PO</span>
                    <p class="gr-detail__meta-value">PO-2049</p>
                </div>
                <div class="gr-detail__meta-item">
                    <span class="gr-detail__meta-label">Received By</span>
                    <p class="gr-detail__meta-value">
                        <span class="gr-detail__person">
                            <span class="gr-detail__avatar" aria-hidden="true">JS</span>
                            Jane Smith
                        </span>
                    </p>
                </div>
                <div class="gr-detail__meta-item">
                    <span class="gr-detail__meta-label">Receive Date</span>
                    <p class="gr-detail__meta-value">Oct 24, 2023</p>
                </div>
                <div class="gr-detail__meta-item">
                    <span class="gr-detail__meta-label">Good Receive Items</span>
                    <p class="gr-detail__meta-value">6</p>
                </div>
            </div>

            <div>
                <span class="gr-detail__remarks-label">Remarks</span>
                <p class="gr-detail__remarks-box">
                    “All items inspected upon arrival. Packaging was intact and no damages were found. Matched against the packing list and purchase order. Ready for inventory logging.”
                </p>
            </div>
        </article>

        <aside class="gr-detail__art">
            <img
                src="{{ asset('Staff Role/Good Receive Detail - ST/images/warehouse-delivery.svg') }}"
                alt="Warehouse staff unloading delivery boxes from a truck"
            >
        </aside>
    </div>
</section>
@endsection
