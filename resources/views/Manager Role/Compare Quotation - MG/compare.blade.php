@extends('Manager Role.Manager Dashboard - MG.layout')

@section('title', 'Compare Quotation - MG')

{{-- Default greeting header: Good Morning, Vattana --}}

@push('styles')
    <link rel="stylesheet" href="{{ asset('Manager Role/Compare Quotation - MG/css/compare.css') }}">
@endpush

@section('content')
@php
    $img = fn ($file) => asset('Manager Role/Compare Quotation - MG/images/' . $file);
@endphp
<section class="mgr-cq" data-name="Compare Quotation - MG" data-node-id="127:2477">
    <div class="mgr-cq__field">
        <label class="mgr-cq__label" for="purchase_request">
            Purchase Request <span class="mgr-cq__required">*</span>
        </label>
        <select id="purchase_request" class="mgr-cq__select" name="purchase_request">
            <option value="PR-00001" selected>PR-00001</option>
            <option value="PR-00005">PR-00005</option>
            <option value="PR-00012">PR-00012</option>
        </select>
    </div>

    <div class="mgr-cq__intro">
        <h2 class="mgr-cq__title">Compare quotations</h2>
        <p class="mgr-cq__subtitle">Review and select the most competitive quote for the requested inventory restock.</p>
    </div>

    <div class="mgr-cq__grid" data-name="Bento Grid - Quotation Comparison">
        <article class="mgr-cq__card mgr-cq__card--recommended" data-name="Card 1: Best Option">
            <span class="mgr-cq__badge">Recommended</span>
            <div class="mgr-cq__vendor">
                <h3 class="mgr-cq__vendor-name">Golden Rice Co.</h3>
                <p class="mgr-cq__vendor-meta">
                    <img src="{{ $img('verified-check.svg') }}" alt="" width="14" height="14">
                    Verified Vendor • Premium Partner
                </p>
            </div>
            <div class="mgr-cq__price-block">
                <span class="mgr-cq__price-label">Total Price</span>
                <p class="mgr-cq__price mgr-cq__price--best">$420.00</p>
            </div>
            <p class="mgr-cq__note">Includes bulk discount (15%) and free logistics insurance for PR-1042.</p>
        </article>

        <article class="mgr-cq__card" data-name="Card 2">
            <div class="mgr-cq__vendor">
                <h3 class="mgr-cq__vendor-name">FreshMart Supplies</h3>
                <p class="mgr-cq__vendor-meta">Standard Vendor</p>
            </div>
            <div class="mgr-cq__price-block">
                <span class="mgr-cq__price-label">Total Price</span>
                <p class="mgr-cq__price">$455.00</p>
            </div>
            <p class="mgr-cq__note">Standard pricing applied. Logistics fee not included in base quote.</p>
        </article>

        <article class="mgr-cq__card" data-name="Card 3">
            <div class="mgr-cq__vendor">
                <h3 class="mgr-cq__vendor-name">CleanPro Chemicals</h3>
                <p class="mgr-cq__vendor-meta">Specialized Logistics</p>
            </div>
            <div class="mgr-cq__price-block">
                <span class="mgr-cq__price-label">Total Price</span>
                <p class="mgr-cq__price">$470.00</p>
            </div>
            <p class="mgr-cq__note">Fast tracking included. High-compliance handling guaranteed.</p>
        </article>
    </div>

    <div class="mgr-cq__more-wrap">
        <button type="button" class="mgr-cq__more" id="mgr-cq-more">
            + Request more quotes
        </button>
    </div>

    <div class="mgr-cq__action" data-name="Main Action Area">
        <img class="mgr-cq__action-icon" src="{{ $img('proceed-check.svg') }}" alt="" width="46" height="51">
        <h3 class="mgr-cq__action-title">Proceed with Best Value?</h3>
        <p class="mgr-cq__action-text">
            Choosing Golden Rice Co. will save the department $35.00 and reduce delivery wait time by 2 days compared to the next best option.
        </p>
        <a href="#" class="mgr-cq__action-btn">
            <span>Select Golden Rice Co.</span>
            <img src="{{ $img('arrow-right.svg') }}" alt="" width="16" height="16">
            <span>Create PO</span>
        </a>
        <a href="{{ route('manager.quotations.show') }}" class="mgr-cq__action-link">Review detailed line items comparison</a>
    </div>
</section>
@endsection

@push('scripts')
<script>
(function () {
    var btn = document.getElementById('mgr-cq-more');
    var grid = document.querySelector('.mgr-cq__grid');
    if (!btn || !grid) return;
    btn.addEventListener('click', function () {
        var extra = document.createElement('article');
        extra.className = 'mgr-cq__card mgr-cq__card--extra';
        extra.innerHTML =
            '<div class="mgr-cq__vendor">' +
            '<h3 class="mgr-cq__vendor-name">Harbor Office Supply</h3>' +
            '<p class="mgr-cq__vendor-meta">Standard Vendor</p>' +
            '</div>' +
            '<div class="mgr-cq__price-block">' +
            '<span class="mgr-cq__price-label">Total Price</span>' +
            '<p class="mgr-cq__price">$448.00</p>' +
            '</div>' +
            '<p class="mgr-cq__note">Additional quote loaded for comparison. Delivery in 4 business days.</p>';
        grid.appendChild(extra);
        btn.disabled = true;
        btn.textContent = 'More quotes loaded';
    });
})();
</script>
@endpush
