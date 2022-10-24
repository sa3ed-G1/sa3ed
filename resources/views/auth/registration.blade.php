@extends('layout.master')
@section('content')
    {{-- <div class="container w-25">
        <!-- Pills navs -->
        <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab"
                    aria-controls="pills-login" aria-selected="true">Login</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab"
                    aria-controls="pills-register" aria-selected="false">Register</a>
            </li>
        </ul>
        <!-- Pills navs -->

        <!-- Pills content -->
        <div class="tab-content">
            <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                <form>
                    <div class="text-center mb-3">
                        <p>Sign in with:</p>


                        <button type="button" class="button is-link is-floating mx-1">
                            <i class="fab fa-google"></i>
                        </button>

                    </div>

                    <p class="text-center">or:</p>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="loginName" class="form-control" />
                        <label class="form-label" for="loginName">Email or username</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="loginPassword" class="form-control" />
                        <label class="form-label" for="loginPassword">Password</label>
                    </div>

                    <!-- 2 column grid layout -->
                    <div class="row mb-4">
                        <div class="col-md-6 d-flex justify-content-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-3 mb-md-0">
                                <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                                <label class="form-check-label" for="loginCheck"> Remember me
                                </label>
                            </div>
                        </div>

                        <div class="col-md-6 d-flex justify-content-center">
                            <!-- Simple link -->
                            <a href="#!">Forgot password?</a>
                        </div>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="button is-link is-fullwidth mb-4">Sign
                        in</button>

                    <!-- Register buttons -->
                    <div class="text-center">
                        <p>Not a member? <a href="#!">Register</a></p>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                <form>
                    <div class="text-center mb-3">
                        <p>Sign up with:</p>
                        <button type="button" class="btn btn-primary btn-floating mx-1">
                            <i class="fab fa-facebook-f"></i>
                        </button>

                        <button type="button" class="btn btn-primary btn-floating mx-1">
                            <i class="fab fa-google"></i>
                        </button>

                        <button type="button" class="btn btn-primary btn-floating mx-1">
                            <i class="fab fa-twitter"></i>
                        </button>

                        <button type="button" class="btn btn-primary btn-floating mx-1">
                            <i class="fab fa-github"></i>
                        </button>
                    </div>

                    <p class="text-center">or:</p>

                    <!-- Name input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="registerName" class="form-control" />
                        <label class="form-label" for="registerName">Name</label>
                    </div>

                    <!-- Username input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="registerUsername" class="form-control" />
                        <label class="form-label" for="registerUsername">Username</label>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="registerEmail" class="form-control" />
                        <label class="form-label" for="registerEmail">Email</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="registerPassword" class="form-control" />
                        <label class="form-label" for="registerPassword">Password</label>
                    </div>

                    <!-- Repeat Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="registerRepeatPassword" class="form-control" />
                        <label class="form-label" for="registerRepeatPassword">Repeat
                            password</label>
                    </div>

                    <!-- Checkbox -->
                    <div class="form-check d-flex justify-content-center mb-4">
                        <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked
                            aria-describedby="registerCheckHelpText" />
                        <label class="form-check-label" for="registerCheck">
                            I have read and agree to the terms
                        </label>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-3">Sign in</button>
                </form>
            </div>
        </div>
    </div> --}}




    <div style="background-color: #f89d35" class="volunteer section">
        <div class="container">
            <div class="columns is-multiline">
                {{-- login form --}}
                <div class="column is-7-desktop is-12-tablet">

                    <div class="volunteer-form-wrap column is-9-desktop is-12-tablet">
                        <span class="text-dark">Welcome</span>
                        <h2 class="mb-6 text-lg text-dark">Login</h2>
                        <form method="POST" action="/login" class="volunteer-form">
                            @csrf
                            <div class="mb-4">
                                @if (session('error'))
                                    <small class="text-danger mb-3">{{ session('error') }}</small>
                                @endif
                                <input name="emaillogin" type="email" class="input " placeholder="Emaill" />
                            </div>
                            <div class="mb-4">

                                <input name="passwordlogin" type="password" class="input" placeholder="Password" />
                            </div>
                            <div class="d-flex is-align-items-end gap-4 ">

                                <button type="submit" style="color:#863bae "
                                    class="btn btn-secondary is-rounded mt-5">Login</button>
                                <h6 class="pb-4">OR</h6>
                                <a href="/redirect" style="color:#863bae "
                                    class="btn btn-secondary w-25  is-rounded is-6 mt-5"><i class="fab fa-google"></i></a>
                                <h6 class="pb-4">OR</h6>
                                <a href="/sign_in/github" style="color:#863bae "
                                    class="btn btn-secondary w-25  is-rounded is-6 mt-5"><i class="fab fa-github"></i></a>
                                {{-- <a href="sign_in/github"><button type="button" class="button is-link is-floating mx-1"><i class="fab fa-github"></i> </button></a> --}}
                            </div>
                        </form>
                    </div>
                </div>
                {{-- register form --}}
                <div style="position: relative" class="column is-5-desktop is-12-tablet">

                    <div class="volunteer-form-wrap">
                        <span class="text-white">Join With us</span>
                        <h2 class="mb-6 text-lg text-white">Register</h2>
                        <form method="POST" action="/signup" class="volunteer-form" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <input name="name" type="text" class="input" placeholder="Name" />
                            </div>
                            <div class="mb-4">
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <input name="email" type="email" class="input" placeholder="Emaill Address" />
                            </div>
                            <div class="mb-4">
                                @error('phone')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <input name="phone" type="text" class="input" placeholder="Phone"/>
                            </div>
                            <div class="mb-4">
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <input name="password" type="password" class="input" placeholder="Password" />
                            </div>
                            <div class="mb-4">
                                @error('password_confirmation')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <input name="password_confirmation" type="password" class="input"
                                    placeholder="Confirm Password" />
                            </div>
                            <div class="file is-light">
                                @error('image')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <label class="file-label">
                                    <input class="file-input" type="file" name="image">
                                    <span class="file-cta">
                                        <span class="file-icon">
                                            <i class="fas fa-upload"></i>
                                        </span>
                                        <span class="file-label">
                                            Choose you picture
                                        </span>
                                    </span>

                                </label>
                            </div>


                            <button type="submit" class="btn btn-main is-rounded mt-5">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
