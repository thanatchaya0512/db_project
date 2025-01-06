<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Forgot Password &mdash; HU</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>
 <!-- BG-->
 <style>
        .forgot-password-page {
            display: auto;
            background-image: url('assets/img/forgotpassword.png'); 
            background-size: 600px 600px;
            background-position: 50px 90px;
            background-repeat: no-repeat;
            min-height: 100vh;
            padding: 20px; /* เพิ่มระยะห่างรอบๆ รูปภาพ */
}

        .login-container {
            margin-top: 100px; /* ปรับระยะห่างจากด้านบน */
        }

        .card-primary {
        margin-left: 90px; /* เลื่อนกล่องไปทางขวา */
        width: 500px; /* ขนาดกล่องเท่าเดิม (ตัวอย่าง) */
        top: 60px;
}
    </style>

<body class="forgot-password-page" >


  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <!-- <img src="assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle"> -->
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Forgot Your Password?</h4></div>

              <div class="card-body">
                <p class="text-muted">We will send a link to reset your password</p>
                <!-- ใส่ action แลำ method="POST" -->
                <form method="POST" action="chkforgotpass.php">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1"placeholder="Email address" required autofocus>
                    <label for="username">Username</label>
                    <input id="username" type="text" class="form-control" name="username" tabindex="2"placeholder="Username" required autofocus>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="3">
                      Request password reset
                    </button>
                    <a href="login.php" style="display: block; text-align: center; margin-top: 20px;" >Back to Login</a>
                  </div>
                </form>
              </div>
            </div>
            <!-- <div class="simple-footer">
              Copyright &copy; Stisla 2018
            </div> -->
          </div>
        </div>
      </div>
    </section>
  </div>

  

  <!-- General JS Scripts -->
  <script src="assets/modules/jquery.min.js"></script>
  <script src="assets/modules/popper.js"></script>
  <script src="assets/modules/tooltip.js"></script>
  <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="assets/modules/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>