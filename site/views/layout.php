<!DOCTYPE html>
<html lang="en">

<head>
    <title><?=$page_title?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=PATH_URL?>css/css-main/animate.css">
    <link rel="stylesheet" href="<?=PATH_URL?>css/css-main/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=PATH_URL?>css/css-main/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?=PATH_URL?>css/css-main/magnific-popup.css">
    <link rel="stylesheet" href="<?=PATH_URL?>css/css-main/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?=PATH_URL?>css/css-main/jquery.timepicker.css">
    <link rel="stylesheet" href="<?=PATH_URL?>css/css-main/flaticon.css">
    <link rel="stylesheet" href="<?=PATH_URL?>css/css-main/style.css">
    <link rel="stylesheet" href="<?=PATH_URL?>css/css-main/reponsive/home.css">
    <?php if (isset($css)) {?>
        <link rel="stylesheet" href="<?=PATH_URL?>css/css-main/style/<?=$css?>">
    <?php }?>
</head>

<body>
    <!-- Modal -->
    <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header p-b-0">
                    <label for="exampleInputEmail1">Tìm kiếm</label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="w-100">
                        <div class="row">
                            <div class="col-9 p-r-0">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="" placeholder="Tìm ...">

                                </div>
                            </div>
                            <div class="col-3">
                                <button type="submit" class="btn btn-primary float-right">Tìm kiếm</button>

                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand logo-lap" href="index.html">
                <img src="<?=PATH_URL?>images/logo.jpg" class="logo-header" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"><i class="fa fa-bars" aria-hidden="true"></i></span>
            </button>
            <a class="navbar-brand logo-mobile w-80" href="index.html">
                <img src="<?=PATH_URL?>images/logo.jpg" class="logo-header" alt="logo">
            </a>
            <div class="navbar-brand m-0 p-0 search-on-nav search-box-will-show w-10">
                <div class="icon-search" data-toggle="modal" data-target="#search-modal">
                    <i class="fa fa-search icon-search-i" aria-hidden="true"></i>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item <?php echo ($viewFile == "views/home.php") ? 'bar-active active' : '' ?>">
                        <a href="<?=SITE_URL?>?act=home" class="nav-link">Trang Chủ</a>
                    </li>
                    <li class="nav-item dropdown-2 <?php echo ($viewFile == "views/about.php") ? 'bar-active active' : '' ?>">
                        <a href="<?=SITE_URL?>?act=about" class="nav-link">Giới Thiệu</a>
                        <ul class="dropdown-hover-2">
                            <li><a href="<?=SITE_URL?>?act=about">Giới thiệu chung</a></li>
                            <!-- <li><a href="gdpt.html">Chương trình GDPT 2018</a></li>
                            <li><a href="thidiem.html">CHƯƠNG TRÌNH THÍ ĐIỂM</a></li>
                            <li><a href="https://phuongnam.edu.vn/">FAMILY AND FRIENDS</a></li>
                            <li><a href="https://tienganh3s.vn/">TIẾNG ANH TĂNG CƯỜNG</a></li> -->
                        </ul>
                    </li>

                    <li class="nav-item dropdown-2 <?php echo ($viewFile == "views/product-list.php" || $viewFile == "views/product-detail.php") ? 'bar-active active' : '' ?>">
                        <a href="<?=SITE_URL?>?act=products" class="nav-link">Sản Phẩm</a>
                        <ul class="dropdown-hover-2 sanpham">
                            <li><a href="<?=SITE_URL?>?act=products&level=1">MẦM NON</a></li>
                            <li><a href="<?=SITE_URL?>?act=products&level=2">TIỂU HỌC</a></li>
                            <li><a href="<?=SITE_URL?>?act=products&level=3">THCS</a></li>
                            <li><a href="<?=SITE_URL?>?act=products&level=4">THPT</a></li>
                        </ul>
                    </li>

                    <li class="nav-item <?php echo ($viewFile == "views/student.php") ? 'bar-active active' : '' ?>">
                        <a href="<?=SITE_URL?>?act=student" class="nav-link">Học Sinh</a>
                    </li>
                    <li class="nav-item <?php echo ($viewFile == "views/teacher.php") ? 'bar-active active' : '' ?>">
                        <a href="<?=SITE_URL?>?act=teacher" class="nav-link">Giáo Viên</a>
                    </li>
                    <li class="nav-item <?php echo ($viewFile == "views/parent.php") ? 'bar-active active' : '' ?>">
                        <a href="<?=SITE_URL?>?act=parent" class="nav-link">Phụ Huynh</a>
                    </li>
                    <li class="nav-item <?php echo ($viewFile == "views/blog-list.php" || $viewFile == "views/blog-detail.php") ? 'bar-active active' : '' ?>">
                        <a href="<?=SITE_URL?>?act=blog" class="nav-link">Tin Tức</a>
                    </li>
                    <li class="nav-item <?php echo ($viewFile == "views/contact.php") ? 'bar-active active' : '' ?>">
                        <a href="<?=SITE_URL?>?act=contact" class="nav-link">Liên Hệ</a>
                    </li>
                </ul>
            </div>
            <div class="navbar-brand m-0 p-0 search-on-nav search-box-will-hide">
                <div class="icon-search" data-toggle="modal" data-target="#search-modal">
                    <i class="fa fa-search icon-search-i" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <?php if ($viewFile != "views/home.php") {?>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?=PATH_URL?>images/banner.jpg'); ">
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="index.html">Trang Chủ
                                <i class="fa fa-chevron-right"></i>
                            </a>
                        </span>
                        <span>
                            <?=$namePage?>
                            <i class="fa fa-chevron-right"></i>
                        </span>
                    </p>
                    <h1 class="mb-0 bread"> <?=$namePage?> </h1>
                </div>
            </div>
        </div>
    </section>
    <?php }
