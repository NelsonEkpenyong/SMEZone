@extends('layouts.app')
  @section('content')
  <section class="container debit-card py-5">
   <div class="row mt-3 mt-sm-0 justify-content-between proposition">
     <h2 class="col-auto" style="line-height: 35px">All Available Offers</h2>
     <div class="d-flex apply-here col-auto">
       <p>Need a Debit Card?</p>
       <a href="#">Apply Here</a>
     </div>
   </div>

   <div class="row mt-0 debit-card">
     <div class="col-lg-3 col-md-6">
       <div class="d-flex flex-column justify-content-between">
         <div>
           <img src="{{asset('img/debit-img1.png')}}" alt="" />
           <h5 class="text-center">Payment Acceptance Service (SwiftPay)</h5>
         </div>
         <div class="d-flex flex-column align-items-center">
           <p class="text-center">
             Register as a merchant and get paid with or without a website.
           </p>
           <button
             class="btn"
             data-bs-toggle="modal"
             data-bs-target="#exampleModal"
           >
             Register Now
           </button>
         </div>
       </div>
     </div>
     <div class="col-lg-3 col-md-6">
       <div class="d-flex flex-column justify-content-between">
         <div>
           <img src="{{asset('img/debit-img2.png')}}" alt="" />
           <h5 class="text-center">Courier Service</h5>
           <div class="text-center">
             <img
               src="{{asset('img/red-star.png')}}"
               alt="red star"
               class="red-star"
             />
           </div>
         </div>
         <div class="d-flex flex-column align-items-center">
           <p class="text-center">
             Get up to 20% off your delivery to your customers via Fedex,
             DHL, GIG
           </p>
           <button
             class="btn"
             data-bs-toggle="modal"
             data-bs-target="#exampleModal"
           >
             Register Now
           </button>
         </div>
       </div>
     </div>
     <div class="col-lg-3 col-md-6">
       <div class="d-flex flex-column justify-content-between">
         <div>
           <img src="{{asset('img/debit-img3.png')}}" alt="" />
           <h5 class="text-center">Google Business Advisory</h5>
         </div>
         <div class="d-flex flex-column align-items-center">
           <p class="text-center">
             Get up to ₦5000 google advert campaign credit every month.
           </p>
           <button
             class="btn"
             data-bs-toggle="modal"
             data-bs-target="#exampleModal"
           >
             Register Now
           </button>
         </div>
       </div>
     </div>
     <div class="col-lg-3 col-md-6">
       <div class="d-flex flex-column justify-content-between">
         <div>
           <img src="{{asset('img/debit-img4.png')}}" alt="" />
           <h5 class="text-center">DocuSign</h5>
         </div>
         <div class="d-flex flex-column align-items-center">
           <p class="text-center">Get up to 30% off on DocuSign</p>
           <button
             class="btn"
             data-bs-toggle="modal"
             data-bs-target="#exampleModal"
           >
             Register Now
           </button>
         </div>
       </div>
     </div>
   </div>
  </section>

   <!-- modal  -->
   <div
     class="modal fade"
     style="display: none"
     id="exampleModal"
     tabindex="-1"
     aria-labelledby="exampleModalLabel"
     aria-hidden="true"
   >
     <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel">
             Registration Form
           </h5>
           <button
             type="button"
             class="btn-close"
             data-bs-dismiss="modal"
             aria-label="Close"
           ></button>
         </div>
         <div class="modal-body">
           <form action="#">
             <div class="form-group">
               <input
                 type="text"
                 class="form-control"
                 id="firstname"
                 placeholder="Fullname"
               />
             </div>
             <div class="form-group">
               <input
                 type="email"
                 class="form-control"
                 id="email"
                 placeholder="Email Address"
               />
             </div>
             <div class="form-group">
               <input
                 type="number"
                 class="form-control"
                 id="Phone"
                 placeholder="Phone Number"
               />
             </div>
             <div class="form-group">
               <input
                 type="number"
                 class="form-control"
                 id="Account"
                 placeholder="Account Number"
               />
             </div>
             <div class="form-group">
               <select class="form-select" id="exampleSelect">
                 <option value="" selected>
                   Do you have an access business card?
                 </option>
                 <option value="">2</option>
                 <option value="">3</option>
                 <option value="">4</option>
                 <option value="">5</option>
               </select>
             </div>

             <button class="btn submit-reg">Submit</button>
           </form>
         </div>
       </div>
     </div>
   </div>
   <!-- end of modal  -->
  @endsection