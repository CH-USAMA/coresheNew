<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/baacebf324.js" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <title>Sign In Page</title>
  </head>
  <body>
    <div class="row no-gutters">

        <div class="col no-gutters">
            <div class="leftside">
                <div class="form-div">
                <form method="POST" action="{{ route('login') }}">
                @csrf
                        <div class="    -row d-flex justify-content-center">
                        
                            <div class="form-group col-10">
                                <h2 class="text_comon">Sign in to  Your Account</h2>
                                
                                <a class="heading_color">Login with Email and Password. In case of any problem you can contact us.</a>
                            </div>
                        </div>
                        <div class="form-row d-flex justify-content-center">
                            <div class="form-group col-10">
                                <label for="email" class="text_comon">Email</label>
                                <input type="email"  class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Enter your Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row d-flex justify-content-center">
                            <div class="form-group col-10">
                                <label for="password" class="text_comon">Password</label>
                                <a href="{{ route('forget.password.get') }}" class="sign_in_text float-right">Forgot Password?</a>
                                <input type="password"  class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Enter your Password" >
                                <label for="password" class="pass_limit heading_color">Minimum 8 characters</label>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>           
                        </div>
                        <div class="form-row d-flex justify-content-center">
                            <div class="form-group col-10">
                                <button type="submit" class="btn btn-primary btn-block" > SIGN UP</button>
                            </div>
                            <!-- <p class="already_text">Don't have an account? <a class="sign_in_text">Sign up here </a></p> -->
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col no-gutters rightsideMainDIv">
            <div class="rightside">
                <img class="main_image "src="images/SignIn.png">
            </div>
        </div>
    </div>




     
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>