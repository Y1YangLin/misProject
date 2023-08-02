<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>上傳照片頁面</title>
    <link rel="stylesheet" href="{{ asset('photo_assets/bootstrap/css/bootstrap.min.css') }}">

    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="{{ asset('index_assets/css/normalize.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('index_assets/css/webflow.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('index_assets/css/waves-library-site-e37884.webflow.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com') }}" rel="preconnect">
    <link href="https://fonts.gstatic.com') }}" rel="preconnect" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">WebFont.load({  google: {    families: ["Oswald:200,300,400,500,600,700"]  }});</script>
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
    <link href="{{ asset('index_assets/images/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">
    <link href="{{ asset('index_assets/images/webclip.png') }}" rel="apple-touch-icon">

</head>

<body>

<div class="navbar-logo-center">
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
                      <a href="#" class="nav-dropdown-link w-dropdown-link">男生</a>
                      <a href="#" class="nav-dropdown-link w-dropdown-link">女生</a>
                      <a href="#" class="nav-dropdown-link w-dropdown-link">孩童</a>
                      <a href="/product" class="nav-dropdown-link w-dropdown-link">推薦</a>
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
  </div>

    <section>
        <div class="container-fluid" style="padding-right: 0px;padding-left: 0px;"><img src="{{ asset('photo_assets/img/pic5-text.png') }}" style="width: 100%;height: 500px;"></div>
    </section>
    <section>
        <div class="container">
            <div class="row" style="padding-top: 100px;">
                <div class="col text-center align-self-center"><img src="{{ asset('photo_assets/img/pic6.png') }}" style="width: 446px;max-height: 446px;height: 446px;font-weight: bold;"><button class="btn btn-primary" type="button" style="background: var(--bs-body-color);width: 440px;height: 44px;margin-top: 50px;--bs-primary: #000000;--bs-primary-rgb: 0,0,0;border-color: var(--bs-emphasis-color);">上傳照片<br><br></button></div>
                <div class="col text-center align-self-center"><img src="{{ asset('photo_assets/img/pic7.png') }}" style="width: 446px;max-height: 446px;"><button class="btn btn-primary" type="button" style="width: 440px;height: 44px;border-color: var(--bs-emphasis-color);background: var(--bs-body-color);margin-top: 50px;font-weight: bold;">直接拍照<br><br></button></div>
            </div>
        </div>
    </section>
    <script src="{{ asset('photo_assets/bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>