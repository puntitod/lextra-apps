<?php

namespace App\Http\Controllers;

class TermConditionController extends Controller
{
    public function index()
    {
        $siteName = strip_tags(setting('site_name', 'Website'));

        $title = strip_tags(setting('terms_title', 'Terms & Conditions'));
        $pageTitle = $title . ' - ' . $siteName;

        // ⬇️ JANGAN strip_tags untuk rich text
        $termsText = setting(
            'terms-conditions',
            '<p>Belum ada ketentuan.</p>'
        );

        return view('frontend.pages.terms-conditions.index', compact(
            'pageTitle',
            'title',
            'termsText'
        ));
    }
}
