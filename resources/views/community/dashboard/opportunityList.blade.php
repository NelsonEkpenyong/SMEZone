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
           <h4>Opportunity Zone</h4>
         </div>
       </div>

       <div class="d-flex mx-0">
         <div class="d-flex courses-list py-4 dash">
          @forelse ($opportunities as $item)
          {{-- <div class="col-auto">
            <div class="card">
              <img class="card-img-top" src="{{asset('images/' . $item->image )}}" alt="opportunity pics" style="width: 100%"/>
              <div class="card-body">
                <a href="{{$item->link}}" target="_blank" class="btn">{{$item->provider}}</a>
                <h5 class="card-title">Course Title</h5>
                <h6 class="card-text">{{$item->title}}</h6>
              </div>
            </div>
          </div>  --}}


          <div class="col-auto">
            <a href="{{$item->link}}" target="_blank" class="card-link">
              <div class="card">
                <img class="card-img-top" src="{{asset('images/' . $item->image )}}" alt="opportunity pics" style="width: 100%"/>
                <div class="card-body">
                  <span class="btn" style="font-weight: 800; font-size: 16px; line-height: 16px; color: #ffffff; background: #eb8e02; border-radius: 4px; padding: 3px 20px; font-family: 'nunito-bold'; cursor: pointer;s">{{$item->provider}}</span>
                  <h5 class="card-title">Course Title</h5>
                  <h6 class="card-text">{{$item->title}}</h6>
                </div>
              </div>
            </a>
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