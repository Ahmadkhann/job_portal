<?php get_header(); ?>

<body>
 <!-- Breadcromb Area Start -->
 <section class="jobguru-breadcromb-area">
         <div class="breadcromb-top section_100">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="breadcromb-box">
                        <h3>All Available Jobs</h3>
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
                           <li class="active-breadcromb"><a href="#">browse jobs</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcromb Area End -->

        <!-- Job Tab Area Start -->
        <section class="jobguru-job-tab-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="tab-content" id="pills-tabContent">
                     <div class="tab-pane fade show active" id="pills-companies" role="tabpanel" aria-labelledby="pills-companies-tab">
                        <div class="top-company-tab">
                              <?php 
                              $args = array(
                                
                                 'taxonomy' => 'job_category',

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
</body> 
<?php get_footer(); ?>