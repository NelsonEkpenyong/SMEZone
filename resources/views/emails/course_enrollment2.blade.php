  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="../icons/sme-logo.svg" alt=""/>
    </a>
    <div class="top_rectangle"></div>

    <h2 class="confirmation">
      Confirmation of Course Enrollment
    </h2>

    <div class="confirmation_image">
      <img src="{{ asset('img/handSign.png')}}" alt="">
    </div>

    <div class="letter">
      <p>Dear {{ $user->first_name }},</p>

      <p class="letter_text">
        You have succesfully enrolled for <b>{{$course}}</b>.
      </P>
      <p> 
        We are excited to have you as a part of our learning community and look forward to helping you achieve your learning and professional goals.
      </p>

      <p class="letter_greeting">Regards</p>

      <p>Access Bank SMEZone</p>
    </div>

    <div class="contact_us">
      <p>
        If you have any complaints, please contact our contact support <br>or send us an email hello@accesssmezone.com
      </p>
    </div>

    <div class="footer_banner">
      <div class="socials">
        <img src="{{asset('/img/Socials.png')}}" alt="">
      </div>
      <div class="section_text" style="padding-top: 10rem">
        <h2 class="footer_banner_mail">Email: hello@accesssmezone.com</h2>
        <div class="group">
          <p class="legal">Legal</p>
          <p class="support">Support</p>
          <p class="faq">Faq</p>
        </div>

        <div class="for">
          <p>
            This email is for XXX@gmail.com, if this is not you please <br><b><u>Unsubscribe</u></b> immediately
          </p>
        </div>

        <div class="footer_banner_logo">
          <img src="{{asset('/img/sme_logo_footer.png')}}" alt=""/>
        </div>

        <div class="all_rights">
          <p>
            @2023 Access Bank - All Rights Reserved
          </p>
        </div>
      </div>
      
      
      <aside>
        <div class="left">
          <div class="aside">
            <img src="{{asset('/img/left.png')}}" alt="">
          </div>
        </div>
        <div class="right">
          <div class="aside">
            <img src="{{asset('/img/right.png')}}" alt="">
          </div>
        </div>
          
      </aside>
    </div>
    <div class="bottom_rectangle"></div>
</div>

<style>

.container{
  padding-left: calc((100vw - 800px)/2);
  padding-right: calc((100vw - 800px)/2);
}

.top_rectangle{
  background: linear-gradient(93.66deg, rgba(235, 124, 2, 0.88) 14.42%, rgba(206, 238, 10, 0.59) 93.6%);
  width: 770px;
  height: 23px;
  top: 83px;
  margin-top: 1.6rem;
}

.bottom_rectangle{
  background: linear-gradient(93.66deg, rgba(235, 124, 2, 0.88) 14.42%, rgba(206, 238, 10, 0.59) 93.6%);
  width: 767px;
  height: 25px;
  margin-top: 0rem;
}
.confirmation {
  font-family: Nunito;
  font-size: 24px;
  font-weight: 700;
  line-height: 33px;
  letter-spacing: 0em;
  text-align: center;

  /* width: 389px;
  height: 33px;
  margin-top: 2.5rem;
  margin-bottom: -0.6rem;
  left: 52px; */
}

.contact_us{
  margin-top: 5rem;
}

.confirmation_image{
  margin-top: 0;
  margin-left: calc((100vw - 1050px)/2);
  margin-right: calc((100vw - 600px)/2);
}

.letter_text{
  font-family: Nunito;
  font-size: 16px;
  font-weight: 500;
  line-height: 30px;
  letter-spacing: 0px;
  text-align: left;

}

.letter_greeting{
  margin-top: 2.5rem
}

.contact_us p {
  font-family: Nunito;
  font-size: 13px;
  font-weight: 400;
  line-height: 22px;
  letter-spacing: 0px;
  text-align: center;

  font-family: Nunito;
  font-size: 13px;
  font-weight: 700;
  line-height: 22px;
  letter-spacing: 0px;
  text-align: center;

  font-family: Poppins;
  font-size: 13px;
  font-weight: 400;
  line-height: 22px;
  letter-spacing: 0px;
  text-align: center;

}

.footer_banner{
  background-image: url(../img/MailRectangle.png);
  background-repeat: no-repeat;
  background-size: 100% auto;
  height: 498px;
}


.footer_banner {
    position: relative;
}

.left,
.right {
    position: absolute; /* Position the elements absolutely */
    bottom: 0;
} 

.left {
    left: 0; 
}

.right {
    right: 0; /* Position the right element on the right side */
}

.socials {
    position: absolute;
    top: 10%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.section_text{
  /* margin-top: rem; */
}

.footer_banner img {
    display: block;
    width: 100%;
    height: auto;
}

.socials img {
    display: block;
    max-width: 100%;
    height: auto;
}

.footer_banner_mail{
  color: #FFF;
  font-family: Poppins;
  font-size: 20px;
  font-style: normal;
  font-weight: 400;
  line-height: 26px;
  margin-left: 16rem;
  margin-top: -3.5rem;
  padding-bottom: 0rem;
  /* padding-bottom: 20rem; */
  /* bottom: 30%; */
}

.group {
  display: flex;
  margin-left: calc((100vw - 900px)/2);
  margin-right: calc((100vw - 900px)/2);
  margin-top: 3rem;
  margin-bottom: 5rem;
  justify-content: space-between;
}
  
  

  .group .support,.legal, .faq {
    margin: 0; /* Remove default margins for the <p> elements */
    color:#FFF;
  } 

  .for p {
    font-family: Poppins;
    font-size: 13px;
    font-weight: 500;
    line-height: 22px;
    letter-spacing: 0px;
    text-align: center;
    color: #FFF

  }

  .all_rights p {
    font-family: Poppins;
    font-size: 13px;
    font-weight: 400;
    line-height: 22px;
    letter-spacing: 0px;
    text-align: center;
    color: #FFF;
    margin-top: 2.7rem;
  }

.footer_banner_logo{
  width: 133px;
  height: 36px;
  margin-top: 2.5rem;
  /* top: 1258px;
  left: 234px; */
  padding-left: calc((100vw - 900px)/2);
  padding-right: calc((100vw - 800px)/2);
}


</style>