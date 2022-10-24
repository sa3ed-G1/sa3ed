<!doctype html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="WishFund,business,company,agency,multipurpose,modern,bootstrap4">

    <meta name="author" content="themefisher.com">

    <!-- theme meta -->
    <meta name="theme-name" content="wishfund-bulma" />

    <title>@yield('title', 'SA3ED')</title>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />

    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="../plugins/bulma/bulma.min.css">
    <!-- Icon Font Css -->
    <link rel="stylesheet" href="../plugins/themify/css/themify-icons.css">
    <link rel="stylesheet" href="../plugins/icofont/icofont.css">
    <link rel="stylesheet" href="../plugins/magnific-popup/dist/magnific-popup.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="../plugins/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="../plugins/slick-carousel/slick/slick-theme.css">
    <link rel="stylesheet" href="../plugins/modal-video/modal-video.min.css">

    {{-- search bar new --}}
    {{-- <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,200,0,0" /> --}}

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="../css/style.css">
    @yield('head')
</head>

<body>

    <!-- Header Start -->
    <header class="navigation">
        <div class="header-top ">
            <div class="container">
                <div class="columns is-gapless is-justify-content-space-between is-align-items-center">
                    <div class="column is-6-desktop is-4-tablet has-text-left-desktop has-text-centered-mobile">
                        <div class="header-top-info">
                            <a href="tel:00962778086316"><i
                                    class="icofont-phone mr-2"></i><span>+962-778-086-316</span></a>
                            <a href="tel:00962786259075"><i
                                    class="icofont-phone mr-2"></i><span>+962-786-25-9075</span></a>
                            <a href="mailto:sa3ed1922@gmail.com"><i
                                    class="icofont-email mr-2"></i><span>sa3ed1922@gmail.com</span></a>
                        </div>
                    </div>
                    <div class="column is-6-desktop is-8-tablet">
                        <div class="header-top-right has-text-right-tablet has-text-centered-mobile">
                            <a href="mailto:sa3ed1922@gmail.com" target=""><i class="fa-brands fa-google"></i></a>
                            <a href="https://web.facebook.com/profile.php?id=100086828449609" target="_blank"><i
                                    class="icofont-facebook"></i></a>
                            <a href="https://twitter.com/sa3ed_na" target="_blank"><i class="icofont-twitter"></i></a>
                            <a href="/events" class="top-btn">Donate Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav id="navbar" class="navbar main-nav">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="/">
                        <img style="transform: scale(1.865489513590)" src="../images/logo.png" alt="logo">
                    </a>
                    <button role="button" class="navbar-burger burger" data-hidden="true" data-target="navigation">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </button>
                </div>

                <div class="navbar-menu mr-0" id="navigation">
                    <ul class="navbar-end">
                        <li class="navbar-item">
                            <a class="navbar-link" href="/">Home</a>
                        </li>

                        <li class="navbar-item">
                            <a class="navbar-link" href="/about">About</a>
                        </li>
                        <li class="navbar-item">
                            <a class="navbar-link" href="/events">Events</a>
                        </li>

                        <li class="navbar-item">
                            <a class="navbar-link" href="/contact">Contact</a>
                        </li>
                        @auth
                            <li class="navbar-item has-dropdown is-hoverable">
                                <a class="navbar-link">{{ auth()->user()->name }}<span class="ml-1 icon"><i
                                            class="fas fa-home"></i></span></a>
                                <div class="navbar-dropdown">
                                    <a class="navbar-item" href="/profile">Profile</a>
                                    <a class="navbar-item" href="/logout">Logout</a>
                                </div>
                            </li>
                            {{-- <li class="navbar-item">
                                <a class="navbar-link" href="/logout">Profile</a>
                            </li>
                            <li class="navbar-item">
                                <a class="navbar-link" href="/logout">Logout</a>
                            </li> --}}
                        @else
                            <li class="navbar-item">
                                <a class="navbar-link" href="/register">Register</a>
                            </li>
                        @endauth

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>




        @yield('content')


    </main>
    <!-- footer Start -->
    <footer class="footer section">
        <div class="container">
            <div class="columns is-multiline">
                <div class="column is-4-desktop is-6-tablet">
                    <div class="footer-widget widget">
                        <h4 class="is-capitalize mb-4 text-white">Company</h4>
                        <p>Flat 20, alabdalli <br>Amman-Jordan</p>

                        <ul class="list-unstyled footer-menu mt-4">
                            <li><a href="#"><i class="icofont-phone"></i>+(969) 587-3407</a></li>
                            <li><a href="#"><i class="icofont-email"></i>Sa3ed@gmail.com</a></li>
                        </ul>
                        <ul class="list-inline footer-socials">
                            <li class="list-inline-item"><a target="_blank"
                                    href="https://web.facebook.com/profile.php?id=100086828449609"><i
                                        class="icofont-facebook"></i></a></li>
                            <li class="list-inline-item"><a target="_blank" href="https://twitter.com/sa3ed_na"><i
                                        class="icofont-twitter"></i></a></li>

                        </ul>
                    </div>
                </div>

                <div class="column is-2-desktop is-6-tablet">
                    <div class="widget footer-widget">
                        <h4 class="is-capitalize mb-4 text-white">Quick Links</h4>

                        <ul class="list-unstyled footer-menu lh-35">
                            <li><a href="/about">About</a></li>
                            <li><a href="/events">Events</a></li>
                            <li><a href="/about#team">Team</a></li>
                            <li><a href="/contact">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <div class="column is-3-desktop is-6-tablet">
                    {{-- <div class="footer-widget widget">
                        <h4 class="is-capitalize mb-4 text-white">Subscribe Us</h4>
                        <p class="mb-4">Subscribe to get latest news article and resources </p>

                        <form action="#" class="sub-form">
                            <input type="text" class="input mb-4 text-white" placeholder="Subscribe Now ...">
                            <a href="#" class="btn btn-main btn-small is-rounded">subscribe</a>
                        </form>
                    </div> --}}
                </div>

                <div class="column is-3-desktop is-6-tablet">
                    <div class="widget footer-widget">
                        <h4 class="is-capitalize mb-4 text-white">Partners</h4>

                        <div class="gallery-wrap">
                            <div class="gallery-img">
                                <img src="images/clients/client1.jpg" alt="" class="">
                            </div>
                            <div class="gallery-img">
                                <img src="images/clients/client2.jpg" alt="" class="">
                            </div>
                            <div class="gallery-img">
                                <img src="images/clients/client3.png" alt="" class="">
                            </div>
                            <div class="gallery-img">
                                <img src="images/clients/client4.png"alt="" class="">
                            </div>
                            <div class="gallery-img">
                                <img src="images/clients/client5.png"alt="" class="">
                            </div>
                            <div class="gallery-img">
                                <img src="images/clients/client6.png" alt="" class="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-btm py-5">
                <div class="columns is-justify-content-center">
                    <div class="column is-12">
                        <div class="copyright has-text-centered">
                            <small>&copy; Copyright Reserved to Sa3ed by <a href="https://themefisher.com/"
                                    target="_blank" class="text-color">Sa3ed team</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!--
        Essential Scripts
        =====================================-->
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>

    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.js"></script>
    <script src="js/contact.js"></script>
    <!--  Magnific Popup-->
    <script src="plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="plugins/counterup/jquery.waypoints.min.js"></script>
    <script src="plugins/counterup/jquery.counterup.min.js"></script>

    <script src="plugins/modal-video/jquery-modal-video.min.js"></script>

    <!-- Google Map -->
    <script src="plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap">
    </script>



    <script src="js/script.js"></script>
    @yield('script')
</body>

</html>
<!-- Header Close -->
