<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>shop</h3>
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>shop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
</div>
    <!--breadcrumbs area end-->
    
    <!--shop  area start-->
    <div class="shop_area shop_fullwidth mb-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!--shop wrapper start-->
                    
                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper">
                        <div class="shop_toolbar_btn">
                            <button data-role="grid_4" type="button"  class="active  btn-grid-4" data-bs-toggle="tooltip" title="4"></button>
                            <button data-role="grid_3" type="button" class=" btn-grid-3" data-bs-toggle="tooltip" title="3"></button>
                            <button data-role="grid_list" type="button"  class="btn-list" data-bs-toggle="tooltip" title="List"></button>
                        </div>
                        <div class=" niceselect_option">
                            <!-- <form class="select_option" action="" method="post">
                                <select name="locSP" id="short">
                                    <option selected value="1"><a href="index.php?act=search_Pro_Shop&value=">Sort by average rating</a></option>
                                    <option selected value="2"><a href="index.php?act=search_Pro_Shop&value=ProTop">Sort by popularity</a></option>
                                    <option selected value="3"><a href="index.php?act=search_Pro_Shop&value=ProNew">Sort by newness</a></option>
                                    <option selected value="4"><a href="index.php?act=search_Pro_Shop&value=Price_Asc">Sort by price: low to high</a></option>
                                    <option selected value="5"><a href="index.php?act=search_Pro_Shop&value=Price_Desc">Sort by price: high to low</a></option>
                                </select>
                            </form> -->
                            <!-- <form class="select_option" action="index.php?act=search_Pro_Shop" method="post">
                                <select name="locSP" id="short" onchange="this.form.submit();">
                                    <option selected value="1">Sort by average rating</option>
                                    <option value="2">Sort by popularity</option>
                                    <option value="3">Sort by newness</option>
                                    <option value="4">Sort by price: low to high</option>
                                    <option value="5">Sort by price: high to low</option>
                                    <option value="6">Product Name: Z</option>
                                </select>
                            </form> -->

                            <form action="index.php" method="get">
                                <input type="hidden" name="act" value="search_Pro_Shop">
                                <select name="LocSanPham" id="short" onchange="this.form.submit();">
                                    <option selected value="1">Sort by average rating</option>
                                    <option value="ProductTop">Sort by popularity</option>
                                    <option value="ProductNew">Sort by newness</option>
                                    <option value="PriceASC">Sort by price: low to high</option>
                                    <option value="PriceDESC">Sort by price: high to low</option>
                                </select>
                            </form>


                        </div>
                        <div class="page_amount">
                            <p>Showing 1–10 of 
                                <?php 
                                    echo count(array_keys($loadAll_Pro));
                                 ?> results
                            </p>
                        </div>
                    </div>
                     <!--shop toolbar end-->



                    <div class="row shop_wrapper">
                        <?php foreach($loadAll_Pro as $items): extract($items);
                            // count($items);
                        ?>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="<?= './public/uploads/' . $img ?>" alt=""></a>
                                        <!-- <a class="secondary_img" href="product-details.html"><img src="<?= './public/uploads/' . $img ?>" alt=""></a> -->
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content grid_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="product-details.html"><?=$name?></a></h4>
                                            <div class="price_box"> 
                                            <span class="old_price"><?= number_format( $giaSanPham,0,'' )?>đ</span>
														<span class="current_price"><?= number_format( $giaKhuyenMai,0,'' )?>đ</span>

                                            </div>
                                        </div>
                                        <form action="index.php?act=addCart" method="post">
													<div class="add_to_cart">
                                                    <input type="hidden" name="soLuong[<?=$id_sanpham?>]" value="1">
                                                        <input type="hidden" name="id_sanPham" value="<?=$id_sanpham?>">
                                                        <button name="btnAddCart" class="btnAddCart btn btn-danger">Add to cart</button>
													</div>
										
                                        </form>
                                    </div>

                                    
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>

                    <div class="shop_toolbar t_bottom">
                        <div class="pagination">
                            <?php if(!empty($max_page) && ($max_page > 1) ): ?>
                            <ul>

                            <?php if($page>1):  $next_page = $page-1; ?>
                                    <li class="next"><a href="index.php?act=shop&page=<?=$next_page?>"><<</a></li>
                                <?php endif ?>

                                <?php for($pageItems = 1; $pageItems<=$max_page ; $pageItems++): ?>
                                    <li class="<?= ($pageItems==$page) ? 'current' : '' ?> "><a href="index.php?act=shop&page=<?=$pageItems?>"><?=$pageItems?></a></li>
                                <?php endfor ?>

                                <?php if($page< $max_page):  $next_page = $page+1; ?>
                                    <li class="next"><a href="index.php?act=shop&page=<?=$next_page?>">>></a></li>
                                <?php endif ?>
                            </ul>

                            <?php endif ?>
                        </div>
                    </div>
                    <!--shop toolbar end-->
                    <!--shop wrapper end-->
                </div>
            </div>
        </div>
    </div>
    <!--shop  area end-->