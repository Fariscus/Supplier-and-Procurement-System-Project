@extends('Staff Role.Staff Dashboard - ST.layout')

@section('title', 'Add Quotation - ST')

@section('header')
    <h1 class="staff-header__title">Add Quotation</h1>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('Staff Role/Add Quotation - ST/css/add-quotation.css') }}">
@endpush

@section('content')
<section class="add-quotation" data-name="Add Quotation - ST">
    <form class="add-quotation__form" action="#" method="POST">
        @csrf

        <div class="add-quotation__grid">
            <div class="add-quotation__field">
                <label class="add-quotation__label" for="pr_id">Purchase request ID</label>
                <select id="pr_id" name="pr_id" class="add-quotation__select" required>
                    <option value="" selected disabled>Select PR</option>
                    <option value="PR-00001">PR #00001</option>
                    <option value="PR-00019">PR #00019</option>
                </select>
            </div>
            <div class="add-quotation__field">
                <label class="add-quotation__label" for="supplier">Supplier</label>
                <select id="supplier" name="supplier" class="add-quotation__select" required>
                    <option value="" selected disabled>Select Supplier</option>
                    <option value="IBC">IBC</option>
                    <option value="Local Market">Local Market</option>
                </select>
            </div>
            <div class="add-quotation__field">
                <label class="add-quotation__label" for="quotation_date">Quotation Date</label>
                <input
                    id="quotation_date"
                    name="quotation_date"
                    type="text"
                    class="add-quotation__input"
                    placeholder="Select Date"
                    onfocus="this.type='date'"
                    onblur="if(!this.value)this.type='text'"
                >
            </div>
        </div>

        <div>
            <h2 class="add-quotation__section-title">Items</h2>
            <div class="add-quotation__items-head">
                <span>Item name</span>
                <span>Quantity</span>
                <span>Unit price</span>
                <span>Sub Total</span>
            </div>
            <div class="add-quotation__item-row">
                <input type="text" name="items[0][name]" class="add-quotation__input" value="A4 Paper">
                <input type="text" name="items[0][qty]" class="add-quotation__input" value="2">
                <input type="text" name="items[0][unit_price]" class="add-quotation__input" value="$ 3.00">
                <input type="text" name="items[0][subtotal]" class="add-quotation__input" value="$ 6.00">
            </div>
            <div class="add-quotation__item-row">
                <input type="text" name="items[1][name]" class="add-quotation__input" value="Pen">
                <input type="text" name="items[1][qty]" class="add-quotation__input" value="2">
                <input type="text" name="items[1][unit_price]" class="add-quotation__input" value="$ 2.50">
                <input type="text" name="items[1][subtotal]" class="add-quotation__input" value="$ 5.00">
            </div>
        </div>

        <div class="add-quotation__field">
            <h2 class="add-quotation__section-title">Notes</h2>
            <textarea id="notes" name="notes" class="add-quotation__textarea" rows="4">Deliver within the next 3 business days.</textarea>
        </div>

        <div class="add-quotation__actions">
            <button type="submit" class="add-quotation__submit">Save quotation</button>
            <a href="{{ route('staff.quotations') }}" class="add-quotation__cancel">Cancel</a>
        </div>
    </form>
</section>
@endsection
