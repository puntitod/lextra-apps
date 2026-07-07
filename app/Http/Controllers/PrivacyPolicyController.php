<?php

namespace App\Http\Controllers;

class PrivacyPolicyController extends Controller
{
    public function index()
    {
        $siteName = strip_tags(setting('site_name', 'Website'));

        $title = strip_tags(
            setting('privacy-policy_title', 'Kebijakan Privasi')
        );

        $pageTitle = $title . ' - ' . $siteName;

        // ⬇️ JANGAN STRIP TAGS
        $privacyText = setting(
            'privacy-policy',
            '<p>Belum ada kebijakan privasi.</p>'
        );

        return view('frontend.pages.privacy-policy.index', compact(
            'pageTitle',
            'title',
            'privacyText'
        ));
    }
}
