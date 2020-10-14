<style type="text/css">
    @media only screen and (max-width: 600px){
        .title-blog, .desc-blog {
            height: 70px!important;
        }
    }

</style>
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
                <?php foreach ($data['list_blog'] as $key => $blog) {?>
                    <div class="col-md-4 col-xs-6">
                        <div class="item-blog">
                            <a href="<?=base_url('p/'.$blog['alias_vn'].'-'.$blog['id'])?>.html">
                                <div class="relative">
                                    <img src="<?=resizeImg($blog['hinh_anh'],254,205,0)?>" alt="">
                                    <div class="overlay">
                                        <div class="fa fa-share-alt"></div>
                                    </div>
                                </div>
                                <p class="title-blog" style="height: 40px"><?=mb_substr($blog['ten_vn'], 0, 55,"UTF-8").' ...';?></p>
                                <p class="date-blog mg0"><span class="fa fa-calendar">&nbsp;</span><?=date('d/m/Y',strtotime($blog['created_at']))?></p>
                                <p class="desc-blog" style="height: 40px"><?=mb_substr($blog['mo_ta_vn'], 0, 70,"UTF-8").' ...';?></p>
                            </a>
                        </div>
                    </div>
                <?php } ?>

                <?php if (empty($data['list_blog'])) {?>
                    <div class="text-center" style="color:red"><h4>Dữ liệu đang được cập nhật...</h4></div>
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