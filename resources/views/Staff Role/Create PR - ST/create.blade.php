@extends('Staff Role.Staff Dashboard - ST.layout')

@section('title', 'Create PR - ST')

@section('header')
    <h1 class="staff-header__title">Create Purchase Request</h1>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('Staff Role/Create PR - ST/css/create-pr.css') }}">
@endpush

@section('content')
<section class="create-pr" data-name="Create PR - ST">
    <form class="create-pr__form" action="#" method="POST">
        @csrf

        <div class="create-pr__grid">
            <div class="create-pr__field">
                <label class="create-pr__label" for="department">Department</label>
                <select id="department" name="department" class="create-pr__input create-pr__select">
                    <option value="" selected disabled>Select your department</option>
                    <option value="IE">IE</option>
                    <option value="IT">IT</option>
                    <option value="HR">HR</option>
                    <option value="FIN">Finance</option>
                </select>
            </div>
            <div class="create-pr__field">
                <label class="create-pr__label" for="request_date">Request Date</label>
                <input
                    id="request_date"
                    name="request_date"
                    type="text"
                    class="create-pr__input"
                    placeholder="Select Date"
                    onfocus="this.type='date'"
                    onblur="if(!this.value)this.type='text'"
                >
            </div>
        </div>

        <div class="create-pr__field">
            <label class="create-pr__label" for="reason">Reason for request</label>
            <textarea
                id="reason"
                name="reason"
                class="create-pr__textarea"
                rows="5"
            ></textarea>
        </div>

        <div class="create-pr__items">
            <h2 class="create-pr__items-title">Request items</h2>

            <div class="create-pr__items-head">
                <span>Item name</span>
                <span>Quantity</span>
                <span>Est. price</span>
            </div>

            <div class="create-pr__items-body" id="pr-items">
                <div class="create-pr__item-row">
                    <input type="text" name="items[0][name]" class="create-pr__input" value="A4 Paper" placeholder="Select item">
                    <input type="text" name="items[0][qty]" class="create-pr__input create-pr__input--qty" value="2" placeholder="Input Qty">
                    <input type="text" name="items[0][price]" class="create-pr__input create-pr__input--price" value="$ 6.00" placeholder="">
                </div>
                <div class="create-pr__item-row">
                    <input type="text" name="items[1][name]" class="create-pr__input" value="Pen" placeholder="Select item">
                    <input type="text" name="items[1][qty]" class="create-pr__input create-pr__input--qty" value="2" placeholder="Input Qty">
                    <input type="text" name="items[1][price]" class="create-pr__input create-pr__input--price" value="$ 5.00" placeholder="">
                </div>
                <div class="create-pr__item-row">
                    <input type="text" name="items[2][name]" class="create-pr__input" value="" placeholder="Select item">
                    <input type="text" name="items[2][qty]" class="create-pr__input create-pr__input--qty" value="" placeholder="Input Qty">
                    <input type="text" name="items[2][price]" class="create-pr__input create-pr__input--price" value="" placeholder="">
                </div>
                <div class="create-pr__item-row">
                    <input type="text" name="items[3][name]" class="create-pr__input" value="" placeholder="Select item">
                    <input type="text" name="items[3][qty]" class="create-pr__input create-pr__input--qty" value="" placeholder="Input Qty">
                    <input type="text" name="items[3][price]" class="create-pr__input create-pr__input--price" value="" placeholder="">
                </div>
            </div>

            <button type="button" class="create-pr__add-row" id="add-item-row">+ Add item row</button>
        </div>

        <div class="create-pr__actions">
            <button type="submit" class="create-pr__submit">Submit Request</button>
            <a href="{{ route('staff.prs') }}" class="create-pr__cancel">Cancel</a>
        </div>
    </form>
</section>
@endsection

@push('scripts')
<script>
(function () {
    var body = document.getElementById('pr-items');
    var addBtn = document.getElementById('add-item-row');
    if (!body || !addBtn) return;

    addBtn.addEventListener('click', function () {
        var index = body.querySelectorAll('.create-pr__item-row').length;
        var row = document.createElement('div');
        row.className = 'create-pr__item-row';
        row.innerHTML =
            '<input type="text" name="items[' + index + '][name]" class="create-pr__input" value="" placeholder="Select item">' +
            '<input type="text" name="items[' + index + '][qty]" class="create-pr__input create-pr__input--qty" value="" placeholder="Input Qty">' +
            '<input type="text" name="items[' + index + '][price]" class="create-pr__input create-pr__input--price" value="" placeholder="">';
        body.appendChild(row);
    });
})();
</script>
@endpush
