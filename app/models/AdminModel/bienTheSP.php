<?php 
    function loadAll_sp_bienThe(){
        $sql = "SELECT * FROM `bien_the_san_phams` 
        INNER JOIN sanpham ON bien_the_san_phams.sanpham_id = sanpham.id_sanpham 
        INNER JOIN danhmuc ON sanpham.danhmuc_id = danhmuc.id_danhmuc 
        INNER JOIN size ON bien_the_san_phams.size_id = size.id_size 
        INNER JOIN mau ON bien_the_san_phams.mau_id = mau.id_mau ORDER BY bien_the_san_phams.id DESC ";
        $LoadAll = pdo_query($sql);
        return $LoadAll;
    }

    // gọi các  sản phẩm , size , màu để chỉnh ở biến thể sản phẩm
    function LoadSanPham(){
        $sql = "SELECT * FROM `sanpham` WHERE 1";
        $loadSanPham = pdo_query($sql);
        return $loadSanPham;
    }
    function LoadSize(){
        $sql = "SELECT * FROM `size` WHERE 1";
        $loadSize = pdo_query($sql);
        return $loadSize;
    }

    function LoadMau(){
        $sql = "SELECT * FROM `mau` WHERE 1";
        $loadMau = pdo_query($sql);
        return $loadMau;
    }


    function insert_sanPhamBienThe($sanpham_id, $mau_id, $size_id, $giaSanPham, $giaKhuyenMai, $soLuong){
        $sql = "INSERT INTO `bien_the_san_phams` (`id`, `sanpham_id`, `mau_id`, `size_id`, `giaSanPham`, `giaKhuyenMai`, `soLuong`) VALUES (NULL, '$sanpham_id', '$mau_id', '$size_id', '$giaSanPham', '$giaKhuyenMai', '$soLuong')";
        pdo_execute($sql);
    }

    function laodOne_sanphamBienThe($id){
        $sql = "SELECT * FROM `bien_the_san_phams` WHERE id=".$id;
        $loadOne = pdo_query_one($sql);
        return $loadOne;
    }

    function update_sanphamBienThe($sanpham_id,$mau_id,$size_id,$giaSanPham,$giaKhuyenMai,$soLuong,$id){
        $sql = "UPDATE `bien_the_san_phams` SET `sanpham_id` = '$sanpham_id', `mau_id` = '$mau_id', `size_id` = '$size_id', `giaSanPham` = '$giaSanPham', `giaKhuyenMai` = '$giaKhuyenMai', `soLuong` = '$soLuong' WHERE `bien_the_san_phams`.`id` = ".$id;
        pdo_execute($sql);
    }

    function delete_sanphamBienThe($id){
        $sql = 'DELETE FROM `bien_the_san_phams` WHERE `id`='.$id;
        pdo_execute($sql);
    }
   
?>