<?php $query = new WP_Query( 'posts_per_page=3' ); ?>
<?php while($query->have_posts()) : $query->the_post(); ?>
<div class="item-content">
  <div class="item-media">
    <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark">
      <?php the_post_thumbnail(); ?>
      <h3 class="media-title">
      <?php if (strlen($post->post_title) > 75) {echo substr(the_title($before = '', $after = '', FALSE), 0, 75) . '...'; } else {the_title();} ?>
      </h3>
    </a>
  </div>
  <div class="media-description">
    <p><?php the_excerpt(); ?></p>
  </div>
</div>
<?php endwhile; wp_reset_postdata();?>