@extends('frontend.app.master')

@section('content')

<section id="home" class="mnh-600 mnh-none-sm bg-white relative">

    
    <div class="container relative zi-5">
         <div class="row align-items-center">
              <div class="col-lg-8 py-90 pt-120-sm pb-10-sm t-left t-center-sm">
                   <div class="bg-soft-white3 px-15 py-10 radius d-inline-flex animated" data-animation="fadeInDown" data-animation-delay="500">
                        <h5 class="dark medium fs-17">
                             Computer science
                        </h5>
                   </div>
                   <h2 class="mt-30 mt-20-sm fs--lg lh-sm dark medium animated" data-animation="fadeInDown" data-animation-delay="700">
                        The ideas that make customers go wow
                   </h2>
                   <p class="mt-40 mt-25-sm fs-20 lh-30 dark animated" data-animation="fadeInDown" data-animation-delay="900">
                        Computer science education cannot make anybody an expert programmer.
                   </p>
                   <div class="mt-50 animated" data-animation="fadeInDown" data-animation-delay="1100">
                        <a href="#about" class="lg-btn bg-white b-2 b-white bg-transparent-hover gray8 white-hover radius-xl uppercase semibold slow-sm">
                             Get started
                        </a>
                   </div>
              </div>
              <div class="col-lg-4 d-flex align-items-center justify-content-center unselectable pointer-events-none animated" data-animation="fadeInRight" data-animation-delay="1500">
                   <img src="/goksin.png" class="d-block   mnh-700 mnh-none-sm mxw-300-sm relative ">
              </div>
         </div>
    </div>


</section>

