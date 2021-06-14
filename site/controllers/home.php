<?php 
   require_once "../system/config.php";
//    require_once "../languages/".$_SESSION['lang'].".php";	

   require_once "../system/database.php";
   require_once "../lib/myfunctions.php";
   require_once "models/home.php"; 
   require_once "models/user.php";
   class Home{
       function __construct()   {
           $this->model = new model_home();
           $this->modelUser = new Model_user();
           $this->lib = new lib();
        
           $act = "home";
           if(isset($_GET["act"])==true) $act=$_GET["act"];
           switch ($act) {    
   	      case "home": $this->home(); break;
            case "detail": $this->detail(); break;
           
           }
           
        }
        function home()
        {		   
           $page_title ="Trang Chủ - EngBook";
           $viewFile = "views/home.php";
           require_once "views/layout.php";  
        }
   
        function product()
        {
			
         $getMenuParent = $this->model->getMenuParent();
		 if(isset($_GET['maloai'])){
			 $getCateFromId = $this->model->getCateFromId($_GET['maloai']);
		 }else{
			$getCateFromId = $this->model->getCateFromId(2);
		 }
         
         $getAllProDesc = $this->model->getAllProDesc(3,0);
         
         $getAllProDescoffset = $this->model->getAllProDesc(3,3);
         $getAllByBuyed = $this->model->getAllByBuyed(3,0);
         $etAllByBuyedoffset = $this->model->getAllByBuyed(3,3);
		 $PageNum=1;
         if(isset($_GET['Page'])==true) $PageNum = $_GET['Page'];
         settype($maLoai,"int");
         settype($PageNum,"int");
   
         if($PageNum<=0) $PageNum = 1;
		
       
   
         $page_title ="Danh Sách Sản Phẩm - Lê Quân Sneaker";
         $viewFile = "views/product.php";
         require_once "views/layout.php";  
        }
		
        function detail()
        {
           $getAllProSpecial = $this->model->getAllProSpecial();
           $getMenuParent = $this->model->getMenuParent();
           
           $slug = $_GET['slug'];
         
           $sp = $this->model->getOnePro($slug);   

		   $page_title =$sp['name']." - Lê Quân Sneaker";
           $viewFile = "views/Product-Detail.php";     
           require_once "views/layout.php";  
        }
		
	
}
   ?>