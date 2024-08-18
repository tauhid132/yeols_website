@extends('master')
@section('page-title', $project->project_name)
@section('main-body')
<div id="content">
    <div class="bg-subpage"></div>
    <div class="blog-detail-page blog-list-page style-two pt-80 pb-80">
        <div class="container"> 
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading"> 
                        
                        <div class="title heading3 mt-12">{{ $project->project_name }}</div>
                    </div>
                    <div class="blog-content mt-40">
                        <div class="bg-img main-img"><img class="w-100 bora-20" style="height: 500px" src="{{ asset('images/portfolio_images') }}/{{ $project->project_cover_image }}" alt=""/></div>
                        <div class="body2 text-on-surface-variant1 mt-40">{!! $project->project_description !!}</div>
                        
                    </div>
                   
                    
                </div>
                
            </div>
        </div>
    </div>
    
</div>
@endsection