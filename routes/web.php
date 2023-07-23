<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;
use App\Http\Livewire\SasChangeUsersExpiration;
use App\Http\Controllers\IpLocationController;

use Livewire\Livewire;

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

Auth::routes(['register' => true]);


//     Route::get('/', function () {
//         return view('auth.login');

// });
//the middleware and function for update website didnt redirect to login page



Route::group([
    'middleware' => ['auth', 'approved']
      ],  function(){
Route::prefix('dashboard')->group(function () {
Route::view('index', 'dashboard.index')->name('index');




});
Route::get('/', 'HomeController@index')->name('home');

Route::POST('/logout', 'Auth\LoginController@logout')->name('logout');



Route::resource('SystemUsers','SystemUsers\SystemUsersController');



Route::get('SystemUsers.update', 'SystemUsers\SystemUsersController@update');
// Route::post('/active-user', 'RefillController@refill')->name('active-user');
Route::resource('refill', 'RefillController');
Route::get('/Subnets', array('as'=> 'front.home', 'uses' => 'ItemController@itemView'));
Route::post('update/items', [ItemController::class, 'updateItems'])->name('update.items');

Route::get('/ip-location', 'IpLocationController@index')->name('ip-location');
Route::get('/userprofile', 'userprofilecontroller@index')->name('userprofile');
Route::get('/ticket_index', 'TicketController@index')->name('ticket_index');
Route::post('/posts', 'PostController@store')->name('posts.store');
Route::post('/posts/{post}', 'PostController@show')->name('posts.show');
Route::post('/posts/{post}/comments', 'CommentController@store')->name('comments.store');
Route::get('/userdata', 'UsersController@index')->name('userdata');
Route::post('/userdata2', 'UsersController@sasandont')->name('userdata2');
Route::post('/sasuserapi', 'sasuserController@sasuserapi')->name('sasuserapi');
Route::get('/sasuser', 'sasuserController@index')->name('sasuser');
Route::post('/sasuserpost', 'SasuserpostController@sasuserpost')->name('sasuserpost');

Route::post('/extendservice', 'ExtendController@index')->name('extendservice');
Route::post('/extendservicediscover', 'ExtendController@discover')->name('extendservicediscover');
Route::get('/extend', 'ExtendController@inde')->name('extend');
Route::get('/sasauthlog', 'sasauthlogController@index')->name('sasauthlog');

Route::POST('/resetontxml', 'resetontxmlController@reset')->name('resetontxml');
Route::get('/replace', 'ONTREPLACEController@index')->name('replace');
Route::POST('/replace.post', 'ONTREPLACEController@callapireplace')->name('replace.post');
Route::get('/script','OLTScriptController@index')->name('script');
Route::post('/script/post','OLTScriptController@process')->name('script/post');

Route::get('/sassyslog', 'sassyslogController@index')->name('sassyslog');


// this routes for calix activations
Route::get('/xmlcalix', 'XmlcalixController@index')->name('xmlcalix');
Route::post('/xmlcalix.store', 'XmlcalixController@store')->name('xmlcalix.store');
Route::post('/xmlcalix.activate', 'XmlcalixController@calixactivation')->name('xmlcalix.activate');
Route::get('/thirdparty', 'Xml3rdpartyController@index')->name('thirdparty');
Route::post('/thirdparty.store', 'Xml3rdpartyController@store')->name('thirdparty.store');
Route::post('/thirdparty.activate', 'Xml3rdpartyController@thirdpartyactivation')->name('thirdparty.activate');
Route::post('/thirdparty.activaterev', 'Xml3rdpartyController@thirdpartyrev')->name('thirdparty.activaterev');
Route::post('/xmlcalix.activaterev', 'XmlcalixController@calixrev')->name('xmlcalix.activaterev');
Route::post('/activatethird', 'Xml3rdpartyController@thirdpartyactivation')->name('activatethird');  
Route::get('/sascardlog', 'SascardsearchController@index')->name('sascardlog');

Route::get('/rami', 'XmlcalixController@rami')->name('rami');
Route::get('/ramis', 'XmlcalixController@ramis')->name('ramis');

// end routes for calix activations

Route::get('/ticket','ticketcontroller@index')->name('ticket');
});
