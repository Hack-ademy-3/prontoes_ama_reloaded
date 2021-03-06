@extends('layouts.app')
@section('hueco')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Nuevo anuncio
                </div>
                <div class="card-body">
                    <form method="POST" action='{{route("announcement.create")}}'>
                        @csrf

                        <div class="card-header">
                            Nuevo anuncio (Secret: {{$uniqueSecret}})
                        </div>
                        <input type="hidden" name="uniqueSecret" value="{{$uniqueSecret}}">
                        <div class="form-group">
                            <label for="categories">Categorias</label>
                            <select class="form-control" id="categories" name="category">
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}"
                                    {{old('category') == $category->id ? 'selected' : ''}}>{{$category->name}}
                                </option>
                                @endforeach
                            </select>
                            @error('category')
                            <span class="invalid-feedback" roles="alert"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="announcementeName">Titulo</label>
                            <input type="text" class="form-control" id="announcementeName" aria-describedby="emailHelp"
                                name="title" value="{{old("title")}}">
                            @error('title')
                            <small id="emailHelp" class="form-text" style="color:red;">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="announcementeBody">Anuncio</label>
                            <textarea class="form-control" name="body" id="announcementeBody" cols="30"
                                rows="10">{{old("body")}}</textarea>
                            @error('body')
                            <small id="emailHelp" class="form-text" style="color:red;">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="announcementImages" class="form-label">Imagenes</label>
                            <div class="dropzone" id="drophere"></div>
                            @error('images')
                            <small class="alert alert-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="announcementPrice">Precio</label>
                            <input type="number" step="0.01" class="form-control" id="announcementPrice"
                                aria-describedby="priceHelp" name="price" value="{{old("price")}}">
                            @error('price')
                            <small id="priceHelp" class="form-text" style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>


@endsection
