<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Models\Ekstrakurikuler;
use App\Models\Fasilitas;
use App\Models\Prestasi;
use App\Models\Teacher;
use App\Models\Carousel;
use App\Models\Post;
use App\Models\Gallery;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserPublicController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PublikasiController;
use Illuminate\Support\Facades\Artisan;

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

Route::get('/', function () {
    $carousels = Carousel::latest()->get();
    $posts = Post::latest()->take(6)->get();
    $prestasi = Prestasi::latest()->take(4)->get();

    return view('index', [
        "title" => "Home",
        "carousels" => $carousels,
        "posts" => $posts,
        "prestasis" => $prestasi,
    ]);
});

Route::get('/gallery', function () {
    return view('gallery', [
        "title" => "Gallery",
    ]);
});

Route::get('/visi-misi', function () {
    return view('visimisi', [
        "title" => "Visi dan Misi",
    ]);
});

Route::get('/fasilitas', function () {
    return view('fasilitas', [
        "title" => "Fasilitas",
    ]);
});

Route::get('/peraturan', function () {
    return view('peraturan', [
        "title" => "Peraturan",
    ]);
});

Route::get('/akuntansi', function () {
    return view('akuntansi', [
        "title" => "Akuntansi",
    ]);
});

Route::get('/multimedia', function () {
    return view('multimedia', [
        "title" => "Multimedia",
    ]);
});

Route::get('/ekstrakurikuler', function () {
    return view('ekstrakurikuler', [
        "title" => "ekstrakurikuler",
    ]);
});

Route::get('/osis', function () {
    return view('osis', [
        "title" => "OSIS",
    ]);
});

Route::get('/prestasi', function () {
    return view('prestasi', [
        "title" => "Prestasi",
    ]);
});

Route::get('/lokasi', function () {
    return view('lokasi', [
        "title" => "Lokasi",
    ]);
});

Route::get('/login', function () {
    return view('auth.login', [
        "title" => "Login",
    ]);
})->name('login');

Auth::routes();

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/register', function () {
    return abort(404);
});
// Route::post('/register', [AuthController::class, 'register']);

Route::get('/dashboard', function () {
    return view('dashboard.main', [
        "title" => "Dashboard",
    ]);
})->middleware(['auth', 'admin'])->name('dashboard');

Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');

Route::resource('/dashboard/posts', PostController::class)->middleware(['auth', 'admin']);
Route::get('/dashboard/posts/checkSlug', [PostController::class, 'checkSlug'])
    ->middleware('auth');

// Route::resource('/publikasi', PublikasiController::class);
Route::get('/publikasi', [PublikasiController::class, 'index'])->name('publikasi.index');
Route::get('/publikasi/{post:slug}', [PublikasiController::class, 'show'])->name('publikasi.show');

Route::resource('/dashboard/categories', CategoryController::class)->middleware(['auth', 'admin']);


Route::resource('/dashboard/users', UserController::class)->middleware(['auth', 'admin']);
Route::resource('/users', UserPublicController::class)->middleware(['auth']);

Route::resource('/dashboard/teachers', TeacherController::class)->middleware(['auth', 'admin']);
Route::get('guru', function () {
    $teachers = Teacher::paginate(8);
    return view('guru', [
        'title' => 'Guru',
        'teachers' => $teachers,
    ]);
});

Route::resource('/dashboard/extracurriculars', EkstrakurikulerController::class)->middleware(['auth', 'admin']);
Route::get('ekstrakurikuler', function () {
    $ekstrakurikulers = Ekstrakurikuler::latest()->get();
    return view('ekstrakurikuler', [
        'title' => 'Ekstrakurikuler',
        'ekstrakurikulers' => $ekstrakurikulers,
    ]);
});

Route::resource('/dashboard/facilities', FasilitasController::class)->middleware(['auth', 'admin']);
Route::get('fasilitas', function () {
    $fasilitass = Fasilitas::latest()->get();
    return view('fasilitas', [
        'title' => 'Fasilitas',
        'fasilitass' => $fasilitass,
    ]);
});

Route::resource('/dashboard/achievement', PrestasiController::class)->middleware(['auth', 'admin']);
Route::get('prestasi', function () {
    $prestasis = Prestasi::latest()->get();
    return view('prestasi', [
        'title' => 'Prestasi',
        'prestasis' => $prestasis,
    ]);
});

Route::resource('/dashboard/carousels', CarouselController::class)->middleware(['auth', 'admin']);
Route::get('carousel', function () {
    $carousels = Carousel::latest()->get();
    return view('carousel', [
        'title' => 'Carousel',
        'carousels' => $carousels,
    ]);
});

Route::resource('/dashboard/galleries', GalleryController::class)->middleware(['auth', 'admin']);
Route::get('gallery', function () {
    $galleries = Gallery::latest()->get();
    return view('gallery', [
        'title' => 'Gallery',
        'galleries' => $galleries,
    ]);
});

Route::get('/create-symlink', function () {
    symlink(storage_path('/app/public'), public_path('storage'));
    echo "Symlink Created. Thanks";
});

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});
