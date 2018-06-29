@include('home.photo.heade')


<div id="fh5co-page">

    <div class="aside-toggle btn-circle">
        <a href="#"><span></span><em>About</em></a>
    </div>
    <div class="back-to-home btn-circle">
        <a href="{{ url('photo') }}"><span></span><em>Back</em></a>
    </div>

    <div id="fh5co-aside">
        <div class="image-bg"></div>
        <div class="overlay"></div>
        <div class="row">
            <div class="col-md-12">
                <div id="fh5co-aside-inner">
                    <div class="row" id="fh5co-bio">
                        <div class="col-md-12">
                            <h2>About Me</h2>
                        </div>
                        <div class="col-md-6">
                            <p>Sint, <a href="#">consectetur</a>, fugit. Sed, blanditiis. Autem quae perferendis totam
                                provident, consequuntur inventore reiciendis vitae suscipit rerum repellendus facere
                                voluptatem tenetur iure praesentium corrupti asperiores eos laborum debitis eaque
                                maiores magnam nisi exercitationem sunt maxime! At eligendi deserunt, iusto natus
                                molestias!</p>
                        </div>
                        <div class="col-md-6">
                            <p>Quas praesentium dolore unde delectus, nemo accusantium, qui ab illum debitis assumenda
                                tempore molestias ipsam, eveniet repellendus officiis in vel, explicabo quos
                                necessitatibus atque doloremque. Quae maiores delectus, magnam nam.</p>
                        </div>
                        <div class="col-md-12 fh5co-social">
                            <a href="#"><i class="icon-envelope"></i></a>
                            <a href="#"><i class="icon-twitter"></i></a>
                            <a href="#"><i class="icon-linkedin"></i></a>
                            <a href="#"><i class="icon-instagram"></i></a>
                            <a href="#"><i class="icon-google-plus"></i></a>
                        </div>
                        <div class="col-md-12" style="margin-top: 40px;">
                            <p>&copy; 2016 Free HTML5 Template. All Rights Reserved. Designed by </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="fh5co-image-grid">
        <div class="grid">
            <div class="grid-sizer"></div>
            @foreach($photo as $value)
            <div class="grid-item item animate-box" data-animate-effect="fadeIn">
                <a href="{{ $value->url }}" class="image-popup" title="Name of photo or title here">
                    <div class="img-wrap">
                        <img src="{{ $value->url }}" alt="" class="img-responsive">
                    </div>
                    <div class="text-wrap">
                        <div class="text-inner popup">
                            <div>
                                {{--名称--}}
                                <h2>{{ $value->name }}</h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

</div>


@include('home.photo.foot')