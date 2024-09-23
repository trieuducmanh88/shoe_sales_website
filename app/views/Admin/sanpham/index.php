

<div class="content-page">
<div class="content">
    <!-- Start Content-->
    <div class="container-xxl">

        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-semibold m-0">Quản lý sản phẩm </h4>
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
                    <a class="btn btn-primary " href="AdminController.php?act=createSanPham"><i data-feather="plus-square"></i>Thêm sản phẩm</a>

                    </div><!-- end card header -->

                    <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên sản phẩm</th>
                                    <th scope="col">Ảnh sản phẩm</th>
                                    <th scope="col">Mô tả</th>
                                    <th scope="col">Lượt xem</th>
                                    <th scope="col">Danh mục</th>
                                    <th scope="col">Hành động</th>
                                    </tr>
                            </thead>
                            <tbody>
                <?php 
                  foreach($loadAll_sp as $items){
                      extract($items);
                      echo '
                          <tr>
                              <td>'.$id_sanpham.'</td>
                              <td class="nameSP">'.$name.'</td>
                              <td> <img src="'.$img.'" width="100px" alt=""></td>
                              <td>
                                  <div class="description-container">'.$mota.'</div>
                              </td>
                              <td>'.$luotxem.' views</td>
                              <td>'.$name_danhmuc.'</td>
                              <td>
                              <a class="" href="AdminController.php?act=editSanPham&id='.$id_sanpham.'"><i class="mdi mdi-pencil text-muted fs-18 rounded-2 border p-1 me-1"></i></a>
                              <a class="" href="AdminController.php?act=destroySanPham&id='.$id_sanpham.'" onclick="return confirm(\'Bạn có chắc xóa không ?\')"><i class="mdi mdi-delete text-muted fs-18 rounded-2 border p-1"></i></a>
                              <a class="" href="AdminController.php?act=showSanPham&id='.$id_sanpham.'"><i class="mdi mdi-eye text-muted fs-18 rounded-2 border p-1 me-1"></i></a>
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
