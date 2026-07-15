@extends('Manager Role.Manager Dashboard - MG.layout')

@section('title', 'Purchase Requests - MG')

@section('header')
    <h1 class="mgr-header__title">Purchase Requests</h1>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('Manager Role/Purchase Requests - MG/css/prs.css') }}">
@endpush

@section('content')
<section class="mgr-prs" data-name="Purchase Requests - MG">
    <div class="mgr-prs__toolbar">
        <div class="mgr-prs__filters" role="tablist" aria-label="Filter by status">
            <button type="button" class="mgr-prs__filter" data-filter="all">All</button>
            <button type="button" class="mgr-prs__filter is-active" data-filter="pending">Pending</button>
            <button type="button" class="mgr-prs__filter" data-filter="approved">Approved</button>
            <button type="button" class="mgr-prs__filter" data-filter="rejected">Rejected</button>
        </div>
        <div class="mgr-prs__search">
            <input
                type="search"
                class="mgr-prs__search-input"
                placeholder="Search department / requester"
                aria-label="Search department or requester"
            >
        </div>
    </div>

    <div class="mgr-prs__table-wrap">
        <table class="mgr-prs__table" id="mgr-prs-table">
            <thead>
                <tr>
                    <th scope="col">PR ID</th>
                    <th scope="col">Department</th>
                    <th scope="col">Requester</th>
                    <th scope="col">Request Date</th>
                    <th scope="col">Status</th>
                    <th scope="col" data-col="decision-by">Approved By</th>
                    <th scope="col" data-col="decision-date">Approved Date</th>
                    <th scope="col"><span class="sr-only">Action</span></th>
                </tr>
            </thead>
            <tbody>
                @php
                    $rows = [
                        // Pending
                        ['id' => '#00001', 'dept' => 'IE', 'by' => 'Vattana Hean', 'date' => 'Jun 16, 2026', 'status' => 'Pending', 'decision_by' => '', 'decision_date' => ''],
                        ['id' => '#00011', 'dept' => 'IT', 'by' => 'Faris Fy', 'date' => 'Jun 18, 2026', 'status' => 'Pending', 'decision_by' => '', 'decision_date' => ''],
                        ['id' => '#00013', 'dept' => 'IE', 'by' => 'Vattana Hean', 'date' => 'Jun 20, 2026', 'status' => 'Pending', 'decision_by' => '', 'decision_date' => ''],
                        ['id' => '#00005', 'dept' => 'IE', 'by' => 'Vattana Hean', 'date' => 'Jun 17, 2026', 'status' => 'Pending', 'decision_by' => '', 'decision_date' => ''],
                        ['id' => '#00021', 'dept' => 'IT', 'by' => 'Faris Fy', 'date' => 'Jun 15, 2026', 'status' => 'Pending', 'decision_by' => '', 'decision_date' => ''],
                        ['id' => '#00031', 'dept' => 'IE', 'by' => 'Dara Sok', 'date' => 'Jun 14, 2026', 'status' => 'Pending', 'decision_by' => '', 'decision_date' => ''],
                        ['id' => '#00041', 'dept' => 'IE', 'by' => 'Vattana Hean', 'date' => 'Jun 12, 2026', 'status' => 'Pending', 'decision_by' => '', 'decision_date' => ''],
                        ['id' => '#00051', 'dept' => 'IT', 'by' => 'Faris Fy', 'date' => 'Jun 11, 2026', 'status' => 'Pending', 'decision_by' => '', 'decision_date' => ''],
                        ['id' => '#00061', 'dept' => 'IE', 'by' => 'Vattana Hean', 'date' => 'Jun 10, 2026', 'status' => 'Pending', 'decision_by' => '', 'decision_date' => ''],
                        // Approved
                        ['id' => '#00001', 'dept' => 'IE', 'by' => 'Vattana Hean', 'date' => 'Jun 16, 2026', 'status' => 'Approved', 'decision_by' => 'Bun Nak', 'decision_date' => 'Jun 18, 2026'],
                        ['id' => '#00011', 'dept' => 'IT', 'by' => 'Faris Fy', 'date' => 'Jun 18, 2026', 'status' => 'Approved', 'decision_by' => 'Bun Nak', 'decision_date' => 'Jun 18, 2026'],
                        ['id' => '#00013', 'dept' => 'IE', 'by' => 'Vattana Hean', 'date' => 'Jun 20, 2026', 'status' => 'Approved', 'decision_by' => 'Bun Nak', 'decision_date' => 'Jun 18, 2026'],
                        ['id' => '#00005', 'dept' => 'IE', 'by' => 'Vattana Hean', 'date' => 'Jun 17, 2026', 'status' => 'Approved', 'decision_by' => 'Bun Nak', 'decision_date' => 'Jun 17, 2026'],
                        // Rejected
                        ['id' => '#00001', 'dept' => 'IE', 'by' => 'Vattana Hean', 'date' => 'Jun 16, 2026', 'status' => 'Rejected', 'decision_by' => 'Theara Sok', 'decision_date' => 'Jun 16, 2026'],
                        ['id' => '#00011', 'dept' => 'IT', 'by' => 'Faris Fy', 'date' => 'Jun 18, 2026', 'status' => 'Rejected', 'decision_by' => 'Kimtha Vay', 'decision_date' => 'Jun 18, 2026'],
                        ['id' => '#00013', 'dept' => 'IE', 'by' => 'Vattana Hean', 'date' => 'Jun 20, 2026', 'status' => 'Rejected', 'decision_by' => 'Rashford Mu', 'decision_date' => 'Jun 20, 2026'],
                        ['id' => '#00005', 'dept' => 'IE', 'by' => 'Vattana Hean', 'date' => 'Jun 17, 2026', 'status' => 'Rejected', 'decision_by' => 'Kimtha Vay', 'decision_date' => 'Jun 17, 2026'],
                    ];
                @endphp
                @foreach ($rows as $row)
                    <tr
                        data-status="{{ strtolower($row['status']) }}"
                        data-search="{{ strtolower($row['dept'] . ' ' . $row['by']) }}"
                    >
                        <td class="mgr-prs__id">{{ $row['id'] }}</td>
                        <td>{{ $row['dept'] }}</td>
                        <td>{{ $row['by'] }}</td>
                        <td>{{ $row['date'] }}</td>
                        <td>
                            <span class="mgr-prs__status mgr-prs__status--{{ strtolower($row['status']) }}">
                                {{ $row['status'] }}
                            </span>
                        </td>
                        <td class="mgr-prs__decision-by">{{ $row['decision_by'] }}</td>
                        <td class="mgr-prs__decision-date">{{ $row['decision_date'] }}</td>
                        <td class="mgr-prs__action">
                            @php
                                $viewRoute = match (strtolower($row['status'])) {
                                    'approved' => 'manager.prs.detail.approved',
                                    'rejected' => 'manager.prs.detail.rejected',
                                    default => 'manager.prs.review',
                                };
                            @endphp
                            <a href="{{ route($viewRoute) }}" class="mgr-prs__view">View &gt;</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection

