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
        @if (session('addEvent'))
            <div class="alert alert-success"><strong>{{ session('addEvent') }}</strong></div>
        @endif
        @if (session('updateUser'))
            <div class="alert alert-success"><strong>{{ session('updateUser') }}</strong></div>
        @endif
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
                                        @if ($user->google_id || $user->github_id) {{ $user->image }}
                                        @else
                                        data:image/jpg;charset=utf8;base64,
                                            {{ $user->image }} @endif
                                            "
                                            w-100" alt="..." style=" height: 200px; object-fit:cover;"
                                            class="rounded-circle p-1 mb-5 bg-dark" width="210">
                                        <div class="mt-3">
                                            <h2 class="mb-3 text-dark">{{ $user->name }}</h2>
                                            @if (auth()->user()->role == 'manager')
                                                <h6 class="text-dark mb-1">Events Manager</h6>
                                                {{-- <button class="btn btn-primary">Edit</button> --}}
                                            @endif
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
                                    @if (auth()->user()->role == 'manager')
                                        <div class="d-flex flex-column align-items-center text-center">
                                            donations here
                                        </div>

                                        <ul class="list-group list-group-flush">
                                            @foreach ($user->eventts as $event)
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                    <h6 class="mb-0"><i class="fa-solid fa-hand-holding-dollar"
                                                            style="size:20px "></i>{{ $event->title }}</h6>
                                                    <span class="text-secondary"><a
                                                            href="https://www.ripbozo.com/">{{ $event->donations->sum('amount') }}</a></span>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <hr class="my-4">
                                    @endif


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
                                            {{ auth()->user()->wallet->balance }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-12">

                                            <button class="btn" type="button" id="edituserbtn"
                                                style="background: #F89D35; border:none;" data-bs-toggle="modal"
                                                data-bs-target="#editModal">Edit
                                            </button>
                                        </div>
                                        <form action="" me></form>
                                    </div>
                                </div>
                            </div>
                            <div class="is-flex is-justify-content-space-between">
                                <h2 class="text-dark">Your Events</h2>
                                @if ($user->role == 'manager')
                                    <button class="btn" type="button" id="addeventbtn"
                                        style="background: #F89D35; border:none;" data-bs-toggle="modal"
                                        data-bs-target="#eventModal">Add Event
                                    </button>
                                @endif

                            </div>
                            <div class="row">
                                @if (auth()->user()->role == 'manager')
                                    @foreach ($user->eventts as $event)
                                        <div class="column is-4-desktop is-6-tablet">
                                            <div class="cause-item">
                                                <img src="data:image/jpg;charset=utf8;base64,{{ $event->thumbnail }}"
                                                    class=" w-100" alt="..."
                                                    style=" height: 200px; object-fit:cover;">

                                                <div class="card-body">
                                                    <h3 class="mb-4"><a
                                                            href="cause-single.html">{{ $event->title }}</a>
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
                                    @foreach ($user->volunteers as $volunteer)
                                        <div class="column is-4-desktop is-6-tablet">
                                            <div class="cause-item">
                                                <img src="data:image/jpg;charset=utf8;base64,{{ $volunteer->eventt->thumbnail }}"
                                                    class=" w-100" alt="..."
                                                    style=" height: 200px; object-fit:cover;">
                                                <div class="card-body">
                                                    <h3 class="mb-4"><a
                                                            href="cause-single.html">{{ $volunteer->eventt->title }}</a>
                                                    </h3>

                                                    <ul class="list-inline border-bottom border-top py-3 mb-4">
                                                        <li class="list-inline-item">
                                                            Location:<span>{{ $volunteer->eventt->location }}</span></li>
                                                        <li class="list-inline-item">Date:
                                                            <span>{{ $volunteer->eventt->date }}</span>
                                                        </li>
                                                    </ul>
                                                    <a href="single-event/{{ $volunteer->eventt->id }}"
                                                        class="btn btn-main is-rounded">View Event</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif

                            </div>

                            {{-- user events go here --}}
                            {{-- @endif --}}
                        </div>


                    </div>
                </div>
            </div>

        </div>

        <div class="modal" id="eventModal">
            <div class="modal-background deleteModalVolunteer"></div>
            <div class="modal-card">
                {{-- <header class="modal-card-head">
                    <p class="modal-card-title">Create Volunteering Event</p>
                    <button class="delete deleteModalVolunteer" aria-label="close"></button>
                </header> --}}
                <section class="modal-card-body" style="background-color: #F89D35">
                    <div class="volunteer-form-wrap">

                        <h2 class="mb-6 text-lg text-dark">Create Event</h2>
                        <form method="POST" action="/profile" class="volunteer-form" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4">
                                @error('Title')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <input name="title" type="text" class="input" placeholder="Title" />
                            </div>
                            <div class="is-flex ">
                                <div class="mb-4 w-75 mr-3">
                                    @error('location')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    <input name="location" type="text" class="input" placeholder="Event Address" />
                                </div>
                                <div class="mb-4 w-25">
                                    @error('city')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    <select class="input" name="city">
                                        <option selected disabled>Select a city</option>
                                        <option value="Amman">Amman</option>
                                        <option value="Zarqa">Zarqa</option>
                                        <option value="Irbid">Irbid</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-4">
                                @error('capacity')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <input name="capacity" type="number" class="input" placeholder="Event Capacity" />
                            </div>
                            <div class="is-flex ">
                                <div class="mb-4 mr-5">
                                    @error('date')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    {{-- <label for="">Date</label> --}}
                                    <input name="date" type="datetime-local" class="input" id="eventdate"
                                        placeholder="Event date" />
                                </div>
                                <div class="mb-4">
                                    @error('duration')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    <input name="duration" type="number" class="input"
                                        placeholder="Event Duration(hours)" />
                                </div>
                            </div>
                            <div class="mb-4">
                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <textarea name="description" class="input" placeholder="Event Description"></textarea>
                            </div>
                            <div class="mb-4">
                                @error('tags')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <input name="tags" type="text" class="input" placeholder="Event Tags" />
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
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                            <button type="submit" class="btn btn-main is-rounded mt-5" style="background-color: black;">
                                <h4 style="color:#F89D35">Create</h4>
                            </button>
                        </form>
                    </div>
                </section>
            </div>
        </div>
        <div class="modal" id="editModal">
            <div class="modal-background deleteModalVolunteer2"></div>
            <div class="modal-card">
                <section class="modal-card-body" style="background-color: #F89D35">
                    <div class="volunteer-form-wrap">

                        <h2 class="mb-6 text-lg text-dark">Edit Information</h2>
                        <form method="POST" action="/profile/{{ auth()->user()->id }}" class="volunteer-form"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-4">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <input name="name" type="text" value="{{ auth()->user()->name }}" class="input"
                                    placeholder="Name" />
                            </div>
                            <div class="mb-4">
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <input name="email" type="email" value="{{ auth()->user()->email }}" class="input"
                                    placeholder="Emaill Address" />
                            </div>
                            <div class="mb-4">
                                @error('phone')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <input name="phone" type="tel" value="{{ auth()->user()->phone }}" class="input"
                                    placeholder="Phone Number" />
                            </div>

                            @if (!($user->google_id || $user->github_id))
                                <div class="file is-light">
                                    @error('image')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror


                                    <label class="file-label">
                                        <input class="file-input" type="file" name="image">
                                        <span class="file-cta">
                                            <span class="file-icon">
                                                <i class="fas fa-upload"></i>
                                            </span>
                                            <span class="file-label">
                                                Choose you picture
                                            </span>
                                        </span>

                                    </label>
                                </div>
                            @else
                            @endif

                            <button type="submit" class="btn btn-main is-rounded mt-5">Edit</button>
                        </form>
                    </div>
                </section>
            </div>
        </div>

    @endsection
    @section('script')
        <script>
            document.querySelector('#addeventbtn').onclick = function() {
                document.querySelector('#eventModal').classList.add('is-active');
            }
            let deleteVolunteerModal = document.querySelectorAll('.deleteModalVolunteer');
            [...deleteVolunteerModal].forEach(element => {
                element.onclick = function() {
                    document.querySelector('#eventModal').classList.remove('is-active');
                }
            });
        </script>
        <script>
            document.querySelector('#edituserbtn').onclick = function() {
                document.querySelector('#editModal').classList.add('is-active');
            }
            let deleteVolunteerModal2 = document.querySelectorAll('.deleteModalVolunteer2');
            [...deleteVolunteerModal2].forEach(element => {
                element.onclick = function() {
                    document.querySelector('#editModal').classList.remove('is-active');
                }
            });
        </script>
    @endsection
