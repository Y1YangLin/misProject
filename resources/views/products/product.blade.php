<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Mon Aug 07 2023 12:27:02 GMT+0000 (Coordinated Universal Time)  -->
@extends('layouts.navbar')
<html data-wf-page="64c7c06a322ef8c157444ce1" data-wf-site="64c3f1a50a737c6a48e2cd14">
<head>
  <meta charset="utf-8">
  <title>產品頁面</title>
  <meta content="dialog box" property="og:title">
  <meta content="dialog box" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="{{ asset('assets/css/normalize.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/css/webflow.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/css/waves-library-site-e37884.webflow.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Oswald:200,300,400,500,600,700"]  }});</script>
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="{{ asset('assets/images/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">
  <link href="{{ asset('assets/images/webclip.png') }}" rel="apple-touch-icon">
</head>
<body>

  @section('content')
  @endsection

  <section class="section-2">
    <div data-w-id="dd7f5726-41d7-90ca-3be0-44c2186494e4" style="-webkit-transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="brix---inner-container-640px---center">
      <div class="brix---text-center">
        <div class="brix---color-neutral-803">
          <h1 class="brix---heading-h1-size">Tailored Just for You !</h1>
        </div>
        <div class="brix---mg-bottom-40px">
          <div class="brix---color-neutral-600">
            <p class="brix---paragraph-default">
              @if (Auth::check())
                {{ Auth::user()->name . "歡迎 ! 這裡是專屬於您的產品頁面"}}
              @else
                歡迎來到資生堂產品頁面，趕緊的註冊以享有優先推薦喔 !
              @endif
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="w-layout-grid grid">
      <div data-w-id="635587f5-bcae-5ce0-c442-c8592c4de4a7" style="-webkit-transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="div-block-4">
        <div data-w-id="218b75c4-c550-4c23-3979-740d98b78fc1" style="-webkit-transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" data-current="BRIX - Mobile App" data-easing="ease" data-duration-in="300" data-duration-out="100" class="brix---tabs-wrapper-tabs-left w-tabs">
          <div class="brix---tabs-menu-vertical w-tab-menu">
            <a id="tab1" data-w-tab="BRIX - Mobile App" class="brix---tab-left-icon w-inline-block w-tab-link w--current">
              <div class="left_bar_icon">male</div>
              <div class="brix---mg-left-16px">
                <div>男士愛用</div>
              </div>
            </a>
            <a id="tab2" data-w-tab="BRIX - Desktop App" class="brix---tab-left-icon w-inline-block w-tab-link">
              <div class="left_bar_icon">female</div>
              <div class="brix---mg-left-16px">
                <div>女人最愛</div>
              </div>
            </a>
            <a id="tab3" data-w-tab="BRIX - Multiple Users" class="brix---tab-left-icon w-inline-block w-tab-link">
              <div class="left_bar_icon">child_care</div>
              <div class="brix---mg-left-16px">
                <div>孩童護理</div>
              </div>
            </a>
            @if(Auth::check())
            <a id="tab4" data-w-tab="BRIX - Integrations" class="brix---tab-left-icon w-inline-block w-tab-link">
              <div class="left_bar_icon">recommend</div>
              <div class="brix---mg-left-16px">
                <div class="text-block-6">給您的推薦</div>
              </div>
            </a>
            @endif
          </div>
        </div>


        <div class="w-form">
          <form id="email-form" name="email-form" data-name="Email Form" method="get" data-wf-page-id="64c7c06a322ef8c157444ce1" data-wf-element-id="92b5fc8e-07dd-d623-9c19-a05a2ee7e807">
            <div class="fs_rangeslider-2_component">
              <div class="fs_rangeslider-2_embed w-embed w-script">
                <!--  [Finsweet Attributes] Range Slider  -->
                <script>(()=>{var t="https://cdn.jsdelivr.net/npm/@finsweet/attributes-rangeslider@1/rangeslider.js",e=document.querySelector(`script[src="${t}"]`);e||(e=document.createElement("script"),e.async=!0,e.src=t,document.head.append(e));})();</script>
              </div>
              <div fs-rangeslider-formatdisplay="true" fs-rangeslider-element="wrapper" fs-rangeslider-min="0" fs-rangeslider-max="5000" class="fs_rangeslider-2_wrapper">
                <div fs-rangeslider-element="track" class="fs_rangeslider-2_track">
                  <div aria-label="minimum price" fs-rangeslider-element="handle" class="fs_rangeslider-2_left"></div>
                  <div aria-label="maximum price" fs-rangeslider-element="handle" class="fs_rangeslider-2_handle-right"></div>
                  <div fs-rangeslider-element="fill" class="fs_rangeslider-2_fill"></div>
                </div><input type="text" class="fs_rangeslider-2_input w-input" maxlength="256" name="From" fs-cmsfilter-field="price" data-name="From" fs-cmsfilter-range="from" placeholder="From" id="From-2"><input type="text" class="fs_rangeslider-2_input w-input" maxlength="256" name="To" fs-cmsfilter-field="price" data-name="To" fs-cmsfilter-range="to" placeholder="To" id="To-2">
                <div class="fs_rangeslider-2_values">
                  <div class="fs_rangeslider-2_handle-text">$<span fs-rangeslider-element="display-value" class="fs_rangeslider-2_handle-value">0</span></div>
                  <div class="fs_rangeslider-2_handle-text">$<span fs-rangeslider-element="display-value" class="fs_rangeslider-2_handle-value">0</span></div>
                </div>
              </div>
            </div>
          </form>
          <div class="w-form-done"></div>
          <div class="w-form-fail"></div>
        </div>
        <a href="#" class="search-left-button w-button">Search</a>
      </div>

      <!-- 產品容器 -->
      <div class="brix---container-default w-container">
        <div data-w-id="dd7f5726-41d7-90ca-3be0-44c2186494f0" style="-webkit-transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="w-layout-grid brix---grid-3-columns">
          <!-- 男士愛用 -->
          @foreach ($products['male'] as $male)
          <div id="w-node-_474d1e66-e039-88c2-5ff8-f7af6d82ff4f-57444ce1" class="div-block-8 brix---product-card-wrapper-v1" data-product-category="BRIX - Mobile App">
            <a data-w-id="dd7f5726-41d7-90ca-3be0-44c2186494f1" href="/product-detail/{{ $male->name }}/{{ $male->id }}" class="brix---product-card-wrapper-v1 w-inline-block">
              <div class="brix---product-card-image-inside-card"><img srcset="{{$male->image_url}}, {{$male->image_url}}" src="{{$male->image_url}}" sizes="(max-width: 767px) 99vw, (max-width: 991px) 50vw, (max-width: 1439px) 33vw, (max-width: 1919px) 406.6974792480469px, 21vw" alt="糟了 圖片睡著了zzz" class="brix---product-card-image-2" width="409.5px" height="409.5">
                <div class="brix---badge-wrapper-top-right">
                  <div class="brix---badge-secondary-small-bold">{{ "$" . $male->price }}</div>
                </div>
              </div>
            </a>
            <div class="brix---product-card-content">
              <a data-w-id="664de3d5-a0d8-b4e3-93fc-45c01e33e96f" href="/product-detail/{{ $male->name }}/{{ $male->id }}" class="brix---copy w-inline-block">
                <div class="brix---mg-bottom-16px">
                  <div class="brix---color-neutral-803">
                    <h3 class="brix---heading-h4-size">{{ $male->name }}</h3>
                  </div>
                </div>
              </a>
              <div class="brix---mg-bottom-24px">
                <div class="brix---color-neutral-600">
                  <p class="brix---paragraph-default">男士產品介紹</p>
                </div>
              </div>
              <div data-w-id="dd7f5726-41d7-90ca-3be0-44c218649500" class="favorite-button">favorite</div>
            </div>
          </div>
          @endforeach
          

          <!-- 女人最愛 -->
          @foreach ($products['female'] as $female)
          <div id="w-node-_474d1e66-e039-88c2-5ff8-f7af6d82ff4f-57444ce1" class="div-block-8 brix---product-card-wrapper-v1" data-product-category="BRIX - Desktop App">
            <a data-w-id="dd7f5726-41d7-90ca-3be0-44c2186494f1" href="/product-detail/{{ $female->name }}/{{ $female->id }}" class="brix---product-card-wrapper-v1 w-inline-block">
              <div class="brix---product-card-image-inside-card"><img srcset="{{ $female->image_url }}, {{ $female->image_url }}" src="{{ $female->image_url }}" sizes="(max-width: 767px) 99vw, (max-width: 991px) 50vw, (max-width: 1439px) 33vw, (max-width: 1919px) 406.6974792480469px, 21vw" alt="糟了 圖片睡著了zzz" class="brix---product-card-image-2" width="409.5px" height="409.5">
                <div class="brix---badge-wrapper-top-right">
                  <div class="brix---badge-secondary-small-bold">{{ "$" . $female->price }}</div>
                </div>
              </div>
            </a>
            <div class="brix---product-card-content">
              <a data-w-id="664de3d5-a0d8-b4e3-93fc-45c01e33e96f" href="/product-detail/{{ $female->name }}/{{ $female->id }}" class="brix---copy w-inline-block">
                <div class="brix---mg-bottom-16px">
                  <div class="brix---color-neutral-803">
                    <h3 class="brix---heading-h4-size">{{ $female->name }}</h3>
                  </div>
                </div>
              </a>
              <div class="brix---mg-bottom-24px">
                <div class="brix---color-neutral-600">
                  <p class="brix---paragraph-default">女人產品介紹</p>
                </div>
              </div>
              <div data-w-id="dd7f5726-41d7-90ca-3be0-44c218649500" class="favorite-button">favorite</div>
            </div>
          </div>
          @endforeach

          <!-- 孩童護理 -->
          @foreach ($products['kid'] as $kid)
          <div id="w-node-_474d1e66-e039-88c2-5ff8-f7af6d82ff4f-57444ce1" class="div-block-8 brix---product-card-wrapper-v1" data-product-category="BRIX - Multiple Users">
            <a data-w-id="dd7f5726-41d7-90ca-3be0-44c2186494f1" href="/product-detail/{{ $kid->name }}/{{ $kid->id }}" class="brix---product-card-wrapper-v1 w-inline-block">
              <div class="brix---product-card-image-inside-card"><img srcset="{{ $kid->image_url }}, {{ $kid->image_url }}" src="{{ $kid->image_url }}" sizes="(max-width: 767px) 99vw, (max-width: 991px) 50vw, (max-width: 1439px) 33vw, (max-width: 1919px) 406.6974792480469px, 21vw" alt="糟了 圖片睡著了zzz" class="brix---product-card-image-2" width="409.5px" height="409.5">
                <div class="brix---badge-wrapper-top-right">
                  <div class="brix---badge-secondary-small-bold">{{ "$" . $kid->price }}</div>
                </div>
              </div>
            </a>
            <div class="brix---product-card-content">
              <a data-w-id="664de3d5-a0d8-b4e3-93fc-45c01e33e96f" href="/product-detail/{{ $kid->name }}/{{ $kid->id }}" class="brix---copy w-inline-block">
                <div class="brix---mg-bottom-16px">
                  <div class="brix---color-neutral-803">
                    <h3 class="brix---heading-h4-size">{{ $kid->name }}</h3>
                  </div>
                </div>
              </a>
              <div class="brix---mg-bottom-24px">
                <div class="brix---color-neutral-600">
                  <p class="brix---paragraph-default">孩童產品介紹</p>
                </div>
              </div>
              <div data-w-id="dd7f5726-41d7-90ca-3be0-44c218649500" class="favorite-button">favorite</div>
            </div>
          </div>
          @endforeach

          <!-- 推薦 -->
          @foreach ($products['recom'] as $recom)
          <div id="w-node-_474d1e66-e039-88c2-5ff8-f7af6d82ff4f-57444ce1" class="div-block-8 brix---product-card-wrapper-v1" data-product-category="BRIX - Integrations">
            <a data-w-id="dd7f5726-41d7-90ca-3be0-44c2186494f1" href="/product-detail/{{ $recom->name }}/{{ $recom->id }}" class="brix---product-card-wrapper-v1 w-inline-block">
              <div class="brix---product-card-image-inside-card"><img srcset="{{ $recom->image_url }}, {{ $recom->image_url }}" src="{{ $recom->image_url }}" sizes="(max-width: 767px) 99vw, (max-width: 991px) 50vw, (max-width: 1439px) 33vw, (max-width: 1919px) 406.6974792480469px, 21vw" alt="糟了 圖片睡著了zzz" class="brix---product-card-image-2" width="409.5px" height="409.5">
                <div class="brix---badge-wrapper-top-right">
                  <div class="brix---badge-secondary-small-bold">{{ "$" . $recom->price }}</div>
                </div>
              </div>
            </a>
            <div class="brix---product-card-content">
              <a data-w-id="664de3d5-a0d8-b4e3-93fc-45c01e33e96f" href="/product-detail/{{ $recom->name }}/{{ $recom->id }}" class="brix---copy w-inline-block">
                <div class="brix---mg-bottom-16px">
                  <div class="brix---color-neutral-803">
                    <h3 class="brix---heading-h4-size">{{ $recom->name }}</h3>
                  </div>
                </div>
              </a>
              <div class="brix---mg-bottom-24px">
                <div class="brix---color-neutral-600">
                  <p class="brix---paragraph-default">推薦產品介紹</p>
                </div>
              </div>
              <div data-w-id="dd7f5726-41d7-90ca-3be0-44c218649500" class="favorite-button">favorite</div>
            </div>
          </div>
          @endforeach
          <!-- 四個產品卡結束 -->

          <!-- CSRF TOKEN -->
          <form>
            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
          </form>

        </div>
        <div class="div-block-3">
          <a href="#" id="page1" class="product_page_button w-button" data-page="1">1</a>
          <a href="#" id="page2" class="product_page_button w-button" data-page="2">2</a>
          <a href="#" id="page3" class="product_page_button w-button" data-page="3">3</a>
          <a href="#" id="more" class="product_page_button w-button">..</a>
        </div>
      </div>
    </div>
  </section>
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
  <script id="webflow-js" src="assets/js/webflow.js" type="text/javascript"></script>

  <script type="text/javascript">
    const tabLinks = document.querySelectorAll('.w-tab-link');
    const productCards = document.querySelectorAll('#w-node-_474d1e66-e039-88c2-5ff8-f7af6d82ff4f-57444ce1.brix---product-card-wrapper-v1');
    const pageButtons = document.querySelectorAll('.product_page_button');
    const allProdCards = document.querySelectorAll('.div-block-8');
    const tabsBoolean = [0,0,0,0]
    

    tabLinks.forEach(tabLink => {
    tabLink.addEventListener('click', function(e) {
      for(var i = 0; i < 4; i++){
        tabsBoolean[i] = 0;
        
      }
      tabsBoolean[e.target.id[3] - 1] = 1;

      const selectedTab = this.getAttribute('data-w-tab');
      const categoryCounters = {};

      productCards.forEach(card => {
        const counter = 0;
        const cardCategory = card.getAttribute('data-product-category');
        
        if(card.nodeName != "A"){ //設定產品卡內的A元素 display不要隨著改變
          const shouldDisplay = cardCategory === selectedTab || selectedTab === 'all';
          
          if (shouldDisplay) {
            if (!categoryCounters.hasOwnProperty(cardCategory)) {
                categoryCounters[cardCategory] = 0;
            }
            
            if (categoryCounters[cardCategory] < 9) {
                categoryCounters[cardCategory]++;
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
          } else {
              card.style.display = 'none';
          }

          // card.style.display = shouldDisplay ? 'block' : 'none';
          
        }
        
        
          });
            
        });
    });

    //預先設定男士tablink被點擊
    tabLinks[0].click();

    // 換頁的js
    
    const prodLength = [0,0,0,0];

    allProdCards.forEach(card => { //計算四個種類分別有幾個cards
      
      switch(card.attributes['data-product-category'].nodeValue){
        case 'BRIX - Mobile App':
          
          prodLength[0] ++;
          break;
        case 'BRIX - Desktop App':
          prodLength[1]++;
          break;
        case 'BRIX - Multiple Users':
          prodLength[2]++;
          break;
        case 'BRIX - Integrations':
          prodLength[3]++;
          break;

        default:
          console.log('failed to catch prodCat...');
        }
    });

    const prodStart = [0, prodLength[0], prodLength[0] + prodLength[1], prodLength[0] + prodLength[1] + prodLength[2]];    
    
    pageButtons.forEach(pageButton => {
      pageButton.addEventListener('click', function(e){
        
        switch(e.target.id){
          
          case 'page1':  //每一頁都contain 9個內容
            
            for(var i = 0; i < allProdCards.length; i++){
              if(tabsBoolean[0]){
                if((i >= prodStart[0] && i <= prodStart[0] + 8) && i < prodStart[1]){
                  allProdCards[i].style.display = 'block';
                }else{
                  allProdCards[i].style.display = 'none';
                }
              }else if(tabsBoolean[1]){
                if((i >= prodStart[1] && i <= prodStart[1] + 8) && i < prodStart[2]){
                  allProdCards[i].style.display = 'block';
                }else{
                  allProdCards[i].style.display = 'none';
                }
              }else if(tabsBoolean[2]){
                if((i >= prodStart[2] && i <= prodStart[2] + 8) && i < prodStart[3]){
                  allProdCards[i].style.display = 'block';
                }else{
                  allProdCards[i].style.display = 'none';
                }
              }else{
                if(i >= prodStart[3] && i <= prodStart[3] + 8){
                  allProdCards[i].style.display = 'block';
                }else{
                  allProdCards[i].style.display = 'none';
                }
              }
            }
            break;

          case 'page2':
            for(var i = 0; i < allProdCards.length; i++){
              if(tabsBoolean[0]){
                if((i >= prodStart[0] + 9 && i <= prodStart[0] + 17) && i < prodStart[1]){
                  allProdCards[i].style.display = 'block';
                }else{
                  allProdCards[i].style.display = 'none';
                }
              }else if(tabsBoolean[1]){
                if((i >= prodStart[1] + 9 && i <= prodStart[1] + 17) && i < prodStart[2]){
                  allProdCards[i].style.display = 'block';
                }else{
                  allProdCards[i].style.display = 'none';
                }
              }else if(tabsBoolean[2]){
                if((i >= prodStart[2] + 9 && i <= prodStart[2] + 17) && i < prodStart[3]){
                  allProdCards[i].style.display = 'block';
                }else{
                  allProdCards[i].style.display = 'none';
                }
              }else{
                if(i >= prodStart[3] + 9 && i <= prodStart[3] + 17){
                  allProdCards[i].style.display = 'block';
                }else{
                  allProdCards[i].style.display = 'none';
                }
              }
            }
            break;

          case 'page3':  
            for(var i = 0; i < allProdCards.length; i++){
              if(tabsBoolean[0]){
                if((i >= prodStart[0] + 18 && i <= prodStart[0] + 26) && i < prodStart[1]){
                  allProdCards[i].style.display = 'block';
                }else{
                  allProdCards[i].style.display = 'none';
                }
              }else if(tabsBoolean[1]){
                if((i >= prodStart[1] + 18 && i <= prodStart[1] + 26) && i < prodStart[2]){
                  allProdCards[i].style.display = 'block';
                }else{
                  allProdCards[i].style.display = 'none';
                }
              }else if(tabsBoolean[2]){
                if((i >= prodStart[2] + 18 && i <= prodStart[2] + 26) && i < prodStart[3]){
                  allProdCards[i].style.display = 'block';
                }else{
                  allProdCards[i].style.display = 'none';
                }
              }else{
                if(i >= prodStart[3] + 18 && i <= prodStart[3] + 26){
                  allProdCards[i].style.display = 'block';
                }else{
                  allProdCards[i].style.display = 'none';
                }
              }
            }
            break;

          case 'more':  
            for(var i = 0; i < allProdCards.length; i++){
              if(tabsBoolean[0]){
                if(i >= prodStart[0] && i < prodStart[1]){
                  allProdCards[i].style.display = 'block';
                }else{
                  allProdCards[i].style.display = 'none';
                }
              }else if(tabsBoolean[1]){
                if(i >= prodStart[1] && i < prodStart[2]){
                  allProdCards[i].style.display = 'block';
                }else{
                  allProdCards[i].style.display = 'none';
                }
              }else if(tabsBoolean[2]){
                if(i >= prodStart[2] && i < prodStart[3]){
                  allProdCards[i].style.display = 'block';
                }else{
                  allProdCards[i].style.display = 'none';
                }
              }else{
                if(i >= prodStart[3]){
                  allProdCards[i].style.display = 'block';
                }else{
                  allProdCards[i].style.display = 'none';
                }
              }
            }

            break;

          default:
            console.log('show product cards failed');
          }
      });
    });
    
    pageButtons[0].click();

  </script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
    const aElements = document.querySelectorAll('.brix---product-card-wrapper-v1.w-inline-block[data-initially-visible="true"]');
    
    aElements.forEach(aElement => {
        aElement.style.display = 'block';
    });
});
  </script>

  <!-- 點擊愛心 -->
  <script>
    const prodDivs = document.querySelectorAll('.div-block-8.brix---product-card-wrapper-v1');
    let href, href_split, id;
    
    fetch('/get_ratings', {
          method: 'GET',
          headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'url': '/get_ratings',
          },
          
        })
        .then(response => response.json())
        .then(data =>{
          prodDivs.forEach(prodDiv =>{
            let href = prodDiv.children[0].href;
            href = href.split('/');
            let prodId = href[5];
            
            if(data[prodId]){
              let favoriteBtn = prodDiv.children[1].children[2];
              favoriteBtn.style.background = 'rgb(19, 19, 19)'; 
              
            }
            
          });
          
        })
        .catch(error =>{
          console.log(error);
        });


    const favoriteDivs = document.querySelectorAll(".favorite-button");
    let currentColor = null;
    favoriteDivs.forEach(favoriteDiv => {
      favoriteDiv.addEventListener('click', function(e){
        const parentElement = e.target.parentElement;
        const href = parentElement.getElementsByTagName('a')[0].href;
        const splits = href.split('/');
        const prod_id = splits[5];

        currentColor = favoriteDiv.style.backgroundColor.toLowerCase();

        if(currentColor === 'rgb(19, 19, 19)'){
          favoriteDiv.style.backgroundColor = 'rgb(255, 255, 255)';
        }else{
          favoriteDiv.style.backgroundColor = 'rgb(19, 19, 19)';
        }




        fetch('/pressLike', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'url': '/pressLike',
            'X-CSRF-Token': $("input[name='_token']").val()
          },
          body: JSON.stringify({
            prod_id
          })
        })
        .then(response => response.json())
        .then(data =>{
          
        })
        .catch(error =>{

        });

      });
      
      

    });
    
  </script>


</body>
</html>