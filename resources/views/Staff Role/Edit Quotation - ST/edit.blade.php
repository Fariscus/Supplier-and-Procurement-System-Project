@extends('Staff Role.Staff Dashboard - ST.layout')

@section('title', 'Edit Quotation - ST')

@section('header')
    <h1 class="staff-header__title">Good Morning, Vattana</h1>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('Staff Role/Edit Quotation - ST/css/edit-quotation.css') }}">
@endpush

@section('content')
<section class="edit-quotation" data-name="Edit Quotation - ST">
    <div class="edit-quotation__intro">
        <h2 class="edit-quotation__page-title">Edit QT-0231</h2>
        <p class="edit-quotation__crumbs">
            <a href="{{ route('staff.quotations') }}">Quotations</a> &gt; Edit Quotation
        </p>
    </div>

    <form action="#" method="POST">
        @csrf

        <div class="edit-quotation__card">
            <div class="edit-quotation__grid">
                <div class="edit-quotation__field">
                    <label class="edit-quotation__label" for="pr_id">Purchase request ID</label>
                    <input id="pr_id" name="pr_id" type="text" class="edit-quotation__input" value="PR-1042 · Kitchen" disabled>
                </div>
                <div class="edit-quotation__field">
                    <label class="edit-quotation__label" for="supplier">Supplier</label>
                    <select id="supplier" name="supplier" class="edit-quotation__select">
                        <option value="Golden Rice Co." selected>Golden Rice Co.</option>
                        <option value="IBC">IBC</option>
                        <option value="Local Market">Local Market</option>
                    </select>
                </div>
                <div class="edit-quotation__field">
                    <label class="edit-quotation__label" for="quotation_date">Quotation date</label>
                    <div class="edit-quotation__date-wrap">
                        <input id="quotation_date" name="quotation_date" type="text" class="edit-quotation__input" value="Jun 19, 2026">
                        <svg class="edit-quotation__date-icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <rect x="3" y="5" width="18" height="16" rx="2" stroke="currentColor" stroke-width="1.5"/>
                            <path d="M3 9h18M8 3v4M16 3v4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="edit-quotation__card">
            <div class="edit-quotation__items-top">
                <h3 class="edit-quotation__items-title">Items</h3>
                <button type="button" class="edit-quotation__add-item" id="eq-add-item">+ Add Item</button>
            </div>

            <table class="edit-quotation__table">
                <thead>
                    <tr>
                        <th scope="col">Item name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Unit price</th>
                        <th scope="col">Subtotal</th>
                    </tr>
                </thead>
                <tbody id="eq-items-body">
                    <tr>
                        <td>All-purpose flour</td>
                        <td>20</td>
                        <td>$3.10</td>
                        <td>$62.00</td>
                    </tr>
                    <tr>
                        <td>Cooking oil 5L</td>
                        <td>6</td>
                        <td>$11.50</td>
                        <td>$69.00</td>
                    </tr>
                </tbody>
            </table>

            <div class="edit-quotation__total">
                <span>Total Amount</span>
                <strong>$131.00</strong>
            </div>
        </div>

        <div class="edit-quotation__actions">
            <a href="{{ route('staff.quotations') }}" class="edit-quotation__cancel">Cancel</a>
            <button type="submit" class="edit-quotation__save">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="M5 3h11l3 3v15H5V3z" stroke="currentColor" stroke-width="1.6"/>
                    <path d="M8 3v6h8V3M8 17h8" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>
                </svg>
                Save changes
            </button>
        </div>
    </form>
</section>
@endsection
