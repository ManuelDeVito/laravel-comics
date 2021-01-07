@extends('layouts.app');

@section('content')

<div class="contenitore">
    <div class="contenitore-card">
        @foreach ($series as $elemento_corrente)
            <div class="card">
                <div class="">
                    <img src="{{ $elemento_corrente['thumb'] }}" alt="">
                </div>
                <div class="titolo">
                    {{ $elemento_corrente['title'] }}
                </div>
            </div>
        @endforeach
    </div>
</div>


@endsection

@section('page-title', 'Laravel-Comics - Home')
