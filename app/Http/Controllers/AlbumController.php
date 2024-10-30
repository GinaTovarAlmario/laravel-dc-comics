<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums = Album::all();
        return view('albums.index', compact('albums') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //vado a restituire un form vuoto che devo abndare a riempire
        return view('albums.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $albumData = $request->all();

        $newAlbum = new Album();
        $newAlbum->title = $albumData['title'];
        $newAlbum->date_release = $albumData['date_release'];
        $newAlbum->img_url = $albumData['img_url'];
        $newAlbum->number_of_tracks = $albumData['number_of_tracks'];
        $newAlbum->main_track = $albumData['main_track'];
        $newAlbum->description = $albumData['description'];


        $newAlbum->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Album $album)
    {
        return view('albums.show', compact('album'));
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
