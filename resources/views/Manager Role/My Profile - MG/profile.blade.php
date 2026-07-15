@extends('Manager Role.Manager Dashboard - MG.layout')

@section('title', 'My profile - MG')

@section('header')
    <h1 class="mgr-header__title">My profile</h1>
@endsection

@section('header_user')
    <div class="mgr-header__user-inline">
        <span class="mgr-header__name">Dara Sok</span>
        <span class="mgr-header__sep" aria-hidden="true">·</span>
        <span class="mgr-header__name">Manager</span>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('Manager Role/My Profile - MG/css/profile.css') }}">
@endpush

@section('content')
<section class="mgr-profile" data-name="My profile - MG">
    <div class="mgr-profile__summary">
        <div class="mgr-profile__avatar" aria-hidden="true">DS</div>
        <div class="mgr-profile__identity">
            <p class="mgr-profile__fullname">Dara Sok</p>
            <p class="mgr-profile__email">dara.sok@hotel.com</p>
            <span class="mgr-profile__badge">MANAGER</span>
        </div>
    </div>

    <form class="mgr-profile__form" action="#" method="POST" novalidate>
        @csrf

        <div class="mgr-profile__section">
            <h2 class="mgr-profile__section-title">Account details</h2>
            <div class="mgr-profile__grid">
                <div class="mgr-profile__field">
                    <label class="mgr-profile__label" for="full_name">Full name</label>
                    <input id="full_name" name="full_name" type="text" class="mgr-profile__input" value="Dara Sok" autocomplete="name">
                </div>
                <div class="mgr-profile__field">
                    <label class="mgr-profile__label" for="email">Email</label>
                    <input id="email" name="email" type="email" class="mgr-profile__input" value="dara.sok@hotel.com" autocomplete="email">
                </div>
            </div>
        </div>

        <div class="mgr-profile__section">
            <h2 class="mgr-profile__section-title">Change password</h2>
            <div class="mgr-profile__field">
                <label class="mgr-profile__label" for="current_password">Current password</label>
                <input id="current_password" name="current_password" type="password" class="mgr-profile__input" value="********" autocomplete="current-password">
            </div>
            <div class="mgr-profile__grid">
                <div class="mgr-profile__field">
                    <label class="mgr-profile__label" for="new_password">New password</label>
                    <input id="new_password" name="new_password" type="password" class="mgr-profile__input" value="********" autocomplete="new-password">
                </div>
                <div class="mgr-profile__field">
                    <label class="mgr-profile__label" for="new_password_confirmation">Confirm new password</label>
                    <input id="new_password_confirmation" name="new_password_confirmation" type="password" class="mgr-profile__input" value="********" autocomplete="new-password">
                </div>
            </div>
        </div>

        <div class="mgr-profile__actions">
            <button type="submit" class="mgr-profile__submit">Save Update</button>
        </div>
    </form>
</section>
@endsection
