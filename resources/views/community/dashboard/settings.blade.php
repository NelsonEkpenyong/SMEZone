
@extends('layouts.dashboard.app')
  @section('content')
  <main class="dashboard">
   <div class="row justify-content-between align-items-center semi-header d-flex d-md-none">
     <div class="col-auto">
       <div class="col-auto dp-wrapper align-items-center d-flex">
         <img src="{{asset('/img/member1.png')}}" alt="dp" class="dp" />
         <p>
           Tobi Obasa
           <img
             src="{{asset('/icons/dropdown.svg')}}"
             alt="dropdown"
             type="button"
           />
         </p>
       </div>
     </div>
     <div class="col-auto d-flex align-items-center">
       <div class="me-4">
         <img src="{{asset('/icons/message.svg')}}" alt="message" />
       </div>
       <div class="me-3">
         <img src="{{asset('/icons/alarm.svg')}}" alt="alarm" />
       </div>
     </div>
   </div>
   <div>
     <div class="upper-glow"></div>
   </div>

   <section class="px-lg-3">
     <div class="container-fluid px-lg-4">
       <div class="row">
        <h4 class="greeting">Good Morning {{Auth::user()->first_name}}!</h4>
         <div class="d-md-flex d-none justify-content-between subheader">
           <ul class="">
             <li>
               <a href="/settings-profile">Profile</a>
             </li>
             <li class="active">
               <a href="/settings">Account Settings</a>
             </li>
           </ul>
         </div>

         <div class="dropdown account d-block d-md-none">
           <button
             class="btn btn-secondary dropdown-toggle"
             type="button"
             data-bs-toggle="dropdown"
             aria-expanded="false"
           >
             Profile
           </button>
           <ul class="dropdown-menu">
             <li>
               <a class="dropdown-item" href="./settings.html">
                 Account Settings</a
               >
             </li>
           </ul>
         </div>
       </div>

       <h4 class="semi-sub-header">Complete your profile</h4>
       <div class="row align-items-center image-upload">
         <div class="col-auto position-relative">
           <input type="file" id="uploadDP" />
           <img src="{{asset('icons/upload-img.svg')}}" alt="" />
         </div>
         <div class="col-auto">
           <label for="uploadDP" class="d-block"
             >Add a profile Picture</label
           >
         </div>
       </div>

       <form action="#" class="settings-form">
         <div class="row">
           <div class="col-sm-6">
             <label for="firstName">First Name</label>
             <input type="text" class="form-control" id="firstName" />
           </div>
           <div class="col-sm-6">
             <label for="lastName">Last Name</label>
             <input type="text" class="form-control" id="lastName" />
           </div>
         </div>

         <div class="row">
           <div class="col-sm-6">
             <label for="email">Email Address</label>
             <input type="email" class="form-control" id="email" />
           </div>
           <div class="col-sm-6">
             <label for="tel">Telephone</label>
             <input type="tel" class="form-control" id="tel" />
           </div>
         </div>

         <div class="row">
           <div class="col-sm-6">
             <label for="Address">Address</label>
             <input type="text" class="form-control" id="Address" />
           </div>
         </div>

         <div class="row">
           <div class="col-sm-6">
             <label for="businessName">Business Name</label>
             <input type="email" class="form-control" id="businessName" />
           </div>
           <div class="col-sm-6">
             <label for="businessNature">Business Nature</label>
             <input type="tel" class="form-control" id="businessNature" />
           </div>
         </div>

         <div class="row">
           <div class="col-sm-6">
             <label for="exampleSelect">Number Of Years In Business</label>
             <select class="form-select" id="exampleSelect">
               <option>1</option>
               <option>2</option>
               <option>3</option>
               <option>4</option>
               <option>5</option>
             </select>
           </div>
           <div class="col-sm-6">
             <label for="Industry">Industry</label>
             <select class="form-select" id="Industry">
               <option>Engineering</option>
               <option>Academics</option>
               <option>Banking</option>
               <option>Health</option>
               <option>Logistics</option>
             </select>
           </div>
         </div>

         <div class="row justify-content-end save">
           <div class="col-sm-auto">
             <button class="btn">Save</button>
           </div>
         </div>
       </form>
     </div>
   </section>
 </main>
  @endsection