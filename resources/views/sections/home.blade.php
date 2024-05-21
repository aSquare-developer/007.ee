<!-- section -->
<section id="home" class="top_section">
    <div class="row">
       <div class="col-lg-12">
          <!-- header -->
          <header>
             <!-- header inner -->
             <div class="container">
                <div class="row">
                   <div class="col-lg-3 logo_section">
                      <div class="full">
                         <div class="center-desk">
                            <div class="logo">
                                @php
                                    [$locale] = explode('/', request()->path()) ?? ['et'];
                                @endphp
                                <a href="/{{ $locale }}"><img src="images/logo.png" alt="#"></a> 
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-9">
                      <div class="right_header_info">
                         <ul>
                           <li>
                              <a href="tel:+37255515007">
                                 <img style="margin-right: 15px;" src="images/phone_icon.png" alt="#" />{{ __('Phone number') }}
                              </a>
                           </li>
                           <li>
                              <a href="mailto: info@007.ee">
                                 <img style="margin-right: 15px;" src="images/mail_icon.png" alt="#" />{{ __('Email Address') }}
                              </a>
                           </li>
                           <li>@include('partials/language_switcher')</li>
                           <li>
                              <button type="button" id="sidebarCollapse">
                                 <img src="images/menu_icon.png" alt="#" />
                              </button>
                           </li>
                         </ul>
                      </div>
                   </div>
                </div>
             </div>
             <!-- end header inner -->
          </header>
          <section>
             <div class="container-fluid">
                <div class="row">
                   <div class="col-md-5">
                      <div class="full slider_cont_section">
                         <h4>{{ __('Welcome') }}</h4>
                         <h3>AUTOHAUS</h3>
                         <p>{{ __('Description') }}</p>
                         <div class="button_section">
                            <a href="#contact">{{ __('Contact with us') }}</a>
                            <a href="#about">{{ __('About us')}}</a>
                         </div>
                      </div>
                   </div>
                   <div class="col-md-7">
                   <div id="slider_main" class="carousel slide" data-ride="carousel">
                         <!-- The slideshow -->
                         <div class="carousel-inner">
                            <div class="carousel-item active">
                               <img src="images/slider_1.png" alt="#" />
                            </div>
                            <div class="carousel-item">
                               <img src="images/slider_2.png" alt="#" />
                            </div>
                         </div>
                         <div class="full center">
                            <a class="carousel-control-prev" href="#slider_main" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            </a>
                            <a class="carousel-control-next" href="#slider_main" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </section>
          <!-- end header -->
       </div>
    </div>
 </section>
 <!-- end section -->