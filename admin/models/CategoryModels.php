<?php
class CategoryModels{
    public $conn;
    public function __construct()
    {
        $this->conn = connect_db();
    }
    // Phương thức lấy danh sách các phần tử 
    public function all_dm()
    {
        $sql = "SELECT * FROM `danhmuc`";
        $data = $this->conn->query($sql);
        return $data->fetchAll();
    }
    // Xoá
    public function delete_dm($id)
    {
      $sql = "DELETE FROM danhmuc WHERE `danhmuc`.`id` = {$id}";
      $this->conn->exec($sql);
    }
    // Thêm 
    public function inset_dm($name_dm)
    {
        $sql = "INSERT INTO `danhmuc` (`name_dm`) VALUES ('{$name_dm}')";
        $this->conn->exec($sql);
    }
    // Sửa
    public function update_dm($id,$name_dm)
    {
        $sql = "UPDATE `danhmuc` SET `name_dm` = '$name_dm' WHERE `danhmuc`.`id` = {$id}";
        $this->conn->exec($sql);
    }
    // Lấy thông tin của Cate cho trc
    public function find_dm($id)
    {
      $sql = "SELECT * FROM danhmuc WHERE `danhmuc`.`id`={$id}";
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