if (file_exists($viewFile)) {
    require_once "$viewFile";
}
?>

    <footer class="ftco-footer ftco-no-pt">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md">
                    <div class="ftco-footer-widget pt-md-5 mb-4">
                        <h2 class="ftco-heading-2">Nhà xuất bản Giáo dục Việt Nam</h2>
                        <p>Công ty Cổ phần Đầu tư và Phát triển Giáo dục Hà Nội</p>
                        <p>Giấy CNĐKDN số: 0102222393 ngày cấp 20/09/2010</p>
                        <p>Nơi cấp: Sở KHĐT TP.Hà Nội</p>
                    </div>
                </div>

                <div class="col-md">
                    <div class="ftco-footer-widget pt-md-5 mb-4">
                        <h2 class="ftco-heading-2">Liên Hệ</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon fa fa-map-marker"></span><span class="text">Tòa nhà VP HEID, ngõ
                                        12 Láng Hạ, Thành Công, Ba Đình, Hà Nội</span></li>
                                <li><span class="icon fa fa-phone"></span><span class="text">+84 243 512
                                        2222</span></li>
                                <li><span class="icon fa fa-paper-plane"></span><span
                                        class="text">lienhe@sachmem.vn</span></li>
                            </ul>
                            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mb-0">
                                <li class="ftco-animate mb-0"><a href="#" class="m-0"><span
                                            class="fa fa-facebook"></span></a></li>
                            </ul>
                            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mb-0">
                                <li class="ftco-animate mb-0"><a href="#" class="m-0"><span
                                            class="fa fa-youtube-play"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>Copyright 2020 Công ty Cổ phần Đầu tư và Phát triển Giáo dục Hà Nội. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg>
    </div>


    <script src="<?=PATH_URL?>js/js-main/jquery.min.js"></script>
    <script src="<?=PATH_URL?>js/js-main/jquery-migrate-3.0.1.min.js"></script>
    <script src="<?=PATH_URL?>js/js-main/popper.min.js"></script>
    <script src="<?=PATH_URL?>js/js-main/bootstrap.min.js"></script>
    <script src="<?=PATH_URL?>js/js-main/jquery.easing.1.3.js"></script>
    <script src="<?=PATH_URL?>js/js-main/jquery.waypoints.min.js"></script>
    <script src="<?=PATH_URL?>js/js-main/jquery.stellar.min.js"></script>
    <script src="<?=PATH_URL?>js/js-main/owl.carousel.min.js"></script>
    <script src="<?=PATH_URL?>js/js-main/jquery.magnific-popup.min.js"></script>
    <script src="<?=PATH_URL?>js/js-main/jquery.animateNumber.min.js"></script>
    <script src="<?=PATH_URL?>js/js-main/bootstrap-datepicker.js"></script>
    <script src="<?=PATH_URL?>js/js-main/scrollax.min.js"></script>
    <script src="<?=PATH_URL?>js/js-main/main.js"></script>
    <?php if (isset($js)) {?>
    <script src="<?=PATH_URL?>js/js-main/main/<?=$js?>"></script>
    <?php }?>

    <?php if (isset($ajax)) { ?>
    <script src="<?=PATH_URL?>ajax/<?=$ajax?>"></script>
    <?php } ?>
</body>

</html>