@extends('Staff Role.Staff Dashboard - ST.layout')

@section('title', 'Quotation Lists - ST')

@section('header')
    <h1 class="staff-header__title">Quotation Lists</h1>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('Staff Role/Quotation Lists - ST/css/quotation-lists.css') }}">
@endpush

@section('content')
<section class="quotation-lists" data-name="Quotation Lists - ST">
    <div class="quotation-lists__toolbar">
        <div class="quotation-lists__filter">
            <label class="quotation-lists__filter-label" for="pr_reference">PR Reference</label>
            <select id="pr_reference" class="quotation-lists__select" name="pr_reference">
                <option value="all" selected>All</option>
                <option value="#00001">#00001</option>
                <option value="#00019">#00019</option>
            </select>
        </div>
        <a href="{{ route('staff.quotations.create') }}" class="quotation-lists__add">Add Quotation</a>
    </div>

    <div class="quotation-lists__table-wrap">
        <table class="quotation-lists__table">
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
                        ['id' => '#00011', 'pr' => '#00019', 'supplier' => 'Local Market', 'date' => 'Jun 15, 2026', 'total' => '$ 9.50'],
                        ['id' => '#00021', 'pr' => '#00001', 'supplier' => 'IBC', 'date' => 'Jun 14, 2026', 'total' => '$ 14.00'],
                        ['id' => '#00031', 'pr' => '#00019', 'supplier' => 'Local Market', 'date' => 'Jun 13, 2026', 'total' => '$ 8.25'],
                        ['id' => '#00041', 'pr' => '#00001', 'supplier' => 'IBC', 'date' => 'Jun 12, 2026', 'total' => '$ 11.00'],
                        ['id' => '#00051', 'pr' => '#00019', 'supplier' => 'Local Market', 'date' => 'Jun 11, 2026', 'total' => '$ 12.75'],
                        ['id' => '#00061', 'pr' => '#00001', 'supplier' => 'IBC', 'date' => 'Jun 10, 2026', 'total' => '$ 7.00'],
                        ['id' => '#00071', 'pr' => '#00019', 'supplier' => 'Local Market', 'date' => 'Jun 09, 2026', 'total' => '$ 10.50'],
                        ['id' => '#00081', 'pr' => '#00001', 'supplier' => 'IBC', 'date' => 'Jun 08, 2026', 'total' => '$ 9.00'],
                    ];
                @endphp
                @foreach ($rows as $row)
                    <tr>
                        <td>{{ $row['id'] }}</td>
                        <td>{{ $row['pr'] }}</td>
                        <td>{{ $row['supplier'] }}</td>
                        <td>{{ $row['date'] }}</td>
                        <td>{{ $row['total'] }}</td>
                        <td class="quotation-lists__action">
                            <a href="{{ route('staff.quotations.show') }}" class="quotation-lists__view">View &gt;</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection
