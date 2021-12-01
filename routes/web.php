<?php
// namespace App\Http\Controllers;
namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\SiteFunctionsController;
use App\Http\Controllers\HomeController;
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


Route::get('/home', 'HomeController@index');

Route::post('ajax/add-comment', 'CommentsController@addComment')->name('addComment');


// Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
// Route::get('/login/admin', 'App\Http\Controllers\Auth\LoginController@showAdminLoginForm']);
Route::get('/login/admin', "PagesController@login11");
Route::get('/login/member', 'Auth\LoginController@showMemberLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/member', 'Auth\RegisterController@showMemberRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/adminLogin', 'Auth\LoginController@adminLogin');
Route::post('/login/member', 'Auth\LoginController@memberLogin');
// Route::post('/register/admin', [Auth\RegisterController::class,'createAdmin'])->name('register/admin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/member','Auth\RegisterController@createMember');

Route::group(['middleware' => 'auth:member'], function () {
    Route::view('/member', 'member');

    // return view('')
});
Route::group(['middleware' => 'auth:admin'], function () {

    // Route::view('/admin', 'admin');
    Route::get('/admin/','EventsController@users');
    Route::get('/admin/users','EventsController@users');
    Route::post('admin/users','EventsController@searchUsers');
    Route::get('admin/events','EventsController@events')->name('admin.events');
    Route::post('admin/searchEvents','EventsController@searchEvents')->name('admin/searchEvents');
    Route::get('admin/eve','EventsController@evecc');
    Route::get('admin/eventRegUsers/{id}','EventsController@eventRegUsers');
    Route::get('admin/feature/{id}','EventsController@feature');
    Route::get('admin/unFeature/{id}','EventsController@unFeature');
    Route::get('admin/publishEvent/{id}','EventsController@publishEvent');
    Route::get('admin/unPublishEvent/{id}','EventsController@unPublishEvent');
    Route::get('admin/adminSetting','EventsController@adminSetting');
    Route::get('admin/uploadEvents', function () {
        return view('admin/uploadEvents');
    });
    Route::get('admin/Blogs', 'EventsController@Blogs');
    Route::get('admin/addBlogs', 'EventsController@addBlogs');
    Route::get('admin/deleteBlog/{id}', 'EventsController@deleteBlog');
    Route::post('admin/Blogs', 'EventsController@addBlog');

    Route::post('admin/updateBannerPic','EventsController@updateBannerPic');
    Route::post('admin/updatePassword','EventsController@updatePassword')->name('admin/updatePassword');

    // Pages routes
    Route::get('admin/pages', 'PageController@index')->name('admin.pages.show');
    Route::get('admin/pages/add-new-page', 'PageController@add')->name('admin.pages.add');
    Route::post('admin/page/store', 'PageController@store')->name('admin.page.store');
    Route::post('/page-slug-check', 'PageController@checkSlugInDb')->name('product.slug.check');
    Route::get('admin/page/edit/{id}', 'PageController@edit')->name('admin.page.edit');
    Route::post('admin/page/update', 'PageController@update')->name('admin.page.update');
    Route::get('admin/page/delete/{id}', 'PageController@delete')->name('admin.page.delete');
    // /admin/adminSetting

    // Events routes
    Route::get('admin/event/add-new-event', 'EventsController@addEventByAdmin')->name('admin.event.add');
    Route::post('admin/event/store', 'EventsController@addEventByAdmin')->name('admin.event.store');
    Route::get('admin/edit-event/{id}','EventsController@editEventByAdmin')->name('admin.event.edit');
    Route::post('admin/edit-event/update','EventsController@editEventByAdmin')->name('admin.event.update');

});

Route::get('logout', [LoginController::class,'logout'])->name('logoutRoute');
Route::get('Blogs', 'HomeController@userBlogs');
Route::get('Blog/{id}', 'HomeController@userViewBlogDetail');


