@extends('Staff Role.Log in - ST.layout')

@section('title', 'Log in - ST')

@section('content')
<div class="login-st" data-node-id="127:2435" data-name="Log in - ST">
    <aside class="login-st__brand" data-node-id="200:2814">
        <div class="login-st__logo-wrap" data-node-id="200:2816">
            <img
                src="{{ asset('Staff Role/Log in - ST/images/sps-logo.png') }}"
                alt="SPS — Supplier & Procurement System"
                class="login-st__logo"
            >
        </div>
    </aside>

    <main class="login-st__content" data-node-id="127:2437" data-name="content">
        <h1 class="login-st__title" data-node-id="127:2472">
            Welcome to SPS !
        </h1>

        <form
            class="login-st__form"
            data-node-id="127:2447"
            data-name="form"
            action="{{ route('login') }}"
            method="POST"
        >
            @csrf

            <div class="login-st__field" data-node-id="127:2457" data-name="Email_Input">
                <label class="login-st__label" for="email" data-node-id="127:2458">Email</label>
                <input
                    id="email"
                    name="email"
                    type="email"
                    class="login-st__input @error('email') is-invalid @enderror"
                    placeholder="Enter your Email here"
                    value="{{ old('email') }}"
                    autocomplete="email"
                    required
                    autofocus
                    data-node-id="127:2460"
                >
                @error('email')
                    <div class="login-st__error">{{ $message }}</div>
                @enderror
            </div>

            <div class="login-st__field" data-node-id="127:2452" data-name="Password_Input">
                <label class="login-st__label" for="password" data-node-id="127:2453">Password</label>
                <input
                    id="password"
                    name="password"
                    type="password"
                    class="login-st__input @error('password') is-invalid @enderror"
                    placeholder="Enter your Password"
                    autocomplete="current-password"
                    required
                    data-node-id="127:2455"
                >
                @error('password')
                    <div class="login-st__error">{{ $message }}</div>
                @enderror
            </div>

            <div class="login-st__actions" data-node-id="127:2448" data-name="action buttons">
                <button
                    type="submit"
                    class="login-st__submit"
                    data-node-id="127:2450"
                    data-name="Btn_CreateAccount"
                >
                    Log in
                </button>
            </div>
        </form>
    </main>
</div>
@endsection
