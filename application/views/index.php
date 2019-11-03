<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
  <head>
<?php
include("common/header.php")
?>
</head>
<body style="touch-action: none;">
<?php
include("common/navbar.php")
?>

  <section id="intro">
    <div class="intro-content">
      <h2>Welcome to Soccer!</h2>
      <h3>Kết nối giao lưu cùng trái bóng tròn</h3>
      <div>
        <a href="#section-services" class="btn-get-started scrollto">Tìm hiểu thêm</a>
      </div>
    </div>
  </section>

  <!-- services -->
  <section id="section-services" class="section pad-bot30 bg-white">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-lg-4">
          <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
            <div class="float-left mar-right20">
              <a href="#" class="hi-icon hi-icon-location">Location</a>
            </div>
          </div>
          <h3 class="text-bold">Số lượng lớn</h3>
          <p>Số lượng sân lớn và đa dạng giúp bạn lựa chọn loại sân phù hợp</p>

          <div class="clear"></div>
        </div>

        <div class="col-lg-4">
          <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
            <div class="float-left mar-right20">
              <a href="#" class="hi-icon hi-icon-clock">Faster</a>
            </div>
          </div>
          <h3 class="text-bold">Đặt lịch nhanh</h3>
          <p>Bạn có thể đặt lịch bất cứ ở đâu bất cứ khi nào, nhanh chóng và tiện lợi</p>

          <div class="clear"></div>
        </div>

        <div class="col-lg-4">
          <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
            <div class="float-left mar-right20">
              <a href="#" class="hi-icon hi-icon-archive">phone</a>
            </div>
          </div>
          <h3 class="text-bold">Hỗ trợ</h3>
          <p>Liên hệ với chúng tôi nếu bạn có bất kì thắc mắc hoặc cần hỗ trợ tư vấn 24/7</p>

          <div class="clear"></div>
        </div>

      </div>
     
    </div>
  </section>

  <!-- spacer section:testimonial -->
  <section id="testimonials" class="section" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="align-center">
            <div class="flexslider testimonials-slider">
              <ul class="slides">
                <li>
                  <div class="testimonial clearfix">
                    <div class="mar-bot20">
                      <img alt="" src="/datsannhanh/image/testimonial/testimonial1.png" class="img-circle">
                    </div>
                    <i class="fa fa-quote-left fa-5x"></i>
                    <h5>
                      Điều quan trọng nhất là chiến thắng của đội. Ai ghi bàn cũng được, miễn là chúng tôi thắng.
											</h5>
                    <br/>
                    <span class="author">&mdash; CRISTIANO RONALDO &mdash;</span>
                  </div>
                </li>

                <li>
                  <div class="testimonial clearfix">
                    <div class="mar-bot20">
                      <img alt="" src="/datsannhanh/image/testimonial/testimonial2.png" class="img-circle">
                    </div>
                    <i class="fa fa-quote-left fa-5x"></i>
                    <h5>
                      Tôi luôn tâm niệm thành quả đạt được ngày hôm nay không tự dưng đến mà do sự khổ luyện.
												</h5>
                    <br/>
                    <span class="author">&mdash; CÔNG VINH &mdash;</span>
                  </div>
                </li>
                <li>
                  <div class="testimonial clearfix">
                    <div class="mar-bot20">
                      <img alt="" src="/datsannhanh/image/testimonial/testimonial3.png" class="img-circle">
                    </div>
                    <i class="fa fa-quote-left fa-5x"></i>
                    <h5>
											Tôi chơi bóng với một niềm đam mê như đứa trẻ với bóng đá đường phố
											</h5>
                    <br/>
                    <span class="author">&mdash; LIONEL MESSI &mdash;</span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>



  <!-- section works -->
  <section id="section-works" class="section appear clearfix">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Đặt sân</h2>
            
          </div>
        </div>
      </div>

      <div class="row" style="margin:auto">
        <nav id="filter" class="col-md-12 text-center">
          
          <ul>
          <li><a href="#" class="current btn btn-small" data-filter="*">All</a></li>
          <?php foreach ($type as $key => $value) {?>

                <li>
                <a href="#" class="current btn btn-small" data-filter=".<?php echo str_ireplace(" ","-",$value->loaisan);?>"><?php echo $value->loaisan;?></a>
              </li>                    
            <?php }?>
          </ul>
        </nav>
        <div class="col-md-12">
          <div class="row" style="margin-left: 30px;">
          
            <div class="portfolio-items isotopeWrapper clearfix" id="3">
            <?php foreach ($data as $key => $value) {
            # code...
            ?>
              <article class="col-md-3 isotopeItem <?php echo str_ireplace(" ","-",$value->loaisan);?>" >
                <div class="portfolio-item">
                  <img src="/datsannhanh/image/portfolio/img1.png" alt="" >
                  <div class="portfolio-desc align-center" style="touch-action: none;" onclick="choosesan(event,<?php echo  $value->idsan ;?>)">
                    <div class="folio-info">
                      <h5><a >Đặt sân</a></h5>
                      <a style="touch-action: none;"  onclick="choosesan(event,<?php echo  $value->idsan ;?>)"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
                <p class="text-center" style="color: black;font-size: 18px;margin-top: 10px;">Sân <?php echo  $value->tensan ;?></p>
                <b><p class="text-center text-primary price-pitch">Giá:<span style="padding-left: 10px;padding-right: 5px;"><?php echo  $value->dongia ;?></span>đ</p></b>
              </article>
              <?php }?>
              </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  
  <section id="clients" class="section clearfix bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-sm-2 align-center">
              <img alt="logo" src="/datsannhanh/image/clients/logo1.png">
            </div>

            <div class="col-sm-2 align-center">
              <img alt="logo" src="/datsannhanh/image/clients/logo2.png">
            </div>

            <div class="col-sm-2 align-center">
              <img alt="logo" src="/datsannhanh/image/clients/logo3.png">
            </div>

            <div class="col-sm-2 align-center">
              <img alt="logo" src="/datsannhanh/image/clients/logo4.png">
            </div>

            <div class="col-sm-2 align-center">
              <img alt="logo" src="/datsannhanh/image/clients/logo5.png">
            </div>
            <div class="col-sm-2 align-center">
              <img alt="logo" src="/datsannhanh/image/clients/logo6.png">
            </div>
          </div>
        </div>
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

  <!-- Modal resgister -->
  <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-color: slategrey;">
      <div class="modal-header" style="text-align: center;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="modal-title" style="font-size: -webkit-xxx-large;font-family: sans-serif;">Đăng ký</h3>
      </div>
      <form action="<?php echo base_url();?>login_controller/register" method="POST">
      <div class="modal-body text-dark" style="text-align: left;margin-bottom:20px;margin-left:50px;color: #fff;">
        <div class="form-inline" style="margin-top: 20px;">
            <label>Tên khách hàng</label>
            <input type="text" name="tenkhachhang" class="form-control" style="margin-left: 4px;">
        </div>
        
        <div class="form-inline" style="margin-top: 20px;">
        <label>Tên tài khoản</label>
          <input type="text" name="username" class="form-control">
        </div>
        <div class="form-inline" style="margin-top: 20px;">
        <label>Mật khẩu</label>
          <input type="password" name="password" class="form-control" style="margin-left: 4px;">
        </div>

        <div class="form-inline" style="margin-top: 20px;">
        <label style="margin-right: 180px;">Giới tính</label>
            <input type="radio" id="contactChoice1"
            name="sex" value="nữ">
            <label for="contactChoice1">Nữ</label>

            <input type="radio" id="contactChoice2"
            name="sex" value="nam">
            <label for="contactChoice2">Nam</label>
        </div>
        <div class="form-inline" style="margin-top: 20px;">
        <label>Địa chỉ</label>
        <input type="text" name="address" class="form-control" style="margin-left: 4px;">
        </div>
        <div class="form-inline" style="margin-top: 20px;">
        <label for="dp3" class="col-form-label">Ngày sinh:</label>
        <input type="text" name="birthdate" class="form-control" style="margin-left: 4px"; id="dp3"/>
        </div>
        <div class="form-inline" style="margin-top: 20px;">
        <label class="col-form-label">SDT: </label>
        <input type="text" name="phone" class="form-control" style="margin-left: 4px;">
        <div class="form-inline" style="margin-top: 20px;">
        <label  class="col-form-label">Email:</label>
        <input type="text" name="email" class="form-control" style="margin-left: 4px;">
      </div>
      <div class="modal-footer" style="text-align: center;margin-top:30px">
        <button type="button" class="btn btn-danger button" data-dismiss="modal">Hủy </button>
        <button type="submit" class="btn btn-primary button" style="border-radius: 7%;">Đăng ký</button>
      </div>
      </form>
    </div>
  </div>
