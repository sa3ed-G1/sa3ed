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
                            @guest
                                <a href="/register">
                                    <button type="button" class="btn btn-main-2 is-rounded">
                                        Login to Donate
                                    </button>
                                </a>
                            @endguest
                            @auth
                                <button type="button" id='btnDonate' class="btn btn-main-2 is-rounded" data-bs-toggle="modal"
                                    data-bs-target="#donateModal">
                                    Donate Now
                                </button>
                            @endauth
                            @guest
                                <a href="/register">
                                    <button type="button" class="btn btn-main-2 is-rounded">
                                        Login to volunteer
                                    </button>
                                </a>
                            @endguest
                            @auth
                                <button type="button" id='btnVolunteer' class="btn btn-main-2 is-rounded"
                                    data-bs-toggle="modal" data-bs-target="#volunteerModal">
                                    Volunteer Now
                                </button>
                            @endauth
                            {{-- <a href="donation.html" class="btn btn-main-2 is-rounded">Donate Now</a> --}}
                            {{-- <a href="donation.html" class="btn btn-main-2 is-rounded">Volunteer Now</a> --}}
                        </div>

                        {{-- user Add comment --}}


                        <section style="background-color: #f7f6f6;">
                            <div class="container my-5 py-5 text-dark">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-md-10 col-lg-8 col-xl-6">
                                        <div class="card">
                                            <div class="card-body p-4">
                                                <div class="d-flex flex-start w-100">

                                                    <div class="w-100">
                                                        <form action="/post-comment" method="POST">
                                                            @csrf
                                                            <h5 class="mb-2">Add a comment</h5>
                                                            @error('comment')
                                                                <small class="text-danger">{{ $message }}</small>
                                                            @enderror

                                                            <div class="form-outline">
                                                                <textarea name="comment" class="form-control" id="textAreaExample" rows="4"></textarea>
                                                                <label class="form-label" for="textAreaExample">What is your
                                                                    comment?</label>
                                                                <input name="eventt_id" type="hidden"
                                                                    value=" {{ $singleEvent->id }} ">
                                                                @auth
                                                                    <input name="user_id" type="hidden"
                                                                        value=" {{ auth()->user()->id }} ">
                                                                @endauth
                                                            </div>
                                                            <div class="d-flex justify-content-end mt-3">
                                                                <button style="background-color:#863bae; color:white"
                                                                    type="submit" class="btn">
                                                                    Send <i style="color:white"
                                                                        class="fas fa-long-arrow-alt-right ms-1"></i>
                                                                </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    {{-- </section> --}}


                    {{-- they are in the same section --}}


                    {{-- -------------------------------------------- users comments --------------------------------------- --}}

                    {{-- <section style="background-color: #f7f6f6;"> --}}
                    <div class="container my-5 py-5 text-dark">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-12 col-lg-10 col-xl-8">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h4 class="text-dark mb-0">Comments</h4>
                                    <div class="card">
                                    </div>
                                </div>


                                @foreach ($comments as $comment)
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div class="d-flex flex-start">
                                                <img class="rounded-circle shadow-1-strong me-3"
                                                    src="
                                                    @if ($comment->user->google_id || $comment->user->github_id) {{ $comment->user->image }}
                                        @else
                                        data:image/jpg;charset=utf8;base64,
                                            {{ $comment->user->image }} @endif
                                            "
                                                    alt="avatar" width="90" height="auto" />
                                                <div class="w-100 d-flex justify-content-between align-items-end">
                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                        <h6 class="text-warning fw-bold mb-0">
                                                            {{ $comment->user->name }}
                                                            <p style="width:470px; height:auto;"
                                                                class="text-dark ms-2 mb-2 d-fle flex-wrap">
                                                                {{ $comment->comment }}
                                                            </p>
                                                        </h6>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        {{-- <p class="small mb-0" style="color: #aaa;">
                                              <a href="#!" class="link-grey">Remove</a> •
                                              <a href="#!" class="link-grey">Reply</a> •
                                              <a href="#!" class="link-grey">Translate</a>
                                            </p> --}}
                                                        <div class="d-flex flex-row">
                                                            {{-- <i class="far fa-check-circle text-primary"></i> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
    </section>



    <div class="share-option mt-5 clearfix py-5">
        <ul class="list-inline mb-0">
            <li class="list-inline-item"> <strong>Share Cause:</strong> </li>
            <li class="list-inline-item"><a href="#" target="_blank"><i
                        class="icofont-facebook mr-2"></i>Facebook</a>
            </li>
            <li class="list-inline-item"><a href="#" target="_blank"><i
                        class="icofont-twitter mr-2"></i>Twitter</a>
            </li>
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
                    @auth
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    @endauth
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
                    @auth
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    @endauth
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
