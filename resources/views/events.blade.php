@extends('layout.master')
@section('content')
    <section
        style="background-image:url('https://cdn.pixabay.com/photo/2015/10/29/14/38/web-1012467__340.jpg') no-repeat 50% 50%;
background-size: cover;"
        class="page-title jumbotron bg-1">
        <div class="container">
            <div class="columns">
                <div class="column is-12">
                    <div class="block has-text-centered">
                        <h1 class="is-capitalize text-md">Volunteering events</h1>
                        <span class="text-white is-capitalize text-md">Become a volunteer now in your favorite field </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- seach bar --}}
    <div style="height: 100px; padding-bottom:0%; margin-bottom:0%"
        class="searchContainer d-flex justify-content-center align-items-center">
        <form action="/events" class="search-box d-flex justify-content-center align-items-center">
            {{-- <div> --}}
            {{-- <button type="submit" style="background: none; border: none; padding: 0"><span
                        style="font-size: 30px;  color: #9B9B9B" class="material-symbols-outlined">search</span></button>
                <input class="input" style="vertical-align: 4px; width: 255px;" type="search" name="search"
                    placeholder="Search for an event" id="search-input" value=""> --}}
            {{-- <input style="border: 1px solid black; width: 20rem  " name="search" type="search" class="input "
                    placeholder="Search" />
            </div> --}}
            <div class="input-group rounded w-100">
                <input style="width:300px" type="search" class="form-control rounded"
                    placeholder="Search by event name, city, duration" aria-label="Search"
                    aria-describedby="search-addon" />
                <span class="input-group-text border-0" id="search-addon">
                    <i class="fas fa-search"></i>
                </span>
            </div>
        </form>
    </div>
    <section style="padding:0% !important" class="section event">

        <div class="container mb-5">
            <div class="columns is-multiline is-justify-content-center mb-5">
                @foreach ($events as $event)
                    <div class="column is-4-desktop is-6-tablet">
                        <div class="card event-item is-shadowless" style="border-radius: 10px">

                            <section
                                style="background:url('data:image/jpg;charset=utf8;base64, {{ $event['thumbnail'] }}') no-repeat 50% 50%; background-size: cover;"
                                class="page-title ">
                            </section>

                            <div class="card-body">

                                <h3 class="mb-4"><a href="single-event/{{ $event->id }}"
                                        class="is-block">{{ $event->title }}</a></h3>
                                <p>{{ substr($event->description, 0, 100) }}...</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>Date : </strong> {{ $event->date }}</li>
                                <li class="list-group-item"><strong>Location : </strong> {{ $event->city }}</li>
                                <li class="list-group-item"><strong>Organizer : </strong>{{ $event->user->name }}</li>

                            </ul>
                            {{-- we will make this a form  --}}
                            <a href="single-event/{{ $event->id }}"
                                class="btn btn-main-2 is-block has-text-centered">More Details</a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
