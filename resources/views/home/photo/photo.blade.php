@include('home.photo.heade')

<div id="fh5co-page">
    {{--<div class="aside-toggle btn-circle">--}}
        {{--<a href="#"><span></span><em>About</em></a>--}}
    {{--</div>--}}

    @include('home.photo.about')

    <div class="container-fluid" id="fh5co-image-grid">
        <div class="grid">
            <div class="grid-sizer"></div>

            @foreach($photo as $value)
            <div class="grid-item item animate-box" data-animate-effect="fadeIn">
                <a href="{{ url('photo/single')."?category=$value->category" }}">
                    <div class="img-wrap">
                        <img src="{{ $value->url }}" alt="" class="img-responsive">
                    </div>
                    <div class="text-wrap">
                        <div class="text-inner">
                            <div>
                                {{--这里是分类名称--}}
                                <h2>{{ $category[$value->category]->name }}</h2>
                                {{--分类数据量--}}
                                <span>{{ $value->count }} photos</span>
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