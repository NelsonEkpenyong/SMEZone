@extends('layouts.community.app')
  @section('content')
     <main class="community">
       <div class="container-fluid">
         <div class="row">
           <div class="col-lg community-main">
             <div class="middle mx-0 px-0">
               <div class="row align-items-center top-button">
                 <div class="col-md-auto d-flex justify-content-between px-0">
                   <div class="col-md-auto col-sm-4">
                     <button class="btn post active me-md-5 me-4">
                       <img src="{{ asset('icons/edit-icon.svg')}}" alt="" /> Make a post
                     </button>
                   </div>
                   
                   <div>
                     <a class="active" href="#"
                       ><img src="{{ asset('icons/notification.svg')}}" alt=""
                     /></a>
                     <a class="active" href="#"
                       ><img src="{{ asset('icons/inbox.svg')}}" alt=""
                     /></a>
                     <a class="active" href="#"
                       ><img src="{{ asset('icons/options.svg')}}" alt=""
                     /></a>
                   </div>
                 </div>
               </div>
               <div class="com-cardwrapper mx-0">
                 <div class="com-card">
                   <div class="d-flex top-card">
                     <div class="col-auto">
                       <img src="{{ asset('img/member1.png')}}" alt="" />
                     </div>
                     <div class="col">
                       <p>Tobi Obasa</p>
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
                         <img src="{{ asset('icons/likes.svg')}}" alt="likes" />
                         223
                       </span>
                       <span>
                         <img src="{{ asset('icons/share.svg')}}" alt="" />
                       </span>
                     </div>
                   </div>
                 </div>
               </div>

               <div class="form-group mb-5">
                 <textarea
                   class="form-control"
                   id="exampleFormControlTextarea1"
                   rows="4"
                   placeholder="Type a comment"
                 ></textarea>
               </div>

               <div class="com-cardwrapper mx-0">
                 <div class="com-card">
                   <div class="d-flex top-card">
                     <div class="col-auto">
                       <img src="{{ asset('img/community-member2.png')}}" alt="" />
                     </div>
                     <div class="col">
                       <p>Oyindamola Adesola</p>
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
                         <img src="{{ asset('icons/likes.svg')}}" alt="likes" />
                         223
                       </span>
                     </div>
                   </div>
                 </div>
               </div>

               <div class="form-group mb-5">
                 <textarea
                   class="form-control"
                   id="exampleFormControlTextarea1"
                   rows="4"
                   placeholder="Type a comment"
                 ></textarea>
               </div>

               <div class="row justify-content-center">
                 <div class="col-auto mb-0 mb-sm-3">
                   <span class="inline-block pagination-p me-2">Next Page</span>
                   <img src="{{ asset('icons/next.svg')}}" alt="" />
                 </div>
               </div>
             </div>
           </div>
           @include('layouts.community.rightSide')
         </div>
       </div>
     </main>
  @endsection