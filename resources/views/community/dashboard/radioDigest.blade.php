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

       {{-- <div class="d-flex mx-0">
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
                    <a href="{{$digest->digest_link}}" class="btn" style="width: 7rem" data-bs-toggle="modal" data-bs-target="#exampleModal">Radio Digest</a>

                    <h5 class="card-title">Digest Name</h5>
                    <h6 class="card-text">{{$digest->digest_name}}</h6>
                  </div>
                </div>
              </div>

              
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Playing {{$digest->digest_name}}</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <div>
                      <iframe width="100%" 
                        height="300" 
                        scrolling="no" 
                        frameborder="no" 
                        allow="autoplay" 
                        src="{{$digest->digest_link}}">
                      </iframe>
                    </div> 
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
          @empty
              
          @endforelse

          
          
         
           
          
         </div>
       </div> --}}

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
                  <a class="btn" style="width: 7rem" data-bs-toggle="modal" data-bs-target="#exampleModal{{$digest->id}}">Radio Digest</a>
      
                  <h5 class="card-title">Digest Name</h5>
                  <h6 class="card-text">{{$digest->digest_name}}</h6>
                </div>
              </div>
            </div>
      
            <div class="modal fade" id="exampleModal{{$digest->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Playing {{$digest->digest_name}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div>
                      <iframe width="100%" 
                        height="300" 
                        scrolling="no" 
                        frameborder="no" 
                        allow="autoplay" 
                        src="{{$digest->digest_link}}"  
                        class="digest-iframe"
                        data-digest-link="{{$digest->digest_link}}"
                        >
                      </iframe>
                    </div> 
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          @empty
            <h3>There're no podcasts at this time.</h3>
          @endforelse
      
        </div>
      </div>

       <div class="row conta">
         <div class="d-flex justify-content-center subheader">
           <div class="paging">
             <a href="#">
               <img src="{{asset('icons/backward.svg')}}" alt="backward" />
             </a>
             <span class="d-inline-block mx-2"> 0/0 </span>
             <a href="#">
               <img src="{{asset('icons/forward.svg')}}" alt="forward" />
             </a>
           </div>
         </div>
       </div>
     </div>
   </section>
 </main>


 <script>
  document.addEventListener('DOMContentLoaded', function() {
    const modalCloseButtons = document.querySelectorAll('[data-bs-dismiss="modal"]');
    modalCloseButtons.forEach(function(button) {
      button.addEventListener('click', function() {
        const modal       = button.closest('.modal');
        const iframe      = modal.querySelector('.digest-iframe');
        const originalSrc = iframe.getAttribute('data-digest-link');
        
        iframe.src = '';

        setTimeout(function() { iframe.src = originalSrc;}, 500); 
      });
    });
  });
</script>

  @endsection 








                  