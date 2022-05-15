@extends('layout.app')


@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_5.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate text-center mb-5">
          <h1 class="mb-2 bread">About</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>About <i class="fa fa-chevron-right"></i></span></p>
        </div>
      </div>
    </div>
  </section>

<section class="ftco-section ftco-no-pt ftco-no-pb" style="background-image: url(images/about.jpg);">
    <div class="container">
     <div class="row d-flex">
       <div class="col-md-6 d-flex" >
        <div class="img img-2 w-100 mr-md-2" style="background-image: url(images/bg_6.jpg);"></div>
        <div class="img img-2 w-100 ml-md-2" style="background-image: url(images/bg_4.jpg);"></div>
      </div>
      <div class="col-md-6 ftco-animate makereservation p-4 p-md-5">
        <div class="heading-section ftco-animate mb-5">
         <span class="subheading">This is our secrets</span>
         <h2 class="mb-4">Perfect Ingredients</h2>
         <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
         </p>
         <p><a href="/reservation" class="btn btn-primary">RESERVATION</a></p>
       </div>
     </div>
     
   </div>
   </div>
   </section>
   <section class="ftco-section contact-section bg-light">
    <div class="container">
      <div class="row d-flex contact-info">
        <div class="col-md-12">
          <h2 class="h4 font-weight-bold">Address Information</h2>
        </div>
        <div class="w-100"></div>
        <div class="col-md-3 d-flex">
         <div class="dbox">
           <p><span>Address:</span><br> 198 West 21th Street, Suite 721 New York NY 10016</p>
         </div>
       </div>
       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d26512.581269905844!2d35.5172352!3d33.8362368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slb!4v1652354235255!5m2!1sen!2slb" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>
      </div>
    </div>
   </section>
   
   {{-- <section class="ftco-section contact-section bg-light">
    <div class="container">
      <div class="row d-flex contact-info">
        
     </div>
   </div>
  </section> --}}
  {{-- <section class="ftco-section ftco-no-pt contact-section">
    <div class="container">
     <div class="row d-flex align-items-stretch no-gutters">
      <div class="col-md-6 p-5 order-md-last">
       <h2 class="h4 mb-5 font-weight-bold">Contact Us</h2>
       -- <form action="#">
         <div class="form-group">
           <input type="text" class="form-control" placeholder="Your Name">
         </div>
         <div class="form-group">
           <input type="text" class="form-control" placeholder="Your Email">
         </div>
         <div class="form-group">
           <input type="text" class="form-control" placeholder="Subject">
         </div>
         <div class="form-group">
           <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
         </div>
         <div class="form-group">
           <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
         </div>
       </form> 
     </div>
     <div class="col-md-6 d-flex align-items-stretch">
       
     </div>
   </div>
   </div>
   </section> --}}
   
   {{-- <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpg);" data-stellar-background-ratio="0.5">
    <div class="container">
     <div class="row d-md-flex align-items-center justify-content-center">
      <div class="col-lg-10">
       <div class="row d-md-flex align-items-center">
         <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
           <div class="block-18">
             <div class="text">
               <strong class="number" data-number="100">0</strong>
               <span>Tasty Dishes</span>
             </div>
           </div>
         </div>
         <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
           <div class="block-18">
             <div class="text">
               <strong class="number" data-number="4000">0</strong>
               <span>Dishes Served</span>
             </div>
           </div>
         </div>
         <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
           <div class="block-18">
             <div class="text">
               <strong class="number" data-number="10">0</strong>
               <span>Restaurants</span>
             </div>
           </div>
         </div>
         <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
           <div class="block-18">
             <div class="text">
               <strong class="number" data-number="10000">0</strong>
               <span>Happy Customers</span>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   </div>
   </section> --}}
   
@endsection