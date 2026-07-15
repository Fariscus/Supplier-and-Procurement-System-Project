@extends('Manager Role.Manager Dashboard - MG.layout')

@section('title', 'Approve PR Detail - MG')

@section('header')
    <h1 class="mgr-header__title">
        Purchase Request Detail
        <span class="mgr-prd__header-id">#00001</span>
    </h1>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('Manager Role/Approve PR Detail - MG/css/detail.css') }}">
@endpush

@section('content')
<section class="mgr-prd" data-name="Approve PR Detail - MG" data-node-id="302:1669">
    <div class="mgr-prd__top">
        <div>
            <p class="mgr-prd__ref">PR #00001</p>
            <h2 class="mgr-prd__title">IE Department Request</h2>
        </div>
        <span class="mgr-prd__status mgr-prd__status--approved">Approved</span>
    </div>

    <div class="mgr-prd__meta">
        <div class="mgr-prd__meta-item">
            <span class="mgr-prd__meta-label">Requested by</span>
            <p class="mgr-prd__meta-value">Vattana Hean</p>
        </div>
        <div class="mgr-prd__meta-item">
            <span class="mgr-prd__meta-label">Request Date</span>
            <p class="mgr-prd__meta-value">Jun 16, 2026</p>
        </div>
        <div class="mgr-prd__meta-item">
            <span class="mgr-prd__meta-label">Approved Date</span>
            <p class="mgr-prd__meta-value">Jun 16, 2026</p>
        </div>
    </div>

    <div class="mgr-prd__section">
        <h3 class="mgr-prd__section-title">Reason</h3>
        <p class="mgr-prd__section-text">Restocking for printing and admin job.</p>
    </div>

    <table class="mgr-prd__table">
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

    <div class="mgr-prd__actions">
        <a href="{{ route('manager.prs') }}" class="mgr-prd__btn">Back</a>
    </div>
</section>
@endsection
