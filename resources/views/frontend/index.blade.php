@extends('frontend.app.master')
@section('content')
{{-- <section id="home" class="mnh-600 mnh-none-sm bg-white relative">
    <div class="container relative zi-5">
         <div class="row align-items-center">
              <div class="col-lg-8 py-90 pt-120-sm pb-10-sm t-left t-center-sm">
                   <div class="bg-soft-white3 px-15 py-10 radius d-inline-flex animated" data-animation="fadeInDown" data-animation-delay="500">
                        <h5 class="dark medium fs-17">
                            Ahmet Gökşin Güzeltepe
                        </h5>
                   </div>
                   <h2 class="mt-30 mt-20-sm fs--lg lh-sm dark medium animated" data-animation="fadeInDown" data-animation-delay="700">
                       
                   </h2>
                   <p class="mt-40 mt-25-sm fs-20 lh-30 dark animated" data-animation="fadeInDown" data-animation-delay="900">

                </p>
                   <div class="mt-50 animated" data-animation="fadeInDown" data-animation-delay="1100">
                        <a href="{{ route('contactus')}}" class="lg-btn bg-white b-2 b-white bg-transparent-hover gray8 white-hover radius-xl uppercase semibold slow-sm">
                            İletişime Geç
                        </a>
                   </div>
              </div>
              <div class="col-lg-4 d-flex align-items-center justify-content-center unselectable pointer-events-none animated" data-animation="fadeInRight" data-animation-delay="1500">
                   <img src="/goksin.png" class="d-block   mnh-700 mnh-none-sm mxw-300-sm relative ">
              </div>
         </div>
    </div>
</section> --}}

<section id="home" class="relative white height-100vh mnh-600 align-items-center d-flex">
    <div class="bg-slider has-details custom-slider controls-mouseover arrows-long" data-slick='{"speed": 900, "arrows": true, "autoplaySpeed": 5000, "autoplay": true }'>

        <div class="slide" data-background="/banner-goksin.jpg" data-bg-mobile="/banner-goksin.jpg">
            {{-- <div class="d-flex align-items-lg-center align-items-start mt-90-sm justify-content-lg-start justify-content-center">
                <div class="container t-left t-center-sm mb-20 mb-0-sm">
                    <h5 class="fs-20 colored animate" data-animation="fadeInDown" data-animation-delay="100">
                        Welcome to Medusa
                    </h5>
                    <h1 class="mt-15 fs-45 fs-30-sm lh-sm semibold white animate" data-animation="fadeInDown" data-animation-delay="300">
                        Connect With Your
                    </h1>
                    <h1 class="fs-50 fs-30-sm lh-sm semibold white animate" data-animation="fadeInDown" data-animation-delay="400">
                        Customers, Not Just Your
                    </h1>
                    <h1 class="fs-50 fs-30-sm lh-sm semibold white animate" data-animation="fadeInDown" data-animation-delay="500">
                        Business.
                    </h1>
                    <p class="fs-20 fs-17-sm lh-30 white light mt-20 mt-10-sm mxw-700 d-inline-flex animate" data-animation="fadeInDown" data-animation-delay="700">
                        Growing bleeding edge to, consequently, be <br class="visible-lg">
                        transparent. Creating user stories and demographics. <br class="visible-lg">
                        Good Design Matters
                    </p>
                    <div class="mt-30 mt-20-sm animate" data-animation="fadeInDown" data-animation-delay="900">
                        <a href="#about" class="lg-btn px-40-sm py-15-sm white dark-hover bg-transparent bg-white-hover b-1 b-white fs-18 fs-16-sm slow">
                            Get started
                        </a>
                    </div>

                  
                </div>
              
            </div> --}}
            
        </div>
        
    </div>
</section> 

<div id="element-template-05" class="py-20bt-1 b-gray1 b-solid">
    <div id="image-slider-template-05" class="mt-10 container px-5">
        <div id="filtered-slider" class="block-img dots-circle dots-close c-grab" 
            data-slick='{"dots": false, "touchThreshold": 150, "speed":600, "arrows": false, "fade": false, "draggable":true, "slidesToShow": 4, "slidesToScroll": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2, "slidesToScroll": 2}},{"breakpoint": 768,"settings":{"slidesToShow": 1,"slidesToScroll": 1}}]}' >
            @foreach ($Service->where('category', 3)->take('8') as $item)
                <div class="slide px-10 " >
                    <img src="/ref.jpg" alt="{{ $item->title}} - Ahmet Gökşin Güzeltepe" style="border: 1px #ccc solid;border-radius:5px">
                </div>
            @endforeach
        
        </div>
    </div>
