<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Skydash Admin</title>
      <!-- plugins:css -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/feather/feather.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/ti-icons/css/themify-icons.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/css/vendor.bundle.base.css">
      <!-- endinject -->
      <!-- Plugin css for this page -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/select2/select2.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
      <!-- End plugin css for this page -->
      <!-- inject:css -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vertical-layout-light/style.css">
      <!-- endinject -->
      <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.png" />
   </head>
   <body>
      <div class="container-scroller">
         <!-- partial:partials/_navbar.html -->
         <?php include_once('header.php'); ?>
         <!-- partial -->
         <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
               <div id="settings-trigger"><i class="ti-settings"></i></div>
               <div id="theme-settings" class="settings-panel">
                  <i class="settings-close ti-close"></i>
                  <p class="settings-heading">SIDEBAR SKINS</p>
                  <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                     <div class="img-ss rounded-circle bg-light border mr-3"></div>
                     Light
                  </div>
                  <div class="sidebar-bg-options" id="sidebar-dark-theme">
                     <div class="img-ss rounded-circle bg-dark border mr-3"></div>
                     Dark
                  </div>
                  <p class="settings-heading mt-2">HEADER SKINS</p>
                  <div class="color-tiles mx-0 px-4">
                     <div class="tiles success"></div>
                     <div class="tiles warning"></div>
                     <div class="tiles danger"></div>
                     <div class="tiles info"></div>
                     <div class="tiles dark"></div>
                     <div class="tiles default"></div>
                  </div>
               </div>
            </div>
            <div id="right-sidebar" class="settings-panel">
               <i class="settings-close ti-close"></i>
               <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
                  <li class="nav-item">
                     <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
                  </li>
               </ul>
               <div class="tab-content" id="setting-content">
                  <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
                     <div class="add-items d-flex px-3 mb-0">
                        <form class="form w-100">
                           <div class="form-group d-flex">
                              <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                              <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                           </div>
                        </form>
                     </div>
                     <div class="list-wrapper px-3">
                        <ul class="d-flex flex-column-reverse todo-list">
                           <li>
                              <div class="form-check">
                                 <label class="form-check-label">
                                 <input class="checkbox" type="checkbox">
                                 Team review meeting at 3.00 PM
                                 </label>
                              </div>
                              <i class="remove ti-close"></i>
                           </li>
                           <li>
                              <div class="form-check">
                                 <label class="form-check-label">
                                 <input class="checkbox" type="checkbox">
                                 Prepare for presentation
                                 </label>
                              </div>
                              <i class="remove ti-close"></i>
                           </li>
                           <li>
                              <div class="form-check">
                                 <label class="form-check-label">
                                 <input class="checkbox" type="checkbox">
                                 Resolve all the low priority tickets due today
                                 </label>
                              </div>
                              <i class="remove ti-close"></i>
                           </li>
                           <li class="completed">
                              <div class="form-check">
                                 <label class="form-check-label">
                                 <input class="checkbox" type="checkbox" checked>
                                 Schedule meeting for next week
                                 </label>
                              </div>
                              <i class="remove ti-close"></i>
                           </li>
                           <li class="completed">
                              <div class="form-check">
                                 <label class="form-check-label">
                                 <input class="checkbox" type="checkbox" checked>
                                 Project review
                                 </label>
                              </div>
                              <i class="remove ti-close"></i>
                           </li>
                        </ul>
                     </div>
                     <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
                     <div class="events pt-4 px-3">
                        <div class="wrapper d-flex mb-2">
                           <i class="ti-control-record text-primary mr-2"></i>
                           <span>Feb 11 2018</span>
                        </div>
                        <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
                        <p class="text-gray mb-0">The total number of sessions</p>
                     </div>
                     <div class="events pt-4 px-3">
                        <div class="wrapper d-flex mb-2">
                           <i class="ti-control-record text-primary mr-2"></i>
                           <span>Feb 7 2018</span>
                        </div>
                        <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                        <p class="text-gray mb-0 ">Call Sarah Graves</p>
                     </div>
                  </div>
                  <!-- To do section tab ends -->
                  <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                     <div class="d-flex align-items-center justify-content-between border-bottom">
                        <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                        <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
                     </div>
                     <ul class="chat-list">
                        <li class="list active">
                           <div class="profile"><img src="../../images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                           <div class="info">
                              <p>Thomas Douglas</p>
                              <p>Available</p>
                           </div>
                           <small class="text-muted my-auto">19 min</small>
                        </li>
                        <li class="list">
                           <div class="profile"><img src="../../images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                           <div class="info">
                              <div class="wrapper d-flex">
                                 <p>Catherine</p>
                              </div>
                              <p>Away</p>
                           </div>
                           <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                           <small class="text-muted my-auto">23 min</small>
                        </li>
                        <li class="list">
                           <div class="profile"><img src="../../images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                           <div class="info">
                              <p>Daniel Russell</p>
                              <p>Available</p>
                           </div>
                           <small class="text-muted my-auto">14 min</small>
                        </li>
                        <li class="list">
                           <div class="profile"><img src="../../images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                           <div class="info">
                              <p>James Richardson</p>
                              <p>Away</p>
                           </div>
                           <small class="text-muted my-auto">2 min</small>
                        </li>
                        <li class="list">
                           <div class="profile"><img src="../../images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                           <div class="info">
                              <p>Madeline Kennedy</p>
                              <p>Available</p>
                           </div>
                           <small class="text-muted my-auto">5 min</small>
                        </li>
                        <li class="list">
                           <div class="profile"><img src="../../images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                           <div class="info">
                              <p>Sarah Graves</p>
                              <p>Available</p>
                           </div>
                           <small class="text-muted my-auto">47 min</small>
                        </li>
                     </ul>
                  </div>
                  <!-- chat tab ends -->
               </div>
            </div>
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <?php include_once('sidebar.php'); ?>
            <!-- partial -->
            <div class="main-panel">
               <div class="content-wrapper">
                  <div class="row">
                     <div class="col-md-12 grid-margin">
                        <div class="row">
                           <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                              <h3 class="font-weight-bold">Profile</h3>
                              <!-- <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6> -->
                              <h6 class="font-weight-normal mb-0">Your profile is not complete! You have <span class="text-danger">1</span> missing step(s).</h6>
                           </div>
                        </div>
                     </div>
                  </div>



                  <div class="row">
                    <div class="col-md-12 grid-margin">






                  <div class="card-profile">
                      <div class="img">
                        <img src="<?php echo base_url(); ?>assets/images/faces/face29.jpg">
                      </div>
                      <div class="infos">
                        <div class="name">
                          <h2><?php echo $this->session->userdata('loggedUser_KeepAdding')['user_fullname']; ?> </h2> 
                          <h4>@<?php echo $this->session->userdata('loggedUser_KeepAdding')['user_username']; ?></h4>
                        </div>
                        <p class="text">
                          I'm a Front End Developer, follow me to be the first 
                          who see my new work.
                        </p>
                        <ul class="stats">
                          <li>
                            <h3>107</h3>
                            <h4>Threads</h4>
                          </li>
                          <li>
                            <h3>82</h3>
                            <h4>Projects</h4>
                          </li>
                          <li>
                            <h3>1.3M</h3>
                            <h4>Followers</h4>
                          </li>
                        </ul>
                        <!-- <div class="links">
                          <button class="follow">Follow</button>
                          <button class="view">View profile</button>
                        </div> -->
                      </div>
                    </div> <!-- Card Profile End -->






                    </div>
                  </div>








                  <div class="row">
                    <div class="col-md-12 grid-margin">







                    <div class="wrapper">
		
                     <div class="tab-wrapper">
                        <ul class="tabs">
                              <li class="tab-link active" data-tab="1">Personal Info</li>
                              <li class="tab-link" data-tab="2">Documents</li>
                              <li class="tab-link" data-tab="3">Extra Tab</li>
                        </ul>
                     </div>

                     <div class="tab-content-wrapper">

                        <div id="tab-1" class="profile-tab-content active">


                           <!-- <div class="col-md-12 grid-margin stretch-card">
                                 <div class="card">
                                    <div class="card-body">
                                       <h4 class="card-title">Personal Information</h4>
                                       <p class="card-description">
                                       Tell Us About Yourself
                                       </p>
                                       <form class="forms-sample">
                                       <div class="form-group">
                                          <label for="exampleInputConfirmPassword1">Fullname</label>
                                          <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Fullname">
                                       </div>
                                       <div class="form-group">
                                          <label for="exampleInputUsername1">Username</label>
                                          <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                                       </div>
                                       <div class="form-group">
                                          <label for="exampleInputEmail1">Email address</label>
                                          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                       </div>
                                       <div class="form-group">
                                          <label for="exampleInputPassword1">Password</label>
                                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                       </div>
                                       
                                       
                                       <button type="submit" class="btn btn-primary mr-2">Update</button>

                                       </form>
                                    </div>
                                 </div>
                              </div> -->



                              <!-- <div class="card-profile-detail">

                                    <div class="row">

                                       <div class="col-3">
                                          <div class="name">
                                             <h2>Username: </h2> 
                                             <h4><?php echo $this->session->userdata('loggedUser_KeepAdding')['user_username']; ?></h4>
                                          </div>
                                       </div>
                                       <div class="col-3">
                                          <div class="name">
                                             <h2>Full Name: </h2> 
                                             <h4><?php echo $this->session->userdata('loggedUser_KeepAdding')['user_fullname']; ?></h4>
                                          </div>
                                       </div>
                                       <div class="col-3">
                                          <div class="name">
                                             <h2>Email: </h2> 
                                             <h4><?php echo $this->session->userdata('loggedUser_KeepAdding')['user_email']; ?></h4>
                                          </div>
                                       </div>

                                    </div>

                              </div> Card Profile End -->



                              <div class="card box">
                                 <div class="card-body">
                                    <h4 class="card-title">Personal Info</h4>
                                    <div class="media">
                                       <div class="media-body">
                                          <div class="row">

                                             <div class="col-md-3 col-sm-6">
                                                <div class="name">
                                                   <h4>Username: </h4> 
                                                   <p class="card-text"><?php echo $this->session->userdata('loggedUser_KeepAdding')['user_username']; ?></p>
                                                </div>
                                             </div>
                                             <div class="col-md-3 col-sm-6">
                                                <div class="name">
                                                   <h4>Full Name: </h4> 
                                                   <p class="card-text"><?php echo $this->session->userdata('loggedUser_KeepAdding')['user_fullname']; ?></p>
                                                </div>
                                             </div>
                                             <div class="col-md-3 col-sm-6">
                                                <div class="name">
                                                   <h4>Email: </h4> 
                                                   <p class="card-text"><?php echo $this->session->userdata('loggedUser_KeepAdding')['user_email']; ?></p>
                                                </div>
                                             </div>

                                             </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>


                        </div>

                        <div id="tab-2" class="profile-tab-content">



                        <div class="row">

                           <div class="col-md-12 grid-margin stretch-card">
                           <div class="card box">
                              <div class="card-body">
                                 <h4 class="card-title">Business Document</h4>
                                 <div class="media">
                                 <i class="ti-info-alt icon-md text-info d-flex align-self-start mr-3 text-danger"></i>
                                 <div class="media-body">
                                    <p class="card-text">Missing legal documentation for your business</p>
                                 </div>
                                 <button type="button" class="btn btn-outline-danger btn-icon-text">
                                    <i class="ti-upload btn-icon-prepend"></i>                                                    
                                    Upload
                                 </button>
                                 </div>
                              </div>
                           </div>
                           </div>

                        </div>


                        </div>

                        <div id="tab-3"class="profile-tab-content">jQuery is a fast, small, and feature-rich JavaScript library. It makes things like HTML document traversal and manipulation, event handling, animation, and Ajax much simpler with an easy-to-use API that works across a multitude of browsers.</div>

                     </div>
                     
                  </div>





                    </div>
                  </div>



               </div>
               <!-- content-wrapper ends -->
               <!-- partial:../../partials/_footer.html -->
               <footer class="footer">
                  <div class="d-sm-flex justify-content-center justify-content-sm-between">
                     <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021. KeepAdding. All rights reserved.</span>
                  </div>
               </footer>
               <!-- partial -->
            </div>
            <!-- main-panel ends -->
         </div>
         <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->
      <!-- plugins:js -->
      <script src="<?php echo base_url(); ?>assets/vendors/js/vendor.bundle.base.js"></script>
      <!-- endinject -->
      <!-- Plugin js for this page -->
      <script src="<?php echo base_url(); ?>assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/vendors/select2/select2.min.js"></script>
      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <script src="<?php echo base_url(); ?>assets/js/off-canvas.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/hoverable-collapse.js"></script>
      <!-- <script src="<?php echo base_url(); ?>assets/js/template.js"></script> -->
      <script src="<?php echo base_url(); ?>assets/js/settings.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/todolist.js"></script>
      <!-- endinject -->
      <!-- Custom js for this page-->
      <script src="<?php echo base_url(); ?>assets/js/file-upload.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/typeahead.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/select2.js"></script>
      <!-- End custom js for this page-->

      <script>
$('.tab-link').click( function() {
	
	var tabID = $(this).attr('data-tab');
	
	$(this).addClass('active').siblings().removeClass('active');
	
	$('#tab-'+tabID).addClass('active').siblings().removeClass('active');
});

      </script>
   </body>
</html>