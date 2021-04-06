@extends('layouts.app')

@section('hueco')


@include('layouts._hero')

<div class="container">
    <div class="row">
        <div class="col-12"><h2 class="display-6">Últimos anuncios</h2></div>
    </div>
        @include ('announcement._announcements')

        @include('layouts._cardscategories')

        @include('layouts._faq')

        @include('layouts._contactus')
</div>
@endsection
