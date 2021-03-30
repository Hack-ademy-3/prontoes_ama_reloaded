@extends('layouts.app')

@section('hueco')

@include('layouts._hero')

@if(session('announcement.create.success'))
    <div class="alert alert-success">{{session('announcement.create.success')}}</div>
@endif
<div class="container d-flex ">

    @foreach($announcements as $announcement)
        @include ('announcement._announcement')
    @endforeach

</div>
@include('layouts._cardscategories')

@include('layouts._faq')

@include('layouts._contactus')

@endsection
