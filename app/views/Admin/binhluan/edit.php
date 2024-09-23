<form action="../controllers/AdminController.php?act=updateDanhMuc&id=<?=$id?>" method="post" style=" margin: 20px;">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sửa nhóm sản phẩm</h1>
          </div>
         
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Sửa danh mục sản phẩm</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <div>
      <?php if(isset($thongbao)&& $thongbao!='') echo '<h4 class="text-danger">'.$thongbao.'</h4>'   ?>  

    </div>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Sửa danh mục sản phẩm</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Tên danh mục</label>
                <input type="text" id="inputName" class="form-control" name="ten_danhmuc"  value="<?=$name_danhmuc?>">
              </div>
 
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
      </div>
      <div class="row">
        <div class="col-12">
          <input type="submit" name="update" value="Sửa" class="btn btn-success">
      </div>

      </div>
    </section>
    <!-- /.content -->
    </form>