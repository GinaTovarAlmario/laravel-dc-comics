@extends('layouts.app')

@section('page-title', 'List Albums')

@section('main-content')
    <div class="card-body container mt-4">
        <div class="row">
            <div class="col">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Cover Album</th>
                            <th scope="col">Date of Release</th>
                            <th scope="col">Number of tracks</th>
                            <th scope="col">Main track</th>
                            <th></th>
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
                                    <a href="{{ route('albums.show',$album->id) }}" class="btn btn-primary">Show</a>
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
