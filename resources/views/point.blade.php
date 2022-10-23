@extends('layout.master')

@section('content')
    <style>
        .bg-5 {
            background: url("https://media.istockphoto.com/photos/young-adult-woman-high-fives-child-volunteer-picture-id1389702301?b=1&k=20&m=1389702301&s=170667a&w=0&h=sE7UgDN-2-CS0CXVwD39spFb5CGvqRufiWhUPsqRCMk=") no-repeat 50% 50%;
            background-size: cover;
        }
    </style>
    @if(session('addOffer'))
        <script>
            window.onload= function() {
            Swal.fire(
                'Thank you !',
                'Your offer is confirmed, You will receive an SMS with your discount code shortly!',
                'success' 
                );
            }

        </script>
    @endif
    <section class="page-title jumbotron bg-5">
        <div class="container ">
            <div class="columns">
                <div class="column is-12">
                    <div class="block has-text-centered">
                        <h1 class="is-capitalize text-md"> Offers for Our Volunteer</h1>
                        <span class="text-white is-capitalize text-md">we'd like to give our passionate volunteer some offers
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container ">
        <h1>You Have {{auth()->user()->wallet->balance}} Points</h1>
        <div class="row my-5 ">
            @foreach ($offers as $offer)
            {{-- <h3>You Have {{!(auth()->user()->offer_users->where('offer_id', $offer['id'])->isEmpty())}} Points</h3> --}}
            <div class="card col-lg-4">
                <div class="card-img-sec">
                    {{-- <a href="/webviews/deals/en/Deals/Details/50"> --}}
                    <img class="card-img-top" src="{{$offer['image']}}"
                        alt="Card image">
                    <span class="img-tag img-tag-2"></span>
                    </a>
                </div>
                <div class="card-body pt-3 pl-1">

                    <div class="header-container">

                        <h4 class="card-title ">{{$offer['title']}}</h4>
                        <div class="share-button-sec">
                        </div>
                    </div>
                    <p class="card-text pb-2">{{$offer['description']}} for <b>{{$offer['point']}}</b> points&nbsp;</p>
                    {{-- <a class="nav-icon d-md-none d-flex" href="/webviews/deals/en/Deals/Details/50"> <i class="fa fa-chevron-right " aria-hidden="true"></i> </a> --}}
                    @if (auth()->user()->wallet->balance < $offer['point'] || !(auth()->user()->offer_users->where('offer_id', $offer['id'])->isEmpty())) 
                        <button type="button" disabled class="btn btn-warning" id="btnClaim"><i class="fa loader-btn fa-circle-o-notch fa-spin"></i> Claim this Offer</button>
                    @else
                    <a href="claimOffer/{{$offer['id']}}">
                        <button type="button" class="btn btn-warning" id="btnClaim"><i class="fa loader-btn fa-circle-o-notch fa-spin"></i> Claim this Offer</button>
                    </a>
                    @endif
                    </div>
            </div>             
            @endforeach
        </div>
        
    </div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
