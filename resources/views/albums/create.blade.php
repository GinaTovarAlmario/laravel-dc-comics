@extends('layouts.app')

@section('page-title', 'Create New Album')
@section('main-content')
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-12 text-center">
                <h1>
                    Creating a New Album
                </h1>
            </div>
            <form class="col-8 card bg-dark-subtle m-3" method="POST" action="{{route('albums.store')}}">
                <div class="mb-3">
                    <label for="title" class="form-label">Email address</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="mb-3">
                    <label for="date_release" class="form-label">Title</label>
                    <input type="text" class="form-control" id="date_release" name="date_release">
                </div>
                <div class="mb-3">
                    <label for="date_release" class="form-label">Date of Release</label>
                    <input type="text" class="form-control" id="date_release" name="date_release">
                </div>
                <div class="mb-3">
                    <label for="img_url" class="form-label">Link Image Cover</label>
                    <input type="text" class="form-control" id="img_url" name="img_url">
                </div>
                <div class="mb-3">
                    <label for="number_of_tracks" class="form-label">Number of Tracks</label>
                    <input type="number" class="form-control" id="number_of_tracks" name="number_of_tracks" min="1">
                </div>
                <div class="mb-3">
                    <label for="main_track" class="form-label">Main Track</label>
                    <input type="text" class="form-control" id="main_track" name="main_track">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Brief Description</label>
                    <textarea class="form-control" id="description" name="description" rows="8"></textarea>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn bshow me-3">
                        Create New Album
                    </button>
                    <button type="reset" class="btn bdelete me-3">
                        Reset
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
