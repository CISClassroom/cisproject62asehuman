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

//user
Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/newplan', function () {
    return view('newplan');
});

Route::post('/postform','ProposalController@postform');
Route::post('/develop','ProposalController@develop');

Route::get('/request','staffController@request')->name('request');

//Route::get('/borrow','userController@borrow')->name('borrow');
//Route::get('/inbox','userController@userspend')->name('inbox');

Route::get('/inbox&u={id}&p={pid}','userController@userspend')->name('inbox');


Route::get('/request', function () {
    return view('request');
});
Route::get('/show', function () {
    return view('show');
});
Route::get('/','ProposalController@indexuser');
Route::get('/download/{filename}', 'FileUploadController@download');

//Route::get('borrow','userController@adduserspend'); 
// Route::get('/abc', function () {
//     return view('borrow');
// });
Route::post('getapprove','userController@getapprove');
Route::post('adduserspend','userController@adduserspend');

//dean
Route::get('/dean','deanController@dean')->name('dean');

Route::get('/petition1','deanController@petition1')->name('petition1');


//admin
Route::get('/budget', 'staffController@budget')->name('budget');

Route::get('/charts1', function () {
    return view('charts1');
});

Route::get('/results', function () {
    return view('results');
});

Route::get('/document', function () {
    return view('document');
});

Route::post('/addbudget','staffController@addbudget');


Route::get('proposal.{id}','ProposalController@getproposal');
Route::post('updateproposal','ProposalController@updateproposal');

Route::get('proposaluser.{id}','userController@getproposaluser');
Route::get('Notifications.{id}','userController@getNotifications');

Route::get('mydean.{id}','deanController@getmydean');
Route::post('updatedean','deanController@updatedean');
Route::post('upteproposal','ProposalController@upteproposal');
Route::get('resultstaff.{id}','staffController@getresultstaff');
Route::get('request.{id}','userController@getrequest');
Route::post('updatestaff','staffController@updatestaff');
Route::get('develop.{id}','ProposalController@getdevelop');

Route::get('userspens.{id}','userController@getuserspens');

//Route for normal user
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index');
});
//Route for admin
Route::group(['prefix' => 'admin'], function(){
    Route::group(['middleware' => ['admin']], function(){
        Route::get('/dashboard', 'admin\staffController@index');
    });
});


Auth::routes();


Route::get('/indexuser', 'userController@indexuser')->name('indexuser');
Route::get('dean.','deanController@getdean');
Route::get('/staff', 'staffController@staff')->name('staff');

Route::get('/home', 'userController@indexuser')->name('home');
Route::get('paper.download/{file_name}', function ($file_name = null) {
    $path = storage_path() . '/' . 'app' . '/fileuploads/' . $file_name;
    if (file_exists($path)) {
        return Response::download($path);
    }
})->name('paper.download');