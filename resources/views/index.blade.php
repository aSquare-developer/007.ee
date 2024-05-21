<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>avalon</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="aSquare">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- awesome fontfamily -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- Tweaks for older IEs-->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>


   <body class="main-layout">
   
      <div class="wrapper">

         @include('sections.sidebar')

         <div id="content">

            @include('sections.home')
         
            @include('sections.about')

            @include('sections.services')

            <!-- section -->
            <section id="why_choose_us" class="dark_bg_blue layout_padding cross_layout padding_top_0">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full center">
                     <h2 class="heading_main orange_heading">Why Choose Us</h2>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-4">
                     <div class="full">
                        <div class="choose_blog text_align_center">
                              <img src="images/c1_icon.png" />
                              <h4>FINANCING MADE EASY</h4>
                              <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="full">
                        <div class="choose_blog text_align_center">
                              <img src="images/c2_icon.png" />
                              <h4>WIDE RANGE OF BRANDS</h4>
                              <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="full">
                        <div class="choose_blog text_align_center">
                              <img src="images/c3_icon.png" />
                              <h4>TRUSTED BY THOUSANDS</h4>
                              <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12 margin_top_30">
                     <div class="full center button_section margin_top_30">
                        <a class="margin_top_30" href="#">Read More</a>
                        </div>
                  </div>
               </div>
            </div>
            </section>
            <!-- end section -->

            <!-- section -->
            <section id="testimonial" class="dark_bg_orange layout_padding cross_layout_o padding_top_0">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full center">
                     <h2 class="heading_main orange_heading">Testimonials</h2>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                                 <ul class="carousel-indicators">
                                    <li data-target="#testimonial_slider" data-slide-to="0" class="active"></li>
                                    <li data-target="#testimonial_slider" data-slide-to="1"></li>
                                    <li data-target="#testimonial_slider" data-slide-to="2"></li>
                                 </ul>
                           <!-- The slideshow -->
                           <div class="carousel-inner">
                              <div class="carousel-item active">
                                 <div class="testomonial_section">
                                    <div class="full center">
                                    <div class="client_img">
                                       <img src="images/testimonial.png" alt="#" />
                                    </div>
                                    </div>
                                    <div class="full testimonial_cont text_align_center">
                                    <p><strong>Due markes</strong><br><strong class="ornage_color">Rental</strong><br><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</i></p>
                                    <div class="full text_align_center margin_top_30">
                                       <img src="images/testimonial_qoute.png">
                                    </div>
                                    </div>
                                 </div> 
                              </div>

                              <div class="carousel-item">

                                 <div class="testomonial_section">
                                    <div class="full center">
                                    <div class="client_img">
                                       <img src="images/testimonial.png" alt="#" />
                                    </div>
                                    </div>
                                    <div class="full testimonial_cont text_align_center">
                                    <p><strong>Due markes</strong><br><strong class="ornage_color">Rental</strong><br><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</i></p>
                                    <div class="full text_align_center margin_top_30">
                                       <img src="images/testimonial_qoute.png">
                                    </div>
                                    </div>
                                 </div>  

                              </div>

                              <div class="carousel-item">

                                 <div class="testomonial_section">
                                    <div class="full center">
                                    <div class="client_img">
                                       <img src="images/testimonial.png" alt="#" />
                                    </div>
                                    </div>
                                    <div class="full testimonial_cont text_align_center">
                                    <p><strong>Due markes</strong><br><strong class="ornage_color">Rental</strong><br><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</i></p>
                                    <div class="full text_align_center margin_top_30">
                                       <img src="images/testimonial_qoute.png">
                                    </div>
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
            <!-- end section -->

            @include('sections.contact')

            @include('sections.footer')

            @include('sections.copyright')

         </div>

      </div>

      
      @include('sections.scripts')

   </body>
</html>