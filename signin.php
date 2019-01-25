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
              <h4>Welcome back!</h4>
              <h6 class="font-weight-light">Sign In</h6>
              <!--<form class="pt-3" action="include/validate_signin.inc.php" method="POST">-->
              <form class="pt-3" id="signin">
                <div class="form-group">
                  <label for="exampleInputEmail">Email address</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                      <i class="fas fa-at icon-color"></i>
                      </span>
                    </div>
                    <input type="email" name="email" class="form-control form-control-lg border-left-0" id="inputEmail" placeholder="Username">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword">Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                      <i class="fas fa-lock icon-color"></i>                      
                    </span>
                    </div>
                    <input type="password" name="password" class="form-control form-control-lg border-left-0" id="inputPassword" placeholder="Password">                        
                  </div>
                </div>
                <div class="login-error"></div>
                <div class="my-3">
                  <button class="btn btn-primary btn-block" id="loginbtn" name="loginbtn">LOGIN</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="signup.php" class="text-primary">Create</a>
                </div>
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
  <script src="js/login.js"></script>
</body>

</html>
