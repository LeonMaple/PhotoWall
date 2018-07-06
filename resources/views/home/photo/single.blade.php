@include('home.photo.heade')


<div id="fh5co-page">

    {{--<div class="aside-toggle btn-circle">--}}
        {{--<a href="#"><span></span><em>About</em></a>--}}
    {{--</div>--}}

    <div class="back-to-home btn-circle">
        <a href="{{ url('photo') }}"><span></span><em>Back</em></a>
    </div>

    @include('home.photo.about')

    <div class="container-fluid" id="fh5co-image-grid">
        <div class="grid">
            <div class="grid-sizer"></div>
            @foreach($photo as $value)
            <div class="grid-item item animate-box" data-animate-effect="fadeIn">
                <a href="{{ $value->url }}" class="image-popup" title="{{ $value->name }}">
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