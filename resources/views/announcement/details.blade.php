@extends('layouts.app')
@section('hueco')

<div class="col-12 col-lg-6 col-md-6">
    <div class="card mx-3">
        <div class="card-header">
            {{$announcement->title}}
        </div>
        <div class="car-body my-3 text-center">
            <div><img src="https://picsum.photos/300" alt=""></div>
            <p class="m-2"> 
                {{$announcement->body}}
            </p>
        </div>
        <div class="card-footer d-flex justify-content-between">
            <strong>Categoria: <a
                    href="{{route('category.announcements',['name'=>$announcement->category->name,'id'=>$announcement->category->id])}}">{{$announcement->category->name}}</a></strong>
            <i>{{$announcement->created_at->format('d/m/Y')}} - {{$announcement->user->name}}</i>
        </div>
        </div>
    </div>
</div>
@endsection






