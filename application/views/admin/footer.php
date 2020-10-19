

    <script src="<?=base_url('assets/js/admin.js?v='.time())?>"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url('assets/js/datetimepicker.js')?>"></script>
    <script src="<?=base_url('assets/js/sweetalert2.js')?>"></script>

    <script>

        
    	
        $('.datatable').DataTable({
            "order": []
        });
        CKEDITOR.replace('ckeditor', {
            height: 300,
            baseFloatZIndex: 10005
        });


        $('.datepicker').datepicker({ format: 'dd-mm-yyyy', });


        function make_alias(str){
            str= str.toLowerCase();
            str= str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a");
            str= str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e");
            str= str.replace(/ì|í|ị|ỉ|ĩ/g,"i");
            str= str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o");
            str= str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u");
            str= str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y");
            str= str.replace(/đ/g,"d");
            str= str.replace(/!|@|\$|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\'| |\"|\&|\#|\[|\]|\;|\||\{|\}|~/g,"-");
            str= str.replace(/^\-+|\-+$/g,"-");
            str= str.replace(/\–/g,"-");
            str= str.replace(/\\/g,"-");
            str= str.replace(/-+-/g,"-");
            return str;
        }
    </script>
</body>
</html>