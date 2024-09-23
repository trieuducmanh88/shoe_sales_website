<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>Products</h3>
                        <ul>
                            <li><a href="index.html">Products</a></li>
                            <li>shop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
</div>
    <!--breadcrumbs area end-->

 <!--product area start-->
 <div class="product_area  mb-95">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_header">
                        <div class="section_title">
                           <h2>PRODUCTS</h2>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="product_container">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tennis" role="tabpanel">
                        <div class="row">
						<div class="product_carousel product_column5 owl-carousel">
							<?php foreach($search as $items):  extract($items);  ?>
								<div class="col-lg-3">
									<article class="single_product">
										<figure>
											<div class="product_thumb">
												<a class="primary_img" href="index.php?act=ChitietSP&idSanPham=<?=$id_sanpham?>&idDanhMuc=<?=$danhmuc_id?>&luotxem=<?=$luotxem?>">
												<img src="<?= './public/uploads/' . $img ?>" alt="" height="245px">
												</a>
												
												<div class="label_product">
													<span class="label_sale">Sale</span>
												</div>
												<div class="action_links">
													<ul>
														<li class="wishlist">
															<a href="wishlist.html" title="Add to Wishlist">
																<span class="pe-7s-like"></span>
															</a>
														</li>
													</ul>
												</div>
											</div>
											<figcaption class="product_content">
												<div class="product_content_inner">
													<h4 class="product_name">
														<a href=""><?=$name?></a>
													</h4>
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

											</figcaption>
										</figure>
									</article>
								</div>
							<?php endforeach; ?>
						</div>
                       </div>

                
                    </div>
                </div>
            </div>
               
        </div> 
    </div>
    <!--product area end-->