@extends('layouts.main')

@section('skel_styles')
{{--    <link rel="stylesheet" href="/carousel/homepage/style.css?{{Str::random(4)}}" />--}}
    <link rel="stylesheet" href="/carousel/homepage/style.css?{{Str::random(4)}}" />
@endsection

@section('content')
    <livewire:homepage-carousel />

    <!-- /.wrapsemibox start-->
    <div class="wrapsemibox shadow">
        <div class="semiboxshadow">
            <img src="{{url('images/shp.png')}}" class="img-fluid" alt="">
        </div>
        <!-- INTRO NOTE==================================================-->

        <section class="intro-note topspace10">

            <div class="container">

                <div class="row">

                    <div class="col-lg-12 text-center">


                        <h1>THE <span class="colortext">PREFERRED SOLUTION</span> FOR LIFE SAFETY AND AIR CONTROL</h1>

                        <p>

                            Pottorff is one of the leading manufacturers of louvers and dampers in the industry. We are
                            committed

                            to superior customer service - delivering high-performing HVAC products on time and at
                            competitive prices.

                        </p>

                    </div>

                </div>

            </div>

        </section>

        <!-- /.intro-note end-->
        <!-- SERVICE BOXES==================================================-->

        <section class="service-box my-2">

            <div class="container">

                <div class="row">

                    <livewire:home-product-card title="AIR CONTROL DAMPERS"
                                                description="Commercial, Industrial, Manual Balancing and Backdraft Dampers"
                                                image="images/Product Photos/Backdraft Damper.png" />

                    <livewire:home-product-card title="CEILING RADIATION DAMPERS"
                                                description="Butterfly, Curtain Style, Wood Truss, Steel Truss and Specialty"
                                                image="images/Product Photos/Ceiling Radiation Damper.png" />

                    <livewire:home-product-card title="FIRE/SMOKE DAMPERS"
                                                description="UL Rated Fire, Smoke and Combination Fire/Smoke Dampers"
                                                image="images/Product Photos/FSD.png" />

                    <livewire:home-product-card title="LOUVERS"
                                                description="Drainable, Operable, Miami-Dade, Florida Building Code, Penthouses"
                                                image="images/Product Photos/Louver.png" />
                </div>

            </div>

            <div class="container mt-3">
                <div class="row">
                    <div class="col-lg-8">
                                <img src="/images/icons/Revit Logo.png" alt="News" style="height: 55px;margin: 5px 5px;max-width: 140px;" />

                                <img src="/images/icons/News.png" alt="News" style="height: 55px;margin: 5px 5px;" />

                                <img src="/images/icons/Case Studies.png" alt="Case" style="margin: 5px 5px;height: 55px" />

                                <img src="/images/icons/CSI.png" alt="CSI" style="margin: 5px 5px;height: 55px" />

                                <img src="/images/icons/Installation.png" alt="Installation" style="margin: 5px 5px;height: 55px" />

                                <img src="/images/icons/Educate.png" alt="Educate" style="margin: 5px 5px;height: 55px" />

                                <img src="/images/icons/warranty.png" alt="Waranty" style="margin: 5px 5px;height: 55px" />

                    </div>
                    <div class="col-lg-4">
                                <img src="/images/icons/Green Building Council.png" alt="Green Building Council" style="height: 55px;margin: 5px 5px;" />

                                <img src="/images/icons/UL Logo Revised.png" alt="UL Logo Revised" style="height: 55px;margin: 5px 5px;" />

                                <img src="/images/icons/Buy-American-Act.png" alt="Buy-American-Act" style="height: 55px;margin: 5px 5px;" />

                                <img src="/images/icons/AMCA Logo.png" alt="AMCA Logo" style="height: 55px;margin: 5px 5px;" />

                    </div>
                </div>
            </div>

        </section>

        <!-- /.service-box end-->
        <!-- RECENT WORK==================================================-->

        <section class="home-portfolio bgarea mt-3 pt-3">

            <div class="">

                <div class="container">

                    <img class="float-left" src="{{url('/images/Louver Selection Tool Area/Monitor.svg')}}"
                         alt="Computer" height="447" style="max-width: 100%" />

                    <div class="list-louver-pull-left" style="width: 105%; ">
                        <p class="animated fadeInLeftNow notransition learn-more-title">LIST LOUVER INFORMATION AND
                            SELECTION</p>
                        <p class="animated fadeInRightNow notransition  topspace20" style="font-size: 14px">
                            Pottorff's LIST Louver Information and Selection program was developed
                            with engineers and architects in mind. With its intuitive design, this industry
                            leading online tool takes all the guesswork out of picking the right louver
                            for any project.

                        </p>
                    </div>

                    <br>

                    <div class="select-louvers-based select-based-on-push-right float-left">
                        <h4 class="mb-3">SELECT LOUVERS BASED ON:</h4>

                        <ul class="list-unstyled list">
                            <li>Material</li>
                            <li>Louver Type</li>
                            <li>Blade Type</li>
                            <li>Airflow Velocities</li>
                            <li>Airflow Direction</li>
                            <li>Opening Size</li>
                            <li>Pressure Loss</li>
                            <li>Free Area</li>
                            <li>Beginning Point of Water Penetration</li>
                            <li>AMCA, FBC, Miami-Dade and FEMA Certifications</li>
                        </ul>
                    </div>

                    <div class="learn-more">
                        <button type="button" href="https://www.pottorff.com/list/" class="btn btn-danger btn-sm">LEARN MORE</button>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="bottom bg-primary w-100 mt-3 py-3 text-center font-weight-bold">
                NO NEED TO REGISTER TO SELECT LOUVERS FOR YOUR PROJECT. CREATE AND IMPORT YOUR SCHEDULE DIRECTLY INTO OUR SPECS PRICING PROGRAM.
            </div>
        </section>
        <!-- /.recent-work end-->
        <!-- FEATURES==================================================-->

        <section class="home-features mt-5 what-our-reps-say">
            <div class="container animated fadeInUpNow notransition">
                <h1 class="small text-center">WHAT OUR REPS SAY</h1>

                <div class="br-hr type_short">
                    <span class="br-hr-h">
                        <i class="icon-pencil"></i>
                    </span>
                </div>

                <ul class="quotes">
                    <li>
                        "Pottorff does what they say they will do. Honest, competitive and supportive" -
                        <div class="name">Jeremy Hobbs, J.M. O'Conner, Inc.</div>
                    </li>
                    <li>
                        "Quality manufacturing locations, knowledgeable staff and customer service" -
                        <div class="name">Todd Williams, Florida Air Solutions</div>
                    </li>
                    <li>
                        "Great customer service, factory support, product development, pricing software" -
                        <div class="name">Joe Paul, Deckman Company</div>
                    </li>
                </ul>
            </div>

        </section>

        <section id="news-section" class="news-section mt-3 animated fadeInUpNow notransition article-divider mx-40">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <livewire:home-news-list />
                    </div>
                    <div class="col-md-6">
                        <livewire:literature />
                    </div>
                </div>
            </div>
        </section>

        <!-- /.home-features end-->
        <section class="grayarea recent-projects-home mt-5 animated fadeInUpNow notransition">
            <div class="container">
                <div class="row">
                    <livewire:home-bottom-slide />
                </div>
            </div>
        </section>
        <!-- /.recent-projects-home end-->
    </div>
    <!-- /.wrapsemibox end-->
