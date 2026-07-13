<?php

namespace App\Http\Controllers;

use App\Models\Software;
use Illuminate\Http\Request;

class SoftwareController extends Controller
{
    public function index()
    {
        $softwares = Software::all();

        $title = app()->getLocale() === 'en'
            ? setting('nav_software_en', 'Software')
            : setting('nav_software', 'Software');

        return view('frontend.pages.software.index', compact('softwares', 'title'));
    }
}