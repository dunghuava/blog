<style>
    body.modal-open{
        padding-right:0px !important;
        overflow-y:auto !important;
    }
    .modal-dialog{
        margin: 10% auto !important;
    }
    .zalo-chat-widget{
        display:none;
    }
</style>
<!-- Modal -->
<div id="callback" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body text-center">
         <h4><b>Hiện đang ngoài giờ làm việc, xin quý khách vui lòng gọi vào số hotline: 0383868205</b></h4>
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
    <div onclick="$('.zalo-chat-widget').toggle()" title="Zalo" class="item fa-zalo">
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
<div class="zalo-chat-widget" data-oaid="579745863508352884" data-welcome-message="Rất vui khi được hỗ trợ bạn!" data-autopopup="0" data-width="350" data-height="420"></div>
<script src="https://sp.zalo.me/plugins/sdk.js"></script>