@extends('Manager Role.Manager Dashboard - MG.layout')

@section('title', 'Add User - MG')

@push('styles')
    <link rel="stylesheet" href="{{ asset('Manager Role/Add User - MG/css/add.css') }}">
@endpush

@section('content')
@php
    $img = fn ($file) => asset('Manager Role/Add User - MG/images/' . $file);
@endphp
<section class="mgr-add-user" data-name="Add User - MG" data-node-id="5:38">
    <h2 class="mgr-add-user__title">Add User</h2>

    <form class="mgr-add-user__form" action="#" method="POST">
        @csrf

        <div class="mgr-add-user__field">
            <label class="mgr-add-user__label" for="full_name">Full Name</label>
            <input
                id="full_name"
                name="full_name"
                type="text"
                class="mgr-add-user__input"
                placeholder="Enter your name"
            >
        </div>

        <div class="mgr-add-user__field">
            <label class="mgr-add-user__label" for="email">Email</label>
            <input
                id="email"
                name="email"
                type="email"
                class="mgr-add-user__input"
                placeholder="Enter your email"
            >
        </div>

        <div class="mgr-add-user__field">
            <label class="mgr-add-user__label" for="password">Password</label>
            <input
                id="password"
                name="password"
                type="password"
                class="mgr-add-user__input"
                placeholder="......"
            >
        </div>

        <div class="mgr-add-user__field">
            <label class="mgr-add-user__label" for="department">Department</label>
            <div class="mgr-add-user__select-wrap">
                <select id="department" name="department" class="mgr-add-user__select">
                    <option value="" disabled selected>choose your department</option>
                    <option value="procurement">Procurement</option>
                    <option value="warehouse">Warehouse</option>
                    <option value="finance">Finance</option>
                    <option value="operations">Operations</option>
                </select>
                <img src="{{ $img('chevron-down.svg') }}" alt="" width="12" height="8">
            </div>
        </div>

        <div class="mgr-add-user__field mgr-add-user__field--role">
            <label class="mgr-add-user__label" for="role">Role</label>
            <input
                id="role"
                name="role"
                type="text"
                class="mgr-add-user__input mgr-add-user__input--role"
                placeholder="Enter Your Role"
            >
        </div>

        <div class="mgr-add-user__actions">
            <button type="submit" class="mgr-add-user__btn mgr-add-user__btn--save">Save User</button>
            <a href="{{ route('manager.users') }}" class="mgr-add-user__btn mgr-add-user__btn--cancel">Cancel</a>
        </div>
    </form>
</section>
@endsection
