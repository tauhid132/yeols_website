@extends('master')
@section('page-title', $blog->title)
@section('main-body')
<div id="content">
    <div class="bg-subpage"></div>
    <div class="blog-detail-page blog-list-page style-two pt-80 pb-80">
        <div class="container"> 
            <div class="row">
                <div class="col-lg-8">
                    <div class="heading"> 
                        <div class="heading-infor flex-item-center gap-10 row-gap-4">
                            
                            <div class="author fw-400">{{ $blog->author->name }}</div><i class="ph-fill ph-dot-outline text-on-surface-variant1"></i>
                            <div class="date fw-400">{{ $blog->created_at->format('d F, Y') }}</div>
                        </div>
                        <div class="title heading3 mt-12">{{ $blog->title }}</div>
                    </div>
                    <div class="blog-content mt-40">
                        <div class="bg-img main-img"><img class="w-100" style="height: 500px" src="{{ asset('images/blog_images') }}/{{ $blog->cover_image }}" alt=""/></div>
                        <div class="body2 text-on-surface-variant1 mt-40">{!! $blog->body !!}</div>
                        
                    </div>
                    <div class="blog-tag flex-between mt-40 flex-wrap gap-24">
                        <div class="tags flex-item-center">
                            <div class="text-button pr-12">Tag:</div>
                            <div class="list-tag flex-item-center flex-wrap gap-12"><a class="caption1 fw-700 pt-6 pb-6 pl-12 pr-12 bg-blue-surface text-blue bora-8 d-inline-block hover-button-blue">{{ $blog->category->category_name }}</a></div>
                        </div>
                        <div class="share flex-item-center flex-wrap gap-16">
                            <div class="text-button">Share This Post:</div>
                            <div class="list-social flex-item-center gap-12"><a class="item bg-surface bora-50 w-40 h-40 flex-center hover-button-blue" href="https://www.facebook.com/" target="_blank"><i class="icon-facebook"></i></a><a class="item bg-surface bora-50 w-40 h-40 flex-center hover-button-blue" href="https://www.linkedin.com/" target="_blank"><i class="icon-linkedin fs-14"></i></a><a class="item bg-surface bora-50 w-40 h-40 flex-center hover-button-blue" href="https://www.twitter.com/" target="_blank"><i class="icon-twitter fs-14"></i></a><a class="item bg-surface bora-50 w-40 h-40 flex-center hover-button-blue" href="https://www.instagram.com/" target="_blank"><i class="icon-instagram fs-14"></i></a></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 ml-30 ml-col-lg-0 section-fixed-sidebar">
                    <div class="text-content">
                        <div class="search-block bora-8">
                            <input class="bora-8 w-100" type="text" placeholder="Search"/><i class="ph ph-magnifying-glass"></i>
                        </div>
                        <div class="cate-block mt-32">
                            <div class="heading6">Categories</div>
                            <div class="list-nav mt-8 d-flex flex-column"><a class="nav-item pointer mt-8 active" href="#!" data-name="tab-one">Digital Agency</a><a class="nav-item pointer mt-8" href="#!" data-name="tab-two">IT Solution</a><a class="nav-item pointer mt-8" href="#!" data-name="tab-three">Career</a><a class="nav-item pointer mt-8" href="#!" data-name="tab-one">Company</a></div>
                        </div>
                        <div class="recent-post-block mt-32">
                            <div class="heading6">Recent Posts</div>
                            <div class="list-recent-post mt-20">
                                @foreach ($blogs as $b)
                                <a class="recent-post-item d-flex item-start gap-16 mb-2" href="{{ route('view.single.blog', $b->slug) }}">
                                    <div class="item-img">
                                        <img class="w-80 h-80 bora-8 object-fit-cover" src="{{ asset('images/blog_images') }}/{{ $b->cover_image }}" alt=""/>
                                    </div>
                                    <div class="item-infor">
                                        <div class="caption2 bg-surface pl-8 pr-8 display-inline-block bora-4">{{ $b->category->category_name }}</div>
                                        <div class="item-title mt-4">{{ $blog->title }}</div>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection