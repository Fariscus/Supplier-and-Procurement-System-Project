@extends('Manager Role.Manager Dashboard - MG.layout')

@section('title', 'Quotation Details - MG')

@section('header')
    <h1 class="mgr-header__title">
        Quotation Details
        <span class="mgr-qd__header-id">#00001</span>
    </h1>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('Manager Role/Quotation Details - MG/css/details.css') }}">
@endpush

@section('content')
<section class="mgr-qd" data-name="Quotation Details - MG" data-node-id="113:2106">
    <div class="mgr-qd__body">
        <div class="mgr-qd__grid">
            <div class="mgr-qd__item">
                <span class="mgr-qd__label">Purchase request</span>
                <p class="mgr-qd__value">PR #00001</p>
            </div>
            <div class="mgr-qd__item">
                <span class="mgr-qd__label">Quotation date</span>
                <p class="mgr-qd__value">Jun 16, 2026</p>
            </div>
            <div class="mgr-qd__item">
                <span class="mgr-qd__label">Supplier</span>
                <p class="mgr-qd__value">IBC</p>
            </div>
            <div class="mgr-qd__item">
                <span class="mgr-qd__label">Quoted by</span>
                <p class="mgr-qd__value">Vattana Hean</p>
            </div>
            <div class="mgr-qd__item">
                <span class="mgr-qd__label">Total Price</span>
                <p class="mgr-qd__value mgr-qd__value--strong">$ 11.00</p>
            </div>
        </div>

        <table class="mgr-qd__table">
            <thead>
                <tr>
                    <th scope="col">Item name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Unit price</th>
                    <th scope="col">Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>A4 Paper</td>
                    <td>2 cases</td>
                    <td>$ 3.00</td>
                    <td>$ 6.00</td>
                </tr>
                <tr>
                    <td>Pen</td>
                    <td>2 boxes</td>
                    <td>$ 2.50</td>
                    <td>$ 5.00</td>
                </tr>
            </tbody>
        </table>

        <div>
            <h2 class="mgr-qd__notes-title">Notes</h2>
            <p class="mgr-qd__notes-box">Deliver within 3 business days</p>
        </div>

        <div class="mgr-qd__actions">
            <a href="{{ route('manager.quotations') }}" class="mgr-qd__back">Back</a>
        </div>
    </div>
</section>
@endsection
