<!-- Compiled and minified JavaScript -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>



<script type="text/javascript" src="{{ asset('js/jquery/jquery.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/materialize/materialize.min.js') }}"></script>





<script>
    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        height: 561,
        indicators: true
    });
    $(document).ready(function() {
        $('.collapsible').collapsible();
    });
    $(document).ready(function() {

        $('.sidenav').sidenav();

    });
    $('.dropdown-trigger').dropdown({
        closeOnClick: false,
        focusedIndex: true,
        autoTrigger: true,
    });
</script>



{{--



<!-- Compiled and minified CSS -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

Import Google Icon Font

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!--Import materialize.css-->

<link type="text/css" rel="stylesheet" href="css/materialize/css/materialize.min.css"  media="screen,projection"/>

<script type="text/javascript" src="css/materialize/js/materialize.min.js"></script>



--}}