<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes(['verify' => true]);
Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'HomeController@index');
    Route::get('/home', 'HomeController@index');
    Route::get('profile', 'ProfileController@index');

    // Administrator
    Route::get('admin_index', 'AdminController@index');

    // Users
    Route::get('users_index', 'UserController@index');

    Route::get('account_request', 'AdminController@accountRequest');
    Route::get('user_accounts', 'AdminController@userAccounts');
    Route::post('approveRequest/{id}', 'AdminController@approve_request');
    Route::post('rejectRequest/{id}', 'AdminController@reject_request');

    //All Users
    Route::post('publish-post', 'PostController@index');
    Route::post('like-post', 'PostController@likePost');
    Route::post('remove-post', 'PostController@remove');
    Route::post('edit-post','PostController@editPost');

    Route::post('comment', 'CommentController@create');
    Route::post('remove-comment', 'CommentController@remove');
    Route::post('edit-comment','CommentController@editComment');

    // Users
    Route::get('admin/users', 'UserController@index');
    Route::post('diableAccount/{id}', 'UserController@disable_account');


    // Admin Events
    Route::get('adminEvents', 'EventController@admin_event');
    Route::post('storeEvents', 'EventController@store_events');
    Route::post('updateEvents/{id}', 'EventController@update_events');
    Route::post('deleteAttachment/{id}', 'EventController@delete_attachment');
    Route::post('cancelEvent/{id}', 'EventController@cancel_events');
    Route::post('event/eventDetails/register-event/{id}', 'EventController@register_events');
    Route::post('leave-event/{id}', 'EventController@leave_events');

    // Approve Request
    Route::get('account_request', 'AccountRequestController@accountRequest');
    Route::post('rejectRequest/{id}', 'AccountRequestController@reject_request');
    Route::post('approveRequest/{id}', 'AccountRequestController@approve_request');

    // Profile
    Route::get('profile', 'ProfileController@index');
    Route::get('profilePhotos', 'ProfileController@profilePhotos');
    Route::post('change-avatar','ProfileController@changeAvatar');
    Route::post('upload-cover','ProfileController@uploadCoverPhoto');
    Route::post('edit-information','ProfileController@updateInformation');

    // Events
    Route::get('event', 'EventController@index');
    Route::get('event/eventDetails/{id}', 'EventController@event_details');


    //Following
    Route::post('follow-profile','FollowersController@index');


    // Marketplace
    Route::get('marketplace', 'MarketplaceController@index');
    Route::post('new-property','MarketplaceController@create');
    Route::post('mark-sold/{id}','MarketplaceController@markAsSold');

    //Notification
    Route::post('post-notification','NotificationController@post');
    
});
Route::post('saveUser', 'RegisterController@save');
Route::post('requestAccount', 'AccountRequestController@request_account');
