<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
@extends('layouts.navbar')
<!--  Last Published: Wed Aug 23 2023 17:59:00 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="64e4ab7c6343f7e6f4e81452" data-wf-site="64c3f1a50a737c6a48e2cd14">
<head>
  <meta charset="utf-8">
  <title>Skin_analysis_after_login</title>
  <meta content="Skin_analysis_after_login" property="og:title">
  <meta content="Skin_analysis_after_login" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="{{ asset('assets/css/normalize.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/css/webflow.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/css/waves-library-site-e37884.webflow.css') }}" rel="stylesheet" type="text/css">
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

  <div class="cf-feature-tabs-section-2">
    <div class="cf-feature-tabs-wrapper-2">
      <div data-current="Upload" data-easing="ease" data-duration-in="300" data-duration-out="100" class="cf-tabs-2 w-tabs">
        <div class="cf-tabs-content-3 w-tab-content">
          <div data-w-tab="Tab 1" class="w-tab-pane"></div>
          <div data-w-tab="Upload" class="tab-pane-upload w-tab-pane w--tab-active">
            <div class="cf-flex-image-wrapper-2"><img loading="lazy" src="{{ asset('assets/images/Flex-Image.svg') }}" alt="" class="cf-tab-image-3"></div>
            <div class="div-block-11">
              <a data-w-id="04f2e76a-dccc-9280-a62a-e28bd82cf4ce" href="#" class="button-4 w-button">上傳照片</a>
            </div>
          </div>
          <div data-w-tab="Tab 2" class="w-tab-pane">
            <div class="columns-2 w-row">
              <div class="column-3 w-col w-col-7 w-col-stack">
                <div class="div-block-12">
                  <div class="cf-flex-image-wrapper-2"><img data-w-id="6eb61695-d860-adfa-2a4c-5bf5557a25be" loading="lazy" src="{{ asset('assets/images/Flex-Image.svg') }}" alt="" class="cf-tab-image-3"></div>
                  <div class="div-block-11">
                    <a data-w-id="63a08e8a-3653-50e4-c8dd-e22ba720edca" href="#" class="button-4 w-button">倒數拍照!</a>
                  </div>
                </div>
              </div>
              <div class="w-col w-col-5 w-col-stack">
                <div class="cf-feature-tabs-wrapper">
                  <div data-current="Tab 5" data-easing="ease" data-duration-in="300" data-duration-out="100" class="cf-tabs w-tabs">
                    <div class="cf-tabs-menu-2 w-tab-menu">
                      <a data-w-tab="Tab 1" class="cf-tab-link w-inline-block w-tab-link">
                        <div class="cf-tab-content">
                          <div class="cf-tab-heading-contain">
                            <div class="div-block-10">
                              <h2 class="cf-services-h2-heading cf-tab-icon">looks_one</h2>
                              <h3 class="heading-5 cf-tab-heading">選擇上傳照片或者開啟相機拍照</h3>
                              <div id="w-node-_6fe91bf3-47e3-e880-33ff-49d3f2fc8551-f4e81452"></div>
                              <div id="w-node-_8f7d68ee-adde-271d-4804-aad6df265e7a-f4e81452" class="cf-tab-paragraph-contain">
                                <p class="cf-18px-paragraph-dim-grey">進入膚質分析頁面，選擇要提供系統的照片，如果沒有，請在燈光充足的地方，以原相機拍攝臉部清晰高畫質近照。</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                      <a data-w-tab="Tab 2" class="cf-tab-link w-inline-block w-tab-link">
                        <div class="cf-tab-content">
                          <div class="cf-tab-heading-contain">
                            <div class="div-block-10">
                              <h2 class="cf-services-h2-heading cf-tab-icon">looks_two</h2>
                              <h3 class="heading-5">掃描皮膚並進行分析</h3>
                              <div id="w-node-_65d0b3d0-3eb1-d179-fa0f-f124c0fcf8d8-f4e81452"></div>
                              <div id="w-node-_65d0b3d0-3eb1-d179-fa0f-f124c0fcf8d9-f4e81452" class="cf-tab-paragraph-contain">
                                <p class="cf-18px-paragraph-dim-grey">透過系統獨有的AI智能科技，擷取您臉部照片進行精密分析</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                      <a data-w-tab="Tab 3" class="cf-tab-link w-inline-block w-tab-link">
                        <div class="cf-tab-content">
                          <div class="cf-tab-heading-contain">
                            <div class="div-block-10">
                              <div id="w-node-_8a460235-2fc6-b8d6-09af-d440d26a51a9-f4e81452">
                                <h2 class="cf-services-h2-heading cf-tab-icon">looks_3</h2>
                              </div>
                              <h3 class="heading-5">獲得您的檢測結果</h3>
                              <div id="w-node-_89afa52f-1397-c215-c7ea-988d11fb3d47-f4e81452"></div>
                              <div id="w-node-_8a460235-2fc6-b8d6-09af-d440d26a51aa-f4e81452" class="cf-tab-paragraph-contain">
                                <p class="cf-18px-paragraph-dim-grey">揭曉當下肌膚狀況，發掘臉部健康區域與容易忽略的保養死角</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                      <a data-w-tab="Tab 4" class="cf-tab-link w-inline-block w-tab-link">
                        <div class="cf-tab-content">
                          <div class="cf-tab-heading-contain">
                            <div class="div-block-10">
                              <div id="w-node-_424606c8-90fc-0209-4f7d-60b4f1b47b4f-f4e81452">
                                <h2 class="cf-services-h2-heading cf-tab-icon">looks_4</h2>
                              </div>
                              <h3 class="heading-5">深入了解肌膚隱憂</h3>
                              <div id="w-node-_46b17c64-2810-36a7-d443-c755cd6ea920-f4e81452"></div>
                              <div id="w-node-_424606c8-90fc-0209-4f7d-60b4f1b47b50-f4e81452" class="cf-tab-paragraph-contain">
                                <p class="cf-18px-paragraph-dim-grey">藉由系統的圖文解說，了解肌膚問題的形成原因，以及潛藏的隱憂</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                      <a data-w-tab="Tab 5" class="cf-tab-link w-inline-block w-tab-link w--current">
                        <div class="cf-tab-content">
                          <div class="cf-tab-heading-contain">
                            <div class="div-block-10">
                              <div id="w-node-_87ab09af-6daa-980b-9616-20c0dc589b1f-f4e81452">
                                <h2 class="cf-services-h2-heading cf-tab-icon">looks_5</h2>
                              </div>
                              <h3 class="heading-5">提供專屬您的保養品使用意見</h3>
                              <div id="w-node-_27ef96e6-8ea5-cef2-b1a6-44113db8402c-f4e81452"></div>
                              <div id="w-node-_87ab09af-6daa-980b-9616-20c0dc589b20-f4e81452" class="cf-tab-paragraph-contain">
                                <p class="cf-18px-paragraph-dim-grey">根據您的檢測結果，系統將提供客製化的保養建議</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="cf-tabs-menu-3 w-tab-menu">
          <a data-w-tab="Tab 1" data-w-id="818c2fc0-6421-0591-9567-8f87d8d8684e" class="cf-tab-link-2 w-inline-block w-tab-link">
            <h3 class="cf-tab-main-heading-2"><strong>Upload, or simply have a smile!</strong></h3>
            <p class="cf-18px-paragraph-dim-grey-2 _16px-margin">選擇您方便的方式上傳您的照片!</p>
          </a>
          <a id="2" data-w-tab="Upload" data-w-id="818c2fc0-6421-0591-9567-8f87d8d8685b" class="cf-tab-link-2-copy w-inline-block w-tab-link w--current">
            <div class="cf-tab-content-2">
              <div data-w-id="818c2fc0-6421-0591-9567-8f87d8d86854" class="cf-tab-heading-contain-2">
                <div data-w-id="b2fb57e1-7086-15d7-4b2a-e3c5f5bfe93c" class="cf-tab-icon2">upload_file</div>
                <h3 data-w-id="818c2fc0-6421-0591-9567-8f87d8d86856" class="cf-tab-heading-2">上傳照片</h3>
              </div>
              <div class="cf-tab-paragraph-contain-3">
                <p class="cf-18px-paragraph-dim-grey-2">請選擇您裝置內的清晰照片上傳</p>
              </div>
            </div>
          </a>
          <a data-w-tab="Tab 2" class="tab-link-tab-2 w-inline-block w-tab-link">
            <div class="cf-tab-content-2">
              <div data-w-id="818c2fc0-6421-0591-9567-8f87d8d8685d" class="cf-tab-heading-contain-2">
                <div class="cf-tab-icon2">photo_camera</div>
                <h3 class="cf-tab-heading-2">拍照</h3>
              </div>
              <div class="cf-tab-paragraph-contain-3">
                <p class="cf-18px-paragraph-dim-grey-2">打開相機，笑一個吧!</p>
              </div>
            </div>
          </a>
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