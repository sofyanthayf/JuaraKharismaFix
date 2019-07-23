<div class="dashboard-header">
     <nav class="navbar navbar-expand-lg bg-white fixed-top">
         <a class="navbar-brand" href="<?php echo base_url(); ?>">
           <img src="<?php echo base_url(); ?>assets/images/logo.png" alt="logo" width="350px">
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav ml-auto navbar-right-top">
                 <li class="nav-item dropdown nav-user">
                     <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="https://via.placeholder.com/150" alt="" class="user-avatar-md rounded-circle"></a>
                     <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                         <div class="nav-user-info">
                             <h5 class="mb-0 text-white nav-user-name"><?php echo $this->session->userdata('nama'); ?></h5>
                             <span class="status"></span><span class="ml-2">Available</span>
                         </div>
                         <a class="dropdown-item" href="<?php echo base_url(); ?>keluar"><i class="fas fa-power-off mr-2"></i>Logout</a>
                     </div>
                 </li>
             </ul>
         </div>
     </nav>
 </div>

<div class="nav-left-sidebar sidebar-dark">
     <div class="menu-list">
         <nav class="navbar navbar-expand-lg navbar-light">
             <a class="d-xl-none d-lg-none" href="<?php echo base_url(); ?>">Dashboard</a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarNav">
                 <ul class="navbar-nav flex-column">
                     <li class="nav-divider">
                         Menu
                     </li>
                     <li class="nav-item">
                       <a class="nav-link" id="nav-dashboard" href="<?php echo base_url(); ?>admin">
                         <i class="fa fa-table"></i>Dashboard
                       </a>
                     </li>
                     <li class="nav-item">
                       <a class="nav-link" id="nav-user" href="<?php echo base_url(); ?>admin/user">
                         <i class="fa fa-user"></i>User
                       </a>
                     </li>
                     <li class="nav-item">
                       <a class="nav-link" id="nav-camaba" href="<?php echo base_url(); ?>admin/calon-mahasiswa-baru">
                         <i class="fa fa-university"></i>Calon Mahasiswa Baru
                       </a>
                     </li>
                 </ul>
             </div>
         </nav>
     </div>
 </div>
