<?php

use Illuminate\Support\Facades\Route;
//Auth
use \App\Http\Controllers\Auth\LoginController;
// end Auth

use \App\Http\Controllers\PincodeController;
use \App\Http\Controllers\UserTypeController;
use \App\Http\Controllers\DirectorController;
use \App\Http\Controllers\MarketingManagerController;
use \App\Http\Controllers\MarketingSupervisorController;
use \App\Http\Controllers\MarketingExecutiveController;
use \App\Http\Controllers\StaffdetailController;
use \App\Http\Controllers\ProjectController;
use \App\Http\Controllers\RelationShipController;
use \App\Http\Controllers\DesignationController;
use \App\Http\Controllers\MarketingTypeController;
use \App\Http\Controllers\BranchController;
use \App\Http\Controllers\DirectionController;
use \App\Http\Controllers\PagesController;
use \App\Http\Controllers\PermissionController; 


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



// Auth
Route::get('login', [LoginController::class, 'login_form'])->name('login');
Route::post('login-store', [LoginController::class, 'login'])->name('admin_login');


Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('livewire.index');
    });

    Route::get('/index', function () {
        return view('dashboard');
    });
    Route::get('logout', [LoginController::class, 'logout'])->name('admin_logout');


    // User Type
    Route::get('/user-type', [UserTypeController::class, 'index'])->name('user_type.index');
    Route::post('/user-type-store', [UserTypeController::class, 'store'])->name('user_type.store');
    Route::get('user-type/{id}/edit', [UserTypeController::class, 'edit'])->name('user_type.edit');
    Route::put('user-type/{id}', [UserTypeController::class, 'update'])->name('user_type.update');
    Route::delete('user-type/{id}', [UserTypeController::class, 'delete'])->name('user_type.destroy');

    //pincode
    Route::get('pincode-generate/{pincode}', [PincodeController::class, 'pincode_generate'])->name('pincode_generate');

    // Manging Team
    //Directors
    Route::get('/director-lists', [DirectorController::class, 'index'])->name('director_lits');
    Route::get('/director-create', [DirectorController::class, 'create'])->name('director_create');
    Route::post('/director-store', [DirectorController::class, 'store'])->name('director_store');
    Route::get('director/{id}/edit', [DirectorController::class, 'edit'])->name('director_edit');
    Route::put('director/{id}', [DirectorController::class, 'update'])->name('director_update');
    Route::delete('director/{id}', [DirectorController::class, 'delete'])->name('director_destroy');
    
    //Marketing manager
    Route::get('/marketing-manager-lists', [MarketingManagerController::class, 'index'])->name('marketing_manager_lits');
    Route::get('/marketing-manager-create', [MarketingManagerController::class, 'create'])->name('marketing_manager_create');
    Route::post('/marketing-manager-store', [MarketingManagerController::class, 'store'])->name('marketing_manager_store');
    Route::get('marketing-manager/{id}/edit', [MarketingManagerController::class, 'edit'])->name('marketing_manager_edit');
    Route::put('marketing-manager/{id}', [MarketingManagerController::class, 'update'])->name('marketing_manager_update');
    Route::delete('marketing-manager/{id}', [MarketingManagerController::class, 'delete'])->name('marketing_manager_destroy');
   
    //Marketing supervisor
    Route::get('/marketing-supervisor-lists', [MarketingSupervisorController::class, 'index'])->name('marketing_supervisor_lits');
    Route::get('/marketing-supervisor-create', [MarketingSupervisorController::class, 'create'])->name('marketing_supervisor_create');
    Route::post('/marketing-supervisor-store', [MarketingSupervisorController::class, 'store'])->name('marketing_supervisor_store');
    Route::get('marketing-supervisor/{id}/edit', [MarketingSupervisorController::class, 'edit'])->name('marketing_supervisor_edit');
    Route::put('marketing-supervisor/{id}', [MarketingSupervisorController::class, 'update'])->name('marketing_supervisor_update');
    Route::delete('marketing-supervisor/{id}', [MarketingSupervisorController::class, 'delete'])->name('marketing_supervisor_destroy');
   
    //Marketing executive
    Route::get('/marketing-executive-lists', [MarketingExecutiveController::class, 'index'])->name('marketing_executive_lits');
    Route::get('/marketing-executive-create', [MarketingExecutiveController::class, 'create'])->name('marketing_executive_create');
    Route::post('/marketing-executive-store', [MarketingExecutiveController::class, 'store'])->name('marketing_executive_store');
    Route::get('marketing-executive/{id}/edit', [MarketingExecutiveController::class, 'edit'])->name('marketing_executive_edit');
    Route::put('marketing-executive/{id}', [MarketingExecutiveController::class, 'update'])->name('marketing_executive_update');
    Route::delete('marketing-executive/{id}', [MarketingExecutiveController::class, 'delete'])->name('marketing_executive_destroy');
    
    //staff details
    Route::get('/staff-details', [StaffdetailController::class, 'index'])->name('staff_detail_lits');
    Route::get('/staff-detail-create', [StaffdetailController::class, 'create'])->name('staff_detail_create');
    Route::post('/staff-detail-store', [StaffdetailController::class, 'store'])->name('staff_detail_store');
    Route::get('staff-detail/{id}/edit', [StaffdetailController::class, 'edit'])->name('staff_detail_edit');
    Route::put('staff-detail/{id}', [StaffdetailController::class, 'update'])->name('staff_detail_update');
    Route::delete('staff-detail/{id}', [StaffdetailController::class, 'delete'])->name('staff_detail_destroy');
   
    //project
    Route::get('/project-type', [ProjectController::class, 'index'])->name('project_type.index');
    Route::post('/project-type-store', [ProjectController::class, 'store'])->name('project_type.store');
    Route::get('project-type/{id}/edit', [ProjectController::class, 'edit'])->name('project_type.edit');
    Route::put('project-type/{id}', [ProjectController::class, 'update'])->name('project_type.update');
    Route::delete('project-type/{id}', [ProjectController::class, 'delete'])->name('project_type.destroy');

    //Branch
    Route::get('/branch', [BranchController::class, 'index'])->name('branch.index');
    Route::post('/branch-store', [BranchController::class, 'store'])->name('branch.store');
    Route::get('branch/{id}/edit', [BranchController::class, 'edit'])->name('branch.edit');
    Route::put('branch/{id}', [BranchController::class, 'update'])->name('branch.update');
    Route::delete('branch/{id}/delete', [BranchController::class, 'delete'])->name('branch.destroy');

    //relationship
    Route::get('/relationship', [RelationShipController::class, 'index'])->name('relationship.index');
    Route::post('/relationship-store', [RelationShipController::class, 'store'])->name('relationship.store');
    Route::get('/relationship/{id}/edit', [RelationShipController::class, 'edit'])->name('relationship.edit');
    Route::put('relationship/{id}', [RelationShipController::class, 'update'])->name('relationship.update');
    Route::delete('/relationship/{id}', [RelationShipController::class, 'delete'])->name('relationship.destroy');

    //Designation
    Route::get('/designation', [DesignationController::class, 'index'])->name('designation.index');
    Route::post('/designation-store', [DesignationController::class, 'store'])->name('designation.store');
    Route::get('/designation/{id}/edit', [DesignationController::class, 'edit'])->name('designation.edit');
    Route::put('designation/{id}', [DesignationController::class, 'update'])->name('designation.update');
    Route::delete('/designation/{id}', [DesignationController::class, 'delete'])->name('designation.destroy');

    //Direction
    Route::get('/direction', [DirectionController::class, 'index'])->name('direction.index');
    Route::post('/direction-store', [DirectionController::class, 'store'])->name('direction.store');
    Route::get('/direction/{id}/edit', [DirectionController::class, 'edit'])->name('direction.edit');
    Route::put('direction/{id}', [DirectionController::class, 'update'])->name('direction.update');
    Route::delete('/direction/{id}', [DirectionController::class, 'delete'])->name('direction.destroy');

    // Marketing Type
    Route::get('/marketing', [MarketingTypeController::class, 'index'])->name('marketing.index');
    Route::post('/marketing-store', [MarketingTypeController::class, 'store'])->name('marketing.store');
    Route::get('/marketing/{id}/edit', [MarketingTypeController::class, 'edit'])->name('marketing.edit');
    Route::put('marketing/{id}', [MarketingTypeController::class, 'update'])->name('marketing.update');
    Route::delete('/marketing/{id}', [MarketingTypeController::class, 'delete'])->name('marketing.destroy');
    
    // Pages
    Route::get('/pages', [PagesController::class, 'index'])->name('pages.index');
    Route::post('/store_pages', [PagesController::class, 'store'])->name('pages.store');
    Route::get('/pages/{id}/edit', [PagesController::class, 'edit'])->name('pages.edit');
    Route::put('pages/{id}', [PagesController::class, 'update'])->name('pages.update');
    Route::delete('/pages/{id}/delete', [PagesController::class, 'delete'])->name('pages.destroy');
    
    
    // Permissions
    Route::get('/permissions', [PermissionController::class, 'index'])->name('permissions_list');
    Route::get('/permissions/create', [PermissionController::class, 'create'])->name('create_permission');
    Route::post('/store/permissions', [PermissionController::class, 'store'])->name('store_permission');
    Route::get('permissions/{id}/edit', [PermissionController::class, 'edit'])->name('edit_permission');
    Route::put('permissions/{id}', [PermissionController::class, 'update'])->name('update_permission');
    Route::delete('permissions/{id}', [PermissionController::class, 'delete'])->name('delete_permission');
});


