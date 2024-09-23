<?php 
    session_start();

    include '../views/Admin/header.php';
    include '../views/Admin/menuleft.php';
    include '../models/pdo.php';

    include '../models/AdminModel/danhmuc.php';
    include '../models/AdminModel/mau.php';
    include '../models/AdminModel/size.php';
    include '../models/AdminModel/sanpham.php';
    include '../models/AdminModel/bienTheSP.php';


    include '../models/AdminModel/user.php';
    include '../models/AdminModel/binhluan.php';

    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch($act){
            case "homeClient":
                        // header('Location: index.php?act=gioHang');
                header('Location : ../../../../index.php');
                break;

            case'ListDanhMuc':
                $loadAll_danhmuc = loadAll_danhmuc();
                include '../views/Admin/danhmuc/list.php';
                break;
            case 'CreateDanhMuc':
                include '../views/Admin/danhmuc/add.php';
                break;
            case'StoreDanhMuc':
                if(isset($_POST['btn'])){
                    $tenDanhMuc = $_POST['ten_danh_muc'];
                    store_danhmuc($tenDanhMuc);
                    $thongbao = 'Thêm thành công !';
                }
                $loadAll_danhmuc = loadAll_danhmuc();
                include '../views/Admin/danhmuc/list.php';
                break;
            case'editDanhMuc':
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $loadOne_danhmuc = loadOne_danhmuc($id);
                    extract($loadOne_danhmuc);
                }
                include '../views/Admin/danhmuc/edit.php';
                break;
           
            case 'updateDanhMuc':
                if(isset($_POST['btn'])){
                        $id = $_POST['id_danh_muc'];
                        $name = $_POST['ten_danh_muc'];
                        // Gọi hàm update_danhmuc
                        $result = update_danhmuc($id, $name);
                        // Kiểm tra kết quả
                        if(!$result) {
                            $thongbao = 'Sửa thành công';
                        } else {
                            $thongbao = 'Sửa không thành công';
                        }
                }
                $loadAll_danhmuc = loadAll_danhmuc();
                include '../views/Admin/danhmuc/list.php';
                break;
            

            case 'destroyDanhMuc':
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $result = delete_danhmuc($id);
                    if(!$result){
                        $thongbao = 'Xoá thành công';
                    }               
                 }
                $loadAll_danhmuc = loadAll_danhmuc();
                include '../views/Admin/danhmuc/list.php';
                break;

            case 'showDanhMuc':
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $loadOne_danhmuc = loadOne_danhmuc($id);
                    extract($loadOne_danhmuc);
                }
                include '../views/Admin/danhmuc/show.php';
                break;

            case 'listMau':
                $loadAll_mau = loadAll_mau();
                include '../views/Admin/mau/index.php';
                break;
            
            case 'createMau':
                include '../views/Admin/mau/create.php';
                break;

            case 'storeMau':
                if(isset($_POST['btn'])){
                    $name = $_POST['name'];
                    $ma_mau = $_POST['ma_mau'];
                    $result = store_mau($name,$ma_mau);
                    if(!$result){
                        $thongbao = 'Thêm thành công màu';
                    }
                }
                $loadAll_mau = loadAll_mau();
                include '../views/Admin/mau/index.php';
                break;
            
            case 'editMau':
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $loadOne = loadOne_mau($id);
                    extract($loadOne);
                }
                include '../views/Admin/mau/edit.php';
                break;

            case 'updateMau':
                if(isset($_POST['btn'])){
                    $id = $_POST['id_mau'];
                    $name = $_POST['name'];
                    $ma_mau = $_POST['ma_mau'];
                    updateMau($id,$name,$ma_mau);
                    $thongbao = 'Sửa thành công';
                }
                $loadAll_mau = loadAll_mau();
                include '../views/Admin/mau/index.php';
                break;
            
            case 'destroyMau':
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    delete_mau($id);
                    $thongbao = 'Xoá thành công';
                }
                $loadAll_mau = loadAll_mau();
                include '../views/Admin/mau/index.php';
                break;
            
            case'showMau':
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $loadOne =  loadOne_mau($id);
                    extract($loadOne);
                }
                include '../views/Admin/mau/show.php';
                break;

            case 'listSize':
                $loadAll_size = loadAll_size();
                include '../views/Admin/size/index.php';
                break;

            case 'createSize':
                include '../views/Admin/size/create.php';
                break;

            case 'storeSize':
                if(isset($_POST['btn'])){
                    $ten_size = $_POST['name'];
                    insert_size($ten_size);
                    $thongbao = 'Thêm thành công size';
                }
                $loadAll_size = loadAll_size();
                include '../views/Admin/size/index.php';
                break;

            case 'editSize':
                if(isset($_GET['id'])){
                    $id_size = $_GET['id'];
                    $loadOne = laodOne_size($id_size);
                    extract($loadOne);
                }
                include '../views/Admin/size/edit.php';
                break;

            case 'updateSize':
                if(isset($_POST['btn'])){
                    $id_size = $_POST['id_size'];
                    $ten_size = $_POST['name'];
                    update_size($id_size,$ten_size);
                    $thongbao = 'Sửa size thành công';
                }
                $loadAll_size = loadAll_size();
                include '../views/Admin/size/index.php';
                break;

            case 'destroySize':
                if(isset($_GET['id'])){
                    $id_size =  $_GET['id'];
                    delete_size($id_size);
                    $thongbao = 'Xoá size thành công';
                }
                $loadAll_size = loadAll_size();
                include '../views/Admin/size/index.php';
                break;

            case 'showSize':
                if(isset($_GET['id'])){
                    $id_size = $_GET['id'];
                    $loadOne = laodOne_size($id_size);
                    extract($loadOne);
                }
                include '../views/Admin/size/show.php';
                break;

            case 'listSanPham':
                $loadAll_sp = loadALL_sanpham();
                include '../views/Admin/sanpham/index.php';
                break;

            case 'createSanPham':
                $loadDanhMuc = load_Namedanhmuc();
                include '../views/Admin/sanpham/create.php';
                break;

            case 'storeSanPham':
                if(isset($_POST['btn'])){
                    $name = $_POST['name'];
                    $mota = $_POST['mota'];
                    $danhmuc_id = $_POST['danhmuc_id'];

                    if(isset($_FILES['img'])){
                        // Xác định nơi file tải lên sẽ được lưu trữ
                        $target_dir = '../../public/uploads/';
                        // Tên file -> tạo ra cả đường dẫn đầy đủ bao gồm cả tên file 
                        $target_file = $target_dir . basename($_FILES['img']['name']);
                        // Tải file lên vị trí bạn đã xác định 
                        move_uploaded_file($_FILES['img']['tmp_name'],$target_file);
                        $img = $target_file;
                    }


                    insert_sanpham($name,$img, $mota, $danhmuc_id);
                    $thongbao = 'Thêm sản phẩm thành công';
                }
                $loadAll_sp = loadALL_sanpham();
                include '../views/Admin/sanpham/index.php';
                break;

            case 'editSanPham':
                if(isset($_GET['id'])){
                    $id_sp = $_GET['id'];
                    $loaOne = laodOne_sanpham($id_sp);
                    extract($loaOne);
                }
                $loadDanhMuc = load_Namedanhmuc();
                include '../views/Admin/sanpham/edit.php';
                break;

            case 'updateSanPham':
                if(isset($_POST['btn'])){
                    $id_sp = $_POST['id_sp'];
                    $tenSP = $_POST['name'];
                    $mota = $_POST['mota'];
                    $danhmuc_id = $_POST['danhmuc_id'];
                    $anh_cu = $_POST['anh_cu'];
                    
                    // kiếm tra xem hình ảnh mới được upload lên chưa
                    if(isset($_FILES['img']) && ($_FILES['img']['name']!='')){
                        // Xác định nơi để lưu trữ file
                        $target_dir = '../../public/uploads/';
                        // Tên đầy đủ của file , đường dẫn
                        $target_file = $target_dir.basename($_FILES['img']['name']);
                        // thực hiện upfile lên nơi đãchỉ định
                        move_uploaded_file($_FILES['img']['tmp_name'],$target_file);
                        $img = $target_file;
                    }else{
                        // Khong có hình ảnh mới được tải lên thì nó giữ ảnh cũ
                        $img = $anh_cu;
                    }
                    update_sanpham($id_sp,$tenSP,$img,$mota,$danhmuc_id);
                    $thongbao = 'Sửa sản phẩm thành công';
                }
                $loadAll_sp = loadALL_sanpham();
                include '../views/Admin/sanpham/index.php';
                break;
            
            case 'destroySanPham':
                if(isset($_GET['id'])){
                    $idSp= $_GET['id'];
                    delete_sanpham($idSp);
                    $thongbao = 'Xoá sản phẩm thành công';
                }
                $loadAll_sp = loadALL_sanpham();
                include '../views/Admin/sanpham/index.php';
                break;

            case 'listBienThe':
                $LoadAll_sp_bienThe = loadAll_sp_bienThe();
                include '../views/Admin/bienTheSP/index.php';
                break;
            
            case 'createSanPhamBienThe':
                $LoadSanPham = LoadSanPham();
                $LoadSize = LoadSize();
                $LoadMau = LoadMau();
                include '../views/Admin/bienTheSP/create.php';
                break;

            case 'storeBienTheSanPham':
                if(isset($_POST['btn'])){
                    $sanpham_id = $_POST['sanpham_id'];
                    $color_id = $_POST['color_id'];
                    $size_id = $_POST['size_id'];
                    $gia_san_pham = $_POST['giaSP'];
                    $giaKhuyenMai = $_POST['giaKhuyenMai'];
                    $soluong = $_POST['soluong'];
                    insert_sanPhamBienThe($sanpham_id, $color_id, $size_id, $gia_san_pham, $giaKhuyenMai, $soluong);
                    $thongbao = 'Thêm thành công sản phẩm biến thể';
                }
                $LoadAll_sp_bienThe = loadAll_sp_bienThe();
                include '../views/Admin/bienTheSP/index.php';
                break;
        
            case 'editSanPhamBienThe':
                if(isset($_GET['id'])){
                    $id_SPBienThe = $_GET['id'];
                    $loadOneSPBienThe= laodOne_sanphamBienThe($id_SPBienThe);
                    extract($loadOneSPBienThe);
                }
                $LoadSanPham = LoadSanPham();
                $LoadSize = LoadSize();
                $LoadMau = LoadMau();
                include '../views/Admin/bienTheSP/edit.php';
                break;
            

            case 'updateBienTheSanPham':
                if(isset($_POST['btn'])){
                    $idSPBienThe = $_POST['idSPBienThe'];
                    $sanpham_id = $_POST['sanpham_id'];
                    $color_id = $_POST['color_id'];
                    $size_id = $_POST['size_id'];
                    $gia_san_pham = $_POST['giaSP'];
                    $giaKhuyenMai = $_POST['giaKhuyenMai'];
                    $soluong = $_POST['soluong'];
                    update_sanphamBienThe($sanpham_id,$color_id,$size_id,$gia_san_pham,$giaKhuyenMai,$soluong,$idSPBienThe);
                    $thongbao = 'Sửa thành công  sản phẩm biến thể';

                }
                $LoadAll_sp_bienThe = loadAll_sp_bienThe();
                include '../views/Admin/bienTheSP/index.php';
                break;

            case 'destroySanPhamBienThe':
                if(isset($_GET['id'])){
                    $id_SPBienThe = $_GET['id'];
                    delete_sanphamBienThe($id_SPBienThe);
                    $thongbao = 'Xoá thành công  sản phẩm biến thể';
                }
                $LoadAll_sp_bienThe = loadAll_sp_bienThe();
                include '../views/Admin/bienTheSP/index.php';
                break;

            case 'showSanPhamBienThe':
                if(isset($_GET['id'])){
                    $id_SPBienThe = $_GET['id'];
                    $loadOneSPBienThe= laodOne_sanphamBienThe($id_SPBienThe);
                    extract($loadOneSPBienThe);
                }
                $LoadSanPham = LoadSanPham();
                $LoadSize = LoadSize();
                $LoadMau = LoadMau();
                include '../views/Admin/bienTheSP/show.php';
                break;








































            
            

            // case 'taikhoan':
            //     $list_taikhoan = load_user();
            //     include '../views/Admin/user/list.php';
            //     break;
            // case 'destroytaikhoan':
            //     if(isset($_GET['id'])&& $_GET['id']>0){
            //         $id = $_GET['id'];
            //         destroy_taikhoan($id);
            //     };
            //     $list_taikhoan = load_user();
            //     include '../views/Admin/user/list.php';
            //     break;

            // case 'binhluan':
            //     $list_binhluan = loadAll_binhluan();
            //     include ('../views/Admin/binhluan/list.php');
            //     break;
        };

    }
    else{
        include '../views/Admin/home_thongKe.php';
    }
    include '../views/Admin/footer.php';

     
?>