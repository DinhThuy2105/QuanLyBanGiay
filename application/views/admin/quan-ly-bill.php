<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <?php include("header.php")?>
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <?php include("topbar.php")?>
        <!-- ============================================================== -->
        <?php include("left_sidebar.php")?>
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row" style="background-color:#fff;padding:20px 40px">
                    <!-- Column -->
                    <div id="content">
      
      <h1>Trang quản lý hóa đơn</h1>
      <div class="row">
      <p><?php echo $error;?></p>
      <table class="table table-striped" style="margin-top:30px">
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
                <input type="button" class="btn btn-danger" name="" id="btnXacNhan" onclick="duyetdon(<?php echo $value->idhoadon;?>,<?php echo $value->id;?>,<?php echo  $value->tongthanhtoan;?>,0);" value="Chờ xác nhận">
              <?php } if($value->status == 1){?>
                <input type="button" class="btn btn-warning" name="" id="btnConfirmThanhToan" onclick="duyetdon(<?php echo $value->idhoadon;?>,<?php echo $value->id;?>,<?php echo  $value->tongthanhtoan;?>,1);" value="Chờ thanh toán">
              <?php } if($value->status == 2){?>
                <input type="button" class="btn btn-success" name="" id="btnSuccess" value="Hoàn tất" disabled="true">
              <?php } ?>
            </td>
          </tr>
          <?php }?>
        </tbody>
      </table>
     
        
      </div>
    </div>
                </div>
                <!-- Row -->
                
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer "> © 2019 By Hoàng Thị Bích </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <?php include("script.php")?>
    <script type="text/javascript">
function duyetdon(idhoadon,idkhachhang,tongthanhtoan,status){
  $.ajax({
    type: "POST",
    url: "<?php echo base_url(); ?>" + "admin/duyetdon",
    dataType: 'json',
    data: {idhoadon: idhoadon,
          idkhachhang: idkhachhang,
          status: status,
          tongthanhtoan : tongthanhtoan},
    success: function(res) {
    if (res.error =="")
    {
      toastr.success('Duyệt đơn thành công!');
      location.reload();
    }
    else{
      toastr.error(res.error);
    }
    },
    error: function(error){

    }
    });
}
</script>


</body>

</html>
