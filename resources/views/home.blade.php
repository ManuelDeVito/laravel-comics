@extends('layouts.app')

@section('content')

@include('partials.jumbotron')

<div class="contenitore-sezione">
    <div class="contenitore">
        <div class="sezione-titolo">
            <h2>Current Series</h2>
        </div>
        <div class="contenitore-card">
            @foreach ($series as $key => $elemento_corrente)
                <div class="card">
                    <a href="{{ route('single-comic', ['id' => $key]) }}">
                        <div class="img-card">
                            <img src="{{ $elemento_corrente['thumb'] }}"
                            alt="{{ $elemento_corrente['series'] }}">
                        </div>
                        <div class="titolo">
                            <span>{{ $elemento_corrente['series'] }}</span>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="contenitore-load-more">
            <div class="load-more">
                <h2>Load More</h2>
            </div>
        </div>
    </div>
</div>

@include('partials.section-icon')

@endsection

@section('page-title', 'Home - Laravel-Comics')
