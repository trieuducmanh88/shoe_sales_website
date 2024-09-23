<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">   
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                   <h3>cart</h3>
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li>Shopping Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>         
</div>
<!--breadcrumbs area end-->

<!--shopping cart area start -->
<div class="shopping_cart_area">
    <div class="container">  
        <form action="index.php?act=updateCart" method="post"> 
            <div class="row">
                <div class="col-12">
                    <div class="table_desc">
                        <div class="cart_page table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product_remove">Delete</th>
                                        <th class="product_thumb">Image</th>
                                        <th class="product_name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product_quantity">Quantity</th>
                                        <th class="product_total">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                if(isset($_SESSION['myCart']) && count($_SESSION['myCart']) > 0):

                                    foreach($_SESSION['myCart'] as $id => $cart){
                                       
                                        // Prin_R( $id );
                                    }

                                    $totalPrice = 0; 
                                    // $shipping = 30000;
                                    $arr_idPro = (implode(',',array_keys( $_SESSION['myCart'])));
                                    $loadSP_ToCart =  loadSP_toCart($arr_idPro);
                                    foreach($loadSP_ToCart as $items):
                                        $productTotal = $items['giaKhuyenMai'] * $_SESSION['myCart'][$items['id_sanpham']];
                                        $totalPrice += $productTotal; 
                                        // $totalPrice_ship = $totalPrice + $shipping;
                                ?>
                                    <tr>
                                        <td class="product_remove">
                                            <a href="index.php?act=delSanPhamCart&idSPCart=<?= $items['id_sanpham'] ?>"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                        <td class="product_thumb">
                                            <a href="#">
                                                <img src="<?= './public/uploads/' . $items['img'] ?>" alt="">
                                            </a>
                                        </td>
                                        <td class="product_name">
                                            <a href="#"><?= htmlspecialchars($items['name']) ?></a>
                                        </td>
                                        <td class="product-price"><?= number_format($items['giaKhuyenMai'], 0, ',', '.') ?>đ</td>
                                        <td class="product_quantity">
                                            <label>Quantity</label>
                                            <input name="soLuong[<?= $items['id_sanpham'] ?>]" min="1" max="100" value="<?= $_SESSION['myCart'][$items['id_sanpham']] ?>" type="number">
                                        </td>
                                        <td class="product_total"><?= number_format($productTotal, 0, ',', '.') ?>đ</td>
                                    </tr>
                                <?php endforeach ?>
                                <tr class="total-row">
                                    <td colspan="5" class="text text-danger">Tổng tiền</td>
                                    <td class="total-amount"><?= number_format($totalPrice, 0, ',', '.') ?>đ</td>
                                </tr>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="6" class="text-center">Giỏ hàng của bạn trống.</td>
                                    </tr>
                                <?php endif ?>
                                </tbody>
                            </table>   
                        </div>  
                        <div class="cart_submit">
                            <button type="submit" name="btn_UpdateCart" class="btn btn-primary">Update Cart</button>
                            <a class="btn btn-danger" href="index.php?act=delSanPhamCart">Delete Cart</a>
                        </div>  
                    </div>
                </div>
            </div>
            <!--coupon code area start-->
            <div class="coupon_area">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code left">
                            <h3>Coupon</h3>
                            <div class="coupon_inner">   
                                <p>Enter your coupon code if you have one.</p>                                
                                <input placeholder="Coupon code" type="text">
                                <button type="submit">Apply coupon</button>
                            </div>    
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code right">
                            <h3>Cart Totals</h3>
                            <div class="coupon_inner">
                               <div class="cart_subtotal">
                                   <p>Subtotal</p>
                                   <p class="cart_amount"><?= isset($totalPrice) ? number_format($totalPrice, 0, ',', '.') : '' ?>đ</p>
                               </div>
                               
                               <a href="#">Calculate shipping</a>

                               <div class="cart_subtotal">
                                   <p>Total</p>
                                   <p class="cart_amount font-weight-bold fs-4"><?= isset($totalPrice) ? number_format($totalPrice , 0, ',', '.') : '' ?>đ</p>
                               </div>
                               <div class="checkout_btn">
                                   <a href="index.php?act=checkout">Proceed to Checkout</a>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--coupon code area end-->
        </form> 
    </div>     
</div>
<!--shopping cart area end -->
