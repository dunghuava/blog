
<section class="sec-cate-right">
    <h4 class="cate-title">Phân loại theo chủ đề</h4>
    <?php for ($i=1;$i<=10;$i++){ ?>
        <li><a href="">Chủ đề (<?=rand(10,50)?>)</a></li>
    <?php } ?>
</section>
<section class="sec-cate-right">
    <h4 class="cate-title">Bài viết gần nhất</h4>
    <?php for ($i=1;$i<=6;$i++){ ?>
        <li class="small-blog">
            <a href="">
                <div style="display:flex">
                    <img src="<?=base_url('upload/blog.png')?>" alt="">
                    <p><b>Tại sao tổng đài Callcenetr cần tích hợp CRM</b></p>
                </div>
                <p>November, 09, 2020</p>
            </a>
        </li>
    <?php } ?>
</section>
<section class="sec-cate-right">
    <h4 class="cate-title">Xem nhanh theo chủ đề</h4>
    <?php for ($i=1;$i<=10;$i++){ ?>
        <li class="btn-category"><a href="">Chủ đề (<?=rand(10,50)?>)</a></li>
    <?php } ?>
</section>