<?php
class ProductModels{
    public $conn;
    public function __construct()
    {
        $this->conn = connect_db();
    }
    // Phương thức lấy danh sách các phần tử từ danh mục sang sản phẩm
    public function alldm(){
        $sql = "SELECT * FROM `danhmuc`";
        $data = $this->conn->query($sql);
        return $data->fetchAll();
    }

    //sản phẩm
    
    // Phương thức lấy danh sách các phần tử 
    public function all_sp($kyw,$iddm)
    {
        $sql = "SELECT * FROM `sanpham` WHERE 1";
        if($kyw != ""){
               $sql.=" and name like '%".$kyw."%'";
        }
        if($iddm>0){
            $sql.=" and iddm ='".$iddm."'";
     }
        $sql.= " ORDER BY `id` ASC";
        $data = $this->conn->query($sql);
        return $data->fetchAll();
    }
    // Xoá
    public function delete_sp($id)
    {
      $sql = "DELETE FROM sanpham WHERE `sanpham`.`id` = {$id}";
      $this->conn->exec($sql);
    }
    // Thêm 
    public function inset_sp($name,$price,$anh,$mota,$iddm)
    {
        $sql = "INSERT INTO `sanpham` ( `name`, `price`, `img`, `mota`,`iddm`) VALUES ('$name', $price, '$anh', '$mota',$iddm)";
        $this->conn->exec($sql);
    }
    // Sửa
    public function update_sp($id,$name,$price,$anh,$mota)
    {
        $sql = "UPDATE `sanpham` SET `name` = '$name', `price` = '$price', `img` = '$anh', `mota` = '$mota' WHERE `sanpham`.`id` = {$id}";
        $this->conn->exec($sql);
    }
    // Lấy thông tin của Cate cho trc
    public function find_sp($id)
    {
      $sql = "SELECT * FROM `sanpham` WHERE `sanpham`.`id`={$id}";
      $stml = $this->conn->query($sql);
      $data = $stml->fetch();
      return $data;
    }
    


    public function __destruct()
    {
        $this->conn = null;
    }
}
?>