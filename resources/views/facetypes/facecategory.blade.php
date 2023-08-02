<!DOCTYPE html>
<html data-wf-page="64c3f1a50a737c6a48e2cd1a" data-wf-site="64c3f1a50a737c6a48e2cd14">

<head>
    <meta charset="utf-8">
    
    <title>膚質檢測頁面</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">

    <link rel="stylesheet" href="{{ asset('facetype_assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('facetype_assets/css/Hero-Carousel-images.css') }}">
    <link rel="stylesheet" href="{{ asset('facetype_assets/css/Navbar-Right-Links-Dark-icons.css') }}">
    <link href="{{ asset('index_assets/css/normalize.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('index_assets/css/webflow.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('index_assets/css/waves-library-site-e37884.webflow.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">WebFont.load({  google: {    families: ["Oswald:200,300,400,500,600,700"]  }});</script>
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
    <link href="index_assets/images/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="index_assets/images/webclip.png" rel="apple-touch-icon">
    
</head>

<body>
    <!-- <nav class="navbar navbar-expand-md bg-dark py-3" data-bs-theme="dark">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="/"><span>YOFU</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-5"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-5">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="/facetypes">膚況分析</a></li>
                    <li class="nav-item"><a class="nav-link" href="/products">產品推薦</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">會員中心</a></li>
                </ul><a class="btn btn-primary ms-md-2" role="button" href="/login">註冊&amp;登入</a>
            </div>
        </div>
    </nav> -->
    
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
    
    <section class="carousel">
        <div class="container-fluid" style="padding: 0px;">
            <div class="carousel slide" data-bs-ride="carousel" id="carousel-1" style="height: 600px;">
                <div class="carousel-inner h-100">
                    <div class="carousel-item active h-100"><img class="w-100 d-block position-absolute h-100 fit-cover" src="{{ asset('facetype_assets/img/banner4.jpg') }}" alt="Slide Image" style="z-index: -1;/*width: 800px;*/">
                        <div class="container d-flex flex-column justify-content-center h-100">
                            <div class="row">
                                <div class="col-md-6 col-xl-4 offset-md-2">
                                    <div style="max-width: 350px;">
                                        <h1 class="text-uppercase fw-bold" style="padding-right: 0px;margin-right: -137px;color: #000000;font-family: Mochiy Pop One;">YOFU肌膚檢測， 認識自己的膚質，挑選適合的產品。</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item h-100"><img class="w-100 d-block position-absolute h-100 fit-cover" src="facetype_assets/img/banner5.jpg
                    " alt="Slide Image" style="z-index: -1;">
                        <div class="container d-flex flex-column justify-content-center h-100" style="color: #000000;">
                            <div class="row">
                                <div class="col-md-6 col-xl-4 offset-md-2">
                                    <div style="max-width: 350px;">
                                        <h1 class="text-uppercase fw-bold" style="padding-right: 0px;margin-right: -134px;color: #000000;font-family: Mochiy Pop One;"><strong>YOFU肌膚檢測， 認識自己的膚質，挑選適合的產品。</strong></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item h-100"><img class="w-100 d-block position-absolute h-100 fit-cover" src="facetype_assets/img/banner6.jpg" alt="Slide Image" style="z-index: -1;">
                        <div class="container d-flex flex-column justify-content-center h-100">
                            <div class="row">
                                <div class="col-md-6 col-xl-4 offset-md-2">
                                    <div style="max-width: 350px;">
                                        <h1 class="text-uppercase fw-bold" style="margin-right: -135px;font-family: Mochiy Pop One;color: #000000;"><strong>YOFU肌膚檢測， 認識自己的膚質，挑選適合的產品。</strong></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
                <div class="carousel-indicators"><button type="button" data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></button> <button type="button" data-bs-target="#carousel-1" data-bs-slide-to="1"></button> <button type="button" data-bs-target="#carousel-1" data-bs-slide-to="2"></button></div>
            </div>
        </div>
    </section>
    <section class="d-xxl-flex justify-content-xxl-center align-items-xxl-center" style="background: #F5F4E0;height: 1200px;font-size: 16px;min-height: auto;">
        <div class="container d-xxl-flex justify-content-xxl-center">
            <div class="row g-0 d-xxl-flex justify-content-center align-items-center justify-content-xxl-center" style="height: 300px;">
                <div class="col-md-4 col-xxl-6 offset-xxl-0" style="background: var(--bs-body-bg);padding: 0px;padding-left: 0px;margin: 0px 50px;margin-left: 0px;width: 320px;height: 367.2px;"><img src="facetype_assets/img/clipboard-image-1.png" style="margin: -1px;width: 321px;height: auto;" width="244" height="136">
                    <h1 style="font-size: 18px;text-align: left;font-family: Inter;margin: 0px;padding-bottom: 0px;font-weight: bold;"><br><strong>獨家智能系統深度剖析肌膚現況與未來隱憂</strong><br><br></h1>
                    <p style="text-align: left;font-family: Inter;">採用品牌專利智能技術，輕鬆了解保養死角，讓您的保養日常事半功倍<br><br><br></p>
                </div>
                <div class="col-md-4" style="background: var(--bs-body-bg);width: 320px;padding: 0px;height: 367.2px;margin: 0px 50px;"><img src="facetype_assets/img/clipboard-image-2.png" style="width: 321px;margin: -1px;height: auto;" width="350" height="195">
                    <h1 style="font-size: 18px;text-align: center;font-weight: bold;"><br>量身打造專屬您的肌膚保養提案<br><br></h1>
                    <p style="text-align: center;font-family: Inter;">提供定期肌膚檢測服務與客製化保養建議，與您一同探索肌膚蛻變之旅<br><br></p>
                </div>
                <div class="col-md-4" style="background: #FFFFFF;width: 320px;padding: 0px;height: 367.2px;margin: 0px 50px;"><img src="facetype_assets/img/clipboard-image-3.png" style="width: 321px;margin: -1px;height: auto;">
                    <h1 style="font-size: 18px;text-align: center;font-weight: bold;"><br><strong>快速、方便的肌膚檢測體驗</strong><br><br></h1>
                    <p style="font-family: Inter;">透過獨特AI識別技術，協助您在無任何肌膚(臉部)接觸下五秒內就能快速了解肌膚現況，還可以由專屬美容AI顧問為您推薦適合的產品由專屬美容AI顧問為您推薦適合的產品<br><br></p>
                </div>
            </div>
        </div>
    </section>
    <section style="background: var(--bs-body-bg);">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="padding: 100px;">
                    <h1 style="font-size: 30px;font-weight: bold;font-family: Mochiy Pop One;color: var(--bs-body-color);">五個步驟挑選到適合的保養品</h1>
                </div>
            </div>
        </div>
        <div class="container" style="padding-bottom: 100px;">
            <div class="row">
                <div class="col-md-6 mx-auto"><img src="facetype_assets/img/photograph.png"></div>
                <div class="col-md-6 align-self-center mx-auto"><span style="font-size: 40px;"><br><strong><span style="color: rgb(255, 0, 0);">01</span></strong> <strong><span style="color: rgb(0, 0, 0);">選擇上傳照片或者開啟相機拍照</span></strong><br><br></span><span style="font-family: Hind;font-weight: bold;font-size: 22px;"><br>進入膚質分析頁面，選擇要提供系統的照片，如果沒有，請在燈光充足的地方，以原相機拍攝臉部清晰高畫質近照。<br><br></span></div>
            </div>
        </div>
        <div class="container" style="padding-bottom: 100px;">
            <div class="row">
                <div class="col-md-6 fw-normal align-self-center mx-auto"><span style="font-size: 40px;"><br><strong><span style="color: rgb(255, 0, 0);">02 </span><span style="color: rgb(0, 0, 0);">掃描皮膚並進行分析</span></strong></span><span style="font-size: 22px;font-family: Hind;padding: -3px;padding-top: 0px;"><br><strong>透過系統獨有的AI智能科技，擷取您臉部照片進行精密分析</strong></span></div>
                <div class="col-md-6"><img src="facetype_assets/img/pic2.png"></div>
            </div>
        </div>
        <div class="container" style="padding-bottom: 100px;">
            <div class="row">
                <div class="col-md-6"><img src="facetype_assets/img/pic3.png"></div>
                <div class="col-md-6"><span style="font-size: 40px;"><br><strong><span style="color: rgb(255, 0, 0);">03</span> <span style="color: rgb(0, 0, 0);">獲得您的檢測結果</span></strong></span><span style="font-size: 22px;font-family: Hind;"><br><strong>揭曉當下肌膚狀況，發掘臉部健康區域與容易忽略的保養死角</strong></span></div>
            </div>
        </div>
        <div class="container" style="padding-bottom: 100px;">
            <div class="row">
                <div class="col-md-6" style="background: var(--bs-body-bg);"><span style="font-size: 40px;"><br><strong><span style="color: rgb(255, 0, 0);">04</span> 深入了解肌膚隱憂</strong></span><span style="font-size: 21px;"><br><strong>藉由系統的圖文解說，了解肌膚問題的形成原因，以及潛藏的隱憂</strong></span></div>
                <div class="col-md-6"><img src="facetype_assets/img/pic.png"></div>
            </div>
        </div>
        <div class="container" style="padding-bottom: 100px;">
            <div class="row">
                <div class="col-md-6"><img src="facetype_assets/img/pic4.png" style="width: 550px;"></div>
                <div class="col-md-6"><span style="font-size: 40px;"><br><strong><span style="color: rgb(255, 0, 0);">05</span> 提供專屬您的保養品使用意見</strong></span><span style="font-size: 22px;"><br><strong>根據您的檢測結果，系統將提供客製化的保養建議</strong></span></div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container-fluid" style="background: #F5F3E9;">
            <div class="row g-0">
                <div class="col-md-6 text-center align-self-center" style="background: #F5F3E9;">
                    <h1 style="color: #000;font-family: Hind;font-weight: bold;font-size: 32px;">立即體驗，體驗前請先加入會員</h1><a href="/facetypes/photo"><button class="btn btn-primary" type="button" style="color: #FFF;font-weight: bold;text-align: center;font-size: 18px;font-family: Hind;background: #000000;border-radius: 50px;padding: 12px 89px;">立即體驗</button></a>
                </div>
                <div class="col-md-6 text-center align-self-center" style="background: #F5F3E9;">
                    <img src="facetype_assets/img/banner7.jpg">
                </div>
                
            </div>
        </div>
    </footer>
    <script src="{{ asset('facetype_assets/bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>