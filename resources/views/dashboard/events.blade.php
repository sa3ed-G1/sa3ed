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
                                                    <form action="" enctype="multipart/form-data" class="forms-sample">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Title</label>
                                                            <input type="text" name="title" class="form-control"
                                                                id="exampleInputName1" placeholder="Title">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail3">Description</label>
                                                            <input type="text" name="description" class="form-control"
                                                                id="exampleInputEmail3" placeholder="Description">
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
                                                            <input style="" class="form-control btn btn-primary"
                                                                type="file" id="formFileMultiple" multiple="">
                                                        </div>
                                                        <div class="mb-4">
                                                            <label for="formFileMultiple"
                                                                class="form-label">Banner</label>
                                                            <input style="" class="form-control btn btn-primary"
                                                                type="file" id="formFileMultiple" multiple="">
                                                        </div>
                                                        {{-- <div class="form-group position-relative ">
                                                            <label>File upload</label>
                                                            <div class="position-absolute bg-primary w-100 h-75 "></div>
                                                            <input class="file-upload-browse btn btn-primary w-100"
                                                                type="file" name="" id="">
                                                           <input type="file" name="img[]"
                                                                class="file-upload-default">
                                                            <div class="input-group col-xs-12">
                                                                <input type="text" class="form-control file-upload-info"
                                                                    disabled="" placeholder="Upload Image">
                                                                <span class="input-group-append">
                                                                    <button class="file-upload-browse btn btn-primary"
                                                                        type="button">Upload</button>
                                                                </span>
                                                            </div>
                                                        </div> --}}
                                                        {{-- sssssssssss --}}
                                                        {{-- <div class="form-group">
                                                            <label>Banner</label>
                                                            <input type="file" name="banner"
                                                                class="file-upload-default">
                                                            <div class="input-group col-xs-12">
                                                                <input type="file"
                                                                    class="form-control file-upload-info" disabled
                                                                    placeholder="Upload Image">
                                                                <span class="input-group-append">
                                                                    <button class="file-upload-browse btn btn-primary"
                                                                        type="button">Upload</button>
                                                                </span>
                                                            </div>
                                                        </div> --}}

                                                        <!---- for user id ---->
                                                        <input type="hidden" name="user_id" value=""
                                                            class="form-control" id="exampleInputCity1">

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
                                        <img src="/images/faces/face1.jpg" alt="image" />
                                    </td>
                                    <td>
                                        Herman Beck
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