@endsection


@section('scripts')
    <script>
        //CALL TESTIMONIAL ROTATOR
        $(function () {
            /*
            - how to call the plugin:
            $( selector ).cbpQTRotator( [options] );
            - options:
            {
                // default transition speed (ms)
                speed : 700,
                // default transition easing
                easing : 'ease',
                // rotator interval (ms)
                interval : 8000
            }
            - destroy:
            $( selector ).cbpQTRotator( 'destroy' );
            */
            try {
                $('#cbp-qtrotator').cbpQTRotator();
            } catch (e) {
                console.log({ e });
            }
        });
    </script>
    <script>
        //CALL PRETTY PHOTO
        // $(document).ready(function () {
        //     $('a[data-gal^=\'prettyPhoto\']').
        //         prettyPhoto({ social_tools: '', animation_speed: 'normal', theme: 'dark_rounded' });
        // });
    </script>
    <script>
        //MASONRY
        $(document).ready(function () {
            var $container = $('#content');
            // $container.imagesLoaded(function () {
            //     $container.isotope({
            //         filter: '*',
            //         animationOptions: {
            //             duration: 750,
            //             easing: 'linear',
            //             queue: false,
            //         },
            //     });
            // });
            // $('#filter a').click(function (event) {
            //     $('a.selected').removeClass('selected');
            //     var $this = $(this);
            //     $this.addClass('selected');
            //     var selector = $this.attr('data-filter');
            //     $container.isotope({
            //         filter: selector,
            //     });
            //     return false;
            // });
        });
    </script>
    <script>
        //ROLL ON HOVER
        $(function () {
            $('.roll').css('opacity', '0');
            $('.roll').hover(function () {
                    $(this).stop().animate({
                        opacity: .8,
                    }, 'slow');
                },
                function () {
                    $(this).stop().animate({
                        opacity: 0,
                    }, 'slow');
                });
        });
    </script>
@endsection
