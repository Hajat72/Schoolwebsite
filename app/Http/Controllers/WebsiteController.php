<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        return view('frontend.layouts.website');
    }
    public function getStart()
    {
        return view('frontend.course.course1');
    }
    public function aboutDetails()
    {
        return view('frontend.about.details');
    }
    public function courseDetail()
    {
        return view('frontend.course.details');
    }
    public function teacher()
    {
        return view('frontend.teacher.details');
    }
    public function event()
    {
        return view('frontend.event.event');
    }
    public function pricing()
    {
        return view('frontend.pricing.pricing');
    }
    public function contact()
    {
        return view('frontend.contact.contact');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
