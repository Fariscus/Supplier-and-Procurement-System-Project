@extends('Manager Role.Manager Dashboard - MG.layout')

@section('title', 'User list - MG')

@push('styles')
    <link rel="stylesheet" href="{{ asset('Manager Role/User list - MG/css/users.css') }}">
@endpush

@section('content')
@php
    $img = fn ($file) => asset('Manager Role/User list - MG/images/' . $file);
    $rows = [
        ['name' => 'Lina Pich', 'initials' => 'LP', 'email' => 'lina@gmail.com', 'role' => 'Staff', 'created' => 'Jun 15, 2026'],
        ['name' => 'Lina Pich', 'initials' => 'LP', 'email' => 'lina@gmail.com', 'role' => 'Staff', 'created' => 'Jun 15, 2026'],
        ['name' => 'Lina Pich', 'initials' => 'LP', 'email' => 'lina@gmail.com', 'role' => 'Staff', 'created' => 'Jun 15, 2026'],
        ['name' => 'Lina Pich', 'initials' => 'LP', 'email' => 'lina@gmail.com', 'role' => 'Staff', 'created' => 'Jun 15, 2026'],
        ['name' => 'Alex Thompson', 'initials' => 'AT', 'email' => 'alex.t@procurecorp.com', 'role' => 'Manager', 'created' => 'Jan 10, 2026'],
    ];
@endphp
<section class="mgr-users" data-name="User list - MG" data-node-id="5:36">
    <div class="mgr-users__intro">
        <div>
            <h2 class="mgr-users__title">User Management</h2>
            <p class="mgr-users__subtitle">Oversee system access and manage departmental roles.</p>
        </div>
        <a href="{{ route('manager.users.create') }}" class="mgr-users__add">+ Add User</a>
    </div>

    <div class="mgr-users__filters">
        <div class="mgr-users__field mgr-users__field--search">
            <label class="mgr-users__label" for="user_search">Search</label>
            <div class="mgr-users__search">
                <input
                    id="user_search"
                    type="search"
                    class="mgr-users__input"
                    placeholder="Enter your name"
                >
                <img src="{{ $img('icon-search.svg') }}" alt="" width="16" height="16">
            </div>
        </div>
        <div class="mgr-users__field mgr-users__field--role">
            <label class="mgr-users__label" for="user_role">Role</label>
            <div class="mgr-users__select-wrap">
                <select id="user_role" class="mgr-users__select">
                    <option value="">Select a role</option>
                    <option value="staff">Staff</option>
                    <option value="manager">Manager</option>
                </select>
                <img src="{{ $img('chevron-down.svg') }}" alt="" width="12" height="8">
            </div>
        </div>
    </div>

    <div class="mgr-users__card">
        <div class="mgr-users__card-head">
            <h3 class="mgr-users__card-title">Recent users - all Departments</h3>
            <span class="mgr-users__total">6 Users</span>
        </div>

        <div class="mgr-users__table-wrap">
            <table class="mgr-users__table">
                <thead>
                    <tr>
                        <th scope="col">Full Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Created</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rows as $row)
                        <tr>
                            <td>
                                <div class="mgr-users__person">
                                    <span class="mgr-users__avatar" aria-hidden="true">{{ $row['initials'] }}</span>
                                    <span class="mgr-users__name">{{ $row['name'] }}</span>
                                </div>
                            </td>
                            <td>
                                <a href="mailto:{{ $row['email'] }}" class="mgr-users__email">{{ $row['email'] }}</a>
                            </td>
                            <td>
                                <span class="mgr-users__role mgr-users__role--{{ strtolower($row['role']) }}">
                                    {{ $row['role'] }}
                                </span>
                            </td>
                            <td>{{ $row['created'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mgr-users__footer">
            <p class="mgr-users__count">Showing 5 of 6 users</p>
            <nav class="mgr-users__pager" aria-label="Pagination">
                <a href="#" class="mgr-users__page mgr-users__page--icon is-disabled" aria-disabled="true">
                    <img src="{{ $img('chevron-left.svg') }}" alt="" width="8" height="12">
                </a>
                <a href="#" class="mgr-users__page is-active" aria-current="page">1</a>
                <a href="#" class="mgr-users__page mgr-users__page--icon">
                    <img src="{{ $img('chevron-right-page.svg') }}" alt="" width="8" height="12">
                </a>
            </nav>
        </div>
    </div>
</section>
@endsection
