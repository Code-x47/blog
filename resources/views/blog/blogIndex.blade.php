<!DOCTYPE html>
<html lang="en">

@extends('blog.master')
    <!-- Navbar End -->


    <!-- Main News Slider Start -->
   @section("content") 
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 px-0">
                <div class="owl-carousel main-carousel position-relative">
                    <!--Image1--><div class="position-relative overflow-hidden" style="height: 500px;">
                        @foreach($indexView1 AS $index1)
                        <img class="img-fluid h-100" src="bizdoc/{{$index1['file1']}}" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="">{{$index1['tag']}}</a>
                                <a class="text-white" href="">{{$index1->created_at->format(config('app.post_date'))}}</a>
                            </div>
                            <a class="h2 m-0 text-white text-uppercase font-weight-bold" href="polPostView/{{$index1['id']}}">{{$index1['title']}}</a>
                        </div>
                        @endforeach
                    </div>
                  <!--Image2-->  <div class="position-relative overflow-hidden" style="height: 500px;">
                         @foreach($indexView2 AS $index2)
                        <img class="img-fluid h-100" src="bizdoc/{{$index2['file1']}}" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="">{{$index2['tag']}}</a>
                                <a class="text-white" href="">{{$index2->created_at->format(config('app.post_date'))}}</a>
                            </div>
                            <a class="h2 m-0 text-white text-uppercase font-weight-bold" href="bizPostView/{{$index2['id']}}">{{$index2['title']}}</a>
                        </div>
                        @endforeach
                    </div>
                    <!--Image3--><div class="position-relative overflow-hidden" style="height: 500px;">
                        @foreach($indexView3 AS $index3)
                        <img class="img-fluid h-100" src="entdoc/{{$index3['file1']}}" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="">{{$index3['tag']}}</a>
                                <a class="text-white" href="">{{$index3->created_at->format(config('app.post_date'))}}</a>
                            </div>
                            <a class="h2 m-0 text-white text-uppercase font-weight-bold" href="entPostView/{{$index3['id']}}">{{$index3['title']}}</a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-5 px-0">
                <div class="row mx-0">
                    <div class="col-md-6 px-0">
                        <!--Image4--><div class="position-relative overflow-hidden" style="height: 250px;">
                            @foreach($indexView4 AS $index4)
                            <img class="img-fluid w-100 h-100" src="entdoc/{{$index4['file1']}}" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                        href="">{{$index4['tag']}}</a>
                                    <a class="text-white" href=""><small>{{$index4->created_at->format(config('app.post_date'))}}</small></a>
                                </div>
                                <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="entPostView/{{$index4['id']}}">{{$index4['title']}}</a>
                            </div>
                         @endforeach
                        </div>
                    </div>
                    <div class="col-md-6 px-0">
                        <!--Image5--><div class="position-relative overflow-hidden" style="height: 250px;">
                            @foreach($indexView5 AS $index5)
                            <img class="img-fluid w-100 h-100" src="bizdoc/{{$index5['file1']}}" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                        href="">{{$index5['tag']}}</a>
                                    <a class="text-white" href=""><small>{{$index5->created_at->format(config('app.post_date'))}}</small></a>
                                </div>
                                <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">{{$index5['title']}}</a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6 px-0">
                        <!--Image6--><div class="position-relative overflow-hidden" style="height: 250px;">
                            @foreach($indexView6 AS $index6)
                            <img class="img-fluid w-100 h-100" src="foodDoc/{{$index6['file1']}}" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                        href="">{{$index6['tag']}}</a>
                                    <a class="text-white" href=""><small>{{$index6->created_at->format(config('app.post_date'))}}</small></a>
                                </div>
                                <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="foodPostView/{{$index6['id']}}">{{$index6['title']}}</a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6 px-0">
                        <!--Image7--><div class="position-relative overflow-hidden" style="height: 250px;">
                            @foreach($indexView7 AS $index7)
                            <img class="img-fluid w-100 h-100" src="sportDoc/{{$index7['file1']}}" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                        href="">{{$index7['tag']}}</a>
                                    <a class="text-white" href="sptPostView/{{$index7['id']}}"><small>{{$index7->created_at->format(config("app.post_date"))}}/</small></a>
                                </div>
                                <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="sptPostView/{{$index7['id']}}">{{$index7['title']}}</a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main News Slider End -->


    <!-- Breaking News Start -->
    <div class="container-fluid bg-dark py-3 mb-3">
        <div class="container">
            <div class="row align-items-center bg-dark">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div class="bg-primary text-dark text-center font-weight-medium py-2" style="width: 170px;">Breaking News</div>
                        <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center ml-3"
                            style="width: calc(100% - 170px); padding-right: 90px;">
                            @foreach($latest->slice(10) AS $breaking)
                            <div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold" href="latestPostView/{{$breaking['id']}}">{{$breaking['summary']}}</a></div>

                        @if($breaking['id'] == 12)
                        @break
                        @endif
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breaking News End -->


    <!-- Featured News Slider Start -->
    <div class="container-fluid pt-5 mb-3">
        <div class="container">
            <div class="section-title">
                <h4 class="m-0 text-uppercase font-weight-bold">Featured News</h4>
            </div>
            <div class="owl-carousel news-carousel carousel-item-4 position-relative">
                @foreach($latest->slice(3) AS $featured)

                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid h-100" src="latestDoc/{{$featured['file1']}}" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="latestPostView/{{$featured['id']}}">{{$featured['tag']}}</a>
                            <a class="text-white" href=""><small>{{$featured->created_at->format(config("app.post_date"))}}</small></a>
                        </div>
                        <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="latestPostView/{{$featured['id']}}">{{$featured['title']}}</a>
                    </div>
                </div>
                @if($featured['id'] == 12)
                @break
                @endif
                @endforeach
                
            </div>
        </div>
    </div>
    <!-- Featured News Slider End -->


    <!-- News With Sidebar Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h4 class="m-0 text-uppercase font-weight-bold">Latest News</h4>
                                <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                            </div>
                        </div>

                        @foreach($latest AS $latest)
