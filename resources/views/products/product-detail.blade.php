<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Mon Aug 07 2023 12:27:02 GMT+0000 (Coordinated Universal Time)  -->
@extends('layouts.navbar')
<html data-wf-page="64cc5573602be14b9be527bc" data-wf-site="64c3f1a50a737c6a48e2cd14">
<head>
  <meta charset="utf-8">
  <title>{{ $data['product']->name }}</title>
  <meta content="Product_detail" property="og:title">
  <meta content="Product_detail" property="twitter:title">
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

  <div class="div-block-5">
    <div class="brix---section-pd-bottom-56px">
      <div class="brix---container-default-2 w-container">
        <div class="w-layout-grid grid-2">
          <div id="w-node-_2123712b-5a71-9332-bee7-cee6643367a1-9be527bc" class="w-layout-grid grid-3">
            <a href="#" class="lightbox-link w-inline-block w-lightbox"><img srcset="{{ $data['product']->image_url }}, {{ $data['product']->image_url }}, {{ $data['product']->image_url }}, {{ $data['product']->image_url }}" src="{{ $data['product']->image_url }}" sizes="(max-width: 479px) 100vw, (max-width: 767px) 98vw, (max-width: 991px) 87vw, (max-width: 1439px) 44vw, (max-width: 1919px) 47vw, 49vw" alt="Blog - Elements Webflow Library - BRIX Templates" class="brix---blog-card-image-featured">
              <script type="application/json" class="w-json">{
  "items": [],
  "group": ""
}</script>
            </a>
            <div class="columns w-row">
              <div class="w-col w-col-4">
                <a href="#" class="lightbox-link w-inline-block w-lightbox"><img srcset="{{ $data['product']->image_url }}, {{ $data['product']->image_url }}, {{ $data['product']->image_url }}, {{ $data['product']->image_url }}" id="picture" sizes="(max-width: 479px) 51vw, (max-width: 767px) 28vw, (max-width: 991px) 27vw, (max-width: 1439px) 13vw, (max-width: 1919px) 15vw, 16vw" src="assets/images/02-blog-images-elements-brix-templates.jpg" alt="Blog - Elements Webflow Library - BRIX Templates" class="brix---blog-card-image-featured">
                  <script type="application/json" class="w-json">{
  "items": [
    {
      "_id": "example_img",
      "origFileName": "04-blog-images-elements-brix-templates.jpg",
      "fileName": "04-blog-images-elements-brix-templates.jpg",
      "fileSize": 124323,
      "height": 984,
      "url": "{{ $data['product']->image_url }}",
      "width": 1758,
      "type": "image"
    },
    {
      "_id": "example_img",
      "origFileName": "05-blog-images-elements-brix-templates.jpg",
      "fileName": "05-blog-images-elements-brix-templates.jpg",
      "fileSize": 110473,
      "height": 984,
      "url": "{{ $data['product']->image_url }}",
      "width": 1758,
      "type": "image"
    },
    {
      "_id": "example_img",
      "origFileName": "01-blog-images-elements-brix-templates.jpg",
      "fileName": "01-blog-images-elements-brix-templates.jpg",
      "fileSize": 116075,
      "height": 984,
      "url": "{{ $data['product']->image_url }}",
      "width": 1758,
      "type": "image"
    },
    {
      "_id": "example_img",
      "origFileName": "05-blog-images-elements-brix-templates.jpg",
      "fileName": "05-blog-images-elements-brix-templates.jpg",
      "fileSize": 110473,
      "height": 984,
      "url": "{{ $data['product']->image_url }}",
      "width": 1758,
      "type": "image"
    }
  ],
  "group": "picture"
}</script>
                </a>
              </div>
              <div class="w-col w-col-4">
                <a href="#" class="lightbox-link w-inline-block w-lightbox"><img srcset="{{ $data['product']->image_url }}, {{ $data['product']->image_url }}, {{ $data['product']->image_url }}, {{ $data['product']->image_url }}" id="picture" sizes="(max-width: 479px) 51vw, (max-width: 767px) 28vw, (max-width: 991px) 27vw, (max-width: 1439px) 13vw, (max-width: 1919px) 15vw, 16vw" src="images/02-blog-images-elements-brix-templates.jpg" alt="Blog - Elements Webflow Library - BRIX Templates" class="brix---blog-card-image-featured">
                  <script type="application/json" class="w-json">{
  "items": [],
  "group": "picture"
}</script>
                </a>
              </div>
              <div class="w-col w-col-4">
                <a href="#" class="lightbox-link w-inline-block w-lightbox"><img srcset="{{ $data['product']->image_url }}, {{ $data['product']->image_url }}, {{ $data['product']->image_url }}, {{ $data['product']->image_url }}" id="picture" sizes="(max-width: 479px) 51vw, (max-width: 767px) 28vw, (max-width: 991px) 27vw, (max-width: 1439px) 13vw, (max-width: 1919px) 15vw, 16vw" src="images/02-blog-images-elements-brix-templates.jpg" alt="Blog - Elements Webflow Library - BRIX Templates" class="brix---blog-card-image-featured">
                  <script type="application/json" class="w-json">{
  "items": [],
  "group": "picture"
}</script>
                </a>
              </div>
            </div>
          </div>
          <div id="w-node-_3ffd1ac0-85be-253c-d63c-f6e903ae0f98-9be527bc" class="brix---blog-card-featured-content">
            <div class="brix---mg-bottom-8px">
              <div class="brix---color-neutral-807">
                <h2 class="brix---heading-h2-size-2">{{ $data['product']->name }}</h2>
              </div>
            </div>
            <div class="brix---mg-bottom-32px">
              <div class="brix---color-neutral-804">
                <p class="brix---paragraph-default-2">{{ $data['product']->intro }}</p>
              </div>
            </div>
            <div class="product_price_tag">
              <div class="brix---icon-arrow">
                <div class="text-block-7">attach_money</div>
              </div>
              <div class="number">{{ $data['product']->price }}</div>
            </div>
            <div data-w-id="44436d37-c58c-37cc-8109-ab764efcc8c4" class="favorite-button">favorite</div>
            <div class="div-block-6">
              <a href="#" class="link-block w-inline-block">
                <div class="brix---link-wrapper-color-primary-2-copy">
                  <div class="brix---text-200-bold-2-copy">Read more</div>
                  <div class="brix---icon-arrow">
                    <div class="arrow">arrow_forward</div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="brix---section-small">
    <div class="brix---container-default-2 w-container">
      <div data-w-id="eb709af1-e72b-d2f2-2b51-512266f378ee" style="-webkit-transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="w-layout-grid brix---grid-title-and-categories">
        <div id="w-node-eb709af1-e72b-d2f2-2b51-512266f378ef-9be527bc" class="brix---color-neutral-806">
          <h2 class="brix---heading-h2-size-2">Others</h2>
        </div>
        <div id="w-node-eb709af1-e72b-d2f2-2b51-512266f378f2-9be527bc" class="brix---categories-badges-wrapper">
          <div class="brix---categories-badges-item-wrapper">
            <a href="#" class="brix---badge-secondary-category-badges w-inline-block">
              <div>Male</div>
            </a>
          </div>
          <div class="brix---categories-badges-item-wrapper">
            <a href="#" class="brix---badge-secondary-category-badges w-inline-block">
              <div>Female</div>
            </a>
          </div>
          <div class="brix---categories-badges-item-wrapper">
            <a href="#" class="brix---badge-secondary-category-badges w-inline-block">
              <div>Kid</div>
            </a>
          </div>
          <div class="brix---categories-badges-item-wrapper">
            <a href="#" class="brix---badge-secondary-category-badges w-inline-block">
              <div>Random Goods</div>
            </a>
          </div>
        </div>
      </div>
      <div data-w-id="eb709af1-e72b-d2f2-2b51-512266f37903" style="-webkit-transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0">
        <div class="w-layout-grid brix---grid-3-columns-gap-row-72px">
          <!-- 其他產品推薦 -->
          @foreach($data['others'] as $other)
          <a data-w-id="eb709af1-e72b-d2f2-2b51-512266f37905" href="/product-detail/{{ $other->name }}/{{ $other->id }}" class="brix---blog-card-wrapper w-inline-block">
            <div class="brix---mg-bottom-32px">
              <div class="brix---blog-card-image-wrapper"><img srcset="{{ $other->image_url }}, {{ $other->image_url }}, {{ $other->image_url }}, {{ $other->image_url }}" src="{{ $other->image_url }}" sizes="(max-width: 767px) 79vw, (max-width: 991px) 42vw, (max-width: 1439px) 294.6625061035156px, 31vw" alt="Blog - Elements Webflow Library - BRIX Templates" class="brix---blog-card-image"></div>
            </div>
            <div>
              <div class="brix---mg-bottom-24px-2">
                <div class="brix---flex-horizontal-start">
                  <div class="brix---mg-right-16px">
                    <div class="brix---badge-primary-small-light">Random Goods</div>
                  </div>
                </div>
              </div>
              <div class="brix---color-neutral-806">
                <h3 class="brix---heading-h3-size-2">{{ $other->name }}</h3>
              </div>
              <div class="brix---color-neutral-804">
                <p class="brix---paragraph-default-2">{{ $other->intro }}</p>
              </div>
            </div>
          </a>
          @endforeach
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
  <!-- CSRF TOKEN -->
  <form>
    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
  </form>

  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=64c3f1a50a737c6a48e2cd14" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="{{ asset('assets/js/webflow.js') }}" type="text/javascript"></script>

  <script>
    const favoriteBtn = document.querySelector('.favorite-button');
    var url = document.URL;
    var url_split = url.split('/');

    var prod_id = url_split[5];
    
    
    favoriteBtn.addEventListener('click', function(e){
      /**按讚 */

      var currentColor = favoriteBtn.style.backgroundColor.toLowerCase();

      if(currentColor === 'rgb(19, 19, 19)'){
        favoriteBtn.style.backgroundColor = 'rgb(255, 255, 255)';
      }else{
        favoriteBtn.style.backgroundColor = 'rgb(19, 19, 19)';
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
          console.log(error);
        });
    });


    /**取得按讚資料 */
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
          
          if(data[prod_id]){
            favoriteBtn.style.background = 'rgb(19, 19, 19)';
          }
          
        })
        .catch(error =>{
          
        });

        

  
  </script>


</body>
</html>