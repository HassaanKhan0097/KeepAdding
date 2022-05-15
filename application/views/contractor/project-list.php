<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin - KeepAdding</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    

    <?php include_once('header.php'); ?>


    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
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
                <div class="profile"><img src="<?php echo base_url(); ?>assets/images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="<?php echo base_url(); ?>assets/images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
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
                <div class="profile"><img src="<?php echo base_url(); ?>assets/images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="<?php echo base_url(); ?>assets/images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="<?php echo base_url(); ?>assets/images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="<?php echo base_url(); ?>assets/images/faces/face6.jpg" alt="image"><span class="online"></span></div>
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
                  <h3 class="font-weight-bold">Projects</h3>
                  <!-- <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6> -->
                </div>
              </div>
            </div>
          </div>


          <div class="row">
          <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Search</h4>
                  
                  <form class="form-inline" method="get" action="<?php echo base_url(); ?>contractorpages/projects/search">
                    
                    <label class="sr-only" for="inlineFormInputName2">Keywords</label>
                    <input type="text" name="keyword" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Keywords">
                  
                    <label class="sr-only" for="inlineFormInputGroupUsername2">Business</label>
                    <div class="input-group mb-2 mr-sm-2">
                      <input type="text" name="business" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Business">
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Search</button>

                  </form>
                </div>
              </div>
            </div>
          </div>


          <div class="row">



            <?php
                foreach ($projects as $pro) { ?>

                        <div class="col-md-12 grid-margin stretch-card">
                          <div class="card position-relative">
                            <div class="card-body">
                              <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2 pb-4" data-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <div class="row">
                                      <div class="col-md-7 col-xl-7 d-flex flex-column justify-content-start border-right">
                                        <div class="ml-xl-4 mt-3">
                                        <p class="card-title"><?php echo $pro->pro_title; ?></p>
                                          <h1 class="text-primary">$<?php echo $pro->pro_budget; ?></h1>
                                          <h3 class="font-weight-500 mb-xl-4 text-primary">Hassaan Khan</h3>
                                          <p class="mb-2 mb-xl-0"><?php echo $pro->pro_details; ?> ...</p>

                                          <br/><br/>
                                          <h6>Nature:</h6>
                                          <p class="mb-2 mb-xl-0"><?php echo $pro->pro_nature; ?></p>

                                          <br/><br/>
                                          <h6>Proposal Type:</h6>
                                          <p class="mb-2 mb-xl-0"><?php echo $pro->pro_proposal_type; ?></p>

                                        </div>  
                                        </div>
                                        <div class="col-md-5 col-xl-5">
                                          <div class="row">
                                            <div class="col-md-12 mt-3">
                                            <p class="card-title">Bids Placed</p>
                                              <canvas id="pro-rfp-chart<?php echo $pro->pro_id; ?>"></canvas>
                                              <div id="pro-rfp-legend<?php echo $pro->pro_id; ?>"></div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                            
                              <?php
                                if( $pro->proposal_sent == 0 ) { ?>

                                <div class="template-demo mt-2 float-right">
                                  <a href="<?php echo base_url(); ?>contractorpages/proposals/send/<?php echo $pro->pro_id; ?>"><button type="button" class="btn btn-outline-primary btn-icon-text">
                                    <i class="ti-file btn-icon-prepend"></i>
                                    Send Proposal
                                  </button></a>
                                </div>
                                
                            <?php } else { ?>

                                <div class="template-demo mt-2 float-right">
                                  <button type="button" class="btn btn-outline-success btn-icon-text">
                                    <i class="ti-check btn-icon-prepend"></i>
                                    Proposal Sent
                                  </button>
                                </div>

                              <?php }
                            ?>
                              
                              






                            </div>
                          </div>
                        </div>
                <?php }
                ?>



          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
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
  <script src="<?php echo base_url(); ?>assets/vendors/chart.js/Chart.min.js"></script>
  <!-- <script src="<?php echo base_url(); ?>assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/dataTables.select.min.js"></script> -->

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?php echo base_url(); ?>assets/js/off-canvas.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/hoverable-collapse.js"></script>
  <!-- <script src="<?php echo base_url(); ?>assets/js/template.js"></script> -->
  <script src="<?php echo base_url(); ?>assets/js/settings.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo base_url(); ?>assets/js/dashboard.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->



  <script>




