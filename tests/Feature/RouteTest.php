<?php

namespace Tests\Feature;

use Tests\TestCase;

class RouteTest extends TestCase
{
    // ─── English Public Routes ───

    public function test_homepage(): void
    {
        $this->get('/')->assertOk();
    }

    public function test_about_page(): void
    {
        $this->get('/about')->assertOk();
    }

    public function test_services_index(): void
    {
        $this->get('/services')->assertOk();
    }

    public function test_service_detail(): void
    {
        $this->get('/services/personal-training')->assertOk();
        $this->get('/services/partner-training')->assertOk();
        $this->get('/services/physical-therapy')->assertOk();
        $this->get('/services/massage-therapy')->assertOk();
        $this->get('/services/registered-dietitians')->assertOk();
        $this->get('/services/kettlebell')->assertOk();
        $this->get('/services/boxing')->assertOk();
        $this->get('/services/online-hybrid')->assertOk();
        $this->get('/services/consultations')->assertOk();
    }

    public function test_service_sub_pages(): void
    {
        $this->get('/services/personal-training/studio')->assertOk();
        $this->get('/services/personal-training/in-home')->assertOk();
        $this->get('/services/physical-therapy/studio')->assertOk();
        $this->get('/services/physical-therapy/in-home')->assertOk();
        $this->get('/services/boxing/studio')->assertOk();
        $this->get('/services/massage-therapy/studio')->assertOk();
        $this->get('/services/kettlebell/course')->assertOk();
    }

    public function test_service_404(): void
    {
        $this->get('/services/non-existent-service')->assertNotFound();
    }

    public function test_trainers_index(): void
    {
        $this->get('/trainers')->assertOk();
    }

    public function test_trainer_detail(): void
    {
        $this->get('/trainers/hai-lin')->assertOk();
        $this->get('/trainers/wei')->assertOk();
        $this->get('/trainers/kate')->assertOk();
        $this->get('/trainers/jamie')->assertOk();
        $this->get('/trainers/phillip')->assertOk();
        $this->get('/trainers/abby')->assertOk();
    }

    public function test_trainer_404(): void
    {
        $this->get('/trainers/non-existent-trainer')->assertNotFound();
    }

    public function test_blog_index(): void
    {
        $this->get('/blog')->assertOk();
    }

    public function test_blog_detail(): void
    {
        $this->get('/blog/creatine-truth')->assertOk();
    }

    public function test_blog_404(): void
    {
        $this->get('/blog/non-existent-post')->assertNotFound();
    }

    public function test_a1_black_member(): void
    {
        $this->get('/a1-black-member')->assertOk();
    }

    public function test_refer_friends(): void
    {
        $this->get('/refer-friends')->assertOk();
    }

    public function test_reviews(): void
    {
        $this->get('/reviews')->assertOk();
    }

    public function test_contact_page(): void
    {
        $this->get('/contact')->assertOk();
    }

    public function test_privacy(): void
    {
        $this->get('/privacy')->assertOk();
    }

    public function test_terms(): void
    {
        $this->get('/terms')->assertOk();
    }

    public function test_find_class(): void
    {
        $this->get('/find-class')->assertOk();
    }

    public function test_calendar(): void
    {
        $this->get('/calendar')->assertOk();
    }

    public function test_renewals(): void
    {
        $this->get('/renewals')->assertOk();
    }

    public function test_sitemap(): void
    {
        $this->get('/sitemap.xml')->assertOk()->assertHeader('Content-Type', 'application/xml');
    }

    public function test_robots(): void
    {
        $this->get('/robots.txt')->assertOk()->assertHeader('Content-Type', 'text/plain; charset=UTF-8');
    }

    // ─── Spanish Routes ───

    public function test_spanish_homepage(): void
    {
        $this->get('/es')->assertOk();
    }

    public function test_spanish_about(): void
    {
        $this->get('/es/about')->assertOk();
    }

    public function test_spanish_services(): void
    {
        $this->get('/es/services')->assertOk();
    }

    public function test_spanish_service_detail(): void
    {
        $this->get('/es/services/personal-training')->assertOk();
    }

    public function test_spanish_blog(): void
    {
        $this->get('/es/blog')->assertOk();
    }

