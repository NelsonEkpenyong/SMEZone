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
         <h4 class="greeting">
            @if(date("H") < "12") Good Morning
            @elseif(date("H") >= "12" && date("H") < "17")Good Afternoon
            @elseif(date("H") >= "17" && date("H") < "22") Good Evening
            @elseif(date("H") >= "23") Good Night
            @endif 
            {{Auth::user()->first_name}}!
         </h4>
         <div class="d-flex justify-content-between subheader">
           <h4>Access SME Radio Digest</h4>
         </div>
       </div>

       <div class="d-flex mx-0">
         <div class="d-flex courses-list py-4 dash">
          
          @forelse ($digests as $digest)
          <div class="col-auto">
            <div class="card">
              <img
                class="card-img-top"
                src="{{asset('images/' . $digest->digest_thumbnail )}}"
                alt="course pics"
                style="width: 100%"
              />
              <div class="card-body">
                <a href="{{$digest->digest_link}}" class="btn" style="width: 7rem">Radio Digest</a>
                <h5 class="card-title">Digest Name</h5>
                <h6 class="card-text">{{$digest->digest_name}}</h6>
              </div>
            </div>
          </div>
          @empty
              
          @endforelse

          
          
         
           
          
         </div>
       </div>

       <div class="row conta">
         <nav aria-label="Page navigation example">
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
         </nav> 
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