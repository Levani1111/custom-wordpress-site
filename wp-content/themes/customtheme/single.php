<?php get_header(); ?>
<!-- display posts -->
<section class="page-wrap my-1 py-5">
    <div class="container my-1 py-5">
        <!-- Show a featured imag posts -->
        <?php if (has_post_thumbnail()) : ?>                              <!-- Show a featured imag posts -->
            <div class="img-fluid img-thumbnails mb-3 py-5">              <!-- Show a featured imag posts -->
                <?php the_post_thumbnail('banner-image'); ?>              <!-- Show a featured imag posts -->
            </div>
        <?php endif; ?>
        <h1><?php the_title();?></h1>                                      <!-- Show a title posts -->
        <?php get_template_part('includes/section', 'blogcontent'); ?>     <!-- Show a content posts -->
    </div>
</section>

<?php get_footer(); ?>