<!--Latest News Div1--><div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="latestDoc/{{$latest['file1']}}" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="latestPostView/{{$latest['id']}}">{{$latest['tag']}}</a>
                                        <a class="text-body" href=""><small>{{$latest->created_at->format(config('app.post_date'))}}</small></a>
                                    </div>
                                    <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="latestPostView/{{$latest['id']}}">{{$latest['title']}}</a>
                                    <p class="m-0">{{$latest['summary']}} <a href="latestPostView/{{$latest['id']}}">Read More..</a></p>
                                </div>
                                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle mr-2" src="docs/{{$latest->userPost->pics}}" width="25" height="25" alt="">
                                        <small>{{$latest->userPost->name}}</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                        <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        @if($latest['id'] == 4)
                        @break
                        @endif
                      
                        
                    @endforeach
                       
                    @foreach($latest2->slice(4) AS $x)
                          
   <!--Latest News Div5--><div class="col-lg-6">
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="latestDoc/{{$x['file1']}}" alt="" width="100px" height="50px">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="latestPostView/{{$x['id']}}">{{$x['tag']}}</a>
                                        <a class="text-body" href=""><small>{{$x->created_at->format(config('app.post_date'))}}</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="latestPostView/{{$x['id']}}">{{$x['title']}}</a>
                                </div>
                            </div>
                           
                        </div>
             @if($x['id'] == 8)

             @break
             @endif
             
             
             @endforeach
                      
                    
                  @foreach($indexView7 AS $index7)
                       <!--Latest News Div9--> <div class="col-lg-12">
                            <div class="row news-lg mx-0 mb-3">
                                <div class="col-md-6 h-100 px-0">
                                    <img class="img-fluid h-100" src="sportDoc/{{$index7['file1']}}" style="object-fit: cover;">
                                </div>
                                <div class="col-md-6 d-flex flex-column border bg-white h-100 px-0">
                                    <div class="mt-auto p-4">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                                href="">{{$index7['tag']}}</a>
                                            <a class="text-body" href=""><small>{{$index7->created_at->format(config('app.post_date'))}}</small></a>
                                        </div>
                                        <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="">{{$index7['title']}}</a>
                                        <p class="m-0">{{$index7['summary']}} <a href="">Read More</a></p>
                                    </div>
                                    <div class="d-flex justify-content-between bg-white border-top mt-auto p-4">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle mr-2" src="img/user.jpg" width="25" height="25" alt="">
                                            <small>John Doe</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                            <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
               
             @endforeach    
               
                    
<div class="col-lg-6">
    @foreach($latest3->slice(8) as $key) 
    <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
        <img class="img-fluid" src="latestDoc/{{$key['file1']}}" alt="" width="100px" height="50px">
        <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
            <div class="mb-2">
                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="latestPostView/{{$key['id']}}">{{$key['tag']}}</a>
                <a class="text-body" href=""><small>{{$key->created_at->format(config('app.post_date'))}}</small></a>
            </div>
            <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="latestPostView/{{$key['id']}}">{{$key['title']}}</a>
        </div>
    </div>
@if($key['id'] == 10)

@break
@endif    
@endforeach
 <!--Latest News Div11-->
</div> 
<!--Latest News Div12--><div class="col-lg-6">
    @foreach($latest3->slice(10) as $key) 
    <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
        <img class="img-fluid" src="latestDoc/{{$key['file1']}}" alt="" width="100px" height="50px">
        <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
            <div class="mb-2">
                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="latestPostView/{{$key['id']}}">{{$key['tag']}}</a>
                <a class="text-body" href=""><small>{{$key->created_at->format(config('app.post_date'))}}</small></a>
            </div>
            <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="latestPostView/{{$key['id']}}">{{$key['title']}}</a>
        </div>
    </div>
