<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  </head>
  <body>
    <table
      style="
        width: 100%;
        max-width: 800px;
        margin: 0 auto;
        padding: 0;
        border-collapse: collapse;
        background-color: #f7f7f7;
      "
    >
      <tr>
        <td colspan="2">
          <img
            src="https://davtonlab.tech/img/smelogo.png"
            alt="smeLogo"
            style="
              height: 36px;
              width: 134.77px;
              margin-top: 29px;
              margin-left: 56px;
            "
          />
        </td>
      </tr>
      <tr>
        <td
          colspan="2"
          style="
            background: linear-gradient(
              93.66deg,
              rgba(235, 124, 2, 0.88) 14.42%,
              rgba(206, 238, 10, 0.59) 93.6%
            );
            height: 23px;
            margin-top: 1.6rem;
          "
        ></td>
      </tr>
      <tr>
        <td colspan="2" style="text-align: center; padding: 2.5rem 0">
          <h2
            style="
              font-family: Nunito;
              font-size: 24px;
              font-weight: 700;
              line-height: 33px;
              letter-spacing: 0em;
              margin: 0;
            "
          >
            Welcome to Access Bank SMEZone
          </h2>
        </td>
      </tr>
      <tr>
        <td colspan="2" style="text-align: center">
          <div>
            <img
              src="https://davtonlab.tech/img/welcome_image.png"
              alt="The hand image"
              top="183"
              style="
                display: block;
                width: 324px;
                height: 324px;
                margin-left: 250px;
                margin-right: calc((100vw - 600px) / 2);
              "
            />
          </div>
        </td>
      </tr>
      <tr>
        <td
          colspan="2"
          style="
            font-family: Nunito;
            font-size: 16px;
            font-weight: 500;
            line-height: 30px;
            letter-spacing: 0px;
            text-align: left;
            padding: 0 1rem;
          "
        >
          <p>Dear <b>{{ $user->first_name }}</b>,</p>
          
          <p style="margin-top: 1.5rem">
            Welcome to Access Bank SMEZone Community!
          </p>

          <p style="margin-top: 1.5rem">
            We believe that as an SME you require all the support you can get and we are here for you.
          </p>

          <p style="margin-top: 1.5rem">
            We are excited to have you on board, and we are committed to providing you with a seamless and enriching experience. 
          </P>
          
          <p style="margin-top: 1.5rem">
            Please confirm your email address by clicking on the link below:
          </p>

          <p style="margin-top: 1.5rem">
            <a href="{{route('verify-email', $user->email_verification_code)}}">{{$code}}</a>
          </p>


          <p style="margin-top: 2.5rem; font-weight: bold">Regards</p>
          <p>Access Bank SMEZone</p>
        </td>
      </tr>
      <tr>
        <td colspan="2" style="text-align: center; padding: 3rem 1rem">
          <p>If you have any complaints, please contact our support team</p>
          <p>
            or send us an email at
            <a href="mailto:info@accesssmezone" ><b>info@accesssmezone</b></a>.
          </p>
        </td>
      </tr>
      <tr>
        <td style="background-color: black; padding-top: 5rem">
          <div>
            <div style="position: relative">
              <div style="text-align: center; width: 100%">
                <img
                  src="https://davtonlab.tech/img/Socials.png"
                  alt=""
                  style="
                    max-width: 100%;
                    height: auto;
                    width: 150px;
                    margin: auto;
                  "
                />
              </div>

              <div
                style="
                  padding-left: 1rem;
                  padding-right: 0.5rem;
                  padding-top: 5rem;
                  align-items: center;
                "
              >
                <h2
                  style="
                    color: #fff;
                    font-family: Poppins;
                    font-size: 20px;
                    font-style: normal;
                    font-weight: 400;
                    line-height: 26px;
                    padding-bottom: 0rem;
                    text-align: center;
                  "
                >
                  Email:
                  <span style="color: #fff; font-weight: 700">info@accesssmezone</span>
                </h2>

                <div style="width: 100%; text-align: center">
                  <span style="margin: 0; color: #fff">Legal</span>
                  <span style="margin: 0; color: #fff; margin-left: 2.5rem">
                    Support
                  </span>
                  <span style="margin: 0; color: #fff; margin-left: 2.5rem"
                    >FAQ</span
                  >
                </div>

                <div>
                  <p
                    style="
                      font-family: Poppins;
                      font-size: 13px;
                      font-weight: 500;
                      line-height: 22px;
                      letter-spacing: 0px;
                      text-align: center;
                      color: white;
                      width: 387px;
                      max-width: 100%;
                      margin-left: auto;
                      margin-right: auto;
                    "
                  >
                    This email is for {{$user->email}}, if this is not you
                    please
                    <br /><b><u>Unsubscribe</u></b> immediately
                  </p>
                </div>

                <div
                  style="
                    width: 133px;
                    height: 36px;
                    margin-top: 2.5rem;
                    text-align: center;
                    width: 100%;
                  "
                >
                  <img
                    src="https://davtonlab.tech/img/sme_logo_footer.png"
                    alt=""
                    style="height: auto; width: 133px; margin: auto"
                  />
                </div>

                <div style="margin-top: 2.7rem">
                  <p
                    style="
                      font-family: Poppins;
                      font-size: 13px;
                      font-weight: 400;
                      line-height: 22px;
                      letter-spacing: 0px;
                      text-align: center;
                      color: white;
                      margin-bottom: 0px;
                    "
                  >
                    @2023 Access Bank - All Rights Reserved
                  </p>
                </div>
              </div>

              <div class="d-flex align-items-end justify-content-between">
                <img
                  src="https://davtonlab.tech/img/left.png"
                  alt=""
                  style="width: 153px; height: auto"
                />

                <img
                  src="https://davtonlab.tech/img/right.png"
                  alt=""
                  style="width: 148px; height: auto; margin-left: 30.8rem" 
                />
              </div>
            </div>

            <div
              style="
                width: 100%;
                height: 31px;
                flex-shrink: 0;
                background: linear-gradient(
                  142deg,
                  rgba(235, 124, 2, 0.88) 0%,
                  rgba(206, 238, 10, 0.59) 100%
                );
              "
            ></div>
          </div>
        </td>
      </tr>
    </table>
  </body>
</html>