@extends('Staff Role.Staff Dashboard - ST.layout')

@section('title', 'Reject Reason - ST')

@section('header')
    <h1 class="staff-header__title">Reject Purchase Request</h1>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('Staff Role/Reject Reason - ST/css/reject-reason.css') }}">
@endpush

@section('content')
<section class="reject-reason" data-name="Reject Reason - ST">
    <div class="reject-reason__top">
        <p class="reject-reason__ref">PR #00001</p>
        <span class="reject-reason__status">Rejected</span>
    </div>

    <div class="reject-reason__grid">
        <div class="reject-reason__item">
            <span class="reject-reason__label">Department</span>
            <p class="reject-reason__value">IE</p>
        </div>
        <div class="reject-reason__item">
            <span class="reject-reason__label">Request Date</span>
            <p class="reject-reason__value">Jun 16, 2026</p>
        </div>
        <div class="reject-reason__item">
            <span class="reject-reason__label">Reason</span>
            <p class="reject-reason__value">Want 2 more</p>
        </div>
        <div class="reject-reason__item">
            <span class="reject-reason__label">Rejected By</span>
            <p class="reject-reason__value">Kimtha Vay</p>
        </div>
        <div class="reject-reason__item reject-reason__item--spacer" aria-hidden="true"></div>
        <div class="reject-reason__item">
            <span class="reject-reason__label">Rejected Date</span>
            <p class="reject-reason__value">Jun 16, 2026</p>
        </div>
    </div>

    <div class="reject-reason__items">
        <div class="reject-reason__items-head">
            <span>Item name</span>
            <span>Quantity</span>
            <span>Est. price</span>
        </div>
        <div class="reject-reason__item-row">
            <div class="reject-reason__box">A4 Paper</div>
            <div class="reject-reason__box">2</div>
            <div class="reject-reason__box">$ 6.00</div>
        </div>
        <div class="reject-reason__item-row">
            <div class="reject-reason__box">Pen</div>
            <div class="reject-reason__box">3</div>
            <div class="reject-reason__box">$ 7.50</div>
        </div>
    </div>

    <div class="reject-reason__section">
        <h2 class="reject-reason__section-title">Reason for Rejection</h2>
        <p class="reject-reason__section-text">No need at the moment</p>
    </div>

    <div class="reject-reason__actions">
        <a href="{{ route('staff.prs') }}" class="reject-reason__back">Back</a>
    </div>
</section>
@endsection
