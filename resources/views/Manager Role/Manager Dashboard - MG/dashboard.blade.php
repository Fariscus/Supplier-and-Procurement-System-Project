@extends('Manager Role.Manager Dashboard - MG.layout')

@section('title', 'Manager Dashboard - MG')

@section('header')
    <h1 class="mgr-header__title">Good Morning, Vattana</h1>
@endsection

@section('content')
<section class="mgr-dashboard" data-name="Manager Dashboard - MG">
    <div class="mgr-stats">
        <article class="mgr-stat">
            <div class="mgr-stat__top">
                <p class="mgr-stat__label">Pending Requests</p>
                <span class="mgr-stat__icon mgr-stat__icon--pending">
                    <img src="{{ asset('Manager Role/Manager Dashboard - MG/images/icon-pending.svg') }}" alt="" width="18" height="18">
                </span>
            </div>
            <p class="mgr-stat__value">7</p>
            <p class="mgr-stat__meta">+2 today</p>
        </article>

        <article class="mgr-stat">
            <div class="mgr-stat__top">
                <p class="mgr-stat__label">Approved</p>
                <span class="mgr-stat__icon mgr-stat__icon--approved">
                    <img src="{{ asset('Manager Role/Manager Dashboard - MG/images/icon-approved.svg') }}" alt="" width="18" height="18">
                </span>
            </div>
            <p class="mgr-stat__value">24</p>
        </article>

        <article class="mgr-stat">
            <div class="mgr-stat__top">
                <p class="mgr-stat__label">Rejected</p>
                <span class="mgr-stat__icon mgr-stat__icon--rejected">
                    <img src="{{ asset('Manager Role/Manager Dashboard - MG/images/icon-rejected.svg') }}" alt="" width="18" height="18">
                </span>
            </div>
            <p class="mgr-stat__value">3</p>
        </article>

        <article class="mgr-stat">
            <div class="mgr-stat__top">
                <p class="mgr-stat__label">Total Requests</p>
                <span class="mgr-stat__icon mgr-stat__icon--total">
                    <img src="{{ asset('Manager Role/Manager Dashboard - MG/images/icon-total.svg') }}" alt="" width="18" height="18">
                </span>
            </div>
            <p class="mgr-stat__value">158</p>
        </article>
    </div>

    <div class="mgr-panel">
        <div class="mgr-panel__head">
            <h2 class="mgr-panel__title">Recent purchase requests - all Departments</h2>
            <p class="mgr-panel__updated">Last updated just now</p>
        </div>

        <div class="mgr-table-wrap">
            <table class="mgr-table">
                <thead>
                    <tr>
                        <th scope="col">Department</th>
                        <th scope="col">Requested By</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $rows = [
                            ['dept' => 'Computer Science', 'by' => 'Dara Sok', 'date' => 'Jun 18, 2026', 'status' => 'Pending'],
                            ['dept' => 'Architecture', 'by' => 'Lina Pich', 'date' => 'Jun 16, 2026', 'status' => 'Approved'],
                            ['dept' => 'MIS', 'by' => 'Vuthy Heng', 'date' => 'Jun 15, 2026', 'status' => 'Rejected'],
                            ['dept' => 'Engineering', 'by' => 'Samnang Keo', 'date' => 'Jun 14, 2026', 'status' => 'Approved'],
                            ['dept' => 'Business', 'by' => 'Sophea Pen', 'date' => 'Jun 12, 2026', 'status' => 'Pending'],
                        ];
                    @endphp
                    @foreach ($rows as $row)
                        <tr>
                            <td>
                                <span class="mgr-dept">
                                    <span class="mgr-dept__icon" aria-hidden="true">
                                        <svg viewBox="0 0 24 24" fill="none">
                                            <path d="M3 21h18M5 21V8l7-4 7 4v13M9 21v-5h6v5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                    {{ $row['dept'] }}
                                </span>
                            </td>
                            <td>{{ $row['by'] }}</td>
                            <td>{{ $row['date'] }}</td>
                            <td>
                                <span class="mgr-badge mgr-badge--{{ strtolower($row['status']) }}">
                                    {{ $row['status'] }}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mgr-panel__footer">
            <p class="mgr-panel__count">Showing 5 of 158 results.</p>
            <nav class="mgr-pager" aria-label="Pagination">
                <a href="#" class="mgr-pager__btn is-disabled" aria-disabled="true">Previous</a>
                <a href="#" class="mgr-pager__btn">Next</a>
            </nav>
        </div>
    </div>
</section>
@endsection