    public function test_spanish_contact(): void
    {
        $this->get('/es/contact')->assertOk();
    }

    public function test_spanish_trainers(): void
    {
        $this->get('/es/trainers')->assertOk();
        $this->get('/es/trainers/hai-lin')->assertOk();
    }

    public function test_spanish_service_sub_page(): void
    {
        $this->get('/es/services/personal-training/studio')->assertOk();
    }

    public function test_spanish_privacy(): void
    {
        $this->get('/es/privacy')->assertOk();
    }

    public function test_spanish_terms(): void
    {
        $this->get('/es/terms')->assertOk();
    }

    // ─── Wix 301 Redirects ───

    public function test_privacy_policy_redirect(): void
    {
        $this->get('/privacy-policy')->assertRedirect('/privacy');
    }

    public function test_terms_conditions_redirect(): void
    {
        $this->get('/terms-and-conditions')->assertRedirect('/terms');
    }

    public function test_about_9_redirect(): void
    {
        $this->get('/about-9')->assertRedirect('/about');
    }

    public function test_book_online_redirect(): void
    {
        $this->get('/book-online')->assertRedirect('/services/consultations');
    }

    public function test_boxing_redirect(): void
    {
        $this->get('/boxing')->assertRedirect('/services/boxing');
    }

    public function test_testimonials_redirect(): void
    {
        $this->get('/testimonials')->assertRedirect('/reviews');
    }

    public function test_referral_redirect(): void
    {
        $this->get('/referral')->assertRedirect('/refer-friends');
    }

    public function test_loyalty_redirect(): void
    {
        $this->get('/loyalty')->assertRedirect('/a1-black-member');
    }

    public function test_what_sets_us_apart_redirect(): void
    {
        $this->get('/what-sets-us-apart')->assertRedirect('/about');
    }

    public function test_services_4_redirect(): void
    {
        $this->get('/services-4')->assertRedirect('/services');
    }

    public function test_personal_training_packages_redirect(): void
    {
        $this->get('/personal-training-packages')->assertRedirect('/services/personal-training');
    }

    public function test_personal_training_at_studio_redirect(): void
    {
        $this->get('/personal-training-at-the-studio')->assertRedirect('/services/personal-training/studio');
    }

    public function test_complementary_session_redirect(): void
    {
        $this->get('/complementary-home-gym-training-session')->assertRedirect('/services/personal-training/in-home');
    }

    public function test_pre_contact_form_redirect(): void
    {
        $this->get('/pre-contact-form')->assertRedirect('/contact');
    }

    public function test_book_consult_redirect(): void
    {
        $this->get('/book-a-consult')->assertRedirect('/services/consultations');
    }

    public function test_payment_request_redirect(): void
    {
        $this->get('/payment-request-page')->assertRedirect('/services');
    }

    public function test_pricing_plans_redirect(): void
    {
        $this->get('/pricing-plans/list')->assertRedirect('/services');
    }

    public function test_form_submitted_redirect(): void
    {
        $this->get('/form-submitted')->assertRedirect('/');
    }

    public function test_coach_redirect(): void
    {
        $this->get('/coach-wei')->assertRedirect('/trainers/wei');
        $this->get('/copy-of-coach-wei')->assertRedirect('/trainers/wei');
        $this->get('/coach-kate')->assertRedirect('/trainers/kate');
    }

    public function test_post_redirect(): void
    {
        $this->get('/post/some-blog-slug')->assertRedirect('/blog/some-blog-slug');
    }

    // ─── Admin Routes ───

    public function test_admin_dashboard_redirects_when_guest(): void
    {
        $this->get('/admin')->assertRedirect('/login');
    }

    public function test_admin_blogs_redirects_when_guest(): void
    {
        $this->get('/admin/blogs')->assertRedirect('/login');
    }

    public function test_admin_seo_redirects_when_guest(): void
    {
        $this->get('/admin/seo')->assertRedirect('/login');
    }

    // ─── 404 Routes ───

    public function test_non_existent_route_returns_404(): void
    {
        $this->get('/this-route-definitely-does-not-exist')->assertNotFound();
    }

    public function test_spanish_non_existent_route_returns_404(): void
    {
        $this->get('/es/this-route-definitely-does-not-exist')->assertNotFound();
    }
}
