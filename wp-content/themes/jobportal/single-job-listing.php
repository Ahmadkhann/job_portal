<?php get_header(); 

// getting Page ID 
$job_name = get_the_ID();
// echo $job_name;
// exit;

?>

<body>   
      <!-- Header Area Start -->
      <header class="jobguru-header-area stick-top forsticky">
         <div class="menu-animation">
            <div class="container">
               <div class="row align-item-center">
                  <div class="col-lg-2">
                     <div class="site-logo">
                        <a href="index.html">
                        <img src="assets/img/logo.png" alt="jobguru" class="non-stick-logo" />
                        <img src="assets/img/logo.png" alt="jobguru" class="stick-logo" />
                        </a>
                     </div>
                     <!-- Responsive Menu Start -->
                     <div class="jobguru-responsive-menu"></div>
                     <!-- Responsive Menu Start -->
                  </div>
                  <div class="col-lg-7">
                     <div class="header-menu">
                        <nav id="navigation">
                           <ul id="jobguru_navigation" class="other-pages">
                              <li class="active">
                                 <a href="#">Home</a>
                              </li>
                              <li class="">
                                 <a href="#">Jobs</a>
                              </li>
                              <li class="">
                                 <a href="#">Contact Us</a>
                              </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
                  <div class="col-lg-3">
                     <div class="header-right-menu">
                        <ul>
                           <!-- <li><a href="post-job.html" class="post-jobs">Post jobs</a></li> -->
                           <li><a href="register.html"><i class="fa fa-user"></i>sign up</a></li>
                           <li><a href="login.html"><i class="fa fa-lock"></i>login</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- Header Area End -->
       
       
      <!-- Single Candidate Start -->
      <section class="single-candidate-page section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-9 col-lg-6">
                  <div class="single-candidate-box">
                     <div class="single-candidate-box-right">
                        <h4><?php the_title(); ?></h4>
                        <p>Unique Group Of Institution</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 col-lg-6">
                  <div class="single-candidate-action">
                     <a href="#" class="candidate-contact"><i class="fa fa-star"></i>Bookmarks</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Single Candidate End -->
       
       
      <!-- Single Candidate Bottom Start -->
      <section class="single-candidate-bottom-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-10 col-lg-9 mx-auto">
                  <div class="single-candidate-bottom-left">
                     <div class="single-candidate-widget">
                        <h3>job Description</h3>
                        <p><?php the_content(); ?></p>
                     </div>

                     <div class="single-candidate-widget job-required">
                           <h3>Skills, and Abilities</h3>
                           <ul class="company-desc-list">
                     <?php 
        
                     if( have_rows('skills_and_abilities') ):
                        
                              while( have_rows('skills_and_abilities') ) : the_row();
                              $skills_abilities = get_sub_field('information');
                     ?>
                           
                     <li><i class="fa fa-check"></i><?php echo $skills_abilities;?></li>
                  
                     <?php
                        // End loop.
                        endwhile;
                     endif;
                      
                     ?>
                     </ul>
                        </div>
                     
                     <div class="single-candidate-widget clearfix">
                        <h3>Challenges & Benifits</h3>
                        <?php $challenges_and_benifits = get_field('challenges_and_benifits');?>
                          <p><?php echo $challenges_and_benifits; ?></p>
                       
                     </div>
                     <div class="single-candidate-widget clearfix">
                        <h3>share this post</h3>
                        <ul class="share-job">
                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                           <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                     </div>
                     <div class="single-candidate-widget">
                        <h3>Similar Jobs</h3>
                        <?php 
                        $args = array(
                           'post_type' => 'job-listing',
                           'post_status' => 'publish',
                           'posts_per_page' => '3',
                           'category__in' => wp_get_post_categories(get_the_ID()),
                           'post__not_in' => array(get_the_ID()),
                        );
                        
                        $query = new WP_Query($args);
                        if($query->have_posts()):
                           while($query->have_posts()):
                              $query->the_post();
                        ?>
                        <div class="sidebar-list-single">
                           <div class="top-company-list">
                              <div class="company-list-details">
                                 <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                 <p class="company-state"><i class="fa fa-map-marker"></i><?php echo get_field('location'); ?></p>
                                 <p class="open-icon"><i class="fa fa-briefcase"></i><?php echo get_field('vacant_position'); ?></p>
                                 <p class="varify"><i class="fa fa-user"></i><?php echo the_field('required_gender'); ?></p>
                                 <p class="calendar"><i class="fa fa-calendar"></i><?php echo get_field('posted_date'); ?></p>
                              </div>
                              <div class="company-list-btn">
                                 <a href="<?php the_permalink(); ?>" class="jobguru-btn">View Details</a>
                              </div>
                           </div>
                        </div>
                        <?php 
                        endwhile;
                     endif;
                        ?>
                        <!-- <div class="sidebar-list-single">
                           <div class="top-company-list">
                              <div class="company-list-details">
                                 <h3><a href="#">Asst. Teacher</a></h3>
                                 <p class="company-state"><i class="fa fa-map-marker"></i> C107 Wahdat Rd, Block A Muslim Town, Lahore</p>
                                 <p class="open-icon"><i class="fa fa-briefcase"></i>2 open position</p>
                                 <p class="varify"><i class="fa fa-user"></i>2 Female</p>
                                 <p class="calendar"><i class="fa fa-calendar"></i>22-3-2022</p>
                              </div>
                              <div class="company-list-btn">
                                 <a href="#" class="jobguru-btn">View Details</a>
                              </div>
                           </div>
                        </div> -->
                     </div>
                  </div>
               </div>
               <div class="col-md-10 col-lg-3 mx-auto">
                  <div class="single-candidate-bottom-right">
                     <div class="single-candidate-widget-2">
                        <a href="submit-resume.html"  class="jobguru-btn-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fa fa-paper-plane-o"></i>
                        Apply Now
                        </a>
                     </div>
                    <div class="single-candidate-widget-2">
                        <h3>Job overview</h3>
                        <ul class="job-overview">
                           <li>
                              <h4><i class="fa fa-map-marker"></i> Location</h4>
                              <p><?php echo get_field('location'); ?></p>
                           </li>
                           <li>
                              <h4><i class="fa fa-thumb-tack"></i> Job Type</h4>
                              <p><?php echo the_field('job_type'); ?></p>
                           </li>
                           <li>
                              <h4><i class="fa fa-clock-o"></i> Date Posted</h4>
                              <p><?php echo get_field('posted_date'); ?></p>
                           </li>
                        </ul>
                     </div>
                     <div class="single-candidate-widget-2">
                        <h3>Quick Contacts</h3>
                        <form>
                           <p>
                              <input type="text" placeholder="Your Name">
                           </p>
                           <p>
                              <input type="email" placeholder="Your Email Address">
                           </p>
                           <p>
                              <textarea placeholder="Write here your message"></textarea>
                           </p>
                           <p>
                              <button type="submit">Send Message</button>
                           </p>
                        </form>
                     </div>
                    </div>

                </div>
                  </div>
