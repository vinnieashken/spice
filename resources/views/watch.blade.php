
@extends('includes.layout')

@section('content')
<!--================ Start Home Banner Area =================-->
<section class="">
    <div class="row">

        <div class="col-md-12">
            @include('includes.alert')
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= isset($videoid) ? $videoid :'' ?>?rel=0" allowfullscreen></iframe>
            </div>

        </div>
    </div>


</section>
<!--================ End Home Banner Area =================-->
@endsection
@section('js')

@endsection
