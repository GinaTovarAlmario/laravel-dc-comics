@extends('layouts.app')

@section('page-title', 'Editing' . $album->name)
@section('main-content')
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-12 text-center">
                <h1>
                    Editing {{ $album->title }}
                </h1>
            </div>
            <form class="col-8 card bg-dark-subtle m-3" method="POST" action="{{ route('album.update', $album->id) }}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title"
                        value="{{ old('title', $album->title) }}">
                    @error('title')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="date_release" class="form-label">Date of Release</label>
                    <input type="text" class="form-control" id="date_release" name="date_release"
                        value="{{ old('date_release', $album->date_release) }}" placeholder="YYYY-MM-DD">
                    @error('date_release')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="img_url" class="form-label">Image Cover Url</label>
                    <input type="text" class="form-control" id="img_url" name="img_url"
                        value="{{ old('img_url', $album->img_url) }}">
                    @error('img_url')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="number_of_tracks" class="form-label">Number of Tracks</label>
                    <input type="number" class="form-control" id="number_of_tracks" name="number_of_tracks"
                        value="{{ old('number_of_trucks', $album->number_of_tracks) }}" min="1">
                    @error('number_of_trucks')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="main_track" class="form-label">Main Track</label>
                    <input type="text" class="form-control" id="main_track" name="main_track"
                        value="{{ old('main_track', $album->main_track) }}">
                    @error('main_track')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Brief Description</label>
                    <textarea class="form-control" id="description" name="description"
                        value="{{ old('description', $album->description) }}" rows="8"></textarea>
                    @error('description')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn bshow me-3">
                        Editing {{ $album->title }}
                    </button>
                    <button type="reset" class="btn bdelete me-3">
                        Reset
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
