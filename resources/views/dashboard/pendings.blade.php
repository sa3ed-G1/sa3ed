@extends('dashboard.master')
@section('title')
    Events
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title" style="font-size:25px !important;">Managers Applications</h1>
                    {{-- <button class="btn btn-outline-info btn-icon-text" data-toggle="modal" data-target="#exampleModalCenter">
                            <i class="ti-plus btn-icon-prepend"></i>
                            <strong style="font-size:15px;">Create Event</strong>
                        </button> --}}
                    <!-- Modal -->

                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>

                                <tr>
                                    <th>
                                        Image
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
                                        Message
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            @inject('eve', 'App\Http\Controllers\EventtController')
                            <tbody>
                                @foreach ($pendings as $pending)
                                    <tr>
                                        <td class="py-1">
                                            <img src="data:image/jpg;charset=utf8;base64,
                                        {{ $pending->user->image }}"
                                                alt="image" />
                                        </td>
                                        <td>
                                            {{ $pending->user->name }}
                                        </td>
                                        <td>

                                            {{ $pending->user->email }}
                                        </td>

                                        <td>
                                            {{ $pending->user->phone ? $pending->user->phone : 'no phone' }}
                                        </td>

                                        <td>
                                            {{ $pending->user->phone ? $pending->user->phone : 'no phone' }}
                                        </td>
                                        <td>

                                            <div style="display: flex !important; column-gap: 1rem; ">
                                                <form class="is-flex" method="POST"
                                                    action="/dashboard/pendings/{{ $pending->id }}">
                                                    @csrf
                                                    @method('PUT')
                                                    <input hidden value="{{ $pending->user_id }}" type="text">
                                                    <button type="submit"
                                                        class="btn btn-inverse-success btn-rounded btn-icon "
                                                        onclick="return confirm('Are you sure you want to assign as a manager?')"><i
                                                            class="ti-medall-alt"></i></button>
                                                </form>


                                                <form class="is-flex" method="POST"
                                                    action="/dashboard/events/{{ $pending->id }}">
                                                    @csrf
                                                    @method('DElETE')
                                                    <button type="submit"
                                                        class="btn btn-inverse-danger btn-rounded btn-icon"
                                                        onclick="return confirm('Are you sure you want to delete event?')"><i
                                                            class="ti-trash"></i></button>
                                                </form>

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
