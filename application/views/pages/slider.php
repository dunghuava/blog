<section class="sec-slider">
    <div class="main-slider">
        <?php 
            $slides = $this->Content_M->all(['id_loai'=>1]);
            foreach ($slides as $s){
        ?>
            <div class="slider-item">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="<?=base_url('upload/images/'.$s['hinh_anh'])?>" alt="">
                        </div>
                        <div class="col-md-6">
                            <h2>
                               <?=$s['mo_ta_vn']?><br>
                            </h2>
                            <h4><?=$s['noi_dung_vn']?></h4>
                            <br>
                            <br>
                            <button type="button" onclick="$('#form-dangky').addClass('opened')" class="btn btn-default btn-sm">Tư vấn triển khai</button>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</section>
<div id="blockslide"></div>