Route::middleware(['guest'])->group(function () {
Route::get('/', 'HomeController@index');
});
Route::post('searchEvents', 'HomeController@userSearchEvents');
Route::get('searchEvents', 'HomeController@userSearchEvents');
Route::get('event/{name}', 'HomeController@eventDetail')->name('eventDetail');
Route::get('becomeMember', 'HomeController@becomeMember')->middleware('auth');;
Route::get('becomeFreeMember', 'HomeController@becomeFreeMember')->middleware('auth');
Route::get('becomeGoldMember', 'HomeController@becomeGoldMember')->middleware('auth');
Route::get('becomePremiumMember', 'HomeController@becomePremiumMember')->middleware('auth');
Route::get('settings', 'HomeController@settings')->middleware('auth');
Route::post('userUpdatePassword', 'HomeController@userUpdatePassword')->middleware('auth');
Route::post('updateUserPic', 'HomeController@updateUserPic')->middleware('auth');
Route::get('myEvents', 'HomeController@myEvents');
Route::get('settings', 'HomeController@settings')->middleware('auth');
Route::get('contactUs', 'HomeController@contactUs');
Route::get('becomeEventChamp', 'HomeController@becomeEventChamp');
Route::post('contactUs', 'HomeController@contactUsForm');
Route::get('legend', 'HomeController@legend');
Route::get('aboutUs', 'HomeController@aboutUs');
Route::get('categories', 'HomeController@categories');
Route::get('category/{id}', 'HomeController@categoryDetail');
Route::get('downloadPdf/{eveId}/{filesId}', 'HomeController@downloadpdf');
Route::get('addNewEvent', 'HomeController@addNewEvent')->middleware('auth');
Route::get('report-an-error', 'HomeController@report_an_error')->middleware('auth');
Route::get('media', 'HomeController@media')->middleware('auth');

Route::post('addNewEventform', 'HomeController@addNewEventFrom')->middleware('auth');
Route::post('editEventFrom', 'HomeController@editEventFrom')->middleware('auth');
Route::get('stripeCheck', 'HomeController@stripeCheck')->middleware('auth');
// Route::post('searchEvents', 'HomeController@userSearchEvents')->name('searchEvents');

Route::get('my-events', 'EventsController@usersEvents')->name('usersEvents')->middleware('auth');
Route::get('editEvent/{id}', 'EventsController@editEvent')->name('editEvent')->middleware('auth');
Route::get('deleteEvent/{id}', 'EventsController@deleteEvent')->name('deleteEvent')->middleware('auth');


Route::get('login', 'PagesController@index');
Auth::routes();


Route::post('addBtcAddress', 'EventsController@addBtcAddress');
Auth::routes(['verify' => true]);

// Demo routes
Route::get('/login22', 'PagesController@login11');
Route::get('/datatables', 'PagesController@datatables');
Route::get('/ktdatatables', 'PagesController@ktDatatables');
Route::get('/select2', 'PagesController@select2');
Route::get('/jquerymask', 'PagesController@jQueryMask');
Route::get('/icons/custom-icons', 'PagesController@customIcons');
Route::get('/icons/flaticon', 'PagesController@flaticon');
Route::get('/icons/fontawesome', 'PagesController@fontawesome');
Route::get('/icons/lineawesome', 'PagesController@lineawesome');
Route::get('/icons/socicons', 'PagesController@socicons');
Route::get('/icons/svg', 'PagesController@svg');

// Quick search dummy route to display html elements in search dropdown (header search)
Route::get('/quick-search', 'PagesController@quickSearch')->name('quick-search');

// Auth::routes();


Route::get('/updateapp', function()
{
    \Artisan::call('dump-autoload');
    dump('dump-autoload complete');
});


Route::get('/clear', function() {
    $cache = \Artisan::call('cache:clear');
    $view = \Artisan::call('view:clear');
    $route = \Artisan::call('route:clear');
    $config = \Artisan::call('config:clear');

    dump(' cache = '.$cache);
    dump(' route = '.$route);
    dump(' config = '.$config);
    dd(' view = '.$view);
});


Route::get('/down', function() {

    $down = \Artisan::call('down --secret="harrypotter"');
    dd(' down= ' .$down);
});


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Dynamic pages
Route::get('/page/{slug}', 'PagesController@getDynamicPages')->name('page.detail.show');
Route::get('/legal-desclaimer', 'BlogsController@legalDisclaimer')->name('legalDisclaimer');


// Check Dead Links
Route::post('/check-dead-link', [SiteFunctionsController::class, 'checkDeadLink'])->name('checkDeadLink');

// Event Champion details
Route::get('/event-champion/{id}', 'HomeController@getEventChampionDetail')->name('champion.detail');

//Adavnce Search Page
Route::get('/advance-search', 'HomeController@gotoAdvanceSearch')->name('advance.search');
