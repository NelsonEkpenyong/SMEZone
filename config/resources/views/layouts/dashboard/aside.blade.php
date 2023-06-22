<aside class="aside dash">
 <div class="d-none d-md-block">
   <ul>
     <li class="{{ (\Request::route()->getName() == 'dashboard/home') ? 'active' : ''}}">
       <a href="/dashboard/home">
         <img
           src="{{asset('icons/Aside-dashboard-active.svg')}}"
           alt="dashboard"
         />
         Dashboard
       </a>
     </li>
     <li class="{{ (\Request::route()->getName() == 'explore-courses') ? 'active' : ''}}">
       <a href="/explore-courses">
         <img src="{{asset('icons/Aside-courses.svg')}}" alt="dashboard" />
         Courses
       </a>
     </li>
     <li class="{{ (\Request::route()->getName() == 'explore-webinars') ? 'active' : ''}}">
       <a href="/explore-webinars">
         <img src="{{asset('icons/Aside-webinars.svg')}}" alt="dashboard" />
         Webinars
       </a>
     </li>
     <li class="{{ (\Request::route()->getName() == 'explore-resources') ? 'active' : ''}}">
       <a href="/explore-resources">
         <img src="{{asset('icons/Aside-resources.svg')}}" alt="dashboard" />
         Resources
       </a>
     </li>
     <li class="">
       <a href="/community">
         <img src="{{asset('icons/Aside-community.svg')}}" alt="dashboard" />
         Community
       </a>
     </li>
     <li class="{{ (\Request::route()->getName() == 'settings-profile') ? 'active' : ''}}">
       <a href="/settings-profile">
         <img src="{{asset('icons/Aside-setting.svg')}}" alt="dashboard" />
         Settings
       </a>
     </li>
   </ul>
 </div>

 <div class="mobile com d-flex d-md-none flex-column align-items-center justify-content-center w-100">
   <div style="max-width: 100vw">
     <ul>
       <li><a href="./home.html">Dashboard</a></li>
       <li><a href="./explore-courses.html">Courses</a></li>
       <li><a href="./explore-webinars.html">Webinars</a></li>
       <li><a href="./explore-resources.html">Resources</a></li>
       <li><a href="/community.html">Community</a></li>
       <li><a href="./settings-profile.html">Settings</a></li>
     </ul>
   </div>
 </div>
</aside>