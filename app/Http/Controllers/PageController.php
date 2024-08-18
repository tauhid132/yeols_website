<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Models\CustomerReview;
use Spatie\Sitemap\SitemapGenerator;

class PageController extends Controller
{
    public function viewHomePage(){
        return view('home',[
            'blogs' => Blog::latest()->take(3)->get(),
            'reviews' => CustomerReview::all()
        ]);
    }
    public function viewContactUs(){
        return view('contact-us');
    }
    public function viewBlogs(){
        return view('blogs',[
            'blogs' => Blog::all()
        ]);
    }
    public function viewSingleBlog($slug){
        return view('single-blog',[
            'blog' => Blog::where('slug', $slug)->first()
        ]);
    }
    public function viewAboutUs(){
        return view('about-us');
    }
    public function viewBookService(){
        return view('book-service');
    }

    public function viewWebDevelopment(){
        return view('web-development');
    }
    public function viewMobileAppDevelopment(){
        return view('mobile-app-development');
    }
    public function viewSoftwareDevelopment(){
        return view('software-development');
    }
    public function viewUiUxDesign(){
        return view('ui-ux-design');
    }
    public function viewDigitalMarketing(){
        return view('digital-marketing');
    }
    public function viewSeoServices(){
        return view('seo-services');
    }
  
    public function viewPortfolios(){
        return view('portfolios',[
            'portfolios' => Portfolio::all()
        ]);
    }
    public function viewSingleProject($id){
        return view('single-project',[
            'project' => Portfolio::find($id)
        ]);
    }

    public function generateSitemap(){
        $path = public_path('sitemap.xml');
        SitemapGenerator::create('https://pestcontrol-dubai.ae')->writeToFile($path);
    }
}
