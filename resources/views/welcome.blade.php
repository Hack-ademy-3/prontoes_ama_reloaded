@extends('layouts.app')

@section('hueco')
 
 @include('layouts._hero')

 <div class="container">
    <div class="row col-6"></div>
</div>

{{--  @include('layouts._aboutus') --}}

 @include('layouts._cardscategories')
  
 @include('layouts._faq')
  
 @include('layouts._contactus')

@endsection