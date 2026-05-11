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
Route::redirect('/privacy-policy', '/privacy', 301);
Route::redirect('/privacy-policy-1', '/privacy', 301);
Route::redirect('/terms-and-conditions', '/terms', 301);
Route::redirect('/about-9', '/about', 301);
Route::redirect('/testimonials', '/reviews', 301);
Route::redirect('/what-sets-us-apart', '/about', 301);
Route::redirect('/referral', '/refer-friends', 301);
Route::redirect('/loyalty', '/a1-black-member', 301);
Route::redirect('/book-online', '/services/consultations', 301);
Route::redirect('/book-a-consult', '/services/consultations', 301);
Route::redirect('/pre-contact-form', '/contact', 301);
Route::redirect('/form-submitted', '/', 301);
Route::redirect('/payment-request-page', '/services', 301);
Route::redirect('/pricing-plans/list', '/services', 301);
Route::redirect('/blank-1', '/', 301);
Route::redirect('/blank-2', '/', 301);
Route::redirect('/copy-of-home', '/', 301);
Route::redirect('/services-4', '/services', 301);
Route::redirect('/personal-training-packages', '/services/personal-training', 301);
Route::redirect('/boxing', '/services/boxing', 301);
Route::redirect('/personal-training-at-the-studio', '/services/personal-training/studio', 301);
Route::redirect('/copy-of-personal-training-at-the-studio', '/services/personal-training/studio', 301);
Route::redirect('/complementary-home-gym-training-session', '/services/personal-training/in-home', 301);
Route::redirect('/complementary-home-gym-training-session-1', '/services/personal-training/in-home', 301);
Route::redirect('/physical-therapy-at-the-studio', '/services/physical-therapy/studio', 301);
Route::redirect('/copy-of-physical-therapy-at-the-studio', '/services/physical-therapy/studio', 301);
Route::redirect('/studio-physical-therapy-consultation', '/services/physical-therapy/consult-studio', 301);
Route::redirect('/copy-of-physical-therapy-remote', '/services/physical-therapy/in-home', 301);
Route::redirect('/copy-of-message-therapy-at-the-studio', '/services/massage-therapy/studio', 301);
Route::redirect('/copy-of-message-therapy-remote', '/services/massage-therapy/in-home', 301);
Route::redirect('/copy-of-kettlebell-course-remote', '/services/kettlebell/course', 301);
Route::redirect('/copy-of-boxing-training-at-the-studio', '/services/boxing/studio', 301);
Route::redirect('/copy-of-boxing-studio', '/services/boxing/studio', 301);
Route::redirect('/post/{slug}', '/blog/{slug}', 301);
Route::redirect('/coach-wei', '/trainers/wei', 301);
Route::redirect('/copy-of-coach-wei', '/trainers/wei', 301);
Route::redirect('/coach-kate', '/trainers/kate', 301);
Route::redirect('/copy-of-coach-kate', '/trainers/kate', 301);
Route::redirect('/coach-jamie', '/trainers/jamie', 301);
Route::redirect('/copy-of-coach-jamie', '/trainers/jamie', 301);
Route::redirect('/coach-phillip', '/trainers/phillip', 301);
Route::redirect('/copy-of-coach-phillip', '/trainers/phillip', 301);
Route::redirect('/coach-abby', '/trainers/abby', 301);
Route::redirect('/copy-of-coach-abby', '/trainers/abby', 301);

// Wix service-page/* redirects (booking packs → service pages)
Route::redirect('/service-page/online-training-hybrid', '/services/online-hybrid', 301);
Route::redirect('/service-page/hybrid-training', '/services/online-hybrid', 301);
Route::redirect('/service-page/kettlebell-course', '/services/kettlebell', 301);
Route::redirect('/service-page/free-15-min-consultation-call', '/services/consultations', 301);
Route::redirect('/service-page/a1-s-gym-s-complementary-session', '/services/consultations', 301);
Route::redirect('/service-page/complementary-home-gym-training-session', '/services/consultations', 301);
Route::redirect('/service-page/a1-s-gym-s-complementary-partner-session', '/services/partner-training', 301);
Route::redirect('/service-page/a1-s-physical-therapy-consult', '/services/physical-therapy', 301);
Route::redirect('/service-page/a1-s-1-physical-therapy-session', '/services/physical-therapy', 301);
Route::redirect('/service-page/home-gym-1-physical-therapy-session', '/services/physical-therapy', 301);
// Personal training packs
Route::redirect('/service-page/{pack}-pack-{type}-personal-training', '/services/personal-training', 301);
Route::redirect('/service-page/{pack}-pack-home-gym-personal-training', '/services/personal-training', 301);
Route::redirect('/service-page/{pack}-pack-home-gym-boxing', '/services/boxing', 301);
Route::redirect('/service-page/{pack}-pack-a1-s-boxing', '/services/boxing', 301);
Route::redirect('/service-page/{pack}-pack-a1-s-partner-training', '/services/partner-training', 301);
Route::redirect('/service-page/{pack}-pack-home-gym-partner-training', '/services/partner-training', 301);
Route::redirect('/service-page/{pack}-pack-online-video-session', '/services/online-hybrid', 301);
Route::redirect('/service-page/{pack}-pack-a1-s-partner-training', '/services/partner-training', 301);
Route::redirect('/service-page/a1-s-gym-s-complementary-session', '/services/consultations', 301);

// ─── Health check (no middleware) ───
Route::get('/health', function () {
    $checks = [
        'app_key' => env('APP_KEY') ? 'set' : 'MISSING',
        'env' => app()->environment(),
        'storage_writable' => is_writable(storage_path()),
        'views_writable' => is_writable(storage_path('framework/views')),
        'db_default' => config('database.default'),
        'php_version' => PHP_VERSION,
        'ext_mongodb' => extension_loaded('mongodb') ? 'loaded' : 'missing',
    ];

    try {
        view('welcome')->render();
        $checks['view_rendered'] = true;
    } catch (\Throwable $e) {
        $checks['view_error'] = $e->getMessage();
    }

    return response()->json($checks);
});

Route::middleware(['locale'])->group(function () {

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
