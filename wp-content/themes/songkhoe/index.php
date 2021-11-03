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
							<a href="index-2.html"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="" /></a>
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
								<input type="text" class="form-control" id="search" />
								<button id="send" type="submit">Search</button>
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
						<ul class="mobimenu">
							<li><a href="#">Trang chủ</a></li>
							<li><a href="#">Tin tức</a></li>
							<li><a href="#">Sống khỏe</a></li>
							<li><a href="#">Sống đẹp</a></li>
							<li><a href="#">Sống hay</a></li>
							<li><a href="#">Sống vui</a></li>
							<li><a href="#">bài thuốc</a></li>
							<li><a href="#">ăn chay</a></li>
							<li><a href="#">hỏi đáp - tư vấn</a></li>
							<li><a href="#">đàn ông</a></li>
							<li><a href="#">phụ nữ</a></li>
							<li><a href="#">bệnh tật</a></li>
							<li><a href="#">đời sống</a></li>
							<li><a href="#">dinh dưỡng</a></li>
							<li><a href="#">phòng khám</a></li>
							<li><a href="#">video</a></li>
						</ul>
					</div> <!-- end menu -->
				</div>
			</div> <!-- end header-bot -->
		</div> <!-- end header -->

		<div id="content">
			<div class="container">
				<div class="content-top row">
					<div class="col-md-4 col-sm-6 col-xs-6 col-top">
						<div class="news_hot border">
							<h3><span>Tin nóng</span></h3>

							<ul>
								<li>
									<a href="#" class="img"><img src="<?php bloginfo('template_directory'); ?>/images/list-new-1.jpg" alt=""/></a>
									<h4><a href="#">Cây thuốc chữa bệnh về gan, kể cả ung thư thời kỳ</a></h4>
								</li>
								<li>
									<a href="#" class="img"><img src="<?php bloginfo('template_directory'); ?>/images/list-new-2.jpg" alt=""/></a>
									<h4><a href="#">Bài thuốc đơn giản diệt tận gốc các bệnh cao</a></h4>
								</li>
								<li>
									<a href="#" class="img"><img src="<?php bloginfo('template_directory'); ?>/images/list-new-3.jpg" alt=""/></a>
									<h4><a href="#">Những điều đừng làm nếu không muốn nhận quả báo</a></h4>
								</li>
								<li>
									<a href="#" class="img"><img src="<?php bloginfo('template_directory'); ?>/images/list-new-4.jpg" alt=""/></a>
									<h4><a href="#">Mẹo hay trồng rau sạch hành tươi cần tây đơn giản.</a></h4>
								</li>
								<li>
									<a href="#" class="img"><img src="<?php bloginfo('template_directory'); ?>/images/list-new-2.jpg" alt=""/></a>
									<h4><a href="#">Giảm 7 kg trong 2 tuần theo thực đơn của người Nhật</a></h4>
								</li>
								<li>
									<a href="#" class="img"><img src="<?php bloginfo('template_directory'); ?>/images/list-new-5.jpg" alt=""/></a>
									<h4><a href="#">7 lợi ích kỳ diệu của nước có thể bạn chưa biết</a></h4>
								</li>
								<li>
									<a href="#" class="img"><img src="<?php bloginfo('template_directory'); ?>/images/list-new-6.jpg" alt=""/></a>
									<h4><a href="#">Bí quyết ăn Tết ngon mà không cảm thấy ngán</a></h4>
								</li>
							</ul>
						</div> <!-- end news_hot -->
					</div>
					<div class="col-md-5 col-sm-12 slider col-top">
						<div class="block-slider">
							<ul class="rslides">
								<li>
									<img src="<?php bloginfo('template_directory'); ?>/images/slider.jpg" alt="" />
									<div class="txt">
										<p><a href="#">Cây thuốc chữa bệnh về gan, kể cả ung thư thời kỳ</a></p>	
									</div> <!-- end txt -->
								</li>
								<li>
									<img src="<?php bloginfo('template_directory'); ?>/images/slider.jpg" alt="" />
									<div class="txt">
										<p><a href="#">Giảm 7 kg trong 2 tuần theo thực đơn của người Nhật</a></p>	
									</div> <!-- end txt -->
								</li>
								<li>
									<img src="<?php bloginfo('template_directory'); ?>/images/slider.jpg" alt="" />
									<div class="txt">
										<p><a href="#">Integer dapibus, risus mollis rhoncus tincidunt, tortor mi ullamcorper diam ...</a></p>	
									</div> <!-- end txt -->
								</li>
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
						<div class="block-category border">							
							<div class="title">
								<ul>
									<li><span>Sống khỏe</span></li>
									<li><a href="#">Khỏe mạnh mỗi ngày</a></li>
									<li><a href="#">Chế độ dinh dưỡng</a></li>
									<li><a href="#">Thể dục</a></li>
									<li><a href="#">Kiến thức đời sống</a></li>
								</ul>
							</div> <!-- end title -->
							
							<div class="row">
								<div class="col-md-6 col-sm-12 col-xs-6">
									<div class="news_title">
										<a href="#" class="img"><img src="<?php bloginfo('template_directory'); ?>/images/sk.jpg" alt=""></a>
										<div class="txt">
											<h4><a href="#">Triết Lý Hay Để Có Cuộc Sống Khỏe Mạnh Và Hạnh Phúc</a></h4>
											<span class="date">1 - 10 - 2015</span>
										</div>
										<div class="clear"></div>
									</div> <!-- end news_title -->
									<ul class="list-cate">
										<li><a href="#"><span>Cảm động bác sĩ quỳ 40 phút nhổ răng cho bé gái</span></a></li>
										<li><a href="#"><span>Sống khỏe với thiền định.</span></a></li>
										<li><a href="#"><span>Sống thọ và sống khỏe qua bài tập thở để đời quý giá.</span></a></li>
										<li><a href="#"><span>Tuyệt chiêu duy trì sức khỏe cột sống</span></a></li>
									</ul> <!-- end list-cate -->
								</div>
								<div class="col-md-6 col-sm-12 col-xs-6">
									<ul class="list-cate">
										<li><a href="#"><span>8 sai lầm về sức khỏe thường gặp</span></a></li>
										<li><a href="#"><span>10 việc nhất định phải làm để giúp bạn đẹp hơn trong năm mới</span></a></li>
										<li><a href="#"><span>10 bí mật bất ngờ của người không bao giờ ốm</span></a></li>
										<li><a href="#"><span>Bí quyết yêu để... sống lâu</span></a></li>
										<li><a href="#"><span>4 bước dưỡng sinh sau Tết</span></a></li>
										<li><a href="#"><span>10 việc khiến hen phế quản chào thua</span></a></li>
										<li><a href="#"><span>Tuyệt chiêu duy trì sức khỏe cột sống</span></a></li>
									</ul> <!-- end list-cate -->
								</div>
							</div>
						</div> <!-- end block-category -->

						<div class="block-category border">
							<div class="title">
								<ul>
									<li><span>Sống đẹp</span></li>
									<li><a href="#">thời trang</a></li>
									<li><a href="#">trang điểm</a></li>
									<li><a href="#">chăm sóc da</a></li>
									<li><a href="#">nhà đẹp</a></li>
								</ul>
							</div> <!-- end title -->
							<div class="row">
								<div class="col-md-6 col-sm-12 col-xs-6">
									<div class="news_title">
										<a href="#" class="img"><img src="<?php bloginfo('template_directory'); ?>/images/sd.jpg" alt=""></a>
										<div class="txt">
											<h4><a href="#">Triết Lý Hay Để Có Cuộc Sống Khỏe Mạnh Và Hạnh Phúc</a></h4>
											<span class="date">1 - 10 - 2015</span>
										</div>
										<div class="clear"></div>
									</div> <!-- end news_title -->
									<ul class="list-cate">
										<li><a href="#"><span>Cảm động bác sĩ quỳ 40 phút nhổ răng cho bé gái</span></a></li>
										<li><a href="#"><span>Sống khỏe với thiền định.</span></a></li>
										<li><a href="#"><span>Sống thọ và sống khỏe qua bài tập thở để đời quý giá.</span></a></li>
										<li><a href="#"><span>Tuyệt chiêu duy trì sức khỏe cột sống</span></a></li>
									</ul> <!-- end list-cate -->
								</div>
								<div class="col-md-6 col-sm-12 col-xs-6">
									<ul class="list-cate">
										<li><a href="#"><span>8 sai lầm về sức khỏe thường gặp</span></a></li>
										<li><a href="#"><span>10 việc nhất định phải làm để giúp bạn đẹp hơn trong năm mới</span></a></li>
										<li><a href="#"><span>10 bí mật bất ngờ của người không bao giờ ốm</span></a></li>
										<li><a href="#"><span>Bí quyết yêu để... sống lâu</span></a></li>
										<li><a href="#"><span>4 bước dưỡng sinh sau Tết</span></a></li>
										<li><a href="#"><span>10 việc khiến hen phế quản chào thua</span></a></li>
										<li><a href="#"><span>Tuyệt chiêu duy trì sức khỏe cột sống</span></a></li>
									</ul> <!-- end list-cate -->
								</div>
							</div>
						</div> <!-- end block-category -->

						<div class="block-category border">
							<div class="title">
								<ul>
									<li><span>Sống hay</span></li>
									<li><a href="#">yoga & thiền</a></li>
									<li><a href="#">cảnh báo</a></li>
									<li><a href="#">thể dục</a></li>
									<li><a href="#">bỏ hút thuốc</a></li>
								</ul>
							</div> <!-- end title -->
							<div class="row">
								<div class="col-md-6 col-sm-12 col-xs-6">
									<div class="news_title">
										<a href="#" class="img"><img src="<?php bloginfo('template_directory'); ?>/images/sh.jpg" alt=""></a>
										<div class="txt">
											<h4><a href="#">Triết Lý Hay Để Có Cuộc Sống Khỏe Mạnh Và Hạnh Phúc</a></h4>
											<span class="date">1 - 10 - 2015</span>
										</div>
										<div class="clear"></div>
									</div> <!-- end news_title -->
									<ul class="list-cate">
										<li><a href="#"><span>Cảm động bác sĩ quỳ 40 phút nhổ răng cho bé gái</span></a></li>
										<li><a href="#"><span>Sống khỏe với thiền định.</span></a></li>
										<li><a href="#"><span>Sống thọ và sống khỏe qua bài tập thở để đời quý giá.</span></a></li>
										<li><a href="#"><span>Tuyệt chiêu duy trì sức khỏe cột sống</span></a></li>
									</ul> <!-- end list-cate -->
								</div>
								<div class="col-md-6 col-sm-12 col-xs-6">
									<ul class="list-cate">
										<li><a href="#"><span>8 sai lầm về sức khỏe thường gặp</span></a></li>
										<li><a href="#"><span>10 việc nhất định phải làm để giúp bạn đẹp hơn trong năm mới</span></a></li>
										<li><a href="#"><span>10 bí mật bất ngờ của người không bao giờ ốm</span></a></li>
										<li><a href="#"><span>Bí quyết yêu để... sống lâu</span></a></li>
										<li><a href="#"><span>4 bước dưỡng sinh sau Tết</span></a></li>
										<li><a href="#"><span>10 việc khiến hen phế quản chào thua</span></a></li>
										<li><a href="#"><span>Tuyệt chiêu duy trì sức khỏe cột sống</span></a></li>
									</ul> <!-- end list-cate -->
								</div>
							</div>
						</div> <!-- end block-category -->

						<div class="banner">
							<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/banner-2.jpg" alt=""/></a>
						</div> <!-- end banner -->

						<div class="block-category border">
							<div class="title">
								<ul>
									<li><span>Sống vui</span></li>
									<li><a href="#">thực phẩm & nấu ăn</a></li>
									<li><a href="#">mẹo & cuộc sống</a></li>
									<li><a href="#">tự làm khéo tay</a></li>
								</ul>
							</div> <!-- end title -->
							<div class="row">
								<div class="col-md-6 col-sm-12 col-xs-6">
									<div class="news_title">
										<a href="#" class="img"><img src="<?php bloginfo('template_directory'); ?>/images/sv.jpg" alt=""></a>
										<div class="txt">
											<h4><a href="#">Triết Lý Hay Để Có Cuộc Sống Khỏe Mạnh Và Hạnh Phúc</a></h4>
											<span class="date">1 - 10 - 2015</span>
										</div>
										<div class="clear"></div>
									</div> <!-- end news_title -->
									<ul class="list-cate">
										<li><a href="#"><span>Cảm động bác sĩ quỳ 40 phút nhổ răng cho bé gái</span></a></li>
										<li><a href="#"><span>Sống khỏe với thiền định.</span></a></li>
										<li><a href="#"><span>Sống thọ và sống khỏe qua bài tập thở để đời quý giá.</span></a></li>
										<li><a href="#"><span>Tuyệt chiêu duy trì sức khỏe cột sống</span></a></li>
									</ul> <!-- end list-cate -->
								</div>
								<div class="col-md-6 col-sm-12 col-xs-6">
									<ul class="list-cate">
										<li><a href="#"><span>8 sai lầm về sức khỏe thường gặp</span></a></li>
										<li><a href="#"><span>10 việc nhất định phải làm để giúp bạn đẹp hơn trong năm mới</span></a></li>
										<li><a href="#"><span>10 bí mật bất ngờ của người không bao giờ ốm</span></a></li>
										<li><a href="#"><span>Bí quyết yêu để... sống lâu</span></a></li>
										<li><a href="#"><span>4 bước dưỡng sinh sau Tết</span></a></li>
										<li><a href="#"><span>10 việc khiến hen phế quản chào thua</span></a></li>
										<li><a href="#"><span>Tuyệt chiêu duy trì sức khỏe cột sống</span></a></li>
									</ul> <!-- end list-cate -->
								</div>
							</div>
						</div> <!-- end block-category -->

						<div class="block-category border">
							<div class="title">
								<ul>
									<li><span>bài thuốc</span></li>
									<li><a href="#">bệnh tật - trạng thái</a></li>
									<li><a href="#">thuốc bắc</a></li>
									<li><a href="#">thuốc nam</a></li>
									<li><a href="#">thuốc tây</a></li>
								</ul>
							</div> <!-- end title -->
							<div class="row">
								<div class="col-md-6 col-sm-12 col-xs-6">
									<div class="news_title">
										<a href="#" class="img"><img src="<?php bloginfo('template_directory'); ?>/images/sde.jpg" alt=""></a>
										<div class="txt">
											<h4><a href="#">Triết Lý Hay Để Có Cuộc Sống Khỏe Mạnh Và Hạnh Phúc</a></h4>
											<span class="date">1 - 10 - 2015</span>
										</div>
										<div class="clear"></div>
									</div> <!-- end news_title -->
									<ul class="list-cate">
										<li><a href="#"><span>Cảm động bác sĩ quỳ 40 phút nhổ răng cho bé gái</span></a></li>
										<li><a href="#"><span>Sống khỏe với thiền định.</span></a></li>
										<li><a href="#"><span>Sống thọ và sống khỏe qua bài tập thở để đời quý giá.</span></a></li>
										<li><a href="#"><span>Tuyệt chiêu duy trì sức khỏe cột sống</span></a></li>
									</ul> <!-- end list-cate -->
								</div>
								<div class="col-md-6 col-sm-12 col-xs-6">
									<ul class="list-cate">
										<li><a href="#"><span>8 sai lầm về sức khỏe thường gặp</span></a></li>
										<li><a href="#"><span>10 việc nhất định phải làm để giúp bạn đẹp hơn trong năm mới</span></a></li>
										<li><a href="#"><span>10 bí mật bất ngờ của người không bao giờ ốm</span></a></li>
										<li><a href="#"><span>Bí quyết yêu để... sống lâu</span></a></li>
										<li><a href="#"><span>4 bước dưỡng sinh sau Tết</span></a></li>
										<li><a href="#"><span>10 việc khiến hen phế quản chào thua</span></a></li>
										<li><a href="#"><span>Tuyệt chiêu duy trì sức khỏe cột sống</span></a></li>
									</ul> <!-- end list-cate -->
								</div>
							</div>
						</div> <!-- end block-category -->

						<div class="block-clinic border">
							<h3><span>Phòng khám</span></h3>
							
							<a href="#" class="block-creat">Phòng khám mới</a>
							<ul class="row">
								<li class="col-md-3 col-sm-4 col-xs-4">
									<div class="detail">
										<a href="#" class="img"><img src="<?php bloginfo('template_directory'); ?>/images/phongkham-1.jpg" alt="" /></a>
										<h4><a href="#">Phòng Khám Đa Khoa Polycare</a></h4>
										<span>50 Hàm Nghi, Đà Nẵng</span>
									</div>
								</li>
								<li class="col-md-3 col-sm-4 col-xs-4">
									<div class="detail">
										<a href="#" class="img"><img src="<?php bloginfo('template_directory'); ?>/images/phongkham-2.jpg" alt="" /></a>
										<h4><a href="#">Phòng Khám Đa Khoa Polycare</a></h4>
										<span>50 Hàm Nghi, Đà Nẵng</span>
									</div>
								</li>
								<li class="col-md-3 col-sm-4 col-xs-4">
									<div class="detail">
										<a href="#" class="img"><img src="<?php bloginfo('template_directory'); ?>/images/phongkham-3.jpg" alt="" /></a>
										<h4><a href="#">Phòng Khám Đa Khoa Polycare</a></h4>
										<span>50 Hàm Nghi, Đà Nẵng</span>
									</div>
								</li>
								<li class="col-md-3 col-sm-4 col-xs-4">
									<div class="detail">
										<a href="#" class="img"><img src="<?php bloginfo('template_directory'); ?>/images/phongkham-4.jpg" alt="" /></a>
										<h4><a href="#">Phòng Khám Đa Khoa Polycare</a></h4>
										<span>50 Hàm Nghi, Đà Nẵng</span>
									</div>
								</li>
								<li class="col-md-3 col-sm-4 col-xs-4">
									<div class="detail">
										<a href="#" class="img"><img src="<?php bloginfo('template_directory'); ?>/images/phongkham-5.jpg" alt="" /></a>
										<h4><a href="#">Phòng Khám Đa Khoa Polycare</a></h4>
										<span>50 Hàm Nghi, Đà Nẵng</span>
									</div>
								</li>
								<li class="col-md-3 col-sm-4 col-xs-4">
									<div class="detail">
										<a href="#" class="img"><img src="<?php bloginfo('template_directory'); ?>/images/phongkham-6.jpg" alt="" /></a>
										<h4><a href="#">Phòng Khám Đa Khoa Polycare</a></h4>
										<span>50 Hàm Nghi, Đà Nẵng</span>
									</div>
								</li>
								<li class="col-md-3 col-sm-4 col-xs-4">
									<div class="detail">
										<a href="#" class="img"><img src="<?php bloginfo('template_directory'); ?>/images/phongkham-7.jpg" alt="" /></a>
										<h4><a href="#">Phòng Khám Đa Khoa Polycare</a></h4>
										<span>50 Hàm Nghi, Đà Nẵng</span>
									</div>
								</li>
								<li class="col-md-3 col-sm-4 col-xs-4">
									<div class="detail">
										<a href="#" class="img"><img src="<?php bloginfo('template_directory'); ?>/images/phongkham-8.jpg" alt="" /></a>
										<h4><a href="#">Phòng Khám Đa Khoa Polycare</a></h4>
										<span>50 Hàm Nghi, Đà Nẵng</span>
									</div>
								</li>
							</ul>
						</div> <!-- end block-clinic -->					
					</div> <!-- end left-content -->
					<div class="col-md-3 col-sm-4 col-bot right-content">
						<div class="block-trietly">
							<a href="#" class="img"><img src="<?php bloginfo('template_directory'); ?>/images/right-1.jpg" alt=""/></a>
							<h4><a href="#">Triết Lý Hay Để Có Cuộc Sống Khỏe Mạnh Và Hạnh Phúc</a></h4>
							<p>Người có ba xoáy có đặc điểm tính cách là làm việc có kế hoạch, chu đáo. Họ có năng lực thực tế rất mạnh.</p>
							<span>1.10.2015</span>
						</div> <!-- end block-trietly -->

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
								<li><a href="#"><span>Bí quyết yêu để... sống lâu dành cho giới trẻ</span></a></li>
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

		<div id="footer">
			<div class="container">
				<ul class="row">
					<li class="col-md-3 col-sm-3 col-xs-6">
						<h5><span>Songkhoe.net</span></h5>
						<p>
							<span>Địa chỉ: Số 50 Hàm Nghi, TP. Đà Nẵng</span>
							<span>Tổng đài: 1900 599 857</span>
							<span>Email: info@songkhoe.net</span>
							<span>Di động: 0905 014 500</span>
						</p>
					</li>
					<li class="col-md-3 col-sm-3 col-xs-6">
						<h5><span>sống khỏe mỗi ngày</span></h5>

						<ul class="list">
							<li><a href="#">Tập thể dục</a></li>
							<li><a href="#">Thuốc và dược lý</a></li>
							<li><a href="#">Tâm lý và cơ thể</a></li>
							<li><a href="#">Kiến thức và đời sống</a></li>
							<li><a href="#">Bài thuốc dân gian</a></li>
							<li><a href="#">Giới tính và tình dục</a></li>
						</ul>
					</li>
					<li class="col-md-3 col-sm-3 col-xs-6">
						<h5><span>Bệnh tật</span></h5>

						<ul class="list">
							<li><a href="#">Bệnh sởi - Thủy đậu</a></li>
							<li><a href="#">Viêm đường hô hấp</a></li>
							<li><a href="#">Rối loạn - Trầm cảm</a></li>
							<li><a href="#">Bệnh phụ nữ</a></li>
							<li><a href="#">Bệnh nam giới</a></li>
							<li><a href="#">Bệnh về da</a></li>
						</ul>
					</li>
					<li class="col-md-3 col-sm-3 col-xs-6">
						<h5><span>Bệnh tật</span></h5>

						<ul class="list">
							<li><a href="#">Tiểu đường - Bệnh thận</a></li>
							<li><a href="#">Bệnh tim mạch</a></li>
							<li><a href="#">Bệnh cảm cúm</a></li>
							<li><a href="#">Bệnh sốt xuất huyết</a></li>
							<li><a href="#">Bệnh ung thư</a></li>
							<li><a href="#">Bệnh tay chân miệng</a></li>
						</ul>
					</li>
				</ul>

				<div class="footer-bot">
					<ul class="contact">
						<li><a href="#">Trang chủ</a></li>
						<li><a href="#">Về sống khỏe</a></li>
						<li><a href="#">Quyên góp</a></li>
						<li><a href="#">Liên hệ</a></li>
					</ul> <!-- end contact -->

					<p>Bản quyền thuộc về Sống khỏe - Sức khỏe © 2015. Tất cả các quyền được bảo hộ.</p>
				</div> <!-- end footer-bot -->
			</div>
		</div> <!-- end footer -->
	</div> <!-- end wrapper -->

	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/responsiveslides.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/simpleMobileMenu.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/common.js"></script>
	<?php wp_footer(); ?>
</body>
</html>