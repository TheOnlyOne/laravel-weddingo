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

Route::get('/', 'master_client\ContactsManagement@index');
//Route::get('/', 'master_client\ContactsManagemant@test_add_wedding_guest');

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
