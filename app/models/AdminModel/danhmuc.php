<?php 

    function loadAll_danhmuc(){
        $sql = "SELECT * FROM `danhmuc` ORDER BY id_danhmuc DESC";
        $param = pdo_query($sql);
        return $param;
    }

    function store_danhmuc($name_danhmuc){
        $sql = "INSERT INTO `danhmuc` ( `name_danhmuc`) VALUES ('$name_danhmuc')";
        pdo_execute($sql);
    }

    function loadOne_danhmuc($id){
        $sql = "SELECT * FROM `danhmuc` WHERE id_danhmuc =".$id;
        $param = pdo_query_one($sql);
        return $param;
    }

    function update_danhmuc($id,$name){
        $sql = "UPDATE `danhmuc` SET `name_danhmuc` = '$name' WHERE `danhmuc`.`id_danhmuc` =".$id;
        pdo_execute($sql);
    }

    function delete_danhmuc($id){
        $sql = 'delete from danhmuc where id_danhmuc='.$id;
        pdo_execute($sql);
    }

?>