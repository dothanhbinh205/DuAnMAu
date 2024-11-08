<?php
class homeModels{
    public $conn;
    public function __construct()
    {
        $this->conn = connect_db();
    }
    // Danh sách sản phẩm
    // Loát 9 sản phẩm ra trang chủ
    public function home_sp(){
        $sql = "SELECT * FROM `sanpham` WHERE 1 ORDER BY `id` DESC LIMIT 9";
        $data = $this->conn->query($sql);
        return $data->fetchAll();
    }
    // Lấy sản phẩm ra trang chủ top 10 mặt hàng bằng lượt xem
    public function home_splx(){
        $sql = "SELECT * FROM `sanpham` WHERE 1 ORDER BY `luotxem` DESC LIMIT 10";
        $data = $this->conn->query($sql);
        return $data->fetchAll();
    }
    // Danh mục
    public function home_dm(){
        $sql = "SELECT * FROM `danhmuc` ORDER BY `id` DESC";
        $data = $this->conn->query($sql);
        return $data->fetchAll();
    }

    // Lấy sản phẩm từ danh mục ra trang chủ
    // public function home_dm_sp($kyw,$iddm=0){
    //     $sql = "SELECT * FROM `sanpham` WHERE 1";
    //     if($kyw != ""){
    //            $sql.=" and name like '%".$kyw."%'";
    //     }
    //     if($iddm>0){
    //         $sql.=" and iddm ='".$iddm."'";
    //  }
    //     $sql.= " ORDER BY `id` ASC";
    //     $data = $this->conn->query($sql);
    //     return $data->fetchAll();
    // }
    
    // Sản phẩm chi tiết
    public function home_spct($id){
        $sql = "SELECT * FROM `sanpham` WHERE `id` = $id";
        $data = $this->conn->query($sql);
        return $data->fetch();
    }
    public function home_sp_cungloai($id,$iddm){
        $sql = "SELECT * FROM `sanpham` WHERE `iddm` = $iddm AND `id` <> $id";
        $data = $this->conn->query($sql);
        return $data->fetchAll();
    }
    public function __destruct()
    {
        $this->conn = null;
    }
    

}
?>