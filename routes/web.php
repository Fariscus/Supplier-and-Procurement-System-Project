<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
// use App\Http\Controllers\UserController;
// use App\Http\Controllers\PostController;
// use App\Http\Controllers\PostCategoryController;
// use App\Http\Controllers\PostMetaController;
// use App\Http\Controllers\PostCommentController;

Route::get('/', function () {
    return auth()->check()
        ? redirect()->route('home')
        : redirect()->route('login');
});

// Temporary authenticated landing (frontend dashboard is separate / view-only)
Route::get('/home', function () {
    return 'Logged in as ' . auth()->user()->name;
})->middleware('auth')->name('home');

// --- Blog / CRUD routes (not needed for SPS login) ---
// Route::resource('users', UserController::class);
// Route::resource('categories', PostCategoryController::class);
// Route::resource('posts', PostController::class);
// Route::resource('metas', PostMetaController::class)->except(['create', 'store', 'destroy', 'show']);
// Route::post('posts/{post}/comments', [PostCommentController::class, 'store'])->name('comments.store');
// Route::resource('comments', PostCommentController::class)->except(['create', 'store', 'show']);

// Authentication Routes
Route::middleware('guest')->group(function () {
    // Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    // Route::post('/register', [AuthController::class, 'register']);

    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Staff UI preview only (no controller / no auth) — frontend first
Route::view('/staff/dashboard', 'Staff Role.Staff Dashboard - ST.dashboard')->name('staff.dashboard');
Route::view('/staff/profile', 'Staff Role.My Profile - ST.profile')->name('staff.profile');
Route::view('/staff/prs', 'Staff Role.My PRs - ST.prs')->name('staff.prs');
Route::view('/staff/prs/create', 'Staff Role.Create PR - ST.create')->name('staff.prs.create');
Route::view('/staff/prs/edit', 'Staff Role.Edit PR Detail - ST.edit')->name('staff.prs.edit');
Route::view('/staff/prs/detail/pending', 'Staff Role.Purchase Request Detail - ST.detail-pending')->name('staff.prs.detail.pending');
Route::view('/staff/prs/detail/approved', 'Staff Role.Purchase Request Detail - ST.detail-approved')->name('staff.prs.detail.approved');
Route::view('/staff/prs/detail/rejected', 'Staff Role.Purchase Request Detail - ST.detail-rejected')->name('staff.prs.detail.rejected');
Route::view('/staff/prs/reject-reason', 'Staff Role.Reject Reason - ST.reject')->name('staff.prs.reject-reason');

Route::view('/staff/quotations', 'Staff Role.Quotation Lists - ST.lists')->name('staff.quotations');
Route::view('/staff/quotations/create', 'Staff Role.Add Quotation - ST.create')->name('staff.quotations.create');
Route::view('/staff/quotations/edit', 'Staff Role.Edit Quotation - ST.edit')->name('staff.quotations.edit');
Route::view('/staff/quotations/show', 'Staff Role.Quotation Details - ST.show')->name('staff.quotations.show');

Route::view('/staff/goods', 'Staff Role.Goods Received - ST.index')->name('staff.goods');
Route::view('/staff/goods/create', 'Staff Role.Record Good Receive - ST.create')->name('staff.goods.create');
Route::view('/staff/goods/show', 'Staff Role.Good Receive Detail - ST.show')->name('staff.goods.show');

Route::view('/staff/inventory', 'Staff Role.Inventory - ST.index')->name('staff.inventory');

// Manager UI preview only (no controller / no auth) — frontend first
Route::view('/manager/dashboard', 'Manager Role.Manager Dashboard - MG.dashboard')->name('manager.dashboard');
Route::view('/manager/profile', 'Manager Role.My Profile - MG.profile')->name('manager.profile');
Route::view('/manager/prs', 'Manager Role.Purchase Requests - MG.index')->name('manager.prs');
Route::view('/manager/prs/review', 'Manager Role.Approve Reject PR - MG.review')->name('manager.prs.review');
Route::view('/manager/prs/detail/approved', 'Manager Role.Approve PR Detail - MG.detail')->name('manager.prs.detail.approved');
Route::view('/manager/prs/detail/rejected', 'Manager Role.Reject PR Detail - MG.detail')->name('manager.prs.detail.rejected');

Route::view('/manager/quotations', 'Manager Role.Quotation Lists - MG.lists')->name('manager.quotations');
Route::view('/manager/quotations/show', 'Manager Role.Quotation Details - MG.details')->name('manager.quotations.show');
Route::view('/manager/quotations/compare', 'Manager Role.Compare Quotation - MG.compare')->name('manager.quotations.compare');

Route::view('/manager/orders', 'Manager Role.Purchase Order List - MG.list')->name('manager.orders');
Route::view('/manager/orders/create', 'Manager Role.Create Purchase Order - MG.create')->name('manager.orders.create');
Route::view('/manager/orders/update', 'Manager Role.Update Purchase Order Status - MG.update')->name('manager.orders.update');
Route::view('/manager/orders/detail/approved', 'Manager Role.Purchase Order Detail - MG.detail-approved')->name('manager.orders.detail.approved');
Route::view('/manager/orders/detail/pending', 'Manager Role.Purchase Order Detail - MG.detail-pending')->name('manager.orders.detail.pending');
Route::view('/manager/orders/detail/rejected', 'Manager Role.Purchase Order Detail - MG.detail-rejected')->name('manager.orders.detail.rejected');

Route::view('/manager/goods', 'Manager Role.Goods Received - MG.index')->name('manager.goods');
Route::view('/manager/goods/create', 'Manager Role.Record Good Receive - MG.create')->name('manager.goods.create');
Route::view('/manager/goods/show', 'Manager Role.Good Receive Detail - MG.show')->name('manager.goods.show');

Route::view('/manager/inventory', 'Manager Role.Inventory Lists - MG.index')->name('manager.inventory');
Route::view('/manager/inventory/adjust', 'Manager Role.Adjust Inventory - MG.adjust')->name('manager.inventory.adjust');

Route::view('/manager/suppliers', 'Manager Role.Supplier Lists - MG.index')->name('manager.suppliers');
Route::view('/manager/suppliers/create', 'Manager Role.Add Supplier - MG.create')->name('manager.suppliers.create');
Route::view('/manager/suppliers/show', 'Manager Role.Supplier Detail - MG.show')->name('manager.suppliers.show');
Route::view('/manager/suppliers/edit', 'Manager Role.Edit / Delete Supplier - MG.edit')->name('manager.suppliers.edit');

Route::view('/manager/users', 'Manager Role.User list - MG.index')->name('manager.users');
Route::view('/manager/users/create', 'Manager Role.Add User - MG.create')->name('manager.users.create');

Route::view('/manager/report', 'Manager Role.Report & Analytics - MG.index')->name('manager.report');
