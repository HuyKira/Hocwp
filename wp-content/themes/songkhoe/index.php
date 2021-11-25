<?php get_header(); ?>
		<div id="content">
			<div class="container">
				<div class="content-top row">
					<div class="col-md-4 col-sm-6 col-xs-6 col-top">
						<div class="news_hot border">
							<h3><span>Tin nóng</span></h3>
							<ul>
								<?php 
									$args = array( 
										'post_type' => 'post', 
										'posts_per_page' => 7, 
										'post_status' => 'publish'
									);
								?>
								<?php $getposts = new WP_query($args);?>
								<?php global $wp_query; $wp_query->in_the_loop = true; ?>
								<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
									<li>
										<a href="<?php the_permalink(); ?>" class="img">
											<img src='<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );?>' alt='<?php the_title(); ?>' />
										</a>
										<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
									</li>
								<?php endwhile; wp_reset_postdata(); ?>
							</ul>
						</div> <!-- end news_hot -->
					</div>
					<div class="col-md-5 col-sm-12 slider col-top">
						<div class="block-slider">
							<ul class="rslides">
								<?php 
									$args = array( 
										'post_type' => 'post', 
										'posts_per_page' => 4, 
										'post_status' => 'publish',
										'meta_key' => '_is_ns_featured_post', 
										'meta_value' => 'yes'
									); 
								?>
								<?php $getposts = new WP_query( $args);?>
								<?php global $wp_query; $wp_query->in_the_loop = true; ?>
								<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
								<li>
									<img src='<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );?>' alt='<?php the_title(); ?>' />
									<div class="txt">
										<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>	
									</div> <!-- end txt -->
								</li>
								<?php endwhile; wp_reset_postdata(); ?>
							</ul>
						</div> <!-- end block-slider -->

						<div class="block-banner">
							<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/banner-3.jpg" alt="" /></a>
						</div> <!-- end block-banner -->
					</div> <!-- end slider -->
					<div class="col-md-3 col-sm-6 col-xs-6 col-top">
						<div class="views border">
							<h3><span>Xem nhiều nhất</span></h3>

							<ul>
								<li><a href="#"><span>Trang sức không thể thiếu của các quý cô hiện đại</span></a></li>
								<li><a href="#"><span>Nhã Phương diện váy cưới trắng xinh như thiên thần</span></a></li>
								<li><a href="#"><span>Chàng yêu nét nào trên gương mặt bạn?</span></a></li>
								<li><a href="#"><span>"Tất tần tật" bí quyết dưỡng tóc đẹp bằng bia bạn không thể bỏ ...</span></a></li>
								<li><a href="#"><span>Bí quyết yêu để... sống lâu dành cho giới trẻ</span></a></li>
								<li><a href="#"><span>Bí quyết phong thủy đơn giản để sống khỏe và vui</span></a></li>
								<li><a href="#"><span>12 lựa chọn tốt cho khỏe của bạn trong năm mới</span></a></li>
								<li><a href="#"><span>Sử dụng đệm đúng cách để cột sống khỏe mạnh</span></a></li>
								<li><a href="#"><span>7 bí quyết giữ hạnh phúc của nhà tâm lý nổi tiếng</span></a></li>
							</ul>
						</div> <!-- end views -->
					</div>
				</div> <!-- end content-top -->

				<div class="block-content row">
					<div class="col-md-9 col-sm-8 col-bot left-content">
						<?php get_category_post_home(2); ?>
						<?php get_category_post_home(3); ?>
						<?php get_category_post_home(4); ?>
						<div class="banner">
							<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/banner-2.jpg" alt=""/></a>
						</div> <!-- end banner -->

						<?php get_category_post_home(5); ?>
						<?php get_category_post_home(6); ?>

						<div class="block-clinic border">
							<h3><span>Phòng khám</span></h3>
							
							<a href="#" class="block-creat">Phòng khám mới</a>
							<ul class="row">
								<?php $args = array( 
									'post_type' => 'post', 
									'posts_per_page' => 8, 
									'post_status' => 'publish',
									'cat' => 14
								); ?>
								<?php $getposts = new WP_query( $args);?>
								<?php global $wp_query; $wp_query->in_the_loop = true; ?>
								<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
									<li class="col-md-3 col-sm-4 col-xs-4">
										<div class="detail">
											<a href="<?php the_permalink(); ?>" class="img">
												<img style="height: 110px; width: 100%; object-fit: cover" src='<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );?>' alt='<?php the_title(); ?>' />
											</a>
											<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
											<span>50 Hàm Nghi, Đà Nẵng</span>
										</div>
									</li>
								<?php endwhile; wp_reset_postdata(); ?>
							</ul>
						</div> <!-- end block-clinic -->					
					</div> <!-- end left-content -->
					<div class="col-md-3 col-sm-4 col-bot right-content">
						<div class="banner">
							<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/right-2.jpg" alt=""/></a>
						</div> <!-- end banner -->

						<div class="views border">
							<h3><span>Hỏi đáp</span></h3>

							<ul>
								<li><a href="#"><span>Trang sức không thể thiếu của các quý cô hiện đại</span></a></li>
								<li><a href="#"><span>Nhã Phương diện váy cưới trắng xinh như thiên thần</span></a></li>
								<li><a href="#"><span>Chàng yêu nét nào trên gương mặt bạn?</span></a></li>
								<li><a href="#"><span>"Tất tần tật" bí quyết dưỡng tóc đẹp bằng bia bạn không thể bỏ ...</span></a></li>
								<li><a href="#"><span>Bí quyết yêu ��ể... sống lâu dành cho giới trẻ</span></a></li>
								<li><a href="#"><span>Bí quyết phong thủy đơn giản để sống khỏe và vui</span></a></li>
								<li><a href="#"><span>12 lựa chọn tốt cho khỏe của bạn trong năm mới</span></a></li>
							</ul>
						</div> <!-- end views -->

						<div class="video border">
							<h3><span>Video nổi bật</span></h3>

							<iframe width="100%" height="150" src="https://www.youtube.com/embed/McyacGgU7YY" frameborder="0" allowfullscreen></iframe>

							<ul class="list">
								<li>
									<a href="#" class="img"><img src="<?php bloginfo('template_directory'); ?>/images/video-1.jpg" alt=""></a>
									<h5><a href="#">Trang sức không thể thiếu của các quý cô hiện đại</a></h5>
								</li>
								<li>
									<a href="#" class="img"><img src="<?php bloginfo('template_directory'); ?>/images/video-2.jpg" alt=""></a>
									<h5><a href="#">Trang sức không thể thiếu của các quý cô hiện đại</a></h5>
								</li>
								<li>
									<a href="#" class="img"><img src="<?php bloginfo('template_directory'); ?>/images/video-3.jpg" alt=""></a>
									<h5><a href="#">Trang sức không thể thiếu của các quý cô hiện đại</a></h5>
								</li>
								<li>
									<a href="#" class="img"><img src="<?php bloginfo('template_directory'); ?>/images/video-4.jpg" alt=""></a>
									<h5><a href="#">Trang sức không thể thiếu của các quý cô hiện đại</a></h5>
								</li>
							</ul>
						</div> <!-- end video border -->

						<div class="block-trietly">
							<a href="#" class="img"><img src="<?php bloginfo('template_directory'); ?>/images/right-3.jpg" alt=""/></a>
							<h4><a href="#">Những mẫu chuyện hay đơn giản để sống vui vẻ</a></h4>
							<p>Có một người vào thi để xin việc làm trong một công ty nọ, khi đi dọc hành lang đến phòng thi, anh thấy có mấy tờ giấy vụn dưới đất ...</p>
							<span>1.10.2015</span>
						</div> <!-- end block-trietly -->

						<div class="views border">
							<h3><span>Nhật ký sức khỏe</span></h3>

							<ul>
								<li><a href="#"><span>Trang sức không thể thiếu của các quý cô hiện đại</span></a></li>
								<li><a href="#"><span>Nhã Phương diện váy cưới trắng xinh như thiên thần</span></a></li>
								<li><a href="#"><span>Chàng yêu nét nào trên gương mặt bạn?</span></a></li>
								<li><a href="#"><span>"Tất tần tật" bí quyết dưỡng tóc đẹp bằng bia bạn không thể bỏ ...</span></a></li>
								<li><a href="#"><span>Bí quyết yêu để... sống lâu dành cho giới trẻ</span></a></li>
								<li><a href="#"><span>Bí quyết phong thủy đơn giản để sống khỏe và vui</span></a></li>
								<li><a href="#"><span>12 lựa chọn tốt cho khỏe của bạn trong năm mới</span></a></li>
							</ul>
						</div> <!-- end views -->

						<div class="banner">
							<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/right-4.jpg" alt=""/></a>
						</div> <!-- end banner -->

					</div> <!-- end right-content -->
				</div> <!-- end block-content -->
			</div>
		</div> <!-- end content -->
<?php get_footer(); ?>