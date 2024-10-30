@extends('layouts.app')

@section('page-title', 'List Albums')

@section('main-content')
    <div class="container-fluid show-bg mt-4">
        <div class="row">
            <div class="col-12 mt-4">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Cover Album</th>
                            <th scope="col">Date of Release</th>
                            <th scope="col">Number of tracks</th>
                            <th scope="col">Main track</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($albums as $album)
                            <tr>
                                <th scope="row">{{$album->title}}</th>
                                <td>
                                    <img src="{{$album->img_url}}" alt="{{$album->title}}" class="img-fluid" width="50">
                                </td>
                                <td>{{$album->date_release}}</td>
                                <td>{{$album->number_of_tracks}}</td>
                                <td>{{$album->main_track}}</td>
                                <td>
                                    <a href="{{ route('albums.show',$album->id) }}" class="btn btn-primary me-2">Show</a>
                                    <a href="#" class="btn btn-success me-2">Edit</a>
                                    <a href="#" class="btn btn-danger me-2">Delete</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">
                                    <h3 class="text-center">No Albums available</h3>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
