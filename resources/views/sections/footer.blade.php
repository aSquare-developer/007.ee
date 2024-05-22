<!-- footer -->
<footer class="p-5">
    <div class="container">
      <div class="row">
         <div class="col-md-12">
           <div class="full">
            <div class="logo">
               @php
                   [$locale] = explode('/', request()->path()) ?? ['et'];
               @endphp
               <a href="/{{ $locale }}"><img src="images/logo.png" alt="#"></a> 
           </div>
           </div>
         </div>
         <div class="col-md-12">
            <div class="full">
              <h4 class="widget_heading">{{ __('Contact Details') }}</h4>
              <div class="full cont_footer">
                <p>
                  {{ __('Address') }}<br>
                  {{ __('Phone') }}: {{ __('Phone number') }} / {{ __('Phone number 2') }}<br>
                  {{ __('Email Address') }}
               </p>
              </div>
            </div>
         </div>
      </div>
    </div>
 </footer>
 <!-- end footer -->