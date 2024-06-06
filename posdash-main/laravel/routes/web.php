<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('dashboards.dashboard1');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Dashboard Routes
  Route::get('/dashboard1', [HomeController::class, 'index'])->name('dashboard.1');


  //App Details Pages Routs
  Route::group(['prefix' => 'app'], function() {

    //Userdetail Page Routs
    Route::get('user/profile', [HomeController::class, 'userprofile'])->name('app.userdetail.userprofile');
    Route::get('user/add', [HomeController::class, 'useradd'])->name('app.userdetail.useradd');
    Route::get('user/userlist', [HomeController::class, 'userList'])->name('app.userdetail.userlist');

  });

//UI Pages Routs
  Route::group(['prefix' => 'ui'], function() {
    Route::get('grid', [HomeController::class, 'UiGrid'])->name('ui.grid');
    Route::get('tabs', [HomeController::class, 'UiTabs'])->name('ui.tabs');
    Route::get('cards', [HomeController::class, 'UiCards'])->name('ui.cards');
    Route::get('modal', [HomeController::class, 'UiModal'])->name('ui.modal');
    Route::get('alerts', [HomeController::class, 'UiAlerts'])->name('ui.alerts');
    Route::get('badges', [HomeController::class, 'UiBadges'])->name('ui.badges');
    Route::get('colors', [HomeController::class, 'UiColors'])->name('ui.colors');
    Route::get('images', [HomeController::class, 'UiImages'])->name('ui.images');
    Route::get('avatars', [HomeController::class, 'UiAvatars'])->name('ui.avatars');
    Route::get('buttons', [HomeController::class, 'UiButtons'])->name('ui.buttons');
    Route::get('carousel', [HomeController::class, 'UiCarousel'])->name('ui.carousel');
    Route::get('popovers', [HomeController::class, 'UiPopovers'])->name('ui.popovers');
    Route::get('tooltips', [HomeController::class, 'UiTooltips'])->name('ui.tooltips');
    Route::get('boxshadows', [HomeController::class, 'UiBoxshadows'])->name('ui.boxshadows');
    Route::get('breadcrumb', [HomeController::class, 'UiBreadcrumb'])->name('ui.breadcrumb');
    Route::get('listgroup', [HomeController::class, 'UiListgroup'])->name('ui.listgroup');
    Route::get('pagination', [HomeController::class, 'UiPagination'])->name('ui.pagination');
    Route::get('typography', [HomeController::class, 'UiTypography'])->name('ui.typography');
    Route::get('media', [HomeController::class, 'UiMedia'])->name('ui.media');
    Route::get('progressbars', [HomeController::class, 'UiProgressbars'])->name('ui.progressbars');
    Route::get('buttongroup', [HomeController::class, 'UiButtongroup'])->name('ui.buttongroup');
    Route::get('notification', [HomeController::class, 'UiNotification'])->name('ui.notification');
    Route::get('video', [HomeController::class, 'UiVideo'])->name('ui.video');
  });

//Forms Pages Routs
Route::group(['prefix' => 'forms'], function () {

    //Forms Control Page Routs
    Route::get('radio', [HomeController::class, 'FormsRadio'])->name('forms.radio');
    Route::get('layout', [HomeController::class, 'FormsLayout'])->name('forms.layout');
    Route::get('checkbox', [HomeController::class, 'FormsCheckbox'])->name('forms.checkbox');
    Route::get('textarea', [HomeController::class, 'FormsTextarea'])->name('forms.textarea');
    Route::get('validation', [HomeController::class, 'FormsValidation'])->name('forms.validation');
    Route::get('inputgroup', [HomeController::class, 'FormsInputgroup'])->name('forms.inputgroup');
    Route::get('switch', [HomeController::class, 'FormsSwitch'])->name('forms.switch');

});

//Auth pages Routs
  Route::group(['prefix' => 'auth'], function() {
    Route::get('login', [HomeController::class, 'authLogin'])->name('auth.login');
    Route::get('register', [HomeController::class, 'authRegister'])->name('auth.register');
    Route::get('recover-password', [HomeController::class, 'authRecoverPassword'])->name('auth.recover-password');
    Route::get('confirm-email', [HomeController::class, 'authConfirmEmail'])->name('auth.confirm-email');

  });

//Table Page Routs
  Route::group(['prefix' => 'table'], function() {
   Route::get('basics', [HomeController::class, 'tableBasics'])->name('table.tablebasics');
   Route::get('data', [HomeController::class, 'tableData'])->name('table.tabledata');
   Route::get('tree', [HomeController::class, 'tableTree'])->name('table.tabletree');
   Route::get('editable', [HomeController::class, 'tableEditable'])->name('table.tableeditable');
  });


//Extra pages Routs
  Route::group(['prefix' => 'extra'], function() {

    Route::get('error/error404', [HomeController::class, 'Error404'])->name('pageError.error404');
    Route::get('error/error500', [HomeController::class, 'Error500'])->name('pageError.error500');
    Route::get('invoice', [HomeController::class, 'ExtrapagesInvoice'])->name('extrapages.invoice');
    Route::get('blankpage', [HomeController::class, 'ExtrapagesBlankpage'])->name('extrapages.blankpage');
    Route::get('maintenance', [HomeController::class, 'ExtrapagesMaintenance'])->name('extrapages.maintenance');
    Route::get('comingsoon', [HomeController::class, 'ExtrapagesComingsoon'])->name('extrapages.comingsoon');
    Route::get('pricing', [HomeController::class, 'ExtrapagesPricing'])->name('extrapages.pricing');
    Route::get('pricing2', [HomeController::class, 'ExtrapagesPricing2'])->name('extrapages.pricing2');
    Route::get('privacy', [HomeController::class, 'privacy'])->name('privacy');
    Route::get('term-service', [HomeController::class, 'termService'])->name('term-service');

  });

  //pages route
  Route::get('/list-category', [HomeController::class, 'listCategory'])->name('list.category');
  Route::get('/add-category', [HomeController::class, 'addCategory'])->name('add.category');
  Route::get('/list-sale', [HomeController::class, 'listSale'])->name('list.sale');
  Route::get('/add-sale', [HomeController::class, 'addSale'])->name('add.sale');
  Route::get('/list-product', [HomeController::class, 'listProduct'])->name('list.product');
  Route::get('/add-product', [HomeController::class, 'addProduct'])->name('add.product');
  Route::get('/list-purchase', [HomeController::class, 'listPurchase'])->name('list.purchase');
  Route::get('/add-purchase', [HomeController::class, 'addPurchase'])->name('add.purchase');
  Route::get('/list-return', [HomeController::class, 'listReturn'])->name('list.return');
  Route::get('/add-return', [HomeController::class, 'addReturn'])->name('add.return');
  Route::get('/report', [HomeController::class, 'report'])->name('report');

Route::group(['prefix' => 'people'], function() {

    Route::get('/customer', [HomeController::class, 'customer'])->name('people.customer');
    Route::get('/add-customer', [HomeController::class, 'addCustomer'])->name('people.add.customer');

    Route::get('/supplier', [HomeController::class, 'supplier'])->name('people.supplier');
    Route::get('/add-supplier', [HomeController::class, 'addSupplier'])->name('people.add.supplier');

    Route::get('/user', [HomeController::class, 'user'])->name('people.user');
    Route::get('/add-user', [HomeController::class, 'addUser'])->name('people.add.user');

});












