<?php 
    session_start();
    ob_start();

    if(!$_SESSION['myCart']){
        $_SESSION['myCart'] = [] ;
    }

    include './app/views/Client/header.php';

    include 'app/models/pdo.php';
    include 'app/models/ClientModel/home.php';
    include 'app/models/ClientModel/taikhoan.php';
    include 'app/models/ClientModel/cart.php';


    $Home_SP_noiBat = Home_SP_noiBat(); 
    $Home_SP_toMe1 = Home_SP_toMe1();
    $Home_SP_toMe2 = Home_SP_toMe2();


    if(isset($_GET['act'])){
        $act = $_GET['act'];

        switch($act){
            case 'comments':
                if(isset($_POST['btn_comments'])){
                    $idUser = $_POST['idUser'];
                    $idProduct = $_POST['idProduct'];
                    $comment = $_POST['comment'];
                    $time = date('Y-m-d H:i:s');
                    insertComments($idUser,$idProduct,$comment,$time);
                    header('Location:index.php?act=ChitietSP');
                }
                // include './app/views/Client/ChiTietSanPham.php';
                // include './app/views/Client/home.php';
                break;


            case 'ChitietSP':
                if(isset($_GET['idSanPham'])){
                    $idSanPham = $_GET['idSanPham'];
                    $Load_chiTietSP = ChiTietSP($idSanPham);
                    extract($Load_chiTietSP);

                    // thực hiện update lượt xem của sản phẩm
                    $view = $luotxem;
                    if(isset($_GET['luotxem'])){
                        $view++;
                        update_Views_sanPham($idSanPham,$view);
                    }

                    if(isset($_GET['idDanhMuc'])){
                        $idDanhMuc = $_GET['idDanhMuc'];
                        $LoadAll_SP_cungDanhMuc =  LoadAll_SP_cungDanhMuc($idSanPham,$idDanhMuc);
                    }
                }
                $load_SanPham_New = load_SanPham_New();
                include './app/views/Client/ChiTietSanPham.php';
                break;
            
            case 'logIn':
                include './app/views/Client/LogIn.php';
                break;

         
                   

                case 'dangky':
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        $result = insertTaiKhoan($name, $email, $password);
                        if (!$result) {
                            $thongbao = 'Tạo tài khoản thành công';
                        } else {
                            $thongbao = 'Tạo tài khoản chưa thành công';
                        }
                    }
                    include './app/views/Client/LogIn.php';
                    break;


                    
                    case 'dangnhap':
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $email = $_POST['email'];
                            $password = $_POST['pass'];
                            $checkDangNhap = CheckDangNhap($email, $password);
                    
                            if (isset($checkDangNhap) && isset($checkDangNhap[0])) {
                                // Lấy thông tin người dùng
                                $user = $checkDangNhap[0];
                                
                                // Gán vào session
                                $_SESSION['user'] = $user;
                    
                                // Kiểm tra và sử dụng dữ liệu
                                if (isset($user['role']) && $user['role'] == 'Admin') {
                                    $thongbao1 = 'Admin đăng nhập thành công';
                                    header('location: ./app/controllers/AdminController.php ');
                                } else {
                                    $thongbao1 = 'Người dùng đăng nhập thành công';
                                    header('location: index.php ');
                                }
                            } else {
                                $thongbao1 = 'Sai tài khoản hoặc mật khẩu. Vui lòng kiểm tra lại.';
                            }
                        }
                        include './app/views/Client/LogIn.php';
                        break;

                    case 'dangXuat':
                        if(isset($_SESSION['user'])){
                            unset($_SESSION['user']);
                        }
                        include './app/views/Client/LogIn.php';
                        break;

                    case 'myTaiKhoan':
                        if(isset($_GET['idUser'])){
                            $idUser = $_GET['idUser'];
                            $myTaiKhoan = myTaiKhoan($idUser);
                        }
                        include './app/views/Client/myACount.php';
                        break;

                    case 'update_TK_user':
                        if (isset($_POST['btn'])) {
                    
                            $id_user = $_POST['id_user'];
                            $user_name = $_POST['user_name'];
                            $email = $_POST['email'];
                            $password = $_POST['password'];
                            $phone_number = $_POST['phone_number'];
                            $address = $_POST['address'];
                            $anh_cu = $_POST['anh_cu'];
                    
                            // Thực hiện update hình ảnh
                            if (isset($_FILES['image']) && ($_FILES['image']['name'] != '')) {
                                $target_dir = realpath('./public/uploads/').'/';
                                $target_file = $target_dir . basename($_FILES['image']['name']);
                                
                                if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                                    $img = $target_file;
                                } else {
                                    // Xử lý khi không thể tải lên tập tin
                                    $thongbao = 'Không thể tải lên hình ảnh';
                                    include './app/views/Client/myACount.php';
                                    break;
                                }
                            } else {
                                $img = $anh_cu;
                            }
                    
                            // Gọi hàm cập nhật thông tin tài khoản
                            update_TK_user($img, $user_name, $email, $password, $phone_number, $address, $id_user);
                            $thongbao = 'Cập nhật tài khoản thành công';
                    
                            // Lấy thông tin tài khoản sau khi cập nhật
                            $myTaiKhoan = myTaiKhoan($id_user);
                        }
                    
                        include './app/views/Client/myACount.php';
                        break;
                    
                    case 'addCart':
                        if(!isset($_SESSION['myCart'])){
                            $_SESSION['myCart']= [];
                        }
                        if(isset($_POST['btnAddCart'])){
                            $soLuong = $_POST['soLuong'];
                            foreach($soLuong as $id => $soluong1){
                                if(isset($_SESSION['myCart'][$id])){
                                    $_SESSION['myCart'][$id] += $soluong1;
                                }else{
                                    $_SESSION['myCart'][$id] = $soluong1;
                                }
                            }
                        }
                        include './app/views/Client/viewCart.php';
                        break;

                    case 'updateCart':
                        if(isset($_POST['btn_UpdateCart'])){
                            $soLuong = $_POST['soLuong'];
                            foreach($soLuong as $id => $soluong1){
                                if(isset($_SESSION['myCart'][$id])){
                                    // Prin_R($soluong1);
                                    $_SESSION['myCart'][$id] = $soluong1; 
                                }
                            }
                        }
                        header('Location: index.php?act=gioHang');
                        break;

                    case 'gioHang':
                        include './app/views/Client/viewCart.php';
                        break;
                   
                    case 'delSanPhamCart':
                        if (isset($_GET['idSPCart'])) {
                            $idSp = $_GET['idSPCart'];
                            unset( $_SESSION['myCart'][$idSp]);
                            header('Location:app/views/Client/viewCart.php');
                            // app/views/Client/viewCart.php
                        } else {
                            // Xóa toàn bộ giỏ hàng
                            $_SESSION['myCart'] = [];
                        }
                        header('Location: index.php?act=gioHang');
                        break;

                    case 'checkout':
                        include './app/views/Client/checkout.php';
                        break;

                    // case 'insert_order':
                    //     if(isset($_POST['place_Order'])){

                    //         $orderCode = CreateOrderCode();
                    //         $user_name = $_POST['user_name'];
                    //         $id_User = $_POST['id_User'];
                    //         $email = $_POST['email'];
                    //         $phone = $_POST['phone'];
                    //         $address = $_POST['address'];
                    //         $note = $_POST['note'];
                    //         $total = $_POST['total'];
                    //         $order_status = 1;

                    //         $error = [];
                    //         if(empty($user_name)){$error['user_name'] = 'Vui lòng nhập user name';}
                    //         if(empty($email)){$error['email'] = 'Vui lòng nhập mail';}
                    //         if(empty($phone)){$error['phone'] = 'Vui lòng nhập phone';}
                    //         if(empty($address)){$error['address'] = 'Vui lòng nhập dia chi';}

                    //         if(empty($error)){
                    //             $result = createOrder($id_User,$orderCode,$user_name,$email,$phone,$address,$note,$total,$order_status);
                    //             if(!$result){
                    //                 $_SESSION['myCart'] = [];
                    //             }
                    //         };

                    //     }
                    //     include './app/views/Client/viewCart.php';
                    //     break;
                    case 'insert_order':
                        if (isset($_POST['place_Order'])) {
                            $orderCode = CreateOrderCode();
                            $user_name = trim($_POST['user_name']);
                            $id_User = $_POST['id_User'];
                            $email = trim($_POST['email']);
                            $phone = trim($_POST['phone']);
                            $address = trim($_POST['address']);
                            $note = trim($_POST['note']);
                            $total = $_POST['total'];
                            $order_status = 1;
                    
                            $error = [];
                            if (empty($user_name)) {
                                $error['user_name'] = 'Username is required';
                            }
                            if (empty($email)) {
                                $error['email'] = 'Email is required';
                            }
                            if (empty($phone)) {
                                $error['phone'] = 'Phone number is required';
                            }
                            if (empty($address)) {
                                $error['address'] = 'Address is required';
                            }
                    
                            if (empty($error) && !empty($_SESSION['myCart'])) {
                                $result = createOrder($id_User, $orderCode, $user_name, $email, $phone, $address, $note, $total, $order_status);

                                foreach($_SESSION['myCart'] as $id => $soluong){
                                    $proID = $id;
                                    $price = Price_Pro($proID);
                                    $quantity = $soluong;
                                    insertCart_detail($orderCode,$proID,$quantity,$price);
                                }
                                if (!$result) {
                                    $_SESSION['myCart'] = [];
                                    header('Location: index.php');
                                } else {
                                    $error['general'] = 'Có lỗi xảy ra khi tạo đơn hàng.';
                                }
                            }
                        }
                        include './app/views/Client/checkout.php';
                        break;
                    

                    case 'contact':
                        include './app/views/Client/contact.php';
                        break;

                    case 'shop':
                        $loadAll_Pro =  laodAll_sp();

                        // số sản phẩm trên 1 trang
                        $per_page = 8;
                        // Lấy tổng số lượng bản ghi
                        $totalRow = count($loadAll_Pro);
                        // tính max page (có thể có số trang)
                        $max_page = ceil($totalRow/$per_page);
                        if(isset($_GET['page'])){
                            $page = $_GET['page'];
                            $start = ($page-1)*$per_page;
                            $laodPro_page  = LoadPro_page($start,$per_page);
                        }else{
                            $page = 1;
                            $start = ($page-1)*$per_page;
                            $laodPro_page  = LoadPro_page($start,$per_page);
                        }
                        // $laodPro_page  = LoadPro_page($start,$per_page);
                        include './app/views/Client/shop.php';
                        break;

                    // case 'search_Pro_Shop':
                    //     $loadAll_Pro =  laodAll_sp();
                    //     if(isset($_GET['ProTop'])){
                    //         Prin_R($_GET['ProTop']);
                    //         exit();
                    //     }
                    //     include './app/views/Client/search_Pro_Shop.php';
                    //     break;

                    // case 'search_Pro_Shop':
                    //     $loadAll_Pro = laodAll_sp();
                    //     if(isset($_POST['locSP'])){
                    //         Prin_R($_POST['locSP']); // Kiểm tra giá trị từ POST
                    //         exit();
                    //     }
                    //     include './app/views/Client/search_Pro_Shop.php';
                    //     break;

                    case 'search_Pro_Shop':
                        $loadAll_Pro = laodAll_sp();
                        if(isset($_GET['LocSanPham'])){
                            $locSP = $_GET['LocSanPham'];
                            switch($locSP){
                                case 'ProductTop':
                                    $loadAll_Pro =load_Pro_Top();
                                    break;
                                case 'ProductNew':
                                    $loadAll_Pro =load_Pro_New();
                                    break;
                                case 'PriceASC':
                                    $loadAll_Pro =load_Pro_Price_Asc();
                                    break;
                                case 'PriceDESC':
                                    $loadAll_Pro =load_Pro_Price_Desc();
                                    break;
                            }
                        }
                        include './app/views/Client/search_Pro_Shop.php';
                        break;
                    

                    case 'blog':
                        include './app/views/Client/blog.php';
                        break;

                    case 'aboutUs':
                        include './app/views/Client/aboutUs.php';
                        break;

                    case 'thanks':
                        include './app/views/Client/thanks.php';
                        break;
                    
                    case 'search_home':
                        if(isset($_POST['btn_search'])){
                            $keyw = $_POST['keyw'];
                            $search = search_home($keyw);
                            // Prin_R($search);
                        }
                        include './app/views/Client/search.php';
                        break;

              

            

                   




        }
    } else {

        include './app/views/Client/home.php';
    }

    include './app/views/Client/footer.php';
    ob_end_flush();
?>
