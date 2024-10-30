@extends('layouts.app')

@section('page-title', $album["title"])
@section('main-content')
    <div class="container-fluid show-bg">
        <div class="row">
            <div class="col mt-5">
                <div class="card box mb-4">
                    <img src="{{ $album->img_url }}" class="card-img-top box-img" alt="{{ $album->title }}">
                    <div class="card-body">
                        <h5 class="card-title">
                            Title: {{ $album->title }}
                        </h5>
                        <p class="card-text">
                            <span class="fw-bold text-black">Date of release: </span> {{ $album->date_release }}

                        </p>
                        <p class="card-text">
                            <span class="fw-bold text-black">Number of Tracks: </span> {{ $album->number_of_tracks}}

                        </p>
                        <p class="card-text">
                            <span class="fw-bold text-black">Main Track: </span> {{ $album->main_track}}

                        </p>
                        <p class="card-text">
                            <span class="fw-bold text-black">Description: </span> {{ $album->description }}

                        </p>
                        <a href="{{ route('albums.index') }}" class="btn btn-primary">Go Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
