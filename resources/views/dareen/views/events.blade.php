@extends('layout.master')
@section('content')
<section class="page-title bg-1">
    <div class="container">
       <div class="columns">
          <div class="column is-12">
             <div class="block has-text-centered">
                <span class="text-white">Event Fundarising</span>
                <h1 class="is-capitalize text-lg">All Events</h1>
             </div>
          </div>
       </div>
    </div>
 </section>
 
 
 <section class="section event">
     <div class="container">
         <div class="columns is-multiline is-justify-content-center">
             <div class="column is-4-desktop is-6-tablet">
                 <div class="card event-item is-shadowless">
                       <img src="images/about/event-2.jpg" class="w-100" alt="...">
                       <div class="card-body">
                         <h3 class="mb-4"><a href="event-single.html" class="is-block">T-shirt Fundarising for Shelter child</a></h3>
                         <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                       </div>
                       <ul class="list-group list-group-flush">
                         <li class="list-group-item"><strong>Date : </strong> 16th september 2019</li>
                         <li class="list-group-item"><strong>Location : </strong> manking park ,USA</li>
                         <li class="list-group-item"><strong>Organizer : </strong> Chariti hub</li>
 
                       </ul>
 
                       <a href="single-event" class="btn btn-main-2 is-block has-text-centered">Learn More</a>
                 </div>
             </div>
 
             {{-- <div class="column is-4-desktop is-6-tablet">
                 <div class="card event-item is-shadowless">
                       <img src="images/about/event-1.jpg" class="w-100" alt="...">
                       <div class="card-body">
                         <h3 class="mb-4"><a href="event-single.html" class="is-block">Fundarising for proper education</a></h3>
                         <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                       </div>
                       <ul class="list-group list-group-flush">
                         <li class="list-group-item"><strong>Date : </strong> 16th september 2019</li>
                         <li class="list-group-item"><strong>Location : </strong> manking park ,USA</li>
                         <li class="list-group-item"><strong>Organizer : </strong> Chariti hub</li>
                       </ul>
 
                       <a href="event-single" class="btn btn-main-2 is-block has-text-centered">Learn More</a>
                 </div>
             </div>
  --}}
             {{-- <div class="column is-4-desktop is-6-tablet">
                 <div class="card event-item is-shadowless">
                       <img src="images/about/event-3.jpg" class="w-100" alt="...">
                       <div class="card-body">
                         <h3 class="mb-4"><a href="event-single.html" class="is-block">Stage performance for poor child health</a></h3>
                         <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                       </div>
                       <ul class="list-group list-group-flush">
                         <li class="list-group-item"><strong>Date : </strong> 16th september 2019</li>
                         <li class="list-group-item"><strong>Location : </strong> manking park ,USA</li>
                         <li class="list-group-item"><strong>Organizer : </strong> Chariti hub</li>
                       </ul>
 
                       <a href="event-single.html" class="btn btn-main-2 is-block has-text-centered">Learn More</a>
                 </div>
             </div>
             <div class="column is-4-desktop is-6-tablet">
                 <div class="card event-item is-shadowless">
                       <img src="images/about/event-1.jpg" class="w-100" alt="...">
                       <div class="card-body">
                         <h3 class="mb-4"><a href="event-single.html" class="is-block">T-shirt Fundarising for Shelter child</a></h3>
                         <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                       </div>
                       <ul class="list-group list-group-flush">
                         <li class="list-group-item"><strong>Date : </strong> 16th september 2019</li>
                         <li class="list-group-item"><strong>Location : </strong> manking park ,USA</li>
                         <li class="list-group-item"><strong>Organizer : </strong> Chariti hub</li>
                       </ul>
                       <a href="event-single.html" class="btn btn-main-2 is-block has-text-centered">Learn More</a>
                 </div>
             </div>
 
             <div class="column is-4-desktop is-6-tablet">
                 <div class="card event-item is-shadowless">
                       <img src="images/about/event-2.jpg" class="w-100" alt="...">
                       <div class="card-body">
                         <h3 class="mb-4"><a href="event-single.html" class="is-block">Fundarising for proper education</a></h3>
                         <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                       </div>
                       <ul class="list-group list-group-flush">
                         <li class="list-group-item"><strong>Date : </strong> 16th september 2019</li>
                         <li class="list-group-item"><strong>Location : </strong> manking park ,USA</li>
                         <li class="list-group-item"><strong>Organizer : </strong> Chariti hub</li>
                       </ul>
                       <a href="event-single.html" class="btn btn-main-2 is-block has-text-centered">Learn More</a>
                 </div>
             </div>
 
             <div class="column is-4-desktop is-6-tablet">
                 <div class="card event-item is-shadowless">
                       <img src="images/about/event-4.jpg" class="w-100" alt="...">
                       <div class="card-body">
                         <h3 class="mb-4"><a href="event-single.html" class="is-block">Stage performance for poor child health</a></h3>
                         <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                       </div>
                       <ul class="list-group list-group-flush">
                         <li class="list-group-item"><strong>Date : </strong> 16th september 2019</li>
                         <li class="list-group-item"><strong>Location : </strong> manking park ,USA</li>
                         <li class="list-group-item"><strong>Organizer : </strong> Chariti hub</li>
                       </ul>
                       <a href="event-single.html" class="btn btn-main-2 is-block has-text-centered">Learn More</a>
                 </div>
             </div> --}}
 
         </div>
     </div>
 </section>
@endsection