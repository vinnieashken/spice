

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/owl-carousel-thumb.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets/js/mail-script.js') }}"></script>

<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="{{ asset('assets/js/gmaps.min.js') }}"></script>
<script src="{{ asset('assets/js/theme.js') }}"></script>

@if(1 == 2)
<script src="{{ asset('assets/js/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/js/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('assets/js/js/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/js/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('assets/js/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/js/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('assets/js/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('assets/js/js/aos.js') }}"></script>
<script src="{{ asset('assets/js/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('assets/js/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('assets/js/js/main.js') }}"></script>
@endif
<!-- new script -->
<script type="text/javascript">
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }

    function openNavMob() {
        document.getElementById("mySidenavMob").style.width = "250px";
    }

    function closeNavMob() {
        document.getElementById("mySidenavMob").style.width = "0";
    }
</script>
<script type="text/javascript">
    function openSearch() {
        document.getElementById("myOverlay").style.display = "block";
    }

    function closeSearch() {
        document.getElementById("myOverlay").style.display = "none";
    }
</script>
<!-- script -->
<script>
    // Get the audio element with id="myAudio"
    var aud = document.getElementById("myAudio");

    // Assign an ontimeupdate event to the audio element, and execute a function if the current playback position has changed
    aud.ontimeupdate = function () {
        myFunction()
    };

    function myFunction() {
        // Display the current position of the audio in a p element with id="demo"
        document.getElementById("demo").innerHTML = aud.currentTime;
    }
</script>
