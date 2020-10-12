<form action="" method="post">
    <table border="1" style="width:99%" class="list-table datatable">
        <thead>
            <tr class="heading">
                
                <th>Tên</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                <th>Trạng thái</th>
                <th width="10%">Quản lý</th>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['list_contact'] as $key => $val) {?>

                <tr>
                    <td>
                        <?=$val['ten']?>
                    </td>
                    <td>
                        <?=$val['sdt']?>
                    </td>
                    <td>
                        <?=$val['email']?>
                    </td>

                    <td>
                        <?php 
                        	if ($val['kiem_tra'] == 0) {
                        		echo "Chưa xem";
                        	}else{
                        		echo "Đã xem";
                        	}
                        ?>
                    </td>

                    <td>
                        <a href="<?=base_url('admin/contact/details/'.$val['id'])?>">
                            [Xem chi tiết]
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
                    url: "<?=base_url('admin/contact/destroy')?>",
                    data: {'id':id},
                    success: function (response) {
                        location.reload();
                    }
                });
            }
        });
    }

</script>