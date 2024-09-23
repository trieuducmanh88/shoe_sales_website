
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Danh sách</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../controllers/AdminController.php">Home</a></li>
              <li class="breadcrumb-item active">Danh sách</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    

    <!-- Main content -->
    <section class="content">

    <div>
    <?php if(isset($thongbao)) : ?>
            <div class="alert alert-success alert-dismissib;a fade show" role="alert"> 
                <?= $thongbao ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>    </div>
    
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách : Danh mục sản phẩm</h3>
              </div>
              <a class="card-body">
                <table id="example2" class="table table-bordered table-hover text-black">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Sản Phẩm</th>
                    <th>Bình luận</th>
                    <th>Ngày tạo</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    foreach($list_binhluan as $items){
                        extract($items);
                        // var_dump($items);
                        echo '
                            <tr>
                                <td>'.$id.'</td>
                                <td>'.$user_name.'</td>
                                <td>'.$name.'</td>
                                <td>'.$binh_luan.'</td>
                                <td>'.$ngay_tao.'</td>
                                <td><a href="AdminController.php?act=editDanhMuc&id='.$id.'"><i class="disabled-link fa-solid fa-pen-to-square" style="color: black ;" ></i></a></td>
                                <td><a href="AdminController.php?act=destroyDanhMuc&id='.$id.'" onclick="return confirm(\'Bạn có chắc xóa không ?\')"><i class="fa-solid fa-trash" style="color: black;"></i></a></td>
                            </tr>
                        ';
                    }
                    ?>
 
                  </tbody>

                </table>
                <div>
                <a  class="btn btn-primary" onclick="return confirm('Warning Warning Warning :Đây là quyết định quan trọng - bạn có chắc là muốn xóa chứ :(((') " href="AdminController.php?act=destroyAlldanhmuc">Xóa All</a>

                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
    <!-- /.content -->
    </section>

       
   