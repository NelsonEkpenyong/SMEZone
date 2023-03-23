@extends('layouts.dashboard.app')
  @section('content')
  <main class="dashboard">
   @include('layouts.dashboard.topNav')
   <div>
     <div class="upper-glow"></div>
   </div>

   <section class="">
     <div class="container-fluid px-lg-4">
       <div class="row">
         <h4 class="greeting">Good Morning Tobi!</h4>
         <div class="d-flex justify-content-between subheader">
           <h4>Webinars</h4>
         </div>
       </div>

       <div class="d-flex mx-0">
         <div class="d-flex courses-list py-4 dash">
           <div class="col-auto">
             <div
               class="card"
               onclick="linking('./dashboard/explore-course.html')"
             >
               <img
                 class="card-img-top"
                 src="{{asset('img/webinars1.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Webinars</a>
                 <h5 class="card-title">Course Title</h5>
                 <h6 class="card-text">The Business Guru of the Century</h6>
               </div>
             </div>
           </div>
           <div class="col-auto">
             <div
               class="card"
               onclick="linking('./dashboard/explore-course-paid.html')"
             >
               <img
                 class="card-img-top"
                 src="{{asset('img/webinars2.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Webinars</a>
                 <h5 class="card-title">Course Title</h5>
                 <h6 class="card-text">The Business Guru of the Century</h6>
               </div>
             </div>
           </div>
           <div class="col-auto">
             <div class="card" onclick="linking('./events.html')">
               <img
                 class="card-img-top"
                 src="{{asset('img/webinars3.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Webinars</a>
                 <h5 class="card-title">Course Title</h5>
                 <h6 class="card-text">The Business Guru of the Century</h6>
               </div>
             </div>
           </div>
           <div class="col-auto">
             <div class="card" onclick="linking('./events.html')">
               <img
                 class="card-img-top"
                 src="{{asset('img/webinars4.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Webinars</a>
                 <h5 class="card-title">Course Title</h5>
                 <h6 class="card-text">The Business Guru of the Century</h6>
               </div>
             </div>
           </div>
           <div class="col-auto">
             <div
               class="card"
               onclick="linking('./dashboard/explore-course.html')"
             >
               <img
                 class="card-img-top"
                 src="{{asset('img/webinars5.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Webinars</a>
                 <h5 class="card-title">Course Title</h5>
                 <h6 class="card-text">The Business Guru of the Century</h6>
               </div>
             </div>
           </div>
           <div class="col-auto">
             <div
               class="card"
               onclick="linking('./dashboard/explore-course-paid.html')"
             >
               <img
                 class="card-img-top"
                 src="{{asset('img/webinars6.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Webinars</a>
                 <h5 class="card-title">Course Title</h5>
                 <h6 class="card-text">The Business Guru of the Century</h6>
               </div>
             </div>
           </div>
           <div class="col-auto">
             <div class="card" onclick="linking('./events.html')">
               <img
                 class="card-img-top"
                 src="{{asset('img/webinars4.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Webinars</a>
                 <h5 class="card-title">Course Title</h5>
                 <h6 class="card-text">The Business Guru of the Century</h6>
               </div>
             </div>
           </div>
           <div class="col-auto">
             <div class="card" onclick="linking('./events.html')">
               <img
                 class="card-img-top"
                 src="{{asset('img/webinars8.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Webinars</a>
                 <h5 class="card-title">Course Title</h5>
                 <h6 class="card-text">The Business Guru of the Century</h6>
               </div>
             </div>
           </div>
           <div class="col-auto">
             <div
               class="card"
               onclick="linking('./dashboard/explore-course.html')"
             >
               <img
                 class="card-img-top"
                 src="{{asset('img/webinars9.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Webinars</a>
                 <h5 class="card-title">Course Title</h5>
                 <h6 class="card-text">The Business Guru of the Century</h6>
               </div>
             </div>
           </div>
           <div class="col-auto">
             <div
               class="card"
               onclick="linking('./dashboard/explore-course-paid.html')"
             >
               <img
                 class="card-img-top"
                 src="{{asset('img/webinars3.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Webinars</a>
                 <h5 class="card-title">Course Title</h5>
                 <h6 class="card-text">The Business Guru of the Century</h6>
               </div>
             </div>
           </div>
           <div class="col-auto">
             <div class="card" onclick="linking('./events.html')">
               <img
                 class="card-img-top"
                 src="{{asset('img/webinars3.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Webinars</a>
                 <h5 class="card-title">Course Title</h5>
                 <h6 class="card-text">The Business Guru of the Century</h6>
               </div>
             </div>
           </div>
           <div class="col-auto">
             <div class="card" onclick="linking('./events.html')">
               <img
                 class="card-img-top"
                 src="{{asset('img/webinars3.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Webinars</a>
                 <h5 class="card-title">Course Title</h5>
                 <h6 class="card-text">The Business Guru of the Century</h6>
               </div>
             </div>
           </div>
         </div>
       </div>

       <div class="row conta">
         <!-- <nav aria-label="Page navigation example">
           <ul class="pagination justify-content-center">
             <li class="page-item">
               <a class="page-link" href="#" tabindex="-1"
                 ><img src="icons/previous.svg" alt="prev"
               /></a>
             </li>
             <li class="page-item">
               <a class="page-link active" href="#">1</a>
             </li>
             <li class="page-item"><a class="page-link" href="#">2</a></li>
             <li class="page-item"><a class="page-link" href="#">3</a></li>
             <li class="page-item">
               <a class="page-link" href="#"
                 ><img src="icons/next.svg" alt="next"
               /></a>
             </li>
           </ul>
         </nav> -->
         <div class="d-flex justify-content-center subheader">
           <div class="paging">
             <a href="#">
               <img src="{{asset('icons/backward.svg')}}" alt="backward" />
             </a>
             <span class="d-inline-block mx-2"> 4/15 </span>
             <a href="#">
               <img src="{{asset('icons/forward.svg')}}" alt="forward" />
             </a>
           </div>
         </div>
       </div>
     </div>
   </section>
 </main>
  @endsection