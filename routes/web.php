<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

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

Route::get('/', [MemberController::class, 'viewAllBook']);

Route::get('/add/member', [MemberController::class, 'AddMember']);

Route::post('/members', [MemberController::class, 'memberKaryawan']);

Route::get('/update/{id}', [MemberController::class, 'UpdateMember']);

Route::patch('/saveUpdate/{id}', [MemberController::class, 'saveUpdate']);

Route::delete('/deleteMember/{id}', [MemberController::class, 'deleteMember']);