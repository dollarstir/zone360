<?php include 'top.php'; ?>
  <body>
    <!-- Preloader-->
    <?php include 'nav.php'; ?>
    <!-- Breadcrumb -->
    <div class="breadcrumb-wrapper breadcrumb-bg-light">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12">
            <div class="breadcrumb-content">
              <h2 class="breadcrumb-title">Login </h2>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mb-120 d-block"></div>
    <!-- Register -->
    <div class="register-area">
      <div class="container">
        <div class="row g-4 g-lg-5 align-items-center justify-content-between">
          <!-- Thumbnail -->
          <div class="col-12 col-lg-6">
            <div class="register-thumbnail"><img src="img/illustrator/hero-3.png" alt=""></div>
          </div>
          <div class="col-12 col-lg-6">
            <div class="card register-card bg-gray p-2 p-sm-4">
              <div class="card-body">
                <h4>Welcome Back!</h4>
                <p>Didn't have an account?<a class="ms-2" href="register">Sign Up</a></p>
                <!-- Register Form -->
                <div class="register-form my-4 my-lg-5">
                  <form action="#" method="post">
                    <div class="form-group mb-3">
                      <input class="form-control rounded-0" type="email" placeholder="Email Address" name="email" required>
                    </div>
                    <div class="form-group mb-3">
                      <label class="label-psswd" for="registerPassword">Show</label>
                      <input class="form-control rounded-0" id="registerPassword" type="password" placeholder="Password" name="password" required>
                    </div>
                    <button class="btn btn-primary w-100" type="submit"><i class="bi bi-unlock me-2"></i>Login</button>
                  </form>
                  <div class="login-meta-data d-flex align-items-center justify-content-between">
                    <div class="form-check mt-3">
                      <input class="form-check-input" id="rememberMe" type="checkbox" value="" checked>
                      <label class="form-check-label" for="rememberMe">Keep me logged in</label>
                    </div><a class="forgot-password mt-3" href="forgotpassword">Forgot Password?</a>
                  </div>
                </div>
                <!-- Sign in via others -->
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mb-120 d-block"></div>
    <!-- Footer Area-->
    <?php include 'tail.php'; ?>