@extends('Staff Role.My Profile - ST.layout')

@section('title', 'My profile - ST')

@section('header')
    <h1 class="staff-header__title">My profile</h1>
@endsection

@section('content')
<section class="my-profile" data-name="My profile - ST">
    <div class="my-profile__summary">
        <div class="my-profile__avatar" aria-hidden="true">DS</div>
        <div class="my-profile__identity">
            <p class="my-profile__fullname">Dara Sok</p>
            <p class="my-profile__email">dara.sok@hotel.com</p>
            <span class="my-profile__badge">STAFF</span>
        </div>
    </div>

    <form class="my-profile__form" action="#" method="POST" novalidate>
        @csrf

        <div class="my-profile__section">
            <h2 class="my-profile__section-title">Account details</h2>
            <div class="my-profile__grid">
                <div class="my-profile__field">
                    <label class="my-profile__label" for="full_name">Full name</label>
                    <input
                        id="full_name"
                        name="full_name"
                        type="text"
                        class="my-profile__input"
                        value="Dara Sok"
                        autocomplete="name"
                    >
                </div>
                <div class="my-profile__field">
                    <label class="my-profile__label" for="email">Email</label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        class="my-profile__input"
                        value="dara.sok@hotel.com"
                        autocomplete="email"
                    >
                </div>
            </div>
        </div>

        <div class="my-profile__section">
            <h2 class="my-profile__section-title">Change password</h2>
            <div class="my-profile__field my-profile__field--full">
                <label class="my-profile__label" for="current_password">Current password</label>
                <input
                    id="current_password"
                    name="current_password"
                    type="password"
                    class="my-profile__input"
                    value="********"
                    autocomplete="current-password"
                >
            </div>
            <div class="my-profile__grid">
                <div class="my-profile__field">
                    <label class="my-profile__label" for="new_password">New password</label>
                    <input
                        id="new_password"
                        name="new_password"
                        type="password"
                        class="my-profile__input"
                        value="********"
                        autocomplete="new-password"
                    >
                </div>
                <div class="my-profile__field">
                    <label class="my-profile__label" for="new_password_confirmation">Confirm new password</label>
                    <input
                        id="new_password_confirmation"
                        name="new_password_confirmation"
                        type="password"
                        class="my-profile__input"
                        value="********"
                        autocomplete="new-password"
                    >
                </div>
            </div>
        </div>

        <div class="my-profile__actions">
            <button type="submit" class="my-profile__submit">Save Update</button>
        </div>
    </form>
</section>
@endsection
