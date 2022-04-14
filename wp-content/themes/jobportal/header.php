<!DOCTYPE html>
<html lang="en-US">
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="#">
      <meta name="keyword" content="#">
      <meta name="author" content="#">
      <!-- Title -->
      <title>Unique | Job Portal</title>
      <!-- Favicon -->
      <!-- <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/logo_ugi.png"> -->
      <!-- Bootstrap css -->

      <?php wp_head(); ?>
   </head>
   <body>
       
       <?php 
       global $wp;
       $current_url = home_url( $wp->request );
       $base_url = site_url();
       if($base_url == $current_url) {
          $class = '';
       }
       else{
         $class = "other-pages";
       } 
       ?>

      <!-- Header Area Start -->
      <header class="jobguru-header-area stick-top forsticky">
         <div class="menu-animation">
            <div class="container">
               <div class="row align-item-center">
                  <div class="col-lg-2">
                     <div class="site-logo">
                        <a href="index.html">
                           <?php the_custom_logo() ?>
                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="jobguru" class="non-stick-logo" />
                        <img src="<?php echo get_template_directory_uri(); ?>assets/img/logo.png" alt="jobguru" class="stick-logo" /> -->
                        </a>
                     </div>
                     <!-- Responsive Menu Start -->
                     <div class="jobguru-responsive-menu"></div>
                     <!-- Responsive Menu Start -->
                  </div>
                  <div class="col-lg-7">
                     <div class="header-menu">
                        <nav id="navigation">
                           <!-- to display nay menu -->
                           <?php wp_nav_menu(array('theme_location' => 'header-menu' )); ?>
                           <!-- <ul id="jobguru_navigation " class="<?php echo $class; ?>">
                              <li class="active">
                                 <a href="home.html">Home</a>
                              </li>
                              <li class="">
                                 <a href="all-jobs.html">Jobs</a>
                              </li>
                              <li class="">
                                 <a href="contact.html">Contact Us</a>
                              </li>
                           </ul> -->
                        </nav>
                     </div>
                  </div>
                  <div class="col-lg-3">
                     <div class="header-right-menu">
                        <ul>
                           <!-- <li><a href="post-job.html" class="post-jobs">Post jobs</a></li> -->
                           <li><a href="<?php echo site_url('register'); ?>"><i class="fa fa-user"></i>sign up</a></li>
                           <li><a href="<?php echo site_url('login'); ?>"><i class="fa fa-lock"></i>login</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- Header Area End -->