</div>
            
            </div>
         </div>
      </section>
      <!-- Single Candidate Bottom End -->
       
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                       <!-- Submit Resume Area Start -->
                                <section class="jobguru-submit-resume-area section_70">
                                    <div class="container">
                                        <div class="row">
                                        <div class="col-md-12">
                                            <div class="submit-resume-box">
                                                <form method="POST" enctype="multipart/form-data">
                                                    <div class="resume-box">
                                                    <h3>Personal Information</h3>
                                                    <div class="single-resume-feild">
                                                        <div class="single-input">
                                                            <label for="name">Your Name:</label>
                                                            <input type="text" placeholder="Your Full Name" name="name" id="name">
                                                        </div>
                                                        <!-- <div class="single-input">
                                                            <label for="p_title">Professional title:</label>
                                                            <input type="text" placeholder="e.g Web Developer" id="p_title">
                                                        </div> -->
                                                    </div>
                                                    <div class="single-resume-feild">
                                                        <div class="single-input">
                                                            <label for="Email">Email:</label>
                                                            <input type="email" placeholder="Your Email Address" name="email" id="Email">
                                                        </div>
                                                        <div class="single-input">
                                                            <label for="Phone">Phone:</label>
                                                            <input type="tel" placeholder="Phone Number" name="phone" id="Phone">
                                                        </div>
                                                    </div>
                                                    <div class="single-resume-feild ">
                                                        <div class="single-input">
                                                            <label for="Bio">Introduce Yourself:</label>
                                                            <textarea id="Bio" name="detail" placeholder="Write Your Bio Here..."></textarea>
                                                        </div>
                                                    </div>
                                                    </div>
                                                        <div class="single-input">
                                                            <label for="w_screen">Works Screenshot</label>
                                                            <div class="product-upload">
                                                                <p>
                                                                <i class="fa fa-upload"></i>
                                                                Max file size is 3MB,Suitable files are .jpg & .png
                                                                </p>
                                                                <input type="file" id="myfile" name="myfile">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="submit-resume">
                                                    <input type="submit" name="submit" value="Send Resume" />
                                                    </div>
                                                </form>
                                                
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- Submit Resume Area End -->
                        </div>
                        </div>
                    </div> 
      <!-- Job Tab Area End -->
   <?php
      if(isset($_POST['submit'])) {
         require_once( ABSPATH . 'wp-admin/includes/image.php' );
         require_once( ABSPATH . 'wp-admin/includes/file.php' );
         require_once( ABSPATH . 'wp-admin/includes/media.php' );
         $name = $_REQUEST['name'];
         $email = $_REQUEST['email'];
         $phone = $_REQUEST['phone'];
         $detail = $_REQUEST['detail'];
         // $file = $_FILES['myfile'];
         
     

      $data = array(
         'post_type' => 'candidate-list',
         'post_status' => 'pending',
         'post_title' => $name,
         'post_content' => $detail,
         // 'email' =>  $email,
         // 'phone' => $phone,
      );

     // Insert the data
      $my_post = wp_insert_post($data);

      $id = media_handle_upload('myfile', $my_post);
      
      
      $email_value  = 'field_624ea8c230792';
      $phone_value = 'field_624ea95230793';
      $job_post_name = 'field_624eb6f405787';
      $resume = 'field_624ea99e30794';
     
        
     update_field($email_value, $email, $my_post);
     update_field($phone_value,  $phone, $my_post);

   //   we will update post object(ACF Field) through page ID
     update_field($job_post_name,  $job_name, $my_post);

     update_field($resume, $id, $my_post);

}
   ?>
      <?php get_footer(); ?>