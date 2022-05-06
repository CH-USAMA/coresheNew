<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('fontawsome/baacebf324.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.min.css') }}">
    <script src="{{ asset('js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
  
    <link rel="stylesheet" type="text/css" href="{{ asset('css/toastr.min.css') }}">
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>

    <!-- <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">  
    <script type="text/javascript" charset="utf8" src="{{ asset('js/jquery.dataTables.min.js') }}"></script> -->

   

    <!-- date picker -->
    
    <link rel="stylesheet" href="css/jquery-ui.css">
    <script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>

    <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->


    <title>Voto Control</title>
  </head>
  <body style="background: #F5FCFF;">
   <div class="home_body">
      <!-- header nav start here  -->
      <div class="">
          <nav class="navbar navbar-expand-lg navbar-light">
              <img src="images/Corche_Logo.png">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
          
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto pl-5">
              @if(Auth::user()->role == 'Candidate')
                  <li class="nav-item  mx-2">
                      <a class="nav-link" href="#">
                        <span class="{{ Route::currentRouteName() == 'home' ? 'active':''  }}" >Dashboard</span><span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item mx-2">
                      <a class="nav-link" href="#">
                        <span class="">Staff </span>
                      </a>
                  </li>
                  @endif
                  @if(Auth::user()->role == 'Staff')
                  <li class="nav-item  mx-2">
                      <a class="nav-link" href="{{ route('home')}}">
                        <span class="{{ Route::currentRouteName() == 'home' ? 'active':''  }}">Documents</span><span class="sr-only">(current)</span></a>
                  </li>
                  
                  @endif
                  @if(Auth::user()->role == 'Admin')
                  <li class="nav-item  mx-2">
                            <a class="nav-link" href="{{ route('home')}}">
                                <span class="{{ Route::currentRouteName() == 'home' ? 'active':''  }}">Elections</span></a>
                  </li>
                  <li class="nav-item mx-2">
                            <a class="nav-link" href="{{ route('systemCandidates')}}">
                                <span class="{{ Route::currentRouteName() == 'systemCandidates' ? 'active':''  }}">Candidates</span>
                            </a>
                  </li>
                  @endif
              </ul>
          
              <form class="form-inline my-2 my-lg-0 d-flex flex-row-reverse">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle profile_button" type="button" id="dropdownMenu2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                style="background-color: transparent;">
                                <img class="profile_avatar" src="{{ asset('images/profile_logo.jpg') }}">{{ Auth::user()->name }} 
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <button class="dropdown-item" type="button">Profile</button>
                                <a class="dropdown-item" href="{{ route('logoutCustom') }}">Log out</a>
                            </div>
                        </div>
                    </form>
              </div>
          </nav>
      </div>
      <!-- end here -->
      @yield('content')
         </div>
    <script src="{{ asset('js/loadingoverlay.min.js') }}" type="text/javascript"></script>
 
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert2@11.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script type="text/javascript">
       $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
      $( document ).ready(function() {
        $('.upload_btn').click(() => {
              $.LoadingOverlay("show");
              $('.main_content').addClass('d-none');
              setTimeout(function () {
                  $.LoadingOverlay("hide");
                  $('.down_content').removeClass('d-none');
              }, 2000);
              $("#start_date").datepicker();
              $( "#end_date" ).datepicker();
            });

        // $.LoadingOverlay("show");

        // setTimeout(function () {
        //     $.LoadingOverlay("hide");
        // }, 3000);
    });

    @if(Session::has('message'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('message') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.info("{{ session('info') }}");
  @endif

  @if(Session::has('warning'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.warning("{{ session('warning') }}");
  @endif
    </script>
     @yield('javascript')
  </body>
  
</html>