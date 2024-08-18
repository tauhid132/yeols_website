<div id="header">
    <div class="header-menu style-one style-two">
      <div class="container"> <a class="logo" href="{{ route('view.home.page') }}"> 
      <img src="{{ asset('logo.png') }}" style="height: 40px">
         </a>
        <div class="menu-main"> 
          <ul class="flex-center">
            <li> <a class="{{ Request::is('/') ? 'active':''  }}" href="{{ route('view.home.page') }}">Home</a>
              
            </li>
            
          
            <li> <a class="{{ Request::is('portfolios') ? 'active':''  }}" href="{{ route('view.portfolios') }}">Portfolio</a>
              
            </li>
            <li> <a href="#!">Services</a>
              <ul class="sub-nav">
                <li class="sub-nav-item"><a class="sub-nav-link" href="{{ route('view.web.development') }}">Web Design & Development</a></li>
                <li class="sub-nav-item"><a class="sub-nav-link" href="{{ route('view.mobile.app.development') }}">Mobile App Development</a></li>
                <li class="sub-nav-item"><a class="sub-nav-link" href="{{ route('view.ui.ux.design') }}">UI / UX Design</a></li>
                <li class="sub-nav-item"><a class="sub-nav-link" href="{{ route('view.software.development') }}">Software Development</a></li>
                <li class="sub-nav-item"><a class="sub-nav-link" href="{{ route('view.digital.marketing') }}">Digital Marketing</a></li>
                <li class="sub-nav-item"><a class="sub-nav-link" href="{{ route('view.seo.services') }}">SEO Services</a></li>
              </ul>
            </li>
            <li> <a class="{{ Request::is('about-us') ? 'active':''  }}" href="{{ route('view.about.us') }}">About Us</a>
              
            </li>
            <li> <a class="{{ Request::is('blogs') ? 'active':''  }}" href="{{ route('view.blogs') }}">Blog</a>
              
            </li>
            <li> <a class="{{ Request::is('contact-us') ? 'active':''  }}" href="{{ route('view.contact.us') }}">Contact Us</a>
              
            </li>
         
           
            
           
          </ul>
        </div>
        <div class="right-block flex-item-center">
         <a class="button hover-button bg-blue text-white border-none text-button-small" href="https://calendly.com/yeols-marketing/30min"><i class="fa fa-calendar"></i> <span>Schedule a Meeting</span></a>
          <div class="search-icon"> <i class="ph ph-magnifying-glass"></i></div>
          <div class="menu-humburger"><i class="ph ph-list"></i></div>
        </div>
      </div>
      <div class="search-block">
        <div class="container flex-between h-100">
          <div class="left flex-item-center gap-16">
            <div class="icon-search"> <i class="ph ph-magnifying-glass fs-24 pointer"></i></div>
            <div class="input-block w-100">
              <input class="w-100" type="text" placeholder="Search..."/>
            </div>
          </div>
          <div class="right"> 
            <div class="icon-close"> <i class="ph-bold ph-x fs-24 pointer"></i></div>
          </div>
        </div>
      </div>
      <div id="menu-mobile-block">
        <div class="menu-mobile-main"> 
          <div class="container"> 
            <div class="heading flex-between"><a class="logo-mobile" href="">
              <img src="{{ asset('logo.png') }}" style="height: 40px"></a>
              <div class="close-block"> <i class="ph-bold ph-x"></i></div>
            </div>
            <ul class="menu-nav-mobile">
              <li class="nav-item-mobile flex-column gap-8 pt-8 pb-8 pl-12 pr-12">
                <a class="nav-link-mobile" href="{{ route('view.home.page') }}">Home</a>
              </li>
              <li class="nav-item-mobile flex-column gap-8 pt-8 pb-8 pl-12 pr-12">
                <a class="nav-link-mobile" href="{{ route('view.home.page') }}">Portfolio</a>
              </li>
              <li class="nav-item-mobile flex-column gap-8 pt-4 pb-8 pl-12 pr-12 pointer"><a class="nav-link-mobile" href="#!">Services <i class="ph ph-caret-right fs-12"></i></a>
                <ul class="sub-nav-mobile">
                  <li class="sub-nav-item pl-12 pr-12 pt-8 pb-8"><a class="sub-nav-link" href="{{ route('view.web.development') }}">Web Design & Development</a></li>
                  <li class="sub-nav-item pl-12 pr-12 pt-8 pb-8"><a class="sub-nav-link" href="{{ route('view.mobile.app.development') }}">Mobile App Development</a></li>
                  <li class="sub-nav-item pl-12 pr-12 pt-8 pb-8"><a class="sub-nav-link" href="{{ route('view.ui.ux.design') }}">UI / UX Design</a></li>
                  <li class="sub-nav-item pl-12 pr-12 pt-8 pb-8"><a class="sub-nav-link" href="{{ route('view.software.development') }}">Software Development</a></li>
                  <li class="sub-nav-item pl-12 pr-12 pt-8 pb-8"><a class="sub-nav-link" href="{{ route('view.digital.marketing') }}">Digital Marketing</a></li>
                  <li class="sub-nav-item pl-12 pr-12 pt-8 pb-8"><a class="sub-nav-link" href="{{ route('view.seo.services') }}">SEO Services</a></li>
                </ul>
              </li>
              <li class="nav-item-mobile flex-column gap-8 pt-8 pb-8 pl-12 pr-12">
                <a class="nav-link-mobile" href="{{ route('view.about.us') }}">About Us</a>
              </li>
              <li class="nav-item-mobile flex-column gap-8 pt-8 pb-8 pl-12 pr-12">
                <a class="nav-link-mobile" href="{{ route('view.blogs') }}">Blogs</a>
              </li>
              <li class="nav-item-mobile flex-column gap-8 pt-8 pb-8 pl-12 pr-12">
                <a class="nav-link-mobile" href="{{ route('view.contact.us') }}">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>