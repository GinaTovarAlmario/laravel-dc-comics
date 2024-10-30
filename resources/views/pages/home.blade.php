@extends('layouts.app')

@section('page-title', 'Homepage')
@section('main-content')
    <section class="home">
        <div class="row">
            <div class="col-12">
                <img src="{{ Vite::asset('resources/img/bts-jumbo.jpg') }}" class="img-fluid w-100" alt="jumbo">
            </div>
        </div>
    </section>
@endsection
