@extends('layouts.app')
  @section('content')

      <section class="business-clinic">
       <div class="container">
         <div
           class="row align-items-md-center align-items-start flex-md-row flex-column"
         >
           <div class="col-auto">
             <h2>
               Business <br />
               <span class="color-color">Clinic</span>
             </h2>
           </div>
           <div class="col">
             <p>
               We&#39;re committed to helping small businesses. Whether you're
               just starting out or looking to expand, we'll take the time to get
               to know your business and help provide solutions that are right
               for you.
             </p>
           </div>
         </div>
       </div>
      </section>
      <section>
       <div class="container laon-hero my-5">
         <div class="row">
           <div class="col-md-auto d-none d-md-block">
             <img src="{{asset('img/loan-hero.png')}}" alt="hero" />
           </div>
           <div class="col">
             <p>
               The Access Business Clinics are one-on-one business consulting and
               advisory sessions with experts, consultants and successful
               entrepreneurs who diagnose and proffer practical and tailor-made
               solutions to the challenges you might be experiencing in the
               course of running your business. They cut across the following
               focus areas;
             </p>
             <ul>
               <li>Financial Management</li>
               <li>Sales & Marketing</li>
               <li>Brands & Advertising</li>
               <li>Human Resources</li>
               <li>Tax</li>
             </ul>
             <button
               class="btn"
               data-bs-toggle="modal"
               data-bs-target="#exampleModal"
             >
               Apply for Business Clinic
             </button>
           </div>
         </div>
       </div>
      </section>
      <section>
       <div class="container expert-wrapper py-5 mb-5">
         <h4>Our experts</h4>
         <div class="row justify-content-md-start justify-content-center">
           <div
             class="col-md-6 col-lg-3 experts d-flex"
             data-bs-toggle="modal"
             data-bs-target="#expert"
           >
             <img src="{{asset('img/expert1.png')}}" alt="expert" />
             <div>
               <h6>Joy Esozie-Amaye</h6>
               <p>Business</p>
             </div>
           </div>

           <div
             class="col-md-6 col-lg-3 experts d-flex"
             data-bs-toggle="modal"
             data-bs-target="#expertTwo "
           >
             <img src="{{asset('img/expert2.png')}}" alt="expert" />
             <div>
               <h6>Augustine Elochukwu Okeke</h6>
               <p>Technology</p>
             </div>
           </div>

           <div
             class="col-md-6 col-lg-3 experts d-flex"
             data-bs-toggle="modal"
             data-bs-target="#expertThree"
           >
             <img src="{{asset('img/expert3.png')}}" alt="expert" />
             <div>
               <h6>Akachi Ngwu</h6>
               <p>Business</p>
             </div>
           </div>

           <div
             class="col-md-6 col-lg-3 experts d-flex"
             data-bs-toggle="modal"
             data-bs-target="#expertFour"
           >
             <img src="{{asset('img/expert4.png')}}" alt="expert" />
             <div>
               <h6>Nengi A. Bob-Manuel</h6>
               <p>Accounting and Tax</p>
             </div>
           </div>
         </div>
       </div>
      </section>

      <!-- modal  -->

      <div
       class="modal fade"
       style="display: none"
       id="exampleModal"
       tabindex="-1"
       aria-labelledby="exampleModalLabel"
       aria-hidden="true"
      >
       <div
         class="modal-dialog modal-dialog-centered modal-dialog-scrollable clinic"
       >
         <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">
               Digital Business Clinic Registration Form
             </h5>
             <button
               type="button"
               class="btn-close"
               data-bs-dismiss="modal"
               aria-label="Close"
             ></button>
           </div>
           <div class="modal-body">
             <form action="#">
               <div class="row">
                 <div class="form-group col-md-6">
                   <input
                     type="text"
                     class="form-control"
                     id="BusinessName"
                     placeholder="Business Name"
                   />
                 </div>
                 <div class="form-group col-md-6">
                   <input
                     type="text"
                     class="form-control"
                     id="PersonalName"
                     placeholder="Personal Name"
                   />
                 </div>
               </div>

               <div class="row">
                 <div class="form-group col-md-6">
                   <input
                     type="text"
                     class="form-control"
                     id="BusinessAddress"
                     placeholder="Business Address"
                   />
                 </div>
                 <div class="form-group col-md-6">
                   <input
                     type="email"
                     class="form-control"
                     id="email"
                     placeholder="Email Address"
                   />
                 </div>
               </div>

               <div class="row">
                 <div class="form-group col-md-6">
                   <input
                     type="number"
                     class="form-control"
                     id="PhoneNumber"
                     placeholder="Phone Number"
                   />
                 </div>
                 <div class="form-group col-md-6">
                   <input
                     type="text"
                     class="form-control"
                     id="BusinessSector"
                     placeholder="Business Sector"
                   />
                 </div>
               </div>

               <div class="row">
                 <div class="form-group col-md-6">
                   <input
                     type="number"
                     class="form-control"
                     id="AccountNumber"
                     placeholder="Account Number"
                   />
                 </div>
                 <div class="form-group col-md-6">
                   <select class="form-select" id="branches">
                     <option value="">No. of outlets/branches</option>
                     <option value="">2</option>
                     <option value="">3</option>
                     <option value="">4</option>
                     <option value="">5</option>
                   </select>
                 </div>
               </div>

               <div class="row">
                 <div class="form-group col-md-6">
                   <select class="form-select" id="employees">
                     <option value="">No of Female Employees</option>
                     <option value="">2</option>
                     <option value="">3</option>
                     <option value="">4</option>
                     <option value="">5</option>
                   </select>
                 </div>
               </div>

               <div class="row">
                 <div class="form-group">
                   <textarea
                     class="form-control"
                     id="BriefDescription"
                     rows="2"
                     placeholder="Brief Description"
                   ></textarea>
                 </div>
               </div>

               <div class="row">
                 <div class="form-group">
                   <select class="form-select" id="exampleSelect">
                     <option value="">
                       Please select your top 3 Business needs requiring
                       Consulting
                     </option>
                     <option value="">2</option>
                     <option value="">3</option>
                     <option value="">4</option>
                     <option value="">5</option>
                   </select>
                 </div>
               </div>

               <div class="row">
                 <div class="form-group">
                   <textarea
                     class="form-control"
                     id="BriefDescription"
                     rows="2"
                     placeholder="Give a brief description of this challenge"
                   ></textarea>
                 </div>
               </div>

               <button class="btn submit-reg">Submit</button>
             </form>
           </div>
         </div>
       </div>
      </div>

      <div
       class="modal fade"
       style="display: none"
       id="expert"
       tabindex="-1"
       aria-labelledby="exampleModalLabel"
       aria-hidden="true"
      >
       <div
         class="modal-dialog modal-dialog-centered modal-dialog-scrollablev expert"
       >
         <div class="modal-content">
           <div class="modal-header">
             <div class="d-flex">
               <img src="{{asset('img/expert1.png')}}" alt="expert" />
               <div>
                 <h5>Joy Esozie-Amaye</h5>
                 <h6 class="fade-blue">Business</h6>
               </div>
             </div>
             <button
               type="button"
               class="btn-close"
               data-bs-dismiss="modal"
               aria-label="Close"
             ></button>
           </div>
           <div class="modal-body">
             <p>
               Founder/CEO (The Loaf Lane 2018 &#45; Date. Business Consulting &
               Advisory (Pocketfuel Finance Ltd (2020 &#45; Date). Graduate
               Intern (HR Business Partners, Chevron Nigeria Ltd 2018). Branch
               Operations and Service Management, (Diamond Bank Plc 2007 &#45;
               2016). MBA &#45; General Mgt. (Lagos Business School). Strategic
               Business Management (Harvard University). Traditional Bread Baking
               (Le Cordon Bleu). BSc Accounting (Lagos State University)
             </p>
           </div>
         </div>
       </div>
      </div>

      <div
       class="modal fade"
       style="display: none"
       id="expertTwo"
       tabindex="-1"
       aria-labelledby="exampleModalLabel"
       aria-hidden="true"
      >
       <div
         class="modal-dialog modal-dialog-centered modal-dialog-scrollablev expert"
       >
         <div class="modal-content">
           <div class="modal-header">
             <div class="d-flex">
               <img src="{{asset('img/expert2.png')}}" alt="expert" />
               <div>
                 <h5>Augustine Elochukwu Okeke</h5>
                 <h6 class="fade-blue">Technology</h6>
               </div>
             </div>
             <button
               type="button"
               class="btn-close"
               data-bs-dismiss="modal"
               aria-label="Close"
             ></button>
           </div>
           <div class="modal-body">
             <p>
               Expertise in ICT and telecommunication technology span various
               fields including, Microwave Radio implementation/maintenance,
               Radio Communication, Data Communication, Digital Marketing,
               Broadband Networks, VSAT implementation/maintenance, Fiber Optic
               Cable deployment/maintenance, Cellular Network
               implementation/maintenance, Field Operations, Managed Capacity
               (MS)/Managed Services delivery. As the Head of operations
               (Ericsson, Lagos) I led the multi-functional team that delivered,
               Radio Access Network (RAN) infrastructure deployment for Airtel
               Nigeria managed services worth over USD5Million involving RAN
               modernization, transmission modernization, IPRAN deployment, 2G/3G
               site roll-out, comprising of multi-vendor systems. I have gained
               unique experiences in leading teams to manage the most challenging
               and most volatile regions in Nigeria, Africa, and India. I am
               currently the MD of Compass Projects Ltd, a consultancy company
               with expertise in managed services telecommunication network
               optimization, deployment, and power solutions. By participating
               actively in students&#39;, youth, and professional organizations
               and occupying over 30 critical leadership positions, for over 34
               years running (including the leadership as National President of
               the over 100, 000 professional members of FUTO Alumni Association
               worldwide), I have acquired the technical expertise and
               proficiency required to deliver the specific expectations and
               diversity requirements of forward-looking world-class
               organizations.
             </p>
           </div>
         </div>
       </div>
      </div>

      <div
       class="modal fade"
       style="display: none"
       id="expertThree"
       tabindex="-1"
       aria-labelledby="exampleModalLabel"
       aria-hidden="true"
      >
       <div
         class="modal-dialog modal-dialog-centered modal-dialog-scrollablev expert"
       >
         <div class="modal-content">
           <div class="modal-header">
             <div class="d-flex">
               <img src="{{asset('img/expert3.png')}}" alt="expert" />
               <div>
                 <h5>Akachi Ngwu</h5>
                 <h6 class="fade-blue">Business</h6>
               </div>
             </div>
             <button
               type="button"
               class="btn-close"
               data-bs-dismiss="modal"
               aria-label="Close"
             ></button>
           </div>
           <div class="modal-body">
             <p>
               Akachi has had a remarkable and distinguished career in media,
               marketing, and advertising ecosystem spanning out of home
               advertising, branding, electronic broadcast, and print media. In
               2018, he published his debut book on media and advertising with
               the title; connecting with consumers: insights engagement
               conversations. In 2014, Akachi received the top ten business plan
               competition award for growing business category from the Islamic
               Development Bank, Jedda, Saudi Arabia in a competition that
               involved more than 600 entrepreneurs from across sub-Saharan
               African countries. The award was presented and received at
               Casablanca, Morocco on December 04, 2014. In 2017, Akachi started
               mentoring aspiring entrepreneurs in Tony Elumelu Foundation's
               flagship entrepreneurial development program in Africa. In 2018,
               he successfully mentored a mentee that received the seed grant of
               the sum of Five thousand US dollars, USD5000.00 from the
               foundation. He has variously worked with Marketing + Media
               Limited, Outdoor Communications Limited, and Minaj Broadcast
               International, where he rose to the position of Head of Station.
               He left the employment of Minaj Broadcast International in 2010 to
               commence his entrepreneur journey with the incorporation of
               Consumer Scores International Limited, an In-Store advertising
               solutions provider. Presently, Akachi is the Executive
               Director/Chief Operating Officer at Luzo Digital Network and Media
               Limited, a 360 degrees marketing communications organization based
               in Lagos Nigeria. He oversees strategy, organization performance,
               personnel development, business development support, planning and
               executing organization goals, corporate positioning and
               stakeholder engagement, budget implementation, resource
               management, and improvement.
             </p>
           </div>
         </div>
       </div>
      </div>

      <div
       class="modal fade"
       style="display: none"
       id="expertFour"
       tabindex="-1"
       aria-labelledby="exampleModalLabel"
       aria-hidden="true"
      >
       <div
         class="modal-dialog modal-dialog-centered modal-dialog-scrollablev expert"
       >
         <div class="modal-content">
           <div class="modal-header">
             <div class="d-flex">
               <img src="{{asset('img/expert4.png')}}" alt="expert" />
               <div>
                 <h5>Nengi A. Bob-Manuel, FCA, ACCA, CISA, MBA.</h5>
                 <h6 class="fade-blue">Accounting & Tax</h6>
               </div>
             </div>
             <button
               type="button"
               class="btn-close"
               data-bs-dismiss="modal"
               aria-label="Close"
             ></button>
           </div>
           <div class="modal-body">
             <p>
               Nengi Bob-Manuel is a graduate of Applied Accounting from Oxford
               Brookes University, United Kingdom. A fellow of the Institute of
               Chartered Accountants of Nigeria and a member of the Association
               of Certified Chartered Accountants (ACCA). Her love for ICT with
               the increased security risks because of the increase made her to
               further acquire the CISA certification making her a Certified
               Information System Auditor of ISACA. And she is rounding up her
               MBA with the prestigious Lagos Business School. Nengi has served
               in several Management positions for periods spanning over 5 years
               and covering various industries. And is currently the Consulting
               Lead of TGR Ltd an Accounting, Tax, and Strategy consulting firm
               that also provides Accounting software services for a number of
               firms.
             </p>
           </div>
         </div>
       </div>
      </div>
      <!-- end of modal  -->
  @endsection
