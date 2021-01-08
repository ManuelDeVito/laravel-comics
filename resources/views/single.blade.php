@extends('layouts.app')

@section('content')

@include('partials.jumbotron')

<div class="">
    <div class="contenitore">
        <h1>{{ $comic['title'] }}</h1>
    </div>
</div>

@include('partials.section-icon')

@endsection

@section('page-title', 'Single - Laravel-Comics')
