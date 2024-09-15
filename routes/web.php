<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\auth\social\SocialController;
use App\Http\Controllers\admin\modules\users\UserController;
use App\Http\Controllers\admin\modules\users\usersController;
use App\Http\Controllers\admin\modules\Course\CourseController;
use App\Http\Controllers\admin\modules\users\profileController;
use App\Http\Controllers\admin\modules\Course\CategoryController;
use App\Http\Controllers\admin\rolesAndPermission\RoleController;
use App\Http\Controllers\admin\rolesAndPermission\PermissionController;

Route::get('/', function () {
    return redirect('/login');
    return view('admin.index');
});

Route::view('/login','admin.auth.login' )->name('login');

Route::get('pages/{pageName}', function ($pageName) {
    return view('admin.pages.'.$pageName);
})->name('page');



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


/*
 * Global Routes
 *
 * Routes that are used between both frontend and backend.
 */

 Route::group(['prefix' => 'admin',
//  'middleware' => ['auth', 'can:admin.superadmin']
], function () {


    Route::group(['prefix' => 'roles', 'as' => 'admin.roles.'], function () {
        Route::get('/list', [RoleController::class, 'index'])->name('index');
        Route::post('/store', [RoleController::class, 'store'])->name('store');
        Route::PUT('/{id}', [RoleController::class, 'update'])->name('update');
        Route::get('/datatable', [RoleController::class, 'datatable'])->name('datatable');
        Route::delete('/{id}', [RoleController::class, 'destroy'])->name('destroy');
    });
    Route::group(['prefix' => 'users', 'as' => 'admin.users.'], function () {
        Route::get('/list', [UserController::class, 'index'])->name('index');
        Route::post('/store', [UserController::class, 'store'])->name('store');
        Route::PUT('/{id}', [UserController::class, 'update'])->name('update');
        Route::get('/datatable', [UserController::class, 'datatable'])->name('datatable');
        Route::delete('/{id}', [UserController::class, 'destroy'])->name('destroy');
        Route::post('/bulkAction', [UserController::class, 'bulkAction'])->name('bulkAction');
    });





    Route::group(['prefix' => 'courses', 'as' => 'admin.courses.'], function () {
        Route::get('/list', [CourseController::class, 'index'])->name('index');
        Route::post('/store', [CourseController::class, 'store'])->name('store');
        Route::PUT('/{id}', [CourseController::class, 'update'])->name('update');
        Route::get('/datatable', [CourseController::class, 'datatable'])->name('datatable');
        Route::delete('/{id}', [CourseController::class, 'destroy'])->name('destroy');
        Route::post('/bulkAction', [CourseController::class, 'bulkAction'])->name('bulkAction');
    });



    Route::group(['prefix' => 'categories', 'as' => 'admin.categories.'], function () {
        Route::get('/list', [CategoryController::class, 'index'])->name('index');
        Route::post('/store', [CategoryController::class, 'store'])->name('store');
        Route::PUT('/{id}', [CategoryController::class, 'update'])->name('update');
        Route::get('/datatable', [CategoryController::class, 'datatable'])->name('datatable');
        Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('destroy');
        Route::post('/bulkAction', [CategoryController::class, 'bulkAction'])->name('bulkAction');
    });




 });









Route::view('/', 'welcome');





Route::get('login/{provider}', [SocialController::class, 'redirect'])->middleware(['guest'])->name('socialLogin');
Route::get('login/{provider}/callback', [SocialController::class, 'Callback'])->middleware(['guest']);




Route::get('/Testing', function () {
    $stripe = new Stripe();
    // $customer = $stripe->customers()->create([
    //     'email' => 'john@doe.com',
    // ]);

    // echo $customer['id'];
    // die;

    // $card = $stripe->cards()->create('cus_PXlzQTUYfFv0WW', [
    //     'number'    => '4242424242424242',
    //     'exp_month' => 10,
    //     'cvc'       => 314,
    //     'exp_year'  => 2020,
    // ]);
    // dd($card);
    return $charge = $stripe->charges()->create([
        'amount' => 1000,
        'currency' => 'usd',
        'customer' => 'cus_PXlzQTUYfFv0WW',
        // 'source' => 'tok_visa', // Replace with your actual token
    ]);

    // Handle the charge result



});
// Switch between the included languages
Route::get('lang/{lang}', [LocaleController::class, 'change'])->name('locale.change');

Route::view('/profile/edit', 'profile.edit')->middleware('auth');
Route::view('/profile/password', 'profile.password')->middleware('auth');



