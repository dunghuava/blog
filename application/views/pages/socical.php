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

    .fb_dialog_content{
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
    <div onclick="facebook()" title="Facebook" class="item">
        <div class="icon">
            <span class="fa fa-facebook"></span>
        </div>

        <div id="fb-root"></div>
       
         <!-- Your Chat Plugin code -->
        <div class="fb-customerchat"
        attribution=setup_tool
        page_id="107857070823040"
        theme_color="#0C714B"
        logged_in_greeting="Chat với chúng tôi hoặc gọi 19001238."
        logged_out_greeting="Chat với chúng tôi hoặc gọi 19001238.">
        </div>
    </div>
    <div onclick="zalo()" title="Zalo" class="item fa-zalo">
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
<script type="text/javascript">

    window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v8.0'
      });
    };
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    FB.CustomerChat.hideDialog();
    function facebook() {
        FB.CustomerChat.showDialog();
    }
    function zalo(){
      $('.zalo-chat-widget').css("display","none");
        $('.zalo-chat-widget').toggle();
        $('#drag-holder').trigger('click')
    }

     

    // $('.zs-func-minimize').click(function(){  
    //     $('.zalo-chat-widget').css("display","none");
    // });
</script>

