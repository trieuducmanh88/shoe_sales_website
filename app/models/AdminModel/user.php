<?php  
    function load_user(){
        $sql = 'select * from users';
        $list_taikhoan = pdo_query($sql);
        return $list_taikhoan;
    }

    function destroy_taikhoan($id){
        $sql = "delete from users where id=".$id;
        pdo_execute($sql);
    }

?>