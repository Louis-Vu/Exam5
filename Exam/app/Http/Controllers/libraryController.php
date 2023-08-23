<?php

namespace App\Http\Controllers;

use App\Models\library;
use Illuminate\Http\Request;

class libraryController extends Controller
{
    public function index(Request $request)
{
    $query = library::query();

    if (isset($request->title) && ($request->title != null)) {
        $query->where('title', 'like',  '%' . $request->title . '%');
    }
    $Books = $query->get();
    return view('welcome', compact('Books'));
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
    public function show(library $library)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(library $library)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, library $library)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(library $library)
    {
        //
    }
}
