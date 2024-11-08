<?php
class ProductControllers {
    public $productModels;
    // public $productModels;
    public function __construct()
    {
        $this->productModels = new ProductModels();
    }
    // Danh mục  
     
    public function admin_sp() {
        $cates = $this->productModels->alldm();
        require_once './views/phpsp/adminsp.php';
    }
    // Sản Phẩm
    public function all_sp()
    {
      if(isset($_POST['listok']) && ($_POST['listok'])){
        $kyw = $_POST['kyw'];
        $iddm = $_POST['iddm'];
      }else{
        $kyw = '';
        $iddm = 0;
      }
      $cates = $this->productModels->alldm();   
      $product = $this->productModels->all_sp($kyw,$iddm);
    //   print_r($cates);
    require_once './views/phpsp/ds_sp.php';
    }
    public function delete_sp(){
        $id = $_GET['id'];
        $this->productModels->delete_sp($id);
        header('location:' . BASE_URL_ADMIN . "?act=list-product" );
    }
    public function create_sp()
    {
       require_once './views/phpsp/adminsp.php';
    }
    
    public function createPost_sp()
    {
        $upfile = "./uploads/." . $_FILES['img']['name'];
        if (move_uploaded_file($_FILES['img']['tmp_name'], $upfile)) {
            $anh = $upfile;
        }
        $iddm = $_POST['iddm'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $mota = $_POST['mota'];
        $this->productModels->inset_sp($name,$price,$anh,$mota,$iddm);
        header('location:' . BASE_URL_ADMIN . "?act=home_product");
    }
    public function update_sp()
    {
        $id = $_GET['id'];
        $productEdit = $this->productModels->find_sp($id);
        require_once './views/phpsp/updatesp.php';
    }
    public function updatePost_sp()
    {   
        $id = $_GET['id'];
        $productEdit = $this->productModels->find_sp($id);
        $anh=$productEdit['img'];
        $upfile = "./uploads/." . $_FILES['img']['name'];
        if (move_uploaded_file($_FILES['img']['tmp_name'], $upfile)) {
            $anh = $upfile;
        }
        $name = $_POST['name'];
        $price = $_POST['price'];
        $mota = $_POST['mota'];
        $this->productModels->update_sp($id,$name,$price,$anh,$mota);
        header("location:" . BASE_URL_ADMIN . "?act=home_product");
    }

}
?>