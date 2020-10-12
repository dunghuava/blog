<form action="" method="post">
    <a href="<?=base_url('admin/customer/add/')?>">[Thêm đối tác - khách hàng]</a>
    <br>
    <br>
    <table border="1" style="width:99%" class="list-table datatable">
        <thead>
            <tr class="heading">
                
                <th>Tên</th>
                <th>Hình ảnh</th>
                <th>Loại</th>
                <th width="8%">Hiển thị</th>
                <th width="10%">Quản lý</th>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['list_customer'] as $key => $val) {?>

                <tr>
                    <td>
                        <?=$val['ten_vn']?>
                    </td>

                    <td class="text-center">
                        <?php if (!empty($val['hinh_anh'])){ ?>
                            <img style="cursor:pointer;" src="<?=resizeImg($val['hinh_anh'],100,90,0)?>" alt="">
                        <?php } ?>
                    </td>

                    <td>
                        <?php if ($val['loai'] == 1) {
                            echo "Khách hàng";
                        }else{
                            echo "Đối tác";
                        } ?>
                    </td>
                    
                    <td class="text-center">
                        <input class="ip-ckb" onchange="setCkb(this,'hien_thi',<?=$val['id']?>)" type="checkbox" <?=$val['hien_thi']==1 ? 'checked':''?> >
                    </td>
                    <td>
                        <a href="<?=base_url('admin/customer/edit/'.$val['id'])?>">
                            [Xem / Sửa]
                        </a>


                        <a style="color:red;cursor: pointer;" onclick="onDelete(<?=$val['id']?>)" >[Xóa]</a>

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
                    url: "<?=base_url('admin/customer/destroy')?>",
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
            url: "<?=base_url('admin/customer/update')?>",
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