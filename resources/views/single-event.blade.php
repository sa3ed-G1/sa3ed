@extends('layout.master')
@section('content')
    <section
        style="background:url('data:image/jpg;charset=utf8;base64, {{ $singleEvent['banner'] }}') no-repeat 50% 50%;
        background-size: cover;"
        class="page-title jumbotron bg-1">
        <div class="container">
            <div class="columns">
                <div class="column is-12">
                    <div class="block has-text-centered">
                        <h1 class="is-capitalize text-md">Event Details</h1>
                        <span class="text-white is-capitalize text-md">Be one of us in this event</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section cause-single">
        <div class="container">
            <div class="columns is-multiline is-desktop is-justify-content-center">
                <div class="column is-10-desktop">
                    <div class="single-details">
                        <img src="images/gallery/7.jpg" alt="" class=" w-100">


                        <div>
                            {{-- {{$singleEvent->image}} --}}
                            <img src="data:image/jpg;charset=utf8;base64, {{ $singleEvent['thumbnail'] }}" class="w-100"
                                alt="...">
                        </div>

                        <h2 class="my-5 text-lg">{{ $singleEvent->title }}</h2>
                        <p class="mt-4">{{ $singleEvent->description }}</p>
                        <div class="d-flex justify-content-around">
                            <ul class="list-styled mt-5  gap-3 flex-wrap">
                                <li><span style="font-weight: 900">City:</span> {{ $singleEvent->city }}</li>
                                <li><span style="font-weight: 900">Location:</span> {{ $singleEvent->location }}</li>
                                <li><span style="font-weight: 900">Event Duration:</span> {{ $singleEvent->duration }} H
                                </li>
                            </ul>

                            <ul class="list-styled mt-5  gap-3 flex-wrap">
                                <li><span style="font-weight: 900">Date Start:</span> {{ $singleEvent->date }}</li>
                                <li><span style="font-weight: 900">Capacity:</span> {{ $singleEvent->capacity }} Person</li>
                                <li><span style="font-weight: 900">Tags:</span> {{ $singleEvent->tags }}</li>
                            </ul>
                        </div>
                        <div
                            class="is-flex-tablet is-justify-content-space-around is-align-items-center has-text-centered border-top pt-4 mt-6">
                            <h4 class="my-4">Be a part of noble work</h4>
                            <a href="donation.html" class="btn btn-main-2 is-rounded">Donate Now</a>
                            <a href="donation.html" class="btn btn-main-2 is-rounded">Volunteer Now</a>
                        </div>

                        <div class="share-option mt-5 clearfix py-5">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"> <strong>Share Cause:</strong> </li>
                                <li class="list-inline-item"><a href="#" target="_blank"><i
                                            class="icofont-facebook mr-2"></i>Facebook</a></li>
                                <li class="list-inline-item"><a href="#" target="_blank"><i
                                            class="icofont-twitter mr-2"></i>Twitter</a></li>
                                <li class="list-inline-item"><a href="#" target="_blank"><i
                                            class="icofont-pinterest mr-2"></i>Pinterest</a></li>
                                <li class="list-inline-item"><a href="#" target="_blank"><i
                                            class="icofont-linkedin mr-2"></i>Linkedin</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
