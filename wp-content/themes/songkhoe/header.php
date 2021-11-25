<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<?php wp_head(); ?>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600&amp;subset=latin,vietnamese,latin-ext' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,500&amp;subset=latin,vietnamese,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/common.css"/>
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-4 col-xs-4 logo">
							<a href="/"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" /></a>
						</div> <!-- end logo -->
						<div class="col-md-4 col-sm-8 col-xs-7 phone_search">
							<div class="phone">
								<span class="icon">Icon phone</span>
								<div class="txt">
									<span>Tổng đài</span>
									<strong>1900 699 857</strong>
								</div> <!-- end txt -->
							</div> <!-- end phone -->
							<div class="search">
                                <form action="/" method="get">
                                    <input type="text" name="s" class="form-control" id="search" />
								    <button id="send" type="submit">Search</button>
                                </form>
							</div> <!-- end search -->
						</div>
						<div class="col-md-5 col-sm-4 block-banner">
							<div class="banner">
								<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/banner-1.jpg" alt="" /></a>
							</div> <!-- end banner -->
						</div>
					</div>
				</div>
			</div> <!-- end header-top -->
			<div class="header-bot">
				<div class="container">
					<div class="menu">
						<a href="javascript:void(0)" class="smobitrigger ion-navicon-round"><span>Menu</span></a>
                        <?php 
                            wp_nav_menu( 
                                array( 
                                    'theme_location' => 'header-menu', 
                                    'container' => 'false', 
                                    'menu_id' => '', 
                                    'menu_class' => 'mobimenu'
                                ) 
                            ); 
                        ?>
					</div> <!-- end menu -->
				</div>
			</div> <!-- end header-bot -->
		</div> <!-- end header -->