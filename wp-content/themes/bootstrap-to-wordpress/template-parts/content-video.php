
<?php
// Advanced custom fealds variable
$course_introduction_title = get_field('course_introduction_title');

 ?>

 <!-- VIDEO FEATURETTE
================================================== -->
<section id="featurette">
    <div class="container">
      <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
             <h2><?php echo $course_introduction_title ?></h2>
             <?php
                  // Get the video URL and put it in the $video variable
                  $videoID = get_post_meta(50, 'youtube_url', true);
                  // Echo the embed code via oEmbed
                  echo wp_oembed_get( 'http://www.youtube.com/watch?v=' . $videoID );
                  ?>
          </div><!-- end col -->
      </div><!-- row -->
    </div><!-- container -->
</section><!-- featurette -->
