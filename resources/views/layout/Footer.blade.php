  <!-- Start Footer -->
  <footer class="st-site-footer st-sticky-footer st-dynamic-bg" data-src="assets/img/footer-bg.png">
    <div class="st-main-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="st-footer-widget">
              <div class="st-text-field">
                <img src="{{asset("assets/logo.png")}}" alt="Nischinto" class="st-footer-logo">
                <div class="st-height-b25 st-height-lg-b25"></div>
                <div class="st-footer-text">{{ __('message.footer_desc') }}</div>
                <div class="st-height-b25 st-height-lg-b25"></div>
                <ul class="st-social-btn st-style1 st-mp0">
                  <li><a href="https://www.facebook.com/profile.php?id=100092834422106"><i class="fab fa-facebook-square"></i></a></li>
                  <li><a href="https://www.instagram.com/tiraz_clinic/"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="https://twitter.com/Tiraz_Clinic"><i class="fab fa-twitter-square"></i></a></li>
                </ul>
              </div>
            </div>
          </div><!-- .col -->
          <div class="col-lg-3">
            <div class="st-footer-widget">
              <h2 class="st-footer-widget-title">{{ __('message.useful_links')}}</h2>
              <ul class="st-footer-widget-nav st-mp0">
                <li><a href="#"><i class="fas fa-chevron-right"></i>{{__('message.question_title')}}</a></li>
                <li><a href="#"><i class="fas fa-chevron-right"></i>{{__('message.weekly_timetable')}}</a></li>
              </ul>
            </div>
          </div><!-- .col -->
          <div class="col-lg-3">
            <div class="st-footer-widget">
              <h2 class="st-footer-widget-title">{{ __('message.departmemt_title') }}</h2>
              <ul class="st-footer-widget-nav st-mp0">
                <li><a href="#department"><i class="fas fa-chevron-right"></i>{{ __('message.hair_transplant') }}</a></li>
                <li><a href="#department"><i class="fas fa-chevron-right"></i>{{ __('message.dental_aesthetics') }}</a></li>
                <li><a href="#department"><i class="fas fa-chevron-right"></i>{{ __('message.facial_plastic_surgery') }}</a></li>
                <li><a href="#department"><i class="fas fa-chevron-right"></i>{{ __('message.obesity_surgery') }}</a></li>
                <li><a href="#department"><i class="fas fa-chevron-right"></i>{{ __('message.plastic_surgeries') }}</a></li>
              </ul>
            </div>
          </div><!-- .col -->
          <div class="col-lg-3">
            <div class="st-footer-widget">
              <h2 class="st-footer-widget-title">{{__('message.contact_us_title')}}</h2>
              <ul class="st-footer-contact-list st-mp0">
               <li><span class="st-footer-contact-title">{{__('message.email_address')}}:</span> {{ $Email }}</li>
                <li><span class="st-footer-contact-title">{{__('message.phone_number')}}:</span> {{ $phoneNumber }}</li>
              </ul>
            </div>
          </div><!-- .col -->
        </div>
      </div>
    </div>
    <div class="st-copyright-wrap">
      <div class="container">
        <div class="st-copyright-in">
          <div class="st-left-copyright">
            <div class="st-copyright-text">Copyright {{date('Y')}}. Design by Mouhanned Krayem</div>
          </div>
          <div class="st-right-copyright">
            <div id="st-backtotop"><i class="fas fa-angle-up"></i></div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->
