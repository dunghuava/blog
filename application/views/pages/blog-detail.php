<section class="sec-page-title main-color">
    <div class="container">
        <div class="col-md-12">
            <h2 style="color:#fff"><?=$data['info_category']['ten_vn']?></h2>
        </div>
    </div>
</section>
<section class="sec-content p0mb">
    <div class="container">
        <div class="col-md-9 blog-detail" style="border-right:1px solid #ccc">
            <h1><strong><?=$data['info_blog']['ten_vn']?></strong></h1>
            <hr>
            <ul style="display:flex">
                <li style="margin-right:18px"><span class="fa fa-calendar">&nbsp;</span><?=date('d/m/Y',strtotime($data['info_blog']['created_at']))?></li>
                <li style="margin-right:18px"><span class="fa fa-clock">&nbsp;</span><?=date('H:i',strtotime($data['info_blog']['created_at']))?></li>

            </ul>
            <?php include ('shares.php') ?>
            <!-- blog -->
            <p><?=$data['info_blog']['mo_ta_vn']?></p>
            <p><?=$data['info_blog']['noi_dung_vn']?></p>
            <!-- blog -->
        </div>
        <?php if (!check_isMobile()){ ?>
            <div class="col-md-3">
                <?php include ('right.php') ?>
            </div>
        <?php } ?>
    </div>
</section>