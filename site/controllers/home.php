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
            case "productdetail": 
                $this->productdetail();
                break;
            case "about": 
                $this->about();
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
            case "updateSlug":
                $this->updateSlug();
                break;
            
        }

    }

    function updateSlug() {
        $listBook = $this->model->getAllProduct();
        foreach ($listBook as $book) {
            $slug = $this->slug($book['name']);
            $slug = $slug . '-' . $book['id'];
            $id   = $book['id'];
            $this->model->updateSlug($slug, $id);             
        }        
        exit();
    }

    function slug($str) {
        $str = $this->stripUnicode($str);
        $ar  = array("%", "$", "*", "&", "?", "!", "#", "@"); // % $ * & ? ! # @
        $str = str_replace($ar, " ",$str);
        $str = trim(preg_replace('/\s+/',' ', $str)); // \s+ l?? m???t ho???c nhi???u kho???ng tr???ng
        $str = str_replace(" ", "-",$str);
        return $str;
    }

    function stripUnicode($str){
        if(!$str) return false;
        $unicode = array(
            'a'=>'??|??|???|??|???|??|???|???|???|???|???|??|???|???|???|???|???|??|??|???|??|???|??|???|???|???|???|???|??|???|???|???|???|???|A',
            'd'=>'??|??|D', 'f'=>'F', 's'=>'S', 'r'=>'R', 'w'=>'W', 'q'=>'Q', 't'=>'T', 'p'=>'P', 'g'=>'G',
            'h'=>'H', 'j'=>'J', 'k'=>'K', 'l'=>'L', 'z'=>'Z', 'x'=>'X', 'c'=>'C', 'v'=>'V', 'b'=>'B', 'n'=>'N', 'm'=>'M',
            'e'=>'??|??|???|???|???|??|???|???|???|???|???|??|??|???|???|???|??|???|???|???|???|???|E',
            'i'=>'??|??|???|??|???|??|??|???|??|???|I',
            'o'=>'??|??|???|??|???|??|???|???|???|???|???|??|???|???|???|???|???|??|??|???|??|???|??|???|???|???|???|???|??|???|???|???|???|???|O',
            'u'=>'??|??|???|??|???|??|???|???|???|???|???|??|??|???|??|???|??|???|???|???|???|???|U',
            'y'=>'??|???|???|???|???|??|???|???|???|???|Y',
        );
        foreach($unicode as $khongdau=>$codau) {
            $arr =explode("|",$codau);
            $str = str_replace($arr,$khongdau,$str);
        }
        return $str;
    }

    public function home()
    {
        $page_title   = "Trang Ch??? - EngBook";
        $viewFile     = "views/home.php";
        require_once "views/layout.php";
    }

    public function about() {
        $page_title   = "Gi???i Thi???u - EngBook";
        $viewFile     = "views/about.php";
        $css          = "about.css";
        $namePage     = "Gi???i Thi???u";
        require_once "views/layout.php";
    }

    public function products() {
        $page_title     = "S???n Ph???m - EngBook";
        $viewFile       = "views/product-list.php";
        $namePage       = "Sa??n Ph????m";
        $js             = "product-list.js";
        $ajax           = "product-list.js";
        $categories     = $this->model->getCategories();
        $idCateFirst    = $categories[0]['id'];

        if (isset($_GET['level'])) {            
            $level = $_GET['level'];
                    
            if ($level == 1) {
                $listProduct   = $this->model->getProductsByClass('0');                
                $AmountProduct = $this->model->countProductsByTypes('', '0', '');
            } else if ($level == 2) {
                $listProduct   = $this->model->getProductsByTypes('', '1', '');
                $AmountProduct = $this->model->countProductsByTypes('1', '1', '');
            } else if ($level == 3) {
                $listProduct   = $this->model->getProductsByTypes('', '6', '');
                $AmountProduct = $this->model->countProductsByTypes('', '6', '');
            } else if ($level == 4) {
                $listProduct   = $this->model->getProductsByTypes('', '10', '');
                $AmountProduct = $this->model->countProductsByTypes('', '10', '');
            }
            
        } else {
            $level = 6;
            $listProduct    = $this->model->getProducts();
            $AmountProduct  = $this->model->getAmountProducts();
        }

        if ($AmountProduct == 0) {
            $mess = '<h3 class="text-center w-100 notice-h3">Kh??ng t??m th???y s???n ph???m !</h3>';
        }

        $limitItem      = 9;
        $pageNumber     = ceil($AmountProduct / $limitItem);
        require_once "views/layout.php";
    }

    public function productdetail() {
        $slug = $_GET['slug'];
        $oneproduct = $this->model->getOnePro($slug);

        $slugPart1 =  $oneproduct['slug'];
        if($this->model->getSlugById($oneproduct['part']) ==''){
            
            $slugPart2 = $this->model->getSlugByPart($oneproduct['id']);
        }else{
            $slugPart2 = $this->model->getSlugById($oneproduct['part']);
        }
    

        $page_title   = "S???n Ph???m Chi Ti???t - EngBook";
        $viewFile     = "views/product-detail.php";
        $css          = "product-detail.css";
        $js           = "course-detail.js";
        $namePage     = "Sa??n Ph????m";
        require_once "views/layout.php";
    }

    public function student() {
        $page_title   = "H???c Sinh - EngBook";
        $viewFile     = "views/student.php";
        $css          = "student.css";        
        $namePage     = "H???c Sinh";        
        require_once "views/layout.php";
    }

    public function teacher() {
        $page_title   = "Gi??o Vi??n - EngBook";
        $viewFile     = "views/teacher.php";
        $css          = "teacher.css";    
        $js           = "teacher.js";    
        $namePage     = "Gi??o Vi??n";                
        require_once "views/layout.php";
    }

    public function parent() {
        $page_title   = "Ph??? Huynh - EngBook";
        $viewFile     = "views/parent.php";          
        $namePage     = "Ph??? Huynh";
        require_once "views/layout.php";
    }

    public function blog() {
        $page_title   = "Tin T???c - EngBook";
        $viewFile     = "views/blog-list.php";          
        $namePage     = "Tin T???c";
        require_once "views/layout.php";
    }

    public function blogdetail() {
        $page_title   = "Tin T???c - EngBook";
        $viewFile     = "views/blog-detail.php";     
        $css          = "blog-detail.css";         
        $namePage     = "Tin T???c";
        require_once "views/layout.php";
    }

    public function contact() {
        $page_title   = "Li??n H??? - EngBook";
        $viewFile     = "views/contact.php";     
        $css          = "contact.css";         
        $namePage     = "Li??n H???";
        require_once "views/layout.php";
    }

}
