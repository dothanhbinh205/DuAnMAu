<?php
class accController{
    public $accModel;
    function __construct(){
        $this->accModel=new accModel();
    }
    function login(){
        require_once './views/home/login.php';
        if(isset($_POST['btn_login'])){
            if($this->accModel->checkAcc($_POST['user'],$_POST['pass'])>0){
                header('location:' . BASE_URL_ADMIN . "?act=home_admin" );
                $_SESSION['user'] = $_POST['user'];
            }else{
                echo '<label for="">Sai Tài khoản hoặc mk</label>';
        }
    }

} 
function logout(){
    unset($_SESSION['user']);
    header('location:' .BASE_URL_ADMIN."?act=/");
}
}