@extends('Manager Role.Manager Dashboard - MG.layout')

@section('title', 'Edit / Delete Supplier - MG')

@push('styles')
    <link rel="stylesheet" href="{{ asset('Manager Role/Edit / Delete Supplier - MG/css/edit.css') }}">
@endpush

@section('content')
<section class="mgr-supplier-edit" data-name="Edit / Delete Supplier - MG" data-node-id="228:2099">
    <header class="mgr-supplier-edit__header">
        <h2 class="mgr-supplier-edit__name">Golden Rice Co.</h2>
        <p class="mgr-supplier-edit__meta">
            <span>Dara Sok</span>
            <span class="mgr-supplier-edit__dot" aria-hidden="true">•</span>
            <span>Staff</span>
        </p>
    </header>

    <form class="mgr-supplier-edit__form" action="#" method="POST">
        @csrf

        <div class="mgr-supplier-edit__grid">
            <div class="mgr-supplier-edit__field">
                <label class="mgr-supplier-edit__label" for="contact_person">Contact Person</label>
                <input
                    id="contact_person"
                    name="contact_person"
                    type="text"
                    class="mgr-supplier-edit__input"
                    value="Somchai Thongdee"
                >
            </div>

            <div class="mgr-supplier-edit__field">
                <label class="mgr-supplier-edit__label" for="phone">Phone</label>
                <input
                    id="phone"
                    name="phone"
                    type="tel"
                    class="mgr-supplier-edit__input"
                    value="+66 2 123 4567"
                >
            </div>

            <div class="mgr-supplier-edit__field">
                <label class="mgr-supplier-edit__label" for="email">Email</label>
                <input
                    id="email"
                    name="email"
                    type="email"
                    class="mgr-supplier-edit__input"
                    value="info@goldenrice.co"
                >
            </div>

            <div class="mgr-supplier-edit__field">
                <label class="mgr-supplier-edit__label" for="status">Status</label>
                <div class="mgr-supplier-edit__status" id="status">
                    <span class="mgr-supplier-edit__status-dot" aria-hidden="true"></span>
                    Active Supplier
                </div>
            </div>

            <div class="mgr-supplier-edit__field mgr-supplier-edit__field--full">
                <label class="mgr-supplier-edit__label" for="address">Address</label>
                <input
                    id="address"
                    name="address"
                    type="text"
                    class="mgr-supplier-edit__input"
                    placeholder="enter the address"
                    value="enter the address"
                >
            </div>
        </div>

        <div class="mgr-supplier-edit__actions">
            <button type="submit" class="mgr-supplier-edit__btn mgr-supplier-edit__btn--save">
                Save Change
            </button>
            <button type="button" class="mgr-supplier-edit__btn mgr-supplier-edit__btn--delete">
                Delete
            </button>
        </div>
    </form>
</section>
@endsection
