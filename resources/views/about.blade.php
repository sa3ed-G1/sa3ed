@extends('layout.master')
@section('content')
    {{--  --}}
    <section class="page-title bg-1">
        <div class="container">
            <div class="columns">
                <div class="column is-12">
                    <div class="block has-text-centered">
                        <span class="text-white">who we are</span>
                        <h1 class="is-capitalize text-lg">About Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--  --}}
    <section class="section about-page">
        <div class="container">
            <div class="columns is-align-items-center">
                <div class="column is-4-desktop is-5-tablet">
                    <div class="about-item-img">
                        <img src="https://global.unitednations.entermediadb.net/assets/mediadb/services/module/asset/downloads/preset/assets/2014/03/18742/image1170x530cropped.jpg"
                            alt="" class=" w-100">
                    </div>
                </div>

                <div class="column is-8-desktop is-7-tablet">
                    <div class="about-item-content pl-5">
                        <h2 class="mb-5 content-title"> Welcome to Sa3ed Organization</h2>
                        <p class="is-size-5 mb-4">Sa3ed Charite is the Jordan #1 fundraising site forcharitable causes.
                            Raise money for over 1.5 thousand charities.</p>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        {{-- <a href="#" class="btn btn-main is-rounded">Learn More</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--  --}}
    <div class="section pt-0">
        <div class="container">
            <div class="columns is-justify-content-center">
                <div class="column is-8-desktop is-12-tablet">
                    <div class="content has-text-centered">
                        <h2 class="content-title mb-5">Our Partners</h2>
                        <p>Some of the amazing charities & companies that gives back to the community.</p>
                    </div>
                </div>
            </div>

            <div class="clients-item-wrap mt-5">
                <div class="columns is-multiline">
                    <div class="column is-3-desktop is-6-tablet">
                        <a href="#" class="is-block has-text-centered">
                            <img src="images/clients/client1.png" alt="" class=" ">
                        </a>
                    </div>

                    <div class="column is-3-desktop is-6-tablet">
                        <a href="#" class="is-block has-text-centered">
                            <img src="images/clients/client2.png" alt="" class="">
                        </a>
                    </div>

                    <div class="column is-3-desktop is-6-tablet">
                        <a href="#" class="is-block has-text-centered">
                            <img src="images/clients/client5.png" alt="" class="">
                        </a>
                    </div>

                    <div class="column is-3-desktop is-6-tablet">
                        <a href="#" class="is-block has-text-centered">
                            <img src="images/clients/client4.png" alt="" class="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--  --}}

    {{-- <section class="section feature pb-0">
        <div class="container">
            <div class="columns is-gapless is-multiline">
                <div class="column is-4-desktop is-4-tablet">
                    <div class="feature-inner">
                        <i class="icofont-home"></i>
                        <h4>Founded in 1962</h4>
                        <p class="mb-4">Work Since 1987 with Pride!!</p>
                        <p>Cum voluptas tenetur, voluptatibus mollitia odio sint, alias debitis quasi ut commodo consequat.
                        </p>
                    </div>
                </div>
                <div class="column is-4-desktop is-4-tablet">
                    <div class="feature-inner">
                        <i class="icofont-web"></i>
                        <h4>Our History</h4>
                        <p class="mb-4">Mission to make smile the world</p>
                        <p>Cum voluptas tenetur, voluptatibus mollitia odio sint, alias debitis quasi ut commodo consequat.
                        </p>
                    </div>
                </div>
                <div class="column is-4-desktop is-4-tablet">
                    <div class="feature-inner">
                        <i class="icofont-users"></i>
                        <h4>Large Community</h4>
                        <p class="mb-4">Join our community & help others</p>
                        <p>Cum voluptas tenetur, voluptatibus mollitia odio sint, alias debitis quasi ut commodo consequat.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}
    {{--  --}}

    <!--  Section Services Start -->
    <section id="team" class="section team">
        <div class="container">
            <div class="columns is-desktop is-justify-content-center">
                <div class="column is-7-desktop has-text-centered">
                    <div class="section-title">
                        <span class="h6 text-color">Founders</span>
                        <h2 class="mt-4 content-title">To whom helped making dreams come true , Thank You</h2>
                    </div>
                </div>
            </div>

            <div class="columns is-multiline is-justify-content-center">
                <div class="column is-3-desktop is-6-tablet">
                    <div class="team-item-wrap">
                        <div class="team-item is-relative">
                            <img src="images/team/volunteer-img1.1.jpg" alt="" class=" w-100">
                            <div class="team-img-hover">
                                <ul class="team-social list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" class="facebook"><i class="icofont-facebook"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="twitter"><i class="icofont-twitter"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="instagram"><i class="icofont-instagram"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="linkedin"><i class="icofont-linkedin"
                                                aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-item-content">
                            <h4 class="mt-3 mb-0 is-capitalize">Justin hammer</h4>
                            <p>Student</p>
                        </div>
                    </div>
                </div>

                <div class="column is-3-desktop is-6-tablet">
                    <div class="team-item-wrap">
                        <div class="team-item is-relative">
                            <img src="images/team/volunteer-img1.2.jpg" alt="" class=" w-100">
                            <div class="team-img-hover">
                                <ul class="team-social list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" class="facebook"><i class="icofont-facebook"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="twitter"><i class="icofont-twitter"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="instagram"><i class="icofont-instagram"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="linkedin"><i class="icofont-linkedin"
                                                aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-item-content">
                            <h4 class="mt-3 mb-0 is-capitalize">Jason roy</h4>
                            <p>Businessman</p>
                        </div>
                    </div>
                </div>

                <div class="column is-3-desktop is-6-tablet">
                    <div class="team-item-wrap ">
                        <div class="team-item is-relative">
                            <img src="images/team/volunteer-img1.3.jpg" alt="" class=" w-100">
                            <div class="team-img-hover">
                                <ul class="team-social list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" class="facebook"><i class="icofont-facebook"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="twitter"><i class="icofont-twitter"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="instagram"><i class="icofont-instagram"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="linkedin"><i class="icofont-linkedin"
                                                aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-item-content">
                            <h4 class="mt-3 mb-0 is-capitalize">Henry oswald</h4>
                            <p>CO founder</p>
                        </div>
                    </div>
                </div>

                <div class="column is-3-desktop is-6-tablet">
                    <div class="team-item-wrap">
                        <div class="team-item is-relative">
                            <img src="images/team/volunteer-img1.2.jpg" alt="" class=" w-100">
                            <div class="team-img-hover">
                                <ul class="team-social list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" class="facebook"><i class="icofont-facebook"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="twitter"><i class="icofont-twitter"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="instagram"><i class="icofont-instagram"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="linkedin"><i class="icofont-linkedin"
                                                aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-item-content">
                            <h4 class="mt-3 mb-0 is-capitalize">Jason roy</h4>
                            <p>Businessman</p>
                        </div>
                    </div>
                </div>

                <div class="column is-3-desktop is-6-tablet">
                    <div class="team-item-wrap">
                        <div class="team-item is-relative">
                            <img src="images/team/volunteer-img1.1.jpg" alt="" class=" w-100">
                            <div class="team-img-hover">
                                <ul class="team-social list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" class="facebook"><i class="icofont-facebook"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="twitter"><i class="icofont-twitter"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="instagram"><i class="icofont-instagram"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="linkedin"><i class="icofont-linkedin"
                                                aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-item-content">
                            <h4 class="mt-3 mb-0 is-capitalize">Justin hammer</h4>
                            <p>Student</p>
                        </div>
                    </div>
                </div>

                <div class="column is-3-desktop is-6-tablet">
                    <div class="team-item-wrap ">
                        <div class="team-item is-relative">
                            <img src="images/team/volunteer-img1.3.jpg" alt="" class=" w-100">
                            <div class="team-img-hover">
                                <ul class="team-social list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" class="facebook"><i class="icofont-facebook"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="twitter"><i class="icofont-twitter"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="instagram"><i class="icofont-instagram"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="linkedin"><i class="icofont-linkedin"
                                                aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-item-content">
                            <h4 class="mt-3 mb-0 is-capitalize">Henry oswald</h4>
                            <p>CO founder</p>
                        </div>
                    </div>
                </div>

                <div class="column is-3-desktop is-6-tablet">
                    <div class="team-item-wrap ">
                        <div class="team-item is-relative">
                            <img src="images/team/volunteer-img1.3.jpg" alt="" class=" w-100">
                            <div class="team-img-hover">
                                <ul class="team-social list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" class="facebook"><i class="icofont-facebook"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="twitter"><i class="icofont-twitter"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="instagram"><i class="icofont-instagram"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="linkedin"><i class="icofont-linkedin"
                                                aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-item-content">
                            <h4 class="mt-3 mb-0 is-capitalize">Henry oswald</h4>
                            <p>CO founder</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="column lg-12">
                    <div class="has-text-centered">
                        {{-- <a href="volunteer.html" class="btn btn-main is-rounded">Become a volunteer</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Section Services End -->
    {{-- <div class="cta-block section">
	<div class="container">
		<div class="columns is-justify-content-center ">
			<div class="column is-7-desktop is-12-tablet">
				<div class="cta-content has-text-centered">
					<i class="icofont-diamond text-lg text-color"></i>
					<h2 class="text-white text-lg mb-6 mt-4">We can’t help everyone, but everyone can help someone</h2>
					<a href="donation.html" class="btn btn-main is-rounded">Make a donation</a>
				</div>
			</div>
		</div>
	</div>
</div> --}}
    {{-- 
<section class="section gallery">
	<div class="container">
		<div class="columns is-justify-content-center">
			<div class="column is-8-desktop is-10-tablet">
				<div class="section-title has-text-centered">
					<span class="text-color">Our Gallery</span>
					<h2 class="mt-4 mb-5 is-relative content-title">We connect with people across different sectors. we take risksand we always keep learning.</h2>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="gallery-wrap">
			<div class="columns is-multiline">
				<div class="column is-4-desktop is-12-tablet">
					<div class="gallery-item">
						<a href="images/gallery/1.jpg" class="gallery-popup">
							<img src="images/gallery/1.jpg" alt="" class=" w-100">
						</a>
					</div>
				</div>
				<div class="column is-4-desktop is-12-tablet">
					<div class="gallery-item">
						<a href="images/gallery/2.jpg" class="gallery-popup">
							<img src="images/gallery/2.jpg" alt="" class=" w-100">
						</a>
					</div>
				</div>
				<div class="column is-4-desktop is-12-tablet">
					<div class="gallery-item">
						<a href="images/gallery/3.jpg" class="gallery-popup">
							<img src="images/gallery/3.jpg" alt="" class=" w-100">
						</a>
					</div>
				</div>
				<div class="column is-4-desktop is-12-tablet">
					<div class="gallery-item">
						<a href="images/gallery/4.jpg" class="gallery-popup">
							<img src="images/gallery/4.jpg" alt="" class=" w-100">
						</a>
					</div>
				</div>

				<div class="column is-4-desktop is-12-tablet">
					<div class="gallery-item">
						<a href="images/gallery/5.jpg" class="gallery-popup">
							<img src="images/gallery/5.jpg" alt="" class=" w-100">
						</a>
					</div>
				</div>
				<div class="column is-4-desktop is-12-tablet">
					<div class="gallery-item">
						<a href="images/gallery/6.jpg" class="gallery-popup">
							<img src="images/gallery/6.jpg" alt="" class=" w-100">
						</a>
					</div>
				</div>
				<div class="column is-6-desktop is-12-tablet">
					<div class="gallery-item">
						<a href="images/gallery/9.jpg" class="gallery-popup">
							<img src="images/gallery/9.jpg" alt="" class=" w-100">
						</a>
					</div>
				</div>
				<div class="column is-6-desktop is-12-tablet">
					<div class="gallery-item">
						<a href="images/gallery/8.jpg" class="gallery-popup">
							<img src="images/gallery/8.jpg" alt="" class=" w-100">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> --}}

    <section>
        <div class="container">
            <div class="column">
                <div class="column lg-12">
                    <div class="section-divider"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
