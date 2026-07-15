@extends('Staff Role.Staff Dashboard - ST.layout')

@section('title', 'Edit PR Detail - ST')

@section('header')
    <h1 class="staff-header__title">Edit Purchase Request</h1>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('Staff Role/Create PR - ST/css/create-pr.css') }}">
    <link rel="stylesheet" href="{{ asset('Staff Role/Edit PR Detail - ST/css/edit-pr.css') }}">
@endpush

@section('content')
<section class="create-pr edit-pr" data-name="Edit PR Detail - ST">
    <form class="create-pr__form edit-pr__form" action="#" method="POST">
        @csrf

        <p class="edit-pr__ref">PR #00001</p>

        <div class="create-pr__grid">
            <div class="create-pr__field">
                <label class="create-pr__label" for="department">Department</label>
                <input
                    id="department"
                    name="department"
                    type="text"
                    class="create-pr__input"
                    value="IE"
                >
            </div>
            <div class="create-pr__field">
                <label class="create-pr__label" for="request_date">Request Date</label>
                <input
                    id="request_date"
                    name="request_date"
                    type="text"
                    class="create-pr__input"
                    value="Jun 18, 2026"
                >
            </div>
        </div>

        <div class="create-pr__field">
            <label class="create-pr__label" for="reason">Reason</label>
            <textarea
                id="reason"
                name="reason"
                class="create-pr__textarea"
                rows="5"
            >Restocking for printing and admin job.</textarea>
        </div>

        <div class="create-pr__items">
            <div class="create-pr__items-head">
                <span>Item name</span>
                <span>Quantity</span>
                <span>Est. price</span>
            </div>

            <div class="create-pr__items-body">
                <div class="create-pr__item-row">
                    <input type="text" name="items[0][name]" class="create-pr__input" value="A4 Paper" placeholder="Select Item">
                    <input type="text" name="items[0][qty]" class="create-pr__input create-pr__input--qty" value="2" placeholder="Input Qty">
                    <input type="text" name="items[0][price]" class="create-pr__input create-pr__input--price" value="$ 6.00" placeholder="">
                </div>
                <div class="create-pr__item-row">
                    <input type="text" name="items[1][name]" class="create-pr__input" value="Pen" placeholder="Select Item">
                    <input type="text" name="items[1][qty]" class="create-pr__input create-pr__input--qty" value="3" placeholder="Input Qty">
                    <input type="text" name="items[1][price]" class="create-pr__input create-pr__input--price" value="$ 7.50" placeholder="">
                </div>
                <div class="create-pr__item-row">
                    <input type="text" name="items[2][name]" class="create-pr__input" value="" placeholder="Select Item">
                    <input type="text" name="items[2][qty]" class="create-pr__input create-pr__input--qty" value="" placeholder="Input Qty">
                    <input type="text" name="items[2][price]" class="create-pr__input create-pr__input--price" value="" placeholder="">
                </div>
                <div class="create-pr__item-row">
                    <input type="text" name="items[3][name]" class="create-pr__input" value="" placeholder="Select Item">
                    <input type="text" name="items[3][qty]" class="create-pr__input create-pr__input--qty" value="" placeholder="Input Qty">
                    <input type="text" name="items[3][price]" class="create-pr__input create-pr__input--price" value="" placeholder="">
                </div>
            </div>
        </div>

        <div class="create-pr__actions">
            <button type="submit" class="create-pr__submit">Save changes</button>
            <a href="{{ route('staff.prs') }}" class="edit-pr__cancel">Cancel</a>
        </div>
    </form>
</section>
@endsection
