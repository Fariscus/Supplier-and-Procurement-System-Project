@extends('Staff Role.Staff Dashboard - ST.layout')

@section('title', 'Purchase Request Detail - ST')

@section('header')
    <h1 class="staff-header__title">
        Purchase Request Detail
        <span class="pr-detail__header-id">#00001</span>
    </h1>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('Staff Role/Purchase Request Detail - ST/css/pr-detail.css') }}">
@endpush

@section('content')
<section class="pr-detail" data-name="Purchase Request Detail - ST (Pending)">
    <div class="pr-detail__top">
        <div>
            <p class="pr-detail__ref">PR #00001</p>
            <h2 class="pr-detail__title">IE Department Request</h2>
        </div>
        <span class="pr-detail__status pr-detail__status--pending">Pending</span>
    </div>

    <div class="pr-detail__meta">
        <div class="pr-detail__meta-item">
            <span class="pr-detail__meta-label">Requested by</span>
            <p class="pr-detail__meta-value">Vattana Hean</p>
        </div>
        <div class="pr-detail__meta-item">
            <span class="pr-detail__meta-label">Request Date</span>
            <p class="pr-detail__meta-value">Jun 16, 2026</p>
        </div>
    </div>

    <div class="pr-detail__section">
        <h3 class="pr-detail__section-title">Reason</h3>
        <p class="pr-detail__section-text">Restocking for printing and admin job.</p>
    </div>

    <table class="pr-detail__table">
        <thead>
            <tr>
                <th scope="col">Item name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Est. price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>A4 Paper</td>
                <td>2</td>
                <td>$ 6.00</td>
            </tr>
            <tr>
                <td>Pen</td>
                <td>2</td>
                <td>$ 5.00</td>
            </tr>
            <tr class="is-empty"><td>&nbsp;</td><td></td><td></td></tr>
            <tr class="is-empty"><td>&nbsp;</td><td></td><td></td></tr>
            <tr class="is-empty"><td>&nbsp;</td><td></td><td></td></tr>
        </tbody>
    </table>

    <div class="pr-detail__actions pr-detail__actions--start">
        <a href="{{ route('staff.prs.edit') }}" class="pr-detail__btn pr-detail__btn--primary">Edit Request</a>
    </div>
</section>
@endsection