Route::get('/home', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('admin.dashboard');

Route::fallback(function () {

    return view('Exception.notfound');
});


Route::group(['prefix' => 'admin'], function () {

    Route::get('/profile/settings', [profileController::class, 'settings'])->name('profile.settings');
    Route::resource('permissions', PermissionController::class)->names('admin.permissions');

    Route::get('/permissionslist', [PermissionController::class, 'datatable'])->name('admin.permissions.permissionslist');
    Route::post('/admin/permissions/store', [RoleController::class, 'store'])->name('admin.roles.create');




})->middleware(['auth']);



Route::get('test', function () {
    event(new App\Events\NotificationEvent('A new order recieved'));
    return "Event has been sent!";
});









Route::group(['prefix' => 'admin'], function () {

    Route::view('accordion', 'admin.template.pages.accordion')->name('admin.accordion');
    Route::view('badges', 'admin.template.pages.badges')->name('admin.badges');
    Route::view('buttons', 'admin.template.pages.buttons')->name('admin.buttons');
    Route::view('activity', 'admin.template.pages.activity')->name('admin.activity');
    Route::view('auth-lock', 'admin.template.pages.auth-lock')->name('admin.auth-lock');
    Route::view('card-actions', 'admin.template.pages.card-actions')->name('admin.card-actions');
    Route::view('cards-masonry', 'admin.template.pages.cards-masonry')->name('admin.cards-masonry');
    Route::view('cards', 'admin.template.pages.cards')->name('admin.cards');
    Route::view('carousel', 'admin.template.pages.carousel')->name('admin.carousel');
    Route::view('datagrid', 'admin.template.pages.datagrid')->name('admin.datagrid');
    Route::view('datatables', 'admin.template.pages.datatables')->name('admin.datatables');
    Route::view('dropdowns', 'admin.template.pages.dropdowns')->name('admin.dropdowns');
    Route::view('modals', 'admin.template.pages.modals')->name('admin.modals');
    Route::view('charts', 'admin.template.pages.charts')->name('admin.charts');
    Route::view('pagination', 'admin.template.pages.pagination')->name('admin.pagination');
    Route::view('placeholder', 'admin.template.pages.placeholder')->name('admin.placeholder');
    Route::view('steps', 'admin.template.pages.steps')->name('admin.steps');
    Route::view('tabs', 'admin.template.pages.tabs')->name('admin.tabs');
    Route::view('tables', 'admin.template.pages.tables')->name('admin.tables');
    Route::view('lists', 'admin.template.pages.lists')->name('admin.lists');
    Route::view('offcanvas', 'admin.template.pages.offcanvas')->name('admin.offcanvas');
    Route::view('markdown', 'admin.template.pages.markdown')->name('admin.markdown');
    Route::view('dropzone', 'admin.template.pages.dropzone')->name('admin.dropzone');
    Route::view('lightbox', 'admin.template.pages.lightbox')->name('admin.lightbox'); // image click view in large mode
    Route::view('tinymce', 'admin.template.pages.tinymce')->name('admin.tinymce');   //WYSING editor
    Route::view('inline-player', 'admin.template.pages.inline-player')->name('admin.inline-player');
    Route::view('sign-in', 'admin.template.pages.sign-in')->name('admin.sign-in');
    Route::view('sign-in-cover', 'admin.template.pages.sign-in-cover')->name('admin.sign-in-cover');
    Route::view('sign-up', 'admin.template.pages.sign-up')->name('admin.sign-up');
    Route::view('sign-in-link', 'admin.template.pages.sign-in-link')->name('admin.sign-in-link');
    Route::view('sign-in-illustration', 'admin.template.pages.sign-in-illustration')->name('admin.sign-in-illustration');
    Route::view('sign-in-cover', 'admin.template.pages.sign-in-cover')->name('admin.sign-in-cover');
    Route::view('terms-of-service', 'admin.template.pages.terms-of-service')->name('admin.terms-of-service');
    Route::view('error-404', 'admin.template.pages.error-404')->name('admin.error-404');
    Route::view('error-maintenance', 'admin.template.pages.error-maintenance')->name('admin.error-maintenance');
    Route::view('form-elements', 'admin.template.pages.form-elements')->name('admin.form-elements');
    Route::view('cookie-banner', 'admin.template.pages.cookie-banner')->name('admin.cookie-banner');
    Route::view('gallery', 'admin.template.pages.gallery')->name('admin.gallery');
    Route::view('invoice', 'admin.template.pages.invoice')->name('admin.invoice');
    Route::view('pricing', 'admin.template.pages.pricing')->name('admin.pricing');
    Route::view('pricing-table', 'admin.template.pages.pricing-table')->name('admin.pricing-table');
    Route::view('pricing-table', 'admin.template.pages.pricing-table')->name('admin.pricing-table');
    Route::view('faq', 'admin.template.pages.faq')->name('admin.faq');
    Route::view('users', 'admin.template.pages.users')->name('admin.users');
    Route::view('logs', 'admin.template.pages.logs')->name('admin.logs');
    Route::view('photogrid', 'admin.template.pages.photogrid')->name('admin.photogrid');
    Route::view('uptime', 'admin.template.pages.uptime')->name('admin.uptime');
    Route::view('settings', 'admin.template.pages.settings')->name('admin.settings');
    Route::view('trial-ended', 'admin.template.pages.trial-ended')->name('admin.trial-ended');
    Route::view('job-listing', 'admin.template.pages.job-listing')->name('admin.job-listing');
    Route::view('page-loader', 'admin.template.pages.page-loader')->name('admin.page-loader');
    Route::view('icons', 'admin.template.pages.icons')->name('admin.icons');
    Route::view('tabs', 'admin.template.pages.tabs')->name('admin.tabs');
});



