@extends('includes.layout')

@section('content')
<!--================ Start Home Banner Area =================-->
<!--section class="">
	<div class="row">
		<div class="col-md-12">
			<div class="text-image">
				<div class="small-text mb-2">Show</div>
				<div class="text-image-spec mb-3">  </div>
				<div class="sentence mb-3">The Official soundtrack of getting you where you need to be</div>
				<div class="play-icon">

						<a href=""> <div class="play-decor">Watch</div></a>

				</div>
			</div>
			<div class="image-background-two"></div>

		</div>
	</div>

</section-->


<!--================ Start Top Show Area =================-->
<section>
    <div class="popular_courses">
        @include('includes.alert')
        <div>
            <div class="row justify-content-center m-0">
                <div class="col-lg-5">
                </div>
            </div>
            <div class="">
                <h5 class="pl-3 mt-0" style="color: #faa32b;">Search results for {{ $query }} </h5>
            </div>
            <div class="row m-0">
                <!-- single course -->

                @foreach ($search_items as $item)

                <div class="col-md-2">
                    <a href="{{ url('watch/'.$item->id.'/'.\Illuminate\Support\Str::slug($item->title,'-')) }}" >
                        <img class="img-fluid m-0" src="{{ $item->url }}" alt=""/>

                        <figcaption class="figure-caption pt-0"style=" height: 35px;"> {{ $item->title }}</figcaption>
                        <figcaption class="figure-caption pt-2" style="color:grey; font-size:12px;">{{ date_format(new DateTime($item->date_added),"d-m-Y H:i:s") }}</figcaption>
                    </a>
                </div>
                @endforeach

            </div>
        </div>

    </div>
</section>
<!--================ End Top Show Area =================-->
@endsection
@section('js')

@endsection

