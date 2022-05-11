<?php
/**
 *  Template Name: all-jobs
 * 
 * 
 * */ 

get_header();
?>

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

<section class="jobguru-top-job-area browse-page section_70">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-3 mx-auto">
                <div class="job-grid-sidebar">
                    <!-- Single Job Sidebar Start -->

                    <!-- Single Job Sidebar Start -->
                    <div class="single-job-sidebar sidebar-location">
                        <h3>Category</h3>
                        <div class="date-post-job job-sidebar-box" id="job-type-cats">
                            <?php 
                  $terms = get_terms(array(
   
                     'taxonomy' => 'job_category',
                     'orderby' => 'name',
                     'hide_empty' => false,

                  )); 
                  foreach($terms as $term) {
                 //echo "<pre>"; print_r($term); exit('poik');
                     ?>
                            <div class="form-group form-radio">
                                <input id="<?php echo $term->term_id;?>" value="<?php echo $term->slug;?>"
                                    class="search_fun" name="jobs_type_cat" type="radio" />
                                <label for="<?php echo $term->term_id;?>" class="inline control-label">
                                    <?php echo $term->name; ?></label>
                            </div>
                            <?php
                  }
                  ?>
                        </div>
                    </div>
                    <div class="single-job-sidebar sidebar-location">
                        <h3>Gender</h3>
                        <div class="date-post-job job-sidebar-box" id="job-type-gender">
                            <div class="form-group form-radio">
                                <input id="male" value="Male" name="job_type_gender" type="radio">
                                <label for="male" class="inline control-label">
                                    Male</label>
                            </div>
                            <div class="form-group form-radio">
                                <input id="female" value="Female" name="job_type_gender" type="radio">
                                <label for="female" class="inline control-label">
                                    Female</label>
                            </div>
                            <div class="form-group form-radio">
                                <input id="both" value="Both" name="job_type_gender" type="radio">
                                <label for="both" class="inline control-label">
                                    Both</label>
                            </div>

                        </div>
                    </div>
                    <div class="single-job-sidebar sidebar-type">
                        <h3>job Type</h3>
                        <div class="job-sidebar-box" id="job-type-unique">
                            <ul>

                                <li class="checkbox">
                                    <input class="checkbox-spin" type="checkbox" id="Internship" value="Internship">
                                    <label for="Internship"><span></span>Internship</label>
                                </li>
                                <li class="checkbox">
                                    <input class="checkbox-spin" type="checkbox" id="Part-time" value="Part-time">
                                    <label for="Part-time"><span></span>Part Time</label>
                                </li>
                                <li class="checkbox">
                                    <input class="checkbox-spin" type="checkbox" id="Full-time" value="Full-time">
                                    <label for="Full-time"><span></span>Full Time</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Job Sidebar End -->
                </div>
            </div>
            <div class="col-md-10 col-lg-9 mx-auto">
                <div class="browse-job-head-option">
                    <div class="job-browse-search">

                        <form action="" method="GET">
                            <input type="s" name="search" value="" placeholder="Search Jobs Here...">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>

                </div>
                <div class="job-grid-right">

                    <div class="job-sidebar-list-single" id="search_by">
                       <?php
                         $args = array(
                           'post_type' => 'job-listing',
                           'post_status' => 'publish',
                        );
                    
                        $query = new WP_Query($args);
                        if($query->have_posts()):
                           while($query->have_posts()):
                              $query->the_post();
                           
                              ?>
                                       <div class="sidebar-list-single">
                                           <div class="top-company-list">
                                               <div class="company-list-details">
                                                   <h3><a href="<?php the_permalink(); ?>"><?php the_title();  ?></a></h3>
                                                   <p class="company-state"><a href="#"><i
                                                               class="fa fa-map-marker"></i><?php echo get_field('field_6278e13325db3'); ?></a>
                                                   </p>
                                                   <p class="open-icon"><i
                                                           class="fa fa-briefcase"></i><?php echo get_field('field_6278e34dc145a'); ?>
                                                   </p>
                                                   <p class="varify"><i
                                                           class="fa fa-user"></i><?php echo get_field('field_6278e76a8c437'); ?></p>
                                                   <p class="calendar"><i class="fa fa-calendar"></i>Posted
                                                       Date:<?php echo get_field('field_6278e7278c435'); ?></p>
                                                   <p class="calendar"><i class="fa fa-calendar"></i>Expiry Date:
                                                       <?php echo get_field('field_6278e7528c436'); ?></p>
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
                    </div>


                    <div class="company-list-btn">
                        <a href="#" class="jobguru-btn">View Details</a>
                    </div>
                </div>
            </div> <!-- end sidebar single list -->



        </div>
        <!-- end sidebar single list -->
    </div>
    <!-- end job sidebar list -->

    <!-- end pagination -->
    </div>
    </div>
    </div>
    </div>
</section>

<?php get_footer(); ?>

<script>
jQuery(document).ready(function() {

    jQuery('.search_fun').click(function() {
        var id = $(this).attr('id');
        var str = 'id=' + id + '&action=more_post_ajax';

        jQuery.ajax({
            type: "POST",

            dataType: 'html',

            url: '<?php echo admin_url('/admin-ajax.php') ?>',

            data: str,

            success: function(data) {
                console.log(data);
                 if(data.length){
                  jQuery("#search_by").html("");
                 	jQuery("#search_by").append(data);
                     //jQuery("#more_posts").attr("disabled",false);

                 }else{
                  jQuery("#search_by").html("");
                 	jQuery("#search_by").append("No Post Found");
                 } 
            },

            error: function(jqXHR, textStatus, errorThrown) {

                console.log(errorThrown);

                jQueryloader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);

            }

        });

        return false;

    });
});
</script>