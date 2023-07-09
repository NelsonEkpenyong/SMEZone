<table style="width: 100%; max-width: 800px; margin: 0 auto; padding: 0; border-collapse: collapse;">
  <tr>
    <td colspan="2" style="background: linear-gradient(93.66deg, rgba(235, 124, 2, 0.88) 14.42%, rgba(206, 238, 10, 0.59) 93.6%); height: 23px; margin-top: 1.6rem;"></td>
  </tr>
  <tr>
    <td colspan="2" style="text-align: center; padding: 2.5rem 0;">
      <h2 style="font-family: Nunito; font-size: 24px; font-weight: 700; line-height: 33px; letter-spacing: 0em; margin: 0;">Confirmation of Course Enrollment</h2>
    </td>
  </tr>
  <tr>
    <td colspan="2" style="text-align: center;">
      <img src="../img/handSign.png" alt="" style="display: block; width: 100%; height: auto;">
    </td>
  </tr>
  <tr>
    <td colspan="2" style="font-family: Nunito; font-size: 16px; font-weight: 500; line-height: 30px; letter-spacing: 0px; text-align: left; padding: 0 1rem;">
      <p>Dear {{ $user->first_name }},</p>
      <p style="margin-top: 1.5rem;">You have successfully enrolled for <b>{{$course}}</b>.</p>
      <p>We are excited to have you as a part of our learning community and look forward to helping you achieve your learning and professional goals.</p>
      <p style="margin-top: 2.5rem; font-weight: bold;">Regards</p>
      <p>Access Bank SMEZone</p>
    </td>
  </tr>
  <tr>
    <td colspan="2" style="text-align: center; padding: 3rem 1rem;">
      <p>If you have any complaints, please contact our support team or send us an email at <a href="mailto:hello@accesssmezone.com">hello@accesssmezone.com</a>.</p>
    </td>
  </tr>
  <tr>
    <td style="background-color: black; padding: 5rem;">
      <div style="position: relative;">
        <img src="{{asset('/img/Socials.png')}}" alt="" style="display: block; max-width: 100%; height: auto; position: absolute; top: 10%; left: 50%; transform: translate(-50%, -50%);">
        <div style="padding-left: 1rem; padding-right: 0.5rem; padding-top: 10rem;">
          <h2 style="color: #FFF; font-family: Poppins; font-size: 20px; font-style: normal; font-weight: 400; line-height: 26px; margin-left: 16rem; margin-top: -3.5rem; padding-bottom: 0rem;">Email: hello@accesssmezone.com</h2>
          <div style="display: flex; margin: 3rem 1rem 5rem;">
            <p style="margin: 0; color: #FFF;">Legal</p>
            <p style="margin: 0; color: #FFF;">Support</p>
            <p style="margin: 0; color: #FFF;">FAQ</p>
          </div>
          <div>
            <p style="font-family: Poppins; font-size: 13px; font-weight: 500; line-height: 22px; letter-spacing: 0px; text-align: center; color: black">This email is for {{$user->email}}, if this is not you please <br><b><u>Unsubscribe</u></b> immediately</p>
          </div>
          <div style="width: 133px; height: 36px; margin-top: 2.5rem;">
            <img src="{{asset('/img/sme_logo_footer.png')}}" alt="" style="display: block; width: 100%; height: auto;">
          </div>
          <div style="margin-top: 2.7rem;">
            <p style="font-family: Poppins; font-size: 13px; font-weight: 400; line-height: 22px; letter-spacing: 0px; text-align: center; color: black;">@2023 Access Bank - All Rights Reserved</p>
          </div>
        </div>
        <div style="position: absolute; bottom: 0; left: 0;">
          <img src="{{asset('/img/left.png')}}" alt="" style="display: block; width: 100%; height: auto;">
        </div>
        <div style="position: absolute; bottom: 0; right: 0;">
          <img src="{{asset('/img/right.png')}}" alt="" style="display: block; width: 100%; height: auto;">
        </div>
      </div>
    </td>
  </tr>
  <tr>
    <td colspan="2" style="background: linear-gradient(93.66deg, rgba(235, 124, 2, 0.88) 14.42%, rgba(206, 238, 10, 0.59) 93.6%); height: 25px;"></td>
  </tr>
</table>
