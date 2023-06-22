<div class="row justify-content-between align-items-center semi-header d-flex d-md-none">
 <div class="col-auto">
   <div class="col-auto dp-wrapper align-items-center d-flex">
     <img src="{{asset('img/member1.png')}}" alt="dp" class="dp" />
     <p>
       {{Auth::user()->first_name . " " . Auth::user()->last_name}}
       <img
         src="{{asset('icons/dropdown.svg')}}"
         alt="dropdown"
         type="button"
       />
     </p>
   </div>
 </div>
 <div class="col-auto d-flex align-items-center">
   <div class="me-4">
     <img src="{{asset('icons/message.svg')}}" alt="message" />
   </div>
   <div class="me-3">
     <img src="{{asset('icons/alarm.svg')}}" alt="alarm" />
   </div>
 </div>
</div>