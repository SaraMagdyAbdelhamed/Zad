<!DOCTYPE html>
<html lang="{{ Session::get('locale') }}">
  <head>
    <!-- =====================================================-->
    <!-- ==================HEAD=============================-->
    <!-- =====================================================-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.css">
    <meta name="msapplication-TileColor" content="#ee4a7e">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="theme-color" content="#281160">

    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- =============== APP TITLE ===============-->
    <title>@lang('keywords.website_name')</title>
    <!-- =============== APP STYLES ===============-->
    <link rel="stylesheet" href="{{ asset( App::isLocale('ar') ? 'css/style__0__rtl.css' : 'css/style__0__ltr.css') }}">
    <!-- =============== APP SCRIPT ===============-->
    <script src="{{ asset('js/modernizr.js') }}"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    {{-- Custom CSS --}}
  </head>
  <body>
    <div >
      <div class="layout_sidebar">
        <div class="wrapper">
          
          <div class="full-body">
            {{-- <div class="overlay-toggle-up"></div> --}}
            <!-- sidebar-->
            <!-- ==============================================================-->
            <!-- ============================SIDEBAR==============================-->
            <!-- ==============================================================-->
           
            <!-- Page content-->
            <div class="container-fluid">

              

              {{-- yield data --}}
              @yield('content')
                
            </div>
          </div>
          <!-- Page footer-->
        </div>
      </div>
        </div>
        <div>
          <footer>
            <!-- =====================================================-->
            <!-- ==================FOOTER=============================-->
            <!-- =====================================================-->
            <div class="clear-fix"></div>
            <div class="footer--1 text-center     bradius--noborder bshadow--3">
              @if (\App::isLocale('en'))
              <p>
                all rights reserved to ©<span class="cp bradius--noborder bshadow--0">SaraMagdy</span>2018</p>
              @else
              <p>
                  جميع الحقوق محفوظة  ©<span class="cp     bradius--noborder bshadow--0">ساره مجدي </span>2018</p>
              @endif
            </div>
          </footer>
        
      </div>
    
    <!-- =============== APP MAIN SCRIPTS ===============-->
    
    <script type="text/javascript" src="{{ asset('js/scripts.min.js') }}"></script>
    <script type="text/javascript">
      $(function () {
        $('.datepicker-popup').pickadate();
        $('.timepicker-popup').pickatime();
      });
      
    </script>
    <script type="text/javascript">
      $(function () {
        $('.datepicker').datepicker({autoclose: true});
        $(".timepicker").timepicker({showInputs: false});
      });
      
    </script>
    <script>
     $(function () {
        $('.date_range_picker').daterangepicker();
        $('.date_time_range_picker').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
      });
       $(document).ready(function() {
        $(window).keydown(function(event){
          if(event.keyCode == 13) {
            event.preventDefault();
            return false;
          }
        });
      });
    $(function () {
        $(".select2").select2();
      });
      
      
    </script>
    <!-- =============== PAGE VENDOR SCRIPTS ===============-->
   
@yield('js')
  </body>
</html>
