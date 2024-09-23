<?php 
    if(isset($_SESSION['user'])){
        // echo '<pre>';
        //     print_r($_SESSION['user']);
        // echo '</pre>';
        
    }
?>

<!-- my account start  -->
<section class="main_content_area">
    <div class="container">   
        <div class="account_dashboard">
            <div class="row">
                <?php if(isset($thongbao)) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert"> 
                        <?= $thongbao ?>
                    </div>
                <?php endif; ?>
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <div class="tab-pane" id="account-details">
                        <div class="login">
                            <div class="login_form_container">
                                <div class="account_login_form">
<form action="index.php?act=update_TK_user" method="POST" enctype="multipart/form-data">
    <label>Ảnh</label>
    <input type="file" name="image">
    <img src="<?= '/public/uploads/' . $image_user ?>" alt="Ảnh đại diện">
    <img src="<?= './public/uploads/' . $img ?>" alt="">
    
    <br>
    <label>User name</label>
    <input type="text" name="user_name" value="<?= isset( $_SESSION['user']['user_name']) ? $_SESSION['user']['user_name'] : ''  ?>">


    <label>Email</label>
    <input type="text" name="email" value="<?= isset( $_SESSION['user']['email']) ? $_SESSION['user']['email'] : '' ?>">

    <label>Số điện thoại</label>
    <input type="number" name="phone_number" value="0<?= isset( $_SESSION['user']['phone_number']) ? $_SESSION['user']['phone_number'] : '' ?>">

    <label>Địa chỉ</label>
    <input type="text" name="address" value="<?= isset( $_SESSION['user']['address']) ? $_SESSION['user']['address'] : '' ?>">

    <div class="save_button primary_btn default_button">
        <button name="btn" type="submit">Save</button>
        <input type="hidden" name="id_user" value="<?= $id_user ?>">
        <input type="hidden" name="anh_cu" value="<?= $image_user ?>">
    </div>
</form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>        	
</section>
<!-- my account end -->
