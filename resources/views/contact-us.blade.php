@extends('master')
@section('page-title', "Contact Us")
@section('main-body')
<div id="content">
    <div class="bg-subpage"></div>
    <div class="form-contact-us  pt-80 mb-5"> 
      <div class="container"> 
        <div class="row flex-between row-gap-32">
          <div class="col-12 col-lg-5">
            <div class="infor">
              <div class="heading">
                <div class="caption1 fw-700 text-blue bg-blue-surface display-inline-block pt-4 pb-4 pl-10 pr-10 bora-8">Contact Us</div>
                <div class="heading2 mt-16">We’d love to help</div>
                <div class="body2 mt-16">Enabled a startup to launch a successful mobile app by providing end-to-end development, leading to high downloads and recognition.</div>
              </div>
              <div class="style-contact-us">
                <div class="list-social flex-item-center gap-10 mt-28"><a class="item bora-50 w-40 h-40 flex-center border-on-surface" href="https://www.facebook.com/" target="_blank"><i class="icon-facebook"></i></a><a class="item bora-50 w-40 h-40 flex-center border-on-surface" href="https://www.linkedin.com/" target="_blank"><i class="icon-linkedin"></i></a><a class="item bora-50 w-40 h-40 flex-center border-on-surface" href="https://www.twitter.com/" target="_blank"><i class="icon-twitter"></i></a><a class="item bora-50 w-40 h-40 flex-center border-on-surface" href="https://www.youtube.com/" target="_blank"><i class="icon-youtube"></i></a><a class="item bora-50 w-40 h-40 flex-center border-on-surface" href="https://www.instagram.com/" target="_blank"><i class="icon-instagram fs-14"></i></a></div>
              </div>
              <div class="list-more-infor mt-40">
                <div class="item flex-item-center"><i class="ph-bold ph-phone text-white bg-blue p-12 bora-50"></i>
                  <div class="body2">123 456 7890</div>
                </div>
                <div class="item flex-item-center mt-20"><i class="ph-bold ph-envelope-simple text-white bg-blue p-12 bora-50"></i>
                  <div class="body2">hi.avitex@gmail.com</div>
                </div>
                <div class="item flex-item-center mt-20"><i class="ph-bold ph-map-pin text-white bg-blue p-12 bora-50"></i>
                  <div class="body2">4140 Rd. Allentown, New Mexico 31134</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-5">
            <form class="form-block bg-white bora-16 p-40">
              <div class="row row-gap-24">
                <div class="col-12 col-sm-6">
                  <input class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8" type="text" placeholder="Name"/>
                </div>
                <div class="col-12 col-sm-6">     
                  <input class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8" type="text" placeholder="Subject"/>
                </div>
                <div class="col-12">
                  <input class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8" type="text" placeholder="Email"/>
                </div>
                <div class="col-12"> 
                  <textarea class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8" name="messsage" cols="10" rows="4" placeholder="Your Questions..."></textarea>
                </div>
              </div>
              <div class="block-button mt-40"> 
                <button class="button-blue button-blue-hover">Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
  </div>
@endsection