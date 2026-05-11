<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Services\SEOService;

class BlogController extends Controller
{
    public function index()
    {
        $lang = app()->getLocale();
        $meta = SEOService::forPage('blog', $lang);
        $allBlogs = load_content('blogs.json');
        $blogs = array_filter($allBlogs, fn ($b) => $b['published'] ?? false);
        usort($blogs, fn ($a, $b) => strtotime($b['createdAt'] ?? 'now') - strtotime($a['createdAt'] ?? 'now'));

        return view('public.blog.index', compact('meta', 'blogs', 'lang'));
    }

    public function show(string $slug)
    {
        $lang = app()->getLocale();
        $allBlogs = load_content('blogs.json');

        $blog = null;
        foreach ($allBlogs as $b) {
            if ($b['slug'] === $slug) {
                $blog = $b;
                break;
            }
        }

        if (! $blog) {
            abort(404);
        }

        $meta = SEOService::forPage('blog', $lang);
        $meta['title'] = ($lang === 'es' && ! empty($blog['title_es']) ? $blog['title_es'] : $blog['title']).' | A1 Training Group';

        return view('public.blog.show', compact('meta', 'blog', 'lang'));
    }
}
