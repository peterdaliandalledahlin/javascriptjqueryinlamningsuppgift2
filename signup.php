<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <link rel="stylesheet" href="vendors/iconfonts/mdi/font/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/default.css">
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body class="sidebar-dark">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                LOGO
              </div>
              <h4>Welcome!</h4>
              <h6 class="font-weight-light">Sign Up</h6>
              <form class="pt-3" action="include/validate_signup.inc.php" method="POST">
                <div class="form-group">
                <label for="exampleInputEmail">First name</label>
                <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                    <span class="input-group-text bg-transparent border-right-0">
                        <i class="fas fa-user icon-color"></i>
                    </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0" id="firstname" placeholder="First name" name="firstname">
                </div>
                </div>
                <div class="form-group">
                <label for="exampleInputPassword">Last name</label>
                <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                    <span class="input-group-text bg-transparent border-right-0">
                        <i class="fas fa-user icon-color"></i>
                    </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0" id="lastname" placeholder="Last name" name="lastname">                        
                </div>
                </div>
                <div class="form-group">
                <label for="exampleInputPassword">Email</label>
                <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                    <span class="input-group-text bg-transparent border-right-0">
                        <i class="fas fa-at icon-color"></i>
                    </span>
                    </div>
                    <input type="email" class="form-control form-control-lg border-left-0" id="email" placeholder="Email" name="email">                        
                </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword">Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                      <i class="fas fa-lock icon-color"></i>                      </span>
                    </div>
                    <input type="password" class="form-control form-control-lg border-left-0" id="password" placeholder="Password" name="password">                        
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword">Confirm Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                      <i class="fas fa-lock icon-color"></i>                      </span>
                    </div>
                    <input type="password" class="form-control form-control-lg border-left-0" id="confirm_password" placeholder="Confirm Password" name="confirm_password">                        
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword">Address</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fas fa-map-marker-alt icon-color"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0" id="addressline" placeholder="Address" name="addressline">                        
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword">Zipcode</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fas fa-file-archive icon-color"></i>
                      </span>
                    </div>
                    <input type="number" pattern="[0-9]{5}" title="Five digit zip code" class="form-control form-control-lg border-left-0" id="postalcode" placeholder="Confirm Password" name="postalcode">                        
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword">City</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fas fa-city icon-color"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0" id="city" placeholder="City" name="city">                        
                  </div>
                </div>
<!--
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
-->
                <div class="my-3">
                  <!--<a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" id="submit" name="submit">SIGN UP</a>-->
                  <button class="btn btn-primary btn-block" type="submit" id="submit" name="submit">SIGN UP</button>

                </div>
<!--
                <div class="mb-2 d-flex">
                  <button type="button" class="btn btn-facebook auth-form-btn flex-grow mr-1">
                    <i class="mdi mdi-facebook mr-2"></i>Facebook
                  </button>
                  <button type="button" class="btn btn-google auth-form-btn flex-grow ml-1">
                    <i class="mdi mdi-google mr-2"></i>Google
                  </button>
                </div>

                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register-2.html" class="text-primary">Create</a>
                </div>
-->
              </form>
            </div>
          </div>
          <div class="col-lg-6 login-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2019  EPN Sverige AB.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
</body>

</html>
