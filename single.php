<?php get_header() ?>
<div id="content">
  <div class="container">
    <div class="breadcrumb">
      <?php
        if (function_exists('yoast_breadcrumb')) {
          yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
        }
      ?>
    </div>

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-9">
        <div class="post-news">
          <?php 
            if (have_posts( )) :
              while (have_posts( )) : the_post();
              setpostview(get_the_id());
          ?>
          <h1 class="single-title"> <?php the_title() ?></h1>

          <div class="meta">
            <span>Ngày đăng: <?php echo get_the_date() ?></span>
            <span>Tác giả: <?php the_author() ?></span>
            <span>Chuyên mục: <?php the_category(', ') ?></span>
            <span>Lượt xem: <?php echo getpostviews(get_the_id()) ?> lượt</span>
          </div>

          <article class="post-content">
            <?php the_content() ?>
          </article>

          <div class="tag">
            <p><?php the_tags('Tags: ') ?></p>
          </div>
          <?php
            endwhile; 
          ?>
          <?php endif ?>
        </div>
      </div>

      <div class="lienquan">
        <h3>Bài viết liên quan</h3>
        <div class="content-lienquan">
              <!-- Hiển thị bài viết theo Tag -->
          <div id="relatedposttags">    
              <?php
                  $tags = wp_get_post_tags(get_the_id());
                  if ($tags) 
                  {
                      $tag_ids = array();
                      foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
          // lấy danh sách các tag liên quan
                      $args=array(
                      'tag__in' => $tag_ids,
                      'post__not_in' => array(get_the_id()), // Loại trừ bài viết hiện tại
                      'showposts'=>5, // Số bài viết bạn muốn hiển thị.
                      'caller_get_posts'=>1
                      );
                      $my_query = new wp_query($args);
                      if( $my_query->have_posts() ) 
                      {
                          echo '<ul>';
                          while ($my_query->have_posts()) 
                          {
                              $my_query->the_post();
                              ?>
                              <li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
                              <?php
                          }
                          echo '</ul>';
                      }
                  }
              ?>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-3">
        <div class="sidebar">
          <?php get_sidebar() ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer() ?>