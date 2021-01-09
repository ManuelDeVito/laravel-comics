@extends('layouts.app')

@section('content')

@include('partials.jumbotron')

<section>
<div id="sezione-single-comic">
    <div class="small-contenitore">
        <div class="sezione-contenitore-single">
            <div class="contenitore-img-thumb">
                <span class="type">{{ $comic['type'] }}</span>
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                <span class="gallery">View gallery</span>
            </div>
        </div>
    </div>
</div>
</section>
<section>
<div class="sezione-text-comic">
    <div class="small-contenitore">
        <div class="contenitore-text-img">
            <div class="contenitore-left">
                <h1>{{ $comic['title'] }}</h1>
                <div class="contenitore-price">
                    <div class="price">
                        <span class="us-price">U.S. Price:</span>
                        <span class="comic-price">{{ $comic['price'] }}</span>
                    </div>
                    <div class="available">
                        <span class="comic-available">Available</span>
                    </div>
                    <div class="check">
                        <span class="check-availability">Check Availability ▾</span>
                    </div>
                </div>
                <p class="comic-description">{{ $comic['description'] }}</p>
            </div>
            <div class="contenitore-right">
                <h5>Advertisement</h5>
                <img src="{{ asset('/images/adv.jpg')}}" alt="">
            </div>
        </div>
    </div>
</div>
</section>

@include('partials.section-icon')

@endsection

@section('page-title', 'Single - Laravel-Comics')
