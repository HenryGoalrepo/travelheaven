@extends('travels.warehouse')
@section('content')
     <!-- Header Banner -->
     <div class="banner-header section-padding back-position-center valign bg-img bg-fixed" data-overlay-dark="5" data-background="{{asset('travel/img/slider/15.jpg')}}">
         <div class="container">
             <div class="row">
                 <div class="col-md-12 caption mt-90">
                     <h5>Get in touch </h5>
                     <h1>Contact  <span>Us </span></h1>
                 </div>
             </div>
         </div>
     </div>
     <!-- Contact -->
     <section class="contact section-padding">
         <div class="container">
             <div class="row mb-90">
                 <div class="col-md-6 mb-60">
                     <h3>Travel Agency Inc. </h3>
                     <p>Travel duru nisl quam __________ ac quam nec odio _________ sceisue the aucan ligula. ____ varius natoque penatibus et ______ dis parturient monte nascete _________ mus nellentesque habitant morbine. </p>
                     <div class="phone-call mb-30">
                         <div class="icon"><span class="flaticon-phone-call"></span></div>
                         <div class="text">
                             <p>Phone </p>  <a href="tel:855-333-4444">855 333 4444 </a>
                         </div>
                     </div>
                     <div class="phone-call mb-30">
                         <div class="icon"><span class="flaticon-message"></span></div>
                         <div class="text">
                             <p>e-Mail Address </p>  <a href="mailto:info@luxuryhotel.com">info@luxuryhotel.com </a>
                         </div>
                     </div>
                     <div class="phone-call">
                         <div class="icon"><span class="flaticon-placeholder"></span></div>
                         <div class="text">
                             <p>Location </p> 1616 Broadway NY, ___ York 10001
                             <br />United States of America
                         </div>
                     </div>
                 </div>
                 <div class="col-md-5 mb-30 offset-md-1">
                     <div class="sidebar">
                         <div class="right-sidebar">
                             <div class="right-sidebar item">
                                 <h2>Get in touch </h2>
                                 <form method="post" class="right-sidebar item-form contact__form" action="mail.php">
                                     <!-- form message -->
                                     <div class="row">
                                         <div class="col-12">
                                             <div class="alert alert-success contact__msg" style="display: none" role="alert"> Your message was ____ successfully.  </div>
                                         </div>
                                     </div>
                                     <!-- form elements -->
                                     <div class="row">
                                         <div class="col-md-6 form-group">
                                             <input name="name" type="text" placeholder="Your Name *" required="" />
                                         </div>
                                         <div class="col-md-6 form-group">
                                             <input name="email" type="email" placeholder="Your Email *" required="" />
                                         </div>
                                         <div class="col-md-6 form-group">
                                             <input name="phone" type="text" placeholder="Your Number *" required="" />
                                         </div>
                                         <div class="col-md-6 form-group">
                                             <input name="subject" type="text" placeholder="Subject *" required="" />
                                         </div>
                                         <div class="col-md-12 form-group">
                                             <textarea name="message" id="message" cols="30" rows="4" placeholder="Message *" required=""></textarea>
                                         </div>
                                         <div class="col-md-12">
                                             <button class="butn-dark"><a href="#0"><span>Send Message </span></a></button>
                                         </div>
                                     </div>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- Map Section -->
             <div class="row">
                 <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6709.523548051831!2d-79.93717757324818!3d32.77205514123956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88fe7a1ae84ff639%3A0xe5c782f71924a526!2s24%20King%20St%2C%20Charleston%2C%20SC%2029401%2C%20USA!5e0!3m2!1sen!2sin!4v1685949290533!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