</div>


    <section id="about" class="pb-50 pb-20-sm t-center-sm mt-50">

        <div class="container">
    		<div class="row">

    			<div class="col-md-5 col-12 pr-50 pr-15-sm">
    				<h5 class="fs-17 colored uppercase">Hakkımızda</h5>
    				<h1 class="bold mt-10 fs-40 fs-30-sm lh-50 lh-40-sm dark3">
    					A. Gökşin Güzeltepe <br class="visible-xl hidden-lg">
    				</h1>
    				<p class="mt-20 fs-20 gray7 lh-35 lh-30-sm">
                        2009 yılından bu yana grafik tasarım alanında hizmet veren Ahmet Gökşin Güzeltepe, sektördeki derin tecrübesini ve yenilikçi 
                        bakış açısını her projeye yansıtmaktadır. 
    				</p>

    				<p class="mt-15 fs-20 gray7 lh-35 lh-30-sm">
                        Matbaa ile başlayan profesyonel yolculuğu, tanıtım ofisleri, kreatif reklam ajansları ve kurumsal şirketlerdeki çalışmalarla 
                        devam etmiş, şimdilerde ise freelance grafiker olarak faaliyet göstermektedir. Bu süreçte, sektörün farklı alanlarında
                         pek çok projeye imza atarak, çeşitli deneyimler edinmiştir.
    				</p>
    				
    			</div>

    			<div class="col-md-7 col-12">
    				<div class="row" data-masonry='{"percentPosition":true}'>
                        @foreach ($Service->where('category', 1) as $item)
                            <div class="col-xl-6 col-lg-12 col-md-6 col-12 pt-30  px-15-sm c-default">
                                <div class="bg-colored bg-soft-white5-hover radius-lg px-15 px-30-sm py-15">
                                    <h5 class="text-white fs-17">
                                        {{ $item->title}}
                                    </h5>
                                    <p class="mt-20 fs-18 text-white lh-30">
                                        {{ $item->short}}    			
                                    </p>
                                </div>
                            </div>
                        @endforeach
    				</div>
    			</div>

    		</div>
    	</div>
    </section>


    <section id="element-template-06" class="py-120 bt-1 b-gray1 b-solid">
   
        <div id="image-slider-template-06" class="mt-70 container-fluid o-hidden-x px-5">
   
            <div id="image-slider-06" class="custom-slider fw-slider block-img dots-circle c-grab t-center" 
                data-slick='{"variableWidth": true, "centerMode": true, "dots": true, "speed":600, "arrows": false, "fade": false, "draggable":true, "slidesToShow": 1, "slidesToScroll": 1, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}},{"breakpoint": 768,"settings":{"slidesToShow": 1}}]}' >
                @foreach ($Service->where('category', 2) as $item)
             
                <div class="px-10 relative">
                    <div class="bs-lg">
                        <!-- Overlay text -->
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <h3 class="fs-18 lh-30 white">
                                {{ $item->title}}
                            </h3>
                        </div>
                        <img src="{{ $item->getFirstMediaUrl('page', 'thumb') }}" 
                        alt="{{ $item->title}} - Gökşin Güzeltepe"  class="img-fluid" style="max-height:500px"/>
                    </div>
                </div>
                @endforeach
                
            </div>
           
        </div>
        <!-- End template -->
    </section>

   

@endsection
@section('customJS')


<script>

    $(document).ready(function(){
        "use strict";
        /* Options for filtered slider. You must copy this codes to your website if you use it. */
        $('#filtered-slider').on('init', function(event, slick){
            $(".filter-button").each(function(){
                var filterName = $('.filter-button').attr('data-category');
                $("#filtered-slider").find('.' + filterName).parents(".slick-slide").addClass(filterName);
            });
        });
        $('#filtered-slider').slick();
        var filtered = false;
        $('.filter-button').on('click', function(){
            var filterClass = $(this).attr('data-category'),
                text = $(this).attr('data-filter-text'), showAllText = $(this).attr("data-show-all-text");
            if (filtered === false) {
                $('#filtered-slider').slick('slickFilter', '.' + filterClass);
                $(this).addClass("active").find(".button-text").html(showAllText);
                filtered = true;
            } else {
                $('#filtered-slider').slick('slickUnfilter');
                $(this).removeClass("active").find(".button-text").html(text);
                filtered = false;
            }
        });
    });

</script>

@endsection