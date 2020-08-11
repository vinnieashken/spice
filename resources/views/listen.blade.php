
@extends('includes.layout')

@section('content')
    <!--================ Start Home Banner Area =================-->
    <section class="">

        <div class="row">
            <div class="col-md-12 ">
                @include('includes.alert')
                <div class="text-image-two">
                    <div class="small-text mb-2 ">Listen</div>
                    <div class="text-image-spec">Live</div>
                </div>
                <div class="image-background-two"></div>
            </div>
        </div>

    </section>
    <!--================ End Home Banner Area =================-->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <audio id="myAudio" controls=""
                           style="width: 100%;box-shadow: 0px 13px 32px -11px #b22f23;border-radius: 40px;/* background: black!important; */border: 3px solid #faa32b;">
                        <source src="http://streamingv2.shoutcast.com/spice-radio-944" type="audio/ogg">
                        <source src="http://streamingv2.shoutcast.com/spice-radio-944" type="audio/mpeg">
                    </audio>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('js')

@endsection
