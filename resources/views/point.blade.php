@extends('layout.master')

@section('content')
<style>
    .bg-5 {
    background: url("https://media.istockphoto.com/photos/young-adult-woman-high-fives-child-volunteer-picture-id1389702301?b=1&k=20&m=1389702301&s=170667a&w=0&h=sE7UgDN-2-CS0CXVwD39spFb5CGvqRufiWhUPsqRCMk=") no-repeat 50% 50%;
    background-size: cover;
    }


</style>
<section class="page-title jumbotron bg-5">
<div class="container ">
    <div class="columns">
        <div class="column is-12">
            <div class="block has-text-centered">
                <h1 class="is-capitalize text-md"> Offers for Our Volunteer</h1>
                <span class="text-white is-capitalize text-md">we'd like to give our passionate volunteer some offers  </span>
            </div>
        </div>
    </div>
</div>
</section>
<div class="container ">
<div class="row my-5 ">
<div class="card col-lg-4">
    <div class="card-img-sec">
        {{-- <a href="/webviews/deals/en/Deals/Details/50"> --}}
            <img class="card-img-top" src="https://couponzimages.dsquares.com/orange/images/main/1572.jpg" alt="Card image">
            <span class="img-tag img-tag-2"></span>
        </a>
    </div>
    <div class="card-body pt-3 pl-1">
        
            <div class="header-container">
                
                <h4 class="card-title ">Wazzup Dog - 50% discount</h4>
                
                <div class="share-button-sec">

                </div>

                


            </div>

            <p class="card-text pb-2">Get your sandwich for <b>100</b> points&nbsp;</p>
        
        {{-- <a class="nav-icon d-md-none d-flex" href="/webviews/deals/en/Deals/Details/50"> <i class="fa fa-chevron-right " aria-hidden="true"></i> </a> --}}
        <button onclick="claimDiscount()" type="button" class="btn btn-warning" id="btnClaim"><i class="fa loader-btn fa-circle-o-notch fa-spin"></i> Claim this Offer</button>

    </div>

</div>
<div class="card col-lg-4 ">
    <div class="card-img-sec">
        {{-- <a href="/webviews/deals/en/Deals/Details/50"> --}}
            <img class="card-img-top" src="https://couponzimages.dsquares.com/orange/images/main/1571.jpg" alt="Card image" >
            <span class="img-tag img-tag-2"></span>
        </a>
    </div>
    <div class="card-body pt-3 pl-1">
        
            <div class="header-container">
                
                <h4 class="card-title ">Chipsy Jo 30% discount</h4>
                
                <div class="share-button-sec">

                </div>

                


            </div>

            <p class="card-text pb-2">Get your  sandwich for <b>75</b> points&nbsp;</p>
        
        {{-- <a class="nav-icon d-md-none d-flex" href="/webviews/deals/en/Deals/Details/50"> <i class="fa fa-chevron-right " aria-hidden="true"></i> </a> --}}
        <button onclick=" Swal.fire(
            'Thank you !',
            'Your offer is confirmed, You will receive an SMS with your discount code shortly!','success' )" type="button" class="btn btn-warning" id="btnClaim"><i class="fa loader-btn fa-circle-o-notch fa-spin"></i> Claim this Offer</button>

    </div>

</div>
<div class="card col-lg-4 ">
    <div class="card-img-sec">
        {{-- <a href="/webviews/deals/en/Deals/Details/50"> --}}
            <img class="card-img-top" src="https://couponzimages.dsquares.com/orange/images/main/450.jpg" alt="Card image" >
            <span class="img-tag img-tag-2"></span>
        </a>
    </div>
    <div class="card-body pt-3 pl-1">
        
            <div class="header-container">
                
                <h4 class="card-title ">Creper - </h4>
                
                <div class="share-button-sec">

                </div>

                


            </div>

            <p class="card-text pb-2">Get your 50% discount for <b>100</b> points&nbsp;</p>
        
        {{-- <a class="nav-icon d-md-none d-flex" href="/webviews/deals/en/Deals/Details/50"> <i class="fa fa-chevron-right " aria-hidden="true"></i> </a> --}}
        <button onclick=" Swal.fire(
            'Thank you !',
            'Your offer is confirmed, You will receive an SMS with your discount code shortly!','success' )" type="button" class="btn btn-warning" id="btnClaim"><i class="fa loader-btn fa-circle-o-notch fa-spin"></i> Claim this Offer</button>

    </div>

