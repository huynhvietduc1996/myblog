			<footer>
			  <div class="container">
			    <div class="row">
			      <div class="col-xs-12 col-sm-12 col-md-4">
			        <div class="block-footer">
								<!-- Get post News Query -->
								<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=10&post_type=page&p=6'); ?>
								<?php global $wp_query; $wp_query->in_the_loop = true; ?>
								<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
									<h3>Về tôi</h3>
									<p>Thằng em 96 cơ khí bách khoa</p>
									<a href="<?php the_permalink() ?>" class="readmore">Xem thêm</a>
								<?php endwhile; wp_reset_postdata(); ?>
								<!-- Get post News Query -->
			          
			        </div>
			      </div>
			      <div class="col-xs-12 col-sm-12 col-md-4">
			        <div class="block-footer">
			          <h3>Chuyên mục</h3>
			          <ul>
			           <?php
									$args = array(
											'child_of'  => 0,
											// '<strong>orderby</strong>' => 'id',
									);
									$categories = get_categories( $args );
									foreach ( $categories as $category ) { ?>
									<li>
										<a href="<?php echo get_term_link($category->slug, 'category'); ?>">
												<?php echo $category->name?>
												<!-- <span>(<?php echo $category->count ?>)</span> -->
										</a>
									</li>
									<?php } ?>
			          </ul>
			        </div>
			      </div>
			      <div class="col-xs-12 col-sm-12 col-md-4">
			        <div class="block-footer">
			          <h3>Liên hệ</h3>
			          <p>Điện thoại: 01658949680</p>
			          <p>Email: huykira@gmail.com</p>
			          <p><a href="<?php bloginfo('url') ?>/lien-he">Liên hệ</a></p>
			        </div>
			      </div>
			    </div>
			  </div>
			  <div class="copyright">
			    <p>Bản quyền thuộc về Huy Kira</p>
			  </div>
			</footer>
			</div>
			<script src="<?php bloginfo('template_directory') ?>/js/jquery-3.2.1.min.js"></script>
			<script src="<?php bloginfo('template_directory') ?>/libs/bootstrap/js/bootstrap.min.js"></script>
			<script src="<?php bloginfo('template_directory') ?>/js/main.js"></script>

			<?php wp_footer() ?>
			</body>

			</html>