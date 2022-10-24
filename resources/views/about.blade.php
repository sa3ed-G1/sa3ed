@extends('layout.master')
@section('content')
    {{--  --}}
    <section class="page-title bg-1">
        <div class="container">
            <div class="columns">
                <div class="column is-12">
                    <div class="block has-text-centered">
                        <span class="text-white">who we are</span>
                        <h1 class="is-capitalize text-lg">About Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--  --}}
    <section class="section about-page">
        <div class="container">
            <div class="columns is-align-items-center">
                <div class="column is-4-desktop is-5-tablet">
                    <div class="about-item-img">
                        <img src="https://global.unitednations.entermediadb.net/assets/mediadb/services/module/asset/downloads/preset/assets/2014/03/18742/image1170x530cropped.jpg"
                            alt="" class=" w-100">
                    </div>
                </div>

                <div class="column is-8-desktop is-7-tablet">
                    <div class="about-item-content pl-5">
                        <h2 class="mb-5 content-title"> Welcome to Sa3ed Organization</h2>
                        <p class="is-size-5 mb-4">Sa3ed Charite is the Jordan #1 fundraising site forcharitable causes.
                            Raise money for over 1.5 thousand charities.</p>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        {{-- <a href="#" class="btn btn-main is-rounded">Learn More</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--  --}}
    <div class="section pt-0">
        <div class="container">
            <div class="columns is-justify-content-center">
                <div class="column is-8-desktop is-12-tablet">
                    <div class="content has-text-centered">
                        <h2 class="content-title mb-5">Our Partners</h2>
                        <p>Some of the amazing charities & companies that gives back to the community.</p>
                    </div>
                </div>
            </div>

            <div class="clients-item-wrap mt-5">
                <div class="columns is-multiline">
                    <div class="column is-3-desktop is-6-tablet">

                        <img src="images/clients/client1.jpg" alt="" class=" ">

                    </div>

                    <div class="column is-3-desktop is-6-tablet">

                        <img src="images/clients/client2.jpg" alt="" class="">

                    </div>

                    <div class="column is-3-desktop is-6-tablet">

                        <img src="images/clients/client5.png" alt="" class="">

                    </div>

                    <div class="column is-3-desktop is-6-tablet">

                        <img src="images/clients/client4.png" alt="" class="">

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--  Section Services Start -->
    <section id="team" class="section team">
        <div class="container">
            <div class="columns is-desktop is-justify-content-center">
                <div class="column is-7-desktop has-text-centered">
                    <div class="section-title">
                        <span class="h6 text-color">Founders</span>
                        <h2 class="mt-4 content-title">To whom helped making dreams come true , Thank You</h2>
                    </div>
                </div>
            </div>

            <div class="columns is-multiline is-justify-content-center">
                <div class="column is-3-desktop is-6-tablet">
                    <div class="team-item-wrap">
                        <div class="team-item is-relative">
                            <img src="images/team/person.png" alt="" class=" w-100">
                            <div class="team-img-hover">
                                <ul class="team-social list-inline">
                                    <li class="list-inline-item">
                                        <a href="https://github.com/ibra-khm
                                        "
                                            target="_blank" class="bg-dark"><i class="ti-github" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-item-content">
                            <h4 class="mt-3 mb-0 is-capitalize">Ibrahim Khamaiseh</h4>
                            <p>Full Stack Developer</p>
                        </div>
                    </div>
                </div>

                <div class="column is-3-desktop is-6-tablet">
                    <div class="team-item-wrap">
                        <div class="team-item is-relative">
                            <img src="images/team/person.png" alt="" class=" w-100">
                            <div class="team-img-hover">
                                <ul class="team-social list-inline">
                                    <li class="list-inline-item">
                                        <a href="https://github.com/AnzorYarvas123
                                        "
                                            target="_blank" class="bg-dark"><i class="ti-github" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-item-content">
                            <h4 class="mt-3 mb-0 is-capitalize">Anzor Yarvas</h4>
                            <p>Full Stack Developer</p>
                        </div>
                    </div>
                </div>

                <div class="column is-3-desktop is-6-tablet">
                    <div class="team-item-wrap ">
                        <div class="team-item is-relative">
                            <img src="images/team/person.png" alt="" class=" w-100">
                            <div class="team-img-hover">
                                <ul class="team-social list-inline">
                                    <li class="list-inline-item">
                                        <a href="https://github.com/YousefK5" target="_blank" class="bg-dark"><i
                                                class="ti-github" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-item-content">
                            <h4 class="mt-3 mb-0 is-capitalize">Yousef Suliman</h4>
                            <p>Full Stack Developer</p>
                        </div>
                    </div>
                </div>

                <div class="column is-3-desktop is-6-tablet">
                    <div class="team-item-wrap">
                        <div class="team-item is-relative">
                            <img src="images/team/person.png" alt="" class=" w-100">
                            <div class="team-img-hover">
                                <ul class="team-social list-inline">
                                    <li class="list-inline-item">
                                        <a href="https://github.com/dareen323
                                        "
                                            target="_blank" class="bg-dark"><i class="ti-github"
                                                aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-item-content">
                            <h4 class="mt-3 mb-0 is-capitalize">Dareen Al-Hiasat</h4>
                            <p>Full Stack Developer</p>
                        </div>
                    </div>
                </div>

                <div class="column is-3-desktop is-6-tablet">
                    <div class="team-item-wrap">
                        <div class="team-item is-relative">
                            <img src="images/team/person.png" alt="" class=" w-100">
                            <div class="team-img-hover">
                                <ul class="team-social list-inline">
                                    <li class="list-inline-item">
                                        <a href="https://github.com/Raneem-Hamid
                                        "
                                            target="_blank" class="bg-dark"><i class="ti-github"
                                                aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-item-content">
                            <h4 class="mt-3 mb-0 is-capitalize">Raneem Hamid</h4>
                            <p>Full Stack Developer</p>
                        </div>
                    </div>
                </div>

                <div class="column is-3-desktop is-6-tablet">
                    <div class="team-item-wrap ">
                        <div class="team-item is-relative">
                            <img src="images/team/person.png" alt="" class=" w-100">
                            <div class="team-img-hover">
                                <ul class="team-social list-inline">
                                    <li class="list-inline-item">
                                        <a href="https://github.com/Malek-ALdesougi" target="_blank" class="bg-dark"><i
                                                class="ti-github" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-item-content">
                            <h4 class="mt-3 mb-0 is-capitalize">Malek Al-Desougi</h4>
                            <p>Full Stack Developer</p>
                        </div>
                    </div>
                </div>

                <div class="column is-3-desktop is-6-tablet">
                    <div class="team-item-wrap ">
                        <div class="team-item is-relative">
                            <img src="images/team/person.png" alt="" class=" w-100">
                            <div class="team-img-hover">
                                <ul class="team-social list-inline">
                                    <li class="list-inline-item">
                                        <a href="https://github.com/AZZIE2000" target="_blank" class="bg-dark"><i
                                                class="ti-github" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-item-content">
                            <h4 class="mt-3 mb-0 is-capitalize">Azzam M.Faraj</h4>
                            <p>Full Stack Developer</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>


    <section>
        <div class="container">
            <div class="column">
                <div class="column lg-12">
                    <div class="section-divider"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
