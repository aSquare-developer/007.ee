<!-- section -->
<section id="contact" class="dark_bg_orange p-5">
    <div class="container">
       <div class="row">
         <div class="col-md-12">
           <div class="full center">
             <h2 class="heading_main orange_heading">{{ __('Contact with us') }}</h2>
           </div>
         </div>
       </div>
       <div class="row">
          <div class="col-md-12">
             <div class="full">
                <div class="contact_form">
                    <form method="POST" action="{{ route('contact.send.message') }}">
                      @csrf
                      <fieldset class="row">
                        <div class="col-md-12">
                            <div class="full field">
                                @if ($errors->has('email'))
                                  <span class="text-danger">
                                    <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                                @endif
                                <input type="text" placeholder="{{ __('Email') }}" name="email" autocomplete="off"/>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="full field">
                                @if ($errors->has('message'))
                                  <span class="text-danger">
                                    <strong>{{ $errors->first('message') }}</strong>
                                  </span>
                                @endif
                                <textarea name="message" placeholder="{{ __('Message') }}"></textarea>
                            </div>
                        </div>
                        <div class="col-md-3">
                          <div class="full field">
                              @if ($errors->has('captcha'))
                                <span class="text-danger">
                                  <strong>{{ $errors->first('captcha') }}</strong>
                                </span>
                              @endif
                              {!! Captcha::img() !!}
                              <input type="text" name="captcha" placeholder="{{ __('Captcha Message') }}"/>
                          </div>
                        </div>
                        <div class="col-md-12">
                            <div class="full center">
                                <button class="submit_bt">{{ __('Send') }}</button>
                            </div>
                        </div>
                      </fieldset>
                    </form>
                </div>
             </div>
          </div>
        </div>
    </div>
  </section>
  <!-- end section -->