<div class="content-page">
<div class="content">
    <!-- Start Content-->
    <div class="container-xxl">

        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-semibold m-0">Quản lý danh mục sản phẩm</h4>
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
                    <a class="btn btn-primary " href="AdminController.php?act=CreateDanhMuc"><i data-feather="plus-square"></i>Thêm danh mục</a>

                    </div><!-- end card header -->

                    <div class="card-body">
                    <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên danh mục</th>
                                    <th scope="col">Hành động</th>
                                </tr>
                            </thead>
                           
                            <tbody>
                  <?php 
                    foreach($loadAll_danhmuc as $items){
                        extract($items);
                        echo '
                            <tr>
                                <td>'.$id_danhmuc.'</td>
                                <td>'.$name_danhmuc.'</td>
                                <td>
                                <a class="" href="AdminController.php?act=editDanhMuc&id='.$id_danhmuc.'"><i class="mdi mdi-pencil text-muted fs-18 rounded-2 border p-1 me-1"></i></a>
                                <a class="" href="AdminController.php?act=destroyDanhMuc&id='.$id_danhmuc.'" onclick="return confirm(\'Bạn có chắc xóa không ?\')"><i class="mdi mdi-delete text-muted fs-18 rounded-2 border p-1"></i></a>
                                <a class="" href="AdminController.php?act=showDanhMuc&id='.$id_danhmuc.'"><i class="mdi mdi-eye text-muted fs-18 rounded-2 border p-1 me-1"></i></a>
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

    </div> <!-- container-fluid -->
</div> <!-- content -->

    


   
       
   