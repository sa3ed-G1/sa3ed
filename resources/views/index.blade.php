@extends('layout.master')

@section('content')
    <section class="slider">
        <div class="container">
            <div class="columns is-justify-content-center">
                <div class="column is-9-desktop is-10-tablet">
                    <div class="block has-text-centered">
                        <span class="is-block mb-4 text-white is-capitalized">Small help can make change</span>
                        <h1 class="mb-5">New hope for <br>near future</h1>
                        <p class="mb-6">Your small contribution means a lot. Natus officia amet <br>accusamus repellat
                            magni reprehenderit dolorem.</p>
                        <a href="#" target="_blank" class="btn btn-main is-rounded">Donate Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Intro Start -->
    <section class="section intro">
        <div class="container">
            <div class="columns is-align-items-center is-desktop mb-6">
                <div class="column is-6-desktop">
                    <div class="section-title mb-0">
                        <span class="text-color">we are here</span>
                        <h2 class="mt-4 content-title"> We've been here in several <br>cities of Jordan</h2>
                    </div>
                </div>
                <div class="column is-6-desktop">
                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, dicta, iure. Esse quasi labore aperiam, dolorem amet voluptas soluta asperiores nostrum voluptate molestias numquam similique. Voluptate natus corporis ex, distinctio.</p> --}}
                </div>
            </div>
            <div class="columns is-multiline is-justify-content-center">
                <div class="column is-3-desktop is-6-tablet">
                    <div class="intro-item mb-5 mb-lg-0">
                        <img src="https://www.just.edu.jo/Conferences/asec/PublishingImages/Amman-Jordan-with-Roman-amphitheater%20(1).jpg"
                            alt="" class=" w-100">
                        <center>
                            <div>
                                <h4 class="mt-4 mb-3">Amman</h4>
                                <p>The amount of Projects <b>15</b></p>
                                <p>The amount of Donations <b>5,000</b></p>
                                <p>No. of Volunteer <b>25</b></p>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="column is-3-desktop is-6-tablet">
                    <div class="intro-item mb-5 mb-lg-0">
                        <img src="https://www.globalsistersreport.org/files/stories/images/jordan5%20%281000x750%29.jpg"
                            alt="" class=" w-100">
                        <center>
                            <div>
                                <h4 class="mt-4 mb-3">Zarqa</h4>
                                <p>The amount of projects <b>10</b></p>
                                <p>The amount of Donations <b>1,000</b></p>
                                <p>No. of Volunteer <b>25</b></p>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="column is-3-desktop is-6-tablet">
                    <div class="intro-item">
                        <img src="https://i.pinimg.com/736x/e0/5a/34/e05a3477a58ac454e827aac2ab2ec03c--famous-places-culture.jpg"
                            alt="" class=" w-100">
                        <center>
                            <div>
                                <h4 class="mt-4 mb-3">Irbid</h4>
                                <p>The amount of projects <b>5</b></p>
                                <p>The amount of Donations <b>2,000</b></p>
                                <p>No. of Volunteer <b>20</b></p>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="column is-3-desktop is-6-tablet">
                    <div class="intro-item">
                        <img src="https://www.wideworldtrips.com/wp-content/uploads/2020/05/mafraq-tourist-attractions.jpg"
                            alt="" class=" w-100">
                        <center>
                            <div>
                                <h4 class="mt-4 mb-3">Mafraq</h4>
                                <p>The amount of projects <b>7</b></p>
                                <p>The amount of Donations <b>3,000</b></p>
                                <p>No. of Volunteer <b>15</b></p>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section video">
        <div class="container">
            <div class="columns is-desktop">
                <div class="column is-8-desktop">
                    <div class="video-content">
                        <h2 class="mt-4 mb-6 is-relative text-lg text-white">We Make a Difference <br>in their Life</h2>
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="column is-12">
                    <div class="video-block">
                        <div class="img-block">
                            <img src="images/bg/bg-3.jpg" alt="">
                        </div>
                        {{-- <a data-video-id="sXoKSD8QJEA" class="videoplay"> --}}
                        {{-- <i class="icofont-ui-play"></i>  --}}
                        </a>
                    </div>
                </div>
            </div>

            <div class="counter-section">
                <div class="columns is-multiline">
                    <div class="column is-3-desktop is-6-tablet">
                        <div class="counter-item-2 pt-5">
                            <span class="counter-stat  text-color">40</span>
                            <p>No. of projects</p>
                        </div>
                    </div>
                    <div class="column is-3-desktop is-6-tablet">
                        <div class="counter-item-2 pt-5">
                            <span class="counter-stat has-text-weight-bold text-color">1,460</span>
                            <p>Active Volunteer</p>
                        </div>
                    </div>
                    <div class="column is-3-desktop is-6-tablet">
                        <div class="counter-item-2 pt-5">
                            <span class="counter-stat  text-color">10,000</span>
                            <p>Donation amount</p>
                        </div>
                    </div>
                    <div class="column is-3-desktop is-6-tablet">
                        <div class="counter-item-2 pt-5">
                            <span class="counter-stat text-color">1585</span>
                            <p> People Helped</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section gallery">
        <div class="container">
            <div class="columns is-justify-content-center">
                <div class="column is-8-desktop is-10-tablet">
                    <div class="section-title has-text-centered">
                        <span class="text-color">Our Gallery</span>
                        <h2 class="mt-4 mb-5 is-relative content-title">We connect with people across different sectors. we
                            take risksand we always keep learning.</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="gallery-wrap">
                <div class="columns is-multiline">
                    <div class="column is-4-desktop is-12-tablet">
                        <div class="gallery-item">
                            <a href="https://www.ico.org.ae/content/images/thumbs/0003074_-.jpeg" class="gallery-popup">
                                <img src="https://www.ico.org.ae/content/images/thumbs/0003074_-.jpeg" alt=""
                                    class=" w-100" style="height:400px;object-fit:cover;">
                            </a>
                        </div>
                    </div>
                    <div class="column is-4-desktop is-12-tablet">
                        <div class="gallery-item">
                            <a href="https://s3-eu-west-1.amazonaws.com/naua-live/project/preview-2201241137489QCZD.png"
                                class="gallery-popup">
                                <img src="https://s3-eu-west-1.amazonaws.com/naua-live/project/preview-2201241137489QCZD.png"
                                    alt="" class=" w-100"style="height:400px;object-fit:cover;">
                            </a>
                        </div>
                    </div>
                    <div class="column is-4-desktop is-12-tablet">
                        <div class="gallery-item">
                            <a href="https://i.pinimg.com/originals/54/ab/03/54ab037f994fa617022d5b97611f6e6d.jpg"
                                class="gallery-popup">
                                <img src="https://i.pinimg.com/originals/54/ab/03/54ab037f994fa617022d5b97611f6e6d.jpg"
                                    alt="" class=" w-100" style="height:400px;object-fit:cover;">
                            </a>
                        </div>
                    </div>
                    <div class="column is-4-desktop is-12-tablet">
                        <div class="gallery-item">
                            <a href="https://www.aljazeera.net/wp-content/uploads/2022/04/2323.jpeg?resize=1920%2C1440"
                                class="gallery-popup">
                                <img src="https://www.aljazeera.net/wp-content/uploads/2022/04/2323.jpeg?resize=1920%2C1440"
                                    alt="" class=" w-100"style="height:400px;object-fit:cover;">
                            </a>
                        </div>
                    </div>

                    <div class="column is-4-desktop is-12-tablet">
                        <div class="gallery-item">
                            <a href="https://www.cpf.jo/sites/default/files/styles/848x477/public/1_6.jpg?itok=bQY4aoPN"
                                class="gallery-popup">
                                <img src="https://www.cpf.jo/sites/default/files/styles/848x477/public/1_6.jpg?itok=bQY4aoPN"
                                    alt="" class=" w-100"style="height:400px;object-fit:cover;">
                            </a>
                        </div>
                    </div>
                    <div class="column is-4-desktop is-12-tablet">
                        <div class="gallery-item">
                            <a href="https://www.albawaba.com/sites/default/files/styles/d08_standard/public/im/Syria2/Dohuk_Syrian-Kurdish_children_refugee.jpg?itok=tj2xdC69&mrf-size=m"
                                class="gallery-popup">
                                <img src="https://www.albawaba.com/sites/default/files/styles/d08_standard/public/im/Syria2/Dohuk_Syrian-Kurdish_children_refugee.jpg?itok=tj2xdC69&mrf-size=m"
                                    alt="" class=" w-100"style="height:400px;object-fit:cover;">
                            </a>
                        </div>
                    </div>
                    <div class="column is-6-desktop is-12-tablet">
                        <div class="gallery-item">
                            <a href="http://www.humanitygate.com/thumb.php?src=uploads//images/5ef1cd432683449c6d15a0baf5518ada.png&w=843&h=492&zc=1"
                                class="gallery-popup">
                                <img src="http://www.humanitygate.com/thumb.php?src=uploads//images/5ef1cd432683449c6d15a0baf5518ada.png&w=843&h=492&zc=1"
                                    alt="" class=" w-100"style="height:400px;object-fit:cover;">
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
    </section>

    <section>
        <div class="container">
            <div class="column">
                <div class="column lg-12">
                    <div class="section-divider"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section About Start -->
    <section class="section causes pt-0">
        <div class="container">
            <div class="columns is-justify-content-center">
                <div class="column is-7-desktop is-8-tablet">
                    <div class="section-title has-text-centered">
                        <span class="text-color">Latest Events</span>
                        <h2 class="mt-4 mb-5 is-relative content-title">Our Recent Causes <br> to serve better</h2>
                        <p class="mb-5">We provide services in the area of IFRS and management reporting, helping
                            companies to reach their highest level.</p>
                    </div>
                </div>
            </div>

            <div class="columns is-multiline is-justify-content-center">
                @foreach ($threeEvent as $event)
                    <div class="column is-4-desktop is-6-tablet">
                        <div class="cause-item card event-item is-shadowless" style="border-radius: 10px">

                            <section
                                style="background:url('data:image/jpg;charset=utf8;base64, {{ $event->thumbnail }}') no-repeat 50% 50%; background-size: cover;"
                                class="page-title ">
                            </section>

                            <div class="card-body">
                                <h3 class="mb-4"><a href="/single-event/{{ $event->id }}">{{ $event->title }}</a>
                                </h3>
                                <ul class="list-inline border-bottom border-top py-3 mb-4">

                                    <li class="list-inline-item"><i
                                            class="icofont-check text-color mr-2"></i>Date:<span>{{ $event->date }}</span>
                                    </li>
                                    <li class="list-inline-item"><i
                                            class="icofont-check text-color mr-2"></i>Location:<span>{{ substr($event->location, 0, 30) }}</span>
                                    </li>
                                    {{-- <li class="list-inline-item"><i
                                            class="icofont-check text-color mr-2"></i>Organizer:<span>{{ $event->user->name }}</span>
                                    </li> --}}
                                </ul>
                                <p class="card-text mb-5">{{ substr($event->description, 0, 100) }}... <a
                                        href="single-event/{{ $event->id }}" style="font-weight: 700">More</a></p>
                                <a href="single-event/{{ $event->id }}" class="btn btn-main is-rounded">View Event</a>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- <div class="column is-4-desktop is-6-tablet">
				<div class="cause-item">
					<img src="images/about/image-2.jpg" class=" w-100" alt="...">

					<div class="card-body">
						<h3 class="mb-4"><a href="cause-single.html">Clean Drink Water</a></h3>

						<ul class="list-inline border-bottom border-top py-3 mb-4">
							<li class="list-inline-item"><i class="icofont-check text-color mr-2"></i>Location:<span>Amman-Jordan</span></li>
							<li class="list-inline-item"><i class="icofont-check text-color mr-2"></i>Date: <span>28-11-2022</span></li>
						</ul>
						<p class="card-text mb-5">Save poor child by supporting text below as a natural lead-in to additional content.</p>

						<a href="donation.html" class="btn btn-main is-rounded">Volunteer Now</a>
					</div>
				</div>
			</div> --}}
                {{-- <div class="column is-4-desktop is-6-tablet">
				<div class="cause-item">
					<img src="images/about/image-3.jpg" class=" w-100" alt="...">

					<div class="card-body">
						<h3 class="mb-4"><a href="cause-single.html">Fund for Education</a></h3>
						<ul class="list-inline border-bottom border-top py-3 mb-4">
							<li class="list-inline-item"><i class="icofont-check text-color mr-2"></i>Location:<span>Amman-Jordan</span></li>
							<li class="list-inline-item"><i class="icofont-check text-color mr-2"></i>Date: <span>28-11-2022</span></li>
							</ul>
						<p class="card-text mb-4">Save poor child by supporting text below as a natural lead-in to additional content. </p>
						{{-- <p class="card-text mb-4">Quia vitae ab maxime cum quod neque .</p> --}}

                {{-- <a href="donation.html" class="btn btn-main is-rounded">Volunteer Now</a>
					</div>
				</div>  --}}
            </div>
        </div>
        </div>
    </section>

    <!-- Section About End -->
    <div class="cta-block section">
        <div class="container">
            <div class="columns is-justify-content-center ">
                <div class="column is-7-desktop is-12-tablet">
                    <div class="cta-content has-text-centered">
                        <i class="icofont-diamond text-lg text-color"></i>
                        <h2 class="text-white text-lg mb-6 mt-4">We can’t help everyone, but everyone can help someone</h2>
                        <a href="donation" class="btn btn-main is-rounded">Make a donation</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- 
<section class="section latest-blog">
	<div class="container">
		<div class="columns is-justify-content-center is-desktop">
			<div class="column is-7-desktop has-text-centered">
				<div class="section-title">
					<span class="h6 text-color">Latest News</span>
					<h2 class="mt-4 content-title">Latest articles to enrich knowledge</h2>
				</div>
			</div>
		</div>

		<div class="columns is-multiline is-justify-content-center">
			<div class="column is-4-desktop is-6-tablet">
				<div class="blog-item">
					<img src="images/blog/blog_1.jpg" alt="" class="">

					<div class="card-body mt-2">
						<span class="text-sm text-color is-uppercase has-text-weight-bold">January 3, 2019</span>
						<h3 class="mb-3"><a href="blog-single.html" class="">We can make a difference in families lives</a></h3>
						<p class="mb-4">Aspernatur obcaecati unde, quasi nihil neque, voluptatem. Consectetur.</p>
					</div>
				</div>
			</div>

			<div class="column is-4-desktop is-6-tablet">
				<div class="blog-item">
					<img src="images/blog/blog_2.jpg" alt="" class="">

					<div class="card-body mt-2">
						<span class="text-sm text-color is-uppercase has-text-weight-bold">January 3, 2019</span>
						<h3 class="mb-3"><a href="blog-single.html" class="">A place where start new life with peace</a></h3>
						<p class="mb-4">Aspernatur obcaecati unde, quasi nihil neque, voluptatem. Consectetur.</p>
					</div>
				</div>
			</div>

			<div class="column is-4-desktop is-6-tablet">
				<div class="blog-item">
					<img src="images/blog/blog_3.jpg" alt="" class="">

					<div class="card-body mt-2">
						<span class="text-sm text-color is-uppercase has-text-weight-bold">January 3, 2019</span>
						<h3 class="mb-3"><a href="blog-single.html" class="">Build school for poor childrens</a></h3>
						<p class="mb-4">Aspernatur obcaecati unde, quasi nihil neque, voluptatem. Consectetur.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> --}}


    {{-- <div class="volunteer section ">
	<div class="container">
		<div class="columns is-multiline">
			<div class="column is-7-desktop is-12-tablet">
				<div class="volunteer-content">
					<img src="images/bg/image-5.jpg" alt="" class="">
					<h2 class="text-lg mb-5 mt-3">We can’t help everyone, but everyone can help someone</h2>
					<p>Assumenda reiciendis delectus dolore incidunt molestias omnis quo quaerat voluptate, eligendi perspiciatis ipsa laudantium nesciunt officia, odit nemo quidem hic itaque. Fugiat.</p>

					<h2 class="mt-6 mb-5">Trusted worldwide partner</h2>
					
				</div>
			</div>

			<div class="column is-5-desktop is-12-tablet">
				<div class="volunteer-form-wrap">
					<span class="text-white">Join With us</span>
					<h2 class="mb-6 text-lg text-white">Become A Volunteer</h2>
					<form action="#" class="volunteer-form">
						<div class="mb-4">
							<input type="text" class="input" placeholder="Full Name">
						</div>
						<div class="mb-4">
							<input type="email" class="input" placeholder="Emaill Address">
						</div>
						<div class="mb-4">
							<input type="text" class="input" placeholder="Phone Number">
						</div>
						<div class="mb-4">
							<input type="text" class="input" placeholder="Adress ">
						</div>
						<div class="mb-4">
							<input type="text" class="input" placeholder="Occupation">
						</div>
						<div class="mb-4">
							<textarea name="#" id="#" cols="30" rows="6" class="input" placeholder="Your Message"></textarea>
						</div>

						<a href="#" class="btn btn-main is-rounded mt-5">Send Message</a>
					</form>
				</div>
			</div>
		</div>
	</div>
</div> --}}
@endsection
