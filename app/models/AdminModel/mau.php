<?php 
    function loadAll_mau(){
        $sql = "SELECT * FROM `mau` ORDER BY id_mau DESC";
        $list_mau = pdo_query($sql);
        return $list_mau;
    }

    function store_mau($name,$ma_mau){
        $sql = "INSERT INTO `mau` (`id_mau`, `ten_mau`, `ma_mau`) VALUES (NULL, '$name', '$ma_mau')";
        pdo_execute($sql);
    }

    function loadOne_mau($id){
        $sql = "SELECT * FROM `mau` WHERE id_mau =".$id;
        $laodOne_mau = pdo_query_one($sql);
        return $laodOne_mau;
    }

    function updateMau($id,$ten_mau,$ma_mau){
        $sql = "UPDATE `mau` SET `ten_mau` = '$ten_mau', `ma_mau` = '$ma_mau' WHERE `mau`.`id_mau` = ".$id;
        pdo_execute($sql);
    }

    function delete_mau($id){
        $sql = 'delete from mau where id_mau='.$id;
        pdo_execute($sql);
    }
?>