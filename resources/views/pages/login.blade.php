<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <title>pretty-login</title>
      <link rel="stylesheet" href="{{ URL::asset('login_assets/bootstrap/css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aguafina+Script&amp;display=swap">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alfa+Slab+One&amp;display=swap">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allan&amp;display=swap">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alumni+Sans+Inline+One&amp;display=swap">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Angkor&amp;display=swap">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide&amp;display=swap">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bakbak+One&amp;display=swap">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barrio&amp;display=swap">
      <link rel="stylesheet" href="{{ URL::asset('login_assets/css/styles.min.css') }}">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,300,1,0" />
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
      
   </head>
   
  <body>
      <section class="position-relative py-4 py-xl-5">
         
         <div class="container">
            
            <div class="row d-flex justify-content-center">
               <div class="col-md-11 col-lg-5 col-xl-4">
                  <div class="card mb-5">
                     <div class="card-body d-flex flex-column align-items-center" style="padding-bottom: 42px;margin-bottom: 24px;margin-top: 16px;padding-top: 12px;height: 663.5px;">
                        <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4" style="background: var(--bs-card-bg);width: 257px;color: var(--bs-card-bg);">
                           <h1 style="background: var(--bs-card-bg);color: #97aee8;font-family: 'Alumni Sans Inline One', serif;width: 292.475px;height: 82.225px;text-align: center;padding: 1px;font-size: 71.52px;">YO FU</h1>
                        </div>
                        <div style="margin-left: 1px;width: 258.375px;"></div>
                        <div class="btn-group item" role="group" style="margin-bottom: 25px;width: 330px;height: 54px;">
                          <button class="btn btn-primary button_signup button_signup_cs" type="button" style="font-size: 26px;margin-right: 2px;border-radius: 10px;height: 55px;background: var(--bs-card-bg);color: var(--bs-black);font-weight: bold;font-family: Barrio, serif;border-style: none;border-color: var(--bs-black); " value="註冊">會員註冊</button>
                          <button class="btn btn-primary button_login button_login_cs" type="button" style="font-size: 26px;margin-left: 2px;border-radius: 10px;height: 55px;color: var(--bs-black);background: var(--bs-card-bg);font-weight: bold;border-style: none;border-color: var(--bs-gray-900);" value="註冊介面.bsdesign">立即登入</button></div>
                        <div class="content">
                           <div id = "content_signup" style="display: none ;">

                              <form class="text-center form_signup" action="{{ route('register') }}" name="signup-form" method="POST" style="width: 376px;padding-left: 0px; ">
                                @csrf
                                <input id = "register_name" class="form-control" type="name" name="name" placeholder="姓名" style="font-size: 18px;margin-bottom: 15px;padding-right: 206px;margin-right: -237px;">
                                
                                

                                
                                <input id = "register_email" class="form-control" type="email" name="email" placeholder="信箱" style="font-size: 18px;margin-bottom: 15px;">
                                
                                 <div class = "relative ">
                                    <div class="fas fa-eye eye"></div>   
                                    <input id = "register_password" class="form-control password" type="password" name="pwd" placeholder="密碼" style="font-size: 18px;margin-bottom: 17px;">             
                                 </div>                             
                                 
                                 <div class = "relative ">
                                    <div class="fa fa-eye eye1"></div>
                                    <input id = "register_repwd" class="form-control password1" type="password" name="repwd" placeholder="再次輸入密碼" style="font-size: 18px;margin-bottom: 17px;">                        
                                    
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    

                                 </div>
                                 
                                <button class="btn btn-primary test" type="submit" name="submit" style="width: 267px;font-size: 33px;height: 55.5px;padding-top: 5px;padding-bottom: 6px;background: #63686d;font-family: Barrio, serif;font-weight: bold;">註冊</button>

                                 <!-- google authenticator here-->
                                 <div class="relative ">
                                    <div class="google-btn">
                                       <a href="{{ route('google-auth') }}">
                                          <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png">
                                       </a>
                                    </div>
                                 </div>

                              </form>
                           </div>
                           
                              <div id = "content_login">
                                 <form class="text-center form_login" action="{{ route('login') }}" name="signin-form" method="post"style="width: 376px;padding-left: 0px;">
                                    @csrf
                                    <input id = "login_email" class="form-control" type="email" name="email" placeholder="電子信箱" style="font-size: 18px;margin-bottom: 15px;">
                                    
                                    
                                    
                                    <div class = "relative ">
                                       <div class="fas fa-eye eye2"></div>
                                       <input id = "login_password" class="form-control password2" type="password" name="pwd" placeholder="密碼" style="font-size: 18px;margin-bottom: 17px;">                                  
                                    </div> 
                                    
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>

                                    <p class="text-muted" style="margin-top: 10px;"><a href="#">忘記密碼?</a></p>
                                    <button class="btn btn-primary" name="submit" type="submit" style="width: 267px;font-size: 33px;height: 55.5px;padding-top: 5px;padding-bottom: 6px;background: #63686d;">登入</button>
                                    
                                    <!-- google authenticator here-->
                                    <div class="relative">
                                       <div class="google-btn">
                                          <a href="{{ route('google-auth') }}">
                                                <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png">
                                          </a>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                              
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      
      
      <script src="{{ URL::asset('login_assets/bootstrap/js/bootstrap.min.js') }}"></script>
      <script src="{{ URL::asset('login_assets/js/script.min.js') }}"></script>
   </body>
</html>