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
       <h1>Trang quản lý sân</h1>
      <div class="container">
      <p><?php echo $error;?></p>
      <p><input type="button" name="" id="btnAddPitch" class="btn btn-success" value="Thêm sân"></p>
      <table class="table" style="width:90%;float:left">
        <thead>
          <tr>
            <th>Mã sân</th>
            <th>Tên sân</th>
            <th>Loại sân</th>
            <th>Đơn giá</th>
            <th>Ngày tạo</th>
            <th>Xóa</th>
          </tr>
        </thead>
        <tbody id="">
          <?php foreach ($data as $key => $value) {?>
          <tr class="sandisplay">
            <td><?php echo $value->idsan;?></td>
            <td><?php echo  $value->tensan;?></td>
            <td><?php echo  $value->loaisan;?></td>
            <td><?php echo  $value->dongia;?></td>
            <td><?php echo  $value->createdDate;?></td>
            <td><input type="button" name="" class="btn btn-danger" value="Xóa"></td>
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
    <!-- Modal update pitch -->
<div class="modal fade" id="mdUpdatePicth" tabindex="-1" role="dialog" aria-labelledby="mdUpdatePicth" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-color: #f7f7f7;">
      <div class="modal-header" style="text-align: center;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="modal-title" style="font-size: -webkit-xxx-large;font-family: -webkit-body;">Cập nhật sân</h3>
      </div>
      <form action="<?php echo base_url();?>login_controller/index" method="POST">
      <div class="modal-body" style="text-align: center;">
        <div class="form-inline col-lg-offset-0" style="margin: 5px;">
          <label style="margin-right: 5px;">Tên sân</label>
          <input name="txtPitchName" class="form-control input-sm" id="txtPitchName" type="text" value=""><input name="idsan" id="hdIdSan" type="hidden" value="1">
        </div>
        <div class="form-inline" style="margin: 5px;">
          <label style="margin-right: 6px;">Giá sân</label>
          <input name="txtUnitPrice" class="form-control input-sm" id="txtUnitPrice" type="text" value="">
        </div>
        <div class="form-inline">
          <label class="col-md-offset-0" style="margin-right: 6px; display: inline-table;">Loại sân</label>
          <select class="form-control input-sm" id="slLoaiSan" style="width: 45%;">
            <option value="1">Sân 5</option>
            <option value="2">Sân 7</option>
            <option value="3">Sân 11</option>
          </select>
        </div>
      </div>
      <div class="modal-footer" style="text-align: center;"">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="btnExUpdatePicth">Cập nhật</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal insert pitch -->
<div class="modal fade" id="mdInsertPicth" tabindex="-1" role="dialog" aria-labelledby="mdUpdatePicth" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-color: #f7f7f7;">
      <div class="modal-header" style="text-align: center;">
        <button type="button" class="close" style="position: absolute;
    right: 20px;" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="modal-title" style="font-size: -webkit-xxx-large;margin-left: 30%;font-family: -webkit-body;text-align:center;postion:absolute">Thêm sân</h3>
      </div>
      <form >
      <div class="modal-body" style="text-align: center;margin-left:20%">
        <div class="form-inline col-lg-offset-0" style="margin: 5px;">
          <label style="margin-right: 5px;">Tên sân</label>
          <input name="txtPitchName" id="tensan" class="form-control input-sm" id="txtPitchName" type="text" value=""><input name="idsan" id="hdIdSan" type="hidden" value="1">
        </div>
        <div class="form-inline" style="margin: 5px;">
          <label style="margin-right: 6px;">Giá sân</label>
          <input name="txtUnitPrice" id="dongia" class="form-control input-sm" id="txtUnitPrice" type="text" value="">
        </div>
        <div class="form-inline">
          <label class="col-md-offset-0" style="margin-right: 6px; display: inline-table;">Loại sân</label>
          <select class="form-control input-sm" id="slLoaiSan" style="width: 45%;">
            <option value="1">Sân 5</option>
            <option value="2">Sân 7</option>
            <option value="3">Sân 11</option>
          </select>
        </div>
      </div>
      <div class="modal-footer" style="text-align: center;"">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" onclick="insertPitch()" id="btnExAddPicth">Thêm mới</button>
      </div>
      </form>
    </div>
  </div>
</div>
    <?php include("script.php")?>
    <script type="text/javascript">
  $(document).ready(function () {
    $('#btnAddPitch').on('click',function(){
        $('#mdInsertPicth').modal('show');
    })
    
    $('.sandisplay').on('click',function(){
        $('#mdUpdatePicth').modal('show');
        var pitchName = $(this).find('td:eq(1)').html();
        var idsan = $(this).find('td:eq(0)').html();
        var loaisan = $(this).find('td:eq(2)').html();
        var dongia = $(this).find('td:eq(3)').html();
        $('#txtPitchName').val(pitchName);
        $('#txtUnitPrice').val(dongia);
        $('#hdIdSan').val(idsan);
        $('#slLoaiSan').val(loaisan);
    });
  });

  function insertPitch(){
        $.ajax({
    type: "POST",
    url: "<?php echo base_url(); ?>" + "admin_controller/insertPitch",
    dataType: 'json',
    data: {tensan: $("#tensan").val(),
        loaisan: $("#slLoaiSan").val(),
        dongia: $("#dongia").val()},
    success: function(res) {
    if (res.error =="")
    {
      toastr.success('Cập nhật thành công!');
    //   location.reload();
    }
    else{
      toastr.error(res.error);
    }
    },
    error: function(error){

    }
    });
    }


  function updatePitch(){
  $.ajax({
    type: "POST",
    url: "<?php echo base_url(); ?>" + "admin_controller/duyetdon",
    dataType: 'json',
    data: {tensan: $("#tensan").val(),
        loaisan: $("#loaisan").val(),
        dongia: $("#dongia").val()},
    success: function(res) {
    if (res.error =="")
    {
      toastr.success('Cập nhật thành công!');
      location.reload();
    }
    else{
      toastr.error(res.error);
    }
    },
    error: function(error){
        console.log(error);
    }
    });
}
</script>


</body>

</html>
