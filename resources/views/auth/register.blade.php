<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Tue Aug 08 2023 01:23:34 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="64d0de5c4b0a070a5e8da3a7" data-wf-site="64c3f1a50a737c6a48e2cd14">
@extends('layouts.navbar')
<head>
  <meta charset="utf-8">
  <title>Sign up</title>
  <meta content="Sign up" property="og:title">
  <meta content="Sign up" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="login_assets/css/normalize.css" rel="stylesheet" type="text/css">
  <link href="login_assets/css/webflow.css" rel="stylesheet" type="text/css">
  <link href="login_assets/css/waves-library-site-e37884.webflow.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Oswald:200,300,400,500,600,700"]  }});</script>
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="login_assets/images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="login_assets/images/webclip.png" rel="apple-touch-icon">
</head>
<body>
  <!-- <div class="navbar-logo-center">
    <div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar-logo-center-container shadow-three w-nav">
      <div class="container">
        <div class="navbar-wrapper-three">
          <a href="/" class="navbar-brand-three w-nav-brand">
            <h1>YO FU</h1>
          </a>
          <nav role="navigation" class="nav-menu-wrapper-three w-nav-menu">
            <div class="nav-menu-three">
              <ul role="list" class="nav-menu-block w-list-unstyled">
                <li>
                  <a href="/facetypes" class="nav-link">膚質分析</a>
                </li>
                <li>
                  <a href="/contact" class="nav-link">聯絡我們</a>
                </li>
                <li>
                  <div data-delay="0" data-hover="false" class="nav-dropdown w-dropdown">
                    <address class="nav-dropdown-toggle w-dropdown-toggle">
                      <div class="nav-dropdown-icon w-icon-dropdown-toggle"></div>
                      <div class="text-block-4">產品</div>
                    </address>
                    <nav class="nav-dropdown-list shadow-three mobile-shadow-hide w-dropdown-list">
                      <a href="product.html" class="nav-dropdown-link w-dropdown-link">男生</a>
                      <a href="product.html" class="nav-dropdown-link w-dropdown-link">女生</a>
                      <a href="product.html" class="nav-dropdown-link w-dropdown-link">孩童</a>
                      <a href="/products" class="nav-dropdown-link w-dropdown-link">推薦</a>
                    </nav>
                  </div>
                </li>
              </ul>
              <ul role="list" class="nav-menu-block w-list-unstyled">
                <li class="mobile-margin-top-10">
                  <a href="/login" class="nav-link-2 w-nav-link">account_circle</a>
                </li>
              </ul>
            </div>
          </nav>
          <div class="menu-button w-nav-button">
            <div class="w-icon-nav-menu"></div>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  @section('content')
  @endsection

  <div class="waves---section-medium-4">
    <div class="waves---main-container-4 w-container">
      <div class="waves-master-contact-1">
        <div class="waves---center-heading">
          <h1 class="waves---heading-2-no-margins-2">Welcome!</h1>
          <div class="waves---paragraph-big-2">Welcome to YOFU, please sign up your account</div>
        </div>
        <div class="waves-form-block-contact-1 w-form">
          <form id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form" action="{{ route('register') }}" method="POST" class="waves---form-contact-2" data-wf-page-id="64d0de5c4b0a070a5e8da3a7" data-wf-element-id="86f57ca4-904d-d70d-d6f1-c52c3badee1c">
            @csrf
            <div class="waves---2-inputs-2">
            
              <div id="w-node-_86f57ca4-904d-d70d-d6f1-c52c3badee22-5e8da3a7" class="waves---input-wrap-2">
                <div class="waves---field-label">User name</div><input type="text" class="waves-text-field-background-2 w-input" maxlength="256" name="name" data-name="Last Name" placeholder="ex. Scott" id="Last-name" required autocomplete="name" autofocus>
              </div>
            </div>
            <div class="waves---input-wrap-2">
              <div class="waves---field-label">Email</div><input type="email" class="waves-text-field-background-2 w-input" maxlength="256" name="email" data-name="Email" placeholder="ex. Email" id="Email" required autocomplete="email">
            </div>
            <div class="waves---input-wrap-2">
              <div class="waves---field-label">Password</div><input type="password" class="waves-text-field-background-2 w-input" maxlength="256" name="password" data-name="Email 2" placeholder="ex. Email" id="Email-2" required autocomplete="new-password">
              <div class="waves---input-wrap-2">
                <div class="waves---field-label">Password Again</div><input type="password" class="waves-text-field-background-2 w-input" maxlength="256" name="password_confirmation" data-name="Password" placeholder="ex. Email" id="Password" required autocomplete="new-password">
              </div>
            </div><label class="w-checkbox waves---checkbox-field-2">
              <div class="w-checkbox-input w-checkbox-input--inputType-custom waves---checkbox-2"></div><input type="checkbox" id="checkbox" name="Checkbox" data-name="Checkbox" style="opacity:0;position:absolute;z-index:-1"><span class="waves---checkbox-label-2 w-form-label" for="Checkbox">I accept the <a href="#">Terms &amp; Conditions</a></span>
            </label>
            <div class="waves-submit-wrap-contact-2">
               <input type="submit" value="Submit" data-wait="Please wait..." class="waves---cta-dark-3 wide-cta w-button">
               <br>
               <a href="/login"><b>返回登入頁面</b></a>
            </div>
            
            <div class="row mb-0">
           <!-- <div class="col-md-8 offset-md-4">
            <a href="{{ route('google-auth') }}">
             <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png">
            </a>
          </div>
         </div> -->

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
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=64c3f1a50a737c6a48e2cd14" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="login_assets/js/webflow.js" type="text/javascript"></script>
</body>
</html>