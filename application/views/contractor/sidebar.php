<!-- <nav class="sidebar sidebar-offcanvas" id="sidebar">
   <ul class="nav">
      <li class="nav-item <?php echo activate_side_menu('/'); ?>">
         <a class="nav-link" href="<?php echo base_url(); ?>contractorpages">
         <i class="icon-grid menu-icon"></i>
         <span class="menu-title">Dashboard</span>
         </a>
      </li>

      <li class="nav-item <?php echo activate_side_menu('projects'); ?>">
         <a class="nav-link" href="<?php echo base_url(); ?>contractorpages/projects">
         <i class="icon-layout menu-icon"></i>
         <span class="menu-title">Projects</span>
         </a>
      </li>

      <li class="nav-item <?php echo activate_side_menu('supplier'); ?>">
         <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
         <i class="icon-columns menu-icon"></i>
         <span class="menu-title">Supplier</span>
         <i class="menu-arrow"></i>
         </a>
         <div class="collapse" id="form-elements">
            <ul class="nav flex-column sub-menu">
               <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>
            </ul>
         </div>
      </li>

      <li class="nav-item <?php echo activate_side_menu('irm'); ?>">
         <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
         <i class="icon-bar-graph menu-icon"></i>
         <span class="menu-title">IRM</span>
         <i class="menu-arrow"></i>
         </a>
         <div class="collapse" id="charts">
            <ul class="nav flex-column sub-menu">
               <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
            </ul>
         </div>
      </li>

      <li class="nav-item <?php echo activate_side_menu('forum'); ?>">
         <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic">
         <i class="icon-paper menu-icon"></i>
         <span class="menu-title">Forum</span>
         <i class="menu-arrow"></i>
         </a>
         <div class="collapse" id="ui-basic2">
            <ul class="nav flex-column sub-menu">
               <li class="nav-item"> <a class="nav-link" target="_blank" href="<?php echo $this->config->item('forum_url'); ?>">Access Forum</a></li>
               <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>contractorpages/channels/index">Add New Channel</a></li>
            </ul>
         </div>
      </li>

   </ul>
</nav> -->








<nav class="sidebar sidebar-offcanvas" id="sidebar">
   <ul class="nav">
      <li class="nav-item <?php echo activate_side_menu('/'); ?>">
         <a class="nav-link" href="<?php echo base_url(); ?>contractorpages">
         <i class="icon-grid menu-icon"></i>
         <span class="menu-title">Dashboard</span>
         </a>
      </li>

      <li class="nav-item">
         <a class="nav-link" href="<?php echo base_url(); ?>contractorpages/projects">
         <i class="icon-layout menu-icon"></i>
         <span class="menu-title">Projects</span>
         </a>
      </li>

      <li class="nav-item">
         <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
         <i class="icon-columns menu-icon"></i>
         <span class="menu-title">Supplier</span>
         <i class="menu-arrow"></i>
         </a>
         <div class="collapse" id="form-elements">
            <ul class="nav flex-column sub-menu">
               <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>
            </ul>
         </div>
      </li>

      <li class="nav-item">
         <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
         <i class="icon-bar-graph menu-icon"></i>
         <span class="menu-title">IRM</span>
         <i class="menu-arrow"></i>
         </a>
         <div class="collapse" id="charts">
            <ul class="nav flex-column sub-menu">
               <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
            </ul>
         </div>
      </li>

      <li class="nav-item <?php echo activate_side_menu('forum'); ?>">
         <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic">
         <i class="icon-paper menu-icon"></i>
         <span class="menu-title">Forum</span>
         <i class="menu-arrow"></i>
         </a>
         <div class="collapse" id="ui-basic2">
            <ul class="nav flex-column sub-menu">
               <li class="nav-item"> <a class="nav-link" target="_blank" href="<?php echo $this->config->item('forum_url'); ?>">Access Forum</a></li>
               <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>contractorpages/channels/index">Add New Channel</a></li>
            </ul>
         </div>
      </li>

   </ul>
</nav>