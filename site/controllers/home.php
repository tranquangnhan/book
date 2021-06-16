<?php
require_once "../system/config.php";
//    require_once "../languages/".$_SESSION['lang'].".php";

require_once "../system/database.php";
require_once "../lib/myfunctions.php";
require_once "models/home.php";
require_once "models/user.php";

class Home
{
    public function __construct()
    {
        $this->model = new model_home();
        $this->modelUser = new Model_user();
        $this->lib = new lib();

        $act = "home";
        if (isset($_GET["act"]) == true) {
            $act = $_GET["act"];
        }

        switch ($act) {
            case "home": 
                $this->home();
                break;
            case "detailproduct": 
                $this->detailproduct();
                break;
            case "aboutUs": 
                $this->aboutUs();
                break;
            case "products": 
                $this->products();
                break;
            case "student": 
                $this->student();
                break;
            case "teacher": 
                $this->teacher();
                break;            
            case "parent": 
                $this->parent();
                break;
            case "blog": 
                $this->blog();
                break;    
            case "blogdetail": 
                $this->blogdetail();
                break;           
            case "contact": 
                $this->contact();
                break;
            
        }

    }
    public function home()
    {
        $page_title   = "Trang Chủ - EngBook";
        $viewFile     = "views/home.php";
        require_once "views/layout.php";
    }

    public function aboutUs() {
        $page_title   = "Giới Thiệu - EngBook";
        $viewFile     = "views/aboutUs.php";
        $css          = "about.css";
        $namePage     = "Giới Thiệu";
        require_once "views/layout.php";
    }

    public function products() {
        $page_title   = "Sản Phẩm - EngBook";
        $viewFile     = "views/product-list.php";
        $namePage     = "Sản Phẩm";
        require_once "views/layout.php";
    }

    public function detailproduct() {
        $page_title   = "Sản Phẩm Chi Tiết - EngBook";
        $viewFile     = "views/product-detail.php";
        $css          = "course-detail.css";
        $js           = "course-detail.js";
        $namePage     = "Sản Phẩm";
        require_once "views/layout.php";
    }

    public function student() {
        $page_title   = "Học Sinh - EngBook";
        $viewFile     = "views/student.php";
        $css          = "student.css";        
        $namePage     = "Học Sinh";        
        require_once "views/layout.php";
    }

    public function teacher() {
        $page_title   = "Giáo Viên - EngBook";
        $viewFile     = "views/teacher.php";
        $css          = "teacher.css";    
        $js           = "teacher.js";    
        $namePage     = "Giáo Viên";                
        require_once "views/layout.php";
    }

    public function parent() {
        $page_title   = "Phụ Huynh - EngBook";
        $viewFile     = "views/parent.php";          
        $namePage     = "Phụ Huynh";
        require_once "views/layout.php";
    }

    public function blog() {
        $page_title   = "Tin Tức - EngBook";
        $viewFile     = "views/blog-list.php";          
        $namePage     = "Tin Tức";
        require_once "views/layout.php";
    }

    public function blogdetail() {
        $page_title   = "Tin Tức - EngBook";
        $viewFile     = "views/blog-detail.php";     
        $css          = "blog-detail.css";         
        $namePage     = "Tin Tức";
        require_once "views/layout.php";
    }

    public function contact() {
        $page_title   = "Liên Hệ - EngBook";
        $viewFile     = "views/contact.php";     
        $css          = "contact.css";         
        $namePage     = "Liên Hệ";
        require_once "views/layout.php";
    }

}
