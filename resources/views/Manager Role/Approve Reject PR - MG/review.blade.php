@extends('Manager Role.Manager Dashboard - MG.layout')

@section('title', 'Approve Reject PR - MG')

@section('header')
    <h1 class="mgr-header__title">
        APPROVE / REJECT PR
        <span class="mgr-review__header-id">#00001</span>
    </h1>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('Manager Role/Approve Reject PR - MG/css/review.css') }}">
@endpush

@section('content')
<section class="mgr-review" data-name="Approve Reject PR - MG">
    <form class="mgr-review__card" action="#" method="POST">
        @csrf

        <div class="mgr-review__intro">
            <p class="mgr-review__ref">PR #00001</p>
            <h2 class="mgr-review__title">IE Department Request</h2>
        </div>

        <div class="mgr-review__meta">
            <div class="mgr-review__meta-item">
                <span class="mgr-review__label">Requested by</span>
                <p class="mgr-review__value">Vattana Hean</p>
            </div>
            <div class="mgr-review__meta-item">
                <span class="mgr-review__label">Request Date</span>
                <p class="mgr-review__value">Jun 16, 2026</p>
            </div>
        </div>

        <div class="mgr-review__section">
            <span class="mgr-review__label">Reason</span>
            <p class="mgr-review__value">Restocking for printing and admin job.</p>
        </div>

        <div class="mgr-review__dates">
            <div class="mgr-review__field">
                <label class="mgr-review__label" for="approved_date">Approved Date</label>
                <input id="approved_date" name="approved_date" type="text" class="mgr-review__input" value="06/22/2026">
            </div>
            <div class="mgr-review__field">
                <label class="mgr-review__label" for="rejected_date">Rejected Date</label>
                <input id="rejected_date" name="rejected_date" type="text" class="mgr-review__input" value="06/22/2026">
            </div>
        </div>

        <table class="mgr-review__table">
            <thead>
                <tr>
                    <th scope="col">Item name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Est. price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>A4 Paper</td>
                    <td>2</td>
                    <td>$ 6.00</td>
                </tr>
                <tr>
                    <td>Pen</td>
                    <td>2</td>
                    <td>$ 5.00</td>
                </tr>
            </tbody>
        </table>

        <div class="mgr-review__field">
            <label class="mgr-review__label" for="rejection_reason">Rejection Reason</label>
            <textarea
                id="rejection_reason"
                name="rejection_reason"
                class="mgr-review__textarea"
                rows="4"
                placeholder="Required if rejecting."
            ></textarea>
        </div>

        <div class="mgr-review__actions">
            <button type="submit" name="action" value="approve" class="mgr-review__approve">Approve request</button>
            <button type="submit" name="action" value="reject" class="mgr-review__reject">Reject request</button>
        </div>
    </form>
</section>
@endsection
