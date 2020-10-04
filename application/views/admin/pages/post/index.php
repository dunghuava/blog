<form action="" method="post">
    <table border="1" style="width:99%" class="list-table datatable">
        <tr class="heading">
            <th>Blog</th>
            <th>Hình ảnh</th>
            <th>Chủ đề</th>
            <!-- <th width="8%">Ngày đăng</th> -->
            <th width="8%">Nổi bậc</th>
            <th width="8%">Hiển thị</th>
            <th width="10%">Quản lý</th>
        </tr>
        <tbody>
            <?php foreach ($data['list_post'] as $key => $val) {?>

                <tr>
                    <td>
                        <?=$val['ten_vn']?>
                    </td>
                    <td class="text-center">
                        <?php if (!empty($val['hinh_anh'])){ ?>
                            <img onclick="onDeleteImg(<?=$val['id']?>,'<?=$val['hinh_anh']?>')" style="cursor:pointer;max-height: 100px;max-width: 150px;" src="<?=base_url('upload/images/'.$val['hinh_anh'])?>" alt="">
                        <?php } ?>
                    </td>
                    <td>
                        <?php 
                        $category = $this->Category_M->find(['id'=>$val['id_loai']]);
                        echo $category['ten_vn'];
                        ?>
                    </td>
                    <td class="text-center">
                        <input class="ip-ckb" onchange="setCkb(this,'noi_bac',<?=$val['id']?>)" type="checkbox" <?=$val['noi_bac']==1 ? 'checked':''?> >
                    </td>
                    <td class="text-center">
                        <input class="ip-ckb" onchange="setCkb(this,'hien_thi',<?=$val['id']?>)" type="checkbox" <?=$val['hien_thi']==1 ? 'checked':''?> >
                    </td>
                    <td>
                        <a href="<?=base_url('admin/post/edit/'.$val['id'])?>">
                            [Xem / Sửa]
                        </a>


                        <a style="color:red" onclick="onDelete(<?=$val['id']?>)" >[Xóa]</a>

                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</form>

<script type="text/javascript">
    function onDelete(id){
        var id = id;
        // console.log(post_id);
        Swal.fire({
            title: 'Bạn có muốn xóa mục này?',
            text: "Dữ liệu đã xóa sẽ không thể phục hồi",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Hủy',
            confirmButtonText: 'Xóa'
            // cancelButtonText: 'Hủy',
            }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: "post",
                    url: "<?=base_url('admin/post/destroy')?>",
                    data: {'id':id},
                    success: function (response) {
                        location.reload();
                    }
                });
            }
        });
    }

    function setCkb(ckb,colset,id){
        ckb = ckb.checked;
        ckb = ckb==true ? 1:0;
        colset = colset.toString();
        $.ajax({
            type: "post",
            url: "<?=base_url('admin/post/update')?>",
            data: {'id':id,[colset]:ckb},
            success: function (response) {
                
            }
        });
    }

    // function setStt(ckb,colset,id){
    //     ckb = ckb.value;
    //     colset = colset.toString();
    //     $.ajax({
    //         type: "post",
    //         url: "<?=base_url('admin/post/update')?>",
    //         data: {'id':id,[colset]:ckb},
    //         success: function (response) {
                
    //         }
    //     });
    // }
</script>