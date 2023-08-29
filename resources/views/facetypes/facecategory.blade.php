<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
@extends('layouts.navbar')
<!--  Last Published: Wed Aug 23 2023 17:59:00 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="64e41b0ae6dfc41c47f37dc0" data-wf-site="64c3f1a50a737c6a48e2cd14">
<head>
  <meta charset="utf-8">
  <title>膚質檢測頁面</title>
  <meta content="Skin_analysis" property="og:title">
  <meta content="Skin_analysis" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="{{ asset('assets/css/normalize.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/css/webflow.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/css/waves-library-site-e37884.webflow.css') }}" rel="stylesheet" type="text/css">
  <style>@media (min-width:992px) {html.w-mod-js:not(.w-mod-ix) [data-w-id="0f12e2ed-ff20-f733-c8fd-e4bd7f469e15"] {opacity:0;}html.w-mod-js:not(.w-mod-ix) [data-w-id="8d990192-2980-8447-2166-cf1fbf6bd2af"] {opacity:0;}}</style>
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Oswald:200,300,400,500,600,700","Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"]  }});</script>
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="{{ asset('assets/images/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">
  <link href="{{ asset('assets/images/webclip.png') }}" rel="apple-touch-icon">
</head>
<body>

  @section('content')
  @endsection

  <div class="cta">
    <div class="cf-wrapper cta-wrapper">
      <h1 data-w-id="79e9e821-4e07-c906-02a1-e83aee10b523" style="opacity:0" class="cf-display-heading heading-cta">Unveil Your Skin&#x27;s Secrets, Discover the Real You. </h1>
      <div data-w-id="79e9e821-4e07-c906-02a1-e83aee10b525" style="opacity:0" class="cf-cta-text">揭開肌膚的秘密，了解真正的你.</div>
      <a href="/facetype/photo" data-w-id="79e9e821-4e07-c906-02a1-e83aee10b527" style="opacity:0" class="cf-arrow-button w-inline-block">
        <div>Get Started Now</div>
      </a>
      <div class="cf-cta-circle _2"><img src="{{ asset('assets/images/joanna-nix-walkup-h2pnXHMz8YM-unsplash.jpg') }}" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 767px) 40px, (max-width: 991px) 6vw, 60px" srcset="{{ asset('assets/images/joanna-nix-walkup-h2pnXHMz8YM-unsplash-p-500.jpg 500w') }}, {{ asset('assets/images/joanna-nix-walkup-h2pnXHMz8YM-unsplash.jpg 640w') }}" alt="" class="cf-cta-image-bubbles"></div>
      <div class="cf-cta-circle _1"><img src="{{ asset('assets/images/imansyah-muhamad-putera-KchIV_GDy6U-unsplash.jpg') }}" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 767px) 40px, (max-width: 991px) 5vw, (max-width: 1279px) 52px, (max-width: 1439px) 4vw, 52px" srcset="{{ asset('assets/images/imansyah-muhamad-putera-KchIV_GDy6U-unsplash-p-500.jpg 500w') }}, {{ asset('assets/images/imansyah-muhamad-putera-KchIV_GDy6U-unsplash.jpg 640w') }}" alt="" class="cf-cta-image-bubbles"></div>
      <div class="cf-cta-circle _3"><img src="{{ asset('assets/images/Image-15.png') }}" loading="lazy" alt="" class="cf-cta-image-bubbles"></div>
      <div class="cf-cta-circle _4"><img src="{{ asset('assets/images/julian-wan-WNoLnJo7tS8-unsplash-1.jpg') }}" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 767px) 50px, (max-width: 991px) 8vw, 76px" srcset="{{ asset('assets/images/julian-wan-WNoLnJo7tS8-unsplash-1-p-500.jpg 500w') }}, {{ asset('assets/images/julian-wan-WNoLnJo7tS8-unsplash-1.jpg 640w') }}" alt="" class="cf-cta-image-bubbles"></div>
      <div class="cf-cta-circle _5"><img src="{{ asset('assets/images/Ellipse-127.png') }}" loading="lazy" alt="" class="cf-cta-image-bubbles rounded-image"></div>
    </div>
  </div>
  <div class="cf-cta-section">
    <div data-w-id="f4fee8d5-def0-79f6-3d1e-c8ba1843938f" style="opacity:0" class="cf-cta-form-wrapper">
      <div id="services-1" class="cf-services-page-contain-3">
        <div class="cf-services-left-contain">
          <div class="div-block-10">
            <h2 class="cf-services-h2-heading">looks_one</h2>
            <h3 class="heading-5">選擇上傳照片或者開啟相機拍照</h3>
          </div>
          <p class="cf-services-paragraph">進入膚質分析頁面，選擇要提供系統的照片，如果沒有，請在燈光充足的地方，以原相機拍攝臉部清晰高畫質近照。。</p>
          <a href="https://webflow.com/templates/designers/conversionflow" target="_blank" class="cf-call-button _24px-bold w-inline-block">
            <div class="cf-gradient-span">Learn More</div>
            <div class="cf-call-arrow-contain cf-gradient"><img src="https://uploads-ssl.webflow.com/64c3f1a50a737c6a48e2cd14/undefined_Arrow%20-%20Right%20(4).svg" loading="lazy" alt="" class="cf-call-arrow"><img src="https://uploads-ssl.webflow.com/64c3f1a50a737c6a48e2cd14/undefined_Arrow%20-%20Right%20(4).svg" loading="lazy" alt="" class="cf-call-arrow-down gradient"></div>
          </a>
        </div>
        <div class="cf-services-right-contain"><img src="{{ asset('assets/images/photography-projects-1001.webp') }}" loading="lazy" height="" srcset="{{ asset('assets/images/photography-projects-1001-p-500.webp 500w') }}, {{ asset('assets/images/photography-projects-1001-p-800.webp 800w') }}, {{ asset('assets/images/photography-projects-1001-p-1080.webp 1080w') }}, {{ asset('assets/images/photography-projects-1001.webp 1500w') }}" sizes="(max-width: 479px) 300px, (max-width: 991px) 65vw, (max-width: 1279px) 43vw, 499.9875183105469px" alt="" class="cf-services-image"></div>
      </div>
    </div>
  </div>
  <div class="cf-cta-section">
    <div data-w-id="0f12e2ed-ff20-f733-c8fd-e4bd7f469e15" class="cf-cta-form-wrapper">
      <div id="services-1" class="cf-services-page-contain-2 reverse">
        <div class="cf-services-left-contain">
          <div class="div-block-10">
            <h2 class="cf-services-h2-heading">looks_two</h2>
            <h3 class="heading-5">掃描皮膚並進行分析</h3>
          </div>
          <p class="cf-services-paragraph">透過系統獨有的AI智能科技，擷取您臉部照片進行精密分析</p>
          <a href="https://webflow.com/templates/designers/conversionflow" target="_blank" class="cf-call-button _24px-bold w-inline-block">
            <div class="cf-gradient-span">Learn More</div>
            <div class="cf-call-arrow-contain cf-gradient"><img src="https://uploads-ssl.webflow.com/64c3f1a50a737c6a48e2cd14/undefined_Arrow%20-%20Right%20(4).svg" loading="lazy" alt="" class="cf-call-arrow"><img src="https://uploads-ssl.webflow.com/64c3f1a50a737c6a48e2cd14/undefined_Arrow%20-%20Right%20(4).svg" loading="lazy" alt="" class="cf-call-arrow-down gradient"></div>
          </a>
        </div>
        <div class="cf-services-right-contain"><img src="{{ asset('assets/images/2.png') }}" loading="lazy" sizes="(max-width: 479px) 90vw, (max-width: 991px) 65vw, (max-width: 1279px) 43vw, 499.9875183105469px" srcset="{{ asset('assets/images/2-p-500.png 500w, images/2.png 553w') }}" alt="" class="cf-services-image"></div>
      </div>
    </div>
  </div>
  <div class="cf-cta-section">
    <div data-w-id="25b0c05b-e3ec-9ac5-9463-37667497e104" style="opacity:0" class="cf-cta-form-wrapper">
      <div id="services-1" class="cf-services-page-contain-2">
        <div class="cf-services-left-contain">
          <div class="div-block-10">
            <h2 class="cf-services-h2-heading">looks_3</h2>
            <h3 class="heading-5">獲得您的檢測結果</h3>
          </div>
          <p class="cf-services-paragraph">揭曉當下肌膚狀況，發掘臉部健康區域與容易忽略的保養死角</p>
          <a href="https://webflow.com/templates/designers/conversionflow" target="_blank" class="cf-call-button _24px-bold w-inline-block">
            <div class="cf-gradient-span">Learn More</div>
            <div class="cf-call-arrow-contain cf-gradient"><img src="https://uploads-ssl.webflow.com/64c3f1a50a737c6a48e2cd14/undefined_Arrow%20-%20Right%20(4).svg" loading="lazy" alt="" class="cf-call-arrow"><img src="https://uploads-ssl.webflow.com/64c3f1a50a737c6a48e2cd14/undefined_Arrow%20-%20Right%20(4).svg" loading="lazy" alt="" class="cf-call-arrow-down gradient"></div>
          </a>
        </div>
        <div class="cf-services-right-contain"><img src="{{ asset('assets/images/3.png') }}" loading="lazy" sizes="(max-width: 479px) 90vw, (max-width: 991px) 65vw, (max-width: 1279px) 43vw, 499.9750061035156px" srcset="{{ asset('assets/images/3-p-500.png 500w') }}, {{ asset('assets/images/3.png 612w') }}" alt="" class="cf-services-image"></div>
      </div>
    </div>
  </div>
  <div class="cf-cta-section-copy4">
    <div data-w-id="8d990192-2980-8447-2166-cf1fbf6bd2af" class="cf-cta-form-wrapper">
      <div id="services-1" class="cf-services-page-contain-2 reverse">
        <div class="cf-services-left-contain">
          <div class="div-block-10">
            <h2 class="cf-services-h2-heading">looks_4</h2>
            <h3 class="heading-5">深入了解肌膚隱憂</h3>
          </div>
          <p class="cf-services-paragraph">藉由系統的圖文解說，了解肌膚問題的形成原因，以及潛藏的隱憂</p>
          <a href="https://webflow.com/templates/designers/conversionflow" target="_blank" class="cf-call-button _24px-bold w-inline-block">
            <div class="cf-gradient-span">Learn More</div>
            <div class="cf-call-arrow-contain cf-gradient"><img src="https://uploads-ssl.webflow.com/64c3f1a50a737c6a48e2cd14/undefined_Arrow%20-%20Right%20(4).svg" loading="lazy" alt="" class="cf-call-arrow"><img src="https://uploads-ssl.webflow.com/64c3f1a50a737c6a48e2cd14/undefined_Arrow%20-%20Right%20(4).svg" loading="lazy" alt="" class="cf-call-arrow-down gradient"></div>
          </a>
        </div>
        <div class="cf-services-right-contain"><img src="{{ asset('assets/images/4.png') }}" loading="lazy" sizes="(max-width: 479px) 90vw, (max-width: 991px) 65vw, (max-width: 1279px) 48vw, 499.9875183105469px" srcset="{{ asset('assets/images/4-p-500.png 500w') }}, {{ asset('assets/images/4.png 612w') }}" alt="" class="cf-services-image"></div>
      </div>
    </div>
  </div>
  <div class="cf-cta-section">
    <div data-w-id="897e5efb-9ea2-3883-7c20-daa215b0c80a" style="opacity:0" class="cf-cta-form-wrapper">
      <div id="services-1" class="cf-services-page-contain-2">
        <div class="cf-services-left-contain">
          <div class="div-block-10">
            <h2 class="cf-services-h2-heading">looks_5</h2>
            <h3 class="heading-5">提供專屬您的保養品使用意見</h3>
          </div>
          <p class="cf-services-paragraph">根據您的檢測結果，系統將提供客製化的保養建議</p>
          <a href="https://webflow.com/templates/designers/conversionflow" target="_blank" class="cf-call-button _24px-bold w-inline-block">
            <div class="cf-gradient-span">Learn More</div>
            <div class="cf-call-arrow-contain cf-gradient"><img src="https://uploads-ssl.webflow.com/64c3f1a50a737c6a48e2cd14/undefined_Arrow%20-%20Right%20(4).svg" loading="lazy" alt="" class="cf-call-arrow"><img src="https://uploads-ssl.webflow.com/64c3f1a50a737c6a48e2cd14/undefined_Arrow%20-%20Right%20(4).svg" loading="lazy" alt="" class="cf-call-arrow-down gradient"></div>
          </a>
        </div>
        <div class="cf-services-right-contain"><img src="{{ asset('assets/images/5.png') }}" loading="lazy" alt="" class="cf-services-image"></div>
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
          <a href="#" class="w-inline-block"><img src="{{ asset('assets/images/dribbble.svg') }}" loading="lazy" alt="" class="waves-icon-33"></a>
          <a href="#" class="w-inline-block"><img src="{{ asset('assets/images/telegram.svg') }}" loading="lazy" alt="" class="waves-icon-33"></a>
          <a href="#" class="w-inline-block"><img src="{{ asset('assets/images/instagram.svg') }}" loading="lazy" alt="" class="waves-icon-33"></a>
          <a href="#" class="w-inline-block"><img src="{{ asset('assets/images/google-circle.svg') }}" loading="lazy" alt="" class="waves-icon-33"></a>
          <a href="#" class="w-inline-block"><img src="{{ asset('assets/images/youtube.svg') }}" loading="lazy" alt="" class="waves-icon-33"></a>
        </div>
      </div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=64c3f1a50a737c6a48e2cd14" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="{{ asset('assets/js/webflow.js') }}" type="text/javascript"></script>
</body>
</html>