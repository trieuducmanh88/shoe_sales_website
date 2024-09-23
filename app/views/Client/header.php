<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/braga/braga/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Aug 2024 02:44:08 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Braga - Fashion eCommerce HTML Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/clients/img/favicon.ico">
    
    <!-- CSS 
    ========================= -->
    <!--bootstrap min css-->
    <link rel="stylesheet" href="assets/clients/css/bootstrap.min.css">
    <!--owl carousel min css-->
    <link rel="stylesheet" href="assets/clients/css/owl.carousel.min.css">
    <!--slick min css-->
    <link rel="stylesheet" href="assets/clients/css/slick.css">
    <!--magnific popup min css-->
    <link rel="stylesheet" href="assets/clients/css/magnific-popup.css">
    <!--font awesome css-->
    <link rel="stylesheet" href="assets/clients/css/font.awesome.css">
    <!--ionicons css-->
    <link rel="stylesheet" href="assets/clients/css/ionicons.min.css">
    <!--7 stroke icons css-->
    <link rel="stylesheet" href="assets/clients/css/pe-icon-7-stroke.css">
    <!--animate css-->
    <link rel="stylesheet" href="assets/clients/css/animate.css">
    <!--jquery ui min css-->
    <link rel="stylesheet" href="assets/clients/css/jquery-ui.min.css">
    <!--plugins css-->
    <link rel="stylesheet" href="assets/clients/css/plugins.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/clients/css/style.css">
    
    <!--modernizr min js here-->
    <script src="assets/clients/js/vendor/modernizr-3.7.1.min.js"></script>
	<style>
		.btnAddCart {
            background-color: #ff0000; /* Màu đỏ */
            border-radius: 50px; /* Bo góc tròn */
            color: #ffffff; /* Màu chữ trắng */
            padding: 10px 60px; /* Khoảng cách bên trong nút */
            border: none; /* Loại bỏ viền */
            cursor: pointer; /* Đổi con trỏ thành hình bàn tay khi hover */
         }
        .btnAddCart:hover {
            background-color: #cc0000; /* Màu đỏ đậm hơn khi hover */
        }
        .order-payment-method {
    background-color: #f8f9fa;
    padding: 20px;
    border-radius: 8px;
    margin-top: 20px;
}
.total-row {
    background-color: #ffeb3b; /* Màu nền vàng sáng */
    font-weight: bold;         /* Làm chữ đậm */
}

.total-amount {
    color: #d32f2f;           /* Màu chữ đỏ đậm */
    font-size: 1.3em;         /* Kích thước chữ lớn hơn */
}


	</style>
</head>

<body>
  
   
    
    <!--header area start-->
    <div class="off_canvars_overlay">
                
    </div>

    
	<header>
        <div class="main_header sticky-header">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-2 col-md-4 offset-md-4 offset-lg-0 col-5 offset-3 col-sm-5">
						<div class="logo">
							<a href="index.php"><img src="assets/clients/img/logo/logo.png" alt=""></a>
						</div>
					</div>
					<div class="col-lg-8">                
						<!--main menu start-->
						<div class="main_menu menu_position"> 
							<nav>  
								<ul>
									<li><a  href="index.php">home</a></li>
									<li class="mega_items"><a class="" href="index.php?act=shop">shop</a> </li>
									<li><a href="index.php?act=blog">blog</a></li> 
									<li><a href="index.php?act=contact"> Contact Us</a></li>
									<li><a href="index.php?act=aboutUs"> About us</a></li>
									<li><a href="index.php?act=page">pages </a>
										
									</li>
								</ul>  
							</nav> 
						</div>
						<!--main menu end-->
					</div> 
					<div class="col-lg-2 col-md-4 col-sm-4 col-4">
						<div class="header_account_area">
							<div class="header_account_list search_list">
								<a href="javascript:void(0)"><span class="pe-7s-search"></span></a>
								<div class="dropdown_search">
									<form action="index.php?act=search_home" method="post">
										<input type="text" placeholder="Search entire store here ..." name="keyw" >
										<button type="submit" name="btn_search" ><span class="pe-7s-search"></span></button>
									</form>
								</div>
							</div>
							<div class="header_account_list  mini_cart_wrapper">
								<a href="index.php?act=gioHang"><span class="pe-7s-shopbag"></span>
									<span class="item_count">
                                    <?php 
                                        if(!empty($_SESSION['myCart'])){
                                        echo count($_SESSION['myCart']);
                                        }else{
                                            echo '0';
                                        }
                                    ?> 
                                    </span>
								</a>
								
						   </div>
						    <div class="language_currency header_account_list ">
						        <a href="#"> <span class="pe-7s-user"></span></a>
								<ul class="dropdown_currency">
                                    <?php 
                                        if(isset($_SESSION['user'])&& ($_SESSION['user'])){
                                            echo '
                                            <li><strong style="font-size: 11px;" >Hello :'.$_SESSION['user']['user_name'].' </strong></li>
                                            <li><a href="index.php?act=myTaiKhoan">My Account</a></li>
                                            <li><a href="index.php?act=dangXuat">LogOut</a></li>
                                            ';
                                        }
                                    ?>
                                    <?php 
                                        if(isset($_SESSION['user'])&& ($_SESSION['user']['role'] == 'Admin')){
                                            echo '
                                            <li><a href="index.php?act=myTaiKhoan">Home Admin</a></li>
                                            ';
                                        }
                                    ?>
                                    <?php
                                        if(empty($_SESSION['user'])):
                                    ?>
                                        <li><a href="index.php?act=logIn">Log In</a></li>
                                        <li><a href="index.php?act=logIn">Register</a></li>
									<?php endif ?>
								</ul>
							</div>
						</div>
					</div>               
				</div>
			</div>
        </div> 
        <!--mini cart-->
        <div class="mini_cart">
            <div class="cart_gallery">
                <div class="cart_close">
                    <div class="cart_text">
                        <h3>cart</h3>
                    </div>
                    <div class="mini_cart_close">
                        <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                    </div>
                </div>
                <div class="cart_item">
                   <div class="cart_img">
                       <a href="#"><img src="assets/clients/img/s-product/product.jpg" alt=""></a>
                   </div>
                    <div class="cart_info">
                        <a href="#">Juicy Couture Tricot</a>
                        <p>1 x <span> $30.00 </span></p>    
                    </div>
                    <div class="cart_remove">
                        <a href="#"><i class="ion-ios-close-outline"></i></a>
                    </div>
                </div>
                <div class="cart_item">
                   <div class="cart_img">
                       <a href="#"><img src="assets/clients/img/s-product/product2.jpg" alt=""></a>
                   </div>
                    <div class="cart_info">
                        <a href="#">Juicy Couture Juicy</a>
                        <p>1 x <span> $29.00 </span></p>    
                    </div>
                    <div class="cart_remove">
                        <a href="#"><i class="ion-ios-close-outline"></i></a>
                    </div>
                </div>
            </div>
            <div class="mini_cart_table">
                <div class="cart_table_border">
                    <div class="cart_total">
                        <span>Sub total:</span>
                        <span class="price">$125.00</span>
                    </div>
                    <div class="cart_total mt-10">
                        <span>total:</span>
                        <span class="price">$125.00</span>
                    </div>
                </div>
            </div>
            <div class="mini_cart_footer">
               <div class="cart_button">
                    <a href="cart.html"><i class="fa fa-shopping-cart"></i> View cart</a>
                </div>
                <div class="cart_button">
                    <a href="checkout.html"><i class="fa fa-sign-in"></i> Checkout</a>
                </div>

            </div>
        </div>
        <!--mini cart end-->
    </header>
    <!--header area end-->



      