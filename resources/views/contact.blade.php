@extends('layout.master')
@section('content')
    <section class="page-title bg-1">
        <div class="container">
            <div class="columns">
                <div class="column is-12">
                    <div class="block has-text-centered">
                        <span class="text-white">Contact us</span>
                        <h1 class="is-capitalize text-lg">Be an Event Host </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns is-justify-content-center is-multiline">
                <div class="column is-6-desktop is-6-tablet">
                    <div class="contact-content">
                        <h2 class="mb-5">We’d love to hear from you! <br>Give us call, send us a message?</h2>
                        <ul class="address-block list-unstyled">
                            <li>
                                <h6 class="mb-2">Address</h6>
                                North Main Street,Brooklyn Australia
                            </li>
                            <li>
                                <h6 class="mb-2">email us</h6>
                                contact@mail.com
                            </li>
                            <li>
                                <h6 class="mb-2">Phone Number</h6>
                                +88 01672 506 744
                            </li>
                        </ul>

                        <ul class="social-icons list-inline mt-5">
                            <li>
                                <h6 class="mb-3">Find us on social media</h6>
                            </li>
                            <li class="list-inline-item">
                                <a href="http://www.themefisher.com"><i class="icofont-facebook mr-2"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="http://www.themefisher.com"><i class="icofont-twitter mr-2"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="http://www.themefisher.com"><i class="icofont-linkedin mr-2"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="column is-5-desktop is-6-tablet">
                    <div class="google-map">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section volunteer-section pt-0 ">
        <div class="container">
            <div class="columns is-multiline">
                <div class="column is-6-desktop is-6-tablet mt-5">
                    <div class="member-benifit mt-5">
                        <h4 class="mb-4"> Benefits </h4>
                        <p class="mb-3">As a Manger you will get benefit from:</p>

                        <ul class="list-unstyled member-benifits-list lh-35">
                            <li><strong>Create Events</strong> - Encourage Volunteers to participate in your event<br> by
                                using our points system</li>
                            <li><strong>Recieve Donations</strong> - Recieve Donations directly through our<br> platform for
                                your event .</li>
                            <li><strong>Networking</strong> - talk to the right people when you need to.</li>
                            <li><strong>Expertise </strong>- Explore other events from our differetnt organiaztions </li>
                        </ul>
                    </div>
                </div>

                <div class="column is-6-desktop is-6-tablet">
                    <span class="text-color">Join With Us</span>
                    <h2 class="mb-5 text-md"> We are here to help you<br> manage your event.</h2>
                    <h6 class=" mb-1">Tell us about your organization</h6>
                    <form action="/apply" method="POST" class="volunteer-form">
                        @csrf
                        <input name="user_id" value="{{ auth()->user()->id }}" type="hidden" class="input">
                        <div class="mb-4">
                            <textarea name="message" cols="35" rows="8" class="input" placeholder="Your Message" required></textarea>
                        </div>
                        @if (auth()->user()->pendings->where('user_id', auth()->user()->id)->count() > 0)
                            <button disabled type="submit" class="btn btn-main-2 is-rounded mt-3">Already applied</button>
                        @else
                            <button type="submit" class="btn btn-main-2 is-rounded mt-3">Apply Now</button>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
