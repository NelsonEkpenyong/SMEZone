@extends('layouts.dashboard.app')
  @section('content')
  <main class="dashboard">
    @include('layouts.dashboard.topNav')
   <div>
     <div class="upper-glow"></div>
   </div>
   <div class="container-fluid px-lg-4">
    <div class="row">
      <h4 class="greeting">Good Morning {{Auth::user()->first_name}}!</h4>
    </div>

     <div class="this-course">
       <div class="d-flex justify-content-between subheader">
         <h4>Enrolled Courses</h4>
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

       <div class="d-flex mx-0">
         <div class="d-flex courses-list pt-4 dash">
           <div class="col-auto">
             <div
               class="card"
               onclick="linking('./dashboard/explore-course.html')"
             >
               <img
                 class="card-img-top"
                 src="{{asset('img/explore-courses.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Free</a>
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
                 src="{{asset('img/explore-courses.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Paid</a>
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
                 src="{{asset('img/explore-courses.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Free</a>
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
                 src="{{asset('img/explore-courses.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Free</a>
                 <h5 class="card-title">Course Title</h5>
                 <h6 class="card-text">The Business Guru of the Century</h6>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>

     <div class="this-course">
       <div class="d-flex justify-content-between subheader mt-0">
         <h4>Financial Management</h4>
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

       <div class="d-flex mx-0">
         <div class="d-flex courses-list pt-4 dash">
           <div class="col-auto">
             <div
               class="card"
               onclick="linking('./dashboard/explore-course.html')"
             >
               <img
                 class="card-img-top"
                 src="{{asset('/img/explore-courses.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Free</a>
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
                 src="{{asset('/img/explore-courses.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Free</a>
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
                 src="{{asset('/img/explore-courses.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Free</a>
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
                 src="{{asset('/img/explore-courses.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Free</a>
                 <h5 class="card-title">Course Title</h5>
                 <h6 class="card-text">The Business Guru of the Century</h6>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>

     <div class="this-course">
       <div class="d-flex justify-content-between subheader mt-0">
         <h4>Marketing</h4>
         <div class="paging">
           <a href="#">
             <img src="{{asset('/icons/backward.svg')}}" alt="backward" />
           </a>
           <span class="d-inline-block mx-2"> 4/15 </span>
           <a href="#">
             <img src="{{asset('/icons/forward.svg')}}" alt="forward" />
           </a>
         </div>
       </div>

       <div class="d-flex mx-0">
         <div class="d-flex courses-list pt-4 dash">
           <div class="col-auto">
             <div class="card">
               <img
                 class="card-img-top"
                 src="{{asset('/img/explore-courses.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Free</a>
                 <h5 class="card-title">Course Title</h5>
                 <h6 class="card-text">The Business Guru of the Century</h6>
               </div>
             </div>
           </div>
           <div class="col-auto">
             <div class="card">
               <img
                 class="card-img-top"
                 src="{{asset('/img/explore-courses.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Paid</a>
                 <h5 class="card-title">Course Title</h5>
                 <h6 class="card-text">The Business Guru of the Century</h6>
               </div>
             </div>
           </div>
           <div class="col-auto">
             <div class="card">
               <img
                 class="card-img-top"
                 src="{{asset('/img/explore-courses.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Free</a>
                 <h5 class="card-title">Course Title</h5>
                 <h6 class="card-text">The Business Guru of the Century</h6>
               </div>
             </div>
           </div>
           <div class="col-auto">
             <div class="card">
               <img
                 class="card-img-top"
                 src="{{asset('/img/explore-courses.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Free</a>
                 <h5 class="card-title">Course Title</h5>
                 <h6 class="card-text">The Business Guru of the Century</h6>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>

     <div class="this-course">
       <div class="d-flex justify-content-between subheader mt-0">
         <h4>Marketing</h4>
         <div class="paging">
           <a href="#">
             <img src="{{asset('/icons/backward.svg')}}" alt="backward" />
           </a>
           <span class="d-inline-block mx-2"> 4/15 </span>
           <a href="#">
             <img src="{{asset('/icons/forward.svg')}}" alt="forward" />
           </a>
         </div>
       </div>

       <div class="d-flex mx-0">
         <div class="d-flex courses-list pt-4 dash">
           <div class="col-auto">
             <div class="card">
               <img
                 class="card-img-top"
                 src="{{asset('/img/explore-courses.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Free</a>
                 <h5 class="card-title">Course Title</h5>
                 <h6 class="card-text">The Business Guru of the Century</h6>
               </div>
             </div>
           </div>
           <div class="col-auto">
             <div class="card">
               <img
                 class="card-img-top"
                 src="{{asset('/img/explore-courses.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Paid</a>
                 <h5 class="card-title">Course Title</h5>
                 <h6 class="card-text">The Business Guru of the Century</h6>
               </div>
             </div>
           </div>
           <div class="col-auto">
             <div class="card">
               <img
                 class="card-img-top"
                 src="{{asset('/img/explore-courses.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Free</a>
                 <h5 class="card-title">Course Title</h5>
                 <h6 class="card-text">The Business Guru of the Century</h6>
               </div>
             </div>
           </div>
           <div class="col-auto">
             <div class="card">
               <img
                 class="card-img-top"
                 src="{{asset('/img/explore-courses.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Free</a>
                 <h5 class="card-title">Course Title</h5>
                 <h6 class="card-text">The Business Guru of the Century</h6>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>

     <div class="this-course">
       <div class="d-flex justify-content-between subheader mt-0">
         <h4>Technology</h4>
         <div class="paging">
           <a href="#">
             <img src="{{asset('/icons/backward.svg')}}" alt="backward" />
           </a>
           <span class="d-inline-block mx-2"> 4/15 </span>
           <a href="#">
             <img src="{{asset('/icons/forward.svg')}}" alt="forward" />
           </a>
         </div>
       </div>

       <div class="d-flex mx-0">
         <div class="d-flex courses-list pt-4 dash">
           <div class="col-auto">
             <div class="card">
               <img
                 class="card-img-top"
                 src="{{asset('/img/explore-courses.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Free</a>
                 <h5 class="card-title">Course Title</h5>
                 <h6 class="card-text">The Business Guru of the Century</h6>
               </div>
             </div>
           </div>
           <div class="col-auto">
             <div class="card">
               <img
                 class="card-img-top"
                 src="{{asset('/img/explore-courses.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Paid</a>
                 <h5 class="card-title">Course Title</h5>
                 <h6 class="card-text">The Business Guru of the Century</h6>
               </div>
             </div>
           </div>
           <div class="col-auto">
             <div class="card">
               <img
                 class="card-img-top"
                 src="{{asset('/img/explore-courses.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Free</a>
                 <h5 class="card-title">Course Title</h5>
                 <h6 class="card-text">The Business Guru of the Century</h6>
               </div>
             </div>
           </div>
           <div class="col-auto">
             <div class="card">
               <img
                 class="card-img-top"
                 src="{{asset('/img/explore-courses.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Free</a>
                 <h5 class="card-title">Course Title</h5>
                 <h6 class="card-text">The Business Guru of the Century</h6>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>

     <div class="this-course">
       <div class="d-flex justify-content-between subheader mt-0">
         <h4>Human Resources</h4>
         <div class="paging">
           <a href="#">
             <img src="{{asset('/icons/backward.svg')}}" alt="backward" />
           </a>
           <span class="d-inline-block mx-2"> 4/15 </span>
           <a href="#">
             <img src="{{asset('/icons/forward.svg')}}" alt="forward" />
           </a>
         </div>
       </div>

       <div class="d-flex mx-0">
         <div class="d-flex courses-list pt-4 dash">
           <div class="col-auto">
             <div class="card">
               <img
                 class="card-img-top"
                 src="{{asset('/img/explore-courses.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Free</a>
                 <h5 class="card-title">Course Title</h5>
                 <h6 class="card-text">The Business Guru of the Century</h6>
               </div>
             </div>
           </div>
           <div class="col-auto">
             <div class="card">
               <img
                 class="card-img-top"
                 src="{{asset('/img/explore-courses.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Paid</a>
                 <h5 class="card-title">Course Title</h5>
                 <h6 class="card-text">The Business Guru of the Century</h6>
               </div>
             </div>
           </div>
           <div class="col-auto">
             <div class="card">
               <img
                 class="card-img-top"
                 src="{{asset('/img/explore-courses.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Free</a>
                 <h5 class="card-title">Course Title</h5>
                 <h6 class="card-text">The Business Guru of the Century</h6>
               </div>
             </div>
           </div>
           <div class="col-auto">
             <div class="card">
               <img
                 class="card-img-top"
                 src="{{asset('/img/explore-courses.png')}}"
                 alt="course pics"')}}
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Free</a>
                 <h5 class="card-title">Course Title</h5>
                 <h6 class="card-text">The Business Guru of the Century</h6>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>

     <div class="this-course">
       <div class="d-flex justify-content-between subheader mt-0">
         <h4>Business Plans & Models</h4>
         <div class="paging">
           <a href="#">
             <img src="{{asset('/icons/backward.svg')}}" alt="backward" />
           </a>
           <span class="d-inline-block mx-2"> 4/15 </span>
           <a href="#">
             <img src="{{asset('/icons/forward.svg')}}" alt="forward" />
           </a>
         </div>
       </div>

       <div class="d-flex mx-0">
         <div class="d-flex courses-list pt-4 dash">
           <div class="col-auto">
             <div class="card">
               <img
                 class="card-img-top"
                 src="{{asset('/img/explore-courses.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Free</a>
                 <h5 class="card-title">Course Title</h5>
                 <h6 class="card-text">The Business Guru of the Century</h6>
               </div>
             </div>
           </div>
           <div class="col-auto">
             <div class="card">
               <img
                 class="card-img-top"
                 src="{{asset('/img/explore-courses.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Paid</a>
                 <h5 class="card-title">Course Title</h5>
                 <h6 class="card-text">The Business Guru of the Century</h6>
               </div>
             </div>
           </div>
           <div class="col-auto">
             <div class="card">
               <img
                 class="card-img-top"
                 src="{{asset('/img/explore-courses.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Free</a>
                 <h5 class="card-title">Course Title</h5>
                 <h6 class="card-text">The Business Guru of the Century</h6>
               </div>
             </div>
           </div>
           <div class="col-auto">
             <div class="card">
               <img
                 class="card-img-top"
                 src="{{asset('/img/explore-courses.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Free</a>
                 <h5 class="card-title">Course Title</h5>
                 <h6 class="card-text">The Business Guru of the Century</h6>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>

     <div class="this-course">
       <div class="d-flex justify-content-between subheader mt-0">
         <h4>BETS Video</h4>
         <div class="paging">
           <a href="#">
             <img src="{{asset('/icons/backward.svg')}}" alt="backward" />
           </a>
           <span class="d-inline-block mx-2"> 4/15 </span>
           <a href="#">
             <img src="{{asset('/icons/forward.svg')}}" alt="forward" />
           </a>
         </div>
       </div>

       <div class="d-flex mx-0">
         <div class="d-flex courses-list pt-4 dash">
           <div class="col-auto">
             <div class="card">
               <img
                 class="card-img-top"
                 src="{{asset('/img/explore-courses.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Free</a>
                 <h5 class="card-title">Course Title</h5>
                 <h6 class="card-text">The Business Guru of the Century</h6>
               </div>
             </div>
           </div>
           <div class="col-auto">
             <div class="card">
               <img
                 class="card-img-top"
                 src="{{asset('/img/explore-courses.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Paid</a>
                 <h5 class="card-title">Course Title</h5>
                 <h6 class="card-text">The Business Guru of the Century</h6>
               </div>
             </div>
           </div>
           <div class="col-auto">
             <div class="card">
               <img
                 class="card-img-top"
                 src="{{asset('/img/explore-courses.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Free</a>
                 <h5 class="card-title">Course Title</h5>
                 <h6 class="card-text">The Business Guru of the Century</h6>
               </div>
             </div>
           </div>
           <div class="col-auto">
             <div class="card">
               <img
                 class="card-img-top"
                 src="{{asset('/img/explore-courses.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Free</a>
                 <h5 class="card-title">Course Title</h5>
                 <h6 class="card-text">The Business Guru of the Century</h6>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>

     <div class="this-course">
       <div class="d-flex justify-content-between subheader mt-0">
         <h4>SME Accelerate</h4>
         <div class="paging">
           <a href="#">
             <img src="{{asset('/icons/backward.svg')}}" alt="backward" />
           </a>
           <span class="d-inline-block mx-2"> 4/15 </span>
           <a href="#">
             <img src="{{asset('/icons/forward.svg')}}" alt="forward" />
           </a>
         </div>
       </div>

       <div class="d-flex mx-0">
         <div class="d-flex courses-list pt-4 dash">
           <div class="col-auto">
             <div class="card">
               <img
                 class="card-img-top"
                 src="{{asset('/img/explore-courses.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Free</a>
                 <h5 class="card-title">Course Title</h5>
                 <h6 class="card-text">The Business Guru of the Century</h6>
               </div>
             </div>
           </div>
           <div class="col-auto">
             <div class="card">
               <img
                 class="card-img-top"
                 src="{{asset('/img/explore-courses.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Paid</a>
                 <h5 class="card-title">Course Title</h5>
                 <h6 class="card-text">The Business Guru of the Century</h6>
               </div>
             </div>
           </div>
           <div class="col-auto">
             <div class="card">
               <img
                 class="card-img-top"
                 src="{{asset('/img/explore-courses.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Free</a>
                 <h5 class="card-title">Course Title</h5>
                 <h6 class="card-text">The Business Guru of the Century</h6>
               </div>
             </div>
           </div>
           <div class="col-auto">
             <div class="card">
               <img
                 class="card-img-top"
                 src="{{asset('/img/explore-courses.png')}}"
                 alt="course pics"
                 style="width: 100%"
               />
               <div class="card-body">
                 <a href="#" class="btn">Free</a>
                 <h5 class="card-title">Course Title</h5>
                 <h6 class="card-text">The Business Guru of the Century</h6>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </main>
  @endsection