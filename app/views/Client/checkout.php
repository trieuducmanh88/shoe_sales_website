 <!--breadcrumbs area start-->
 <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>Checkout</h3>
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
</div>
    <!--breadcrumbs area end-->
    
   <form action="index.php?act=insert_order" method="post" >
         <!--Checkout page section-->
    <?php 
        if(isset($_SESSION['user'])){  
            // Prin_R($userID);
            $userID = $_SESSION['user']['id_user'];
            $user_name = $_SESSION['user']['user_name'];
            $email = $_SESSION['user']['email'];
            $phone_number = $_SESSION['user']['phone_number'];
            $address = $_SESSION['user']['address'];
        }
    ?>
    <div class="Checkout_section" id="accordion">
       <div class="container">
            <div class="checkout_form">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <form action="#">
                            <h3>Billing Details</h3>
                            <div class="row">
                                <div class="col-12 mb-20">
                                    <label>User Name</label>
                                    <input type="text" name="user_name" value="<?= isset($user_name)? $user_name : '' ?>"> 
                                    <?php if (isset($error['user_name'])): ?>
                                        <div class="error" style="color: red;"><?= $error['user_name']; ?></div>
                                    <?php endif; ?>
                                </div>
                                
                                <div class="col-12 mb-20">
                                    <label>Email</label>
                                    <input type="text"  name="email" value="<?= isset($email)? $email : '' ?>">  
                                    <?php if (isset($error['email'])): ?>
                                        <div class="error" style="color: red;"><?= $error['email']; ?></div>
                                    <?php endif; ?>   
                                </div>

                                <div class="col-12 mb-20">
                                    <label>Phone</label>
                                    <input type="text"  name="phone" value="0<?= isset($phone_number) ? $phone_number : '' ?>">     
                                    <?php if (isset($error['phone'])): ?>
                                        <div class="error" style="color: red;"><?= $error['phone']; ?></div>
                                    <?php endif; ?>
                                </div>

                                <div class="col-12 mb-20">
                                    <label>Address</label>
                                    <input type="text"  name="address" value="<?= isset($address) ? $address : '' ?>">    
                                    <?php if (isset($error['address'])): ?>
                                        <div class="error" style="color: red;"><?= $error['address']; ?></div>
                                    <?php endif; ?> 
                                </div>
                                <div class="col-12">
                                    <div class="">
                                         <label for="order_note">Order Notes</label> </br>
                                        <textarea id="" name="note" placeholder="Notes about your order, e.g. special notes for delivery." cols="90" rows="5" ></textarea>
                                    </div> 
                                    <?php if (isset($error['general'])): ?>
                                        <div class="error" style="color: red;"><?= $error['general']; ?></div>
                                    <?php endif; ?>   
                                </div>     	    	    	    	    	    	    
                            </div>
                        </form>    
                    </div>




    <div class="col-lg-6 col-md-6">
        <!-- <form action="#">     -->
            <h3>Your order</h3> 
            <div class="order_table table-responsive">
            <table>
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        if(isset($_SESSION['myCart']) && !empty($_SESSION['myCart']) ):
                            // Prin_R( $_SESSION['myCart'] );

                            $arr_idPro = implode(',',array_keys( $_SESSION['myCart']));
                            $loadSP_ToCart =  loadSP_toCart($arr_idPro);

                            $CartTotal = 0;
                            $shipping = 30000;
                            foreach($loadSP_ToCart as $items):
                            $totalPrice = $items['giaKhuyenMai'] * $_SESSION['myCart'][$items['id_sanpham']];
                            $CartTotal +=$totalPrice;
                    ?>
                        <tr>
                            <td> <?=$items['name'] ?> <strong> × <?=$_SESSION['myCart'][$items['id_sanpham']] ?></strong></td>
                            <td><?= number_format($totalPrice,0,',','.') ?>đ</td>
                        </tr>
                        
                        <?php endforeach?>
                        <?php endif ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Cart Subtotal</th>
                            <td><?= isset($CartTotal) ? number_format($CartTotal,0,',','.') : '' ?>đ</td>
                        </tr>
                        <tr>
                            <th>Shipping</th>
                            <td><strong><?= isset($shipping) ? number_format($shipping,0,',','.',) : '' ?>đ</strong></td>
                        </tr>
                        <tr class="order_total">
                            <th>Order Total</th>
                            <td><strong><?= isset($CartTotal,$shipping) ? number_format($CartTotal+$shipping,0,'.',',') : '' ?>đ</strong></td>
                        </tr>
                    </tfoot>
                </table>      
            </div>
            
                <!-- Order Payment Method -->
            <div class="order-payment-method">
                <label for="">Payment Methods</label>  <br>
                
<div class="container mt-2">
    <div class="row">
    <div class="col-md-6 d-flex align-items-center mb-2">
    <input type="radio" name="payment_method" id="cod" class="me-2" style="max-width: 20px;">
    <label for="cod" class="mb-0"><a href="#">COD</a></label>
    </div>

    <div class="col-md-6 d-flex align-items-center mb-2">
    <input type="radio" name="payment_method" id="momo" class="me-2" style="max-width: 20px;">
    <label for="momo" class="mb-0"><a href="#">MOMO</a></label>
    </div>
    </div>
</div>
    
                <div class="summary-footer-area mt-2">
                    <div class="custom-control custom-checkbox mb-20">
                        <input type="checkbox" class="custom-control-input" id="terms"  />
                        <label class="custom-control-label" for="terms">I have read and agree to the terms and conditions of the website..</label>
                    </div>
                    <a href="index.php?act="></a>
                    <button type="submit" name="place_Order" class="btn btn-warning">Place Order</button>
                    <input type="hidden" name="id_Pro" value="<?= isset($items['id_sanpham']) ? $items['id_sanpham'] : ''  ?>">
                    <input type="hidden" name="total" value="<?= isset($CartTotal , $shipping) ? $CartTotal + $shipping  : '' ?>">
                    <input type="hidden" name="id_User" value="<?= isset($userID) ? $userID : '' ?>">

                </div>

            </div>
        <!-- </form>          -->
    </div>
                </div> 
            </div> 
        </div>       
    </div>
    <!--Checkout page section end-->
   </form>