<!-- <link rel="manifest" href="site.webmanifest"> -->
<link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('my_assets/img/favicon.png')}}">
<!-- Place favicon.ico in the root directory -->

<!-- CSS here -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="{{ URL::asset('my_assets/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{ URL::asset('my_assets/css/magnific-popup.css')}}">
<link rel="stylesheet" href="{{ URL::asset('my_assets/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{ URL::asset('my_assets/css/themify-icons.css')}}">
<link rel="stylesheet" href="{{ URL::asset('my_assets/css/nice-select.css')}}">
<link rel="stylesheet" href="{{ URL::asset('my_assets/css/flaticon.css')}}">
<link rel="stylesheet" href="{{ URL::asset('my_assets/css/gijgo.css')}}">
<link rel="stylesheet" href="{{ URL::asset('my_assets/css/animate.css')}}">
<link rel="stylesheet" href="{{ URL::asset('my_assets/css/slick.css')}}">
<link rel="stylesheet" href="{{ URL::asset('my_assets/css/slicknav.css')}}">
<link rel="stylesheet" href="{{ URL::asset('my_assets/css/style.css')}}">
<style>
    .module{
        opacity: 0;
    }
    .come-in {
        transform: translateY(150px);
        animation: come-in 1.5s ease forwards;
    }
    .come-in:nth-child(odd) {
        animation-duration: 0.5s; /* So they look staggered */
    }

    @keyframes come-in {
        to {
            transform: translateY(0);
            opacity:1;
        }

    }



    .moduleZ{
        opacity: 0;


    }
    .zoom-in {
        transform: scale(0.5);
        animation: zoom-in 1.5s ease forwards;
    }
    .zoom-in:nth-child(odd) {
        animation-duration: 0.5s; /* So they look staggered */
    }

    @keyframes zoom-in {
        to {
            transform: scale(1);
            opacity:1;
        }
    }

    .moduleL{
        opacity: 0;


    }
    .left-in {
        transform: translateX(-100%);
        animation: left-in 2s ease-in forwards;
    }
    .left-in:nth-child(odd) {
        animation-duration: 1s; /* So they look staggered */
    }

    @keyframes left-in {
        to {
            transform: translateX(0);
            opacity:1;
        }
    }
</style>
<!-- <link rel="stylesheet" href="css/responsive.css')}}'"> -->
