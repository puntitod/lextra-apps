<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        $careers = Career::published()
            ->orderBy('sort_order')
            ->latest()
            ->paginate(9);

        $title = app()->getLocale() === 'en'
            ? setting('nav_career_en', 'Careers')
            : setting('nav_career', 'Karir');

        return view('frontend.pages.careers.index', compact('careers', 'title'));
    }

    public function search(Request $request)
    {
        $keyword = $request->get('keyword');
        $locale = app()->getLocale();

        $careers = Career::published()
            ->when($keyword, function ($query) use ($keyword, $locale) {
                $query->where(function ($q) use ($keyword, $locale) {
                    if ($locale === 'en') {
                        $q->where('title_en', 'LIKE', "%{$keyword}%")
                            ->orWhere('description_en', 'LIKE', "%{$keyword}%")
                            ->orWhere('title', 'LIKE', "%{$keyword}%");
                    } else {
                        $q->where('title', 'LIKE', "%{$keyword}%")
                            ->orWhere('description', 'LIKE', "%{$keyword}%")
                            ->orWhere('title_en', 'LIKE', "%{$keyword}%");
                    }
                });
            })
            ->orderBy('sort_order')
            ->paginate(9);

        return response()->json([
            'html' => view('frontend.pages.careers.partials.careers-list', compact('careers'))->render(),
            'pagination' => $careers->links('pagination::tailwind')->toHtml(),
            'empty' => view('frontend.pages.careers.partials.empty')->render(),
        ]);
    }

    public function show(string $slug)
    {
        $career = Career::published()
            ->where('slug', $slug)
            ->firstOrFail();

        $relatedCareers = Career::published()
            ->where('id', '!=', $career->id)
            ->orderBy('sort_order')
            ->latest()
            ->limit(3)
            ->get();

        $title = $career->localized_title;

        return view('frontend.pages.careers.show', compact('career', 'relatedCareers', 'title'));
    }
}
