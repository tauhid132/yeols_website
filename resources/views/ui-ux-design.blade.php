@extends('master')
@section('page-title', "UI UX Design")
@section('main-body')
<div id="content">
    <div class="bg-subpage"></div>
    <div class="section-about style-seven-second style-seven-third pt-80 pb-80">
        <div class="container"> 
          <div class="row row-gap-40 flex-between">
            <div class="col-12 col-lg-5 col-md-8 col-sm-10"><img class="w-100" src="{{ asset('images/services/ui-ux.jpg') }}" alt="img"/></div>
            <div class="col-12 col-lg-7 pl-65 pl-col-lg-0">
                <div class="text-label pt-4 pb-4 pl-12 pr-12 bg-green bora-2 display-inline-block">Services</div>
              <div class="heading3 mt-20">UI / UX Design</div>
              <div class="desc mt-20">Yeols Limited offers expert Web Development solutions tailored to your business needs. Our dedicated team creates responsive, user-friendly websites that enhance your online presence. We ensure seamless performance, robust security, and innovative design, helping you effectively engage with your target audience and achieve your digital goals.</div>
              <div class="border-line mt-28"> </div>
              <div class="benefit-item flex-item-center mt-28"> <i class="fa fa-check fs-42 display-block"></i>
                <div class="title pl-16">
                  <div class="heading5">User Friendly & Responsive Design</div>
                  <p>We design websites ensuring User Experience and Responsiveness</p>
                </div>
              </div>
              <div class="benefit-item flex-item-center mt-28"> <i class="ph-fill ph-chart-bar fs-42 display-block"></i>
                <div class="title pl-16">
                  <div class="heading5">Robust Framework</div>
                  <p>We use Javascript frameworks like ReactJS to build Robust SPA Applications.</p>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>


</div>
@endsection