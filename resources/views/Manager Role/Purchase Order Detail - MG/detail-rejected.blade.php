@extends('Manager Role.Manager Dashboard - MG.layout')

@section('title', 'Purchase Order Detail - MG')

@push('styles')
    <link rel="stylesheet" href="{{ asset('Manager Role/Purchase Order Detail - MG/css/detail.css') }}">
@endpush

@section('content')
@php
    $img = fn ($file) => asset('Manager Role/Purchase Order Detail - MG/images/' . $file);
@endphp
<section class="mgr-po-detail" data-name="Purchase Order Detail - MG (Rejected)">
    <div class="mgr-po-detail__top">
        <div class="mgr-po-detail__heading">
            <h2 class="mgr-po-detail__title">PO-2051 · Golden Rice Co.</h2>
            <span class="mgr-po-detail__badge mgr-po-detail__badge--rejected">Rejected</span>
        </div>
    </div>

    <div class="mgr-po-detail__alert" role="alert">
        <img class="mgr-po-detail__alert-icon" src="{{ $img('warn.svg') }}" alt="">
        <div>
            <p class="mgr-po-detail__alert-title">Order Rejected</p>
            <p class="mgr-po-detail__alert-text">
                This order has been rejected because of the following reasons: The price is too high. Please contact the supplier to negotiate.
            </p>
        </div>
    </div>

    <div class="mgr-po-detail__cards">
        <article class="mgr-po-detail__card">
            <span class="mgr-po-detail__card-label">Linked PR</span>
            <p class="mgr-po-detail__card-value">PR-8820-24</p>
            <a href="{{ route('manager.prs.detail.rejected') }}" class="mgr-po-detail__card-link">View Request details</a>
        </article>
        <article class="mgr-po-detail__card">
            <span class="mgr-po-detail__card-label">Created By</span>
            <div class="mgr-po-detail__person">
                <span class="mgr-po-detail__avatar">AM</span>
                <div>
                    <p class="mgr-po-detail__card-value" style="font-size:16px">Alex Miller</p>
                    <p class="mgr-po-detail__card-sub">Procurement Dept.</p>
                </div>
            </div>
        </article>
        <article class="mgr-po-detail__card">
            <span class="mgr-po-detail__card-label">PO Date</span>
            <p class="mgr-po-detail__card-value" style="font-size:18px">Oct 24, 2024</p>
            <p class="mgr-po-detail__card-sub">Due: Nov 15, 2024</p>
        </article>
        <article class="mgr-po-detail__card">
            <span class="mgr-po-detail__card-label">Status</span>
            <p class="mgr-po-detail__card-value" style="font-size:18px">Rejected</p>
            <p class="mgr-po-detail__card-sub">Closed by Manager</p>
        </article>
    </div>
</section>
@endsection
