<div class="breadcrumb-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-wrap">
                                <nav aria-label="breadcrumb">
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Order detail</li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
    </div>


    <div class="cart-main-wrapper section-padding">
            <div class="container">
                <div class="section-bg-color">

        <div class="row">
            <div class="col-lg-12">
                <div class="myaccount-content">
                    <h5>Thông tin đơn hàng : <span class="text-danger"></span></h5>
                    <div class="welcome">
                        <p>Người nhận : <strong></strong> </p>
                        <p>Email người nhận : <strong></strong> </p>
                        <p>Số điện thoại người nhận : <strong></strong> </p>
                        <p>Địa chỉ người nhận : <strong></strong> </p>
                        <p>Ngày đặt hàng : </strong> </p>
                        <p>Ghi chú: <strong></strong> </p>
                        <p>Trạng thái đơn hàng : <strong></strong> </p>
                        <p>Trạng thái đơn hàng : <strong></strong> </p>
                        <p>Tiền hàng : <strong></strong> </p>
                        <p>Phí ship : <strong> </strong> </p>
                        <p>Tổng tiền : <strong></strong> </p>
                    </div>
                    
                </div>

                <div class="myaccount-content mt-5">
                    <h5>Sản phẩm</h5>
                    <div class="ml-5 myaccount-table table-responsive text-center">
                        <table style="max-width: 1300px; text-align: center;" class="table table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th>Hình ảnh</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Đơn giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                // $idCart=0;
                                // $tong=0;


                            foreach($_SESSION['myCart'] as $cart):
                                $thanhtien = $cart['3'] * $cart['4'];
                                // $tong+=$thanhtien;
                            ?>
                                <tr>
                                    <td>
                                    <img src="<?= './public/uploads/' . $cart['2'] ?>" alt="" width="100px">
                                </td>
                                    <td><a href="#"><?=$cart['1']?></a></td>
                                    <td><?= number_format( $cart['3'] ,0 ,'')?>đ</td>
                                    <td><a href="#"><?=$cart['4']?></a></td>
                                    <td><?= number_format( $thanhtien ,0 ,'')?>đ</td>
                                    
                                </tr>
                            <?php endforeach?>
                            </tbody>
                        </table>
                    </div>
                </div>
               
               
            </div>
        </div>
        
                </div>
            </div>
    </div>