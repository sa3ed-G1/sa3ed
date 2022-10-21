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
                                                        <button class="btn btn-danger">Cancel</button>
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
                            <tbody>
                                <tr>
                                    <td class="py-1">
                                        <img src="data:image/jpg;charset=utf8;base64,
                                        {{ $events[0]['thumbnail'] }}"
                                            alt="image" />
                                    </td>
                                    <td>
                                        $events[0]
                                    </td>
                                    <td>
                                        JD420.00
                                    </td>
                                    <td>
                                        69
                                    </td>
                                    <td>
                                        May 15, 2015
                                    </td>
                                    <td>
                                        <a href=""><button class="btn btn-inverse-primary btn-rounded btn-icon"><i
                                                    class="ti-pencil"></i></button></a>
                                        <a href=""><button class="btn btn-inverse-danger btn-rounded btn-icon"
                                                onclick=" return confirm('Are you sure you want to delete event?')"><i
                                                    class="ti-trash"></i></button></a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
