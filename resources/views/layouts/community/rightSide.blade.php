<div class="col-md-auto members">
  <div class="">
    <h4>Community members online</h4>
    <ul>
     @forelse ($onlineUsers as $user)
     <a href="/community/{{$user->id}}">
       <li class="d-flex align-items-center">
         <div class="m-i-wrapper">
           <img src="{{asset('img/member1.png')}}" alt="" class="pp" />
           <img src="{{asset('icons/green-dot.svg')}}" alt="" class="gd" />
         </div>
         <p>{{$user->first_name . " " . $user->last_name}}</p>
       </li>
     </a>
     @empty
       
        <div class="alert alert-primary" role="alert">
           No Members online!
         </div>
     @endforelse
      
      
    </ul>
  </div>
  <div class="community-partner">
    <img src="{{asset('img/community-partner.png')}}" alt="partner" 2 />
  </div>
 </div>