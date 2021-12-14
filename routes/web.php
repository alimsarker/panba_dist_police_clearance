<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\UserController;


use App\Http\Controllers\Backend\PsStationNameController;
use App\Http\Controllers\Backend\AssignOfficerNameController;

use App\Http\Controllers\Backend\ClearanceDocumentController;
use App\Http\Controllers\backend\GetOfficerController;

use App\Http\Controllers\backend\StatusController;

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
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

Route::get('admin/logout',[AdminController::class, 'Logout'])->name('admin.logout');


Route::prefix('users')->group(function(){
    Route::get('/view',[UserController::class, 'ViewUser'])->name('user.view');
    Route::get('/add',[UserController::class, 'AddUser'])->name('user.add');
    Route::post('/store',[UserController::class, 'UserStore'])->name('users.store');
    Route::get('/edit/{id}',[UserController::class, 'UserEdit'])->name('user.edit');
    Route::post('/update/{id}',[UserController::class, 'UserUpdate'])->name('users.update');
    Route::get('/delete/{id}',[UserController::class, 'UserDeleted'])->name('user.delete');



    //Profile   

    Route::get('/profile/view',[UserController::class, 'ViewProfile'])->name('profile.view');
    Route::get('/profile/edit',[UserController::class, 'EditProfile'])->name('profile.edit');
    Route::post('/profile/update',[UserController::class, 'UpdateProfile'])->name('profile.store'); 
    Route::get('/profile/password/change',[UserController::class, 'ChangePassword'])->name('user.pass.change'); 
    Route::post('/profile/password/update',[UserController::class, 'UpdatePassword'])->name('password.update');


    // Applicant Clearance Tracking  

Route::get('/track/application',[UserController::class, 'AplicantClearanceTrack'])->name('applicant.clearance.tracking');
Route::post('/track/application/status',[UserController::class, 'AplicantClearanceTrack'])->name('applicant.clearance.tracking');


    
});

// *************************************     POLICE STATION NAME ROUTE    **************************** 


Route::prefix('police/station/name')->group(function(){

    Route::get('/view',[PsStationNameController::class, 'ViewPoliceStationName'])->name('station.name.view');
    Route::get('/add',[PsStationNameController::class, 'AddPoliceStationName'])->name('add.ps.name');
    Route::post('/store',[PsStationNameController::class, 'StorePsName'])->name('ps.name.store');
    Route::get('/edit/{id}',[PsStationNameController::class, 'PsNameEdit'])->name('ps.name.edit');
    Route::post('/update/{id}',[PsStationNameController::class, 'PsNameUpdate'])->name('ps.name.update');
    Route::get('/delete/{id}',[PsStationNameController::class, 'PsNameDeleted'])->name('ps.name.delete');

});        

Route::prefix('assign/officer/name')->group(function(){

    Route::get('/view',[AssignOfficerNameController::class, 'ViewPoliceOfficerName'])->name('officer.name.view');
    Route::get('/add',[AssignOfficerNameController::class, 'AddPoliceOfficerName'])->name('add.officer.name');
    Route::post('/store',[AssignOfficerNameController::class, 'StorePoliceOfficerName'])->name('officer.name.store');
    Route::get('/edit/{ps_name_id}',[AssignOfficerNameController::class, 'PoliceOfficerNameEdit'])->name('officer.name.edit');
    Route::post('/update/{ps_name_id}',[AssignOfficerNameController::class, 'PoliceOfficerNameUpdate'])->name('officer.name.update');
    
    Route::get('/details/{ps_name_id}',[AssignOfficerNameController::class, 'PoliceOfficerNameDetails'])->name('officer.name.details');
    Route::get('/delete', [AssignOfficerNameController::class, 'PoliceOfficerNameDelete'])->name('officer.name.delete');
    Route::get('/delete/{ps_name_id}',[AssignOfficerNameController::class, 'OfficerNameDeleted'])->name('officer.name.deleted');

 
   
});   


