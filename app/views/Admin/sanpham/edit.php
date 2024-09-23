

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
            <div class="col-xl-12">
                <div class="card">
                <div class="card-header bg-primary text-white">
                            <h5 class="card-title mb-0">Sửa thông tin sản phẩm</h5>
                        </div><!-- end card header -->

                    <div class="card-body">
                       
<form action="AdminController.php?act=updateSanPham" method="POST" enctype="multipart/form-data">
<div class="row">
        <div class="col-lg-5">
            <div class="mb-3">
                <label for="ten_danh_muc" class="form-label">Tên sản phẩm</label>
                <input type="text" id="" name="name" class="form-control" value="<?=$name ?>" placeholder="Nhập tên màu">
            </div>
        </div>

        <div class="col-lg-5">
            <div class="mb-3">
                <label for="ten_danh_muc" class="form-label">Ảnh sản phẩm</label>
                <input type="file" id="" name="img" class="form-control" value="" >

                <td> <img src="<?=$img?>" width="200px" alt=""></td>
                
            </div>
        </div>

        <div class="col-lg-5">
            <div class="mb-3">
                <label for="ten_danh_muc" class="form-label">Mô tả</label>
                <textarea name="mota" id="input" class="form-control" rows="5" cols="" ><?=$mota?></textarea>
            </div>
        </div>

        <div class="col-lg-5">
            <label for="ten_danh_muc" class="form-label">Danh mục sản phẩm</label> </br>
            <select name="danhmuc_id" id="" style="width: 180px;">
                <option value="">Chọn</option>
                <?php 
                    foreach($loadDanhMuc as $items){
                        extract($items);
                        if($id_danhmuc == $danhmuc_id){
                            echo ' 
                                <option value="'.$id_danhmuc.'" selected > '.$name_danhmuc.' </option>
                            ';
                        }else{
                            echo ' 
                                <option value="'.$id_danhmuc.'"  > '.$name_danhmuc.' </option>
                            ';
                        }
                    
                    }
                ?>
            </select>
        </div>
</div>

    <div class="d-flex">
        <button type="submit" name="btn" class="btn btn-primary">Sửa</button>
        <input type="hidden" name="id_sp" value="<?= $id_sanpham ?>"> <!-- Trường ẩn chứa id -->
        <input type="hidden" name="anh_cu" value="<?=$img?>">
    </div>
</form>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- container-fluid -->
</div> <!-- content -->

    


   
       
   