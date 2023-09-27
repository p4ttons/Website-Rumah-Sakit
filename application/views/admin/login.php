<html lang="en">
  <head>

    <title>Login Admin RSUD Dewantara</title>
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/images/fav.jpg">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="<?php echo base_url()?>assets/admin/assets/css/style.css">

    </head>
    <body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Rumah Sakit Umum Daerah Dewantara</h2>
                </div>
            </div>
              <?php
                $attributes = array('autocomplete'=> 'off');
                echo form_open_multipart("admin/login/cek_login",$attributes);?>
                           
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-user-o"></span>
                </div>
                <h3 class="text-center mb-4">Admin RSUD Dewantara</h3>
                 <?php echo $this->session->flashdata("massage");?>
                        <form action="#" class="login-form">
                          
                    <div class="form-group">
                        <input type="text" class="form-control rounded-left" name="cms_user" id="cms_user" placeholder="Username" required>
                    </div>
                <div class="form-group d-flex">
                  <input type="password" class="form-control rounded-left"  name="cms_password" id="cms_password"  placeholder="Password" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
                </div>
                <div class="form-group d-md-flex">
                    <div class="w-50">
                        <label class="checkbox-wrap checkbox-primary">Remember Me
                                      <input type="checkbox" checked>
                                      <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="#">Forgot Password</a>
                                </div>
                </div>
              </form>
            </div>
                </div>
            </div>
        </div>
    </section>

    <script src="<?php echo base_url()?>assets/admin/login/js/jquery.min.js"></script>
  <script src="<?php echo base_url()?>assets/admin/login/js/popper.js"></script>
  <script src="<?php echo base_url()?>assets/admin/login/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url()?>assets/admin/login/js/main.js"></script>

    </body>
</html>

