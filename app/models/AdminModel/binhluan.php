<?php 
    function loadAll_binhluan(){
        $sql = "SELECT binh_luans.id , users.user_name , sanpham.name , binh_luans.ngay_tao , binh_luans.binh_luan  
        FROM `binh_luans` JOIN users ON binh_luans.nguoi_dung_id = users.id 
        JOIN sanpham ON binh_luans.san_pham_id = sanpham.id_sanpham 
        ORDER BY binh_luans.id DESC";
        $list_binhluan = pdo_query($sql);
        return $list_binhluan;
    }

    function delete_binhluan($id){
        $sql = 'delet from binhluans where id='.$id;
        pdo_execute($sql);
    }
?>