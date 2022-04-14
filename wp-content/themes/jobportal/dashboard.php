<?php 
/**
 * Template Name: dashboard
 * 
 */
get_header();
?>
      <!-- Breadcromb Area Start -->
      <section class="jobguru-breadcromb-area">
         <div class="breadcromb-top section_100">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="breadcromb-box">
                        <h3>Dashboard</h3>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="breadcromb-bottom">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="breadcromb-box-pagin">
                        <ul>
                           <li><a href="index.html">home</a></li>
                           <li class="active-breadcromb"><a href="#">Dashboard</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcromb Area End -->
       
       
      <!-- Candidate Dashboard Area Start -->
      <section class="candidate-dashboard-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-4 col-lg-3 dashboard-left-border">
                  <div class="dashboard-left">
                     <ul class="dashboard-menu">
                        <li class="active">
                           <a href="dashboard.html">
                           <i class="fa fa-tachometer"></i>
                           Dashboard
                           </a>
                        </li>
                        <li><a href="profile.html"><i class="fa fa-users"></i>Profile</a></li>
                        <li><a href="post-job.html"><i class="fa fa-envelope-open"></i>post a job</a></li>
                        <li><a href="manage-jobs.html"><i class="fa fa-briefcase"></i>manage jobs</a></li>
                        <li><a href="change-password.html"><i class="fa fa-lock"></i>change password</a></li>
                        <li><a href="index.html"><i class="fa fa-power-off"></i>LogOut</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-8 col-lg-9">
                  <div class="dashboard-right">
                     <div class="welcome-dashboard">
                        <h3>Welcome <span>Unique</span></h3>
                     </div>
                     <div class="row">
                        <div class="col-lg-4 col-md-6">
                           <div class="widget_card_page grid_flex widget_bg_blue">
                              <div class="widget-icon">
                                 <i class="fa fa-list"></i>
                              </div>
                              <div class="widget-page-text">
                                 <h4>1426</h4>
                                 <h2>Job Post</h2>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                           <div class="widget_card_page grid_flex  widget_bg_purple">
                              <div class="widget-icon">
                                 <i class="fa fa-file-pdf-o"></i>
                              </div>
                              <div class="widget-page-text">
                                 <h4>200</h4>
                                 <h2>Resume</h2>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                           <div class="widget_card_page grid_flex widget_bg_dark_red">
                              <div class="widget-icon">
                                 <i class="fa fa-users"></i>
                              </div>
                              <div class="widget-page-text">
                                 <h4>127</h4>
                                 <h2>Candidates</h2>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Candidate Dashboard Area End -->


<?php get_footer(); ?>