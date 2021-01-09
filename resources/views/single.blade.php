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
<div id="sezione-text-comic">
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
<section>
    <div id="sezione-artisti">
        <div class="small-contenitore">
            <div class="contenitore-sezione-artisti">
                <div class="sezione-artisti-left margin">
                    <h2>Talent</h2>
                    <ul>
                        <li>
                            <span>Art by:</span>
                            <span>
                                @foreach ($comic['artists'] as $single_artist)
                                    <a href="#">{{ $single_artist }}</a>{{ !$loop->last ? ',' : '' }}
                                @endforeach
                            </span>
                        </li>
                        <li class="riga">
                            <span>Written by:</span>
                            <span>
                                @foreach ($comic['writers'] as $single_writer)
                                    <a href="#">{{ $single_writer }}</a>{{ !$loop->last ? ',' : '' }}
                                @endforeach
                            </span>
                        </li>
                    </ul>
                </div>
                <div class="sezione-artisti-right">
                    <h2>Specs</h2>
                    <ul>
                        <li>
                            <span>Series:</span>
                            <span>
                                <a class="name-series" href="#">
                                    {{ $comic['series']}}
                                </a>
                            </span>
                        </li>
                        <li>
                            <span>U.S. Price:</span>
                            <span>{{ $comic['price']}}</span>
                        </li>
                        <li>
                            <span>On Sale Date:</span>
                            <span>{{ DateTime::createFromFormat('Y-m-d', $comic['sale_date'])->format('M d Y') }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="sezione-contenitore-blocchi">
            <div class="small-contenitore">
                <div class="contenitore-blocchi">
                    <div class="blocchi">
                        <a href="#">
                            <span class="text-icon">Digital Comics</span>
                            <span class="icon"></span>
                        </a>
                    </div>
                    <div class="blocchi">
                        <a href="#">
                            <span class="text-icon">Shop Dc</span>
                            <span class="icon"></span>
                        </a>
                    </div>
                    <div class="blocchi">
                        <a href="#">
                            <span class="text-icon">Comic Shop Locator</span>
                            <span class="icon"></span>
                        </a>
                    </div>
                    <div class="blocchi">
                        <a href="#">
                            <span class="text-icon">Subscriptions</span>
                            <span class="icon"></span>
                        </a>
                    </div>
                </div>
             </div>
        </div>
    </div>
</section>

@include('partials.section-icon')

@endsection

@section('page-title', 'Single - Laravel-Comics')
