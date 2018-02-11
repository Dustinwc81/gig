<!-- Footer -->

<footer class="page-footer center-on-small-only bg-dark text-white" style="padding-top:50px">

    <!--Footer Links-->
    <div class="container-fluid">
        <div class="row top-spacer-20" style="">

            <!--First column-->
            <div class="col-md-4 offset-1">
                <h5 class="title text-muted">GET IN TOUCH</h5>
                <p>We would love to hear from you. The Site is still under construction, thank you for your patience.<br/>
                   <br/>
                   (918) 964-9725<br/>
                   <br/>
                   Email:  bighenry71@gmail.com</p>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-4 left-justified offset-1">
                <h5 class="title text-muted">EXPLORE</h5>
                <ul class="list-unstyled">
                    <li> <a class="text-white" href="/myStory">MY STORY</a></li>
                    <li> <a class="text-white" href="{{ route('shop.index') }}">JH2 EQUIPMENT</a></li>
                    <li> <a class="text-white" href="/contact">CONTACT</a> </li>
                    {{-- <a class="text-white" href="#!">STAY CONNECTED</a><br/> --}}
                </ul>
            </div>
            <!--/.Second column-->
        </div>
    </div>
    <!--/.Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright text-center">
        <div class="container-fluid">
           <a href="/"><img class="top-margin logo-small" src="{{ URL::asset('images/whiteLogo.png') }}" width="75" height="75"></a>
           <a class="text-white "href="https://www.JH2Gigs.com"> <u>JH2Gigs.com</u> </a>
           Copyright &#169; JH2 GIGS 2018&hellip; All Rights Reserved

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->
