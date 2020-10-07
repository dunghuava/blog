<section class="sec-page-title main-color">
    <div class="container">
        <div class="col-md-12">
            <h2 style="color:#fff">Blog</h2>
        </div>
    </div>
</section>
<section class="sec-content p0mb">
    <div class="container">
        <div class="col-md-9" style="border-right:1px solid #ccc">
            <div class="row">
                <?php for ($i=0;$i<10;$i++){ ?>
                    <div class="col-md-4 col-xs-6">
                        <div class="item-blog">
                            <a href="">
                                <div class="relative">
                                    <img src="<?=base_url('upload/blog.png')?>" alt="">
                                    <div class="overlay">
                                        <div class="fa fa-share-alt"></div>
                                    </div>
                                </div>
                                <p class="title-blog">Các Chỉ Số Báo Cáo Call Center Mà Bạn Cần Biết</p>
                                <p class="date-blog mg0"><?=date('M-Y')?></p>
                                <p class="desc-blog">Bạn đang có dữ liệu khách hàng lớn nhưng chưa…</p>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <?php if (!check_isMobile()){ ?>
            <div class="col-md-3">
                <?php include ('right.php') ?>
            </div>
        <?php } ?>
    </div>
</section>