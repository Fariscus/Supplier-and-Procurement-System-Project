@extends('Manager Role.Manager Dashboard - MG.layout')

@section('title', 'Report & Analytics - MG')

@push('styles')
    <link rel="stylesheet" href="{{ asset('Manager Role/Report & Analytics - MG/css/report.css') }}">
@endpush

@section('content')
@php
    $img = fn ($file) => asset('Manager Role/Report & Analytics - MG/images/' . $file);
@endphp
<section class="mgr-report" data-name="Report & Analytics - MG" data-node-id="116:2611">
    <div class="mgr-report__filters">
        <div class="mgr-report__field">
            <label class="mgr-report__label" for="date_range">Date Range</label>
            <div class="mgr-report__select-wrap">
                <select id="date_range" class="mgr-report__select">
                    <option value="30" selected>Last 30 Days</option>
                    <option value="7">Last 7 Days</option>
                    <option value="90">Last 90 Days</option>
                    <option value="365">Last Year</option>
                </select>
                <img src="{{ $img('chevron-down.svg') }}" alt="" width="12" height="8">
            </div>
        </div>

        <div class="mgr-report__field">
            <label class="mgr-report__label" for="department">Department</label>
            <div class="mgr-report__select-wrap">
                <select id="department" class="mgr-report__select">
                    <option value="all" selected>All Department</option>
                    <option value="procurement">Procurement</option>
                    <option value="warehouse">Warehouse</option>
                    <option value="finance">Finance</option>
                    <option value="operations">Operations</option>
                </select>
                <img src="{{ $img('chevron-down.svg') }}" alt="" width="12" height="8">
            </div>
        </div>
    </div>

    <div class="mgr-report__metrics">
        <article class="mgr-report__card">
            <p class="mgr-report__card-label">Total Spend</p>
            <p class="mgr-report__card-value">$4,281,092</p>
        </article>

        <article class="mgr-report__card">
            <p class="mgr-report__card-label">Pending Request</p>
            <p class="mgr-report__card-value">158</p>
        </article>
    </div>
</section>
@endsection
