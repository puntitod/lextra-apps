<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::where('is_published', true)
            ->orderByDesc('publish_at')
            ->paginate(6);

        // Title halaman blog dari settings
        $title = app()->getLocale() === 'en'
            ? setting('nav_blog_en', setting('nav_blog', 'Blog'))
            : setting('nav_blog', 'Blog');

        return view(
            'frontend.pages.pages.index',
            compact('pages', 'title')
        );
    }


    public function search(Request $request)
    {
        $keyword = $request->get('keyword');
        $locale  = app()->getLocale();

        $pages = Page::where('is_published', true)
            ->where(function ($q) use ($keyword, $locale) {
                if ($locale === 'en') {
                    $q->where('title_en', 'LIKE', "%{$keyword}%")
                        ->orWhere('content_en', 'LIKE', "%{$keyword}%");
                } else {
                    $q->where('title', 'LIKE', "%{$keyword}%")
                        ->orWhere('content', 'LIKE', "%{$keyword}%");
                }
            })
            ->orderByDesc('publish_at')
            ->paginate(6);

        return response()->json([
            'html' => view(
                'frontend.pages.pages.partials.articles-list',
                compact('pages')
            )->render(),

            'pagination' => $pages
                ->links('pagination::tailwind')
                ->toHtml(),

            'empty' => view(
                'frontend.pages.pages.partials.empty'
            )->render(),
        ]);
    }

    public function show($slug)
    {
        $page = Page::where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();

        $relatedPages = Page::where('is_published', true)
            ->where('id', '!=', $page->id)
            ->latest()
            ->limit(4)
            ->get();

        // Title detail artikel (SEO title)
        $title = app()->getLocale() === 'en' && $page->title_en
            ? $page->title_en
            : $page->title;

        return view(
            'frontend.pages.pages.show',
            compact('page', 'relatedPages', 'title')
        );
    }
}
