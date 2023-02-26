<?php

namespace App\Http\Controllers;

use App\Models\NavbarLink;
use App\Models\Page;
use Illuminate\Http\Request;

class SinglePageController extends Controller
{
    public function getPage($Slug)
    {
        $page = Page::where('slug', $Slug)->get()->first();
        $navbarlinks = NavbarLink::orderBy('id')->get();

        // dd($page);
//theme.home
        return view( 'theme.' . $page->template, compact('page', 'navbarlinks'));
    }
}
