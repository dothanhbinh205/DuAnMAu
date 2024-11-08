<?php
class CategoryControllers{
    public $categoryModels;
    public function __construct()
    {
        $this->categoryModels = new CategoryModels();
    }
    
    public function all_dm()
    {
      // Lấy danh sách 
      $cates = $this->categoryModels->all_dm();
    //   print_r($cates);
    require_once './views/php/ds_lh.php';
    }
    public function admin_dm() {
        require_once './views/php/admin.php';
    }
    public function delete_dm(){
        $id = $_GET['id'];
        $this->categoryModels->delete_dm($id);
        header('location:' . BASE_URL_ADMIN . "?act=list-cate" );
    }
    public function create_dm()
    {
       require_once './views/php/admin.php';
    }
    
    public function createPost_dm()
    {
        $name_dm = $_POST['name_dm'];
        $this->categoryModels->inset_dm($name_dm);
        header('location:' . BASE_URL_ADMIN . "?act=home_admin");
    }
    public function update_dm()
    {
        $id = $_GET['id'];
        $cateEdit = $this->categoryModels->find_dm($id);
        require_once './views/php/update_cate.php';
    }
    public function updatePost_dm()
    {   
        $id = $_GET['id'];
        $name_dm = $_POST['name_dm'];
        $this->categoryModels->update_dm($id,$name_dm);
        header("location:" . BASE_URL_ADMIN . "?act=home_admin");
    }

}
?>