<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Public\BlogController;
use App\Http\Controllers\Public\ContactController;
use App\Http\Controllers\Public\HomeController;
use App\Http\Controllers\Public\PageController;
use App\Http\Controllers\Public\ServiceController;
use App\Http\Controllers\Public\SitemapController;
use App\Http\Controllers\Public\TrainerController;
use App\Livewire\Admin\Blog\Create;
use App\Livewire\Admin\Blog\Edit;
use App\Livewire\Admin\Blog\Index;
use Illuminate\Support\Facades\Route;

// ─── Wix legacy 301 redirects (outside locale middleware) ───
// Essential: Wix pages with likely traffic or SEO value
Route::redirect('/privacy-policy', '/privacy', 301);
Route::redirect('/terms-and-conditions', '/terms', 301);
Route::redirect('/about-9', '/about', 301);
Route::redirect('/testimonials', '/reviews', 301);
Route::redirect('/referral', '/refer-friends', 301);
Route::redirect('/loyalty', '/a1-black-member', 301);
Route::redirect('/book-online', '/services/consultations', 301);
Route::redirect('/book-a-consult', '/services/consultations', 301);
Route::redirect('/pre-contact-form', '/contact', 301);
Route::redirect('/personal-training-packages', '/services/personal-training', 301);
Route::redirect('/boxing', '/services/boxing', 301);
Route::redirect('/post/{slug}', '/blog/{slug}', 301);
Route::redirect('/coach-wei', '/trainers/wei', 301);
Route::redirect('/coach-kate', '/trainers/kate', 301);
Route::redirect('/coach-jamie', '/trainers/jamie', 301);
Route::redirect('/coach-phillip', '/trainers/phillip', 301);
Route::redirect('/coach-abby', '/trainers/abby', 301);

// ─── Health check (no middleware) ───
Route::get('/health', function () {
    $locale = app()->getLocale();
    $checks = [
        'app_key' => env('APP_KEY') ? 'set' : 'MISSING',
        'env' => app()->environment(),
        'locale' => $locale,
        'lang_file_exists' => file_exists(lang_path("{$locale}.json")) ? 'yes' : 'MISSING',
        'lang_file_path' => lang_path("{$locale}.json"),
        'nav_services_translation' => t('nav.services'),
        'railway_edge' => $_SERVER['HTTP_X_RAILWAY_EDGE'] ?? 'not set',
        'app_url' => env('APP_URL', 'not set'),
        'session_domain' => config('session.domain'),
        'asset_url' => config('app.asset_url'),
        'storage_writable' => is_writable(storage_path()),
        'views_writable' => is_writable(storage_path('framework/views')),
        'db_default' => config('database.default'),
        'php_version' => PHP_VERSION,
        'ext_mongodb' => extension_loaded('mongodb') ? 'loaded' : 'missing',
    ];

    try {
        view('welcome')->render();
        $checks['view_rendered'] = true;
    } catch (Throwable $e) {
        $checks['view_error'] = $e->getMessage();
    }

    return response()->json($checks);
});

Route::middleware(['locale', 'cacheResponse'])->group(function () {

    // English routes (with response cache for static pages)
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::get('/trainers', [TrainerController::class, 'index'])->name('trainers.index');
    Route::get('/trainers/{slug}', [TrainerController::class, 'show'])->name('trainers.show');
    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
    Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('services.show');
    Route::get('/services/{slug}/{sub}', [ServiceController::class, 'showSub'])->name('services.sub');
    Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
    Route::get('/a1-black-member', [PageController::class, 'a1BlackMember'])->name('a1-black-member');
    Route::get('/refer-friends', [PageController::class, 'referFriends'])->name('refer-friends');
    Route::get('/reviews', [PageController::class, 'reviews'])->name('reviews');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::post('/api/contact', [ContactController::class, 'submit'])->name('contact.submit');
    Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');
    Route::get('/terms', [PageController::class, 'terms'])->name('terms');
    Route::get('/find-class', [PageController::class, 'findClass'])->name('find-class');
    Route::get('/calendar', [PageController::class, 'calendar'])->name('calendar');
    Route::get('/renewals', [PageController::class, 'renewals'])->name('renewals');

    // Sitemap
    Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');
    Route::get('/robots.txt', [SitemapController::class, 'robots'])->name('robots');

    // Spanish routes
    Route::prefix('es')->group(function () {
        Route::get('/', [HomeController::class, 'index'])->name('es.home');
        Route::get('/about', [PageController::class, 'about'])->name('es.about');
        Route::get('/trainers', [TrainerController::class, 'index'])->name('es.trainers.index');
        Route::get('/trainers/{slug}', [TrainerController::class, 'show'])->name('es.trainers.show');
        Route::get('/services', [ServiceController::class, 'index'])->name('es.services.index');
        Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('es.services.show');
        Route::get('/services/{slug}/{sub}', [ServiceController::class, 'showSub'])->name('es.services.sub');
        Route::get('/blog', [BlogController::class, 'index'])->name('es.blog.index');
        Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('es.blog.show');
        Route::get('/a1-black-member', [PageController::class, 'a1BlackMember'])->name('es.a1-black-member');
        Route::get('/refer-friends', [PageController::class, 'referFriends'])->name('es.refer-friends');
        Route::get('/reviews', [PageController::class, 'reviews'])->name('es.reviews');
        Route::get('/contact', [ContactController::class, 'index'])->name('es.contact');
        Route::post('/api/contact', [ContactController::class, 'submit'])->name('es.contact.submit');
        Route::get('/privacy', [PageController::class, 'privacy'])->name('es.privacy');
        Route::get('/terms', [PageController::class, 'terms'])->name('es.terms');
        Route::get('/find-class', [PageController::class, 'findClass'])->name('es.find-class');
        Route::get('/calendar', [PageController::class, 'calendar'])->name('es.calendar');
        Route::get('/renewals', [PageController::class, 'renewals'])->name('es.renewals');

    });

    // Admin routes
    Route::middleware(['auth', 'verified', 'admin'])->prefix('admin')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/blogs', Index::class)->name('admin.blogs.index');
        Route::get('/blogs/create', Create::class)->name('admin.blogs.create');
        Route::get('/blogs/{id}/edit', Edit::class)->name('admin.blogs.edit');
        Route::get('/seo', App\Livewire\Admin\Seo\Index::class)->name('admin.seo.index');
    });

});

require __DIR__.'/auth.php';