<?php
                foreach ($projects as $pro) { ?>

                  if ($("#pro-rfp-chart<?php echo $pro->pro_id; ?>").length) {
                        var areaData = {
                          labels: ["Jan", "Feb", "Mar"],
                          datasets: [{
                              data: [50, 50, 50],
                              backgroundColor: [
                                "#4B49AC","#FFC100", "#248AFD",
                              ],
                              borderColor: "rgba(0,0,0,0)"
                            }
                          ]
                        };
                        var areaOptions = {
                          responsive: true,
                          maintainAspectRatio: true,
                          segmentShowStroke: false,
                          cutoutPercentage: 78,
                          elements: {
                            arc: {
                                borderWidth: 4
                            }
                          },      
                          legend: {
                            display: false
                          },
                          tooltips: {
                            enabled: false
                          },
                          legendCallback: function(chart) { 
                            var text = [];
                            text.push('<div class="report-chart">');
                              text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[0] + '"></div><p class="mb-0">Business Owner</p></div>');
                              text.push('<p class="mb-0"><?php echo $pro->pro_business_owner; ?></p>');
                              text.push('</div>');
                              text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[1] + '"></div><p class="mb-0">Point of Contact</p></div>');
                              text.push('<p class="mb-0"><?php echo $pro->pro_point_of_contact; ?></p>');
                              text.push('</div>');
                              text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[2] + '"></div><p class="mb-0">Posted</p></div>');
                              text.push('<p class="mb-0"><?php echo $pro->pro_created; ?></p>');
                              text.push('</div>');
                            text.push('</div>');
                            return text.join("");
                          },
                        }
                        var northAmericaChartPlugins = {
                          beforeDraw: function(chart) {
                            var width = chart.chart.width,
                                height = chart.chart.height,
                                ctx = chart.chart.ctx;
                        
                            ctx.restore();
                            var fontSize = 3.125;
                            ctx.font = "500 " + fontSize + "em sans-serif";
                            ctx.textBaseline = "middle";
                            ctx.fillStyle = "#13381B";
                        
                            var text = <?php echo $pro->total_bids; ?>,
                                textX = Math.round((width - ctx.measureText(text).width) / 2),
                                textY = height / 2;
                        
                            ctx.fillText(text, textX, textY);
                            ctx.save();
                          }
                        }
                        var northAmericaChartCanvas = $("#pro-rfp-chart<?php echo $pro->pro_id; ?>").get(0).getContext("2d");
                        var northAmericaChart = new Chart(northAmericaChartCanvas, {
                          type: 'doughnut',
                          data: areaData,
                          options: areaOptions,
                          plugins: northAmericaChartPlugins
                        });
                        document.getElementById('pro-rfp-legend<?php echo $pro->pro_id; ?>').innerHTML = northAmericaChart.generateLegend();
                      }

                <?php }
                ?>

    //     if ($("#pro-rfp-chart1").length) {
    //   var areaData = {
    //     labels: ["Jan", "Feb", "Mar"],
    //     datasets: [{
    //         data: [50, 50, 50],
    //         backgroundColor: [
    //            "#4B49AC","#FFC100", "#248AFD",
    //         ],
    //         borderColor: "rgba(0,0,0,0)"
    //       }
    //     ]
    //   };
    //   var areaOptions = {
    //     responsive: true,
    //     maintainAspectRatio: true,
    //     segmentShowStroke: false,
    //     cutoutPercentage: 78,
    //     elements: {
    //       arc: {
    //           borderWidth: 4
    //       }
    //     },      
    //     legend: {
    //       display: false
    //     },
    //     tooltips: {
    //       enabled: false
    //     },
    //     legendCallback: function(chart) { 
    //       var text = [];
    //       text.push('<div class="report-chart">');
    //         text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[0] + '"></div><p class="mb-0">Business Owner</p></div>');
    //         text.push('<p class="mb-0">Ahsan Dilshad</p>');
    //         text.push('</div>');
    //         text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[1] + '"></div><p class="mb-0">Point of Contact</p></div>');
    //         text.push('<p class="mb-0">Hassaan Khan</p>');
    //         text.push('</div>');
    //         text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[2] + '"></div><p class="mb-0">Posted</p></div>');
    //         text.push('<p class="mb-0">December 2, 2021</p>');
    //         text.push('</div>');
    //       text.push('</div>');
    //       return text.join("");
    //     },
    //   }
    //   var northAmericaChartPlugins = {
    //     beforeDraw: function(chart) {
    //       var width = chart.chart.width,
    //           height = chart.chart.height,
    //           ctx = chart.chart.ctx;
      
    //       ctx.restore();
    //       var fontSize = 3.125;
    //       ctx.font = "500 " + fontSize + "em sans-serif";
    //       ctx.textBaseline = "middle";
    //       ctx.fillStyle = "#13381B";
      
    //       var text = <?php echo "70"; ?>,
    //           textX = Math.round((width - ctx.measureText(text).width) / 2),
    //           textY = height / 2;
      
    //       ctx.fillText(text, textX, textY);
    //       ctx.save();
    //     }
    //   }
    //   var northAmericaChartCanvas = $("#pro-rfp-chart1").get(0).getContext("2d");
    //   var northAmericaChart = new Chart(northAmericaChartCanvas, {
    //     type: 'doughnut',
    //     data: areaData,
    //     options: areaOptions,
    //     plugins: northAmericaChartPlugins
    //   });
    //   document.getElementById('pro-rfp-legend1').innerHTML = northAmericaChart.generateLegend();
    // }



    // if ($("#pro-rfp-chart2").length) {
    //   var areaData = {
    //     labels: ["Jan", "Feb", "Mar"],
    //     datasets: [{
    //         data: [50, 50, 50],
    //         backgroundColor: [
    //            "#4B49AC","#FFC100", "#248AFD",
    //         ],
    //         borderColor: "rgba(0,0,0,0)"
    //       }
    //     ]
    //   };
    //   var areaOptions = {
    //     responsive: true,
    //     maintainAspectRatio: true,
    //     segmentShowStroke: false,
    //     cutoutPercentage: 78,
    //     elements: {
    //       arc: {
    //           borderWidth: 4
    //       }
    //     },      
    //     legend: {
    //       display: false
    //     },
    //     tooltips: {
    //       enabled: false
    //     },
    //     legendCallback: function(chart) { 
    //       var text = [];
    //       text.push('<div class="report-chart">');
    //         text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[0] + '"></div><p class="mb-0">Business Owner</p></div>');
    //         text.push('<p class="mb-0">Ahsan Dilshad</p>');
    //         text.push('</div>');
    //         text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[1] + '"></div><p class="mb-0">Point of Contact</p></div>');
    //         text.push('<p class="mb-0">Hassaan Khan</p>');
    //         text.push('</div>');
    //         text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[2] + '"></div><p class="mb-0">Posted</p></div>');
    //         text.push('<p class="mb-0">December 2, 2021</p>');
    //         text.push('</div>');
    //       text.push('</div>');
    //       return text.join("");
    //     },
    //   }
    //   var northAmericaChartPlugins = {
    //     beforeDraw: function(chart) {
    //       var width = chart.chart.width,
    //           height = chart.chart.height,
    //           ctx = chart.chart.ctx;
      
    //       ctx.restore();
    //       var fontSize = 3.125;
    //       ctx.font = "500 " + fontSize + "em sans-serif";
    //       ctx.textBaseline = "middle";
    //       ctx.fillStyle = "#13381B";
      
    //       var text = "90",
    //           textX = Math.round((width - ctx.measureText(text).width) / 2),
    //           textY = height / 2;
      
    //       ctx.fillText(text, textX, textY);
    //       ctx.save();
    //     }
    //   }
    //   var northAmericaChartCanvas = $("#pro-rfp-chart2").get(0).getContext("2d");
    //   var northAmericaChart = new Chart(northAmericaChartCanvas, {
    //     type: 'doughnut',
    //     data: areaData,
    //     options: areaOptions,
    //     plugins: northAmericaChartPlugins
    //   });
    //   document.getElementById('pro-rfp-legend2').innerHTML = northAmericaChart.generateLegend();
    // }
  </script>
</body>

</html>

