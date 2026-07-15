@extends('Staff Role.Staff Dashboard - ST.layout')

@section('title', 'My PRs - ST')

@section('header')
    <h1 class="staff-header__title">My Purchase Requests</h1>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('Staff Role/My PRs - ST/css/prs.css') }}">
@endpush

@section('content')
<section class="my-prs" data-name="My PRs - ST">
    <div class="my-prs__toolbar">
        <div class="my-prs__filters" role="tablist" aria-label="Filter by status">
            <button type="button" class="my-prs__filter is-active" data-filter="all">All</button>
            <button type="button" class="my-prs__filter" data-filter="pending">Pending</button>
            <button type="button" class="my-prs__filter" data-filter="approved">Approved</button>
            <button type="button" class="my-prs__filter" data-filter="rejected">Rejected</button>
        </div>
        <a href="{{ route('staff.prs.create') }}" class="my-prs__create">+ Create PR</a>
    </div>

    <div class="my-prs__table-wrap">
        <table class="my-prs__table">
            <thead>
                <tr>
                    <th scope="col">PR ID</th>
                    <th scope="col">Department</th>
                    <th scope="col">Request Date</th>
                    <th scope="col">Status</th>
                    <th scope="col"><span class="sr-only">Action</span></th>
                </tr>
            </thead>
            <tbody>
                @php
                    $rows = [
                        ['id' => '#00001', 'dept' => 'IE', 'date' => 'Jun 16, 2026', 'status' => 'Pending'],
                        ['id' => '#00011', 'dept' => 'IE', 'date' => 'Jun 15, 2026', 'status' => 'Approved'],
                        ['id' => '#00021', 'dept' => 'IE', 'date' => 'Jun 14, 2026', 'status' => 'Rejected'],
                        ['id' => '#00031', 'dept' => 'IE', 'date' => 'Jun 13, 2026', 'status' => 'Pending'],
                        ['id' => '#00041', 'dept' => 'IE', 'date' => 'Jun 12, 2026', 'status' => 'Approved'],
                        ['id' => '#00051', 'dept' => 'IE', 'date' => 'Jun 11, 2026', 'status' => 'Pending'],
                        ['id' => '#00061', 'dept' => 'IE', 'date' => 'Jun 10, 2026', 'status' => 'Rejected'],
                        ['id' => '#00071', 'dept' => 'IE', 'date' => 'Jun 09, 2026', 'status' => 'Approved'],
                        ['id' => '#00081', 'dept' => 'IE', 'date' => 'Jun 08, 2026', 'status' => 'Pending'],
                    ];
                @endphp
                @foreach ($rows as $row)
                    @php
                        $viewRoute = match (strtolower($row['status'])) {
                            'approved' => 'staff.prs.detail.approved',
                            'rejected' => 'staff.prs.reject-reason',
                            default => 'staff.prs.detail.pending',
                        };
                    @endphp
                    <tr data-status="{{ strtolower($row['status']) }}">
                        <td class="my-prs__id">{{ $row['id'] }}</td>
                        <td>{{ $row['dept'] }}</td>
                        <td>{{ $row['date'] }}</td>
                        <td>
                            <span class="my-prs__status my-prs__status--{{ strtolower($row['status']) }}">
                                {{ $row['status'] }}
                            </span>
                        </td>
                        <td class="my-prs__action">
                            <a href="{{ route($viewRoute) }}" class="my-prs__view">View &gt;</a>
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
document.querySelectorAll('.my-prs__filter').forEach(function (btn) {
    btn.addEventListener('click', function () {
        document.querySelectorAll('.my-prs__filter').forEach(function (b) {
            b.classList.remove('is-active');
        });
        btn.classList.add('is-active');
        var filter = btn.getAttribute('data-filter');
        document.querySelectorAll('.my-prs__table tbody tr').forEach(function (row) {
            if (filter === 'all' || row.getAttribute('data-status') === filter) {
                row.hidden = false;
            } else {
                row.hidden = true;
            }
        });
    });
});
</script>
@endpush
