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
          </div>
          
          <article class="post-content">
              <?php the_content() ?>
          </article>

          <?php
            endwhile; 
          ?>
          <?php endif ?>
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