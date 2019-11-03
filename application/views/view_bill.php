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

  <!-- section works -->
  <section id="section-works" class="section appear clearfix" style="margin-top:50px">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Các sân đã đặt</h2>
            
          </div>
        </div>
      </div>

      <div class="row" style="margin:auto">

      <?php if($error!=""){?>
        <p><?php echo $error;?></p>
      <?php } else{ ?>
      <p></p>
      <table class="table">
        <thead>
          <tr>
            <th>Mã số hóa đơn</th>
            <th>Tên khách hàng</th>
            <th>Tên sân</th>
            <th>Ngày đặt sân</th>
            <th>Thời gian bắt đầu</th>
            <th>Thời gian kết thúc</th>
            <th>Tổng thanh toán</th>
            <th>Trạng thái</th>
          </tr>
        </thead>
        <tbody id="">
          <?php foreach ($data as $key => $value) {?>
          <tr>
            <td><?php echo $value->idhoadon;?></td>
            <td><?php echo  $value->tenkhachhang;?></td>
            <td><?php echo  $value->tensan;?></td>
            <td><?php echo  $value->ngaydat;?></td>
            <td><?php echo  $value->timeStart;?></td>
            <td><?php echo  $value->timeEnd;?></td>
            <td><?php echo  $value->tongthanhtoan;?></td>
            <td><?php if($value->status == 0){?>
                <input type="button" class="btn btn-danger" name="" id="btnXacNhan" value="Chờ xác nhận" disabled="true">
              <?php } if($value->status == 1){?>
                <input type="button" class="btn btn-warning" name="" id="btnConfirmThanhToan" value="Chờ thanh toán" disabled="true">
              <?php } if($value->status == 2){?>
                <input type="button" class="btn btn-success" name="" id="btnSuccess" value="Hoàn tất" disabled="true">
              <?php } ?>
            </td>
          </tr>
          <?php }?>
        </tbody>
      </table>
      <?php }?>
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
