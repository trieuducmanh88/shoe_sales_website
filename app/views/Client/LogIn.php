<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>Đăng nhập</h3>
                        <ul>
                            <li><a href="index.html">Trang chủ</a></li>
                            <li>Đăng nhập</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <!-- customer login start -->
    <div class="customer_login">
        <div class="container">
            <div class="row">
               <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                        <h2>Đăng nhập</h2>
                        <?php if(isset($thongbao1)) :   ?>
                            <div class="alert alert-success alert-dismissible  fade show" role="alert"> 
                                <?= $thongbao1 ?>
                            </div>
                        <?php endif; ?>
                        <form action="index.php?act=dangnhap" method="post">
                            <p>   
                                <label>Email <span>*</span></label>
                                <input type="text" name="email" required  placeholder="Nhập  email ">
                             </p>
                             <p>   
                                <label>Passwords <span>*</span></label>
                                <input type="password" name="pass" required placeholder="Nhập password ">
                             </p>   
                            <div class="login_submit">
                               <a href="#">Quên mật khẩu ?</a>
                                <label for="remember">
                                    <input id="remember" type="checkbox">
                                    Ghi nhớ
                                </label>
                                <button name="btn" type="submit">Đăng nhập</button>
                                
                            </div>

                        </form>
                     </div>    
                </div>
                <!--login area start-->

                <!--register area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form register">
                        <h2>Đăng ký</h2>
                        <?php if(isset($thongbao)) : ?>
                            <div class="alert alert-success alert-dismissible  fade show" role="alert"> 
                                <?= $thongbao ?>
                            </div>
                        <?php endif; ?>
                        <form action="index.php?act=dangky" method="post">
                            <p>   
                                <label>Tên tài khoản  <span>*</span></label>
                                <input type="text" name="name" required placeholder="Nhập tên tài khoản ">
                             </p>
                            <p>   
                                <label>Email  <span>*</span></label>
                                <input type="email"  name="email" required placeholder="Nhập email ">
                             </p>
                             <p>   
                                <label>Mật khẩu <span>*</span></label>
                                <input type="password"  name="password" required placeholder="Nhập password ">
                             </p>
                            <div class="login_submit">
                                <button name="btn" type="submit">Đăng ký</button>
                            </div>
                        </form>
                    </div>    
                </div>
                <!--register area end-->
            </div>
        </div>    
    </div>
    <!-- customer login end -->