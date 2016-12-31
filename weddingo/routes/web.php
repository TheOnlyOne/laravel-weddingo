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

Route::get('gallery', function (){
    return view('master-client-view.gallery');
});

Route::get('/', 'master_client\ContactsManagement@index');
//Route::get('/', 'master_client\ContactsManagemant@test_add_wedding_guest');

Route::get('/login', 'master_home\LoginController@index');
Route::post('/login/login', 'master_home\LoginController@login');

Route::get('/register', 'master_home\RegisterController@index');
Route::post('/register/store', 'master_home\RegisterController@store');

Route::get('/create-wedding', 'master_client\CreateWeddingController@index');
Route::get('/create-wedding/logout', 'master_client\CreateWeddingController@logout');
Route::post('/create-wedding/store', 'master_client\CreateWeddingController@store');

Route::get('/pricing', 'master_client\PricingController@index');
Route::post('/pricing/store', 'master_client\PricingController@store');
Route::get('/pricing/logout', 'master_client\PricingController@logout');

Route::get('/home', 'HomeController@index');
Route::get('/redirect/{provider}', 'master_home\SocialAuthController@redirect');
Route::get('/callback/{provider}', 'master_home\SocialAuthController@callback');

Route::post('master-client/add-new-group-category','master_client\ContactsManagement@add_guests_category');
Route::post('master-client/add-new-wedding-guest','master_client\ContactsManagement@add_wedding_guest');
Route::post('master-client/remove-wedding-guest', 'master_client\ContactsManagement@remove_wedding_guest');
Route::post('master-client/edit-wedding-guest', 'master_client\ContactsManagement@update_wedding_guest');
Route::post('master-client/get-updated-guest-data', 'master_client\ContactsManagement@get_updated_guest_data');
Route::post('master-client/update_wedding_guest', 'master-client\ContactsManagement@update_wedding_guest');
Route::post('master-client/get-last-group-category-data', 'master-client\ContactsManagement@get_all_category_invitations');
Route::post('master-client/test_ajax', 'master_client\ContactsManagement@test_ajax');
Route::post('master-client/get_wedding_categories', 'master_client\ContactsManagement@get_wedding_categories');
Route::post('master-client/get_wedding_guests', 'master_client\ContactsManagement@get_wedding_guests');
