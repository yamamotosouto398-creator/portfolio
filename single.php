<?php get_header();?>
  <main >
    <div class="post-item" style="padding:50px">
      <a href="<?php echo esc_url( $permalink ); ?>">
          <h2 style="padding-bottom:20px"><?php the_title(); ?></h2>
      </a>
      <div class="excerpt" style="margin:auto; background-color:#e7e7e7; padding:30px; border-radius:10px">
          <?php the_content(); ?>
      </div>
      </div>
  </main>
<?php get_footer();?>