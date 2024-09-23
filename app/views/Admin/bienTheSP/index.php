

<div class="content-page">
<div class="content">
    <!-- Start Content-->
    <div class="container-xxl">

        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-semibold m-0">Quản lý sản phẩm biến thể </h4>
            </div>

        </div>

        <div class="row">
        <?php if(isset($thongbao)) : ?>
            <div class="alert alert-success alert-dismissib;a fade show" role="alert"> 
                <?= $thongbao ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                    <a class="btn btn-primary " href="AdminController.php?act=createSanPhamBienThe"><i data-feather="plus-square"></i>Thêm sản phẩm biến thể </a>

                    </div><!-- end card header -->

                    <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên sản phẩm</th>
                                    <th scope="col">Ảnh sản phẩm</th>
                                    <th scope="col">Giá sản phẩm</th>
                                    <th scope="col">Giá khuyến sản phẩm</th>
                                    <th scope="col">Màu</th>
                                    <th scope="col">Size</th>
                                    <!-- <th scope="col">Danh mục</th> -->
                                    <th scope="col">Hành động</th>
                                    </tr>
                            </thead>
                            <tbody>
                <?php 
                  foreach($LoadAll_sp_bienThe as $items){
                      extract($items);
                      echo '
                          <tr>
                              <td>'.$id.'</td>
                              <td class="nameSP">'.$name.'</td>
                              <td> <img src="'.$img.'" width="100px" alt=""></td>
                              <td class="">'.number_format($giaSanPham, 0, ',', '.').' VND</td>
                              <td class="">'.number_format($giaKhuyenMai, 0, ',', '.').' VND</td>
                              <td>   <button style="background-color:'.$ma_mau.'; color: white; width: 30px; height:30px "></button> '.$ten_mau.'</td>
                              <td>'.$ten_size.'</td>
                          
                              <td>
                              <a class="" href="AdminController.php?act=editSanPhamBienThe&id='.$id.'"><i class="mdi mdi-pencil text-muted fs-18 rounded-2 border p-1 me-1"></i></a>
                              <a class="" href="AdminController.php?act=destroySanPhamBienThe&id='.$id.'" onclick="return confirm(\'Bạn có chắc xóa không ?\')"><i class="mdi mdi-delete text-muted fs-18 rounded-2 border p-1"></i></a>
                              <a class="" href="AdminController.php?act=showSanPhamBienThe&id='.$id.'"><i class="mdi mdi-eye text-muted fs-18 rounded-2 border p-1 me-1"></i></a>
                              </td>
                          </tr>
                      ';
                  }
                  ?>

                </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- container-fluid -->
</div> <!-- content -->