</div>
            </div>
            </div>
 <!-- Modal resgister -->


 <div class="modal fade" id="bookPicthModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="width: 70%;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Đặt sân</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="pitch-name" class="col-form-label">Tên sân:</label>
            <input type="text" class="form-control" id="pitch-name" disabled="true">
            <input type="hidden" name="pitchid" id="pitchid">
          </div>
          <div class="form-group">
            <table class="table">
              <tr>
                <td style="width: 50%">
                  <p class="text-center">Danh mục dịch vụ</p>
                  <div>
                      <table class="table">
                      <thead>
                        <tr>
                          <th width="10%" style="vertical-align: middle;">STT</th>
                          <th width="35%" style="vertical-align: middle;">Tên dịch vụ</th>
                          <th width="30%" style="vertical-align: middle;">Đơn giá</th>
                          <th width="20%" style="vertical-align: middle;">Số lượng</th>
                          <th width="5%" style="vertical-align: middle;">Chọn</th>
                        </tr>
                        </thead>
                        <tbody id="danhmucdichvu">
                        <?php 
                          $i=1;
                          foreach ($dichvu as $key => $value) {
                         ?>
                        <tr id="dichvu-<?php echo $i;?>">
                          <td class="text-center"><?php echo $i ;?></td>
                          <td class="text-center"><?php echo $value->tendichvu;?></td>
                          <td class="text-center"><?php echo $value->dongia?></td>
                          <td class="text-center">
                            <div class="form-group">
                              <select class="soluongchon-<?php echo $i;?>">
                                <?php for ($j=1; $j <= 20; $j++) { 
                                 ?>
                                  <option value="<?php echo $j;?>"><?php echo $j;?></option>
                                <?php };?>
                              </select>
                            </div>
                          </td>
                          <td class="text-center"><input type="checkbox" name="dichvuchon" onchange="chooseService(<?php echo $i;?>)" data-id="<?php echo $value->iddichvu;?>" data-name="<?php echo $value->tendichvu;?>" data-index = "<?php echo $i;?>" data-price="<?php echo $value->dongia;?>" class="dichvuchon-<?php echo $i;?>"></td>
                        </tr>
                        <?php 
                          $i++;}
                        ?>
                        </tbody>
                      </table>
                  </div>
                </td>
                <td style="width: 50%">
                  <p class="text-center">Dịch vụ đã chọn</p>
                  <div >
                  <table class="table">
                    <thead>
                    <tr>
                      <th width="10%" class="text-center">STT</th>
                      <th width="45%" class="text-center">Tên dịch vụ</th>
                      <th width="30%" class="text-center">Số lượng</th>
                      <th width="15%" class="text-center">Xóa</th>
                    </tr>
                    <tbody id="dichvudachon">

                    </tbody>
                  </table>
                </td>
              </tr>
            </table>
          </div>
          <div class="form-group">
            <label for="dp3" class="col-form-label">Ngày đặt sân:</label>
            <input type="text" class="form-control" id="dp3"/>
          </div>
          <div class="form-group">
            <div class="form-inline">
              <div class="form-group" style="width: 50%;float: left;">
                <label for="timestart" class="col-form-label">Thời gian bắt đầu:</label>
                <input type="text" class="form-control" id="timestart" />
              </div>
              <div class="form-group" style="width: 50%;float: left;">
                <label for="timeend" class="col-form-label">Thời gian kết thúc:</label>
                <input type="text" class="form-control" id="timeend" />
              </div>
            </div>
          </div>
           <div class="form-group">
            <label for="pitch-type" class="col-form-label">Loại sân:</label>
            <input type="text" class="form-control" id="pitch-type" disabled="true" />
          </div>
          <div class="form-group">
            
            <label for="pitch-price" class="col-form-label">Giá sân:</label>
            <input type="text" class="form-control" id="pitch-price" disabled="true" />
         
          </div>
         
          <div class="form-group">
            <label for="total-price" class="col-form-label">Tổng tiền cần thanh toán:</label>
            <input type="text" class="form-control" id="total-price" disabled="true" />
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="btndatsan" class="btn btn-primary">Đặt sân</button>
      </div>
    </div>
  </div>
</div>


<?php
  include("common/footer.php")
?>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="/datsannhanh/js/mdtimepicker.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script type="text/javascript">
  jQuery(window).load(function() {
    
    $("#dp3").datepicker();
    $("#dp3").datepicker("option", "dateFormat", "yy-mm-dd");
    $("#sidebar").mCustomScrollbar({
         theme: "minimal"
    });

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
    // $(window).resize(function(){
    //   var width = $(window).width();
    //   //console.log(width);
    //   if (width > 768){
    //       $('#sidebar').toggleClass('active');
    //   }
    // });
    $('#timestart').mdtimepicker({format: 'hh:mm'});
    $('#timeend').mdtimepicker({format: 'hh:mm'});
    $("#bookPicthModal").on('hide.bs.modal', function(){
      // var c = confirm('Bạn có muốn xóa tất cả dữ liệu vừa nhập không?');
      // if(c == false){
      // return;
      // }
      $('#timestart').val('');
      $('#timeend').val('');
      dichvudachon.splice(0,dichvudachon.length);
      $('#danhmucdichvu input[type=checkbox]').each(function(){
        $(this).prop('checked',false);
    });
    loaddichvu();
    $('#total-price').val('');
  });
    $('#btndatsan').on('click',function(){
      var timestart = $('#timestart').val();
      var timeend = $('#timeend').val();
      var tongthanhtoan = $('#total-price').val();
      var ngaydatsan = $("#dp3").val();
      var idsan = $('#pitchid').val();
      if (ngaydatsan.length == 0) {
        toastr.warning("Vui lòng chọn ngày đặt sân trước khi thực hiện đặt sân!");
        return;
      }
      if (timestart.length == 0 || timeend.length == 0) {
        toastr.warning("Vui lòng chọn thời gian bắt đầu và kết thúc trước khi thực hiện đặt sân!");
        return;
      }
      if (parseInt(timeend.substring(3,5)) != 30 && parseInt(timeend.substring(3,5)) != 0 || parseInt(timestart.substring(3,5))!= 30 && parseInt(timestart.substring(3,5))!= 0) {
        toastr.warning("Vui lòng chọn thời gian là bội của 30 phút!");
        return;
      }
      if(parseInt(timeend.substring(0,2)) <  parseInt(timestart.substring(0,2)) || parseInt(timeend.substring(0,2)) ==  parseInt(timestart.substring(0,2)) && parseInt(timeend.substring(3,5)) <  parseInt(timestart.substring(3,5))){
        toastr.warning('Vui lòng nhập thời gian kết thúc lớn hơn thời gian bắt đầu!');
        return;
      }
      var datainput = { 
                        idsan:idsan,
                        timestart:timestart,
                        timeend: timeend,
                        ngaydatsan: ngaydatsan,
                        tongthanhtoan:tongthanhtoan,
                        dichvulist:dichvudachon
                      };
      $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>" + "index.php/homepage_controller/datsan",
        dataType: 'json',
        data: datainput,
        success: function(res) {
          if (res.result > 0)
          {
            toastr.success('Đặt sân thành công!');
            $('#bookPicthModal').modal('hide');
          }
          else
          {
            toastr.error(res.error);
          }
        },
        error:function(e){
          toastr.error('Đặt sân thất bại!');
        }
      });
    });
});

  function choosesan(event,id){
    event.preventDefault();
    //var keywords = $("#ipkeyword").val();
     var username = '<?php echo $this->session->userdata('username');?>';
     if(username ==''){
      alert('Bạn phải đăng nhập mới có thể đặt sân!');
      $('#loginModal').modal('show');
      return false;
     }
     else{
      $('#bookPicthModal').modal('show');
     }
    
    $.ajax({
    type: "POST",
    url: "<?php echo base_url(); ?>" + "index.php/homepage_controller/getSanById",
    dataType: 'json',
    data: {id: id},
    success: function(res) {
    if (res!="")
    {
      $('#pitch-name').val(res.tensan);
      $('#pitch-price').val(res.dongia);
      $('#pitch-type').val(res.loaisan);
      $('#pitchid').val(res.idsan);
    }
    }
    });
  }
  var dichvudachon=[];
  function chooseService(id){
    var soluong = $(".soluongchon-"+id).val();
    var iddichvu = $('.dichvuchon-'+id).attr('data-id');
    var tendichvu = $('.dichvuchon-'+id).attr('data-name');
    var dongia = $('.dichvuchon-'+id).attr('data-price');
    if($('.dichvuchon-'+id).prop('checked')==true){
      var dichvu = {
        iddichvu : iddichvu,
        tendichvu: tendichvu,
        dongia : dongia,
        soluong: soluong,
        thanhtien: parseInt(dongia) * parseInt(soluong)
      };
      dichvudachon.push(dichvu);
      caculator();
      loaddichvu();
    }else{
      for (var i = 0; i < dichvudachon.length; i++) {
        if(dichvudachon[i].iddichvu == $('.dichvuchon-'+id).attr('data-id')){
          dichvudachon.splice(i,1);
        }
      }
      caculator();
      loaddichvu();
    }
    
  }
  function deletesv(id){
    for (var i = 0; i < dichvudachon.length; i++) {
        if(dichvudachon[i].iddichvu == id){
          $('#danhmucdichvu input[type=checkbox]').each(function(){
            if($(this).attr('data-id') == id){
              $(this).prop('checked',false);
            }
          });
          dichvudachon.splice(i,1);

        }
      }
      caculator();
      loaddichvu();
  }
  $('#timestart').on('change',function(){
    var timestart = $('#timestart').val();
    var timeend = $('#timeend').val();
    if(parseInt(timeend.substring(0,2)) <  parseInt(timestart.substring(0,2)) || parseInt(timeend.substring(0,2)) ==  parseInt(timestart.substring(0,2)) && parseInt(timeend.substring(3,5)) <  parseInt(timestart.substring(3,5))){
    toastr.warning('Vui lòng nhập thời gian kết thúc lớn hơn thời gian bắt đầu!');
    return;
      }
    if (parseInt(timestart.substring(3,5)) != 30 && parseInt(timestart.substring(3,5)) != 0 ) {
      toastr.warning("Vui lòng chọn thời gian là bội của 30 phút!");
      return;
    }
    caculator();
  });
  $('#timeend').on('change',function(){
     var timestart = $('#timestart').val();
    var timeend = $('#timeend').val();
    if(parseInt(timeend.substring(0,2)) <  parseInt(timestart.substring(0,2)) || parseInt(timeend.substring(0,2)) ==  parseInt(timestart.substring(0,2)) && parseInt(timeend.substring(3,5)) <  parseInt(timestart.substring(3,5))){
    toastr.warning('Vui lòng nhập thời gian kết thúc lớn hơn thời gian bắt đầu!');
    return;
      }
    if(parseInt(timeend.substring(0,2)) ==  parseInt(timestart.substring(0,2))){
      if( parseInt(timeend.substring(3,5)) <=  parseInt(timestart.substring(3,5))){
        toastr.warning('Vui lòng nhập thời gian kết thúc lớn hơn thời gian bắt đầu!');
        return;
      }
    
    }
    if (parseInt(timeend.substring(3,5)) != 30 && parseInt(timeend.substring(3,5)) != 0 ) {
      toastr.warning("Vui lòng chọn thời gian là bội của 30 phút!");
      return;
    }
    caculator();
  });
function caculator(){
  var timestart = $('#timestart').val();
  var timeend = $('#timeend').val();
  var sum = 0;
 
  for (var i = 0; i < dichvudachon.length; i++) {
    sum += parseInt(dichvudachon[i].dongia) * parseInt(dichvudachon[i].soluong);
  }
  if (timeend != '' && timestart != '' ){
    var sumtime = (parseInt(timeend.substring(0,2)) * 60 + parseInt(timeend.substring(3,5))) - (parseInt(timestart.substring(0,2)) * 60 + parseInt(timestart.substring(3,5)));
    sum += parseInt($('#pitch-price').val()) * (sumtime/60);
  }else{
    sum += parseInt($('#pitch-price').val());
  }
  $('#total-price').val(Math.round(sum));
  //return sum;
}
function loaddichvu(){
  $('#dichvudachon').empty();
  for (var i = 0; i < dichvudachon.length; i++) {
    var html = '<tr>'
                +'<td class="text-center">'+ (i+1) +'</td>'
                +'<td class="text-center">'+dichvudachon[i].tendichvu+'</td>'
                +'<td class="text-center">'+dichvudachon[i].soluong+'</td>'
                +'<td class="text-center"><input type="checkbox" class="delete-dichvu" onclick="deletesv('+dichvudachon[i].iddichvu+')"></td></tr>';
    $('#dichvudachon').append(html);
  }

}
$(document).ready(function() {
  $("#index").addClass("active");
});

</script>
</body>

</html>
