<?php
class homeControllers
{
    public $homControllers;
    public function __construct()
    {
        $this->homControllers = new homeModels();
    }

    // Đổ ra home
    public function home()
    {
        // Lấy sản phẩm 9 sản phẩm sang home
        $homeproduct = $this->homControllers->home_sp();
        // Lấy danh mục sang home
        $homecate = $this->homControllers->home_dm();
        // print_r($homeproduct);
        $homeproductlx = $this->homControllers->home_splx();
        require_once './views/home/home.php';
    }

    // Sản phẩm chi tiết
    public function home_spct($id)
    {
        // Lấy sản phẩm sang home
        $homeproduct_ct = $this->homControllers->home_spct($id);
        extract($homeproduct_ct);
        $homeproduct_cungloai = $this->homControllers->home_sp_cungloai($id, $iddm);
        // print_r($homeproduct_ct);
        // Lấy danh mục sang home
        $homecate = $this->homControllers->home_dm();
        // print_r($homeproduct);
        $homeproductlx = $this->homControllers->home_splx();
        require_once './views/home/sanphamct.php';
    }
    public function gioithieu(){
        require_once './views/home/gioithieu.php';
    }
    public function lienhe(){
        require_once './views/home/lienhe.php';
    }
    public function gop_y(){
        require_once './views/home/gop_y.php';
    }
    public function hoidap(){
        require_once './views/home/hoidap.php';
    }
    // Lấy sản phẩm theo danh mục
    // public function home_dm_sp()
    // {
    //     if (isset($_POST['iddm']) && ($_POST['iddm'] > 0)) {
    //         $iddm = $_POST['iddm']; 
    //         $kyw = $_POST['kyw'];
    //         require_once './views/home/sanpham_dm.php';
    //     }
    //     $homecate = $this->homControllers->home_dm();
    //     $homeproduct = $this->homControllers->home_sp();
    //     $product = $this->homControllers->home_dm_sp("",$iddm);
    // }

 
}
