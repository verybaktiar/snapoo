@extends('layouts.user.app')
@section('contents')
<main>
    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="slider-active">
            <div class="single-slider hero-overly  slider-height d-flex align-items-center" data-background="{{asset('user/assets/img/hero/h1_hero.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="hero__caption">
                                <h1>Find your <span>Next photo!</span> </h1>
                                <p>Pilih Paket Favoritmu</p>
                            </div>
                        </div>
                    </div>
                    <!-- Search Box -->
                    <div class="row">
                        <div class="col-xl-12">
                            <!-- form -->
                            <form action="#" class="search-box">
                                <div class="input-form mb-30">
                                    <input type="text" placeholder="Pilih Paket Favoritmu?">
                                </div>
                                <div class="select-form mb-30">
                                    <div class="select-itms">
                                        <select name="select" id="select1">
                                            <option value="">Pilih Paket</option>
                                            <option value="">Services-1</option>
                                            <option value="">Services-2</option>
                                            <option value="">Services-3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="search-form mb-30">
                                    <a href="#">Search</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!-- Our Services Start -->
    <div class="our-services servic-padding">
        <div class="container">
            <div class="row d-flex justify-contnet-center">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-tour"></span>
                        </div>
                        <div class="services-cap">
                            <h5>8000+ Our Local<br>Guides</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-pay"></span>
                        </div>
                        <div class="services-cap">
                            <h5>100% Trusted Tour<br>Agency</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-experience"></span>
                        </div>
                        <div class="services-cap">
                            <h5>28+ Years of Travel<br>Experience</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-good"></span>
                        </div>
                        <div class="services-cap">
                            <h5>98% Our Travelers<br>are Happy</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Services End -->
    <!-- Favourite Places Start -->
    <div class="favourite-place place-padding">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <span>FEATURED PHOTO Packages</span>
                        <h2>The Package</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($produk as $product)
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-place mb-30">
                        <div class="card card-product card-body p-lg-4 p3">
                            <img src="{{ asset('images/' . $product->gambar) }}" alt="" class="img-fluid">
                        </div>
                        <div class="place-cap">
                            <div class="place-cap-top">
                                <span><i class="fas fa-star"></i><span>8.0 Superb</span> </span>
                                <h3><a href="#" data-toggle="modal" data-target="#reservationModal{{$product->id}}">{{$product->nama_paket}}</a></h3>
                            </div>
                            <div class="place-cap-bottom">
                                <ul>
                                    <li><i class="far fa-clock"></i>3 Days</li>
                                    <li><i class="fas fa-map-marker-alt"></i>Los Angeles</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Reservation Modal -->
                <div class="modal fade" id="reservationModal{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel{{$product->id}}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="reservationModalLabel{{$product->id}}">Reservation Form</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Service Extras Card -->
                                <div class="card">
                                    <div class="card-body">
                                        <!-- Additional Person -->
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <div>
                                                <h6 class="card-title mb-0">+ Tambahan Orang</h6>
                                                <small class="card-text">Tambah orang untuk yang melebihi kapasitas dari paket</small>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="badge badge-secondary mr-2">Rp20,000</span>
                                                <button class="btn btn-outline-secondary btn-sm">-</button>
                                                <input type="text" class="form-control form-control-sm mx-2" value="0" style="width: 50px;">
                                                <button class="btn btn-outline-secondary btn-sm">+</button>
                                            </div>
                                        </div>
                                        <!-- Projected Background -->
                                        <!-- ... other items ... -->
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>
                                <button type="button" class="btn btn-primary">Next Step</button>
                            </div>
                            <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Submit</button>
                                </div> -->
                        </div>
                    </div>
                </div>


                @endforeach
            </div>
        </div>
    </div>
    </div>
    <!-- Favourite Places End -->
    <!-- Video Start Arera -->
    <div class="video-area video-bg pt-200 pb-200" data-background="{{asset('user/assets/img/service/video-bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="video-caption text-center">
                        <div class="video-icon">
                            <a class="popup-video" href="https://www.youtube.com/watch?v=1aP-TXUpNoU" tabindex="0"><i class="fas fa-play"></i></a>
                        </div>
                        <p class="pera1">Love where you're going in the perfect time</p>
                        <p class="pera2">Tripo is a World Leading Online</p>
                        <p class="pera3"> Tour Booking Platform</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Start End -->
    <!-- Support Company Start-->
    <div class="support-company-area support-padding fix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="support-location-img mb-50">
                        <img src="{{asset('user/assets/img/service/support-img.jpg')}}" alt="">
                        <div class="support-img-cap">
                            <span>Since 1992</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="right-caption">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2">
                            <span>About Our Company</span>
                            <h2>We are Go Trip <br>Ravels Support Company</h2>
                        </div>
                        <div class="support-caption">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                            <div class="select-suport-items">
                                <label class="single-items">Lorem ipsum dolor sit amet
                                    <input type="checkbox" checked="checked active">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="single-items">Consectetur adipisicing sed do
                                    <input type="checkbox" checked="checked active">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="single-items">Eiusmod tempor incididunt
                                    <input type="checkbox" checked="checked active">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="single-items">Ad minim veniam, quis nostrud.
                                    <input type="checkbox" checked="checked active">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <a href="#" class="btn border-btn">About us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Support Company End-->
    <!-- Testimonial Start -->
    <!-- Testimonial Start -->
    <div class="testimonial-area testimonial-padding" data-background="{{asset('user/assets/img/testmonial/testimonial_bg.jpg')}}">
        <div class="container ">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-11 col-lg-11 col-md-9">
                    <div class="h1-testimonial-active">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    <img src="{{asset('user/assets/img/icon/testimonial.png')}}" alt="">
                                    <p>Logisti Group is a representative logistics operator providing full range of ser
                                        of customs clearance and transportation worl.</p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                    <div class="founder-img">
                                        <img src="{{asset('user/assets/img/testmonial/Homepage_testi.png')}}" alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>Jessya Inn</span>
                                        <p>Co Founder</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    <img src="{{asset('user/assets/img/icon/testimonial.png')}}" alt="">
                                    <p>Logisti Group is a representative logistics operator providing full range of ser
                                        of customs clearance and transportation worl.</p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                    <div class="founder-img">
                                        <img src="{{asset('user/assets/img/testmonial/Homepage_testi.png')}}" alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>Jessya Inn</span>
                                        <p>Co Founder</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    <!-- Blog Area Start -->
    <div class="home-blog-area section-padding2">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <span>Our Recent news</span>
                        <h2>Tourist Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="{{asset('user/assets/img/blog/home-blog1.jpg')}}" alt="">
                            </div>
                            <div class="blog-cap">
                                <p> | Traveling</p>
                                <h3><a href="single-blog.html">Tips For Taking A Long-Term Trip With Kids.</a></h3>
                                <a href="#" class="more-btn">Read more »</a>
                            </div>
                        </div>
                        <div class="blog-date text-center">
                            <span>24</span>
                            <p>Now</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="{{asset('user/assets/img/blog/home-blog2.jpg')}}" alt="">
                            </div>
                            <div class="blog-cap">
                                <p> | Traveling</p>
                                <h3><a href="single-blog.html">Tips For Taking A Long-Term Trip With Kids.</a></h3>
                                <a href="#" class="more-btn">Read more »</a>
                            </div>
                        </div>
                        <div class="blog-date text-center">
                            <span>24</span>
                            <p>Now</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Area End -->

</main>
@endsection