@extends('layout.master')
@section('content')
    <section class="page-title bg-1">
        <div class="container">
            <div class="columns">
                <div class="column is-12">
                    <div class="block has-text-centered">
                        <span class="text-white">Event Fundarising</span>
                        <h1 class="is-capitalize text-lg">All Events</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section event">
        <div class="container">
            <div class="columns is-multiline is-justify-content-center">
                @foreach ($events as $event)
                    <div class="column is-4-desktop is-6-tablet">
                        <div class="card event-item is-shadowless">
                            <img src="data:image/jpg;charset=utf8;base64,
                            {{ $event['thumbnail'] }}"
                                alt="image" class="w-100" alt="...">
                            {{-- {{$event->thumbnail}} --}}
                            <div class="card-body">

                                <h3 class="mb-4"><a href="event-single.html" class="is-block">{{ $event->title }}</a></h3>
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
