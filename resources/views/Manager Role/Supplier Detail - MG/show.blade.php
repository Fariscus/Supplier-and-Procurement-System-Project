@extends('Manager Role.Manager Dashboard - MG.layout')

@section('title', 'Supplier Detail - MG')

@push('styles')
    <link rel="stylesheet" href="{{ asset('Manager Role/Supplier Detail - MG/css/detail.css') }}">
@endpush

@section('content')
<section class="mgr-supplier-detail" data-name="Supplier Detail - MG" data-node-id="9:32">
    <header class="mgr-supplier-detail__header">
        <h2 class="mgr-supplier-detail__name">Golden Rice Co.</h2>
        <p class="mgr-supplier-detail__meta">
            <span>Dara Sok</span>
            <span class="mgr-supplier-detail__dot" aria-hidden="true">•</span>
            <span>Staff</span>
        </p>
    </header>

    <a href="{{ route('manager.suppliers.edit') }}" class="mgr-supplier-detail__edit">EDIT</a>

    <div class="mgr-supplier-detail__grid">
        <div class="mgr-supplier-detail__field">
            <span class="mgr-supplier-detail__label">Contact Person</span>
            <div class="mgr-supplier-detail__value">Somchai Thongdee</div>
        </div>

        <div class="mgr-supplier-detail__field">
            <span class="mgr-supplier-detail__label">Phone</span>
            <div class="mgr-supplier-detail__value">+66 2 123 4567</div>
        </div>

        <div class="mgr-supplier-detail__field">
            <span class="mgr-supplier-detail__label">Email</span>
            <div class="mgr-supplier-detail__value">info@goldenrice.co</div>
        </div>

        <div class="mgr-supplier-detail__field">
            <span class="mgr-supplier-detail__label">Status</span>
            <div class="mgr-supplier-detail__value mgr-supplier-detail__value--status">
                <span class="mgr-supplier-detail__status-dot" aria-hidden="true"></span>
                Active Supplier
            </div>
        </div>

        <div class="mgr-supplier-detail__field mgr-supplier-detail__field--full">
            <span class="mgr-supplier-detail__label">Address</span>
            <div class="mgr-supplier-detail__value">enter the address</div>
        </div>
    </div>

    <div class="mgr-supplier-detail__actions">
        <a href="{{ route('manager.quotations') }}" class="mgr-supplier-detail__btn mgr-supplier-detail__btn--primary">
            Quotation history
        </a>
        <a href="{{ route('manager.orders') }}" class="mgr-supplier-detail__btn mgr-supplier-detail__btn--outline">
            Purchase order history
        </a>
    </div>
</section>
@endsection
