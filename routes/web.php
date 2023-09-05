<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AnnounceForDepartmentController;
use App\Http\Controllers\AnnounceController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceCategoryController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::match(['get', 'post'], '/login', [AuthController::class, 'login'])->name('login');

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');

// Route nhiệm vụ cá nhân
    Route::prefix('work')->group(function () {
        Route::get('/',[WorkController::class,'overview'])->name('work.overview');
        Route::match(['get','post'],'/add',[WorkController::class, 'add'])->name('work.add');
        Route::match(['get','post'],'/edit/{id}',[WorkController::class, 'edit'])->name('work.edit');
        Route::get('/complete/{id}',[WorkController::class,'complete'])->name('work.complete');
        Route::get('/uncomplete/{id}',[WorkController::class,'uncomplete'])->name('work.uncomplete');
        Route::get('/delete/{id}',[WorkController::class,'delete'])->name('work.delete');
        Route::get('/{id}', [WorkController::class,'list'])->name('work.list');
    });

// Route thông báo chung và riêng cho phòng ban
    Route::prefix('announce')->group(function () {
        Route::get('/', [AnnounceController::class, 'list'])->name('announce.list');
        Route::get('/detail/{id}', [AnnounceController::class, 'detail'])->name('announce.detail');
        Route::post('/add', [AnnounceController::class, 'add'])->name('announce.add');
        Route::get('/edit', function () {
            return view('announce.edit');
        })->name('announce.edit');
    });
    Route::get('announce/viewAdd', [AnnounceForDepartmentController::class, 'viewAdd'])->name('announce.viewAdd');

    Route::prefix('announce-by-department')->group(function () {
        Route::get('/', [AnnounceForDepartmentController::class, 'list'])->name('announce-by-department.list');
        Route::get('/detail/{id}', [AnnounceForDepartmentController::class, 'detail'])->name('announce-by-department.detail');
        Route::post('/add', [AnnounceForDepartmentController::class, 'add'])->name('announce-by-department.add');
        Route::get('/edit', function () {
            return view('announce-by-department.edit');
        })->name('announce-by-department.edit');
    });

// Route báo cáo
    Route::prefix('report')->group(function () {
        Route::get('/', function () {
            return view('report.overview');
        })->name('report.overview');

        Route::get('/list', [ReportController::class, 'list'])->name('report.list');
        Route::match(['get','post'],'/add',[ReportController::class,'add'])->name('report.add');
       
    });

// Route dịch vụ
    Route::prefix('service')->group(function () {
        Route::get('/', [ServiceController::class,'list'])->name('service.list');
        Route::get('/detail', function () {
            return view('service.detail');
        })->name('service.detail');
        Route::match(['get','post'],'/add',[ServiceController::class,'add'])->name('service.add');
        Route::match(['get','post'],'/edit/{id}',[ServiceController::class,'edit'])->name('service.edit');
        Route::get('/delete/{id}',[ServiceController::class,'delete'])->name('service.delete');
    });

// Route Danh mục dịch vụ
    Route::prefix('service-cate')->group(function(){
        Route::get('/',[ServiceCategoryController::class,'list'])->name('service-cate.list');
        Route::match(['get','post'],'/add',[ServiceCategoryController::class,'add'])->name('service-cate.add');
        Route::match(['get','post'],'/edit/{id}',[ServiceCategoryController::class,'edit'])->name('service-cate.edit');
        Route::get('/delete/{id}',[ServiceCategoryController::class,'delete'])->name('service-cate.delete');
    });

// Rpute phòng ban
    Route::prefix('department')->group(function(){
        Route::get('/', [DepartmentController::class,'list'])->name('department.list');
        Route::match(['get','post'],'/add',[DepartmentController::class,'add'])->name('department.add');
        Route::match(['get','post'],'/edit/{id}',[DepartmentController::class,'edit'] )->name('department.edit');
        Route::get('/delete/{id}',[DepartmentController::class,'delete'])->name('department.delete');
    }); 

// Route Dự án
    Route::prefix('project')->group(function(){
        Route::get('/',[ProjectController::class,'list'])->name('project.list');
        Route::match(['get','post'],'add',[ProjectController::class,'add'])->name('project.add');
        Route::match(['get','post'],'/edit/{id}',[ProjectController::class,'edit'])->name('project.edit');
        Route::get('/delete/{id}',[ProjectController::class,'delete'])->name('project.delete');
    });

// Route quản lý nhân sự
    Route::prefix('user')->group(function(){
        Route::get('/',[UserController::class,'list'])->name('user.list');
        Route::match(['get','post'],'/add',[UserController::class,'add'])->name('user.add');
        Route::match(['get','post'],'/edit/{id}',[UserController::class,'edit'])->name('user.edit');
        Route::get('/delete/{id}',[UserController::class,'delete'])->name('user.delete');
    }); 

// Route Vai trò
    Route::prefix('role')->group(function(){
        Route::get('/',[RoleController::class,'list'])->name('role.list');
        Route::match(['get','post'],'/add',[RoleController::class,'add'])->name('role.add');
        Route::match(['get','post'],'/edit/{id}',[RoleController::class,'edit'])->name('role.edit');
        Route::get('/delete/{id}',[RoleController::class,'delete'])->name('role.delete');
    }); 

// Route Logout
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
