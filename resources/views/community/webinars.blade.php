@extends('layouts.community.app')
  @section('content')
  <main class="community">
   <div class="container-fluid">
     <div class="row">
       <div class="col-md community-main">
         <div class="middle mx-0 px-0">
           <div class="row align-items-center top-button">
             <div class="col-md-auto col-sm-4">
               <button class="btn post active all">All</button>
             </div>
             <div class="col-md-auto col-sm-4">
               <button class="btn post">Trending</button>
             </div>
             <div class="col-md-auto col-sm-4">
               <button class="btn post">Popular</button>
             </div>
           </div>

           <div class="webinars">
             <div class="d-flex hero-community">
               <img
                 src="{{asset('icons/webinars-play.svg')}}"
                 alt="play"
                 class="play"
               />

               <img
                 src="{{asset('img/hero-community.png')}}"
                 alt="hero comunity"
                 class="d-sm-block d-none"
                 style="max-width: 100%"
               />
               <img
                 src="{{asset('img/hero-community-mobile.png')}}"
                 alt="hero comunity"
                 class="d-sm-none d-block"
               />
             </div>

             <div class="my-4">
               <h4>Description</h4>
               <p class="description">
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                 Elementum amet commodo ultricies lacinia ipsum tempus et.
                 Eu, id pellentesque sit ultricies cras adipiscing. Platea
                 adipiscing tempus dui dui ac venenatis ut odio. Suspendisse
                 nisi viverra senectus amet, eu aliquet a velit faucibus. Sed
                 ultrices neque, eget tincidunt sit.
               </p>
             </div>
             <div class="d-flex justify-content-between">
               <div class="d-flex top-card col-auto">
                 <div class="col-auto">
                   <img src="{{asset('img/member1.png')}}" alt="" />
                 </div>
                 <div class="col">
                   <p>Tobi Obasa</p>
                   <small>Posted by 5:30am, 13-02-22</small>
                 </div>
               </div>

               <div class="d-flex lower-card">
                 <div class="col-auto">
                   <span class="likes">
                     <img src="{{asset('icons/likes.svg')}}" alt="likes" />
                     223
                   </span>
                   <span>
                     <img src="{{asset('icons/share.svg')}}" alt="" />
                   </span>
                 </div>
               </div>
             </div>
           </div>

           <!-- <div class="com-cardwrapper mx-0">
             <div class="com-card">
               <div class="d-flex top-card">
                 <div class="col-auto">
                   <img src="./asset/img/member1.png')}}" alt="" />
                 </div>
                 <div class="col">
                   <p>SMEZone</p>
                   <small>Posted by 5:30am, 13-02-22</small>
                 </div>
               </div>
               <div class="com-body">
                 <h5>
                   Why small Businesses have the initial struggle in the
                   market space
                 </h5>
                 <p>
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                   Nunc ut phasellus aliquam, arcu nibh habitasse sit. Eget
                   duis lacus, amet tincidunt eu. Sed viverra fringilla
                   egestas in lobortis. Ut consectetur mattis hendrerit
                   lectus integer. Nunc at quisque sit mollis. Consectetur
                   nulla elit suspendisse volutpat feugiat viverra id
                   ridiculus non.
                 </p>
               </div>
               <div class="d-flex lower-card">
                 <div class="col-auto">
                   <span class="likes">
                     <img src="./asset/icons/likes.svg" alt="likes" />
                     223
                   </span>
                   <span>
                     <img src="./asset/icons/share-icon.svg" alt="" />
                   </span>
                 </div>
               </div>
             </div>
             <div class="news-comment-before">
               <img src="./asset/icons/news-line.svg" alt="" />
             </div>

             <div class="news-comment">
               <div class="d-flex">
                 <div class="col-auto pp">
                   <img src="./asset/img/member1.png" alt="" />
                 </div>
                 <div class="col">
                   <div class="d-flex justify-content-between">
                     <div>
                       <span class="d-inline-block"
                         ><h5>Tife Jewel</h5></span
                       >
                       <span class="d-inline-block"
                         ><small>Commented @3:15am</small></span
                       >
                     </div>
                     <div>
                       <img src="./asset/icons/likes.svg" alt="likes" />
                     </div>
                   </div>
                   <p>
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                     Nunc ut phasellus aliquam, arcu nibh habitasse sit. Eget
                     duis lacus, amet tincidunt eu.
                   </p>
                 </div>
               </div>
             </div>
           </div> -->
         </div>
       </div>
       @include('layouts.community.rightSide')
     </div>
   </div>
 </main>
  @endsection