@extends('master')
@section('page-title', "Yeols Limited")
@section('main-body')
<div id="content">
    <div class="bg-subpage"></div>
    <div class="heading-title pt-60">
        <div class="container text-center"> 
            <div class="title heading2 text-center">Successful Projects</div>
            <div class="desc body2 text-on-surface-variant1 mt-12">From Clients Who Achieved Excellence with Yeols</div>
        </div>
    </div>
    <div class="list-blog-page section-case-studies pt-60 pb-80">
        <div class="container">
            <div class="row row-gap-40 list-news">
              @foreach ($portfolios as $portfolio)
              <div class="col-lg-4 col-sm-6 item">
                <div class="blog-item blog-item-filter hover-box-shadow case-studies-item-main"><a class="main-item" href="{{ route('view.portfolio.single', $portfolio->id) }}">
                    <div class="bg-img w-100 overflow-hidden"><img class="w-100 display-block" style="height: 280px" src="{{ asset('images/portfolio_images') }}/{{ $portfolio->project_cover_image }}" alt="Strategies for Thriving: Unveiling Business Consulting's Impact"/></div>
                    <div class="infor mt-28">
                        <div class="category text-button-small text-blue pt-4 pb-4 pl-12 pr-12 bg-grey bora-8 display-inline-block">{{ $portfolio->project_type }}</div>
                        <div class="title heading5 mt-12">{{ $portfolio->project_name }}</div>
                        
                        <div class="text-on-surface-variant1 mt-16"><button class="btn btn-sm btn-primary">View Details</button></div>
                    </div></a>
                </div>
            </div>
              @endforeach
                
               
            </div>
        </div>
    </div>
    
    @endsection