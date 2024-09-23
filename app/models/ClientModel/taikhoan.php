<?php 
    // tạo tài khoản
    function insertTaiKhoan($name,$email,$pass){
        $sql ="INSERT INTO `users` ( `user_name`, `email`, `password` ) 
        VALUES ( '$name', '$email', '$pass' )";
        return  pdo_execute($sql);
    }

    // Đăng nhập
    function CheckDangNhap($email,$pass){
        $sql = "SELECT * FROM `users` WHERE email = '$email' AND password ='$pass'";
        $dangnhap = pdo_query($sql);
        return $dangnhap;
    }

    function myTaiKhoan($id){
        $sql = "SELECT * FROM `users` WHERE id_user =".$id;
        $dangnhap = pdo_query_one($sql);
        return $dangnhap;
    }

    // thay đổi tài khoản user
    function update_TK_user($img,$name,$email,$pass,$phone,$diachi,$idUser){
        $sql = "UPDATE `users` SET `image_user` = '$img', `user_name` = '$name', 
        `email` = '$email', `password` = '$pass', `phone_number` = '$phone',
         `address` = '$diachi' WHERE `users`.`id_user` = ".$idUser;
        pdo_execute($sql);
    }
?>