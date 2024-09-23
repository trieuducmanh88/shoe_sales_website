<?php 
    // hàm load one sản phẩm để extract ra khi adđ cart
    function loadOne_sanpham($id){
        $sql = "SELECT * FROM `sanpham` WHERE id_sanpham =".$id;
        $sp = pdo_query_one($sql);
        return $sp;
    }

    // hàm tạo mã order code cho đơn hàng
    function CreateOrderCode($prepix = 'ORD-'){
        // lấy thời gian hiện tại theo định đạng Y/M/D
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('YmdHis');

        // tạo 1 chuỗi ngẫu nhiên 6 ký tự
        // $randomString = strtoupper(substr(md5(uniqid(mt_rand(), true)), 0, 6));

        return $prepix.$date;
    }

    // hàm tạo đơn hàng : orders
    function createOrder($user_id,$orderCode,$name,$email,$phone,$address,$note,$total,$order_status){
        $sql = "INSERT INTO 
        `orders` (`id`,`user_id`, `orderCode`, `name`, `email`, `phone`, `address`, `note`, `total`, `order_status`) 
        VALUES (NULL,'$user_id', '$orderCode', '$name', '$email', '$phone','$address', '$note', '$total', '$order_status')";
        pdo_execute($sql);
    }

    // hàm tạo chi tiết đơn hàng : order detail
    function insertCart_detail($codeOrder,$product_id,$quantity,$price){
        $sql = "INSERT INTO `order_detail` (`id`, `codeOrder`, `product_id`, `quantity`, `price`) 
        VALUES (NULL, '$codeOrder', '$product_id', '$quantity', '$price')";
        pdo_execute($sql);
    }

    // hàm lấy giá sản phẩm dựa theo id sản phẩm
    function Price_Pro($idPro){
        $sql = 'SELECT giaKhuyenMai FROM `sanpham` WHERE `id_sanpham` = ' . $idPro;
        $result = pdo_query_one($sql);
        // Kiểm tra nếu kết quả tồn tại và trả về giá trị 'giaKhuyenMai'
        if ($result) {
            return $result['giaKhuyenMai'];
        }
        // Trả về giá trị mặc định nếu không tìm thấy sản phẩm
        return 0;
    }
    


?>