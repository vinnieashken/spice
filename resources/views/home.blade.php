@extends('includes.layout')

@section('content')
    <!--================ Start Home Banner Area =================-->
    <style>
        #headerPopup{
            width:75%;
            margin:0 auto;
        }

        #headerPopup iframe{
            width:100%;
            margin:0 auto;
        }
        .owl-nav{
            height: 1px;
        }
        .owl-next{

            margin-bottom: 5.625rem;
        }
        .owl-prev{
            margin-bottom: 5.625rem;
            margin-left: 93%;
            padding-left: 70px;

        }

        @media only screen and (max-width: 768px) {
            .mobile-shift{
                margin-top: 30%;
                height: 40vh;
            }
            .mobile-height-tw{
                height: 20vh;
            }

            .mobile-hide {
                visibility: hidden;
                display: none;
            }
            .navbar-collapse.show {
                margin: 20px 30px;
            }
            .collapsed{
                margin-right: 2%;
            }
        }
        @media only screen and (min-width: 992px) {

            .tw-feed-lg{
                height: 800px;
            }
            .player-height{
                height: 100%;
            }

        }
    </style>

    <section class="mt-5 mx-2 px-2 ">
        <div class="row">
            <div class="col-md-12 col-lg-9 mb-2 col-sm-12">

                @include('includes.alert')
                <div class="embed-responsive embed-responsive-16by9 mobile-shift player-height">
                    <iframe data-width="100%" class="embed-responsive-item" src="https://www.dailymotion.com/embed/video/x7eo9oe?autoPlay=1&queue-enable=false&pip-at-start=1" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>

            </div>
            <div class="col-lg-3 mobile-height-tw mobile-hide tw-feed-lg" >
                <!--div class="fb-page" data-href="https://www.facebook.com/SpiceFMKe/" style="max-height: 0px !important;"
                     data-tabs="timeline" data-width="430px" data-height="630px" data-small-header="false"
                     data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/SpiceFMKe/"
                                class="fb-xfbml-parse-ignore"><a
                            href="https://www.facebook.com/SpiceFMKe/">Aquachem Technologies Ltd</a></blockquote>
                </div-->
                <!--  <div style="    width: 100%;
                    overflow-y: scroll;
                    height: 790px;">
                            <div style="background-color: #fff;" class="fb-comments" data-href="https://www.spicefm.co.ke/" data-numposts="5" data-width="100%" data-order-by="time"></div>
                    </div> -->
                <!-- <script id="cid0020000248047204398" data-cfasync="false" async src="//st.chatango.com/js/gz/emb.js" style="width: 100%;height: 100%;">
                {"handle":"spicefmke","arch":"js","styles":{"a":"2e0101","b":100,"c":"FFFFFF","d":"FFFFFF","k":"2e0101",
                    "l":"2e0101","m":"2e0101","n":"FFFFFF","p":"10","q":"2e0101","r":100,"usricon":0.68,"surl":0,"allowpm":0,"fwtickm":1}}</script> -->
                <!-- <a class="twitter-timeline mobile-hide tw-feed-lg" data-height="99%" href="https://twitter.com/SpiceFMKE?ref_src=twsrc%5Etfw">Tweets by SpiceFMKE</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> -->
                <a class="twitter-timeline mobile-hide tw-feed-lg" data-height="99%" href="https://twitter.com/SpiceFMKE?ref_src=twsrc%5Etfw">Tweets by SpiceFMKE</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>

        </div>


    </section>
    <!--================ End Home Banner Area =================-->
    <section class="clearfix"></section>

    <!--================ Start Top Show Area =================-->
    @foreach ($order as $item)
        @foreach($playlists as $playlist)
            @if($item == $playlist->title )
                <div class="popular_courses pt-1 mt-1">
                <div>
                    <div class="row justify-content-center m-0">
                        <div class="col-lg-5">
                        </div>
                    </div>

                    <div class="row m-0">
                        <h5 class="pl-4 ml-5 m-0"  style="color: #faa32b;"><a href="{{ url('show/'.$playlist->id.'/'.\Illuminate\Support\Str::slug($playlist->title,'-')) }}" style="color: #e89729">{{ $playlist->title }} </a></h5>
                        <!-- single course -->
                        <div class="col-lg-12">
                            <div class="owl-carousel active_course ml-5 mr-5 mb-0 pb-0">

                               @foreach ( $VideoUtil->getLocalPlaylistVideos($playlist->id,100) as $item)
                                <div class="single_course" style="width:100%;height: 50%;">
                                    <a href="{{ url('watch/'.$item->id.'/'.\Illuminate\Support\Str::slug($item->title,'-')) }}" >
                                        <div class="course_head" style="background-image: linear-gradient(to bottom, rgba(245, 246, 252, 0), rgba(0, 0, 0, 0), rgba(0, 0, 0,0)), url('{{ $item->url }}');">

                                        </div>
                                        <figcaption class="figure-caption pt-2 pb-0"style="height: 25px">{{ $item->title }} </figcaption>
                                    </a>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            @endif
        @endforeach
    @endforeach
@endsection
@section('js')

@endsection
