<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
<?php
include("common/header.php")
?>
<style>
  .navbar-fixed-top{
    background-color:rgba(5, 41, 61, 0.984) !important;
  }
</style>
</head>
<body style="touch-action: none;display: contents;">
<?php
include("common/navbar.php")
?>




  <!-- map -->
  <section id="section-map" class="clearfix" style="margin-top: 10%;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
  </section>

  <!-- contact -->
  <section id="section-contact" class="section appear clearfix">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">LIÊN HỆ</h2>
            <p>Hãy liên hệ với chúng tôi để đc hỗ trợ tư vấn và giải đáp thắc mắc</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="cform" id="contact-form">
            <div id="sendmessage">Tin nhắn của bạn sẽ được gửi đi. Xin cảm ơn</div>
            <div id="errormessage"></div>
            <form action="" method="post" class="contactForm">

              <div class="field your-name form-group">
                <input type="text" name="name" placeholder="Your Name" class="cform-text" size="40" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validation"></div>
              </div>
              <div class="field your-email form-group">
                <input type="text" name="email" placeholder="Your Email" class="cform-text" size="40" data-rule="email" data-msg="Please enter a valid email">
                <div class="validation"></div>
              </div>
              <div class="field subject form-group">
                <input type="text" name="subject" placeholder="Subject" class="cform-text" size="40" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                <div class="validation"></div>
              </div>

              <div class="field message form-group">
                <textarea name="message" class="cform-textarea" cols="40" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validation"></div>
              </div>

              <div class="send-btn">
                <input type="submit" value="SEND MESSAGE" class="btn btn-theme">
              </div>

            </form>
          </div>
        </div>
        <!-- ./span12 -->
      </div>

    </div>
  </section>

<!-- Modal login -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-color: slategrey;">
      <div class="modal-header" style="text-align: center;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="modal-title" style="font-size: -webkit-xxx-large;font-family: sans-serif;">Đăng nhập</h3>
      </div>
      <form action="<?php echo base_url();?>login_controller/index" method="POST">
      <div class="modal-body" style="text-align: center;margin-bottom:20px">
        <img src="/datsannhanh/image/ninja-simple-login.png" alt="login" style="width: 40%;">
        <div class="form-inline">
          <i class="fa fa-user icon" ></i>
          <input type="text" name="username" class="form-control">
        </div>
        <div class="form-inline" style="margin-top: 10px;">
          <i class="fa fa-lock icon" ></i>
          <input type="password" name="password" class="form-control" style="margin-left: 4px;">
        </div>
      
      </div>
      <div class="modal-footer" style="text-align: center;"">
        <button type="button" class="btn btn-danger button" data-dismiss="modal">Hủy </button>
        <button type="submit" class="btn btn-primary button" style="border-radius: 7%;">Đăng nhập</button>
      </div>
      </form>
    </div>
  </div>
</div>
 <!-- Modal login -->

  <?php
  include("common/footer.php")
?>

</body>

</html>
