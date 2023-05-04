@extends('layouts.app')
  @section('content')
    <!-- offers -->
    <section class="tool-hero">
     <div class="container">
       <div class="row align-items-center">
         <div class="col-auto">
           <h2>
             Tools for your <br />
             <span class="fade-blue"> Business Growth </span>
           </h2>
           <p>
             We seek to position ourselves as partners to our SME Customers to
             help them through the transition process and building a resilient
             business.
           </p>
         </div>
         <div class="col-md d-none d-lg-block">
           <img src="{{asset('img/tool-hero.png')}}" alt="Business Growth" />
         </div>
       </div>
     </div>
   </section>

   <section class="tools-offer mb-5 pb-md-5 pb-4">
     <div></div>
     <div class="container">
       <h4>Grow Your Business. Get These Amazing Offers For Free.</h4>
       <div class="row justify-content-center justify-content-md-start">
         <div class="col-lg-3 col-md-6 offer">
           <img src="{{asset('icons/offer-card.svg')}}" alt="offer" />
           <p>Get a Business Debit card that Brings Amazing Offers</p>
           <a href="/biz-debit-card">
             <button class="btn">Get Offer</button>
           </a>
         </div>

         <div class="col-lg-3 col-md-6 offer">
           <img src="{{asset('icons/offer-loan.svg')}}" alt="offer" />
           <p>Get Access to Loans to Aid your Business to Growth</p>
           <a href="/loans">
             <button class="btn">Get Offer</button>
           </a>
         </div>

         <div class="col-lg-3 col-md-6 offer">
           <img src="{{asset('icons/offer-doctor.svg')}}" alt="offer" />
           <p>Let&#39;s Treat your Business in our Business Clinic</p>
           <a href="/loan">
             <button class="btn">Get Offer</button>
           </a>
         </div>

         <div class="col-lg-3 col-md-6 offer">
           <img src="{{asset('icons/offer-diamond.svg')}}" alt="offer" />
           <p>All our Proposition Suitable for your Kind of Business</p>
           <a href="/proposition">
             <button class="btn">Get Offer</button>
           </a>
         </div>
       </div>
     </div>
   </section>
   <!-- offers end -->
  @endsection