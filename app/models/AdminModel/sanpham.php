<?php 
    function loadALL_sanpham(){
        $sql = "SELECT * FROM `sanpham` INNER JOIN danhmuc ON sanpham.danhmuc_id=danhmuc.id_danhmuc ORDER BY sanpham.id_sanpham DESC ";
        $LoadAll = pdo_query($sql);
        return $LoadAll;
    }

    function insert_sanpham($name,$anh, $mota, $danhmuc_id){
        $sql = "INSERT INTO `sanpham` (`id_sanpham`, `name`, `img`, `mota`,  `danhmuc_id`) VALUES (NULL, '$name', '$anh', '$mota', '$danhmuc_id') ";
        pdo_execute($sql);
    }

    function load_Namedanhmuc(){
        $sql = "SELECT *  FROM `danhmuc` ORDER BY id_danhmuc DESC";
        $param = pdo_query($sql);
        return $param;
    }

    function laodOne_sanpham($id){
        $sql = "SELECT * FROM `sanpham` WHERE id_sanpham=".$id;
        $loadOne = pdo_query_one($sql);
        return $loadOne;
    }

    function update_sanpham($id_sp,$name,$img,$mota,$danhmuc_id){
        $sql = "UPDATE `sanpham` SET `name` = '$name', `img` = '$img', `mota` = '$mota', `danhmuc_id` = '$danhmuc_id' WHERE `sanpham`.`id_sanpham` =".$id_sp;
        pdo_execute($sql);
    }


    function delete_sanpham($id){
        $sql = 'DELETE FROM `sanpham` WHERE `id_sanpham`='.$id;
        pdo_execute($sql);
    }


?>  