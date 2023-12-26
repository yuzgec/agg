@extends('frontend.app.master')
@section('content')
<section id="home" class="relative white height-25vh mnh-250 align-items-center d-flex" 
data-bg="url(https://goldeyes.net/quadra/images/backgrounds/background_25.jpg)" 
data-was-processed="true" 
style="background-image: url(https://goldeyes.net/quadra/images/backgrounds/background_25.jpg);">
    <div class="container-md">
        <div class="t-center">
            <h5 class="fs-11 ls-4 semibold white uppercase">
                Ahmet Gökşin Güzeltepe
            </h5>
            <h1 class="mt-15 lh-md white">
               {{ $Detay->title}}
            </h1>

            <div
                class="mt-30 uppercase fs-12 bold bg-soft-dark3 radius-lg py-10 px-40 d-inline-flex width-auto lh-normal align-items-center">
                <a href="{{ route('home')}}">
                    <i class="ti-home"></i>
                </a>
                <i class="ti-angle-right fs-7 mx-15"></i>
                <a href="{{ route('home')}}" title="Anasayfa">Anasayfa</a>
                <i class="ti-angle-right fs-7 mx-15"></i>
                <a href="{{ route('service')}}" title="Hizmetlerimiz"  class="c-default">Hizmetlerimiz</a>
                <i class="ti-angle-right fs-7 mx-15"></i>

                <a href="#" class="stay c-default opacity-7">{{ $Detay->title}}</a>
            </div>

        </div>
    </div>
</section>

<section id="home" class="fullwidth py-120 bg-white">
    <div class="container-md">
        <span class="fs-20 fs-16-sm gray7 ls-0 lh-35 light">
            {!! $Detay->desc !!}
        </span>
    </div>
</section>

<section id="portfolio-grid" class="pb-60 pt-50 bt-1 b-gray1 b-solid lightbox_gallery">
    <div class="container ">
  
        <div id="portfolio-items" class="">

            <a href="https://picsum.photos/500/500?random=1" class="cbp-item art photography d-block has-overlay-hover">
                <div class="work-image">
                    <img src="images/portfolio/alpha_loading.svg" data-cbp-src="https://picsum.photos/500/500?random=1" 
                    width="500" height="500" alt="{{ $Detay->title}}">
                    <div class="overlay-hover bg-soft-dark4 d-flex align-items-center justify-content-center scale-hover-container slow">
                        <i class="ti-plus fs-20 white scale-hover"></i>
                    </div>
                </div>
            </a>
          
        </div>
    </div>
</section>
@endsection

@section('customJS')
<script>
    (function($, window, document, undefined) {
        'use strict';
        $('#portfolio-items').cubeportfolio({
            mediaQueries: [{
                width: 992,
                cols: 3,
            }, {
                width: 640,
                cols: 2,
            }, {
                width: 480,
                cols: 1,
            }],
            filters: '.filter-tags',
            defaultFilter: '*',
            layoutMode: 'masonry',
            gridAdjustment: 'responsive',
            gapHorizontal: 10,
            gapVertical: 10,
            caption: 'none',
            animationType: 'quicksand',
            displayType: 'none',
            displayTypeSpeed: 0,
        });


    })(jQuery, window, document);
</script>
    
@endsection