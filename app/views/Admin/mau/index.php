<div class="content-page">
<div class="content">
    <!-- Start Content-->
    <div class="container-xxl">

        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-semibold m-0">Quản lý biến thể sản phẩm màu</h4>
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
                    <a class="btn btn-primary " href="AdminController.php?act=createMau"><i data-feather="plus-square"></i>Thêm biến thể màu</a>

                    </div><!-- end card header -->

                    <div class="card-body">
                    <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên màu</th>
                                    <th scope="col">Mã màu</th>
                                    <th scope="col">Hành động</th>
                                    </tr>
                            </thead>
                           
                            <tbody>
                  <?php 
                    foreach($loadAll_mau as $items){
                        extract($items);
                        echo '
                            <tr>
                                <td>'.$id_mau.'</td>
                                <td>'.$ten_mau.'</td>
                                    <td><button style="background-color:'.$ma_mau.'; color: white; width: 80px; height:30px "></button></td>
                                <td>
                                <a class="" href="AdminController.php?act=editMau&id='.$id_mau.'"><i class="mdi mdi-pencil text-muted fs-18 rounded-2 border p-1 me-1"></i></a>
                                <a class="" href="AdminController.php?act=destroyMau&id='.$id_mau.'" onclick="return confirm(\'Bạn có chắc xóa không ?\')"><i class="mdi mdi-delete text-muted fs-18 rounded-2 border p-1"></i></a>
                                <a class="" href="AdminController.php?act=showMau&id='.$id_mau.'"><i class="mdi mdi-eye text-muted fs-18 rounded-2 border p-1 me-1"></i></a>
                                </td>
                            </tr>
                        ';
                    }
                    ?>
 
                  </tbody>
                        </table >
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- container-fluid -->
</div> <!-- content -->

    


   
       
   