@if($key['id'] == 12)

@break
@endif    
@endforeach
                           
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <!-- Social Follow Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Follow Us</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #39569E;">
                                <i class="fab fa-facebook-f text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Fans</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #52AAF4;">
                                <i class="fab fa-twitter text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Followers</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #0185AE;">
                                <i class="fab fa-linkedin-in text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Connects</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #C8359D;">
                                <i class="fab fa-instagram text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Followers</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #DC472E;">
                                <i class="fab fa-youtube text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Subscribers</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none" style="background: #055570;">
                                <i class="fab fa-vimeo-v text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Followers</span>
                            </a>
                        </div>
                    </div>
                    <!-- Social Follow End -->

                    <!-- Ads Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Advertisement</h4>
                        </div>
                        <div class="bg-white text-center border border-top-0 p-3">
                            <a href=""><img class="img-fluid" src="img/news-800x500-2.jpg" alt=""></a>
                        </div>
                    </div>
                    <!-- Ads End -->

                    <!-- Popular News Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Trending News</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            @foreach($trending->slice(4) AS $trending)
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="img/news-110x110-1.jpg" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">{{$trending['tag']}}</a>
                                        <a class="text-body" href=""><small>{{$trending->created_at->format(config("app.post_date"))}}</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">{{$trending['title']}}</a>
                                </div>
                            </div>
                            @endforeach
                           
                        </div>
                    </div>
                    <!-- Popular News End -->

                    <!-- Newsletter Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Newsletter</h4>
                        </div>
                        <div class="bg-white text-center border border-top-0 p-3">
                            <p>Send Us Your Email To Recieve Intresting NewsLetters from us</p>
                            <div class="input-group mb-2" style="width: 100%;">
                                <input type="text" class="form-control form-control-lg" placeholder="Your Email">
                                <div class="input-group-append">
                                    <button class="btn btn-primary font-weight-bold px-3">Sign Up</button>
                                </div>
                            </div>
                            <small>Format: JohnDoe@yahoo.com</small>
                        </div>
                    </div>
                    <!-- Newsletter End -->

                    <!-- Tags Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Tags</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            <div class="d-flex flex-wrap m-n1">
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Politics</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Corporate</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Health</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Education</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Science</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Foods</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Travel</a>
                            </div>
                        </div>
                    </div>
                    <!-- Tags End -->
                </div>
            </div>
        </div>
    </div>
    @endsection
    <!-- News With Sidebar End -->


    <!-- Footer Start -->
      @section("indexFooter")
       
   <div class="container-fluid bg-dark pt-5 px-sm-3 px-md-5 mt-5">
        <div class="row py-4">
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Get In Touch</h5>
                <p class="font-weight-medium"><i class="fa fa-map-marker-alt mr-2"></i>19 Ogugua Street Mainland Emene</p>
                <p class="font-weight-medium"><i class="fa fa-phone-alt mr-2"></i>+234-81-53-777-284</p>
                <p class="font-weight-medium"><i class="fa fa-envelope mr-2"></i>AprokoNg.com</p>
                <h6 class="mt-4 mb-3 text-white text-uppercase font-weight-bold">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square" href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Popular News</h5>
                @foreach($popular->slice(4) AS $popular)
                <div class="mb-3">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">{{$popular['tag']}}</a>
                        <a class="text-body" href=""><small>{{$popular->created_at->format(config("app.post_date"))}}</small></a>
                    </div>
                    <a class="small text-body text-uppercase font-weight-medium" href="">{{$popular['title']}}</a>
                </div>
                @if($popular['id'] == 8)
                @break
                @endif
                @endforeach
                
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Categories</h5>
                <div class="m-n1">
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Politics</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Entertainment</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Sports</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Foods</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Latest</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Flicker Photos</h5>
               
                <div class="row">
                    @foreach($flicker->slice(2) AS $flicker)
                    <div class="col-4 mb-3">
                        <a href=""><img class="w-100" src="/latestDoc/{{$flicker['file1']}}" alt=""></a>
                    </div>
                    @if($flicker['id'] == 8)
                   @break
                   @endif
                   @endforeach 
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4 px-sm-3 px-md-5" style="background: #111111;">
        <p class="m-0 text-center">&copy; <a href="#">Aproko.Ng</a>. All Rights Reserved. 
		
		<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
		Design by <a href="https://htmlcodex.com">Tech 360</a><br>
        Distributed by <a href="https://themewagon.com">Kamikaze Tech Crew</a></p>
    </div>
   
      @endsection
    <!--Footer Ends -->
    </body>

</html>