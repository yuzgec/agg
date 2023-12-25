@extends('frontend.app.master')
@section('content')
<section id="home">
    <div class="row mx-0">
        <div class="col-lg-7 col-12 o-auto scrollbar-styled height-full height-auto-sm px-0 d-flex align-items-center flex-wrap justify-content-center">
            <div id="contact-form-section" class="t-left width-percent-90 fullwidth-sm pt-120 pb-80 px-70 px-30-sm mxw-900">
                <h5 class="uppercase fs-11 medium ls-3 ls-1-sm" data-color="#499FC1">
                    Contact with us
                </h5>
                <h4 class="mt-15 bold fs-32 fs-22-sm dark underline-hover-slide underline-slide ls--1 ls-0-sm">
                   <a href="mailto:hello@yourwebsite.com">hello@yourwebsite.com</a>
                </h4>
                <p class="light fs-22 fs-18-sm gray7 lh-35 lh-25-sm mt-15">
                    Lets talk about the future! You can drop a message with the contact form below or you can send e-mail.
                </p>
                <form id="contact_form" class="validate-me mt-40" name="contact_form" method="post" action="php/mail.php" data-error-message="Validation error occured. Please enter the fields and submit it again." data-submit-message="Thank You ! Your email has been delivered.">
                    <div class="row">
                        <div class="col-12">
                            <input type="text" name="name1" id="name1" placeholder="Your Name*" required class="py-20 px-25 b-transparent fs-18 bg-gray2 dark-placeholder">
                        </div>
                        <div class="col-12 mt-20">
                            <input type="email" name="email1" id="email1" placeholder="E-Mail*" required class="py-20 px-25 b-transparent fs-18 bg-gray2 dark-placeholder">
                        </div>
                        <div class="col-12 mt-20">
                            <textarea name="message1" id="message1" placeholder="Tell us about your project.*" required class="py-20 px-25 b-transparent fs-18 bg-gray2 dark-placeholder height-150"></textarea>
                        </div>
                        <div class="col-12 mt-20 d-flex justify-content-start align-items-center">
                           <button type="submit" id="submit" class="inline-block width-250 py-20 bs-colored white ls-3-hover slow bold fs-14 uppercase" data-bgcolor="#4BA2C5">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <footer class="bg-gray1 py-30 px-15 t-center bt-1 b-gray2 fullwidth mt-auto">
                <p class="gray7 fs-14">These templates are included as images in the theme. You can use it in any light column or container.</p>
            </footer>
        </div>
        <div class="col-lg-5 col-12 px-0 height-full height-600-sm d-flex align-items-center justify-content-center">
            <div id="hotspots" class="hotspots fullwidth fullheight">
                <a href="https://www.google.com/maps/dir/38.6625375,26.7461904/godijital/@38.6625643,26.7434839,17z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x14bbd9dda7edd2cd:0xd470632415ff0b91!2m2!1d26.7460273!2d38.6624765" target="_blank" class="d-flex fullwidth fullheight">
                    <div class="fullwidth fullheight c-plus" data-bg="url(images/map_03.jpg)"></div>
                </a>
                <div class="items pointer-events-none">
                    <div style="left:51.2%; top:48.7%;" class="item animated fast" data-animation="blurIn" data-animation-delay="200">
                        <div class="width-40 width-25-sm height-40 height-25-sm circle c-pointer icon-animated1"
                        data-bgcolor="#4BA2C5"
                        data-bcolor="#4BA2C5"
                        data-bs-toggle="popover"
                        data-bs-trigger="click"
                        data-bs-placement="top"
                        data-show="true"
                        title="<h4 class='fs-19'>New york Office</h4>"
                        data-bs-content="<p class='mt-10 lh-25 fs-15'>2962 Bedford Street Connecticut CT 10011 New York</p>"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection