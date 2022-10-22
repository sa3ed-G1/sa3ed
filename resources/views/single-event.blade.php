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
                            <!-- Button trigger modal -->
                            <button type="button" id='btnDonate' class="btn btn-main-2 is-rounded" data-bs-toggle="modal"
                                data-bs-target="#donateModal">
                                Donate Now
                            </button>

                            <button type="button" id='btnVolunteer' class="btn btn-main-2 is-rounded"
                                data-bs-toggle="modal" data-bs-target="#volunteerModal">
                                Volunteer Now
                            </button>
                            {{-- <a href="donation.html" class="btn btn-main-2 is-rounded">Donate Now</a> --}}
                            {{-- <a href="donation.html" class="btn btn-main-2 is-rounded">Volunteer Now</a> --}}
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

    <div class="modal" id="modalDonate">
        <div class="modal-background deleteModalDonate"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Donation</p>
                <button class="delete deleteModalDonate" aria-label="close"></button>
            </header>
            <section class="modal-card-body">
                <form action="/donation/{{ $singleEvent->id }}" method="post">
                    @csrf
                    <label for="amount">Donation Amount : </label>
                    <input type="number" name="amount" id="amount">
                    {{-- {{ url() }} --}}
                    <input type="hidden" name="eventt_id" value="{{ $singleEvent->id }}">
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
            </section>
            <footer class="modal-card-foot">
                <button type="submit" class="button is-success">Donate</button>
                <button class="button deleteModalDonate">Cancel</button>
            </footer>
            </form>
        </div>
    </div>
    <div class="modal" id="modalVolunteer">
        <div class="modal-background deleteModalVolunteer"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Are You Sure To Become A Volunteer</p>
                <button class="delete deleteModalVolunteer" aria-label="close"></button>
            </header>
            <section class="modal-card-body">
                <form action="/volunteer/{{ $singleEvent->id }}" method="post">
                    @csrf
                    <input type="hidden" name="eventt_id" value="{{ $singleEvent->id }}">
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
            </section>
            <footer class="modal-card-foot">
                <button type="submit" class="button is-success">Become A Volunteer</button>
                <button class="button deleteModalVolunteer">Cancel</button>
            </footer>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
        document.querySelector('#btnDonate').onclick = function() {
            document.querySelector('#modalDonate').classList.add('is-active');
        }
        let deleteDonateModal = document.querySelectorAll('.deleteModalDonate');
        [...deleteDonateModal].forEach(element => {
            element.onclick = function() {
                document.querySelector('#modalDonate').classList.remove('is-active');
            }
        });

        document.querySelector('#btnVolunteer').onclick = function() {
            document.querySelector('#modalVolunteer').classList.add('is-active');
        }
        let deleteVolunteerModal = document.querySelectorAll('.deleteModalVolunteer');
        [...deleteVolunteerModal].forEach(element => {
            element.onclick = function() {
                document.querySelector('#modalVolunteer').classList.remove('is-active');
            }
        });
    </script>
@endsection
