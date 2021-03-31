@extends('layouts.app')

@section('hueco')


@include('layouts._hero')

<div class="container">
    <div class="row my-3">

            @foreach($announcements as $announcement)
            
                @include ('announcement._announcement')
            @endforeach

        </div>
        @include('layouts._cardscategories')

        @include('layouts._faq')

        @include('layouts._contactus')
</div>
@endsection
