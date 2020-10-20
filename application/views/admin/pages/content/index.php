<form action="" method="post">
    <a href="<?=base_url('admin/content/add')?>">[Thêm mới]</a>
    <br>
    <br>
    <div style="display:flex">
    <span>Filter : &nbsp;</span>
    <select onchange="mfilter(this.value)" name="filter" id="filter">
        <option value="0">Tìm kiếm theo loại</option>
        <?php 
            $list_content = $this->Content_M->all(['id_loai'=>0]);
            foreach ($list_content as $key => $val) 
            {
        ?>
            <option <?=$data['filter']==$val['id'] ? 'selected':''?> value="<?=$val['id']?>"><?=$val['ten_vn']?></option>
        <?php } ?>
    </select><br>
    </div><hr>
    <table border="1" style="width:99%" class="list-table datatable">
        <thead>
            <tr class="heading">
                <th style="width:50px">STT</th>
                <th>Tiêu đề</th>
                <th>Loại</th>
                <th width="10%">Hình ảnh</th>
                <th width="8%">Hiển thị</th>
                <th width="10%">Quản lý</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['list_content'] as $key => $val) {
                $sub = $this->Content_M->all(['id_loai'=>$val['id']])
            ?>

                <tr>
                    <td align="center">
                        <?=$key?>
                    </td>                    
                    <td>
                        <b><?=$val['ten_vn']?></b>
                    </td>
                    <td align="center" >
                        <?=$val['loai']==0 ? '--':''?>
                    </td>
                    <td align="center">
                        <?php if (!empty($val['hinh_anh'])){ ?>
                            <img src="<?=resizeImg($val['hinh_anh'],100,90,0)?>" alt="">
                        <?php } ?>
                    </td>
                    <td align="center">
                        <input class="ip-ckb" onchange="setCkb(this,'hien_thi',<?=$val['id']?>)" type="checkbox" <?=$val['hien_thi']==1 ? 'checked':''?> >
                    </td>
                    <td align="center">
                        <a href="<?=base_url('admin/content/edit/'.$val['id'])?>">
                            [Xem / Sửa]
                        </a>
                        <br>
                        <br>
                        <a style="color:red;cursor: pointer;" onclick="onDelete(<?=$val['id']?>)" >[Xóa]</a>
                    </td>
                </tr>
            <?php
                    if (count($sub)>0) 
                    {
                        foreach ($sub as $val2)
                        {
                        ?>
                            <tr>
                                <td align="center">
                                    -
                                </td>                    
                                <td>
                                    |___&nbsp;<?=$val2['ten_vn']?>
                                </td>
                                <td align="center">
                                    [<?=$this->Content_M->one(['id'=>$val2['id_loai']])['ten_vn']?>]
                                </td>
                                <td align="center">
                                    <?php if (!empty($val2['hinh_anh'])){ ?>
                                        <img src="<?=resizeImg($val2['hinh_anh'],50,35)?>" alt="">
                                    <?php } ?>
                                </td>
                                <td align="center">
                                    <input class="ip-ckb" onchange="setCkb(this,'hien_thi',<?=$val2['id']?>)" type="checkbox" <?=$val2['hien_thi']==1 ? 'checked':''?> >
                                </td>
                                <td align="center">
                                    <a href="<?=base_url('admin/content/edit/'.$val2['id'])?>">
                                        [Xem / Sửa]
                                    </a>
                                    <a style="color:red;cursor: pointer;" onclick="onDelete(<?=$val2['id']?>)" >[Xóa]</a>
                                </td>
                            </tr>
                        <?php
                        }
                    }
                } 
            ?>
        </tbody>
    </table>
</form>

<script type="text/javascript">
    function mfilter(value){
        location.href='<?=base_url('admin/content?filter=')?>'+value;
    }
    function onDelete(id){
        var id = id;
        Swal.fire({
            title: 'Bạn có muốn xóa mục này?',
            text: "Dữ liệu đã xóa sẽ không thể phục hồi",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Hủy',
            confirmButtonText: 'Xóa'
            }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: "post",
                    url: "<?=base_url('admin/content/destroy')?>",
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
            url: "<?=base_url('admin/content/update')?>",
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
            url: "<?=base_url('admin/post/update')?>",
            data: {'id':id,[colset]:ckb},
            success: function (response) {
                
            }
        });
    }
</script>