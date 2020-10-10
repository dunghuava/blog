<form action="" method="post">
    <table border="1" style="width:99%" class="list-table datatable">
        <tr class="heading">
            <th width="2%">STT</th>
            <th>Tên danh mục</th>
            <th>Hình ảnh</th>
            <th>Module</th>
            <th width="8%">Menu</th>
            <th width="8%">Hiển thị</th>
            <th width="10%">Quản lý</th>
        </tr>
        <tbody>
            <?php 
                foreach ($data['arr_category'] as $val){
                    $str='<span class="fa fa-caret-right"></span>';
                    include ('item_table_row.php');
                    $sub = $this->Category_M->all(['id_loai'=>$val['id']],'asc');
                    if (count($sub)>0){
                        foreach ($sub as $val){
                            $str='|____';
                            include ('item_table_row.php');
                            $sub1 = $this->Category_M->all(['id_loai'=>$val['id']]);
                            if (count($sub1)>0){
                                foreach ($sub1 as $val){
                                    $str='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|____';
                                    include ('item_table_row.php');
                                    $sub2 = $this->Category_M->all(['id_loai'=>$val['id']]);
                                    if (count($sub2)>0){
                                        foreach ($sub2 as $val){
                                            $str='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|____';
                                            include ('item_table_row.php');
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            ?>

        </tbody>
    </table>
</form>

<script type="text/javascript">
    // function onDeleteImg(cate_id,cate_img){
    //     Swal.fire({
    //         title: 'Bạn có muốn xóa mục này?',
    //         text: "Dữ liệu đã xóa sẽ không thể phục hồi",
    //         icon: 'warning',
    //         showCancelButton: true,
    //         confirmButtonColor: '#3085d6',
    //         cancelButtonColor: '#d33',
    //         confirmButtonText: 'Xóa',
    //         cancelButtonText:'Hủy',
    //         }).then((result) => {
    //         if (result.value) {
    //             $.ajax({
    //                 type: "post",
    //                 url: "<?=base_url('admin/category/delimg')?>",
    //                 data: {'cate_id':cate_id,'cate_img':cate_img},
    //                 success: function (response) {
    //                     location.reload();
    //                 }
    //             });
    //         }
    //     });
    // }
    function setCkb(ckb,colset,id){
        ckb = ckb.checked;
        ckb = ckb==true ? 1:0;
        colset = colset.toString();
        $.ajax({
            type: "post",
            url: "<?=base_url('admin/category/update')?>",
            data: {'id':id,[colset]:ckb},
            success: function (response) {
                
            }
        });
    }

    function setStt(ckb,colset,id){
        ckb = ckb.value;
        colset = colset.toString();
        $.ajax({
            type: "post",
            url: "<?=base_url('admin/category/update')?>",
            data: {'id':id,[colset]:ckb},
            success: function (response) {
                
            }
        });
    }
</script>