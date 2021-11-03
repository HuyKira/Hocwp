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