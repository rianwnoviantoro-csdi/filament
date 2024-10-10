<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PublikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $category)
    {
        $allCategories  = Category::all();
        $category       = Category::where('slug', $category)->firstOrFail();
        $posts          = Post::where('category_id', $category->id)->with('author')->get();

        return view(
            'pages.publikasi.index',
            [
                'posts'         => $posts,
                'category'      => $category,
                'allCategories' => $allCategories
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
    public function show(string $category, string $slug)
    {
        $post = Post::where('slug', $slug)->with('author')->get();

        return view(
            'pages.publikasi.detail',
            [
                'post' => $post,
            ]
        );
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
