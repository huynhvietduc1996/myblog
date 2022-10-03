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
        <h1>Trang không tồn tại</h1>
        <div class="post-news">
          <p>Trang không tồn tại, về lại <a href="<?php bloginfo('url') ?>">trang chủ</a></p>
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