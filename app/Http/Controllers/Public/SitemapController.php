<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;

class SitemapController extends Controller
{
    public function index()
    {
        $lang = app()->getLocale();
        $services = load_content('services.json');
        $trainers = load_content('trainers.json');

        $staticPages = [
            '', 'about', 'trainers', 'services', 'blog',
            'a1-black-member', 'refer-friends', 'reviews', 'contact',
            'privacy', 'terms', 'find-class', 'calendar', 'renewals',
        ];

        $alternate = $lang === 'es' ? '' : '/es';

        return response()->view('public.sitemap', compact('staticPages', 'services', 'trainers', 'alternate', 'lang'))
            ->header('Content-Type', 'application/xml');
    }

    public function robots()
    {
        $sitemapUrl = url('/sitemap.xml');

        return response("User-agent: *\nAllow: /\n\nSitemap: {$sitemapUrl}\n")
            ->header('Content-Type', 'text/plain');
    }
}
