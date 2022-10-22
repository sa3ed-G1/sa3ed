@extends('dashboard.master')
@section('content')
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title" style="font-size:25px !important;">Donations Transactions</h1>
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
                                        Ammount
                                    </th>
                                    <th>
                                        Event
                                    </th>
                                    <th>
                                        Date & Time
                                    </th>
                                </tr>
                            </thead>
                            @inject('eve', 'App\Http\Controllers\EventtController')
                            <tbody>
                                @foreach ($donations as $donation)
                                    <tr>
                                        <td class="py-1">
                                            <img src="@if ($donation->user->google_id || $donation->user->github_id) {{ $donation->user['image'] }} 
                                          
                                                
                                            @else
                                            data:image/jpg;charset=utf8;base64,
                                    {{ $donation->user['image'] }} @endif"
                                                alt="image" />
                                        </td>
                                        <td>
                                            {{ $donation->user->name }}
                                        </td>
                                        <td>

                                            {{ $donation->user->email }}
                                        </td>

                                        <td>
                                            {{ $donation->amount }} JOD
                                        </td>

                                        <td>
                                            {{ $donation->eventt->title }}
                                        </td>
                                        <td>

                                            {{ $donation->created_at }}

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
