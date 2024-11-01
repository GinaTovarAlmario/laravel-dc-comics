@extends('layouts.app')

@section('page-title', 'List Albums')

@section('main-content')
    <div class="container-fluid show-bg mt-4">
        <div class="row">
            <div class="col-12 text-center text-dark fw-bold mt-3 mb-2">
                <h2> Album List:</h2>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <button class="btn bedit">
                        <a class="text-decoration-none text-dark" href="{{ route('album.create') }}">
                            Create New Album
                        </a>
                    </button>
                </div>
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
                                <th scope="row">{{ $album->title }}</th>
                                <td>
                                    <img src="{{ $album->img_url }}" alt="{{ $album->title }}" class="img-fluid"
                                        width="50">
                                </td>
                                <td>{{ $album->date_release }}</td>
                                <td>{{ $album->number_of_tracks }}</td>
                                <td>{{ $album->main_track }}</td>
                                <td>
                                    <a href="{{ route('album.show', $album->id) }}" class="btn btn-sm bshow me-2">Show</a>
                                    <a href="{{ route('album.edit', $album->id) }}" class="btn btn-sm bedit me-2">Edit</a>
                                    <form action="{{ route('album.delete', $album->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-sm bdelete text-white">
                                            Delete
                                        </button>
                                    </form>
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