</div>
</div>
<div class="row my-5">
    
    <div class="card col-lg-4">
        <div class="card-img-sec">
            {{-- <a href="/webviews/deals/en/Deals/Details/50"> --}}
                <img class="card-img-top" src="https://couponzimages.dsquares.com/orange/images/main/464.jpg" alt="Card image" >
                <span class="img-tag img-tag-2"></span>
            </a>
        </div>
        <div class="card-body pt-3 pl-1">
            
                <div class="header-container">
                    
                    <h4 class="card-title ">Deep Dish</h4>
                    
                    <div class="share-button-sec">
    
                    </div>
    
                    
    
    
                </div>
    
                <p class="card-text pb-2">Buy 3 beef Tacos and get Taco for free <b>50</b> points&nbsp;</p>
            
            {{-- <a class="nav-icon d-md-none d-flex" href="/webviews/deals/en/Deals/Details/50"> <i class="fa fa-chevron-right " aria-hidden="true"></i> </a> --}}
            <button onclick="claimDiscount()" type="button" class="btn btn-warning" id="btnClaim"><i class="fa loader-btn fa-circle-o-notch fa-spin"></i> Claim this Offer</button>
    
        </div>
    
    </div>
    <div class="card col-lg-4">
        <div class="card-img-sec">
            {{-- <a href="/webviews/deals/en/Deals/Details/50"> --}}
                <img class="card-img-top" src="https://couponzimages.dsquares.com/orange/images/main/548.jpg" alt="Card image" >
                <span class="img-tag img-tag-2"></span>
            </a>
        </div>
        <div class="card-body pt-3 pl-1">
            
                <div class="header-container">
                    
                    <h4 class="card-title ">Get 20% off on Pizza Lover application</h4>
                    
                    <div class="share-button-sec">
    
                    </div>
    
                    
    
    
                </div>
    
                <p class="card-text pb-2">Get 20% off <b>37</b> points&nbsp;</p>
            
            {{-- <a class="nav-icon d-md-none d-flex" href="/webviews/deals/en/Deals/Details/50"> <i class="fa fa-chevron-right " aria-hidden="true"></i> </a> --}}
            <button onclick="claimDiscount()" type="button" class="btn btn-warning" id="btnClaim"><i class="fa loader-btn fa-circle-o-notch fa-spin"></i> Claim this Offer</button>
    
        </div>
    
    </div>
    <div class="card col-lg-4">
        <div class="card-img-sec">
            {{-- <a href="/webviews/deals/en/Deals/Details/50"> --}}
                <img class="card-img-top" src="https://couponzimages.dsquares.com/orange/images/main/485.jpg" alt="Card image" >
                <span class="img-tag img-tag-2"></span>
            </a>
        </div>
        <div class="card-body pt-3 pl-1">
            
                <div class="header-container">
                    
                    <h4 class="card-title ">Papaya Restaurant- Amman</h4>
                    
                    <div class="share-button-sec">
    
                    </div>
    
                    
    
    
                </div>
    
                <p class="card-text pb-2">Get 10% off on your breakfast meal <b>15</b> points&nbsp;</p>
            
            {{-- <a class="nav-icon d-md-none d-flex" href="/webviews/deals/en/Deals/Details/50"> <i class="fa fa-chevron-right " aria-hidden="true"></i> </a> --}}
            <button onclick="claimDiscount()" type="button" class="btn btn-warning" id="btnClaim"><i class="fa loader-btn fa-circle-o-notch fa-spin"></i> Claim this Offer</button>
    
        </div>
    
    </div>
    </div>
</div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection