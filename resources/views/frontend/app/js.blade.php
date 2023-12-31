{{-- <div id="cookie__notification_02_5612367" class="cookie fixed bottom-30 fullwidth" data-expire="15">
    <div class="container-sm bg-white bs-xl py-35 px-30 d-flex justify-content-lg-between justify-content-center flex-lg-row flex-column align-items-center">
         <p class="fs-16 dark5 lh-25">This website uses cookies to give you the best experience. <a href="pages-terms.html" class="underline gray8-hover">Click for detailed information.</a></p>
         <button type="button" class="close bg-dark4 white lh-normal px-40 py-15 fs-12 uppercase opacity-8-hover slow bold mt-20-sm">Accept</button>
    </div>
 </div> --}}

 <div class="fs-searchform d-flex align-items-center justify-content-center">
     <form id="fs-searchform" class="container" action="pages-search-results.html" method="get">
         <input type="search" name="q" id="q" placeholder="Search on website.com" autocomplete="off">
         <div class="ti-close close"></div>
     </form>
     <div class="form-bg"></div>
 </div>

 <div class="qcf bg-transparent radius-lg bs-xl unselectable">
     <div class="bg-colored px-30 py-40 t-left">
         <img src="/logob.png" class="block width-40" alt="website logo template">
         <h5 class="light fs-18 white mt-30">Hızlı İletişim</h5>
         <p class="fs-16 white lh-25 mt-10">Formu kullanrak bize hızlı mesaj gönderebilirsiniz👋.</p>
     </div>
     <form class="validate-me pt-15 bg-white" name="quick_form" method="post" action="" data-error-message="Please check the red marked areas." data-submit-message="Your message has reached us. Thank you!">
        <input type="email" name="qemail" id="qemail" required placeholder="Adınız Soyadınız" autocomplete="off" class="fs-14 py-20 px-30 b-0 bb-1 b-gray">
        <input type="email" name="qemail" id="qemail" required placeholder="E-Mail Adresiniz" autocomplete="off" class="fs-14 py-20 px-30 b-0 bb-1 b-gray">
        <textarea name="qmessage" id="qmessage" required placeholder="Mesajınız" class="fs-14 py-20 px-30 height-120 mt-5 b-0 bb-1 b-gray"></textarea>
         <div class="mt-50 t-right py-30 px-30 d-flex justify-content-end align-items-center">
             <a href="{{ route('home')}}" class="fs-12 medium colored">Hakkımda</a>
             <button type="submit" id="qsubmit" class="fs-12 black medium ml-15 py-0 bg-white dark-loading">Mesajı Gönder</button>
         </div>
     </form>
 </div>
 <div class="qcf-backdrop"></div>

 <a href="#" class="drop-msg b-1 b-gray1 qcf-trigger circle width-60 width-50-sm height-60 height-50-sm bg-white gray7 bg-colored-active white-active">
     <i class="ti-headphone-alt fs-22 show"></i>
     <i class="ti-close fs-20 cls"></i>
 </a>

 <a id="back-to-top" href="#top" class="btt b-1 b-gray1 circle width-60 width-50-sm height-60 height-50-sm bg-white gray7">
     <i class="ti-angle-up fs-18"></i>
 </a>

<script src="/front/js/jquery.min.js?v=3"></script>
<script src="/front/js/bs.js?v=5.1.3"></script>
<script src="/front/js/scripts.js?v=3.0"></script>
<script src="/front/content/portfolio/js/plugins.js?v=3"></script>
<script src="/front/js/components/masonry.pkgd.min.js"></script>


