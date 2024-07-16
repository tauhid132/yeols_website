@extends('master')
@section('page-title', "Yeols Limited")
@section('main-body')
<div id="content">
    <div class="slider-block style-one mt-60">
        <div class="container"> 
            <div class="row row-gap-32">
                <div class="col-md-4">
                    <div class="text">
                        <div class="heading2 pr-55">Top IT Services for Small to Mid-Sized Businesses</div>
                        <div class="body2 mt-16">We provide custom software solutions for any industry. Creating high - value software and technology for your business. </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="bg-img w-100"><video style="height: 100%; width: 100%" poster="{{ asset('intro_thumbnail.png') }}" controls>
                        <source src="{{ asset('intro.mp4') }}" type="video/mp4">
                            
                        </video></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-about mt-60"> 
            <div class="container"> 
                <div class="content">
                    <div class="row row-gap-12 pb-40">
                        <div class="col-12 col-xl-5 col-md-6">
                            <div class="text-label text-white bg-blue">About Us</div>
                            <div class="heading4 text-white mt-16">We ensure quality works and customer's satisfaction</div>
                        </div>
                        <div class="col-12 col-md-6"> 
                            <div class="desc text-white">Your IT Services Partner! We offer customized IT solutions, from managed services to cloud computing and cybersecurity. Empower your business with our expertise for growth and efficiency. </div><a class="text-button-small text-white border-underline-white-2px mt-16" href="about-us.html">Join us today!</a>
                        </div>
                    </div>
                    <div class="line"></div>
                    <div class="counter row row-gap-10 pt-40">
                        <div class="col-6 col-md-3"> 
                            <div class="counter-item"> 
                                <div class="flex-item-center">
                                    <div class="count-number heading4 text-white">100</div><span class="heading3 text-white">+</span>
                                </div>
                                <div class="body1 mt-4 text-white">Happy Customers</div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3"> 
                            <div class="counter-item"> 
                                <div class="flex-item-center">
                                    <div class="count-number heading4 text-white">150</div><span class="heading3 text-white">+</span>
                                </div>
                                <div class="body1 mt-4 text-white">Projects Completed</div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3"> 
                            <div class="counter-item"> 
                                <div class="flex-item-center">
                                    <div class="count-number heading4 text-white">15</div><span class="heading3 text-white">+</span>
                                </div>
                                <div class="body1 mt-4 text-white">Working Countries</div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3"> 
                            <div class="counter-item"> 
                                <div class="flex-item-center">
                                    <div class="count-number heading4 text-white">5</div><span class="heading3 text-white">+</span>
                                </div>
                                <div class="body1 mt-4 text-white">Years Experience</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-benefit mt-80">
            <div class="container"> 
                <div class="row row-gap-40">
                    <div class="col-12 col-lg-3 col-sm-6">
                        <div class="benefit-item ">
                            <div class="block-icon"> <i class="ph ph-medal fs-42"></i></div>
                            <div class="heading6 mt-8">Expertise</div>
                            <div class="text-on-surface-variant1 mt-8">Access to specialized knowledge and technology expertise for effective IT solutions.</div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-sm-6">
                        <div class="benefit-item ">
                            <div class="block-icon"> <i class="ph ph-money fs-42"></i></div>
                            <div class="heading6 mt-8">Cost Savings</div>
                            <div class="text-on-surface-variant1 mt-8">Avoiding expenses associated with maintaining an in-house IT department.</div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-sm-6">
                        <div class="benefit-item ">
                            <div class="block-icon"> <i class="ph ph-fingerprint fs-42"></i></div>
                            <div class="heading6 mt-8">Enhanced Security</div>
                            <div class="text-on-surface-variant1 mt-8">Robust measures to protect against cyber threats and ensure data security.</div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-sm-6">
                        <div class="benefit-item ">
                            <div class="block-icon"> <i class="ph ph-chart-line-up fs-42"></i></div>
                            <div class="heading6 mt-8">Increased Efficiency</div>
                            <div class="text-on-surface-variant1 mt-8">Streamlined operations, automation, and proactive monitoring for improved productivity.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-solution bg-linear mt-80 pt-80 pb-80"> 
            <div class="container text-center">
                <div class="text-label pt-4 pb-4 pl-12 pr-12 bg-green bora-2 display-inline-block">What we do</div>
                <div class="heading3 text-center mt-12">Our Services</div>
                <div class="row row-gap-40 mt-40 sub-nav-solution">
                    <div class="col-12 col-xl-4 col-sm-6">
                        <div class="solution-item service-item nav-item-main p-40 bora-20 bg-white h-100" data-cate="IT Solutions" data-item="solution1"><a class="main-item flex-column-item-center">
                            <img src="{{ asset('web-development.png') }}" style="height: 70px">
                            <div class="service-name heading5 text-center mt-24">Web Development</div>
                            <div class="service-desc text-on-surface-variant1 text-center mt-12">We are an IT company specializing in web development solutions, delivering innovative and customized websites to meet your business needs. Our expert team ensures top-notch design, functionality, and user experience, driving your online presence and success.</div></a>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4 col-sm-6">
                        <div class="solution-item service-item nav-item-main p-40 bora-20 bg-white h-100" data-cate="IT Services" data-item="solution2"><a class="main-item flex-column-item-center">
                            <img src="{{ asset('app-development.png') }}" style="height: 70px">
                            <div class="service-name heading5 text-center mt-24">App Development</div>
                            <div class="service-desc text-on-surface-variant1 text-center mt-12">We turn your mobile app vision into reality. Our IT experts craft user-friendly, feature-rich apps for iOS and Android, helping your business flourish in today's mobile world.</div></a>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4 col-sm-6">
                        <div class="solution-item service-item nav-item-main p-40 bora-20 bg-white h-100" data-cate="IT Services" data-item="solution3"><a class="main-item flex-column-item-center">
                            <img src="{{ asset('software-development.png') }}" style="height: 70px">
                            <div class="service-name heading5 text-center mt-24">Software Development</div>
                            <div class="service-desc text-on-surface-variant1 text-center mt-12">Your IT needs, solved. We craft custom software solutions for businesses, from web and mobile apps to powerful back-end systems. We transform your ideas into reality, boosting efficiency and growth.</div></a>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4 col-sm-6">
                        <div class="solution-item service-item nav-item-main p-40 bora-20 bg-white h-100" data-cate="IT Solutions" data-item="solution4"><a class="main-item flex-column-item-center">
                            <img src="{{ asset('digital-marketing.png') }}" style="height: 70px">
                            <div class="service-name heading5 text-center mt-24">Digital Marketing</div>
                            <div class="service-desc text-on-surface-variant1 text-center mt-12">Let us supercharge your IT brand online! We combine expert SEO strategies with digital marketing muscle to get your website seen by the right audience. Drive organic traffic and leads with our data-driven approach.</div></a>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4 col-sm-6">
                        <div class="solution-item service-item nav-item-main p-40 bora-20 bg-white h-100" data-cate="IT Services" data-item="solution5"><a class="main-item flex-column-item-center">
                            <img src="{{ asset('seo.png') }}" style="height: 70px">
                            <div class="service-name heading5 text-center mt-24">SEO</div>
                            <div class="service-desc text-on-surface-variant1 text-center mt-12">We unlock your IT brand's online potential! Our SEO experts optimize your website for search engines, driving high-quality traffic and leads. Get found by the right customers and soar in search rankings.</div></a>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4 col-sm-6">
                        <div class="solution-item service-item nav-item-main p-40 bora-20 bg-white h-100" data-cate="IT Solutions" data-item="solution5"><a class="main-item flex-column-item-center">
                            <img src="{{ asset('ui.png') }}" style="height: 70px">
                            <div class="service-name heading5 text-center mt-24">UI / UX Design</div>
                            <div class="service-desc text-on-surface-variant1 text-center mt-12">We elevate your IT products! Our UI/UX design creates user-friendly interfaces and intuitive experiences. We craft beautiful, functional designs that drive engagement and success for your software.</div></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-service mt-80"> 
            <div class="container"> 
                <div class="row gy-2 flex-between">
                    <div class="col-xl-8 col-md-9 col-12">
                        <div class="text-label text-blue pt-4 pb-4 pl-12 pr-12 bg-grey bora-2 display-inline-block">What we do</div>
                        <div class="heading3 mt-12">Services that we are specialized in</div>
                    </div>
                    
                </div>
                <div class="row mt-40 row-gap-12 sub-nav-solution">
                    <div class="col-sm-6 col-12"> 
                        <a class="service-item nav-item-main bg-surface pt-16 pb-16 pl-20 pr-20 flex-item-center bora-8 h-100" href="#" data-cate="Finance Consulting" data-item=""><i class="ph ph-bank fs-24"></i>
                            <div class="service-name heading6 pl-12">Web Design & Development</div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-12"> 
                        <a class="service-item nav-item-main bg-surface pt-16 pb-16 pl-20 pr-20 flex-item-center bora-8 h-100" href="#" data-cate="Finance Consulting" data-item=""><i class="ph ph-bank fs-24"></i>
                            <div class="service-name heading6 pl-12">Wordpress Design & Plugin Development</div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-12"> 
                        <a class="service-item nav-item-main bg-surface pt-16 pb-16 pl-20 pr-20 flex-item-center bora-8 h-100" href="#" data-cate="Finance Consulting" data-item=""><i class="ph ph-bank fs-24"></i>
                            <div class="service-name heading6 pl-12">E-Commerce Website Development</div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-12"> 
                        <a class="service-item nav-item-main bg-surface pt-16 pb-16 pl-20 pr-20 flex-item-center bora-8 h-100" href="#" data-cate="Finance Consulting" data-item=""><i class="ph ph-bank fs-24"></i>
                            <div class="service-name heading6 pl-12">ERP & HRM Softwares</div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-12"> 
                        <a class="service-item nav-item-main bg-surface pt-16 pb-16 pl-20 pr-20 flex-item-center bora-8 h-100" href="#" data-cate="Finance Consulting" data-item=""><i class="ph ph-bank fs-24"></i>
                            <div class="service-name heading6 pl-12">Android App Development</div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-12"> 
                        <a class="service-item nav-item-main bg-surface pt-16 pb-16 pl-20 pr-20 flex-item-center bora-8 h-100" href="#" data-cate="Finance Consulting" data-item=""><i class="ph ph-bank fs-24"></i>
                            <div class="service-name heading6 pl-12">iOS App Development</div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-12"> 
                        <a class="service-item nav-item-main bg-surface pt-16 pb-16 pl-20 pr-20 flex-item-center bora-8 h-100" href="#" data-cate="Finance Consulting" data-item=""><i class="ph ph-bank fs-24"></i>
                            <div class="service-name heading6 pl-12">Digital Marketing & SEO</div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-12"> 
                        <a class="service-item nav-item-main bg-surface pt-16 pb-16 pl-20 pr-20 flex-item-center bora-8 h-100" href="#" data-cate="Finance Consulting" data-item=""><i class="ph ph-bank fs-24"></i>
                            <div class="service-name heading6 pl-12">Outreach Linkbuilding</div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-12"> 
                        <a class="service-item nav-item-main bg-surface pt-16 pb-16 pl-20 pr-20 flex-item-center bora-8 h-100" href="#" data-cate="Finance Consulting" data-item=""><i class="ph ph-bank fs-24"></i>
                            <div class="service-name heading6 pl-12">Social Media Management</div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-12"> 
                        <a class="service-item nav-item-main bg-surface pt-16 pb-16 pl-20 pr-20 flex-item-center bora-8 h-100" href="#" data-cate="Finance Consulting" data-item=""><i class="ph ph-bank fs-24"></i>
                            <div class="service-name heading6 pl-12">UI / UX Design</div>
                        </a>
                    </div>
                    
                    
                    {{-- <div class="section-banner">
                        <div class="list">
                            <div class="heading4 text-uppercase text-white">Experience Seamless IT Solutions</div><i class="icon-icon-logo fs-36 text-white"></i>
                            <div class="heading4 text-uppercase text-white">Request IT Consultation</div><i class="icon-icon-logo fs-36 text-white"></i>
                            <div class="heading4 text-uppercase text-white">Experience Seamless IT Solutions</div><i class="icon-icon-logo fs-36 text-white"></i>
                            <div class="heading4 text-uppercase text-white">Request IT Consultation</div><i class="icon-icon-logo fs-36 text-white"></i>
                        </div>
                    </div> --}}
                    {{-- <div class="section-brand bg-white pt-80 pb-80">
                        <div class="container"> 
                            <div class="heading5 text-center">Trusted by specialists all around the world</div>
                            <div class="row mt-28 flex-center">
                                <div class="col-11"> 
                                    <div class="row"> 
                                        <div class="col-xl-2-4 col-md-4 col-6"><img class="w-100" src="assets/images/brand/van.svg" alt="img"/></div>
                                        <div class="col-xl-2-4 col-md-4 col-6"><img class="w-100" src="assets/images/brand/slack.svg" alt="img"/></div>
                                        <div class="col-xl-2-4 col-md-4 col-6"><img class="w-100" src="assets/images/brand/pana.svg" alt="img"/></div>
                                        <div class="col-xl-2-4 col-md-4 col-6"><img class="w-100" src="assets/images/brand/shang.svg" alt="img"/></div>
                                        <div class="col-xl-2-4 col-md-4 col-6"><img class="w-100" src="assets/images/brand/spotify.svg" alt="img"/></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="section-slide-shared section-testimonial style-two style-six pt-80 pb-80">
                        <div class="container"> 
                            <div class="cursor flex-center gap-12"><i class="ph ph-caret-left text-white"></i><i class="ph ph-caret-right text-white"></i></div>
                            <div class="heading3 text-center">Testimonials</div>
                            <div class="text-center mt-8">Discover exceptional experiences through testimonials from our satisfied customers.</div>
                            <div class="list-comment mt-40">
                                <div class="col">
                                    <div class="item pl-32 pr-32 pt-40 pb-40 bg-white bora-16 flex-item-center gap-20 border-outline"><img class="bora-50 w-120 h-120 object-fit-cover display-block" src="{{ asset('images/testimonial/danial.png') }}" alt=""/>
                                        <div class="content">
                                            <div class="star flex-item-center gap-1"><i class="ph-fill ph-star fs-20 text-yellow"></i><i class="ph-fill ph-star fs-20 text-yellow"></i><i class="ph-fill ph-star fs-20 text-yellow"></i><i class="ph-fill ph-star fs-20 text-yellow"></i><i class="ph-fill ph-star fs-20 text-yellow"></i></div>
                                            <div class="body2 mt-12">Yeols transformed our outdated website into a modern, user-friendly platform. Their web development team was professional, attentive, and delivered beyond our expectations. The new design is sleek, and responsive, and has significantly boosted our online presence. We're happy with the results and highly recommend Yeols for exceptional web development services.</div>
                                            <div class="infor mt-12">
                                                <div class="text-title">Danial Sawan Lopez</div>
                                                <div class="caption1 text-on-surface-variant1">Somos BlackLab</div>
                                                <div class="double-slash"><i class="icon-slash-bora"></i><i class="icon-slash-bora"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="item pl-32 pr-32 pt-40 pb-40 bg-white bora-16 flex-item-center gap-20 border-outline"><img class="bora-50 w-120 h-120 object-fit-cover display-block" src="{{ asset('images/testimonial/oscar.png') }}" alt=""/>
                                        <div class="content">
                                            <div class="star flex-item-center gap-1"><i class="ph-fill ph-star fs-20 text-yellow"></i><i class="ph-fill ph-star fs-20 text-yellow"></i><i class="ph-fill ph-star fs-20 text-yellow"></i><i class="ph-fill ph-star fs-20 text-yellow"></i><i class="ph-fill ph-star fs-20 text-yellow"></i></div>
                                            <div class="body2 mt-12">They developed an outstanding mobile app for our business. Their team was highly skilled, communicative, and delivered on time. The app is intuitive, feature-rich, and has greatly improved our customer engagement. We couldn't be happier with the results and highly recommend Yeols for top-notch app development services.</div>
                                            <div class="infor mt-12">
                                                <div class="text-title">Oscar</div>
                                                <div class="double-slash"><i class="icon-slash-bora"></i><i class="icon-slash-bora"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="item pl-32 pr-32 pt-40 pb-40 bg-white bora-16 flex-item-center gap-20 border-outline"><img class="bora-50 w-120 h-120 object-fit-cover display-block" src="{{ asset('images/testimonial/dani.png') }}" alt=""/>
                                        <div class="content">
                                            <div class="star flex-item-center gap-1"><i class="ph-fill ph-star fs-20 text-yellow"></i><i class="ph-fill ph-star fs-20 text-yellow"></i><i class="ph-fill ph-star fs-20 text-yellow"></i><i class="ph-fill ph-star fs-20 text-yellow"></i><i class="ph-fill ph-star fs-20 text-yellow"></i></div>
                                            <div class="body2 mt-12">Yeols transformed our online presence with their exceptional SEO and digital marketing services. Our website's traffic and search rankings have significantly improved. Their team is knowledgeable, responsive, and truly understands our business needs. We highly recommend Yeols for anyone seeking impactful digital marketing solutions and outstanding SEO expertise.</div>
                                            <div class="infor mt-12">
                                                <div class="text-title">Danny</div>
                                                <div class="double-slash"><i class="icon-slash-bora"></i><i class="icon-slash-bora"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="item pl-32 pr-32 pt-40 pb-40 bg-white bora-16 flex-item-center gap-20 border-outline"><img class="bora-50 w-120 h-120 object-fit-cover display-block" src="{{ asset('images/testimonial/alex.png') }}" alt=""/>
                                        <div class="content">
                                            <div class="star flex-item-center gap-1"><i class="ph-fill ph-star fs-20 text-yellow"></i><i class="ph-fill ph-star fs-20 text-yellow"></i><i class="ph-fill ph-star fs-20 text-yellow"></i><i class="ph-fill ph-star fs-20 text-yellow"></i><i class="ph-fill ph-star fs-20 text-yellow"></i></div>
                                            <div class="body2 mt-12">Mr. Khan delivered an exceptional UI/UX design for our platform. Their team was creative, attentive, and focused on user experience. The intuitive and visually appealing design has greatly enhanced user engagement and satisfaction. We're extremely pleased with their work and highly recommend Yeols for outstanding UI/UX design services.</div>
                                            <div class="infor mt-12">
                                                <div class="text-title">Christina Smith</div>
                                                <div class="caption1 text-on-surface-variant1">CEO Digital Avitex</div>
                                                <div class="double-slash"><i class="icon-slash-bora"></i><i class="icon-slash-bora"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-case-studies section-news pt-80 pb-80"> 
                        <div class="container">
                            
                            <div class="heading text-center">
                                <div class="text-label pt-4 pb-4 pl-12 pr-12 bg-green bora-2 display-inline-block">Our Blog</div>
                                <div class="heading3 text-center mt-8">Recent Blogs</div>
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
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-contact bg-linear-grey pt-60 pb-20">
                        <div class="container"> 
                            <div class="row flex-between row-gap-40">
                                <div class="col-12 col-xl-7 text-white">
                                    <div class="text-label text-white pt-4 pb-4 pl-12 pr-12 bg-blue bora-2 display-inline-block">Contact us</div>
                                    <div class="heading3 text-white mt-12">Book a free consultation for your company</div>
                                    <p class="desc mt-24">Unlock the full potential of your business with our free consultation. Our expert team will assess your IT needs, recommend tailored solutions, and chart a path to success. Book your consultation now and take the first step towards empowering your business with cutting-edge technology.</p>
                                    <div class="list-features gy-2 mt-16">
                                        <div class="item flex-item-center"> <i class="ph ph-check fs-20"></i>
                                            <div class="body2 pl-12">Confirmation of appointment details</div>
                                        </div>
                                        <div class="item flex-item-center mt-8"><i class="ph ph-check fs-20"></i>
                                            <div class="body2 pl-12">Research and preparation by the IT services company</div>
                                        </div>
                                        <div class="item flex-item-center mt-8"><i class="ph ph-check fs-20"></i>
                                            <div class="body2 pl-12">Consultation to discuss technology solutions</div>
                                        </div>
                                        <div class="item flex-item-center mt-8"><i class="ph ph-check fs-20"></i>
                                            <div class="body2 pl-12">Needs assessment for tailored solutions</div>
                                        </div>
                                        <div class="item flex-item-center mt-8"><i class="ph ph-check fs-20"></i>
                                            <div class="body2 pl-12">Presentation of proposed solutions</div>
                                        </div>
                                        <div class="item flex-item-center mt-8"><i class="ph ph-check fs-20"></i>
                                            <div class="body2 pl-12">Project execution and ongoing support</div>
                                        </div>
                                        <div class="item flex-item-center mt-8"><i class="ph ph-check fs-20"></i>
                                            <div class="body2 pl-12">Follow-up to evaluate effectiveness and satisfaction</div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-12 col-xl-4">
                                    <div class="form-block bora-16 bg-white pt-24 pb-24 pl-28 pr-28 d-flex flex-column gap-20">
                                        <div class="heading5">Schedule a free consultation</div>
                                        <div class="row gy-2">
                                            
                                            <div class="col-12 col-sm-6"> 
                                                <label class="caption1 text-on-surface-variant1 pb-8" for="firstName">First Name</label>
                                                <input class="w-100 bg-white pl-16 pr-16 pt-8 pb-8 bora-4 border-outline" type="text" id="firstName" placeholder=""/>
                                            </div>
                                            <div class="col-12 col-sm-6"> 
                                                <label class="caption1 text-on-surface-variant1 pb-8" for="lastName">Last Name</label>
                                                <input class="w-100 bg-white pl-16 pr-16 pt-8 pb-8 bora-4 border-outline" type="text" id="lastName" placeholder=""/>
                                            </div>
                                            <div class="col-12">
                                                <label class="caption1 text-on-surface-variant1 pb-8" for="phone">Phone</label>
                                                <input class="w-100 bg-white pl-16 pr-16 pt-8 pb-8 bora-4 border-outline" type="number" id="phone" placeholder=""/>
                                            </div>
                                            <div class="col-12">
                                                <label class="caption1 text-on-surface-variant1 pb-8" for="company">Company/ Organization</label>
                                                <input class="w-100 bg-white pl-16 pr-16 pt-8 pb-8 bora-4 border-outline" type="text" id="company" placeholder=""/>
                                            </div>
                                           
                                            <div class="col-12"> 
                                                <label class="caption1 text-on-surface-variant1 pb-8" for="message">Your message</label>
                                                <textarea class="w-100 bg-white pl-16 pr-16 pt-8 pb-8 bora-4 border-outline display-block" name="message" rows="3" id="message" placeholder=""></textarea>
                                            </div>
                                        </div>
                                        <div class="block-button">
                                            <button class="button-blue bg-black text-white button-blue-hover w-100">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endsection