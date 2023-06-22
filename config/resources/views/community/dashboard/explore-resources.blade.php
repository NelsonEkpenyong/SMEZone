@extends('layouts.dashboard.app')
  @section('content')
  <main class="dashboard">
   @include('layouts.dashboard.topNav')
   <div>
     <div class="upper-glow"></div>
   </div>

   <section>
     <div class="container-fluid px-lg-4">
       <div class="row">
         <h4 class="greeting">Good Morning {{Auth::user()->first_name}}!</h4>
         <div class="d-md-flex d-none justify-content-between subheader">
           <ul class="">
             <li>
               <a href="/news">Articles</a>
             </li>
             <li>
               <a href="#"
                 >Newsletter</a
               >
             </li>
             <li>
               <a href="/tools"
                 >Opportunity Zone</a
               >
             </li>
             <li>
               <a href="#">BET FAQ</a>
             </li>
             <li class="active"><a href="#">Event Gallery</a></li>
           </ul>
         </div>

         <div class="dropdown account d-block d-md-none">
           <button
             class="btn btn-secondary dropdown-toggle"
             type="button"
             data-bs-toggle="dropdown"
             aria-expanded="false"
           >
             Event Gallery
           </button>
           <ul class="dropdown-menu">
             <li>
               <a class="dropdown-item" href="/news"
                 >Articles</a
               >
             </li>
             <li>
               <a
                 class="dropdown-item"
                 href="#"
                 >Newsletter</a
               >
             </li>
             <li>
               <a class="dropdown-item" href="/tools"
                 >Opportunity Zone</a
               >
             </li>

             <li>
               <a class="dropdown-item" href="#"
                 >BET FAQ</a
               >
             </li>
           </ul>
         </div>
       </div>

       <h4 class="semi-sub-header">Event Pictures</h4>

       <div class="d-flex py-4 gallery-list row">
         <div class="col-lg-3 col-md-6 col-sm-12">
           <div
             class="card"
             onclick="linking('./dashboard/explore-course.html')"
           >
             <img
               class="card-img-top"
               src="{{asset('img/gallery-pics.png')}}"
               alt="course pics"
               style="width: 100%"
             />
           </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-12">
           <div
             class="card"
             onclick="linking('./dashboard/explore-course.html')"
           >
             <img
               class="card-img-top"
               src="{{asset('img/gallery-pics.png')}}"
               alt="course pics"
               style="width: 100%"
             />
           </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-12">
           <div
             class="card"
             onclick="linking('./dashboard/explore-course.html')"
           >
             <img
               class="card-img-top"
               src="{{asset('img/gallery-pics.png')}}"
               alt="course pics"
               style="width: 100%"
             />
           </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-12">
           <div
             class="card"
             onclick="linking('./dashboard/explore-course.html')"
           >
             <img
               class="card-img-top"
               src="{{asset('img/gallery-pics.png')}}"
               alt="course pics"
             />
           </div>
         </div>
       </div>

       <h4 class="semi-sub-header">Event Videos</h4>

       <div class="d-flex py-4 gallery-list row">
         <div class="col-lg-3 col-md-6 col-sm-12">
           <div
             class="card"
             onclick="linking('./dashboard/explore-course.html')"
           >
             <img
               class="card-img-top"
               src="{{asset('img/gallery-pics.png')}}"
               alt="course pics"
               style="width: 100%"
             />
             <button>
               <img
                 src="{{asset('icons/gallery-play.svg')}}"
                 alt="play"
                 class="g-play"
               />
             </button>
           </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-12">
           <div
             class="card"
             onclick="linking('./dashboard/explore-course.html')"
           >
             <img
               class="card-img-top"
               src="{{asset('img/gallery-pics.png')}}"
               alt="course pics"
               style="width: 100%"
             />
             <button>
               <img
                 src="{{asset('icons/gallery-play.svg')}}"
                 alt="play"
                 class="g-play"
               />
             </button>
           </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-12">
           <div
             class="card"
             onclick="linking('./dashboard/explore-course.html')"
           >
             <img
               class="card-img-top"
               src="{{asset('img/gallery-pics.png')}}"
               alt="course pics"
               style="width: 100%"
             />
             <button>
               <img
                 src="{{asset('icons/gallery-play.svg')}}"
                 alt="play"
                 class="g-play"
               />
             </button>
           </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-12">
           <div
             class="card"
             onclick="linking('./dashboard/explore-course.html')"
           >
             <img
               class="card-img-top"
               src="{{asset('img/gallery-pics.png')}}"
               alt="course pics"
               style="width: 100%"
             />
             <button>
               <img
                 src="{{asset('icons/gallery-play.svg')}}"
                 alt="play"
                 class="g-play"
               />
             </button>
           </div>
         </div>
       </div>
     </div>
   </section>
 </main>

  @endsection