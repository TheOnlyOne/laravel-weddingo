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

Route::get('/', 'master_client\ContactsManagemant@index');
//Route::get('/', 'master_client\ContactsManagemant@test_add_wedding_guest');

Route::post('master-client/add-new-group-category','master_client\ContactsManagemant@add_guests_category');
Route::post('master-client/add-new-wedding-guest','master_client\ContactsManagemant@add_wedding_guest');
Route::post('master-client/remove-wedding-guest', 'master_client\ContactsManagemant@remove_wedding_guest');
Route::post('master-client/edit-wedding-guest', 'master_client\ContactsManagemant@update_wedding_guest');
Route::post('master-client/get-updated-guest-data', 'master_client\ContactsManagemant@get_updated_guest_data');
Route::post('master-client/update_wedding_guest', 'master-client\ContactsManagemant@update_wedding_guest');
Route::post('master-client/get-last-group-cateogry-data', 'master-client\ContactsManagemant@get_all_category_invitations');
