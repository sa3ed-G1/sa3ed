@extends('layout.master')
@section('title')
@if ($user->role == 'manager')
    Manager Dashboard
@else
User Profile
@endif
@endsection

@section('content')
    <div class="container p-5">
        <div class="main-body">
            <div class="container ">
                <div class="main-body ">
                    <div class="row">
                        <div class="col-lg-4">
                            {{-- User Column --}}
                            <div class="card mb-5" style="background:#F89D35 ">
                                <div class="card-body hero is-fullheight">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="
                                        @if ($user->google_id || $user->github_id) 
                                        {{ $user->image }}
                                        @else
                                        data:image/jpg;charset=utf8;base64,
                                            {{ $user->image }} 
                                        @endif
                                        "
                                            class="rounded-circle p-1 mb-5 bg-dark" width="210">
                                        <div class="mt-3">
                                            <h2 class="mb-3 text-dark">{{ $user->name }}</h2>
                                            <p class="text-secondary mb-1"></p>
                                            {{-- <button class="btn btn-primary">Edit</button> --}}

                                        </div>
                                        <hr class="my-4">

                                    </div>
                                    <ul class="list-group list-group-flush mt-5">
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-globe me-2 icon-inline">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <line x1="2" y1="12" x2="22" y2="12">
                                                    </line>
                                                    <path
                                                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                                    </path>
                                                </svg>Website</h6>
                                            <span class="text-secondary"><a
                                                    href="https://www.ripbozo.com/">ripbozo.com</a></span>
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-github me-2 icon-inline">
                                                    <path
                                                        d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                                                    </path>
                                                </svg>Github</h6>
                                            <span class="text-secondary">bootdey</span>
                                        </li>
                                    </ul>

                                    <hr class="mt-1">
                                    {{ $user->donations()->sum('amount') }}
                                    
                                        donations here
                                        <ul class="list-group list-group-flush">
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                <h6 class="mb-0"><i class="fa-solid fa-hand-holding-dollar" style="size:20px "></i> Website</h6>
                                                <span class="text-secondary"><a
                                                        href="https://www.ripbozo.com/">ripbozo.com</a></span>
                                            </li>
                                        </ul>
                                    
                                    <hr class="my-4">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card mb-3">
                                <div class="card-body rounded" style="background-color: #863BAE">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0 text-white">Full Name</h5>
                                        </div>
                                        <div class="col-sm-9 text-light">
                                            {{ $user->name }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0 text-white">Email</h5>
                                        </div>
                                        <div class="col-sm-9 text-light">
                                            {{ $user->email }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0 text-white">Phone</h5>
                                        </div>
                                        <div class="col-sm-9 text-light">
                                            {{ $user->phone }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0 text-white">Wallet Points</h5>
                                        </div>
                                        <div class="col-sm-9 text-light">
                                            {{ $user->wallet->sum('balance') }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <a class="btn" style="background: #F89D35; border:none;" target=""
                                                href="">Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if ($user->role == 'manager')
                                <div class="row d-flex">
                                    <h2 class="text-dark">Your Events</h2>
                                    <a class="btn" style="background: #F89D35; border:none;" target=""
                                        href="">Edit</a>

                                </div>
                                <div class="row">
                                    @foreach ($user->eventts as $event)
                                        <div class="column is-4-desktop is-6-tablet">
                                            <div class="cause-item">
                                                <img src="data:image/jpg;charset=utf8;base64,
                                    {{ $event->thumbnail }}"
                                                    class=" w-100" alt="..."
                                                    style=" height: 200px; object-fit:cover;">

                                                <div class="card-body">
                                                    <h3 class="mb-4"><a href="cause-single.html">{{ $event->title }}</a>
                                                    </h3>

                                                    <ul class="list-inline border-bottom border-top py-3 mb-4">
                                                        <li class="list-inline-item">
                                                            Location:<span>{{ $event->location }}</span></li>
                                                        <li class="list-inline-item">Date:
                                                            <span>{{ $event->date }}</span>
                                                        </li>
                                                    </ul>
                                                    <a href="single-event/{{ $event->id }}"
                                                        class="btn btn-main is-rounded">View Event</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    {{-- user events go here --}}
                            @endif
                        </div>


                    </div>
                </div>
            </div>

        </div>
    @endsection
