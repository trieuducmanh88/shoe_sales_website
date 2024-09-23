<?php 
    function loadAll_size(){
        $sql = "SELECT * FROM `size` ORDER BY id_size DESC";
        $loadAll = pdo_query($sql);
        return $loadAll;
    }

    function insert_size($ten_size){
        $sql = "INSERT INTO size (`ten_size`) VALUES ('$ten_size') ";
        pdo_execute($sql);
    }

    function laodOne_size($id){
        $sql = "SELECT * FROM `size` WHERE id_size=".$id;
        $loadOne = pdo_query_one($sql);
        return $loadOne;
    }

    function update_size($id,$ten_size){
        $sql = "UPDATE `size` SET `ten_size` = '$ten_size' WHERE `id_size`=".$id;
        pdo_execute($sql);
    }

    function delete_size($id){
        $sql = 'DELETE FROM `size` WHERE `id_size`='.$id;
        pdo_execute($sql);
    }
?>