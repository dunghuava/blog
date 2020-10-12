<tr>
    <td>
        <input type="text" onkeyup="setStt(this,'stt',<?=$val['id']?>)" value="<?=$val['stt']?>" class="ip-text" style="width:55px">
    </td>
    <td><a style="color:#000" href="<?=base_url('admin/category/edit/'.$val['id'])?>"><?=$str.' '.$val['ten_vn']?></a></td>
    <td align="center" class="text-center">
        <?php if (!empty($val['hinh_anh'])){ ?>
            <img onclick="onDeleteImg(<?=$val['id']?>,'<?=$val['hinh_anh']?>')" style="cursor:pointer;" src="<?=resizeImg($val['hinh_anh'],50,50,0)?>" alt="">
        <?php } ?>
    </td>
    <td>[
        <?php 
            $module = $this->Module_M->find(['module_id'=>$val['module_id']]);
            echo $module['module_title'];
        ?>
        ]
    </td>
    <td align="center" class="text-center">
        <input class="ip-ckb" onchange="setCkb(this,'menu',<?=$val['id']?>)" type="checkbox" <?=$val['menu']==1 ? 'checked':''?> >
    </td>
    <td align="center" class="text-center">
        <input class="ip-ckb" onchange="setCkb(this,'hien_thi',<?=$val['id']?>)" type="checkbox" <?=$val['hien_thi']==1 ? 'checked':''?> >
    </td>
    <td>
        <a href="<?=base_url('admin/category/edit/'.$val['id'])?>">
            [Xem / Sửa]
        </a>

       <!--  <a href="">[Xem / Sửa]</a>
                        <a style="color:red" onclick="return confirm('Xóa mục này khỏi danh sách ?')" href="">[Xóa]</a> -->
        <!-- <button onclick="onDelete(<?=$val['cate_id']?>)" class="btn btn-default">
            <span class="fa fa-trash"></span>
        </button> -->
    </td>
</tr>