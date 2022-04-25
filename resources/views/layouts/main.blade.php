<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="fontawsome/baacebf324.js"></script>
    <link rel="stylesheet" href="css/jquery.timepicker.min.css">
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="css/toastr.min.css">
    <script src="js/toastr.min.js"></script>
    <link href="css/select2.min.css" rel="stylesheet" />
    <script src="js/select2.min.js"></script>

    <!-- <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">  
    <script type="text/javascript" charset="utf8" src="js/jquery.dataTables.min.js"></script> -->

   

    <!-- date picker -->
    
    <link rel="stylesheet" href="css/jquery-ui.css">
    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/jquery-ui.js"></script>

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
                                <img class="profile_avatar" src="images/profile_logo.jpg">{{ Auth::user()->name }} 
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
    <script src="js/loadingoverlay.min.js" type="text/javascript"></script>
 
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert2@11.js"></script>

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
    </script>
     @yield('javascript')
  </body>
  
</html>