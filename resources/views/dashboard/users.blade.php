@extends('dashboard.master')


@section('content')
    <div class="row">
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
                                            <img src="data:image/jpg;charset=utf8;base64,
                                            {{ $manager['image'] }}"
                                                alt="image" />
                                        </td>
                                        <td>
                                            {{ $manager['name'] }}
                                        </td>
                                        <td>
                                            {{ $manager['email'] }}
                                        </td>
                                        <td>
                                            {{ $manager['eventts'] }}
                                        </td>
                                        <td>
                                            <a href="editUser/{{ $manager['id'] }}"><button
                                                    class="btn btn-inverse-primary btn-rounded btn-icon"><i
                                                        class="ti-pencil"></i></button></a>
                                            <a href="editUser/{{ $manager['id'] }}"><button
                                                    class="btn btn-inverse-danger btn-rounded btn-icon"><i
                                                        class="ti-trash"></i></button></a>
                                        </td>
                                    </tr>
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
                                            <img src="data:image/jpg;charset=utf8;base64,
                                            {{ $user['image'] }}"
                                                alt="image" />
                                        </td>
                                        <td>
                                            {{ $user['name'] }}
                                        </td>
                                        <td>
                                            {{ $user['email'] }}
                                        </td>
                                        <td>
                                            {{ $user->volunteers->count() }}
                                        </td>
                                        <td>
                                            {{ $user->wallet?->balance }}
                                        </td>
                                        <td>
                                            <a href="/editUser/{{ $user['id'] }}"><button
                                                    class="btn btn-inverse-primary btn-rounded btn-icon"><i
                                                        class="ti-pencil"></i></button></a>
                                            <a href="/editUser/{{ $user['id'] }}"><button
                                                    class="btn btn-inverse-danger btn-rounded btn-icon"><i
                                                        class="ti-trash"></i></button></a>
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
    <div class="container">
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
@endsection
