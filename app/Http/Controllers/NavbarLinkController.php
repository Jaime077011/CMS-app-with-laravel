<?php

namespace App\Http\Controllers;

use App\Models\NavbarLink;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;

class NavbarLinkController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        $navbarlinks = NavbarLink::orderBy('id','desc')->paginate(10);
   
        return view('website.auth.navbar.index', compact('navbarlinks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('website.auth.navbar.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'link' => 'required',

        ]);
 
        $insert = [
            'title' => $request->title,
            'link' => $request->link,
   
        ];
   
        NavbarLink::insertGetId($insert);
    
        return Redirect::to('navbar')
       ->with('success','Greate! posts created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}