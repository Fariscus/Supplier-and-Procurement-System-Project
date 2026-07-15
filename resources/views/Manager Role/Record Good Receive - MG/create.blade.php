@extends('Manager Role.Manager Dashboard - MG.layout')

@section('title', 'Record Good Receive - MG')

@push('styles')
    <link rel="stylesheet" href="{{ asset('Manager Role/Record Good Receive - MG/css/record.css') }}">
@endpush

@section('content')
@php
    $img = fn ($file) => asset('Manager Role/Record Good Receive - MG/images/' . $file);
@endphp
<section class="mgr-record-gr" data-name="Record Good Receive - MG" data-node-id="127:3646">
    <form class="mgr-record-gr__card" action="#" method="POST" data-name="Main Form Canvas">
        @csrf

        <div class="mgr-record-gr__head">
            <h2 class="mgr-record-gr__title">Record goods received</h2>
            <p class="mgr-record-gr__subtitle">
                Log incoming inventory and reconcile against existing purchase orders
                to maintain accurate stock levels.
            </p>
        </div>

        <div class="mgr-record-gr__body">
            <div class="mgr-record-gr__grid">
                <div class="mgr-record-gr__field">
                    <label class="mgr-record-gr__label" for="purchase_order">Purchase order</label>
                    <div class="mgr-record-gr__select-wrap">
                        <select id="purchase_order" name="purchase_order" class="mgr-record-gr__select" required>
                            <option value="" selected disabled>Select an active PO</option>
                            <option value="PO-2049">PO-2049</option>
                            <option value="PO-9920-XF">PO-9920-XF</option>
                            <option value="PO-9915-AB">PO-9915-AB</option>
                        </select>
                        <img class="mgr-record-gr__chevron" src="{{ $img('chevron.svg') }}" alt="" width="12" height="8">
                    </div>
                </div>
                <div class="mgr-record-gr__field">
                    <label class="mgr-record-gr__label" for="receive_date">Receive date</label>
                    <input id="receive_date" name="receive_date" type="text" class="mgr-record-gr__input" value="06/22/2026">
                </div>
                <div class="mgr-record-gr__field">
                    <label class="mgr-record-gr__label" for="item_count">Good Receive Items</label>
                    <input id="item_count" name="item_count" type="text" class="mgr-record-gr__input" value="6">
                </div>
            </div>

            <div class="mgr-record-gr__field">
                <label class="mgr-record-gr__label" for="remarks">Remarks</label>
                <textarea
                    id="remarks"
                    name="remarks"
                    class="mgr-record-gr__textarea"
                    rows="5"
                    placeholder="Include any discrepancies, damaged items, or specific delivery notes..."
                ></textarea>
            </div>

            <div class="mgr-record-gr__actions">
                <a href="{{ route('manager.goods') }}" class="mgr-record-gr__cancel">Cancel</a>
                <button type="submit" class="mgr-record-gr__submit">Save record</button>
            </div>
        </div>
    </form>
</section>
@endsection
