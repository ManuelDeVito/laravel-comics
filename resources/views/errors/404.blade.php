@extends('layouts.app')

@section('content')

@include('partials.jumbotron')

<section>
    <div class="contenitore">
        <h1>Ops! Pagina non trovata</h1>
        <a class="load-more" href="{{ route('page-welcome') }}">
            Torna in welcome
        </a>
    </div>
</section>


@include('partials.section-icon')

@endsection

@section('page-title', 'Error - Laravel-Comics')
