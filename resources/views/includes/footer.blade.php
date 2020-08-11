

@include('cookieConsent::index')
<!--================ End footer Area  =================-->
<footer class="footer  footer-dark bg-white mt-40">
    <section id="footer" class="footer-area"><hr class="my-4"><div class="container ">
            <div class="footer-widget pt-5  pb-120 "><div class="row">
                    <div class="mx-auto col-md-5 text-center" style="margin-bottom: 100px;">
                        <div class="footer-logo text-left mt-40 ">
                            <h3 class="getour">Get Our Newsletter</h3>
                            <p class="mt-10 mb-4 text-white">Subscribe to our newsletter and stay updated on the latest developments and special offers!</p>
                            <form action="{{ url('subscribe') }}" method="post">
                                @csrf
                                <input type="hidden" name="url" value="{{ \Illuminate\Support\Facades\URL::full() }}">
                                <input type="email" name="email" class="w-75" placeholder="Enter your email" required>
                                <button class="newslettericon" type="submit">
                                    <i class="">
                                        <img src="https://img.icons8.com/ios-filled/20/000000/chevron-right.png">
                                    </i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer"><div class=" pl-3 w-100" style="background-color: #101111 !important;">
                <div class="container">
                    <div class="row  w-100">
                        <div class="mx-auto col-xs-12">
                            <ul class="nav nav-inline ">
                                <li class="nav-item">
                                    <a class="nav-link active" href="http://www.standardmedia.co.ke/">THE STANDARD |</a></li><li class="nav-item">
                                    <a class="nav-link active" href="https://www.standardmedia.co.ke/ktnnews">KTN NEWS |</a></li><li class="nav-item">
                                    <a class="nav-link active" href="https://www.standardmedia.co.ke/radiomaisha">RADIO MAISHA |</a></li><li class="nav-item">
                                    <a class="nav-link" href="https://www.vas.standardmedia.co.ke/"> BULK SMS |</a></li><li class="nav-item">
                                    <a class="nav-link" href="https://www.tutorsoma.standardmedia.co.ke/">TUTORSOMA |</a></li><li class="nav-item">
                                    <a class="nav-link" href="https://newsstand.standardmedia.co.ke/">E-PAPER |</a></li><li class="nav-item border-0">
                                    <a class="nav-link" href="https://www.standardmedia.co.ke/corporate">CORPORATE |</a></li></ul></div></div></div>
            </div>
        </footer>
    </section>
    <div class=" py-3 " style="background: black;">
        <div class="container">

            <div class="d-md-flex align-items-center">
                <span class="text-white">© 2020 Standard Group PLC</span>

                <ul class="nav ml-lg-auto"><li class="nav-item">

                        <a class="text-white" href="https://new.standardmedia.co.ke/privacy-policy">Privacy policy</a>

                    </li><li class="nav-item ml-md-3">
                        <a class="text-white ml-4" href=" https://new.standardmedia.co.ke/terms-and-conditions">Terms &amp; Conditions</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<div class="modal fade" id="regModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="background:#fff !important">
            <div class="modal-header border-bottom-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center auth-logo mb-1">
                    <img src="https://www.standardmedia.co.ke/assets/images/logo.png" alt="Standard Digital Logo">
                </div>
                <div class="form-title text-center">
                    <h4>Register</h4>
                </div>
                <div class="d-flex flex-column text-center">
                    <form method="post" action="{{ url('/register') }}">
                        @csrf
                        <input type="hidden" name="url" value="{{ \Illuminate\Support\Facades\URL::full() }}">
                         <div class="form-group my-2">
                            <input type="text" required class="form-control" name="name" id="name" placeholder="Enter your full name...">
                        </div>
                        <div class="form-group my-2">
                            <input type="email" required class="form-control" name="email" id="email" placeholder="Enter your email address...">
                        </div>
                        <div class="form-group my-2">
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter your phone number...">
                        </div>
                        <div class="form-group my-2">
                            <input type="password" required class="form-control" name="password" id="password" placeholder="Enter your password...">
                        </div>
                        <div class="form-group my-2">
                            <input type="password" required class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirm your password...">
                        </div>
                        <button type="submit" class="btn btn-info btn-block btn-round btn_register">Register</button>
                    </form>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <div class="signup-section">I have an account? <a href="https://www.standardmedia.co.ke/subscription/sign-in" data-dismiss="modal" data-toggle="modal" data-target="#loginModal" class="login text-info"> Sign In</a>.</div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center auth-logo mb-1">
                    <img src="https://www.standardmedia.co.ke/assets/images/logo.png" alt="Standard Digital Logo">
                </div>
                <div class="form-title text-center">
                    <h4 class="my-2">Thanks for reading The Standard.</h4>
                </div>
                <div class="d-flex flex-column text-center">
                    <form method="post" action="{{ url('/login') }}">
                        @csrf
                        <input type="hidden" name="url" value="{{ \Illuminate\Support\Facades\URL::full() }}">
                        <div class="form-group my-2">
                            <input type="email" required class="form-control" name="email" id="email1" placeholder="Your email address...">
                        </div>
                        <div class="form-group my-2">
                            <input type="password" required class="form-control" name="password" id="password1" placeholder="Your password...">
                        </div>
                        <button type="submit" class="btn btn-info btn-block btn-round btn_login">Login</button>
                    </form>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <div class="signup-section">Not a member yet? <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#regModal" class="register text-info"> Sign Up</a>.</div>
                <div class="signup-section"><a href="#" data-dismiss="modal" data-toggle="modal" data-target="#forgotModal" class="register text-info"> Forgot Password</a>.</div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="forgotModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background:#fff !important">
            <div class="modal-header border-bottom-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center auth-logo mb-1">
                    <img src="https://www.standardmedia.co.ke/assets/images/logo.png" alt="Standard Digital Logo">
                </div>
                <div class="form-title text-center">
                    <h4>Forgot Password</h4>
                </div>
                <div class="d-flex flex-column text-center">
                    <form method="post" action="{{ url('/resetpassword') }}">
                        @csrf
                        <input type="hidden" name="url" value="{{ \Illuminate\Support\Facades\URL::full() }}">
                        <div class="form-group my-2">
                            <input type="email" required class="form-control" name="email" id="email2" placeholder="Your email address...">
                        </div>
                        <button type="submit" class="btn btn-info btn-block btn-round btn_forgotpw">Send Password Reset Link</button>
                    </form>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <div class="signup-section"><a href="#" data-dismiss="modal" data-toggle="modal" data-target="#loginModal" class="register text-info"> Log In</a>.</div>
            </div>
        </div>
    </div>
</div>

