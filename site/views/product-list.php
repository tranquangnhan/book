<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="col-lg-12">
                    <div class="container" style="width: fit-content; margin-bottom: 5%;">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-primary active font-weight-600">
                                <input type="radio" class="filter type" value="1" name="options" id="option1" autocomplete="off" checked>Học Sinh
                            </label>
                            <label class="btn btn-dark font-weight-600">
                                <input type="radio" class="filter type" value="2" name="options" id="option2" autocomplete="off"> Giáo Viên

                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <div class="block-27">
                        <div class="row">
                            <div class="col-12">
                                <ul>
                                    <li><a href="#" class="big" class="filter class">Mầm Non</a></li>
                                    <li class="active"><a class="filter class">1</a></li>
                                    <li><a href="#" class="filter class">2</a></li>
                                    <li><a href="#" class="filter class">3</a></li>
                                    <li><a href="#" class="filter class">4</a></li>
                                    <li><a href="#" class="filter class">5</a></li>
                                    <li><a href="#" class="filter class">6</a></li>
                                    <li><a href="#" class="filter class">7</a></li>
                                    <li><a href="#" class="filter class">8</a></li>
                                    <li><a href="#" class="filter class">9</a></li>
                                    <li><a href="#" class="filter class">10</a></li>
                                    <li><a href="#" class="filter class">11</a></li>
                                    <li><a href="#" class="filter class">12</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="container" style="width: fit-content; margin-bottom: 5%;">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <?php 
                                $num = 1;
                                foreach ($categories as $cate) { ?>
                                    <label class="btn btn-<?php echo ($num == 1) ? 'secondary active' : 'dark' ?> font-weight-600 ">
                                        <input type="radio" class="filter category" value="<?= $cate['id'] ?>" name="" id="" class="filter" autocomplete="off"><?=$cate['name']?>
                                    </label>                                    
                                <?php $num++; }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($listProduct as $product) { ?>
                    <div class="col-md-4 d-flex align-items-stretch ftco-animate">
                        <div class="project-wrap">
                            <a href="<?=SITE_URL?>?act=productdetail&id=<?=$product['id']?>" class="img" style="background-image: url(<?=PATH_URL?>images/S6-AB.png);">
                                <span class="price">Sách</span>
                            </a>
                            <div class="text p-4">
                                <h3><a href="<?=SITE_URL?>?act=productdetail&id=<?=$product['id']?>"><?= $product['name'] ?></a></h3>
                                <p class="advisor">Tác Giả: <span><?= $product['author'] ?></span></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <!-- <div class="col-md-4 d-flex align-items-stretch ftco-animate">
                        <div class="project-wrap">
                            <a href="#" class="img" style="background-image: url(<?=PATH_URL?>images/S2-AB.png);">
                                <span class="price">Sách</span>
                            </a>
                            <div class="text p-4">
                                <h3><a href="course-detail.html">Smiles 1 Special Edition</a></h3>
                                <p class="advisor">Tác Giả: <span>Jenny Dooley</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch ftco-animate">
                        <div class="project-wrap">
                            <a href="#" class="img" style="background-image: url(<?=PATH_URL?>images/S6-AB.png);">
                                <span class="price">Sách</span>
                            </a>
                            <div class="text p-4">
                                <h3><a href="course-detail.html">Smiles 1 Special Edition</a></h3>
                                <p class="advisor">Tác Giả: <span>Jenny Dooley</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 d-flex align-items-stretch ftco-animate">
                        <div class="project-wrap">
                            <a href="#" class="img" style="background-image: url(<?=PATH_URL?>images/S6-AB.png);">
                                <span class="price">Sách</span>
                            </a>
                            <div class="text p-4">
                                <h3><a href="course-detail.html">Smiles 1 Special Edition</a></h3>
                                <p class="advisor">Tác Giả: <span>Jenny Dooley</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch ftco-animate">
                        <div class="project-wrap">
                            <a href="#" class="img" style="background-image: url(<?=PATH_URL?>images/S2-AB.png);">
                                <span class="price">Sách</span>
                            </a>
                            <div class="text p-4">
                                <h3><a href="course-detail.html">Smiles 1 Special Edition</a></h3>
                                <p class="advisor">Tác Giả: <span>Jenny Dooley</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch ftco-animate">
                        <div class="project-wrap">
                            <a href="#" class="img" style="background-image: url(<?=PATH_URL?>images/S6-AB.png);">
                                <span class="price">Sách</span>
                            </a>
                            <div class="text p-4">
                                <h3><a href="course-detail.html">Smiles 1 Special Edition</a></h3>
                                <p class="advisor">Tác Giả: <span>Jenny Dooley</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 d-flex align-items-stretch ftco-animate">
                        <div class="project-wrap">
                            <a href="#" class="img" style="background-image: url(<?=PATH_URL?>images/S6-AB.png);">
                                <span class="price">Sách</span>
                            </a>
                            <div class="text p-4">
                                <h3><a href="course-detail.html">Smiles 1 Special Edition</a></h3>
                                <p class="advisor">Tác Giả: <span>Jenny Dooley</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch ftco-animate">
                        <div class="project-wrap">
                            <a href="#" class="img" style="background-image: url(<?=PATH_URL?>images/S2-AB.png);">
                                <span class="price">Sách</span>
                            </a>
                            <div class="text p-4">
                                <h3><a href="course-detail.html">Smiles 1 Special Edition</a></h3>
                                <p class="advisor">Tác Giả: <span>Jenny Dooley</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch ftco-animate">
                        <div class="project-wrap">
                            <a href="#" class="img" style="background-image: url(<?=PATH_URL?>images/S6-AB.png);">
                                <span class="price">Sách</span>
                            </a>
                            <div class="text p-4">
                                <h3><a href="course-detail.html">Smiles 1 Special Edition</a></h3>
                                <p class="advisor">Tác Giả: <span>Jenny Dooley</span></p>
                            </div>
                        </div>
                    </div> -->
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
