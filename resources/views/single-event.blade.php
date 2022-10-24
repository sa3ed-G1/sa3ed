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

    @auth

        @if (auth()->user()->donations->where('eventt_id', $singleEvent->id)->count() > 0 && auth()->user()->role == 'user')
            <div class="text-center pt-5">
                <div class="mt-5"></div>
                <h5 class="text-center is-capitalize text-md ">You Have Donated To This Event You Are Amazing!</h5>
            </div>
        @endif
    @endauth

    @auth
        @if ($singleEvent->user_id == auth()->user()->id)
            <div style="display: flex; justify-content: center; margin-top: 3rem; gap: 4rem;">
                <button class="btn" type="button" id="addeventbtn" style="background: #F89D35; border:none;"
                    data-bs-toggle="modal" data-bs-target="#eventModal">Edit Event
                </button>

                <button @if (!$singleEvent->publish) disabled @endif class="btn" type="button" id="endeventbtn"
                    style="background: red; color: white; border:none;" data-bs-toggle="modal"
                    data-bs-target="#eventModalenda">End Event
                </button>

            </div>
        @endif
    @endauth

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

                        <h2 id="evee" class="my-5 text-lg">{{ $singleEvent->title }}</h2>
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
                                <li><span style="font-weight: 900">Capacity:</span>
                                    {{ $singleEvent->volunteers->count() . ' / ' . $singleEvent->capacity }} Volunteers</li>
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
                                @if ($singleEvent->user_id != auth()->user()->id)
                                    <button type="button" id='btnDonate' class="btn btn-main-2 is-rounded"
                                        data-bs-toggle="modal" data-bs-target="#donateModal">
                                        Donate Now
                                    </button>
                                @endif
                            @endauth
                            @guest
                                <a href="/register">
                                    <button type="button" class="btn btn-main-2 is-rounded">
                                        Login to volunteer
                                    </button>
                                </a>
                            @endguest
                            @auth

                                @if ($singleEvent->user_id != auth()->user()->id)
                                    @if (auth()->user()->volunteers->where('eventt_id', $singleEvent->id)->count() > 0)
                                        <button disabled type="button" id='btnVolunteer' class="btn btn-main-2 is-rounded"
                                            data-bs-toggle="modal" data-bs-target="#volunteerModal">
                                            Already Joined
                                        </button>
                                    @elseif ($singleEvent->volunteers->count() == $singleEvent->capacity)
                                        <button disabled type="button" id='btnVolunteer' class="btn btn-main-2 is-rounded"
                                            data-bs-toggle="modal" data-bs-target="#volunteerModal">
                                            Volunteers Are full
                                        </button>
                                    @elseif(!$singleEvent->publish)
                                        <button disabled type="button" id='btnVolunteer' class="btn btn-main-2 is-rounded"
                                            data-bs-toggle="modal" data-bs-target="#volunteerModal">
                                            Event Finished
                                        </button>
                                    @else
                                        <button type="button" id='btnVolunteer' class="btn btn-main-2 is-rounded"
                                            data-bs-toggle="modal" data-bs-target="#volunteerModal">
                                            Volunteer Now
                                        </button>
                                    @endif
                                @endif

                            @endauth
                            {{-- <a href="donation.html" class="btn btn-main-2 is-rounded">Donate Now</a> --}}
                            {{-- <a href="donation.html" class="btn btn-main-2 is-rounded">Volunteer Now</a> --}}
                        </div>
                        {{-- user Add comment --}}
                    </div>
                </div>
            </div>


            {{-- they are in the same section --}}


            {{-- -------------------------------------------- users comments --------------------------------------- --}}
            <div class="column is-12 mb-5">
                <div class="comment-area">
                    <h3 class="mb-5">{{ $comments->count() }} Comments</h3>
                    <ul class="comment-tree list-unstyled">
                        @foreach ($comments as $comment)
                            <li class="mb-5">
                                <div class="comment-area-box is-flex">
                                    <img style="width: 50px; height: 50px ;" alt=""
                                        src="@if ($comment->user->google_id || $comment->user->github_id) {{ $comment->user->image }}
                                        @else
                                        data:image/jpg;charset=utf8;base64,
                                            {{ $comment->user->image }} @endif"
                                        class="mr-4 rounded-circle ">

                                    <div>
                                        <div class="is-flex is-justify-content-space-between is-align-items-center">
                                            <div>
                                                <h5>{{ $comment->user->name }}</h5>
                                                <span class="date-comm">{{ $comment->created_at }}</span>
                                            </div>


                                        </div>

                                        <div class="comment-content mt-3">
                                            <p>{{ $comment->comment }}</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach


                    </ul>
                </div>
            </div>
            {{-- new form --}}
            <div class="column is-12">
                <form action="/post-comment" method="POST">
                    <input name="eventt_id" type="hidden" value=" {{ $singleEvent->id }} ">
                    @auth
                        <input name="user_id" type="hidden" value=" {{ auth()->user()->id }} ">
                    @endauth
                    @csrf
                    <h3 class="mb-5">Leave a comment</h3>
                    <div class="columns is-multiline">

                        <div class="column is-12">
                            <textarea class="input mb-3" name="comment" cols="30" style="height: 100px" rows="10"
                                placeholder="Comment"></textarea>
                            @error('comment')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="column is-12">
                            @auth
                                <button class="btn btn-main is-rounded" type="submit">Submit</button>
                            @else
                                <a href="/register"class="btn btn-main is-rounded">Sign in to leave a
                                    comment</a>
                            @endauth
                        </div>
                    </div>
                </form>
            </div>



            {{-- -------------------------------------------- users comments --------------------------------------- --}}
            {{-- <section style="background-color: #f7f6f6;"> --}}




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
                    <div class="mb-3">
                        <label style="display: block" for="name">Card Name </label>
                        <input placeholder="Name" class="w-100" type="text" id="name">

                    </div>
                    <div class="mb-3">
                        <label style="display: block" for="name">Card Number </label>
                        <input placeholder="1234 5678 9000 1234" class="w-100" type="number" id="name">

                    </div>
                    <div style="display: flex">
                        <div>

                            <label style="display: block" for="name">Card Date </label>
                            <input placeholder="xx/xx" type="number" id="name">
                        </div>
                        <div class="mx-5"></div>
                        <div>

                            <label style="display: block" for="name">CCV</label>
                            <input placeholder="123" type="number" id="name">
                        </div>


                    </div>
                    <div class="mt-5">

                        <label style="display: block" for="amount">Donation Amount </label>
                        <input required type="number" name="amount" id="amount">
                    </div>
                    {{-- {{ url() }} --}}
                    <input type="hidden" name="eventt_id" value="{{ $singleEvent->id }}">
                    @auth
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    @endauth
            </section>
            <footer class="modal-card-foot">
                <button type="submit" class="button is-success">Donate</button>
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

            <form action="/volunteer/{{ $singleEvent->id }}" method="post">
                @csrf
                <input type="hidden" name="eventt_id" value="{{ $singleEvent->id }}">
                @auth
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                @endauth

                <footer class="modal-card-foot">
                    <button type="submit" class="button is-success">Become A Volunteer</button>

                </footer>
            </form>
        </div>
    </div>
    {{-- modal edit-------------------------------------------------------------------- --}}
    <div class="modal" id="eventModal">
        <div class="modal-background deleteModalVolunteer1"></div>
        <div class="modal-card">
            {{-- <header class="modal-card-head">
                <p class="modal-card-title">Create Volunteering Event</p>
                <button class="delete deleteModalVolunteer" aria-label="close"></button>
            </header> --}}
            <section class="modal-card-body" style="background-color: #F89D35">
                <div class="volunteer-form-wrap">

                    <h2 class="mb-6 text-lg text-dark">Update Event</h2>
                    <form method="POST" action="/manager/update" class="volunteer-form" enctype="multipart/form-data">
                        <input name="id" type="hidden" value="{{ $singleEvent->id }}">
                        @csrf
                        <div class="mb-4">
                            @error('Title')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            <small>title</small>
                            <input value="{{ $singleEvent->title }}" name="title" type="text" class="input"
                                placeholder="Title" />
                        </div>
                        <div class="is-flex ">
                            <div class="mb-4 w-75 mr-3">
                                @error('location')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <small>location</small>
                                <input value="{{ $singleEvent->location }}" name="location" type="text"
                                    class="input" placeholder="Event Address" />
                            </div>
                            <div class="mb-4 w-25">
                                @error('city')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <small>City</small>
                                <select class="input" name="city">


                                    <option @if ($singleEvent->city == 'Amman') selected @endif value="Amman">Amman
                                    </option>
                                    <option @if ($singleEvent->city == 'Zarqa') selected @endif value="Zarqa">Zarqa
                                    </option>
                                    <option @if ($singleEvent->city == 'Irbid') selected @endif value="Irbid">Irbid
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-4">
                            @error('capacity')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            <small>Capacity</small>
                            <input value="{{ $singleEvent->capacity }}" name="capacity" type="number" class="input"
                                placeholder="Event Capacity" />
                        </div>
                        <div class="is-flex ">
                            <div class="mb-4 mr-5">
                                @error('date')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                {{-- <label for="">Date</label> --}}
                                <small>Date</small>
                                <input value="{{ $singleEvent->date }}" name="date" type="datetime-local"
                                    class="input" id="eventdate" placeholder="Event date" />
                            </div>
                            <div class="mb-4">
                                @error('duration')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <small>Duration</small>
                                <input value="{{ $singleEvent->duration }}" name="duration" type="number"
                                    class="input" placeholder="Event Duration(hours)" />
                            </div>
                        </div>
                        <div class="mb-4">
                            @error('description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            <small>Description</small>
                            <textarea name="description" class="input" placeholder="Event Description">{{ $singleEvent->description }}</textarea>
                        </div>
                        <div class="mb-4">
                            @error('tags')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            <small>Tags</small>
                            <input value=" {{ $singleEvent->tags }}" name="tags" type="text" class="input"
                                placeholder="Event Tags" />
                        </div>
                        <div class="is-flex">
                            <div class="file is-light mr-3">
                                @error('thumbnail')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <label class="file-label">
                                    <input class="file-input" type="file" name="thumbnail">
                                    <span class="file-cta">
                                        <span class="file-icon">
                                            <i class="fas fa-upload"></i>
                                        </span>
                                        <span class="file-label">
                                            Choose Thumbnail
                                        </span>
                                    </span>

                                </label>
                            </div>
                            <div class="file is-light">
                                @error('banner')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <label class="file-label">
                                    <input class="file-input" type="file" name="banner">
                                    <span class="file-cta">
                                        <span class="file-icon">
                                            <i class="fas fa-upload"></i>
                                        </span>
                                        <span class="file-label">
                                            Choose Banner
                                        </span>
                                    </span>

                                </label>
                            </div>
                        </div>
                        @auth
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        @endauth
                        <button type="submit" class="btn btn-main is-rounded mt-5" style="background-color: black;">
                            <h4 style="color:#F89D35">Update</h4>
                        </button>
                    </form>
                </div>
            </section>
        </div>
    </div>
    {{-- modal edit --}}
    {{-- modal end-------------------------------------------------------------------- --}}
    <div class="modal" id="eventModalenda">
        <div class="modal-background deleteModalVolunteer2"></div>
        <div class="modal-card">
            <section class="modal-card-body" style="background-color: #F89D35">
                <div class="volunteer-form-wrap">

                    <h2 class="mb-6 text-lg text-dark">End Event</h2>
                    <form method="POST" action="/manager/end" class="volunteer-form" enctype="multipart/form-data">
                        @csrf
                        <input name="id" type="hidden" value="{{ $singleEvent->id }}">
                        <div class="mb-4">
                            @error('amount')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            <h4 class="text-dark">How Many Points Do You Want To Send To Volunteers?</h4>
                            <input value="{{ $singleEvent->title }}" name="amount" type="number" class="input mt-3"
                                placeholder="amount" />
                        </div>
                        <button type="submit" class="btn btn-main is-rounded mt-5" style="background-color: red;">
                            <h4 style="color:white">End</h4>
                        </button>
                    </form>
                </div>
            </section>
        </div>
    </div>
    {{-- modal end --}}
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
    <script>
        document.querySelector('#addeventbtn').onclick = function() {
            document.querySelector('#eventModal').classList.add('is-active');
        }
        let deleteVolunteerModal1 = document.querySelectorAll('.deleteModalVolunteer1');
        [...deleteVolunteerModal1].forEach(element => {
            element.onclick = function() {
                document.querySelector('#eventModal').classList.remove('is-active');
            }
        });
    </script>
    <script>
        document.querySelector('#endeventbtn').onclick = function() {
            document.querySelector('#eventModalenda').classList.add('is-active');
        }
        let deleteVolunteerModal2 = document.querySelectorAll('.deleteModalVolunteer2');
        [...deleteVolunteerModal2].forEach(element => {
            element.onclick = function() {
                document.querySelector('#eventModalenda').classList.remove('is-active');
            }
        });
    </script>
@endsection
