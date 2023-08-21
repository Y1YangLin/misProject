<!DOCTYPE html>
<html data-bs-theme="light" lang="en">
@extends('layouts.navbar')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>上傳照片頁面</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/bootstrap/css/bootstrap.min.css') }}">

    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="{{ asset('assets/css/normalize.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/webflow.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/waves-library-site-e37884.webflow.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com') }}" rel="preconnect">
    <link href="https://fonts.gstatic.com') }}" rel="preconnect" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">WebFont.load({  google: {    families: ["Oswald:200,300,400,500,600,700"]  }});</script>
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
    <link href="{{ asset('assets/images/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">
    <link href="{{ asset('assets/images/webclip.png') }}" rel="apple-touch-icon">

    <link rel="stylesheet" href="{{ asset('assets/css/loading_anime.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js" referrerpolicy="no-referrer"></script>

  </head>

<body>


  @section('content')
  @endsection
  

    <section>
      <div class="container-fluid" style="padding-right: 0px;padding-left: 0px;width:100%;height:500px;"> 
        <img style="background:url({{ asset('assets/bootstrap/img/pic5-text.png') }});background-size: cover;background-position: 17% 60% ;width:100%;height: 500px;">
      </div>
    </section>
  
    <section>
        <div class="container">
            <div class="row">
                <div class="col text-center align-self-center" style="padding-top: 100px;">
                  <div>
                    <img id="upload_image" src="{{ asset('assets/bootstrap/img/pic6.png') }}" style="max-height: 446px;font-weight: bold;">
                    <canvas id="upload-station" style="max-height: 446px;display: none;"></canvas>
                  </div>

                  <h5 id="photo-alert" style="color:red;display: none;padding: 0px;margin-bottom: 0px;font-weight: bold;"></h5>
                  <input id="file" type="file" onchange="upload(this)" style="display: none" accept="image/jpeg,image/png"/>
                  <button class="btn btn-primary" type="file" onclick="file.click()" style="background: var(--bs-body-color);width: 440px;height: 44px;margin-top: 50px;--bs-primary: #000000;--bs-primary-rgb: 0,0,0;border-color: var(--bs-emphasis-color);font-weight: bold; ">
                    上傳照片<!--min-200*200px，max-4096*4096px,max-2MB-->
                  </button>
                </div>

                <div id="loading-overlay" style="display:none;">
                  <div id="loader">
                    <div class="ele1"></div>
                    <div class="ele1"></div>
                    <div class="ele1"></div>
                  </div>
                  <!-- <div class="loading-spinner"></div> -->
                </div>

                <div class="col text-center align-self-center" style="padding-top: 100px;">
                  <div>
                    <canvas id="photo" src="{{ asset('assets/bootstrap/img/pic7.png') }}" style="max-height: 446px;display: none;"></canvas>    
                    <video id="video" poster="https://alldata.sgp1.digitaloceanspaces.com/images%2Fwebcam_hint.png" style="max-height: 360px;" playsinline autoplay muted></video>
                  </div>    
                  
                  <h2 id="alert" style="color:red;display: none;font-weight: bold;">請靠到最近! 並且燈光充足!</h2>
                  <button id="open_cam" class="btn btn-primary" type="button" style="width: 300px;height: 44px;border-color: var(--bs-emphasis-color);background: var(--bs-body-color);margin-top: 50px;font-weight: bold;">
                    開啟相機
                  </button>
                  <button id="shoot" class="btn btn-primary" type="button" style="width: 300px;height: 44px;border-color: var(--bs-emphasis-color);background: var(--bs-body-color);margin-top: 50px;font-weight: bold;">
                    拍照  
                  </button>
                </div>
            </div>
        </div>
    </section>
    
    <div style="padding-bottom: 100px;">
      <button class="btn btn-primary" type="button" onclick="window.location.href='/'" style="position: relative;left: 50%;transform: translate(-50%, 0%);width: 600px;height: 44px;border-color: var(--bs-emphasis-color);background: #595959;margin-top: 50px;font-weight: bold;">
        確認
      </button>
    </div>


    

    <script src="{{ asset('assets/bootstrap/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=64c3f1a50a737c6a48e2cd14" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/webflow.js') }}" type="text/javascript"></script>

    <script>//loader
      anime({
        targets: '#loader .ele1',
        loop: true,
        scale: [
          {value: '.1', duration: 1200 ,easing: 'easeOutSine'},
          {value: '1', duration: 1200 ,easing: 'easeInQuad'},
        ],
        translateY: [
          {value: '-45', duration:1200,easing: 'easeOutSine'},
          {value: '0', duration: 1200,easing: 'easeInQuad'},
        ],
        delay: anime.stagger(300)
      });
    </script>
    <script>//photo
      function upload(e) {
        // file too big or too small
        var fileinput = document.getElementById('file');
        // width and height
        console.log(fileinput.files[0]);
        if(fileinput.files[0].size > 2097152){
          document.getElementById('photo-alert').style.display = '';
          document.getElementById('photo-alert').innerHTML = "檔案太大，請重新上傳";
          console.log("TDLB");
          return;
        }else{
          document.getElementById('photo-alert').style.display = 'none';
        }
        // show  photo
        let file = e.files[0];
        let upload_image=document.getElementById('upload_image');
        upload_image.src=window.URL.createObjectURL(file);


        // ajax-----------
        var canvas = document.getElementById("upload-station");
        var img = new Image();

        const createImage = function() {
          img.onload = imageLoaded;
          img.src = fr.result;
        };

        const imageLoaded = function() {
          canvas.width = img.width;     
          canvas.height = img.height;
          canvas.getContext("2d").drawImage(img, 0, 0);

          document.getElementById('loading-overlay').style.display ='';
          // 在圖片載入完成後再執行 AJAX 請求
          var formData = new FormData();
          formData.append('face', canvas.toDataURL("image/png"));

          console.log(canvas.toDataURL("image/png"));

          // 發送 POST 請求
          var xhr = new XMLHttpRequest();
          xhr.open('POST', 'analysis', true);
          xhr.onload = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
              // 請求成功的處理代碼
              console.log(xhr.responseText);
              document.getElementById("photo-alert").style.display ='';
              document.getElementById("photo-alert").innerHTML=xhr.responseText;
            }else{
              console.log("try again");
              document.getElementById("photo-alert").style.display ='';
              document.getElementById("photo-alert").innerHTML="try again";
            }
            document.getElementById('loading-overlay').style.display ='none';
          };
          xhr.send(formData);
        };
        var fr = new FileReader();
        fr.onload = createImage;   
        fr.readAsDataURL(file);

        //上傳後將檔案清除
        if (!file) {
            return;
        }
        e.value = '';
      }
    </script>
    <script>//vedio
      let video_el = document.getElementById("video");
      let button_el = document.getElementById("shoot");
      let canvas_el = document.getElementById("photo");

      function shootAction(event){
        document.getElementById('loading-overlay').style.display ='';
        document.getElementById("photo").style.display ='';
        document.getElementById("video").style.display ='none';
        document.getElementById("alert").style.display ='none';

        // 將 video 標籤的影片寬高，顯示於 canvas 標籤上
        canvas_el.width = video_el.videoWidth;
        canvas_el.height = video_el.videoHeight;
              
        // drawImage 說明文件： https://www.w3schools.com/tags/canvas_drawimage.asp
        canvas_el.getContext('2d').drawImage(video_el, 0, 0, canvas_el.width, canvas_el.height);
              
        console.log(canvas_el.toDataURL("image/png"));
            

        // ajax-----------
        var formData = new FormData();
        formData.append('face', canvas_el.toDataURL("image/png"));
        
        // 發送 POST 請求
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'analysis', true);
        xhr.onload = function() {
          if (xhr.readyState === 4 && xhr.status === 200) {
            // 請求成功的處理代碼
            console.log(xhr.responseText);
            document.getElementById("alert").style.display ='';
            document.getElementById("alert").innerHTML=xhr.responseText;
          }else{
            console.log("try again");
            document.getElementById("alert").style.display ='';
            document.getElementById("alert").innerHTML="try again";
          }
          document.getElementById('loading-overlay').style.display ='none';
        };
        xhr.send(formData);
      }
      
      let newAction =function(event){
        shootAction(event)
      }
      const open_cam_el = document.getElementById("open_cam");
        open_cam_el.addEventListener("click", function(){
          
          document.getElementById("alert").style.display ='';
          document.getElementById("photo").style.display ='none';
          document.getElementById("video").style.display ='';

          // 開啟視訊鏡頭，瀏覽器會跳詢問視窗
          navigator.mediaDevices.getUserMedia({video: true}).then(function(stream){
            stream_obj = stream;         // 將串流物件放在 stream_obj 全域變數，方便後面關閉 webcam 時會用到
            video_el.srcObject = stream; // video 標籤顯示 webcam 畫面

            //shoot
            button_el.addEventListener("click",newAction);
  
          }).catch(function(error){      // 若無法取得畫面，執行 catch
            console.log('navigator.MediaDevices.getUserMedia Error: ', error.message, error.name);
          });

        });
    </script>

  </body>
</html>
