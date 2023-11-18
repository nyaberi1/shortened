<?php

namespace App\Http\Controllers;

use App\Models\ShortendUrl;
use Illuminate\Http\Request;

class ShortendUrlController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return view('shortend_urls.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('shortend_urls.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'url' => 'required|url',
        ]);

        $shortendurl = ShortendUrl::create($data);
        $shortendurl->update([
            'slug' => base_convert(strval($shortendurl->id), 10, 36),
        ]);

        return redirect()->route('shortend.edit', ['slug' => $shortendurl->slug]);
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $shortend = ShortendUrl::where('slug', $slug)->firstOrFail();

        return redirect($shortend->url);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $shortend = ShortendUrl::where('slug', $slug)->firstOrFail();

        return view('shortend_urls.edit', ['record' => $shortend]);
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
