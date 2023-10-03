<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ImportExportController;
use App\Http\Controllers\PayPalController;

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


Route::get('/',[AdminController::class,'login']);
Route::get('/login',[AdminController::class,'login']);
Route::post('/login_form',[AdminController::class,'login_form'])->name('login_form');

Route::group(['prefix'=>'admin'],function(){
    Route::get('/dashboard',[AdminController::class,'dash_index'])->name('admin/dashboard');
    Route::get('/profile/{id}',[AdminController::class,'profile']);
    Route::post('/profile/{id}',[AdminController::class,'update_profile'])->name('profile');

    Route::get('/dashboard_int',[AdminController::class,'dashboard_int'])->name('admin/dashboard');

    Route::post('/dashboard/save_student_form',[AdminController::class,'student_form'])->name('admin/student_form');
    Route::get('/logout',[AdminController::class,'logout']);
    
    # Member
    Route::get('add-member',[AdminController::class,'add_member']);
    Route::post('/member_form',[AdminController::class,'add_member_form'])->name('admin/member_form');
    Route::get('all-member',[AdminController::class,'all_member']);
    Route::get('member-details/{id}',[AdminController::class,'member_view']);
    Route::get('edit-member/{id}',[AdminController::class,'edit_member']);
    Route::post('edit-member/{id}',[AdminController::class,'update_member'])->name('edit_member');

    # User
    Route::get('add-user',[AdminController::class,'add_user']);
    Route::post('/user_form',[AdminController::class,'add_user_form'])->name('admin/user_form');
    Route::get('all-user',[AdminController::class,'all_user']);
    Route::get('user-view/{id}',[AdminController::class,'user_view']);
    Route::get('edit-user/{id}',[AdminController::class,'edit_user']);
    Route::post('edit-user/{id}',[AdminController::class,'update_user'])->name('edit_user');
    Route::get('user-profile',[AdminController::class,'user_profile'])->name('user_profile');
    Route::get('other-settings',[AdminController::class,'other_settings'])->name('other_settings');
    Route::get('admin-profile',[AdminController::class,'admin_profile'])->name('admin_profile');
    

    # Sub Admin
    Route::get('add-sub',[AdminController::class,'add_sub']);
    Route::post('/sub_form',[AdminController::class,'add_sub_form'])->name('admin/sub_form');
    Route::get('all-sub',[AdminController::class,'all_sub']);
    Route::get('edit-sub-admin/{id}',[AdminController::class,'edit_sub_admin']);
    Route::post('edit-sub-admin/{id}',[AdminController::class,'update_sub_admin'])->name('edit_sub_admin');

    # Pages
    Route::get('add-page',[AdminController::class,'add_page']);
    Route::get('all-page',[AdminController::class,'all_page']);
    Route::get('get_page_content',[AdminController::class,'get_page_content'])->name('admin.get_page_content');

    # 3rd Party
    Route::get('key',[AdminController::class,'apikey']);
    Route::post('/add_key',[AdminController::class,'add_api_key'])->name('admin/add_key');
    Route::post('/add_repcha',[AdminController::class,'add_repcha_key'])->name('admin/add_repcha');
    Route::post('/add-wtsp',[AdminController::class,'add_whatsapp_number'])->name('admin/add-wtsp');
    Route::post('/paypal_key',[AdminController::class,'add_paypal_key'])->name('admin/paypal_key');
    Route::post('/mail',[AdminController::class,'add_mail'])->name('admin/mail');
    Route::post('/sms',[AdminController::class,'add_sms'])->name('admin/sms');

    Route::get('others-setting',[AdminController::class,'others']);

    # Social Media Key
    Route::post('social_media_key',[AdminController::class,'add_social_key'])->name('admin/social_media_key');

    # App setting
    Route::post('app_setting',[AdminController::class,'add_app_setting'])->name('admin/app_setting');

    # All pages
    Route::post('add-home',[AdminController::class,'add_home_cont'])->name('admin/add-home');
    Route::post('add-term',[AdminController::class,'add_term_cont'])->name('admin/add-term');

    # Currency
    Route::post('currency',[AdminController::class,'add_currency'])->name('admin/currency');

    # Customer Wallet
    Route::get('transactions',[AdminController::class,'all_transaction']);
    Route::get('by-user',[AdminController::class,'by_user']);


    # System Setup
    Route::get('general-setting',[AdminController::class,'general_setting']);
    Route::get('app-setting',[AdminController::class,'app_setting']);

    # System Setup
    Route::get('user-wallet',[AdminController::class,'wallet_profile']);
    Route::get('single-user-wallet',[AdminController::class,'single_user_wallet']);

    Route::get('upload-celebrities',[AdminController::class,'upload_athletes_data']);
    Route::post('import', [AdminController::class,'import'])->name('admin/import');


    // Route::get('add-member',[AdminController::class,'add_member']);

// Route::get('/register',[AdminController::class,'register']);
// Route::post('/login_form',[AdminController::class,'login_form'])->name('login_form');

});

Route::controller(ImportExportController::class)->group(function(){
    Route::get('import_export', 'importExport');
    Route::post('import', 'import')->name('import');
    Route::get('export', 'export')->name('export');
});

# Paypal
Route::get('payment', [PayPalController::class,'payment'] )->name('payment');
Route::get('cancel', [PayPalController::class,'cancel'] )->name('payment.cancel');
Route::get('payment/success', [PayPalController::class,'success'] )->name('payment.success');
