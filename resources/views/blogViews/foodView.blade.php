@extends('blog.singlePageMaster')
@section("Content1")
 <!-- Breaking News Start -->
    <div class="container-fluid mt-5 mb-3 pt-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div class="section-title border-right-0 mb-0" style="width: 180px;">
                            <h4 class="m-0 text-uppercase font-weight-bold">Trending</h4>
                        </div>
                        <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center bg-white border border-left-0"
                            style="width: calc(100% - 180px); padding-right: 100px;">
                            <div class="text-truncate"><a class="text-secondary text-uppercase font-weight-semi-bold" href="">Nigeria Spends $600m Importing Palm Oil Annually</a></div>
                            <div class="text-truncate"><a class="text-secondary text-uppercase font-weight-semi-bold" href="">Multichoice Succumbs, Readjusts Subscription Price</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breaking News End -->


    <!-- News With Sidebar Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- News Detail Start -->

                    {{-- <form action="/foodpost/{id}" method="get">
                     @csrf
                 
                     <button>Back</button>
                    </form> --}}
                    <br>
                    <div class="position-relative mb-3">
                        <img class="img-fluid w-100" src="/foodDoc/{{$viewpost['file1']}}" style="object-fit: cover;">
                        <div class="bg-white border border-top-0 p-4">
                            <div class="mb-3">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="">{{$viewpost['tag']}}</a>
                                <a class="text-body" href="">{{$viewpost->created_at->format(config('app.post_date'))}}</a>
                            </div>
                            <h1 class="mb-3 text-secondary text-uppercase font-weight-bold">{{$viewpost['title']}}</h1>
                            <p>{{$viewpost['body']}}</p> 
                        </div>
                        <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle mr-2" src="/docs/{{$viewpost->userPost->pics}}" width="25" height="25" alt="">
                                <span>{{$viewpost->userPost->name}}</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="ml-3"><i class="far fa-eye mr-2"></i>12345</span>
                                <span class="ml-3"><i class="far fa-comment mr-2"></i>123</span>
                            </div>
                        </div>
                    </div>
                    <!-- News Detail End -->


                     <!-- Comment List Start -->
                     <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">{{$countComments}} Comments</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-4">
                            @foreach($vComment AS $comments)
                                @if($comments['food_id'] == $viewpost['id'])
                            <div class="media mb-4">
                                
                                <img src="/docs/{{$comments->userCom->pics}}" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <h6><a class="text-secondary font-weight-bold" href="">{{$comments->userCom->name}}</a> <small><i>{{$comments->created_at->format(config('app.post_date'))}}</i></small></h6>
                                    <p>{{$comments['comment']}}</p>
                                    <button class="btn btn-sm btn-outline-secondary">Reply</button>
                                </div>
                               
                            </div>
                            @endif
                            @endforeach
                            
                        </div>
                    </div>
                    <!-- Comment List End -->

                    <!-- Comment Form Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Leave a comment</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-4">
                            <form action="/fcomment" method="POST">
                            @csrf
                                <input type="hidden" name="id" value="{{$viewpost['id']}}">
                                <div class="form-group">
                                    <label for="message">Message *</label>
                                    <textarea id="message" cols="30" rows="5" class="form-control" name="comment"></textarea>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="submit" value="Leave a comment"
                                        class="btn btn-primary font-weight-semi-bold py-2 px-3">
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Comment Form End -->
            @endsection

        {{-- TRENDING NEWS SECTION--}}
         @section('Content2')
                <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Trending News</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            @foreach($viewtrends AS $trend)
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="Blog/assets/img/news-110x110-1.jpg" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">{{$trend['tag']}}</a>
                                        <a class="text-body" href=""><small>{{$trend->created_at->format(config('app.post_date'))}}</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">{{$trend['title']}}</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
       
       @endsection
    {{-- TRENDING NEWS SECTION ENDS--}}


      <!--Footer-->
@section("footerDiv")
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
    <!-- Footer End -->