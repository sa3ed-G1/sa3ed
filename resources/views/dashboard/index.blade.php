@extends('dashboard.master')
@section('content')
    @inject('Ucontur', 'App\Http\Controllers\UserAdminController')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="row">
                        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                            <h3 class="font-weight-bold">Welcome {{ auth()->user()->name }}</h3>
                            <h6 class="font-weight-normal mb-0">All systems are running smoothly!</h6>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card tale-bg">
                        <div class="card-people mt-auto">
                            <img src="../admin/images/dashboard/people.svg" alt="people">
                            <div class="weather-info">
                                <div class="d-flex">
                                    <div>
                                        <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>19<sup>C</sup></h2>
                                    </div>
                                    <div class="ml-2">
                                        <h4 class="location font-weight-normal">Jordan</h4>
                                        <h6 class="font-weight-normal">Amman</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 grid-margin transparent">
                    <div class="row">
                        <div class="col-md-6 mb-4 stretch-card transparent">
                            <div class="card card-tale">
                                <div class="card-body">
                                    <p class="mb-4">Total Events</p>
                                    <p class="fs-30 mb-2">{{ $events->count() }}</p>
                                    <p>All over Jordan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 stretch-card transparent">
                            <div class="card card-dark-blue">
                                <div class="card-body">
                                    <p class="mb-4">Total Donations</p>
                                    <p class="fs-30 mb-2">{{ $donations->sum('amount') }}</p>
                                    <p>JOD</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                            <div class="card card-light-blue">
                                <div class="card-body">
                                    <p class="mb-4">We have</p>
                                    <p class="fs-30 mb-2">{{ $users->where('is_volunteer', true)->count() }}</p>
                                    <p>Volunteer</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 stretch-card transparent">
                            <div class="card card-light-danger">
                                <div class="card-body">
                                    <p class="mb-4">We have</p>
                                    <p class="fs-30 mb-2">{{ $users->count() }}</p>
                                    <p>User</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card position-relative">
                        <div class="card-body">
                            <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2"
                                data-ride="carousel">
                                <div class="carousel-inner">
                                    {{-- carousel div start ** just dont foget the {{{active}}}  class --}}
                                    @php
                                        $active = 'active';
                                    @endphp
                                    @foreach ($events as $event)
                                        <div class="carousel-item {{ $active }} ">
                                            <div class="row">
                                                <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                                                    <div class="ml-xl-4 mt-3">
                                                        <p class="card-title">{{ $event->title }}</p>
                                                        <h3 class="font-weight-500 mt-xl-4 text-primary">We raised</h3>
                                                        <h1 class="text-primary">{{ $event->donations->sum('amount') }}</h1>

                                                    </div>
                                                    <div class="ml-xl-4 mt-3">
                                                        <h3 class="font-weight-500 mt-xl-1 text-primary">Volunteers Helped
                                                        </h3>
                                                        <h1 class="text-primary">{{ $event->Volunteers->count() }}
                                                        </h1>
                                                        <p class="mb-2 mb-xl-0"></p>
                                                    </div>
                                                    <div class="ml-xl-4 mt-3">

                                                        <p class="mb-2 mb-xl-0"><i class="icon-map mr-2"></i>
                                                            {{ $event->city . ' | ' . $event->location }}</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-xl-9">
                                                    <div class="row">
                                                        <div class="col-md-6 border-right">
                                                            <div class="table-responsive mb-3 mb-md-0 mt-3">
                                                                <table class="table table-borderless report-table">
                                                                    @php
                                                                        $av = 100 / $event->donations->count();
                                                                        $num = 100;
                                                                    @endphp
                                                                    @foreach ($event->donations->sortByDesc('amount')->take(6) as $donation)
                                                                        <tr>
                                                                            <td class="text-muted">
                                                                                {{ $donation->user->name }}</td>
                                                                            <td class="w-100 px-0">
                                                                                <div class="progress progress-md mx-4">
                                                                                    <div class="progress-bar bg-success"
                                                                                        role="progressbar"
                                                                                        style="width: {{ $num }}%"
                                                                                        aria-valuenow="95" aria-valuemin="0"
                                                                                        aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <h5 class="font-weight-bold mb-0">
                                                                                    {{ $donation->amount }} JOD
                                                                                </h5>
                                                                            </td>

                                                                        </tr>

                                                                        @php
                                                                            $num = $num - $av;
                                                                        @endphp
                                                                    @endforeach
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mt-3">
                                                            <img style="text-align: center" width="400px" height="300px"
                                                                src="data:image/jpg;charset=utf8;base64, {{ $event['thumbnail'] }}"
                                                                alt="people">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @php
                                            $active = '';
                                        @endphp
                                    @endforeach
                                    {{-- carousel div end ** just dont foget the {{{active}}}  class --}}
                                </div>
                                <a class="carousel-control-prev" href="#detailedReports" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#detailedReports" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- tables start --}}
            <div class="row">
                <div class="col-lg-6 grid-margin ">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Pending Requests</h4>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Orgnizer</th>
                                            <th>Phone</th>
                                            <th>Request date</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pendings as $pending)
                                            <tr>
                                                <td>{{ $pending->user?->name }}</td>
                                                <td>{{ $pending->user?->phone ? $pending->user->phone : 'No Phone' }}</td>
                                                <td>{{ $pending->created_at }}</td>
                                                <td><label
                                                        class="badge badge-{{ $pending->status == true ? 'success' : 'danger' }}">{{ $pending->status == true ? 'Completed' : 'Pending' }}</label>
                                                </td>
                                            </tr>
                                        @endforeach



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Newest Users</h4>

                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>User</th>
                                            <th>Email</th>
                                            <th>Joined us</th>
                                            <th>Role</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>
                                                    @if ($user->google_id)
                                                        <i class="ti-google text-info"></i>
                                                    @elseif($user->github_id)
                                                        <i class="ti-github"></i>
                                                    @else
                                                        {{ $user->email }}
                                                    @endif
                                                </td>
                                                <td>{{ $user->created_at }}</td>
                                                @if ($user->role == 'admin')
                                                    <td><label class="badge badge-danger">Admin
                                                        </label>
                                                    </td>
                                                @elseif($user->role == 'manager')
                                                    <td><label class="badge badge-warning">Manager
                                                        </label>
                                                    </td>
                                                @elseif($user->role == 'user' && $user->is_volunteer == true)
                                                    <td><label class="badge badge-info">Volunteer
                                                        </label>
                                                    </td>
                                                @else
                                                    <td><label class="badge badge-success">User
                                                        </label>
                                                    </td>
                                                @endif
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            {{-- tables end --}}



        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022. SA3ED from
                    JO.HelpOthers All rights reserved.</span>

            </div>

        </footer>
        <!-- partial -->
    </div>
@endsection
