<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="col-lg-12">
                    <div class="container" style="width: fit-content; margin-bottom: 5%;">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-primary font-weight-600">
                                <input type="radio" class="filter type" data-type="0" value="1" name="options">Học Sinh
                            </label>
                            <label class="btn btn-dark font-weight-600">
                                <input type="radio" class="filter type" data-type="0" value="2" name="options"> Giáo Viên
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <div class="block-27">
                        <div class="row">
                            <div class="col-12">
                                <ul>
                                    <li><a href="#" class="big filter class" data-type="1">Mầm Non</a></li>
                                    <li class="active"><a href="#" class="filter class" data-type="1">1</a></li>
                                    <li><a href="#" class="filter class" data-type="1">2</a></li>
                                    <li><a href="#" class="filter class" data-type="1">3</a></li>
                                    <li><a href="#" class="filter class" data-type="1">4</a></li>
                                    <li><a href="#" class="filter class" data-type="1">5</a></li>
                                    <li><a href="#" class="filter class" data-type="1">6</a></li>
                                    <li><a href="#" class="filter class" data-type="1">7</a></li>
                                    <li><a href="#" class="filter class" data-type="1">8</a></li>
                                    <li><a href="#" class="filter class" data-type="1">9</a></li>
                                    <li><a href="#" class="filter class" data-type="1">10</a></li>
                                    <li><a href="#" class="filter class" data-type="1">11</a></li>
                                    <li><a href="#" class="filter class" data-type="1">12</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 ">
                    <div class="container" style="width: fit-content; margin-bottom: 5%;">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <?php 
                                $num = 1;
                                foreach ($categories as $cate) { ?>
                                    <label class="btn btn-<?php echo ($num == 1) ? 'primary' : 'dark' ?> font-weight-600 ">
                                        <input type="radio" class="filter category" data-type="2" value="<?= $cate['id'] ?>" name="" id="" class="filter" ><?=$cate['name']?>
                                    </label>                                    
                                <?php $num++; }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="row product-box">
                    <!-- <div class="ftco-loader show">
                        <svg class="circular" width="48px" height="48px">
                            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
                            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
                        </svg>
                    </div> -->
                    <?php foreach ($listProduct as $product) { ?>
                    <div class="col-md-4 product-item d-flex align-items-stretch ftco-animate">
                        <div class="project-wrap">
                            <a href="<?=SITE_URL?>?act=productdetail&id=<?=$product['id']?>" class="img" style="background-image: url(<?=PATH_URL?>images/<?= $product['img']?>);">
                                <span class="price">Sách</span>
                            </a>
                            <div class="text p-4">
                                <h3><a href="<?=SITE_URL?>?act=productdetail&id=<?=$product['id']?>"><?= $product['name'] ?></a></h3>
                                <p class="advisor">Tác Giả: <span><?= $product['author'] ?></span></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="box-on-top hide"></div>

                </div>
                <div class="row mt-5">
                    <div class="col">
                        <div class="block-27">
                            <ul>
                                <li><a href="#">&lt;</a></li>
                                <li class="active"><span>1</span></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&gt;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <?php require 'right.php'; ?>
            
        </div>
</section>
