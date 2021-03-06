<!-- TOP AREA ================================================== -->
<section class="toparea">
    <div class="container">
        <div class="row">
            <div class="col-md-6 top-text pull-left animated fadeInLeft text-center">
                ADMIN PANEL Welcome, {{auth()->user()->name}}
            </div>
            <div class="col-md-6 text-right animated fadeInRight">
                <div class="social-icons">
                    <a target="_blank" rel="nofollow" class="icon icon-facebook"
                       href="{{config('app.contact.facebook')}}"></a>
                    <a target="_blank" rel="nofollow" class="icon icon-twitter"
                       href="{{config('app.contact.twitter')}}"></a>
                    <a target="_blank" rel="nofollow" class="icon icon-linkedin"
                       href="{{config('app.contact.linkedin')}}"></a>
                    <a target="_blank" rel="nofollow" class="icon icon-youtube-play"
                       href="{{config('app.contact.youtube')}}"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.toparea end-->
