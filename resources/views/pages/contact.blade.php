<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Tue Aug 08 2023 14:46:19 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="64d2501148f66bed1c42f12b" data-wf-site="64c3f1a50a737c6a48e2cd14">
@extends('layouts.navbar')
<head>
  <meta charset="utf-8">
  <title>聯絡我們</title>
  <meta content="CustomerService" property="og:title">
  <meta content="CustomerService" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="{{ asset('index_assets/css/normalize.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('index_assets/css/webflow.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('index_assets/css/waves-library-site-e37884.webflow.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Oswald:200,300,400,500,600,700"]  }});</script>
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="{{ asset('index_assets/images/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">
  <link href="{{ asset('index_assets/images/webclip.png') }}" rel="apple-touch-icon">
</head>
<body>
  
  @section('content')
  @endsection

  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

  <div class="waves---section-medium-5">
    <div class="waves---main-container-5 w-container">
      <div class="waves-master-contact-3">
        <div class="waves-image-wrap-contact-3"><img src=" {{ asset('index_assets/images/lily-woods-team-member-brix-templates-avatar-picture.jpeg') }}" loading="lazy" sizes="(max-width: 479px) 93vw, (max-width: 767px) 96vw, (max-width: 991px) 94vw, 890px" srcset=" {{ asset('index_assets/images/lily-woods-team-member-brix-templates-avatar-picture-p-500.jpeg 500w') }}, {{ asset('index_assets/images/lily-woods-team-member-brix-templates-avatar-picture.jpeg 800w') }}" alt="Lily Woods - Elements Webflow Library - BRIX Templates" class="waves-image-contact-3"></div>
        <div class="waves-content-contact-3">
          <div class="waves-form-block-contact-3 w-form">
            <form id="Contact-form" action="{{ route('sendMail') }}" name="wf-form-Contact-Form-2" data-name="Contact Form" method="POST" class="waves---form-contact-3" data-wf-page-id="64d2501148f66bed1c42f12b" data-wf-element-id="6e4a7115-53e7-dbea-287a-2ef5a042f988">
              @csrf
              <h1 class="heading-4">Contact Us</h1>
              <div class="text-block-9">我們會傾聽您的聲音，如果有疑問，我們的客服將會幫您解答。</div>
              <div class="waves---2-inputs-3">
                <div id="w-node-_6e4a7115-53e7-dbea-287a-2ef5a042f98a-1c42f12b" class="waves---input-wrap-3">
                  <div class="waves---field-label-2">name</div><input type="text" class="waves-text-field-white-2 w-input" maxlength="256" name="name" data-name="First Name" placeholder="ex. Mike" id="First-name" required autocomplete="name" autofocus>
                </div>
                
              </div>
              <div class="waves---input-wrap-3">
                <div class="waves---field-label-2">Email</div><input type="email" class="waves-text-field-white-2 w-input" maxlength="256" name="email" data-name="Email" placeholder="ex. Email" id="Email" required autocomplete="email">
              </div>
              <div class="waves---input-wrap-3">
                <div class="waves---field-label-2">Country</div><select id="country" name="Country" data-name="Country" class="waves-select-white-2 w-select">
                  <option value="">Select one...</option>
                  <option value="Taiwan">Taiwan</option>
                  <option value="Japan">Japan</option>
                  <option value="US">US</option>
                </select>
              </div>
              <div class="waves---input-wrap-3">
                <div class="waves---field-label-2">想說甚麼?</div><input type="text" class="waves-text-field-white-2 w-input" maxlength="256" name="text" data-name="Email 2" placeholder="真心話在這裡" id="Email-2">
              </div><label class="w-checkbox waves---checkbox-field-3">
                <div class="w-checkbox-input w-checkbox-input--inputType-custom waves---checkbox-3"></div><input type="checkbox" id="Checkbox" name="Checkbox" data-name="Checkbox" style="opacity:0;position:absolute;z-index:-1"><span class="waves---checkbox-label-3 w-form-label" for="Checkbox">I accept the <a href="#">Terms &amp; Conditions</a></span>
              </label>
              <div class="waves-submit-wrap-contact-3"><input type="submit" value="Submit" data-wait="Please wait..." class="waves---cta-dark-4 wide-cta w-button"></div>
            </form>
            <div class="waves-success-mesaage-4 w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="waves---section-medium-5">
    <div class="waves---main-container-5 w-container">
      <div class="waves---center-heading-2">
        <h2 class="waves---heading-2-no-margins-3">直接連絡我們?</h2>
        <div class="waves---paragraph-big-3">您也可以選擇直接連絡官方，我們會盡可能地回覆您們。</div>
      </div>
      <div class="w-layout-grid waves-grid-contact-4">
        <div id="w-node-_6103a993-a2f4-1f27-2c69-e77dce8a1195-1c42f12b" class="waves-tile-contact-4">
          <div class="waves---mg-bottom-18"><img src="index_assets/images/send-mail.svg" loading="lazy" alt="" class="waves-icon-65"></div>
          <h3 class="waves---heading-3-no-margins-3">Mail us</h3>
          <div class="waves---paragraph-regular-3">misproject2023@gmail.com</div>
        </div>
        <div id="w-node-_6103a993-a2f4-1f27-2c69-e77dce8a119c-1c42f12b" class="waves-tile-contact-4">
          <div class="waves---mg-bottom-18"><img src="index_assets/images/phone.svg" loading="lazy" alt="" class="waves-icon-65"></div>
          <h3 class="waves---heading-3-no-margins-3">Call us</h3>
          <div class="waves---paragraph-regular-3">+1 800 000 00</div>
        </div>
        <div id="w-node-_6103a993-a2f4-1f27-2c69-e77dce8a11a3-1c42f12b" class="waves-tile-contact-4">
          <div class="waves---mg-bottom-18"><img src="index_assets/images/pin-alt.svg" loading="lazy" alt="" class="waves-icon-65"></div>
          <h3 class="waves---heading-3-no-margins-3">Find us</h3>
          <div class="waves---paragraph-regular-3">Street 41, 40102, 北極路</div>
        </div>
      </div>
    </div>
  </div>
  <div class="waves-footer-1">
    <div class="waves---main-container-2 w-container">
      <h1>YO FU</h1>
      <div class="waves---paragraph-big">No Compromises on Skincare, We Care for You.</div>
      <div class="waves-divider-footer-1"></div>
      <div class="waves-bottom-footer-1">
        <div class="waves-bottom-right-footer-1">
          <a href="#" class="w-inline-block"><img src="index_assets/images/dribbble.svg" loading="lazy" alt="" class="waves-icon-33"></a>
          <a href="#" class="w-inline-block"><img src="index_assets/images/telegram.svg" loading="lazy" alt="" class="waves-icon-33"></a>
          <a href="#" class="w-inline-block"><img src="index_assets/images/instagram.svg" loading="lazy" alt="" class="waves-icon-33"></a>
          <a href="#" class="w-inline-block"><img src="index_assets/images/google-circle.svg" loading="lazy" alt="" class="waves-icon-33"></a>
          <a href="#" class="w-inline-block"><img src="index_assets/images/youtube.svg" loading="lazy" alt="" class="waves-icon-33"></a>
        </div>
      </div>
    </div>
  </div>

  @if (session()->has('message'))
    <script>
       setTimeout(function() {
           window.location.href = "/index"
       }, 5000); // 2 second
    </script>
  @endif

  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=64c3f1a50a737c6a48e2cd14" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="index_assets/js/webflow.js" type="text/javascript"></script>
</body>
</html>