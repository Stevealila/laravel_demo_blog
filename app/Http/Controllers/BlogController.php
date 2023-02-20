<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $img = $request->file;
        $img_name = $img->getClientOriginalName();

        $blog = new Blog();

        $blog->title = $request->title;
        $blog->body = $request->body;
        $blog->image = $img_name;

        Storage::disk('public')->put('images/'.$img_name, file_get_contents($img));
        $blog->save();

        return redirect('/');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $img = $request->file;
        $img_name = $img->getClientOriginalName();

        $blog = Blog::findOrFail($id);

        $blog->title = $request->title;
        $blog->body = $request->body;
        $blog->image = $img_name;

        Storage::disk('public')->put('images/'.$img_name, file_get_contents($img));
        $blog->update();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect('/');
    }
}
