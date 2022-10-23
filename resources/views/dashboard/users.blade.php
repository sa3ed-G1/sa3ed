@extends('dashboard.master')


@section('content')
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    @if (session('addUser'))
                        <div class="alert alert-success"><strong>{{ session('addUser') }}</strong></div>
                    @endif
                    @if (session('updateUser'))
                        <div class="alert alert-success"><strong>{{ session('updateUser') }}</strong></div>
                    @endif
                    <button class="btn btn-outline-info btn-icon-text mb-5" data-toggle="modal"
                        data-target="#exampleModalCenter">
                        <i class="ti-plus btn-icon-prepend"></i>
                        <strong style="font-size:15px;">Add User</strong>
                    </button>
                    <h4 class="card-title">Managers Event</h4>
                    <p class="card-description">
                        You can see all managers and edit or delete them
                    </p>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        Manager
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Phone
                                    </th>
                                    <th>
                                        Events Make
                                    </th>
                                    <th>
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($managers as $manager)
                                    <tr>
                                        <td class="py-1">
                                            <img src="@if ($manager->google_id || $manager->github_id) {{ $manager['image'] }} 
                                          
                                                
                                            @else
                                            data:image/jpg;charset=utf8;base64,
                                    {{ $manager['image'] }} @endif"
                                                alt="image" />
                                        </td>
                                        <td>
                                            {{ $manager['name'] }}
                                        </td>
                                        <td>
                                            {{ $manager['email'] }}
                                        </td>
                                        <td>
                                            {{ $manager['phone'] }}
                                        </td>
                                        <td>
                                            {{ $manager['eventts']->count() }}
                                        </td>
                                        <td>
                                            <button class="btn btn-inverse-primary btn-rounded btn-icon" data-toggle="modal"
                                                data-target="#exampleModalCenter{{ $manager['id'] }}"><i
                                                    class="ti-pencil"></i></button>
                                            <button value="{{ $manager['id'] }}" type="submit" id="delete"
                                                class="btn btn-inverse-danger btn-rounded btn-icon"><i class="ti-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="exampleModalCenter{{ $manager['id'] }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="w-lg-75 w-sm-100 modal-dialog modal-dialog-centered " role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Edit User Info</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body ">
                                                    <div class="col-12 grid-margin stretch-card">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <form action="/editUser/{{ $manager['id'] }}"
                                                                    method="POST" enctype="multipart/form-data"
                                                                    class="forms-sample">
                                                                    @csrf
                                                                    <div class="form-group">
                                                                        <label for="exampleInputName1">Full Name</label>
                                                                        <input type="text" name="name"
                                                                            class="form-control" id="exampleInputName1"
                                                                            placeholder="Full Name"
                                                                            value="{{ $manager['name'] }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail3">Email</label>
                                                                        <input type="email" name="email"
                                                                            class="form-control" id="exampleInputEmail3"
                                                                            placeholder="Email"
                                                                            value="{{ $manager['email'] }}" />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="exampleInputPhone3">Phone</label>
                                                                        <input type="text" name="phone"
                                                                            class="form-control" id="exampleInputPhone3"
                                                                            placeholder="Phone Number"
                                                                            value="{{ $manager['phone'] }}" />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="exampleSelectGender">Role</label>
                                                                        <select class="form-control" name="role"
                                                                            id="exampleSelectGender">
                                                                            <option value="user">User</option>
                                                                            <option selected value="manager">Manager
                                                                            </option>
                                                                            <option value="admin">Admin</option>
                                                                        </select>
                                                                    </div>
                                                                    {{-- sssssssssssss --}}
                                                                    @if (!($manager->google_id || $manager->github_id))
                                                                        <div class="mb-3">
                                                                            <label for="formFileMultiple"
                                                                                class="form-label">Image</label>
                                                                            <input name="image" style=""
                                                                                class="form-control btn btn-primary"
                                                                                type="file" id="formFileMultiple"
                                                                                multiple="">
                                                                        </div>
                                                                    @endif
                                                                    <button type="submit"
                                                                        class="btn btn-primary mr-2">Update</button>
                                                                </form>
                                                                <button class="btn btn-danger" data-dismiss="modal"
                                                                    aria-label="Close">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Users</h4>
                    <p class="card-description">
                        You can see all users and edit or delete them
                    </p>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        User
                                    </th>
                                    <th>
                                        Full Name
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Phone
                                    </th>
                                    <th>
                                        Events Participated
                                    </th>
                                    <th>
                                        Point
                                    </th>
                                    <th>
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td class="py-1">
                                            <img src="
                                             @if ($user->google_id || $user->github_id) {{ $user['image'] }} 
                                          
                                                
                                            @else
                                            data:image/jpg;charset=utf8;base64,
                                    {{ $user['image'] }} @endif
                                            "
                                                alt="image" />
                                        </td>
                                        <td>
                                            {{ $user['name'] }}
                                        </td>
                                        <td>
                                            {{ $user['email'] }}
                                        </td>
                                        <td>
                                            {{ $user['phone'] }}
                                        </td>
                                        <td>
                                            {{ $user->volunteers->count() }}
                                        </td>
                                        <td>
                                            {{ $user->wallet?->balance }}
                                        </td>
                                        <td>
                                            <button class="btn btn-inverse-primary btn-rounded btn-icon"
                                                data-toggle="modal"
                                                data-target="#exampleModalCenter{{ $user['id'] }}"><i
                                                    class="ti-pencil"></i></button>
                                            <button value="{{ $user->id }}" type="submit" id="delete"
                                                class="btn btn-inverse-danger btn-rounded btn-icon"><i
                                                    class="ti-trash"></i>
                                            </button>
                                            {{-- <a href="/editUser/{{ $user['id'] }}"><button
                                                    class="btn btn-inverse-danger btn-rounded btn-icon"><i
                                                        class="ti-trash"></i></button></a> --}}
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="exampleModalCenter{{ $user['id'] }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="w-lg-75 w-sm-100 modal-dialog modal-dialog-centered " role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Edit User Info</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body ">
                                                    <div class="col-12 grid-margin stretch-card">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <form action="/editUser/{{ $user['id'] }}"
                                                                    method="POST" enctype="multipart/form-data"
                                                                    class="forms-sample">
                                                                    @csrf
                                                                    <div class="form-group">
                                                                        <label for="exampleInputName1">Full Name</label>
                                                                        <input type="text" name="name"
                                                                            class="form-control" id="exampleInputName1"
                                                                            placeholder="Full Name"
                                                                            value="{{ $user['name'] }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail3">Email</label>
                                                                        <input type="email" name="email"
                                                                            class="form-control" id="exampleInputEmail3"
                                                                            placeholder="Email"
                                                                            value="{{ $user['email'] }}" />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="exampleInputPhone3">Phone</label>
                                                                        <input type="text" name="phone"
                                                                            class="form-control" id="exampleInputPhone3"
                                                                            placeholder="Phone Number"
                                                                            value="{{ $user['phone'] }}" />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="exampleSelectGender">Role</label>
                                                                        <select class="form-control" name="role"
                                                                            id="exampleSelectGender">
                                                                            <option selected value="user">User</option>
                                                                            <option value="manager">Manager</option>
                                                                            <option value="admin">Admin</option>
                                                                        </select>
                                                                    </div>
                                                                    {{-- sssssssssssss --}}
                                                                    @if (!($user->google_id || $user->github_id))
                                                                        <div class="mb-3">
                                                                            <label for="formFileMultiple"
                                                                                class="form-label">Image</label>
                                                                            <input name="image" style=""
                                                                                class="form-control btn btn-primary"
                                                                                type="file" id="formFileMultiple"
                                                                                multiple="">
                                                                        </div>
                                                                    @endif
                                                                    <button type="submit"
                                                                        class="btn btn-primary mr-2">Update</button>
                                                                </form>
                                                                <button class="btn btn-danger" data-dismiss="modal"
                                                                    aria-label="Close">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="w-lg-75 w-sm-100 modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <form action="/dashboard/users" method="POST" enctype="multipart/form-data"
                                    class="forms-sample">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputName1">Full Name</label>
                                        <input type="text" name="name" class="form-control" id="exampleInputName1"
                                            placeholder="Full Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Email</label>
                                        <input type="email" name="email" class="form-control"
                                            id="exampleInputEmail3" placeholder="Email" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPhone">Phone</label>
                                        <input type="text" name="phone" class="form-control" id="exampleInputPhone"
                                            placeholder="Phone Number" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword">Password</label>
                                        <input type="password" name="password" class="form-control"
                                            id="exampleInputPassword" placeholder="Password" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleSelectGender">Role</label>
                                        <select class="form-control" name="role" id="exampleSelectGender">
                                            <option selected disabled>Select a role</option>
                                            <option value="user">User</option>
                                            <option value="manager">Manager</option>
                                            <option value="admin">Admin</option>
                                        </select>
                                    </div>
                                    {{-- sssssssssssss --}}
                                    <div class="mb-3">
                                        <label for="formFileMultiple" class="form-label">Image</label>
                                        <input name="image" style="" class="form-control btn btn-primary"
                                            type="file" id="formFileMultiple" multiple="">
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>

                                </form>
                                <button class="btn btn-danger" data-dismiss="modal" aria-label="Close">Cancel</button>
                            </div>
                        </div>
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
        // console.log(btn);
        btn.forEach(btn => {
            btn.onclick = function() {
                // btn.preventDefault();
                console.log(btn);
                swal({
                        title: "Are you sure you want to delete this user?",
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
                            window.location.href = `/dashboard/users/delete/${btn.value}`;
                            // }, 5000);
                        } else {
                            swal("Cancelled", "Your Event is safe ;)", "error");
                        }
                    });
            }
        });
    </script>
@endsection
