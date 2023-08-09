<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
                  <a href="/facetype" class="nav-link">膚質分析</a>
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
                      <!-- <a href="#" class="nav-dropdown-link w-dropdown-link">男生</a>
                      <a href="#" class="nav-dropdown-link w-dropdown-link">女生</a>
                      <a href="#" class="nav-dropdown-link w-dropdown-link">孩童</a> -->
                      <a href="/product" class="nav-dropdown-link w-dropdown-link">資生堂</a>
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
  @yield('content')
</html>