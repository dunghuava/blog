<form action="" method="post">
    <a href="<?=base_url('admin/question/add/')?>">[Thêm câu hỏi]</a>
    <br>
    <br>
    <table border="1" style="width:99%" class="list-table datatable">
        <thead>
            <tr class="heading">
                <th>Câu hỏi</th>
                <th>Trả lời</th>
                <th width="8%">Hiển thị</th>
                <th width="10%">Quản lý</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['list_question'] as $key => $val) {?>

                <tr>
                    <td>
                        <?=$val['cau_hoi_vn']?>
                    </td>
                    <td>
                       <?=$val['dap_an_vn']?>
                    </td>
                    <td class="text-center">
                        <input class="ip-ckb" onchange="setCkb(this,'hien_thi',<?=$val['id']?>)" type="checkbox" <?=$val['hien_thi']==1 ? 'checked':''?> >
                    </td>
                    <td>
                        <a href="<?=base_url('admin/question/edit/'.$val['id'])?>">
                            [Xem / Sửa]
                        </a>

                        <br>
                        <br>

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
                    url: "<?=base_url('admin/question/destroy')?>",
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
            url: "<?=base_url('admin/question/update')?>",
            data: {'id':id,[colset]:ckb},
            success: function (response) {
                
            }
        });
    }
</script>