<!-- Top Page -->
<?php get_header();?>
  <main>
    <section class="section-mv w-full">
      <div class="w-full flex">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mv.jpg" class="w-full" alt="world site" />
      <div>
    </section>
    <section style="padding-inline:100px" class="section-news" style="margin-block:50px">
     
      <div class="section-content">
        <?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 3,
            'paged' => $paged
          );
          $works = new WP_Query($args);

          if ($works->have_posts()) :
            while ($works->have_posts()) :
              $works->the_post();
        ?>
          <div class="section-news-item">
            <a href="<?php the_permalink();?>">
              <div class="flex gap-2">
                <h3 class="w-full"><?php the_title(); ?></h3>
              </div>
            </a>
          </div>
        <?php
          endwhile;
          else :
            echo '<p class="w-full text-center">No News</p>';
            wp_reset_postdata();
          endif;
        ?>
      </div>
    </section>
    <section style="padding-inline:100px" class="section-faq" style="margin-block:30px">
     
      <div class="section-content">
        <?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array(
            'post_type' => 'post-faq',
            'post_status' => 'publish',
            'posts_per_page' => 3,
            'paged' => $paged
          );
          $works = new WP_Query($args);

          if ($works->have_posts()) :
            while ($works->have_posts()) :
              $works->the_post();
        ?>
          <div class="section-faq-item">
            <div class="faq-question flex justify-between items-center">
              <h3><?php the_title(); ?></h3>
              <span>&#10097;</span>
            </div>
            <div class="faq-answer w-full" style="display:none;">
              <?php the_content(); ?>
            </div>
          </div>
        <?php
            endwhile;
            else :
            echo '<p class="w-full text-center"></p>';
            wp_reset_postdata();
          endif;
        ?>
      </div>
    </section>

    <?php echo do_shortcode('[contact-form-7 id="0c31167" title="Contact"]');?>
  </div>
  </main>
<?php get_footer();?>
