@extends('Staff Role.Staff Dashboard - ST.layout')

@section('title', 'Quotation Details - ST')

@section('header')
    <h1 class="staff-header__title">
        Quotation Details
        <span class="quotation-details__header-id">#00001</span>
    </h1>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('Staff Role/Quotation Details - ST/css/quotation-details.css') }}">
@endpush

@section('content')
<section class="quotation-details" data-name="Quotation Details - ST">
    <div class="quotation-details__body">
        <a href="{{ route('staff.quotations.edit') }}" class="quotation-details__edit">EDIT</a>

        <div class="quotation-details__grid">
            <div class="quotation-details__item">
                <span class="quotation-details__label">Purchase request</span>
                <p class="quotation-details__value">PR #00001</p>
            </div>
            <div class="quotation-details__item">
                <span class="quotation-details__label">Quoted by</span>
                <p class="quotation-details__value">Vattana Hean</p>
            </div>
            <div class="quotation-details__item">
                <span class="quotation-details__label">Quotation date</span>
                <p class="quotation-details__value">Jun 16, 2026</p>
            </div>
            <div class="quotation-details__item">
                <span class="quotation-details__label">Total Price</span>
                <p class="quotation-details__value">$ 11.00</p>
            </div>
            <div class="quotation-details__item">
                <span class="quotation-details__label">Supplier</span>
                <p class="quotation-details__value">IBC</p>
            </div>
        </div>

        <table class="quotation-details__table">
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
            <h2 class="quotation-details__notes-title">Notes</h2>
            <p class="quotation-details__notes-box">Deliver within 3 business days</p>
        </div>
    </div>
</section>
@endsection
