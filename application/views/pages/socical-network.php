<style>
    body.modal-open{
        padding-right:0px !important;
        overflow-y:auto !important;
    }
    .modal-dialog{
        margin: 10% auto !important;
    }
</style>
<!-- Modal -->
<div id="callback" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body text-center">
         <h4>Hiện đang ngoài giờ làm việc, xin quý khách vui lòng gọi vào số hotline: 19001238</h4>
         <p>Xin cảm ơn !</p>
      </div>
    </div>
  </div>
</div>
<div id="socical_network">
    <div title="Facebook" class="item">
        <div class="icon">
            <span class="fa fa-facebook"></span>
        </div>
    </div>
    <div title="Zalo" class="item fa-zalo">
        <div class="icon fa-zalo">
            <span class="fa fa-zalo"></span>
        </div>
    </div>
    <div title="Đăng ký thử nghiệm" class="item">
        <div onclick="$('#form-dangky').addClass('opened')" class="icon">
            <span class="fa fa-address-book"></span>
        </div>
    </div>
    <div title="Callback" class="item">
        <div data-toggle="modal" data-target="#callback" class="icon">
            <span class="fa fa-phone"></span>
        </div>
    </div>
</div>