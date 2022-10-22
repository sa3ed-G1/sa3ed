@extends('dashboard.master')


@section('content')
    @if (session('updateUser'))
        <div class="alert alert-success"><strong>{{ session('updateUser') }}</strong></div>
    @endif
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit User Info</h4>
                    <p class="card-description">
                        You can update user info here
                    </p>
                    <form class="forms-sample" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Full Name</label>
                            <input type="text" name='name' value="{{ $user['name'] }}" class="form-control"
                                id="exampleInputName1" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Email address</label>
                            <input type="email" name="email" value="{{ $user['email'] }}" class="form-control"
                                id="exampleInputEmail3" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Role</label>
                            <select class="form-control" name="role" id="exampleSelectGender">
                                <option value="user" <?php echo $user['role'] == 'user' ? 'selected' : ' '; ?>>User</option>
                                <option value="manager" <?php echo $user['role'] == 'manager' ? 'selected' : ' '; ?>>Manager</option>
                                <option value="admin" <?php echo $user['role'] == 'admin' ? 'selected' : ' '; ?>>Admin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <br>
                            <input type="file" name="image">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
