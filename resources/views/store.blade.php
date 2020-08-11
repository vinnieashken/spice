@extends('includes.layout')

@section('pagecss')
    <link rel="stylesheet" href="{{ asset('assets/css/style-two.css') }}"/>
@endsection
@section('content')
    <section>
        <div class="site-section" id="products-section">
            @include('includes.alert')
            <div class="container">
                <div class="row mb-5 justify-content-center">
                    <div class="col-md-6 text-center mt-5">
                        <h2 class="section-title mb-3">Our Products</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="product-item">
                            <figure>
                                <img src="{{ asset('assets/images/model_1_bg.jpg') }}" alt="Image" class="img-fluid">
                            </figure>
                            <div class="px-4">
                                <h3><a href="#">Wild West Hoodie</a></h3>
                                <div class="mb-3">
                                    <span class="meta-icons mr-3"><a href="#" class="mr-2"><span
                                                class="icon-star text-warning"></span></a> 5.0</span>
                                    <span class="meta-icons wishlist"><a href="#" class="mr-2"><span
                                                class="icon-heart"></span></a> 29</span>
                                </div>
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                <div>
                                    <a href="#" class="btn btn-black mr-1 rounded-0">Ksh 2000/=</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="product-item">
                            <figure>
                                <img src="{{ asset('assets/images/model_2_bg.jpg') }}" alt="Image" class="img-fluid">
                            </figure>
                            <div class="px-4">
                                <h3><a href="#">Wild West Hoodie</a></h3>
                                <div class="mb-3">
                                    <span class="meta-icons mr-3"><a href="#" class="mr-2"><span
                                                class="icon-star text-warning"></span></a> 5.0</span>
                                    <span class="meta-icons wishlist active"><a href="#" class="mr-2"><span
                                                class="icon-heart"></span></a> 29</span>
                                </div>
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                <div>
                                    <a href="#" class="btn btn-black mr-1 rounded-0">Ksh 2000/=</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="product-item">
                            <figure>
                                <img src="{{ asset('assets/images/model_3_bg.jpg') }}" alt="Image" class="img-fluid">
                            </figure>
                            <div class="px-4">
                                <h3><a href="#">Wild West Hoodie</a></h3>
                                <div class="mb-3">
                                    <span class="meta-icons mr-3"><a href="#" class="mr-2"><span
                                                class="icon-star text-warning"></span></a> 5.0</span>
                                    <span class="meta-icons wishlist"><a href="#" class="mr-2"><span
                                                class="icon-heart"></span></a> 29</span>
                                </div>
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                <div>
                                    <a href="#" class="btn btn-black mr-1 rounded-0">Ksh 2000/=</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="product-item">
                            <figure>
                                <img src="{{ asset('assets/images/model_4_bg.jpg') }}" alt="Image" class="img-fluid">
                            </figure>
                            <div class="px-4">
                                <h3><a href="#">Wild West Hoodie</a></h3>
                                <div class="mb-3">
                                    <span class="meta-icons mr-3"><a href="#" class="mr-2"><span
                                                class="icon-star text-warning"></span></a> 5.0</span>
                                    <span class="meta-icons wishlist"><a href="#" class="mr-2"><span
                                                class="icon-heart"></span></a> 29</span>
                                </div>
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                <div>
                                    <a href="#" class="btn btn-black mr-1 rounded-0">Ksh 2000/=</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="product-item">
                            <figure>
                                <img src="{{ asset('assets/images/model_5_bg.jpg') }}" alt="Image" class="img-fluid">
                            </figure>
                            <div class="px-4">
                                <h3><a href="#">Wild West Hoodie</a></h3>
                                <div class="mb-3">
                                    <span class="meta-icons mr-3"><a href="#" class="mr-2"><span
                                                class="icon-star text-warning"></span></a> 5.0</span>
                                    <span class="meta-icons wishlist"><a href="#" class="mr-2"><span
                                                class="icon-heart"></span></a> 29</span>
                                </div>
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                <div>
                                    <a href="#" class="btn btn-black mr-1 rounded-0">Ksh 2000/=</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="product-item">
                            <figure>
                                <img src="{{ asset('assets/images/product_1_bg.jpg') }}" alt="Image" class="img-fluid">
                            </figure>
                            <div class="px-4">
                                <h3><a href="#">Wild West Hoodie</a></h3>
                                <div class="mb-3">
                                    <span class="meta-icons mr-3"><a href="#" class="mr-2"><span
                                                class="icon-star text-warning"></span></a> 5.0</span>
                                    <span class="meta-icons wishlist"><a href="#" class="mr-2"><span
                                                class="icon-heart"></span></a> 29</span>
                                </div>
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                <div>
                                    <a href="#" class="btn btn-black mr-1 rounded-0">Ksh 2000/=</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="site-blocks-cover inner-page-cover overlay get-notification"  style="background-image: url(assets/images/hero_2.jpg); background-attachment: fixed;" data-aos="fade">
            <div class="container">

                <div class="row align-items-center justify-content-center">
                    <form class="col-md-7" method="post">
                        <h2>Get notified on each new merchandise updates.</h2>
                        <div class="d-flex mb-4">
                            <input type="text" class="form-control rounded-0" placeholder="Enter your email address">
                            <input type="submit" class="btn btn-white btn-outline-white rounded-0" value="Subscribe">
                        </div>
                        <p>  </p>
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
@section('js')

@endsection

