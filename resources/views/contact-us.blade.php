@extends('master')
@section('page-title', "Contact Us")
@section('main-body')
<div id="content">
  <div class="bg-subpage"></div>
  <div class="form-contact-us  pt-80 mb-5"> 
    <div class="container"> 
      <div class="row flex-between row-gap-32">
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong> {{ $error }}</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endforeach
        @if(session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong> {{ session()->get('error') }}</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>  {{ session()->get('success') }}</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="col-12 col-lg-5">
          <div class="infor">
            <div class="heading">
              <div class="text-label pt-4 pb-4 pl-12 pr-12 bg-green bora-2 display-inline-block rounded">Contact Us</div>
              <div class="heading2 mt-16">We are just one message away!</div>
              
            </div>
            
            <div class="style-contact-us">
              <div class="list-social flex-item-center gap-10 mt-28"><a class="item bora-50 w-40 h-40 flex-center border-on-surface" href="https://www.facebook.com/yeolslimited/" target="_blank"><i class="icon-facebook"></i></a><a class="item bora-50 w-40 h-40 flex-center border-on-surface" href="https://www.linkedin.com/company/103704744" target="_blank"><i class="icon-linkedin"></i></a><a class="item bora-50 w-40 h-40 flex-center border-on-surface" href="https://www.twitter.com/" target="_blank"><i class="icon-twitter"></i></a><a class="item bora-50 w-40 h-40 flex-center border-on-surface" href="https://www.youtube.com/" target="_blank"><i class="icon-youtube"></i></a><a class="item bora-50 w-40 h-40 flex-center border-on-surface" href="https://www.instagram.com/yeolslimited/" target="_blank"><i class="icon-instagram fs-14"></i></a></div>
            </div>
            <div class="list-more-infor mt-40">
              <div class="item flex-item-center"><i class="ph-bold ph-phone text-white bg-blue p-12 bora-50"></i>
                <div class="body2">09614 23 23 23</div>
              </div>
              <div class="item flex-item-center mt-20"><i class="ph-bold ph-envelope-simple text-white bg-blue p-12 bora-50"></i>
                <div class="body2">marketing@yeols.com</div>
              </div>
              <div class="item flex-item-center mt-20"><i class="ph-bold ph-map-pin text-white bg-blue p-12 bora-50"></i>
                <div class="body2">400 Rella Drive 123-298 Montebello, United States</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-5">
          <form method="post" action="{{ route('submit.contact.us') }}" class="form-block bg-white bora-16 p-40">
            @csrf
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
                <textarea class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8" name="messsage" cols="10" rows="4" placeholder="Your Message..."></textarea>
              </div>
            </div>
            <div class="block-button mt-40"> 
              <button type="submit" class="button-blue button-blue-hover"><i class="fa fa-paper-plane me-2"></i>Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection