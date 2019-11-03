<section id="header" class="appear"></section>
  <div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(5, 42, 62, 1);">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      	  <span class="fa fa-bars color-white"></span>
        </button>
        <div class="navbar-logo">
          <a href="<?php echo base_url();?>"><img data-0="width:155px;" data-300=" width:120px;" src="/datsannhanh/image/logo.png" alt=""></a>
        </div>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav pull-right" data-0="margin-top: 20px;position: absolute;right: 50px;" data-300="margin-top:5px;">
          <li id="index"><a href="<?php echo base_url();?>">Trang chủ</a></li>
          <li id="about"><a href="<?php echo base_url();?>about">Giới thiệu</a></li>
          <li id="works"><a href="<?php echo base_url();?>works">Đặt sân</a></li>
          <li id="contact"><a href="<?php echo base_url();?>contact">Liên hệ</a></li>
          <?php if($this->session->userdata('username') == ''){ ?>
            
            <li><a class="btn-success" href="#" data-toggle="modal" data-target="#loginModal" value="Đăng nhập">Đăng nhập</a></li>
            <li style="margin-left:20px"><a class="btn-warning " href="#" data-toggle="modal" data-target="#registerModal" >Đăng ký</a></li>
            <?php }else{ ?>
              <li><div class="form-inline" style="float: right;color: white;display: flex; letter-spacing: 2px;    margin: 15px 20px;">Wellcome 
                    <div class="dropdown d-inline" style="margin: 0 5px;">
                    <a href="#" style="text-decoration: none;color: yellow;" id="dropdownMenuButton"><?php echo $this->session->userdata('tenkhachhang');?></a>
                      <div class="dropdown-menu" style="background-color: #fff;color: cornsilk;" aria-labelledby="dropdownMenuButton">
                      <?php if($this->session->userdata('idrole') != 3){?>
                      <p class="dropdown-item-menu" style="color: white;"><i style="color: #337ab7;" class="fa fa-user"></i><a class="dropdown-item" href="<?php echo base_url();?>admin"> Trang quản trị</a></p>
                      <?php }?>
                      <p class="dropdown-item-menu" style="color: white;"><i style="color: #337ab7;"  class="fa fa-cog"></i><a class="dropdown-item" href="<?php echo base_url();?>acountmanager"> Quản lý tài khoản</a></p>
                      <p class="dropdown-item-menu" style="color: white;"><i style="color: #337ab7;"  class="fa fa-shopping-cart"></i><a class="dropdown-item" href="<?php echo base_url();?>view_bill"> Các sân đã đặt</a></p>
                      <p class="dropdown-item-menu" style="color: white;"><i style="color: #337ab7;"  class="fa fa-lock"></i><a class="dropdown-item" href="#"> Thay đổi mật khẩu</a></p>
                      <p class="dropdown-item-menu" style="color: white;"><i style="color: #337ab7;"  class="fa fa-gift"></i><a class="dropdown-item" href="#"> Điểm thưởng (<span style="color: red;"><?php echo $this->session->userdata('diemthuong');?></span>)</a></p>
                      <p class="dropdown-item-menu" style="color: white;"><i style="color: #337ab7;"  class="fa fa-sign-out"></i><a class="dropdown-item" href="#"> Đăng xuất</a></p>
                    </div>
                    </div>
                    <li style="margin-left:20px"><a class="btn btn-danger " href="<?php echo base_url();?>logout" >Logout</a></li>
                  </div>
                  </i>
            <?php };?>
        </ul>
      </div>
      <!--/.navbar-collapse -->
    </div>
  </div>