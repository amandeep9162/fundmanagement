  <!-- Header -->
 @extends('layouts.mylayout');
      
              @section('content')
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="images/bg/bg2.jpg">
      <div class="container pt-30 pb-30">
        <!-- Section Content -->
        <div class="section-content text-center">
          <div class="row"> 
            <div class="col-md-6 col-md-offset-3 text-center">
              <h2 class="text-theme-colored font-36">Login/Register</h2>
              <ol class="breadcrumb text-center mt-10 white">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Login/Register</li>
              </ol>
            </div>
          </div>
        </div>
      </div>      
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#login-tab" data-toggle="tab">Login</a></li>
              <li><a href="#register-tab" data-toggle="tab">Register</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade in active p-15" id="login-tab">
                <h4 class="text-gray mt-0 pt-5"> Login</h4>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur elit.</p>
                <form name="login-form" class="clearfix">
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label for="form_username_email">Username/Email</label>
                      <input id="form_username_email" name="form_username_email" class="form-control" type="text">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label for="form_password">Password</label>
                      <input id="form_password" name="form_password" class="form-control" type="text">
                    </div>
                  </div>
                  <div class="checkbox pull-left mt-15">
                    <label for="form_checkbox">
                      <input id="form_checkbox" name="form_checkbox" type="checkbox">
                      Remember me </label>
                  </div>
                  <div class="form-group pull-right mt-10">
                    <button type="submit" class="btn btn-dark btn-sm">Login</button>
                  </div>
                  <div class="clear text-center pt-10">
                    <a class="text-theme-colored font-weight-600 font-12" href="#">Forgot Your Password?</a>
                  </div>
                  <div class="clear text-center pt-10">
                    <a class="btn btn-dark btn-lg btn-block no-border mt-15 mb-15" href="#" data-bg-color="#3b5998">Login with facebook</a>
                    <a class="btn btn-dark btn-lg btn-block no-border" href="#" data-bg-color="#00acee">Login with twitter</a>
                  </div>
                </form>
              </div>
              <div class="tab-pane fade in p-15" id="register-tab">
                <form name="reg-form" class="register-form" method="post">
                  <div class="icon-box mb-0 p-0">
                    <a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10">
                      <i class="pe-7s-users"></i>
                    </a>
                    <h4 class="text-gray pt-10 mt-0 mb-30">Don't have an Account? Register Now.</h4>
                  </div>
                  <hr>
                  <p class="text-gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi id perspiciatis facilis nulla possimus quasi, amet qui. Ea rerum officia, aspernatur nulla neque nesciunt alias.</p>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="form_name">Name</label>
                      <input id="form_name" name="form_name" class="form-control" type="text">
                    </div>
                    <div class="form-group col-md-6">
                      <label>Email Address</label>
                      <input id="form_email" name="form_email" class="form-control" type="email">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label for="form_choose_username">Choose Username</label>
                      <input id="form_choose_username" name="form_choose_username" class="form-control" type="text">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="form_choose_password">Choose Password</label>
                      <input id="form_choose_password" name="form_choose_password" class="form-control" type="text">
                    </div>
                    <div class="form-group col-md-6">
                      <label>Re-enter Password</label>
                      <input id="form_re_enter_password" name="form_re_enter_password"  class="form-control" type="text">
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-dark btn-lg btn-block mt-15" type="submit">Register Now</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
  
  <!-- Footer -->
 @stop
