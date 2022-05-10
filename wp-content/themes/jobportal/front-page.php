     <?php get_header(); ?>
     <!-- Banner Area Start -->
      <section class="jobguru-banner-area">
         <div class="banner-slider owl-carousel">
            <div class="banner-single-slider slider-item-1">
               <div class="slider-offset"></div>
            </div>
            <div class="banner-single-slider slider-item-2">
               <div class="slider-offset"></div>
            </div>
         </div>
         <div class="banner-text">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="banner-search">
                        <h2>Find Your Career Here</h2>
                        <h4>We have <strong>Dream</strong> job offers for you! </h4>
                        <form action="<?php echo site_url(''); ?>" method="get" id="searchform" class="searchform">
                           <div class="banner-form-box">
                              <div class="banner-form-input">
                                 <input type="text" name="s" placeholder="Job Title, Keywords, or Phrase" id="search"/>
                              </div>
                              <div class="banner-form-input">
                                 <button type="submit"><i class="fa fa-search"></i></button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Banner Area End -->
       
       
       <!-- Categories Area Start -->
       <section class="jobguru-categories-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading">
                     <h2 class="theme-title">Job Categories</h2>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <?php 

               $cat = get_terms(
                  array(
                        'taxonomy'   => 'job_category', // Custom Post Type Taxonomy Slug
                        'hide_empty' => false,
                        'order'         => 'asc'
                     )
                  );
               // $cat = get_the_category('job_category'); 
               foreach($cat as $cats) {              
               ?> 

               <div class="col-lg-3 col-md-6 col-sm-6">
                  <a href="<?php echo get_term_link($cats); ?>" class="single-category-holder account_cat">
                     <div class="category-holder-icon">
                        <i class="fa fa-briefcase"></i>
                     </div>
                     <div class="category-holder-text">
                        <h3><?php echo $cats->name; ?></h3>
                     </div>
                     <img src="<?php echo get_field('field_62500f91c3c19'); ?>" alt="category"/>
                  </a>
               </div>
               <?php } ?>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="load-more">
                  <a href="<?php echo site_url('all-jobs'); ?>" class="jobguru-btn">browse all categories</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Categories Area End -->
       
       
      <!-- Inner Hire Area Start -->
      <section class="jobguru-inner-hire-area section_100">
         <div class="hire_circle"></div>
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="inner-hire-left">
                     <h3>About Us</h3>
                     <p>placerat congue dui rhoncus sem et blandit .et consectetur Fusce nec nunc lobortis lorem ultrices facilisis. Ut dapibus placerat blandit nunc.congue dui rhoncus sem et blandit .et consectetur Fusce nec nunc lobortis lorem ultrices facilisis. Ut dapibus placerat blandi </p>
                     <a href="register.html" class="jobguru-btn-3">sign up for Jobs</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Inner Hire Area End -->
       
       
      <!-- Job Tab Area Start -->
      <section class="jobguru-job-tab-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading">
                     <h2>job offers</h2>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class=" job-tab">
                     <ul class="nav nav-pills job-tab-switch" id="pills-tab" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link active" id="pills-companies-tab" data-bs-toggle="pill" href="#pills-companies" role="tab" aria-controls="pills-companies" aria-selected="true">Full Time</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="pills-job-tab" data-bs-toggle="pill" href="#pills-job" role="tab" aria-controls="pills-job" aria-selected="false">Intership</a>
                        </li>
                     </ul>
                  </div>
                  <div class="tab-content" id="pills-tabContent">
                     <div class="tab-pane fade show active" id="pills-companies" role="tabpanel" aria-labelledby="pills-companies-tab">
                        <div class="top-company-tab">
                              <?php 
                              $args = array(
                                 'post_type' => 'job-listing',
                                 'post_status' => 'publish',
                                 'posts_per_page' => '6',

                              );
                              $query = new WP_Query($args);
                              if ( $query->have_posts() ) : 
                                 while ( $query->have_posts() ) :

                                 $query->the_post(); 
                                 ?>
                                 <ul>
                                 <li>
                                    <div class="top-company-list">
                                       <div class="company-list-details">
                                          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                          <p class="company-state"><i class="fa fa-map-marker"></i> 107 Wahdat Rd, Block A Muslim Town, Lahore, Punjab</p>
                                          <p class="open-icon"><i class="fa fa-briefcase"></i>2 open position</p>
                                          <p class="varify"><i class="fa fa-user"></i>2 Female</p>
                                          <p class="calendar"><i class="fa fa-calendar"></i>22-3-2022</p>
                                       </div>
                                       <div class="company-list-btn">
                                          <a href="job-page.html" class="jobguru-btn">view Details</a>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                              <?php
                                 endwhile;
                                 endif;
                              ?>
                              
                        </div>
                     </div>
                     <div class="tab-pane fade" id="pills-job" role="tabpanel" aria-labelledby="pills-job-tab">
                        <div class="top-company-tab">
                           <ul>
                              <li>
                                 <div class="top-company-list">
                                    <div class="company-list-details">
                                       <h3><a href="job-page.html">jamulai - consulting & finance Co.</a></h3>
                                       <p class="company-state"><i class="fa fa-map-marker"></i> 107 Wahdat Rd, Block A Muslim Town, Lahore, Punjab</p>
                                       <p class="open-icon"><i class="fa fa-briefcase"></i>2 open position</p>
                                       <p class="varify"><i class="fa fa-user"></i>2 Female</p>
                                       <p class="calendar"><i class="fa fa-calendar"></i>22-3-2022</p>
                                    </div>
                                    <div class="company-list-btn">
                                       <a href="job-page.html" class="jobguru-btn">view Details</a>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="load-more">
                     <a href="all-jobs.html" class="jobguru-btn">browse more Jobs</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Job Tab Area End -->
      <?php get_footer(); ?>