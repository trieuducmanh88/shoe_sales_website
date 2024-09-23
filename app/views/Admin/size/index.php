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
                    <a class="btn btn-primary " href="AdminController.php?act=createSize"><i data-feather="plus-square"></i>Thêm biến thể size</a>

                    </div><!-- end card header -->

                    <div class="card-body">
                    <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên size</th>
                                    <th scope="col">Hành động</th>
                                    </tr>
                            </thead>
                           
                            <tbody>
                  <?php 
                    foreach($loadAll_size as $items){
                        extract($items);
                        echo '
                            <tr>
                                <td>'.$id_size.'</td>
                                <td>'.$ten_size.'</td>
                                <td>
                                <a class="" href="AdminController.php?act=editSize&id='.$id_size.'"><i class="mdi mdi-pencil text-muted fs-18 rounded-2 border p-1 me-1"></i></a>
                                <a class="" href="AdminController.php?act=destroySize&id='.$id_size.'" onclick="return confirm(\'Bạn có chắc xóa không ?\')"><i class="mdi mdi-delete text-muted fs-18 rounded-2 border p-1"></i></a>
                                <a class="" href="AdminController.php?act=showSize&id='.$id_size.'"><i class="mdi mdi-eye text-muted fs-18 rounded-2 border p-1 me-1"></i></a>
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

    


   
       
   