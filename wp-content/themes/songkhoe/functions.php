<?php

function init_theme(){
    // bất tính năng úp ảnh đại diện cho bài viết
    add_theme_support('post-thumbnails'); 

    // Đăng ký menu
    register_nav_menu('header-menu',__( 'Menu trên' ));
    register_nav_menu('footer-menu',__( 'Menu dưới' ));

    // tạo sidebar wiget
    if (function_exists('register_sidebar')){
        register_sidebar(array(
            'name'=> 'Cột bên',
            'id' => 'sidebar',
        ));
    }
}

add_action('init', 'init_theme');

function get_category_post_home($id){ ?>
    <div class="block-category border">							
        <div class="title">
            <?php 
                $category_id = $id;
                $category_name = get_the_category_by_ID($category_id);
            ?>
            <ul>
                <li><span><?php echo $category_name; ?></span></li>
                <?php 
                    $args = array( 
                        'hide_empty' => 0,
                        'taxonomy' => 'category',
                        'orderby' => 'id',
                        'parent' => $category_id
                    );
                    $cates = get_categories( $args ); 
                    foreach ( $cates as $cate ) { ?>
                    <li>
                        <a href="<?php echo get_term_link($cate->slug, 'category'); ?>">
                            <?php echo $cate->name; ?>
                        </a>
                    </li>
                <?php 
                    }
                ?>
            </ul>
        </div> <!-- end title -->
        
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-6">
                <div class="news_title">
                    <?php $args = array( 
                        'post_type' => 'post', 
                        'posts_per_page' => 1, 
                        'post_status' => 'publish',
                        'cat' => $category_id
                    ); ?>
                    <?php $getposts = new WP_query( $args);?>
                    <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="img">
                            <img src='<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );?>' alt='<?php the_title(); ?>' />
                        </a>
                        <div class="txt">
                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <span class="date"><?php echo get_the_date('d - m - Y'); ?></span>
                        </div>
                        <div class="clear"></div>
                    <?php endwhile; wp_reset_postdata(); ?>
                    
                </div> <!-- end news_title -->
                <ul class="list-cate">
                    <?php 
                        $args = array( 
                            'post_type' => 'post', 
                            'posts_per_page' => 4, 
                            'post_status' => 'publish',
                            'cat' => $category_id,
                            'offset' => 1
                        ); 
                    ?>
                    <?php $getposts = new WP_query( $args);?>
                    <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                        <li><a href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a></li>
                    <?php endwhile; wp_reset_postdata(); ?>
                </ul> <!-- end list-cate -->
            </div>
            <div class="col-md-6 col-sm-12 col-xs-6">
                <ul class="list-cate">
                <?php 
                    $args = array( 
                        'post_type' => 'post', 
                        'posts_per_page' => 7, 
                        'post_status' => 'publish',
                        'cat' => $category_id,
                        'offset' => 5
                    ); 
                ?>
                <?php $getposts = new WP_query( $args);?>
                <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                    <li><a href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a></li>
                <?php endwhile; wp_reset_postdata(); ?>
                </ul> <!-- end list-cate -->
            </div>
        </div>
    </div> 
<?php }