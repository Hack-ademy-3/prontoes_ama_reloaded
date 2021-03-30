@extends('layouts.app')

@section('hueco')

@include('layouts._hero')

@if(session('announcement.create.success'))
    <div class="alert alert-success">{{session('announcement.create.success')}}</div>
@endif
<div class="container d-flex ">

    @foreach($announcements as $announcement)
    <div class="row my-3">
        <div class="col-lg-12 col-md-6">
            <div class="card mx-3">
                <div class="card-header">
                    {{$announcement->title}}
                </div>
                <div class="car-body ">
                   <div><img class='img-fluid' src="https://picsum.photos/300" alt=""></div> 
                    <p>
                        {{$announcement->body}}
                    </p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <strong>Categoria: <a href="#">{{$announcement->category->name}}</a></strong>
                    <i>{{$announcement->created_at->format('d/m/Y')}} - {{$announcement->user->name}}</i>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>
@include('layouts._cardscategories')

@include('layouts._faq')

@include('layouts._contactus')

@endsection
