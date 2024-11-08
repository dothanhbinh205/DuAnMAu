<?php 
session_start();
// Require file Common
require_once '../commons/env.php'; // Khai báo biến môi trường
require_once '../commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Models
require_once './models/CategoryModels.php';
require_once './models/ProductModels.php';
require_once './models/homeModels.php';
require_once './models/accmodel.php';

// Require toàn bộ file Controllers
require_once './controllers/CategoryControllers.php';
require_once './controllers/ProductControllers.php';
require_once './controllers/homeControllers.php';
require_once './controllers/acccontroller.php';

// Route
$act = $_GET['act'] ?? '/';

// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match
// Các Thầy.Cô có thể dùng Switch-Case
match ($act) {
    // Trang chủ
    '/'=>(new homeControllers)->home(),
    'sanphamct'=>(new homeControllers)->home_spct($_GET['id']),
    'gioithieu'=>(new homeControllers)->gioithieu(),
    'lienhe'=>(new homeControllers)->lienhe(),
    'gop_y'=>(new homeControllers)->gop_y(),
    'hoidap'=>(new homeControllers)->hoidap(),
    // 'sanpham_dm'=>(new homeControllers)->home_dm_sp(),
    // Hàng hoá
    'home_admin' => (new CategoryControllers)->admin_dm(),
    'list-cate'=>(new CategoryControllers)->all_dm(),
    'create'=>(new CategoryControllers)->create_dm(),
    'create-Category'=>( new CategoryControllers)->createPost_dm(),
    'delete-cate'=>(new CategoryControllers)->delete_dm(),
    'update'=>(new CategoryControllers)->update_dm(),
    'update-Category'=>(new CategoryControllers)->updatePost_dm(),
    // Sản phẩm
    'home_product' => (new ProductControllers)->admin_sp(),
    'list-product'=>(new ProductControllers)->all_sp(),
    'createsp'=>(new ProductControllers)->create_sp(),
    'create-product'=>( new ProductControllers)->createPost_sp(),
    'delete-product'=>(new ProductControllers)->delete_sp(),
    'updatesp'=>(new ProductControllers)->update_sp(),
    'update-product'=>(new ProductControllers)->updatePost_sp(),
    // 'LK'=>(new ProductControllers)->alldm(),
    //danhnhap
    'login' => (new accController) -> login(),
    'logout' => (new accController) -> logout(),
}
?>