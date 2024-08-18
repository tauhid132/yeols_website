@extends('master')
@section('page-title', "Yeols Limited")
@section('main-body')
<div id="content">
    <div class="bg-subpage"></div>
    <div class="heading-title pt-60">
        <div class="container text-center"> 
            <div class="title heading2 text-center">Our Blogs</div>
            <div class="desc body2 text-on-surface-variant1 mt-12">Get Updated with our latest blogs</div>
        </div>
    </div>
    
    <div class="list-blog-page pt-80 pb-80">
        <div class="container">
            <div class="row row-gap-40">
                @foreach ($blogs as $blog)
                <div class="col-lg-4 col-sm-6 item">
                    <div class="blog-item blog-item-filter hover-box-shadow "><a class="main-item" href="{{ route('view.single.blog', $blog->slug) }}">
                        <div class="bg-img w-100 overflow-hidden"><img class="w-100 h-100 display-block" src="{{ asset('images/blog_images') }}/{{ $blog->cover_image }}"/></div>
                        <div class="infor mt-28">
                            <div class="category text-button-small text-blue pt-4 pb-4 pl-12 pr-12 bg-grey bora-8 display-inline-block">Healthcare</div>
                            <div class="title heading5 mt-12">{{ $blog->title }}</div>
                            <div class="desc text-on-surface-variant1 mt-12">{!! strip_tags(\Illuminate\Support\Str::limit($blog->body, 150, $end='...')) !!}</div>
                            <div class="date text-label text-on-surface-variant1 mt-16">{{ $blog->created_at->format('d F, Y') }}</div>
                        </div></a>
                    </div>
                </div>
                @endforeach
                
            </div>
            <div class="list-nav-number flex-item-center gap-8 mt-40"><a class="nav-item bora-50 flex-center active" href="#!">1</a><a class="nav-item bora-50 flex-center" href="#!">2</a><a class="nav-item bora-50 flex-center" href="#!">3</a><a class="nav-item bora-50 flex-center" href="#!"><i class="ph ph-caret-right"></i></a></div>
        </div>
    </div>
</div>

@endsection