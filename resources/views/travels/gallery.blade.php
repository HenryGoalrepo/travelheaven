  @extends('travels.warehouse')
  @section('content')
     <!-- Header Banner -->
     <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="6" data-background="{{asset('travel/img/slider/2.jpg')}}">
         <div class="container">
             <div class="row">
                 <div class="col-md-12 caption mt-90">
                     <h5>Images and Videos </h5>
                     <h1>Image  <span>& </span> Video  <span>Gallery </span></h1>
                 </div>
             </div>
         </div>
     </div>
     <!-- Image Gallery -->
     <section class="section-padding">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="section-subtitle">Images </div>
                     <div class="section-title">Image  <span>Gallery </span></div>
                 </div>
                 <div class="col-md-4 gallery-item">
                     <a href="{{asset('travel/img/slider/2.jpg')}}" title="" class="img-zoom">
                         <div class="gallery-box">
                             <div class="gallery-img">  <img src="{{asset('travel/img/slider/2.jpg')}}" class="img-fluid mx-auto d-block" alt="work-img" />  </div>
                         </div>
                     </a>
                 </div>
                 <div class="col-md-4 gallery-item">
                     <a href="{{asset('travel/img/slider/11.jpg')}}" title="" class="img-zoom">
                         <div class="gallery-box">
                             <div class="gallery-img">  <img src="{{asset('travel/img/slider/11.jpg')}}" class="img-fluid mx-auto d-block" alt="work-img" />  </div>
                         </div>
                     </a>
                 </div>
                 <div class="col-md-4 gallery-item">
                     <a href="{{asset('travel/img/slider/16.jpg')}}" title="" class="img-zoom">
                         <div class="gallery-box">
                             <div class="gallery-img">  <img src="{{asset('travel/img/slider/16.jpg')}}" class="img-fluid mx-auto d-block" alt="work-img" />  </div>
                         </div>
                     </a>
                 </div>

                 <div class="col-md-6 gallery-item">
                     <a href="{{asset('travel/img/slider/15.jpg')}}" title="" class="img-zoom">
                         <div class="gallery-box">
                             <div class="gallery-img">  <img src="{{asset('travel/img/slider/15.jpg')}}" class="img-fluid mx-auto d-block" alt="work-img" />  </div>
                         </div>
                     </a>
                 </div>
                 <div class="col-md-6 gallery-item">
                     <a href="{{asset('travel/img/slider/17.jpg')}}" title="" class="img-zoom">
                         <div class="gallery-box">
                             <div class="gallery-img">  <img src="{{asset('travel/img/slider/17.jpg')}}" class="img-fluid mx-auto d-block" alt="work-img" />  </div>
                         </div>
                     </a>
                 </div>

             </div>
         </div>
     </section>
     <!-- Video Gallery -->
     <section class="section-padding bg-lightnav">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="section-subtitle">Videos </div>
                     <div class="section-title">Video  <span>Gallery </span></div>
                 </div>
                 <!-- YouTubePopUp -->
                 <div class="col-md-6">
                     <div class="vid-area mb-30">
                         <div class="vid-icon">  <img src="{{asset('travel/img/slider/2.jpg')}}" alt="YouTube" />
                             <a class="video-gallery-button vid" href="https://youtu.be/ODJgp1ITowg">  <span class="video-gallery-polygon">
                                     <i class="ti-control-play"></i>
                                 </span>  </a>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="vid-area mb-30">
                         <div class="vid-icon">  <img src="{{asset('travel/img/slider/15.jpg')}}" alt="Vimeo" />
                             <a class="video-gallery-button vid" href="https://youtu.be/ODJgp1ITowg">  <span class="video-gallery-polygon">
                                     <i class="ti-control-play"></i>
                                 </span>  </a>
                         </div>
                     </div>
                 </div>

                 <!-- Magnific Popup {Custom, YouTube, Vimeo} -->
                 <!-- custom -->
                 <div class="col-md-4">
                     <div class="vid-area mb-30">
                         <div class="vid-icon">
                             <img src="{{asset('travel/img/slider/3.jpg')}}" class="img-fluid" alt="Custom" />
                             <a class="magnific-custom" href="{{asset('travel/travel-video.mp4')}}">
                                 <span class="video-gallery-icon"><i class="ti-control-play"></i></span>
                             </a>
                         </div>
                     </div>
                 </div>
                 <!-- youtube -->
                 <div class="col-md-4">
                     <div class="vid-area mb-30">
                         <div class="vid-icon">
                            <img src="{{asset('travel/img/slider/16.jpg')}}" class="img-fluid" alt="YouTube" />
                             <a class="video-gallery-button vid" href="https://youtu.be/ODJgp1ITowg">
                                 <span class="video-gallery-polygon"><i class="ti-control-play"></i></span>
                             </a>
                         </div>
                     </div>
                 </div>
                 <!-- vimeo -->
                 <div class="col-md-4">
                     <div class="vid-area mb-30">
                         <div class="vid-icon">  <img src="{{asset('travel/img/slider/1.jpg')}}" alt="Vimeo" />
                             <a class="video-gallery-button vid" href="https://vimeo.com/729120211">  <span class="video-gallery-polygon">
                                     <i class="ti-control-play"></i>
                                 </span>  </a>
                         </div>
                     </div>
                 </div>
             </div>


         </div>
     </section>
     <!-- Testimonials -->
     <section class="testimonials">
         <div class="background bg-img bg-fixed section-padding pb-0" data-background="{{asset('travel/img/slider/15.jpg')}}" data-overlay-dark="5">
             <div class="container">
                 <div class="row">
                     <!-- Call Now  -->
                     <div class="col-md-5 mb-30 mt-30">
                         <p><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></p>
                         <h5>We Provide Top Destinations __________ For You Book Now ___ Enjoy! </h5>
                         <div class="phone-call mb-10">
                             <div class="icon color-1"><span class="flaticon-phone-call"></span></div>
                             <div class="text">
                                 <p class="color-1">Call Now </p>  <a class="color-1" href="tel:855-333-4444">855 333 4444 </a>
                             </div>
                         </div>
                         <p><i class="ti-check"></i><small>Call us, it's toll-free. </small></p>
                     </div>
                     <!-- Booking From -->
                     <div class="col-md-5 offset-md-2">
                         <div class="testimonials-box">
                             <div class="head-box">
                                 <h6>Testimonials </h6>
                                 <h4>Travelers Reviews </h4>
                             </div>
                             <div class="owl-carousel owl-theme">
                                 <div class="item">
                                     <p>Travel dapibus asue metus ___ nec feusiate era the ____ hendreri the vemante the _____ insan toleon nectan feugiat ____ hendrerit necuis vesaire tours ______ neca ine the sene ____ habitan. </p>
                                     <div class="info">
                                         <div class="author-img">  <img src="{{asset('travel/img/team/04.png')}}" alt="" />  </div>
                                         <div class="cont">
                                             <div class="rating">  <i class="star active"></i>  <i class="star active"></i>  <i class="star active"></i>  <i class="star active"></i>  <i class="star active"></i>  </div>
                                             <h6>Nolan White </h6>  <span>Guest review </span>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="item">
                                     <p>Travel dapibus asue metus ___ nec feusiate era the ____ hendreri the vemante the _____ insan toleon nectan feugiat ____ hendrerit necuis vesaire tours ______ neca ine the sene ____ habitan. </p>
                                     <div class="info">
                                         <div class="author-img">  <img src="{{asset('travel/img/team/05.png')}}" alt="" />  </div>
                                         <div class="cont">
                                             <div class="rating">  <i class="star active"></i>  <i class="star active"></i>  <i class="star active"></i>  <i class="star active"></i>  <i class="star active"></i>  </div>
                                             <h6>Emily Brown </h6>  <span>Guest review </span>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="item">
                                     <p>Travel dapibus asue metus ___ nec feusiate era the ____ hendreri the vemante the _____ insan toleon nectan feugiat ____ hendrerit necuis vesaire tours ______ neca ine the sene ____ habitan. </p>
                                     <div class="info">
                                         <div class="author-img">  <img src="{{asset('travel/img/team/06.png')}}" alt="" />  </div>
                                         <div class="cont">
                                             <div class="rating">  <i class="star active"></i>  <i class="star active"></i>  <i class="star active"></i>  <i class="star active"></i>  <i class="star active"></i>  </div>
                                             <h6>Olivia Martin </h6>  <span>Guest review </span>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- Clients -->
     <section class="clients">
         <div class="container">
             <div class="row">
                 <div class="col-md-7">
                     <div class="owl-carousel owl-theme">
                         <div class="clients-logo">
                             <a href="#0"><img src="{{asset('travel/img/clients/1.png')}}" alt="" /></a>
                         </div>
                         <div class="clients-logo">
                             <a href="#0"><img src="{{asset('travel/img/clients/2.png')}}" alt="" /></a>
                         </div>
                         <div class="clients-logo">
                             <a href="#0"><img src="{{asset('travel/img/clients/3.png')}}" alt="" /></a>
                         </div>
                         <div class="clients-logo">
                             <a href="#0"><img src="{{asset('travel/img/clients/4.png')}}" alt="" /></a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
@endsection