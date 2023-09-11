@extends('layouts.main')

@section('page-title', 'Homepage')

@section('main-content')

<h1>
    Homepage
</h1>
<div class ="container">
    @dd($comics)
    {{ $comics }}


</div>

{{-- <img src="{{ Vite::asset('resources/img/img.jpg') }}"  alt=""> --}}
@endsection
