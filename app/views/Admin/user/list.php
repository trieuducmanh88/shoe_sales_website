
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Danh sách tài khoản</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../controllers/AdminController.php">Home</a></li>
              <li class="breadcrumb-item active">Danh sách tài khoản</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    

    <!-- Main content -->
    <section class="content">

    <div>
        <h2 class="text-danger"> <?php if(isset($thongbao)) echo $thongbao ?></h2>
    </div>
    
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách : Tài khoản</h3>
              </div>
              <a class="card-body">
                <table id="example2" class="table table-bordered table-hover text-black">
                  <thead>
                  <tr>
                    <th>STT</th>
                    <th>Ảnh </th>
                    <th>User</th>
                    <th>Email</th>
                    <th>Mật khẩu</th>
                    <th>Phone</th>
                    <th>Địa chỉ</th>
                    <th>Trạng thái</th>
                    <th>Role</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    foreach($list_taikhoan as $items){
                        extract($items);
                        echo '
                            <tr>
                                <td>'.$id.'</td>
                                <td>'.$image_user.'</td>
                                <td>'.$user_name.'</td>
                                <td>'.$email.'</td>
                                <td>'.$password.'</td>
                                <td>'.$phone_number.'</td>
                                <td>'.$address.'</td>
                                <td>'.$status.'</td>
                                <td>'.$role.'</td>
                                <td><a href="AdminController.php?act=edittaikhoan&id='.$id.'"><i class=" fa-solid fa-pen-to-square" style="color: black;"></i></a></td>
                                <td><a href="AdminController.php?act=destroytaikhoan&id='.$id.'" onclick="return confirm(\'Bạn có chắc xóa không ?\')"><i class="fa-solid fa-trash" style="color: black;"></i></a></td>
                            </tr>
                        ';
                    }
                    ?>
 
                  </tbody>

                </table>
                <div>

                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
    <!-- /.content -->
    </section>

       
   