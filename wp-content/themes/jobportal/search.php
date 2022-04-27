<?php get_header(); ?>

 <!-- Breadcromb Area Start -->
 <section class="jobguru-breadcromb-area">
         <div class="breadcromb-top section_100">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="breadcromb-box">
                        <h3>Search Results</h3>
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
                           <!-- <li class="active-breadcromb"><a href="#">browse jobs</a></li> -->
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcromb Area End -->  
       
      <!-- Top Job Area Start -->
      <section class="jobguru-top-job-area browse-page section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-lg-12 mx-auto">
                  <div class="job-grid-right">
                    <?php 
                  //   $args = array(
                  //       'post_type' => 'job-listing',

                  //   );
                  //   $query = new WP_Query($args);
                  //   if($query->have_posts()) {
                        while(have_posts()) : the_post();
                        ?>
                       <div class="sidebar-list-single">
                           <div class="top-company-list">
                              <div class="company-list-details">
                                 <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                 <p class="company-state"><i class="fa fa-map-marker"></i><?php the_content(); ?></p>
                                 <p class="open-icon"><i class="fa fa-briefcase"></i>2 open position</p>
                                 <p class="varify"><i class="fa fa-user"></i>2 Female</p>
                                 <p class="calendar"><i class="fa fa-calendar"></i>22-3-2022</p>
                              </div>
                              <div class="company-list-btn">
                                 <a href="job-page.html" class="jobguru-btn">View Details</a>
                              </div>
                           </div>
                        </div> 

                    <?php
                    endwhile;
                    ?>

                     <!-- end job sidebar list -->
                     <!-- <div class="pagination-box-row">
                        <p>Page 1 of 6</p>
                        <ul class="pagination">
                           <li class="active"><a href="#">1</a></li>
                           <li><a href="#">2</a></li>
                           <li><a href="#">3</a></li>
                           <li>...</li>
                           <li><a href="#">6</a></li>
                           <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                     </div> -->
                     <!-- end pagination -->
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Top Job Area End -->

<?php get_footer(); ?>