Route::prefix('clearance/data')->group(function(){

    Route::get('/view',[ClearanceDocumentController::class, 'ViewClearanceDocument'])->name('clearance.data.view');
    Route::get('/add',[ClearanceDocumentController::class, 'AddDataClearance'])->name('clearance.data.add');
    Route::post('/store',[ClearanceDocumentController::class, 'StoreDataClearance'])->name('clearance.data.store');
    Route::get('/edit/{id}',[ClearanceDocumentController::class, 'EditDataClearance'])->name('clearance.data.edit');
    Route::post('/update/{id}',[ClearanceDocumentController::class, 'UpdateDataClearance'])->name('clearance.data.update');
    Route::get('/delete/{id}',[ClearanceDocumentController::class, 'DataClearanceDeleted'])->name('clearance.data.delete');
    
});         

Route::get('/getofficer/name', [GetOfficerController::class, 'GetOfficer'])->name('getofficer.name');

Route::get('/getofficer/mobile', [GetOfficerController::class, 'GetOffMobile'])->name('getofficer.mobile');





Route::prefix('clearance/status')->group(function(){

    Route::get('/pending/view',[StatusController::class, 'ViewStatusPending'])->name('clearance.pending.view');
    Route::get('/pending/details/{id}',[StatusController::class, 'DetailsDataClearance'])->name('clearance.data.details');
    Route::get('/io/received/docs',[StatusController::class, 'DoceIoReceived'])->name('clearance.docs.received.io');
    Route::get('/io/submit/docs/ps',[StatusController::class, 'DocsSubmitPsIo'])->name('io.docs.submit.ps');
    Route::get('/ps/send/dsb',[StatusController::class, 'PsSendDsb'])->name('ps.send.dsb');
    Route::get('/dsb/received/docs',[StatusController::class, 'DsbReceDocs'])->name('dsb.rece.docs');
    Route::get('/wait/sp/sign',[StatusController::class, 'WaitSPSign'])->name('wait.sp.sign');
    Route::get('/sp/sign/ok',[StatusController::class, 'OkSPSign'])->name('sp.sign.ok');
    Route::get('/send/mofa',[StatusController::class, 'SendMofa'])->name('send.mofa');
    Route::get('/received/from/mofa',[StatusController::class, 'ReceivedFromMofa'])->name('received.from.mofa');
    Route::get('/waitting/delivered',[StatusController::class, 'WaittingDelivered'])->name('waitting.delivered');
    Route::get('/docs/delivered',[StatusController::class, 'DocsDelivered'])->name('docs.delivered');
}); 


// STATUS CHENGE OR UPDATE  

Route::get('/docs/received/io/{id}',[StatusController::class, 'ReceivedIo'])->name('pending.received.io');
Route::get('/docs/received/ps/{id}',[StatusController::class, 'ReceivedPs'])->name('io.received.ps');
Route::get('/docs/send/dsb/{id}',[StatusController::class, 'PSendDsb'])->name('ps.received.io');
Route::get('/docs/received/dsb/{id}',[StatusController::class, 'RecievedDsb'])->name('ps.send.deb');
// Route::get('/docs/waitting/sp/{id}',[StatusController::class, 'WitSP'])->name('waitting.sp.sign');
Route::get('/docs/sp/ok/{id}',[StatusController::class, 'SPSignOk'])->name('sp.sign.done');
Route::get('/docs/send/mofa/{id}',[StatusController::class, 'SendDocsMofa'])->name('send.docs.mofa');
Route::get('/docs/received/from/mofa/{id}',[StatusController::class, 'DocsReceivedFromMofa'])->name('docs.received.from.mofa');
// Route::get('/docs/wait/for/delivery/{id}',[StatusController::class, 'WaittingForDelivery'])->name('wait.for.delivery');
Route::get('/docs/delivered/{id}',[StatusController::class, 'DocumentDelivered'])->name('document.delivered');


