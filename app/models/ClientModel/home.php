<?php 
    // hàm kiểm tra
    function Prin_R($a){
        echo '<pre>';
            print_r($a);
        echo '</pre>';
    }

    // load 5 sản phẩm nổi btaaj ra trang home
    function Home_SP_noiBat(){
        $sql = "SELECT * FROM `sanpham` ORDER BY id_sanpham DESC LIMIT 5,10";

        $sp = pdo_query($sql);
        return $sp;
    }

    // load sản phẩm của chúng tôi 1 trang home
    function Home_SP_toMe1(){
        $sql = "SELECT * FROM `sanpham` ORDER BY luotxem DESC LIMIT 0,5";
        $sp = pdo_query($sql);
        return $sp;
    }

    // load sản phẩm  của chúng tôi 2 trang home
    function Home_SP_toMe2(){
        $sql = "SELECT * FROM `sanpham` ORDER BY id_sanpham DESC LIMIT 0,5";
        $sp = pdo_query($sql);
        return $sp;
    }

    // thực hiện update lượt xem khi nhấn vô xem sản phẩm (có nghĩa bấm vào chi tiết sp đó)
    function update_Views_sanPham($idSanPham,$idView){
        $sql = "UPDATE `sanpham` SET `luotxem` = '$idView' WHERE `sanpham`.`id_sanpham` =".$idSanPham;
    }

    // load one chi tiết sản phẩm dựa theo idSanPham
    function ChiTietSP($id){
        $sql = "SELECT * FROM `sanpham` 
                INNER JOIN danhmuc ON sanpham.danhmuc_id=danhmuc.id_danhmuc  
                WHERE id_sanpham =".$id;
        $sp = pdo_query_one($sql);
        return $sp;
    }

    // hiển thị các sản phẩm cùng danh mục ở trang chi tiết sản phẩm và ko lặp lại sp chi tiết
    function LoadAll_SP_cungDanhMuc($idsp,$iddm){
        // $sql = "SELECT * FROM `sanpham` WHERE danhmuc_id = '.$iddm.' AND id_sanpham !=".$idsp;
        $sql = "SELECT * FROM `sanpham` WHERE danhmuc_id = $iddm AND id_sanpham != $idsp";

        $sp = pdo_query($sql);
        return $sp;
    }

    



    // hiển thị các sản phẩm mới nhất ở trang chi tiết sản phẩm
    function load_SanPham_New(){
        $sql = "SELECT * FROM `sanpham` ORDER BY id_sanpham DESC LIMIT 0,5";
        $sp = pdo_query($sql);
        return $sp;
    }

    // load các sản phẩm ở giỏ hàng bằng id sản phẩm
    function loadSP_toCart($arr_id){
        // $arr = (implode(',',array_keys( $_SESSION['myCart'])));
        $sql = "SELECT * FROM `sanpham` WHERE `id_sanpham` IN ($arr_id)";
        $result = pdo_query($sql);
        return $result;
    }

    // search trang home
    function search_home($keyw){
        $sql = "SELECT * FROM `sanpham` WHERE `name` LIKE '%$keyw%' ";
        $result = pdo_query($sql);
        return $result;
    }

    // load all sản phầm vô trang shop
    function laodAll_sp(){
        $sql = "SELECT * FROM `sanpham` WHERE 1";
        $result = pdo_query($sql);
        return $result;
    }

    // hàm limit phân trang lấy 6 sản phẩm trên 1 trang
    function LoadPro_page($start,$per_page){
        $sql = "SELECT * FROM `sanpham` WHERE 1 LIMIT $start,$per_page;";
        $result = pdo_query($sql);
        return $result;
    }

    // 4 CHỨC NĂNG LỌC SẢN PHẨM

        //1 load sản phẩm theo mức độ phổ biến
    function load_Pro_Top(){
       $sql = "SELECT * FROM `sanpham` ORDER BY luotxem DESC";
       $result = pdo_query($sql);
       return $result;
   }
        //2 load sản phẩm mới nhất
    function load_Pro_New(){
        $sql = "SELECT * FROM `sanpham` ORDER BY id_sanpham DESC";
        $result = pdo_query($sql);
        return $result;
    }
     //3 load sản phẩm theo mức giá thấp đến cao
     function load_Pro_Price_Asc(){
        $sql = "SELECT * FROM `sanpham` ORDER BY giaKhuyenMai ASC";
        $result = pdo_query($sql);
        return $result;
    }
     //4 load sản phẩm theo mức giá cao đến thấp
     function load_Pro_Price_Desc(){
        $sql = "SELECT * FROM `sanpham` ORDER BY giaKhuyenMai DESC";
        $result = pdo_query($sql);
        return $result;
    }

    // tạo bình luận 
    function insertComments($nguoi_dung_id,$san_pham_id,$binh_luan,$ngay_tao){
        $sql = "INSERT INTO `binh_luans` (`id_binhluan`, `nguoi_dung_id`, `san_pham_id`, `binh_luan`, `ngay_tao`) 
        VALUES (NULL, '$nguoi_dung_id', '$san_pham_id', '$binh_luan', '$ngay_tao')";
        pdo_execute($sql);
    }
?>