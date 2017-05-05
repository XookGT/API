<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('auth_login', 'ApiAuthController@authenticate');

Route::resource('/bank','Banks');
Route::resource('/bill','Bills');
Route::resource('/bill-state','BillStates');
Route::resource('/categorie','Categories');
Route::resource('/city','Cities');
Route::resource('/country','Countries');
Route::resource('/course','Courses');
Route::resource('/day','Days');
Route::resource('/level','Levels');
Route::resource('/payment-method','PaymentMethods');
Route::resource('/payment','Payments');
Route::resource('/payment-state','PaymentStates');
Route::resource('/place','Places');
Route::resource('/profile-status','ProfileStatuses');
Route::resource('/province','Provinces');
Route::resource('/purchase-order','PurchaseOrders');
Route::resource('/rol','Roles');
Route::resource('/score','Scores');
Route::resource('/state-purchase-order','StatePurchaseOrders');
Route::resource('/state-tutotial-payment','StateTutorialPayments');
Route::resource('/tutorial-day','TutorialDays');
Route::resource('/tutorial-has-place','TutorialHasPlaces');
Route::resource('/tutorial','Tutorials');
Route::resource('/tutorial-payment','TutorialsPayments');
Route::resource('/tutor-payment','TutorPayments');
Route::resource('/xookcc','XookCCs');