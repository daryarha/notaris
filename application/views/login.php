<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome To Kantor Notaris Dewi Andriani </title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" >
    <!-- Font Awesome -->
   <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/font-awesome/css/font-awesome.min.css">
    <!-- NProgress -->
   <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/nprogress/nprogress.css" >
    <!-- Animate.css -->
   <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/animate.css/animate.min.css" >

    <!-- Custom Theme Style -->
   <link rel="stylesheet" href="<?php echo base_url();?>assets/build/css/custom.min.css">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
				<?php echo validation_errors(); ?>

				<?php echo form_open('/', 'class="form-horizontal form-label-left"'); ?>
           Login
           <br>
              Kantor Notaris Dewi Andriani, S.H., M.H.
                   <div class="separator">
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Username" required  name="username"/>
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required name="password" />
              </div>
              <div>
                <input class="btn btn-default text-center" type="submit" value="Login">
             
              </div>

              <div class="clearfix"></div>

            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
