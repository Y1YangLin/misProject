<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Fri Aug 18 2023 13:09:05 GMT+0000 (Coordinated Universal Time)  -->
@extends('layouts.navbar')
<html data-wf-page="64d0d9ef449eb28e9c7d0e81" data-wf-site="64c3f1a50a737c6a48e2cd14">
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <meta content="Login" property="og:title">
  <meta content="Login" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="assets/css/normalize.css" rel="stylesheet" type="text/css">
  <link href="assets/css/webflow.css" rel="stylesheet" type="text/css">
  <link href="assets/css/waves-library-site-e37884.webflow.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Oswald:200,300,400,500,600,700"]  }});</script>
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="assets/images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="assets/images/webclip.png" rel="apple-touch-icon">
</head>
<body>

  @section('content')
  @endsection
  
  <div class="waves---section-medium-3">
    <div class="waves-master-contact-1">
      <div class="waves---center-heading">
        <h1 class="waves---heading-2-no-margins-2">Welcome!</h1>
        <div class="waves---paragraph-big-2">Welcome to YOFU, here is the log in page.</div>
      </div>
      <div class="waves-form-block-contact-1 w-form">
      <form id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form" action="{{ route('login') }}" method="POST" class="waves---form-contact-2" data-wf-page-id="64d0d9ef449eb28e9c7d0e81" data-wf-element-id="4e969231-cb0b-30b7-3799-4576ee8a44bd">
          @csrf
          <div class="waves---input-wrap-2">
            <div class="waves---field-label">Email</div><input type="email" class="waves-text-field-background-2 w-input" maxlength="256" name="email" data-name="Email" placeholder="ex. 9ay@email.com" id="Email" required autocomplete="email" autofocus>
          </div>

          @error('email')
            <span class="invalid-feedback" role="alert">
              <strong style="color: red;"> 登入錯誤，再檢查看看喔 ! </strong>
            </span>
          @enderror
          
          <div class="waves---input-wrap-2">
            <div class="waves---field-label">Password</div><input type="password" class="waves-text-field-background-2 w-input" maxlength="256" name="password" data-name="Password" placeholder="password" id="Password" required autocomplete="current-password">
          </div>
          
          <label class="w-checkbox waves---checkbox-field-2">
            <div class="w-checkbox-input w-checkbox-input--inputType-custom waves---checkbox-2"></div><input type="checkbox" id="checkbox" name="Checkbox" data-name="Checkbox" style="opacity:0;position:absolute;z-index:-1"><span class="waves---checkbox-label-2 w-form-label" for="Checkbox">I accept the <a href="#">Terms &amp; Conditions</a></span>
          </label>
          <div class="waves-submit-wrap-contact-2"><input type="submit" value="Submit" data-wait="Please wait..." class="waves---cta-dark-3 wide-cta w-button"></div>
          
          <div class="div-block-7">
            <div>還沒有帳號?</div>
            <a href="/register" class="link-2">Press here to sign up</a>
          </div>

         </form>
        <div class="waves-success-mesaage-3 w-form-done">
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
          <div>Oops! Something went wrong while submitting the form.</div>
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
          <a href="#" class="w-inline-block"><img src="assets/images/dribbble.svg" loading="lazy" alt="" class="waves-icon-33"></a>
          <a href="#" class="w-inline-block"><img src="assets/images/telegram.svg" loading="lazy" alt="" class="waves-icon-33"></a>
          <a href="#" class="w-inline-block"><img src="assets/images/instagram.svg" loading="lazy" alt="" class="waves-icon-33"></a>
          <a href="#" class="w-inline-block"><img src="assets/images/google-circle.svg" loading="lazy" alt="" class="waves-icon-33"></a>
          <a href="#" class="w-inline-block"><img src="assets/images/youtube.svg" loading="lazy" alt="" class="waves-icon-33"></a>
        </div>
      </div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=64c3f1a50a737c6a48e2cd14" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="assets/js/webflow.js" type="text/javascript"></script>
</body>
</html>