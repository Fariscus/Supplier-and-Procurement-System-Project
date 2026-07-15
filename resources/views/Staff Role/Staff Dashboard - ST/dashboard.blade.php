@extends('Staff Role.Staff Dashboard - ST.layout')

@section('title', 'Staff Dashboard')

@section('content')
<section class="staff-dashboard" data-node-id="5:30" data-name="Staff Dashboard - ST">
    <div class="staff-dashboard__intro">
        <h2 class="staff-dashboard__heading">Procurement Dashboard</h2>
        <p class="staff-dashboard__subtitle">Monitoring organizational spending and request cycles.</p>
    </div>

    <div class="staff-metrics">
        <article class="staff-metric staff-metric--dark">
            <div class="staff-metric__top">
                <span class="staff-metric__label">My pending request</span>
                <span class="staff-metric__icon">
                    <img src="{{ asset('Staff Role/Staff Dashboard - ST/images/icon-pending-clock.svg') }}" alt="" width="20" height="20">
                </span>
            </div>
            <p class="staff-metric__value">7</p>
            <div class="staff-metric__trend">
                <span class="staff-metric__trend-icon">
                    <img src="{{ asset('Staff Role/Staff Dashboard - ST/images/icon-trend-up.svg') }}" alt="" width="16" height="16">
                </span>
                <span class="staff-metric__trend-text">+2 from yesterday</span>
            </div>
        </article>

        <article class="staff-metric staff-metric--light">
            <div class="staff-metric__top">
                <span class="staff-metric__label">Item Received this month</span>
                <span class="staff-metric__icon">
                    <img src="{{ asset('Staff Role/Staff Dashboard - ST/images/icon-received.svg') }}" alt="" width="20" height="20">
                </span>
            </div>
            <p class="staff-metric__value">124</p>
            <div class="staff-metric__meta">
                <span class="staff-metric__meta-icon">
                    <img src="{{ asset('Staff Role/Staff Dashboard - ST/images/icon-monthly-clock.svg') }}" alt="" width="16" height="16">
                </span>
                <span class="staff-metric__meta-text">Monthly Total</span>
            </div>
        </article>
    </div>
</section>
@endsection
