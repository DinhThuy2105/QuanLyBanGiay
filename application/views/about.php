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
<body style="touch-action: none;">
<?php
include("common/navbar.php")
?>

  <!-- about -->
  <section id="section-content-about" class="section appear clearfix"></section>
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">THÔNG TIN</h2>
            
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- /about -->

  <section id="about">

    <div class="container">
      <div class="row">

        <div class="col-lg-5 col-md-6">
          <div class="about-img">
            <img src="/datsannhanh/image/about-img.jpg" alt="">
          </div>
        </div>

        <div class="col-lg-7 col-md-6">
          <div class="about-content">
            <h3>Sân bóng trường Đại học Vinh</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p>Aut dolor id. Sint aliquam consequatur ex ex labore. Et quis qui dolor nulla dolores neque. Aspernatur consectetur omnis numquam quaerat. Sed fugiat nisi. Officiis veniam molestiae. Et vel ut quidem alias veritatis repudiandae ut fugit. Est ut eligendi aspernatur nulla voluptates veniam iusto vel quisquam. Fugit ut maxime incidunt accusantium totam repellendus eum error. Et repudiandae eum iste qui et ut ab alias.</p>
            <ul>
              <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="ion-android-checkmark-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </section><!-- #about -->

  <!-- about -->
  <section id="section-about" class="section appear clearfix"></section>
    <div class="container">

      <div class="row align-center mar-bot40">
        <div class="col-md-3">
          <div class="team-member">
            <figure class="member-photo"><img src="/datsannhanh/image/team/member1.jpg" alt=""></figure>
            <div class="team-detail">
              <h4>Tiến Cường</h4>
              <span>Quản lý sân</span>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="team-member">
            <figure class="member-photo"><img src="/datsannhanh/image/team/member2.jpg" alt=""></figure>
            <div class="team-detail">
              <h4>Văn Tuấn</h4>
              <span>Quản lý sân</span>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="team-member">
            <figure class="member-photo"><img src="/datsannhanh/image/team/member3.jpg" alt=""></figure>
            <div class="team-detail">
              <h4>Tiến Đạt</h4>
              <span>Quản lý sân</span>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="team-member">
            <figure class="member-photo"><img src="/datsannhanh/image/team/member4.jpg" alt=""></figure>
            <div class="team-detail">
              <h4>Hoàng Thị Bích</h4>
              <span>Quản lý sân</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- /about -->
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