@push('scripts')
<script>
(function () {
    var filters = document.querySelectorAll('.mgr-prs__filter');
    var rows = document.querySelectorAll('.mgr-prs__table tbody tr');
    var search = document.querySelector('.mgr-prs__search-input');
    var byHead = document.querySelector('[data-col="decision-by"]');
    var dateHead = document.querySelector('[data-col="decision-date"]');
    var current = 'pending';

    function updateHeaders() {
        if (!byHead || !dateHead) return;
        if (current === 'rejected') {
            byHead.textContent = 'Rejected By';
            dateHead.textContent = 'Rejected Date';
        } else {
            byHead.textContent = 'Approved By';
            dateHead.textContent = 'Approved Date';
        }
    }

    function apply() {
        var q = (search && search.value || '').trim().toLowerCase();
        rows.forEach(function (row) {
            var statusOk = current === 'all' || row.getAttribute('data-status') === current;
            var searchOk = !q || (row.getAttribute('data-search') || '').indexOf(q) !== -1;
            row.hidden = !(statusOk && searchOk);
        });
        updateHeaders();
    }

    filters.forEach(function (btn) {
        btn.addEventListener('click', function () {
            filters.forEach(function (b) { b.classList.remove('is-active'); });
            btn.classList.add('is-active');
            current = btn.getAttribute('data-filter');
            apply();
        });
    });

    if (search) search.addEventListener('input', apply);
    apply();
})();
</script>
@endpush
