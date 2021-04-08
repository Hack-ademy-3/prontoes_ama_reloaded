
@extends('layouts.app')
@section('hueco')
{{-- <div class='container'> --}}
@if($announcement)
<div class='row my-4'>
    <div class='col-12 '>
        <div class="card">
            <div class="card-header">
                Anuncio #{{$announcement->id}}
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <h3>Usuario</h3>
                    </div>
                    <div class="col-md-9">
                        #{{$announcement->user->id}}
                        {{$announcement->user->name}}
                        {{$announcement->user->email}}
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <h3>Titulo</h3>
                    </div>
                    <div class="col-md-9">
                        {{$announcement->title}}
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <h3>Descripción</h3>
                    </div>
                    <div class="col-md-9">
                        {{$announcement->body}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row md-2">
@foreach ($announcement->images as $image)
  <div class="col-md-4">
    <img src="{{$image->getUrl(300,150)}}" alt="" class="img-fluid">
  </div>
    <div class="col-md-8">
      Adult : {{ $image->adult }} <br>
      spoof : {{ $image->spoof }} <br>
      medical : {{ $image->medical }} <br>
      violence : {{ $image->violence }} <br>
      racy : {{ $image->racy }} <br>

      <b>Labels</b><br>
      <ul>
          @if ($image-> labels)
            @foreach ($image->labels as $label)
            <li>{{ $label }}</li>
            @endforeach
          @endif  
      </ul>
     {{--  {{ $image->id }} <br>
      {{ $image->file }} <br>
      {{ Storage::url($image->file) }} <br> --}}
    </div>
  @endforeach
</div>
<div class="row ">
    <div class="col-md-6">
    <form action="{{route('revisor.announcement.reject',['id'=>$announcement->id])}}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">Rechazar</button>
    </form>
    </div>

    <div class="col-md-6 text-right">
        <form action="{{route('revisor.announcement.accept',['id'=>$announcement->id])}}" method="POST">
            @csrf
            <button type="submit" class="btn btn-success">Aceptar</button>
        </form>
    </div>
</div>
@else
<div class="row">
    <div class="col-12">
        <h3>No hay ningun anuncio para revisar.</h3>
    </div>
</div>
@endif
{{-- </div> --}}
@endsection