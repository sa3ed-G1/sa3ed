@extends('dashboard.master')
@section('title')
    Events
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title" style="font-size:25px !important;">Events</h1>
                    <button class="btn btn-outline-info btn-icon-text" data-toggle="modal" data-target="#exampleModalCenter">
                        <i class="ti-plus btn-icon-prepend"></i>
                        <strong style="font-size:15px;">Create Event</strong>
                    </button>
                    <!-- Modal -->
                    <div class="container">
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="w-lg-75 w-sm-100 modal-dialog modal-dialog-centered " role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Create Event</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body ">
                                        <div class="col-12 grid-margin stretch-card">
                                            <div class="card">
                                                <div class="card-body">
                                                    <form action="/dashboard/events" method="POST"
                                                        enctype="multipart/form-data" class="forms-sample">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Title</label>
                                                            <input type="text" name="title" class="form-control"
                                                                id="exampleInputName1" placeholder="Title">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail3">Description</label>
                                                            <textarea name="description" class="form-control" id="exampleInputEmail3" placeholder="Description"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword4">Location</label>
                                                            <input type="text" name="location" class="form-control"
                                                                id="exampleInputPassword4" placeholder="Location">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword4">Tags</label>
                                                            <input type="text" name="tags" class="form-control"
                                                                id="exampleInputPassword4" placeholder="Tags">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword4">Date</label>
                                                            <input type="date" name="date" class="form-control"
                                                                id="exampleInputPassword4" placeholder="Date">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleSelectGender">City</label>
                                                            <select class="form-control" name="city"
                                                                id="exampleSelectGender">
                                                                <option selected disabled>Select a city</option>
                                                                <option value="Amman">Amman</option>
                                                                <option value="Zarqa">Zarqa</option>
                                                                <option value="Irbid">Irbid</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword4">Duration</label>
                                                            <input type="text" name="duration" class="form-control"
                                                                id="exampleInputPassword4"
                                                                placeholder="event duration / Hour">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="Input1">Capacity</label>
                                                            <input type="number" name="capacity" class="form-control"
                                                                id="Input1" placeholder="Capacity">
                                                        </div>
                                                        {{-- sssssssssssss --}}
                                                        <div class="mb-3">
                                                            <label for="formFileMultiple"
                                                                class="form-label">Thumbnail</label>
                                                            <input name="thumbnail" style=""
                                                                class="form-control btn btn-primary" type="file"
                                                                id="formFileMultiple" multiple="">
                                                        </div>
                                                        <div class="mb-4">
                                                            <label for="formFileMultiple"
                                                                class="form-label">Banner</label>
                                                            <input name="banner" style=""
                                                                class="form-control btn btn-primary" type="file"
                                                                id="formFileMultiple" multiple="">
                                                        </div>

                                                        <!---- for user id ---->
                                                        <input type="hidden" name="user_id"
                                                            value="{{ auth()->user()->id }}" class="form-control"
                                                            id="exampleInputCity1">

                                                        <button type="submit"
                                                            class="btn btn-primary mr-2">Submit</button>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>

                                <tr>
                                    <th>
                                        Image
                                    </th>
                                    <th>
                                        Host
                                    </th>

                                    <th>
                                        Donations Raised
                                    </th>
                                    <th>
                                        capacity
                                    </th>
                                    <th>
                                        Event Date
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            @inject('eve', 'App\Http\Controllers\EventtController')
                            <tbody>
                                @foreach ($events as $event)
                                    <tr>
                                        <td class="py-1">
                                            <img src="data:image/jpg;charset=utf8;base64,
                                        {{ $event['thumbnail'] }}"
                                                alt="image" />
                                        </td>
                                        <td>
                                            {{ $event->user->name }}
                                        </td>
                                        <td>
                                            {{ $event->donations->sum('amount') }}
                                        </td>
                                        <td>
                                            {{ $event->volunteers->count() . '/' . $event->capacity }}
                                        </td>

                                        <td>
                                            @if ($eve->daysLeft($event->date) == 1)
                                                Tomorrow
                                            @elseif ($eve->daysLeft($event->date) == 0)
                                                Today
                                            @elseif ($eve->daysLeft($event->date) < 0)
                                                Finished
                                            @else
                                                {{ $eve->daysLeft($event->date) . ' Days Left' }}
                                            @endif


                                        </td>
                                        <td>

                                            {{-- modal for row --}}
                                            <div class="container">
                                                <div class="modal fade" id="exampleModalCenter{{ $event->id }}"
                                                    tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="w-lg-75 w-sm-100 modal-dialog modal-dialog-centered "
                                                        role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Create
                                                                    Event</h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body ">
                                                                <div class="col-12 grid-margin stretch-card">
                                                                    <div class="card">
                                                                        <div class="card-body">
                                                                            <form
                                                                                action="/dashboard/events/{{ $event->id }}"
                                                                                method="POST"
                                                                                enctype="multipart/form-data"
                                                                                class="forms-sample">
                                                                                @csrf
                                                                                @method('PUT')
                                                                                <div class="form-group">
                                                                                    <label
                                                                                        for="exampleInputName1">Title</label>
                                                                                    <input type="text" name="title"
                                                                                        class="form-control"
                                                                                        id="exampleInputName1"
                                                                                        placeholder="Title"
                                                                                        value="{{ $event->title }}">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label
                                                                                        for="exampleInputEmail3">Description</label>
                                                                                    <textarea name="description" class="form-control" id="exampleInputEmail3" placeholder="Description">{{ $event->description }}</textarea>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label
                                                                                        for="exampleInputPassword4">Location</label>
                                                                                    <input type="text" name="location"
                                                                                        class="form-control"
                                                                                        id="exampleInputPassword4"
                                                                                        placeholder="Location"
                                                                                        value="{{ $event->location }}">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label
                                                                                        for="exampleInputPassword4">Tags</label>
                                                                                    <input type="text" name="tags"
                                                                                        class="form-control"
                                                                                        id="exampleInputPassword4"
                                                                                        placeholder="Tags"
                                                                                        value="{{ $event->tags }}">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label
                                                                                        for="exampleInputPassword4">Date</label>
                                                                                    <input type="datetime-local"
                                                                                        name="date"
                                                                                        class="form-control"
                                                                                        id="exampleInputPassword4"
                                                                                        placeholder="Date"
                                                                                        value="{{ $eve->parseDate($event->date) }}">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label
                                                                                        for="exampleSelectGender">City</label>
                                                                                    <select class="form-control"
                                                                                        name="city"
                                                                                        id="exampleSelectGender">

                                                                                        <option
                                                                                            @if ($event->city == 'Amman') selected @endif
                                                                                            value="Amman">
                                                                                            Amman
                                                                                        </option>
                                                                                        <option
                                                                                            @if ($event->city == 'Zarqa') selected @endif
                                                                                            value="Zarqa">Zarqa
                                                                                        </option>
                                                                                        <option
                                                                                            @if ($event->city == 'Irbid') selected @endif
                                                                                            value="Irbid">Irbid
                                                                                        </option>



                                                                                    </select>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label
                                                                                        for="exampleInputPassword4">Duration</label>
                                                                                    <input type="text" name="duration"
                                                                                        class="form-control"
                                                                                        id="exampleInputPassword4"
                                                                                        placeholder="event duration / Hour"
                                                                                        value="{{ $event->duration }}">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="Input1">Capacity</label>
                                                                                    <input type="number" name="capacity"
                                                                                        class="form-control"
                                                                                        id="Input1"
                                                                                        placeholder="Capacity"
                                                                                        value="{{ $event->capacity }}">
                                                                                </div>
                                                                                {{-- sssssssssssss --}}

                                                                                <div class="mb-3 ">
                                                                                    <div class="block">

                                                                                        <label for="formFileMultiple"
                                                                                            class="form-label ">Thumbnail</label>
                                                                                    </div>
                                                                                    <div class="block">

                                                                                        <input name="thumbnail"
                                                                                            style=""
                                                                                            class="form-control btn btn-primary ml-1 "
                                                                                            type="file"
                                                                                            id="formFileMultiple"
                                                                                            multiple="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="mb-4">
                                                                                    <div class="block ">
                                                                                        <label for="formFileMultiple"
                                                                                            class="form-label">Banner</label>
                                                                                    </div>
                                                                                    <div class="block">
                                                                                        <input name="banner"
                                                                                            style=""
                                                                                            class="form-control btn btn-primary ml-1"
                                                                                            type="file"
                                                                                            id="formFileMultiple"
                                                                                            multiple="">
                                                                                    </div>
                                                                                </div>

                                                                                <!---- for user id ---->
                                                                                <input type="hidden" name="user_id"
                                                                                    value="{{ $event->user_id }}"
                                                                                    class="form-control"
                                                                                    id="exampleInputCity1">
                                                                                <input type="hidden" name="id"
                                                                                    value="{{ $event->id }}"
                                                                                    class="form-control"
                                                                                    id="exampleInputCity1">

                                                                                <button type="submit"
                                                                                    class="btn btn-primary mr-2">Submit</button>

                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- modal for row --}}


                                            <div style="display: flex !important; column-gap: 1rem; ">
                                                <button data-toggle="modal"
                                                    data-target="#exampleModalCenter{{ $event->id }}"
                                                    class="btn btn-inverse-primary btn-rounded btn-icon "><i
                                                        class="ti-pencil"></i></button>


                                                {{-- <button id="delete"
                                                    class="btn btn-inverse-danger btn-rounded btn-icon "><i
                                                        class="ti-trash"></i></button> --}}


                                                <button value="{{ $event->id }}" type="submit" id="delete"
                                                    class="btn btn-inverse-danger btn-rounded btn-icon"><i
                                                        class="ti-trash"></i>
                                                </button>

                                            </div>

                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    {{-- delete button (event) sweet alert  --}}
    <script>
        let btn = document.querySelectorAll('#delete');
        // let btn = document.getElementById('delete');

        btn.forEach(btn => {
            btn.onclick = function() {
                // btn.preventDefault();
                console.log(btn);
                swal({
                        title: "Are you sure you want to delete this event?",
                        text: "You will not be able to recover this imaginary file!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonClass: "btn-danger",
                        confirmButtonText: "Yes, delete it!",
                        cancelButtonText: "No, cancel!",
                        closeOnConfirm: false,
                        closeOnCancel: false
                    },
                    function(isConfirm) {
                        if (isConfirm) {
                            // swal("Deleted!", "Event has been deleted", "success");
                            // let val = document.querySelectorAll('btn > input');
                            console.log(btn.value);
                            // setTimeout((e) => {
                            window.location.href = `/dashboard/events/delete/${btn.value}`;
                            // }, 5000);
                        } else {
                            swal("Cancelled", "Your Event is safe ;)", "error");
                        }
                    });
            }
        });
    </script>
@endsection
