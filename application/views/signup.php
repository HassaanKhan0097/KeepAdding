<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Forum - KeepAdding</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/mdi/css/materialdesignicons.min.css">

  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.png" />

  <style>
  .card {
      overflow: hidden;
  }

  .card-header {
      background: #4B49AC;
      color: #fff !important;
      text-align: center;
      min-height: 120px;
  }
  .card-body ul li i {
    color: #4B49AC;
    margin-right: 2px;
  }
  </style>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-10 mx-auto width_control" >
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
              <img src="<?php echo base_url(); ?>assets/images/logo.png" alt="logo" class="logo-center">
              </div>
              

              <div id="pricing_table">

                <h4>New here?</h4>
                <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                <div class="row">

                  <div class="col-md-4">
                    <div class="card">
                      <div class="card-header">
                        <h3>Free User</h3>
                        <h6>-</h6>
                        <h6>-</h6>
                      </div>

                      <div class="card-body">
                      <!-- <h4 class="card-title">Free User</h4> -->
                        <ul>
                          <li><i class="mdi mdi-check-circle-outline"></i>Access to the social forums</li>
                          <li><i class="mdi mdi-check-circle-outline"></i>Ability to create a custom profile</li>
                          <li><i class="mdi mdi-check-circle-outline"></i>Ability to create Pledges</li>
                          <li><i class="mdi mdi-check-circle-outline"></i>Access the details of current projects (view only)</li>
                        </ul>

                        
                      </div>

                      <div class="card-footer">
                        <button class="btn btn-outline-primary mt-3 w-100 package" id="_1">Choose Package</button>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="card">
                      <div class="card-header">
                        <h3>Contractors</h3>
                        <h6>$39.99/Month</h6>
                        <h6>$399 Annual (Annual savings of $80.88)</h6>
                      </div>

                      <div class="card-body">
                      
                        <ul>
                          <li><i class="mdi mdi-check-circle-outline"></i>Access to  the social forums</li>
                          <li><i class="mdi mdi-check-circle-outline"></i>Ability to create a custom profile with links for portfolio/CV materials</li>
                          <li><i class="mdi mdi-check-circle-outline"></i>Ability to create pledges and view pledge details made by other users</li>
                          <li><i class="mdi mdi-check-circle-outline"></i>Ability to submit bids on projects</li>
                          <li><i class="mdi mdi-check-circle-outline"></i>Communicate with business profiles</li>
                          <li><i class="mdi mdi-check-circle-outline"></i>Also includes discounts on some Serv Inc. products & services as well as that of its partners, affiliates, and subsidiaries. Some restrictions apply*</li>
                        </ul>

                       
                      </div>

                      <div class="card-footer">
                        <select name="select_2" class="form-control" >
                          <option value="Monthly">Monthly</option>
                          <option value="Annually">Annually</option>
                        </select>

                        <button class="btn btn-outline-primary mt-3 w-100 package" id="_2">Choose Package</button>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="card">
                      <div class="card-header">
                        <h3>Business</h3>
                        <h6>$59.99/Month</h6>
                        <h6>$599 Annual (Annual savings of $120.88)</h6>
                      </div>

                      <div class="card-body">
       
                        <ul>
                          <li><i class="mdi mdi-check-circle-outline"></i>Includes all features included in lower tiers</li>
                          <li><i class="mdi mdi-check-circle-outline"></i>Ability to create projects</li>
                          <li><i class="mdi mdi-check-circle-outline"></i>Issue requests for proposals, and reach out to any profile on the platform</li>
                          <li><i class="mdi mdi-check-circle-outline"></i>Four (4) annual Assessment Meetings with our Business & research Development staff for free project development services</li>
                          <li><i class="mdi mdi-check-circle-outline"></i>This service includes quarterly publishings of project development updates and resources by industry, feedback on project planning, pledge analysis to help link users' relevant networks and resources. Discounts on all Serv Inc. products & services as well as select products & services of its partners, affiliates, and subsidiaries.</li>
                         
                        </ul>

                        
                      </div>
                      <div class="card-footer">
                        <select name="select_3" class="form-control" >
                          <option value="Monthly">Monthly</option>
                          <option value="Annually">Annually</option>
                        </select>

                        <button class="btn btn-outline-primary mt-3 w-100 package" id="_3">Choose Package</button>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <button class="btn btn-outline-primary mt-3 w-100 " onclick="continueRegister()">Continue to Register</button>
                  </div>
                </div>
              </div>


              <form class="pt-3" method="post" action="<?php echo base_url(); ?>KeepAdding/signup_submit" id="signup_form">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg"  placeholder="Package" name="user_package" value="" readonly>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg"  placeholder="Package Type" name="user_package_type" value="" readonly>
                  <input type="text" class="form-control form-control-lg d-none" name="user_role" value="" >
                  <input type="text" class="form-control form-control-lg d-none" name="user_price" value="" >
                </div>
                
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg"  placeholder="Username" name="user_username" value="<?php echo set_value('user_username'); ?>">
                  <span class="helper-text"><?php echo form_error('user_username'); ?></span>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" name="user_email" value="<?php echo set_value('user_email'); ?>">
                  <span class="helper-text"><?php echo form_error('user_email'); ?></span>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg"  placeholder="Full Name" name="user_fullname" value="<?php echo set_value('user_fullname'); ?>">
                  <span class="helper-text"><?php echo form_error('user_fullname'); ?></span>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="user_pass" value="<?php echo set_value('user_pass'); ?>">
                  <span class="helper-text"><?php echo form_error('user_pass'); ?></span>
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">SIGN UP</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="<?php echo base_url(); ?>KeepAdding/signin" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?php echo base_url(); ?>assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?php echo base_url(); ?>assets/js/off-canvas.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/template.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/settings.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/todolist.js"></script>
  <!-- endinject -->

  <script>
  $("#signup_form").hide();

  var maxHeight = Math.max.apply(null, $(".card").map(function ()
  { return $(this).height();
  }).get());

  $(".card").map(function ()
  {
      $(this).height(maxHeight);
  });
  var packages = '';
  $(".package").click(function(){

    $(".package").map(function ()
    {
      $(this).removeClass('btn-primary');
      $(this).addClass('btn-outline-primary');
    });

    $(this).removeClass('btn-outline-primary');
    $(this).addClass('btn-primary');
    packages = $(this).attr('id');
  })

  function continueRegister(){
    
    if(packages == ''){
      alert("Kindly select any package first");
    }else{

      var package_type='Free User';
      var user_package = 'Free User';
      var user_price = '';

      if(packages != '_1'){
        package_type = $("select[name=select"+packages+"]").val(); 
      }

      if(packages == "_2"){ user_package = 'Contractor' }
      else if(packages == "_3"){ user_package = 'Business' }

      $("input[name=user_package_type]").val(package_type);
      $("input[name=user_package]").val(user_package);
      $("input[name=user_role]").val(packages.replace("_",""));


      if(packages == '_2' && package_type == 'Monthly'){ user_price = '39.99'; }
      else if(packages == '_2' && package_type == 'Annually'){ user_price = '399'; }
      else if(packages == '_3' && package_type == 'Monthly'){ user_price = '59.99'; }
      else if(packages == '_3' && package_type == 'Annually'){ user_price = '599'; }

      $("input[name=user_price]").val(user_price);

      $("#pricing_table").hide();
      $("#signup_form").fadeIn();

      $(".width_control").removeClass('col-lg-10');
      $(".width_control").addClass('col-lg-4');
    }
   
  }

  </script>
</body>
</html>