{{-- <section id="home" class="relative white height-100vh mnh-600 align-items-center d-flex">
    <div class="bg-slider has-details custom-slider controls-mouseover arrows-long" data-slick='{"speed": 900, "arrows": true, "autoplaySpeed": 5000, "autoplay": true }'>

        <div class="slide" data-background="/front/content/medusa/images/background_01.jpg" data-bg-mobile="content/medusa/images/background_02_sm.jpg">
            <div class="d-flex align-items-lg-center align-items-start mt-90-sm justify-content-lg-start justify-content-center">
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
              
            </div>
            
        </div>
        
    </div>
</section> --}}


    <section id="about" class="pb-50 pb-20-sm t-center-sm mt-50">

        <div class="container">
    		<div class="row">

    			<div class="col-md-4 col-12 pr-50 pr-15-sm">
    				<h5 class="fs-17 colored uppercase font-secondary">Hakkımızda</h5>
    				<h1 class="bold mt-20 fs-40 fs-30-sm lh-50 lh-40-sm dark3">
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

    			<div class="col-md-8 col-12">
    				<div class="row" data-masonry='{"percentPosition":true}'>
                        @foreach ($Service as $item)
                            
                       
    					<div class="col-xl-6 col-lg-12 col-md-6 col-12 pt-30  px-15-sm c-default">
    						<div class="bg-colored2 bg-soft-white5-hover radius-lg px-15 px-30-sm py-15">
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
                <ul class="filter-tags justify-content-center d-inline-flex mansalva medium uppercase bb-1 b-solid b-gray2" role="tablist">
                    <li>
                        <div data-filter="*" class="cbp-filter-item fs-11 py-15 px-35 px-10-sm py-10-sm bb-1 b-transparent c-pointer b-colored-active relative top-1">
                            Tümü
                        </div>
                    </li>
                    <li>
                        <div data-filter=".art" class="cbp-filter-item fs-11 py-15 px-35 px-10-sm py-10-sm bb-1 b-transparent c-pointer b-colored-active relative top-1">
                            Art
                        </div>
                    </li>
                    <li>
                        <div data-filter=".photography" class="cbp-filter-item fs-11 py-15 px-35 px-10-sm py-10-sm bb-1 b-transparent c-pointer b-colored-active relative top-1">
                            Photography
                        </div>
                    </li>
                    <li>
                        <div data-filter=".graphic" class="cbp-filter-item fs-11 py-15 px-35 px-10-sm py-10-sm bb-1 b-transparent c-pointer b-colored-active relative top-1">
                            Graphic
                        </div>
                    </li>
                    <li>
                        <div data-filter=".brand" class="cbp-filter-item fs-11 py-15 px-35 px-10-sm py-10-sm bb-1 b-transparent c-pointer b-colored-active relative top-1">
                            Brand
                        </div>
                    </li>
                </ul>
            </div>

            <div id="portfolio-items" class="mt-40">

                <a href="project-01.html" class="cbp-item art photography">
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/WAVE SUNUM-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="fs-45 lh-50 fs-35-sm ls--1 extrabold black underline-large bigger down2x lighter px-5"> Wave </h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">Katalog, Broşür</div>
                    </div>
                </a>
                <a href="project-02.html" class="cbp-item photography graphic">
                    
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/YOYO CHIPSY-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Is everything round?</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">photography, graphic</div>
                    </div>
                </a>
                <a href="project-01.html" class="cbp-item art photography">
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/WAVE SUNUM-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Wave</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">Katalog, Broşür</div>
                    </div>
                </a>
                <a href="project-02.html" class="cbp-item photography graphic">
                    
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/YOYO CHIPSY-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Is everything round?</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">photography, graphic</div>
                    </div>
                </a>
                <a href="project-01.html" class="cbp-item art photography">
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/WAVE SUNUM-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Wave</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">Katalog, Broşür</div>
                    </div>
                </a>
                <a href="project-02.html" class="cbp-item photography graphic">
                    
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/YOYO CHIPSY-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Is everything round?</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">photography, graphic</div>
                    </div>
                </a>
                <a href="project-01.html" class="cbp-item art photography">
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/WAVE SUNUM-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Wave</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">Katalog, Broşür</div>
                    </div>
                </a>
                <a href="project-02.html" class="cbp-item photography graphic">
                    
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/YOYO CHIPSY-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Is everything round?</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">photography, graphic</div>
                    </div>
                </a>
                <a href="project-01.html" class="cbp-item art photography">
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/WAVE SUNUM-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Wave</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">Katalog, Broşür</div>
                    </div>
                </a>
                <a href="project-02.html" class="cbp-item photography graphic">
                    
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/YOYO CHIPSY-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Is everything round?</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">photography, graphic</div>
                    </div>
                </a>
                <a href="project-01.html" class="cbp-item art photography">
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/WAVE SUNUM-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Wave</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">Katalog, Broşür</div>
                    </div>
                </a>
                <a href="project-02.html" class="cbp-item photography graphic">
                    
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/YOYO CHIPSY-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Is everything round?</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">photography, graphic</div>
                    </div>
                </a>
                <a href="project-01.html" class="cbp-item art photography">
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/WAVE SUNUM-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Wave</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">Katalog, Broşür</div>
                    </div>
                </a>
                <a href="project-02.html" class="cbp-item photography graphic">
                    
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/YOYO CHIPSY-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Is everything round?</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">photography, graphic</div>
                    </div>
                </a>
                <a href="project-01.html" class="cbp-item art photography">
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/WAVE SUNUM-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Wave</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">Katalog, Broşür</div>
                    </div>
                </a>
                <a href="project-02.html" class="cbp-item photography graphic">
                    
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/YOYO CHIPSY-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Is everything round?</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">photography, graphic</div>
                    </div>
                </a>
                <a href="project-01.html" class="cbp-item art photography">
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/WAVE SUNUM-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Wave</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">Katalog, Broşür</div>
                    </div>
                </a>
                <a href="project-02.html" class="cbp-item photography graphic">
                    
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/YOYO CHIPSY-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Is everything round?</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">photography, graphic</div>
                    </div>
                </a>
                <a href="project-01.html" class="cbp-item art photography">
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/WAVE SUNUM-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Wave</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">Katalog, Broşür</div>
                    </div>
                </a>
                <a href="project-02.html" class="cbp-item photography graphic">
                    
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/YOYO CHIPSY-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Is everything round?</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">photography, graphic</div>
                    </div>
                </a>

                <a href="project-01.html" class="cbp-item art photography">
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/WAVE SUNUM-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Wave</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">Katalog, Broşür</div>
                    </div>
                </a>
                <a href="project-02.html" class="cbp-item photography graphic">
                    
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/YOYO CHIPSY-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Is everything round?</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">photography, graphic</div>
                    </div>
                </a>
                <a href="project-01.html" class="cbp-item art photography">
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/WAVE SUNUM-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Wave</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">Katalog, Broşür</div>
                    </div>
                </a>
                <a href="project-02.html" class="cbp-item photography graphic">
                    
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/YOYO CHIPSY-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Is everything round?</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">photography, graphic</div>
                    </div>
                </a>
                <a href="project-01.html" class="cbp-item art photography">
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/WAVE SUNUM-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Wave</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">Katalog, Broşür</div>
                    </div>
                </a>
                <a href="project-02.html" class="cbp-item photography graphic">
                    
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/YOYO CHIPSY-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Is everything round?</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">photography, graphic</div>
                    </div>
                </a>
                <a href="project-01.html" class="cbp-item art photography">
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/WAVE SUNUM-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Wave</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">Katalog, Broşür</div>
                    </div>
                </a>
                <a href="project-02.html" class="cbp-item photography graphic">
                    
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/YOYO CHIPSY-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Is everything round?</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">photography, graphic</div>
                    </div>
                </a>
                <a href="project-01.html" class="cbp-item art photography">
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/WAVE SUNUM-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Wave</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">Katalog, Broşür</div>
                    </div>
                </a>
                <a href="project-02.html" class="cbp-item photography graphic">
                    
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/YOYO CHIPSY-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Is everything round?</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">photography, graphic</div>
                    </div>
                </a>
                <a href="project-01.html" class="cbp-item art photography">
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/WAVE SUNUM-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Wave</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">Katalog, Broşür</div>
                    </div>
                </a>
                <a href="project-02.html" class="cbp-item photography graphic">
                    
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/YOYO CHIPSY-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Is everything round?</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">photography, graphic</div>
                    </div>
                </a>
                <a href="project-01.html" class="cbp-item art photography">
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/WAVE SUNUM-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Wave</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">Katalog, Broşür</div>
                    </div>
                </a>
                <a href="project-02.html" class="cbp-item photography graphic">
                    
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/YOYO CHIPSY-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Is everything round?</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">photography, graphic</div>
                    </div>
                </a>
                <a href="project-01.html" class="cbp-item art photography">
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/WAVE SUNUM-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Wave</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">Katalog, Broşür</div>
                    </div>
                </a>
                <a href="project-02.html" class="cbp-item photography graphic">
                    
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/YOYO CHIPSY-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Is everything round?</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">photography, graphic</div>
                    </div>
                </a>
                <a href="project-01.html" class="cbp-item art photography">
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/WAVE SUNUM-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Wave</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">Katalog, Broşür</div>
                    </div>
                </a>
                <a href="project-02.html" class="cbp-item photography graphic">
                    
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/YOYO CHIPSY-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Is everything round?</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">photography, graphic</div>
                    </div>
                </a>
                <a href="project-01.html" class="cbp-item art photography">
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/WAVE SUNUM-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Wave</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">Katalog, Broşür</div>
                    </div>
                </a>
                <a href="project-02.html" class="cbp-item photography graphic">
                    
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/YOYO CHIPSY-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Is everything round?</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">photography, graphic</div>
                    </div>
                </a>
                <a href="project-01.html" class="cbp-item art photography">
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/WAVE SUNUM-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Wave</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">Katalog, Broşür</div>
                    </div>
                </a>
                <a href="project-02.html" class="cbp-item photography graphic">
                    
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/YOYO CHIPSY-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Is everything round?</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">photography, graphic</div>
                    </div>
                </a>
                <a href="project-01.html" class="cbp-item art photography">
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/WAVE SUNUM-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Wave</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">Katalog, Broşür</div>
                    </div>
                </a>
                <a href="project-02.html" class="cbp-item photography graphic">
                    
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/YOYO CHIPSY-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Is everything round?</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">photography, graphic</div>
                    </div>
                </a>
                <a href="project-01.html" class="cbp-item art photography">
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/WAVE SUNUM-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Wave</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">Katalog, Broşür</div>
                    </div>
                </a>
                <a href="project-02.html" class="cbp-item photography graphic">
                    
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/YOYO CHIPSY-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Is everything round?</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">photography, graphic</div>
                    </div>
                </a>
                <a href="project-01.html" class="cbp-item art photography">
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/WAVE SUNUM-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Wave</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">Katalog, Broşür</div>
                    </div>
                </a>
                <a href="project-02.html" class="cbp-item photography graphic">
                    
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/YOYO CHIPSY-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Is everything round?</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">photography, graphic</div>
                    </div>
                </a>
                <a href="project-01.html" class="cbp-item art photography">
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/WAVE SUNUM-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Wave</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">Katalog, Broşür</div>
                    </div>
                </a>
                <a href="project-02.html" class="cbp-item photography graphic">
                    
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/YOYO CHIPSY-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Is everything round?</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">photography, graphic</div>
                    </div>
                </a>
                <a href="project-01.html" class="cbp-item art photography">
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/mito-noel.png" width="1080" height="1920" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Wave</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">Katalog, Broşür</div>
                    </div>
                </a>
                <a href="project-01.html" class="cbp-item art photography">
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/WAVE SUNUM-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Wave</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">Katalog, Broşür</div>
                    </div>
                </a>
                <a href="project-02.html" class="cbp-item photography graphic">
                    
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/YOYO CHIPSY-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Is everything round?</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">photography, graphic</div>
                    </div>
                </a>
                <a href="project-01.html" class="cbp-item art photography">
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/WAVE SUNUM-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Wave</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">Katalog, Broşür</div>
                    </div>
                </a>
                <a href="project-02.html" class="cbp-item photography graphic">
                    
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/YOYO CHIPSY-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Is everything round?</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">photography, graphic</div>
                    </div>
                </a>
                <a href="project-01.html" class="cbp-item art photography">
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/WAVE SUNUM-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Wave</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">Katalog, Broşür</div>
                    </div>
                </a>
                <a href="project-02.html" class="cbp-item photography graphic">
                    
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/YOYO CHIPSY-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Is everything round?</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">photography, graphic</div>
                    </div>
                </a>
                <a href="project-01.html" class="cbp-item art photography">
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/WAVE SUNUM-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Wave</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">Katalog, Broşür</div>
                    </div>
                </a>
                <a href="project-02.html" class="cbp-item photography graphic">
                    
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/YOYO CHIPSY-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Is everything round?</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">photography, graphic</div>
                    </div>
                </a>
                <a href="project-01.html" class="cbp-item art photography">
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/WAVE SUNUM-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Wave</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">Katalog, Broşür</div>
                    </div>
                </a>
                <a href="project-02.html" class="cbp-item photography graphic">
                    
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/YOYO CHIPSY-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Is everything round?</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">photography, graphic</div>
                    </div>
                </a>
          
                <a href="project-02.html" class="cbp-item photography graphic">
                    
                    <div class="work-image">
                        <img src="images/portfolio/alpha_loading.svg" data-cbp-src="/YOYO CHIPSY-01.jpg" width="1000" height="1000" alt="Portfolio picture template">
                    </div>
                    <div class="details py-20 px-15 zi-5 overlay bg-blur bg-soft-dark5 flex-column t-center">
                        <div class="line bg-colored1 height-1 width-0"></div>
                        <h3 class="title fs-14 white medium uppercase mt-15">Is everything round?</h3>
                        <div class="tag capitalize white uppercase ls-1 fs-11">photography, graphic</div>
                    </div>
                </a>
               
            </div>
        </div>
        <!-- End container for template -->
    </section>

@endsection
@section('customJS')
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