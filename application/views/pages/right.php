
<!--  -->
<section class="sec-cate-right">
    <h4 class="cate-title">Phân loại theo chủ đề</h4>
    <?php foreach ($data['list_category'] as $key => $category) {
        $count = $this->Post_M->all(['id_loai' => $category['id']]);
    ?>
        <li><a href="<?=base_url('blog/'.$category['alias_vn'])?>"><?=$category['ten_vn'].' ('.count($count).')';?></a></li>
    <?php } ?>
</section>
<section class="sec-cate-right">
    <h4 class="cate-title">Bài viết gần nhất</h4>
    <?php foreach ($data['list_blog_nearest'] as $key => $blog) {
        if ($key<3) {
    ?>
        <li class="small-blog">
            <a href="<?=base_url('blog-detail/'.$blog['alias_vn'].'-'.$blog['id'])?>">
                <div style="display:flex">
                    <img style="border: none" src="<?=resizeImg($blog['hinh_anh'],50,50,0)?>" alt="">
                    <p><b><?=mb_substr($blog['ten_vn'], 0, 45,"UTF-8").' ...';?></b></p>
                </div>
                <p><span class="fa fa-calendar">&nbsp;</span><?=date('d/m/Y',strtotime($blog['created_at']))?></p>
            </a>
        </li>
    <?php } } ?>
</section>
<section class="sec-cate-right">
    <h4 class="cate-title">Xem nhanh theo chủ đề</h4>
    <?php foreach ($data['list_category'] as $key => $category) {?>
        <li class="btn-category"><a href="<?=base_url('blog/'.$category['alias_vn'])?>"><?=$category['ten_vn']?></a></li>
    <?php } ?>
</section>