@extends('Staff Role.Staff Dashboard - ST.layout')

@section('title', 'Record Good Receive - ST')

@section('header')
    <h1 class="staff-header__title">Good Morning, Vattana</h1>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('Staff Role/Record Good Receive - ST/css/record-gr.css') }}">
@endpush

@section('content')
<section class="record-gr" data-name="Record Good Receive - ST">
    <div class="record-gr__intro">
        <h2 class="record-gr__title">Record goods received</h2>
        <p class="record-gr__subtitle">
            Log incoming inventory and reconcile against existing purchase orders to maintain accurate stock levels.
        </p>
    </div>

    <form class="record-gr__form" action="#" method="POST">
        @csrf

        <div class="record-gr__grid">
            <div class="record-gr__field">
                <label class="record-gr__label" for="purchase_order">Purchase order</label>
                <select id="purchase_order" name="purchase_order" class="record-gr__select" required>
                    <option value="" selected disabled>Select an active PO</option>
                    <option value="PO-2049">PO-2049</option>
                    <option value="PO-9920-XF">PO-9920-XF</option>
                    <option value="PO-9915-AB">PO-9915-AB</option>
                </select>
            </div>
            <div class="record-gr__field">
                <label class="record-gr__label" for="receive_date">Receive date</label>
                <input id="receive_date" name="receive_date" type="text" class="record-gr__input" value="06/22/2026">
            </div>
            <div class="record-gr__field">
                <label class="record-gr__label" for="item_count">Good Receive Items</label>
                <input id="item_count" name="item_count" type="text" class="record-gr__input" value="6">
            </div>
        </div>

        <div class="record-gr__field">
            <label class="record-gr__label" for="remarks">Remarks</label>
            <textarea
                id="remarks"
                name="remarks"
                class="record-gr__textarea"
                rows="5"
                placeholder="Include any discrepancies, damaged items, or specific delivery notes..."
            ></textarea>
        </div>

        <div class="record-gr__actions">
            <a href="{{ route('staff.goods') }}" class="record-gr__cancel">Cancel</a>
            <button type="submit" class="record-gr__submit">Save record</button>
        </div>
    </form>
</section>
@endsection
