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
        // vado a fare la validazione per i dati inseriti
        $request->validate([
            'title'=>'required|string|min:3|max:255',
            'date_release'=>'required|date',
            'img_url'=>'required|url',
            'number_of_tracks'=>'required|integer|min:1',
            'main_track'=>'required|string|min:2|max:255',
            'description'=>'required|string|min:2|max:1000',

        ]);

        $albumData = $request->all();

        $newAlbum = new Album();
        $newAlbum->title = $albumData['title'];
        $newAlbum->date_release = $albumData['date_release'];
        $newAlbum->img_url = $albumData['img_url'];
        $newAlbum->number_of_tracks = $albumData['number_of_tracks'];
        $newAlbum->main_track = $albumData['main_track'];
        $newAlbum->description = $albumData['description'];

        $newAlbum->save();
        return redirect()->route('album.show',['id' => $newAlbum->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $album = Album::findOrFail($id);
        return view('albums.show', compact('album'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $album = Album::findOrFail($id);
        return view("albums.edit", compact("album"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $formData = $request->all();
        $album = Album::findOrFail($id);

        $album->title = $formData["title"];
        $album->date_release = $formData["date_release"];
        $album->img_url = $formData["img_url"];
        $album->number_of_tracks = $formData["number_of_tracks"];
        $album->main_track = $formData["main_track"];
        $album->description = $formData["description"];

        $album->update();
        return redirect()->route("album.show", [ "id" => $album->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $album = Album::findOrFail($id);
        $album->delete();
        return redirect()->route('album.index');
    }
}
