<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HerbalController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\WorkerController;
use Illuminate\Support\Facades\Route;

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

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    $routes = ['diseases', 'symptoms', 'diagnosis', 'herbal-index', 'herbal_show'];
    return redirect()->route('index');

})->name('language');

Route::get('/', [FrontController::class, 'index'])->name('index');


Route::get('/herbal_index', [FrontController::class, 'herbal'])->name('herbal-index');
Route::get('/herbal_index/{herbal}', [FrontController::class, 'herbal_show'])->name('herbal_show');

Route::get('/diseases', [FrontController::class, 'diseases'])->name('diseases');
Route::get('/search', [FrontController::class, 'search'])->name('search');
Route::get('/symptoms', [FrontController::class, 'symptoms'])->name('symptoms');
Route::get('/diagnosis', [FrontController::class, 'diagnosis'])->name('diagnosis');


$folders = ['diseases', 'symptoms'];
foreach ($folders as $folder) {
    get_routes($folder);
}

function get_routes($folder)
{
    $dir = Config::get('view.paths')[0] . '/html';
    $ffs = scandir($dir . '/' . $folder);
    foreach ($ffs as $ff) {
        if ($ff != '.' && $ff != '..') {

            $directory = $dir . '/' . $folder . '/' . $ff;

            if (is_readable($directory)) {
                if (is_dir($directory)) {
                    $files = scandir($directory);

                    foreach ($files as $file) {
                        if ($file != '.' && $file != '..') {

                            if (is_dir($directory . '/' . $file)) {
                                $sub_dir = $directory . '/' . $file;
                                $sub_files = scandir($sub_dir);
                                foreach ($sub_files as $sub_file) {
                                    if ($sub_file != '.' && $sub_file != '..') {
                                        $view_file = str_replace('.blade.php', '', $sub_file);
                                        $route_name = $ff . '/' . $file . '/' . $view_file;
                                        $view_name = 'html/' . $folder . '/' . $ff . '/' . $file . '/' . $view_file;

                                        Route::get($route_name, function () use ($view_name) {
                                            return view($view_name);
                                        });
                                        Route::get($route_name . '.html', function () use ($view_name) {
                                            return view($view_name);
                                        });
                                        Route::get($view_file . '.html', function () use ($view_name) {
                                            return view($view_name);
                                        });
                                    }
                                }


                            } else {
                                $view_file = str_replace('.blade.php', '', $file);
                                $route_name = $ff . '/' . $view_file;
                                $view_name = 'html/' . $folder . '/' . $ff . '/' . $view_file;

                                Route::get($route_name, function () use ($view_name) {
                                    return view($view_name);
                                });
                                Route::get($route_name . '.html', function () use ($view_name) {
                                    return view($view_name);
                                });
                                Route::get($view_file . '.html', function () use ($view_name) {
                                    return view($view_name);
                                });
                            }
                        }
                    }
                }
            }
        }
    }
}


Route::middleware('auth')->group(function () {
//    Route::get('/services/{category}/', [FrontController::class, 'cat_show'])->name('cat_show');
    Route::get('show_worker/{worker}', [FrontController::class, 'worker_show'])->name('worker_show');
    Route::post('request_post', [FrontController::class, 'request_post'])->name('request_post');
});

Route::middleware('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('herbal', HerbalController::class);
    Route::resource('/category', CategoryController::class);
    Route::resource('/worker', WorkerController::class);
    Route::resource('/appointment', AppointmentController::class);
    Route::resource('/request', RequestController::class);
    Route::get('calendar/{id}', [AdminController::class, 'calendar'])->name('admin.calendar');
    Route::resource('/admin', AdminController::class);
});

require __DIR__ . '/auth.php';