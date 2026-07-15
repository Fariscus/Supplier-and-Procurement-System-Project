@extends('Manager Role.Manager Dashboard - MG.layout')

@section('title', 'Quotation Lists - MG')

@section('header')
    <h1 class="mgr-header__title">Quotation Lists</h1>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('Manager Role/Quotation Lists - MG/css/lists.css') }}">
@endpush

@section('content')
<section class="mgr-ql" data-name="Quotation Lists - MG" data-node-id="113:1565">
    <div class="mgr-ql__toolbar">
        <div class="mgr-ql__filter">
            <label class="mgr-ql__filter-label" for="pr_reference">PR Reference</label>
            <select id="pr_reference" class="mgr-ql__select" name="pr_reference">
                <option value="all" selected>All</option>
                <option value="#00001">#00001</option>
                <option value="#00005">#00005</option>
                <option value="#00012">#00012</option>
                <option value="#00018">#00018</option>
                <option value="#00019">#00019</option>
                <option value="#00020">#00020</option>
                <option value="#00021">#00021</option>
            </select>
        </div>
    </div>

    <div class="mgr-ql__table-wrap">
        <table class="mgr-ql__table" id="mgr-ql-table">
            <thead>
                <tr>
                    <th scope="col">Quotation ID</th>
                    <th scope="col">PR Reference</th>
                    <th scope="col">Supplier</th>
                    <th scope="col">Date</th>
                    <th scope="col">Total</th>
                    <th scope="col"><span class="sr-only">Action</span></th>
                </tr>
            </thead>
            <tbody>
                @php
                    $rows = [
                        ['id' => '#00001', 'pr' => '#00001', 'supplier' => 'IBC', 'date' => 'Jun 16, 2026', 'total' => '$ 11.00'],
                        ['id' => '#00012', 'pr' => '#00012', 'supplier' => 'IBC', 'date' => 'Jun 19, 2026', 'total' => '$ 9.00'],
                        ['id' => '#00018', 'pr' => '#00018', 'supplier' => 'Local Market', 'date' => 'Jun 22, 2026', 'total' => '$ 9.00'],
                        ['id' => '#00020', 'pr' => '#00020', 'supplier' => 'Local Market', 'date' => 'Jun 22, 2026', 'total' => '$ 9.50'],
                        ['id' => '#00019', 'pr' => '#00019', 'supplier' => 'IBC', 'date' => 'Jun 22, 2026', 'total' => '$ 11.50'],
                        ['id' => '#00021', 'pr' => '#00021', 'supplier' => 'Local Market', 'date' => 'Jun 23, 2026', 'total' => '$ 5.00'],
                        ['id' => '#00002', 'pr' => '#00001', 'supplier' => 'Local Market', 'date' => 'Jun 18, 2026', 'total' => '$ 7.00'],
                        ['id' => '#00005', 'pr' => '#00005', 'supplier' => 'IBC', 'date' => 'Jun 17, 2026', 'total' => '$ 7.00'],
                        ['id' => '#00003', 'pr' => '#00001', 'supplier' => 'IBC', 'date' => 'Jun 20, 2026', 'total' => '$ 8.00'],
                    ];
                @endphp
                @foreach ($rows as $row)
                    <tr data-pr="{{ $row['pr'] }}">
                        <td class="mgr-ql__id">{{ $row['id'] }}</td>
                        <td>{{ $row['pr'] }}</td>
                        <td>{{ $row['supplier'] }}</td>
                        <td>{{ $row['date'] }}</td>
                        <td>{{ $row['total'] }}</td>
                        <td class="mgr-ql__action">
                            <a href="{{ route('manager.quotations.show') }}" class="mgr-ql__view">View &gt;</a>
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
    var select = document.getElementById('pr_reference');
    var rows = document.querySelectorAll('#mgr-ql-table tbody tr');
    if (!select) return;
    select.addEventListener('change', function () {
        var value = select.value;
        rows.forEach(function (row) {
            var show = value === 'all' || row.getAttribute('data-pr') === value;
            row.hidden = !show;
        });
    });
})();
</script>
@endpush
