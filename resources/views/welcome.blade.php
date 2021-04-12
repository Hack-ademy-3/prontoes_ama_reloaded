@extends('layouts.app')

@section('hueco')




<div class="container">
    <div class="row">
        <div class="col-12"><h2 class="display-6 text-center my-4">Últimos anuncios publicados</h2></div>
    </div>
        @include ('announcement._announcements')

        @include('layouts._cardscategories')

        @include('layouts._faq')
        <H1>HOLAAA AAJAJ XD</H1>

        @include('layouts._contactus')
</div>
@endsection
