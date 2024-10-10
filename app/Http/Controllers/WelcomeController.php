<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $educationCategory   = Category::where('slug', 'edukasi')->firstOrFail();
        $edukasi    = Post::where('category_id', $educationCategory->id)->with(['author', 'category'])->limit(3)->get();
        $agendaCategory   = Category::where('slug', 'agenda')->firstOrFail();
        $agenda    = Post::where('category_id', $agendaCategory->id)->with(['author', 'category'])->limit(3)->get();
        $newsCategory   = Category::where('slug', 'berita')->firstOrFail();
        $news    = Post::where('category_id', $newsCategory->id)->with(['author', 'category'])->limit(3)->get();

        return view(
            'welcome',
            [
                'edukasi' => $edukasi,
                'agenda' => $agenda,
                'news' => $news,
            ]
        );
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
