@extends('layouts.app')

@section('page-title', 'List Albums')

@section('main-content')
    <div class="card-body container">
        <div class="row">
            <div class="col">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Date of Release</th>
                            <th scope="col">Number of tracks</th>
                            <th scope="col">Main track</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($albums as $album)
                            <tr>
                                <th scope="row">{{$album->title}}</th>
                                <td>{{$album->date_release}}</td>
                                <td>{{$album->number_of_tracks}}</td>
                                <td>{{$album->main_track}}</td>
                            </tr>
                        @empty

                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
