@extends('frontend.app.master')
@section('customCSS')
<style>
    /* Image animation */
    .cbp-item .work-image{-webkit-transform:scale(1);transform:scale(1); -webkit-transition:transform 0.5s;transition:transform 0.5s;}
    .cbp-item:hover .work-image{-webkit-transform:scale(1.03);transform:scale(1.03);}
    /* Details animation */
    .cbp-item .details{opacity:0;-webkit-transform:scale(1.04) perspective(1000px);transform:scale(1.04) perspective(1000px);-webkit-transition:all 0.5s;transition:all 0.5s;}
    .cbp-item:hover .details{opacity:1;-webkit-transform:scale(1) perspective(1000px);transform:scale(1) perspective(1000px);}
    /* Texts and line animations */
    .cbp-item .details .title, .cbp-item .details .tag{opacity:0;-webkit-transform:translateY(15px);transform:translateY(15px);-webkit-transition:all 0.5s;transition:all 0.5s;}
    .cbp-item:hover .details .title, .cbp-item:hover .details .tag{opacity:1;-webkit-transform:translateY(0px);transform:translateY(0px);}
    .cbp-item:hover .details .tag{-webkit-transition-delay:0.1s;transition-delay:0.1s;}
    .cbp-item .details .line{-webkit-transition:all 0.3s;transition:all 0.3s;}
    .cbp-item:hover .details .line{width:70px!important;}

    /* Dots Navigation */
    .dots-circle .cbp-nav-pagination{bottom:-60px;}
    .dots-circle .cbp-nav-pagination .cbp-nav-pagination-item{width:25px;height:25px;background-color:transparent;border-radius:50%;display:inline-flex;display:-ms-inline-flexbox;justify-content:center;-ms-flex-pack:center;align-items:center;-ms-flex-align:center;}
    .dots-circle .cbp-nav-pagination .cbp-nav-pagination-item:before{width:5px;height:5px;background-color:#222;box-shadow:inset 0 0 0 0.5px transparent;-webkit-transform:scale(1);transform:scale(1);content:'';display: block;border-radius:inherit;-webkit-transition:all 0.5s;transition:all 0.5s;}
    .dots-circle .cbp-nav-pagination .cbp-nav-pagination-item.cbp-nav-pagination-active:before{box-shadow:inset 0 0 0 0.5px #222;background-color:transparent!important;-webkit-transform:scale(3);transform:scale(3);}

    /* Dots Navigation */
    .cbp-nav-controls{position:absolute;left:0;top:0;z-index:100;width:100%;height:100%;pointer-events:none;}
    .cbp-nav-controls div{font-size:20px;color:white;border-radius:0;background:rgba(24,24,24,0.3);position:absolute;top:50%;width:40px;height:90px;left:0;opacity:0;z-index:5;cursor:pointer;pointer-events:all;display:inline-flex;display:-ms-inline-flexbox;justify-content:center;-ms-flex-pack:center;align-items:center;-ms-flex-align:center;-webkit-transform:translateY(-50%);transform:translateY(-50%);-webkit-transition:all 0.5s;-moz-transition:all 0.5s;transition:all 0.5s;}
    .cbp:hover .cbp-nav-controls div{opacity:.55;}
    .cbp-nav-controls div.cbp-nav-next{left:auto;right:1px;}
    .cbp-nav-controls div:before,.cbp-nav-controls div:after{content:"\e64a";display:inline-flex;display:-ms-inline-flexbox;z-index:2;font-family:'themify';color:inherit;-webkit-transition:all 0.5s;-moz-transition:all 0.5s;transition:all 0.5s;}
    .cbp-nav-controls div:after{display:none;content:'';z-index:0;}
    .cbp:hover .cbp-nav-controls div:hover{opacity:1;}
    .cbp-nav-controls div.cbp-nav-next:before{content:"\e649";}
</style>
@endsection
@section('content')
<div id="home">
    <div id="rev_slider_1084_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="web-light-hero" data-source="gallery" 
        style="margin:0px auto;background-image:url('/slider/banner-back.jpg');padding:0px;margin-top:0px;margin-bottom:0px;">
        <div id="rev_slider_1084_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
        <ul>    
        <li data-index="rs-3074" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  
            data-easein="default" data-easeout="default" data-masterspeed="1500"  data-rotate="0"  data-saveperformance="off" >
            {{-- 
                <div class="tp-caption   tp-resizeme rs-parallaxlevel-6"
                    id="slide-3074-layer-1"
                    data-x="['right','right','center','center']" data-hoffset="['-254','-453','70','60']"
                    data-y="['middle','middle','middle','bottom']" data-voffset="['30','50','211','25']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-type="image"
                    data-responsive_offset="on"
                    data-frames='[{"from":"x:right;","speed":1500,"to":"o:1;","delay":2500,"ease":"Power3.easeOut"},
                    {"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    style="z-index: 5;text-transform:none;border-width:0px;">
                    <img src="images/rs/img/macbookpro.png" alt="" data-ww="['1000px','1000px','500px','350px']" data-hh="['600px','600px','300px','210px']"
                    width="1000" height="600" data-no-retina /> 

                </div> 
            --}}

            <div class="tp-caption   tp-resizeme rs-parallaxlevel-5"
                 id="slide-3074-layer-12"
                 data-x="['left','left','left','left']" data-hoffset="['543','543','110','155']"
                 data-y="['top','top','top','top']" data-voffset="['17','17','500','474']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-type="image"
                data-responsive_offset="on"
                data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":3950,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="z-index: 7;text-transform:none;border-width:0px;">
            </div>

            <div class="tp-caption   tp-resizeme rs-parallaxlevel-3"
                 id="slide-3074-layer-13"
                 data-x="['left','left','left','left']" data-hoffset="['294','294','116','97']"
                 data-y="['top','top','top','top']" data-voffset="['532','532','745','641']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-type="image"
                data-responsive_offset="on"
                data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":3950,"ease":"Power2.easeInOut"},
                {"delay":"false","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="z-index: 10;text-transform:none;border-width:0px;">
                <div class="rs-looped rs-slideloop"  data-easing="Linear.easeNone" data-speed="30" data-xs="-400" data-xe="400" data-ys="0" data-ye="0">
                    <img src="/slider/cloud2.png" alt="" data-ww="['600px','600px','300','150']" data-hh="['278px','278px','139','70']" width="600" height="278" 
                    data-no-retina> 
                </div>
            </div>

            <!-- LAYER NR. 7 -->
            <div class="tp-caption tp-resizeme rs-parallaxlevel-2"
                 id="slide-3074-layer-5"
                 data-x="['left','left','left','left']" data-hoffset="['530','553','127','58']"
                 data-y="['top','top','top','top']" data-voffset="['-300','0','663','560']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-type="image"
                data-responsive_offset="on"
                data-frames='[{"from":"x:false;","speed":1000,"to":"o:1;","delay":500,"ease":"Power3.easeOut"},
                {"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="z-index: 11;text-transform:none;border-width:0px;">
                <img src="/slider/goksin-image.png" alt="" data-ww="['800px','500px','130px','100px']"
                 data-hh="['1205px','753px','225px','173px']" data-no-retina> 
                </div>

             <div class="tp-caption tp-resizeme rs-parallaxlevel-2"
                 id="slide-3074-layer-6"
                 data-x="['left','left','left','left']" data-hoffset="['225','598','150','75']"
                 data-y="['top','top','top','top']" data-voffset="['-300','379','663','560']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-type="image"
                data-responsive_offset="on"
                data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":3950,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="z-index: 12;text-transform:none;border-width:0px;">

                <img src="/slider/image-top.png" alt="" data-ww="['1300px','170px','85px','66px']" data-hh="['1229px','286px','143px','111px']" 
                width="170" height="286" data-no-retina> 
            </div>

            <!-- LAYER NR. 9 -->
            <div class="tp-caption   tp-resizeme rs-parallaxlevel-1"
                 id="slide-3074-layer-14"
                 data-x="['left','left','left','left']" data-hoffset="['280','280','-10','-1']"
                 data-y="['top','top','top','top']" data-voffset="['223','223','569','518']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-type="image"
                data-responsive_offset="on"
                data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":3950,"ease":"Power2.easeInOut"},
                {"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"

                style="z-index: 13;text-transform:none;border-width:0px;">
                <div class="rs-looped rs-slideloop"  data-easing="Linear.easeNone" data-speed="30" data-xs="-200" data-xe="200" data-ys="0" data-ye="0">
                    <img src="/slider/cloud3.png" alt="" data-ww="['600px','600px','300','150']" data-hh="['278px','278px','181','90']" width="738" height="445"
                    data-no-retina> 
                </div>
            </div>

            <div class="tp-caption WebProduct-Title tp-resizeme rs-parallaxlevel-7"
            id="slide-3074-layer-77"
            data-x="['left','left','left','left']" data-hoffset="['30','30','200','80']"
            data-y="['middle','middle','top','top']" data-voffset="['-250','-150','177','160']"
           data-fontsize="['50','30','75','60']"
           data-lineheight="['50','30','75','60']"
           data-width="none"
           data-height="none"
           data-whitespace="nowrap"
           data-type="text"
           data-responsive_offset="on"
           data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power2.easeOut"},
           {"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
           data-textAlign="['left','left','left','left']"
           data-paddingtop="[0,0,0,0]"
           data-paddingright="[0,0,0,0]"
           data-paddingbottom="[0,0,0,0]"
           data-paddingleft="[0,0,0,0]"
           style="z-index: 14; white-space: nowrap;text-transform:none;font-weight:normal;text-shadow:2px 2px 1px white;font-family: 'Poppins', sans-serif ">
           Ürünlerinize <span style="color:#24fecc">değer</span> katın,
       </div>

            <div class="tp-caption WebProduct-Title tp-resizeme rs-parallaxlevel-7"
                 id="slide-3074-layer-66"
                 data-x="['left','left','left','left']" data-hoffset="['30','30','200','80']"
                 data-y="['middle','middle','top','top']" data-voffset="['50','150','177','160']"
                data-lineheight="['10','10','75','60']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-type="text"
                data-responsive_offset="on"
                data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power2.easeOut"},
                {"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="z-index: 14;">
                <div style="min-width: 300px;min-height: 15px;background:#24fecc;width:700px"></div>
            </div>

            <div class="tp-caption WebProduct-Title tp-resizeme rs-parallaxlevel-7"
            id="slide-3074-layer-7"
            data-x="['left','left','left','left']" data-hoffset="['30','30','200','80']"
            data-y="['middle','middle','top','top']" data-voffset="['-100','0','177','160']"
           data-fontsize="['90','90','75','60']"
           data-lineheight="['90','90','75','60']"
           data-width="none"
           data-height="none"
           data-whitespace="nowrap"
           data-type="text"
           data-responsive_offset="on"
           data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power2.easeOut"},
           {"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
           data-textAlign="['left','left','left','left']"
           data-paddingtop="[0,0,0,0]"
           data-paddingright="[0,0,0,0]"
           data-paddingbottom="[0,0,0,0]"
           data-paddingleft="[0,0,0,0]"
           style="z-index: 14; white-space: nowrap;text-transform:none;font-weight:bold;text-shadow:2px 2px 1px white;font-family: 'Poppins', sans-serif ">
           AMBALAJ<br>TASARIMINDA<br>BİZE GÜVENİN! 
       </div>


            <div class="tp-caption WebProduct-Content tp-resizeme rs-parallaxlevel-7"
                id="slide-3074-layer-9"
                data-x="['left','left','left','left']" data-hoffset="['30','30','200','80']"
                data-y="['middle','middle','top','top']" data-voffset="['129','200','365','314']"
                data-fontsize="['20','16','16','14']"
                data-lineheight="['20','24','24','22']"
                data-width="['600','600','370','317']"
                data-height="['none','none','81','88']"
                data-whitespace="normal"
                data-type="text"
                data-responsive_offset="on"
                data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1500,"ease":"Power2.easeOut"},
                {"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="z-index: 15; min-width: 600px; max-width:600px; white-space: normal;text-transform:none;font-family: 'Poppins', sans-serif ">
                    Sürekli evrilen grafik tasarım trendlerini yakından takip eder<br>
                    ve bu bilgiyi özgün, yaratıcı tasarımlarınıza entegre ederiz.
            </div>
            <a href="{{ route('contactus')}}" class="tp-caption rev-btn rev-btn  rs-parallaxlevel-8"
                id="slide-3074-layer-8"
                data-x="['left','left','left','left']" data-hoffset="['30','30','200','80']"
                data-y="['middle','middle','top','top']" data-voffset="['228','228','456','400']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-type="button"
                data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":""}]'
                data-responsive_offset="on"
                data-responsive="off"
                data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1750,"ease":"Power2.easeOut"},
                {"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"},{"frame":"hover","speed":"300",
                "ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(51, 51, 51, 1.00);bg:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[40,40,40,40]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[40,40,40,40]"
                style="z-index: 526; white-space: nowrap; font-size: 16px; line-height: 48px; font-weight: 600; color:
                rgba(255, 255, 255, 1.00);text-transform:none;background-color:rgba(51, 51, 51, 1.00);border-color:rgba(0, 0, 0, 1.00);
                border-width:2px;letter-spacing:1px;">İLETİŞİME GEÇ
            </a>
        </li>
    </ul>
    <div style="" class="tp-static-layers">
        <div class="tp-caption -   tp-static-layer"
            id="slider-1084-layer-1"
            data-x="['right','right','right','right']" data-hoffset="['30','30','30','30']"
            data-y="['top','top','top','top']" data-voffset="['30','30','30','30']"
            data-width="none"
            data-height="none"
            data-whitespace="nowrap"
            data-type="text"
            data-actions='[{"event":"click","action":"toggleclass","layer":"slider-1084-layer-1","delay":"0","classname":"open"},
            {"event":"click","action":"togglelayer","layerstatus":"hidden","layer":"slider-1084-layer-3","delay":"0"},
            {"event":"click","action":"togglelayer","layerstatus":"hidden","layer":"slider-1084-layer-4","delay":"0"},
            {"event":"click","action":"togglelayer","layerstatus":"hidden","layer":"slider-1084-layer-5","delay":"0"},
            {"event":"click","action":"togglelayer","layerstatus":"hidden","layer":"slider-1084-layer-6","delay":"0"}]'
            data-basealign="slide"
            data-responsive_offset="off"
            data-responsive="off"
            data-startslide="-1"
            data-endslide="-1"
            data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":500,"ease":"Power3.easeInOut"},
            {"delay":"wait","speed":1000,"to":"auto:auto;","ease":"nothing"}]'
            data-textAlign="['left','left','left','left']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"
            style="z-index: 17; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400;
            color: rgba(255, 255, 255, 1.00);text-transform:none;border-width:0px;">
            <div id="rev-burger">
                <span></span>
                <span></span>
                <span></span>
            </div> 
        </div>
    </div>
    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div> </div>
    </div>


</div>

<div id="element-template-05" class="py-20bt-1 b-gray1 b-solid">
    <div id="image-slider-template-05" class="mt-10 container px-5">
        <div id="filtered-slider" class="block-img dots-circle dots-close c-grab" 
            data-slick='{"dots": false, "touchThreshold": 150, "speed":600, "arrows": false, "fade": false, "draggable":true, "slidesToShow": 4, "slidesToScroll": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2, "slidesToScroll": 2}},{"breakpoint": 768,"settings":{"slidesToShow": 1,"slidesToScroll": 1}}]}' >
            @foreach ($Service->where('category', 3)->take('8') as $item)
                <div class="slide px-10 " >
                    <img src="{{ $item->getFirstMediaUrl('page', 'thumb') }}" alt="{{ $item->title}} - Ahmet Gökşin Güzeltepe" style="border: 1px #ccc solid;border-radius:5px">
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

<section id="portfolio-grid" class="pb-120 pt-90 bt-1 b-gray1 b-solid">
    <div class="container-fluid">
        <div class="t-center">
            {{-- <ul class="filter-tags justify-content-center d-inline-flex mansalva medium uppercase bb-1 b-solid b-gray2" role="tablist">
                <li>
                    <div data-filter="*" class="cbp-filter-item fs-11 py-15 px-35 px-10-sm py-10-sm bb-1 b-transparent c-pointer b-colored-active relative top-1">
                        Tümü
                    </div>
                </li>
                <li>
                    <div data-filter=".art" class="cbp-filter-item fs-11 py-15 px-35 px-10-sm py-10-sm bb-1 b-transparent c-pointer b-colored-active relative top-1">
                        Katalog
                    </div>
                </li>
                <li>
                    <div data-filter=".photography" class="cbp-filter-item fs-11 py-15 px-35 px-10-sm py-10-sm bb-1 b-transparent c-pointer b-colored-active relative top-1">
                        Ambalaj Tasarım
                    </div>
                </li>
                <li>
                    <div data-filter=".graphic" class="cbp-filter-item fs-11 py-15 px-35 px-10-sm py-10-sm bb-1 b-transparent c-pointer b-colored-active relative top-1">
                        Logo Tasarım
                    </div>
                </li>
                <li>
                    <div data-filter=".brand" class="cbp-filter-item fs-11 py-15 px-35 px-10-sm py-10-sm bb-1 b-transparent c-pointer b-colored-active relative top-1">
                        Web Sitesi
                    </div>
                </li>
            </ul>
        </div> --}}

        <div class="col t-center">
            <h1 class="lh-45 mt-10 uppercase">PROJELERİMİZ</h1>
            <p class="light gray6 mt-15 lh-30 fs-18">Ajans olarak yapmış olduğumuz bazı örnek çalışmaları inceleyebilirsiniz.</p>
        </div>

        <div id="portfolio-items" class="mt-40">
            @foreach ($Service->where('category', 2) as $item)
                <a href="{{ route('projectdetail', $item->slug)}}" class="cbp-item art photography">
                    <div class="work-image">
                        <img src="{{ $item->getFirstMediaUrl('page', 'thumb') }}" 
                             alt="{{ $item->title}} - Gökşin Güzeltepe" />
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="fs-25 lh-50 fs-30-sm ls--1 extrabold black underline-large bigger down2x lighter px-5"> {{ $item->title}} </h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">Katalog, Broşür</div>
                    </div>
                </a>
            @endforeach
        </div>

    </div>
</section>

@endsection
@section('customJS')
<script src="/front/js/revolutionslider/jquery.themepunch.revolution.min.js"></script>
<script src="/front/js/revolutionslider/jquery.themepunch.tools.min.js"></script>
<script>

    var tpj=jQuery;
    var revapi1084;
    tpj(document).ready(function() {
        if(tpj("#rev_slider_1084_1").revolution == undefined){
        revslider_showDoubleJqueryError("#rev_slider_1084_1");
        }else{
            revapi1084 = tpj("#rev_slider_1084_1").show().revolution({
                sliderType:"hero",
            jsFileLocation:"revolution/js/",
                sliderLayout:"fullscreen",
                dottedOverlay:"none",
                delay:9000,
                navigation: {
                },
                responsiveLevels:[1921,1441,1336,480],
                visibilityLevels:[1921,1441,1336,480],
                gridwidth:[1400,1240,778,480],
                gridheight:[768,768,960,720],
                lazyType:"none",
                parallax: {
                    type:"3D",
                    origo:"slidercenter",
                    speed:5000,
                    levels:[5,10,15,20,25,30,5,0,45,50,47,48,49,50,51,55],
                    type:"3D",
                    ddd_shadow:"off",
                    ddd_bgfreeze:"off",
                    ddd_overflow:"hidden",
                    ddd_layer_overflow:"visible",
                    ddd_z_correction:15,
                },
                spinner:"off",
                autoHeight:"off",
                disableProgressBar:"on",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                    simplifyAll:"off",
                    disableFocusListener:false,
                }
            });
        }
    }); /*ready*/

</script>


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

<script>
    (function($, window, document, undefined) {
        'use strict';
        // init cubeportfolio
        $('#portfolio-items').cubeportfolio({
            mediaQueries: [{
                width: 992,
                cols: 5,
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
            gapHorizontal: 0,
            gapVertical: 0,
            caption: 'none',
            animationType: 'quicksand',
            displayType: 'none',
            displayTypeSpeed: 0,
        });

        //Get .active class for filters
        $(".cbp-filter-item-active").addClass("active");
        $("[data-filter]").on("click", function(){
            $("[data-filter]").removeClass("active");
            $(".cbp-filter-item-active").addClass("active");
        });

    })(jQuery, window, document);
</script>

@endsection