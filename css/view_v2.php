<?php
use yii\web\JqueryAsset;
$this->title = $model->name . ' ' .$model->title;
$date = new DateTime('+3 day');
$images = $model->getAllImage();
?>
<div class="container">
  <ul class="ht-breadcrumb">
    <li><a href="/">Trang chủ</a></li>
    <li><a href="/thiet-ke">Thiết kế</a></li>
    <li class="active">Yêu cầu thiết kế thương hiệu</li>
  </ul>
  <div class="ht-product-detail-card">
     <div class="row">
           <div class="left-slide-tk">
              <div class="col-md-5 col-sm-6 col-xs-12 slide-yc__tk">
                <div class="product-photo-gallery">
                  <div class="single-photo-view">
                    <img src="<?= $model->getImageUrl();?>" alt="" id="photoZoom">
                  </div>
                  <div id="singleProductPhotoCarousel" class="photo-carousel owl-carousel show-04-items">
                    <?php if($images): ?>
                    <?php foreach ($images as $image): ?>
                    <div data-item="<?=$image->id; ?>" class="photo-item <?=$image->getImageUrl() == $model->getImageUrl() ? 'active': '' ?>">
                      <a href="javascript:void(0)"><img class="img-load" data-id="<?=$image->id; ?>" src="<?=$image->getImageUrl(); ?>" alt=""></a>
                    </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                  </div>
               </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12 tt-yc__tk">
                 <div class="head-productdetail">
                    <h1 class="p-name">Yêu cầu thiết kế tờ rơi</h1>
                    <div class="p-code">
                       <span class="code-unknown">Chịu trách nhiệm:</span>
                       <span class="green-pro">PrintGo</span>
                    </div>
                 </div>
                 <div class="p-code">
                    <p>Với dịch vụ in tờ rơi không chỉ đẹp mà còn rẻ, Thế giới in ấn giúp bạn giải quyết được vấn đề quảng bá hình ảnh đến khách hàng Một tờ rơi (tờ bướm) vấn đề quảng bá hình ảnh đến khách hàng Một tờ rơi (tờ bướm)</p>
                 </div>
                 <hr>
                 <div class="btn-product">
                    <a href="#ct__tk-scroll">Xem chi tiết <i class="fa fa-chevron-circle-down"></i></a>
                    <div class="like__12">
                      <div class="fb-like" data-href="<?= Yii::$app->request->url ?>" data-width=""
                        data-layout="button_count" data-action="like" data-size="small" data-show-faces="true"
                        data-share="true"></div>
                    </div>
                 </div>
                 <div class="cs-other">
                    <h4>Chính sách cho người dùng</h4>
                    <ul class="ht-list ht-list-icon icon-lg list-unstyled">
                      <li> <i class="fas fa-check"></i> Chính sách thứ 1 </li>
                      <li> <i class="fas fa-check"></i> Chính sách thứ 1 </li>
                      <li> <i class="fas fa-check"></i> Chính sách thứ 1 </li>
                      <li> <i class="fas fa-check"></i> Chính sách thứ 1 </li>
                    </ul>
                 </div>
              </div>
              <div class="col-md-3 col-xs-12 right-slide-productdetail">
           <h2 class="ht-title with-bb">Đơn giá thiết kế</h2>
           <div class="check-out-p-list">
              <div class="row ht-mgb12">
                 <div class="col-xs-4">
                    <div class="product-detail">
                       <p>Thời gian</p>
                    </div>
                 </div>
                 <div class="col-xs-8 text-right">
                    <input class="date__tk" id="endDate" value="<?=$date->format('d/m/Y');?>" name="time" />
                    <i id="sub-date">3 ngày làm việc</i>
                 </div>
              </div>
              <div class="row ht-mgb12">
                 <div class="col-xs-6">
                    <div class="product-detail">
                       <p>Phí thiết kế</p>
                    </div>
                 </div>
                 <div class="col-xs-6 text-right">
                    <div class="product-price">
                       <span class="green">Miễn phí</span>
                    </div>
                 </div>
              </div>
           </div>
           <hr>
           <div class="row ht-mgb12">
              <div class="col-xs-6">
                 <div class="product-detail">
                    <p>Giảm giá</p>
                 </div>
              </div>
              <div class="col-xs-6 text-right">
                 <div class="product-price">
                    <span class="prink">-10%
                    </span>
                 </div>
              </div>
           </div>
           <div class="row ht-mgb12">
              <div class="col-xs-7">
                 <div class="product-detail">
                    <p>Giá cước khi giảm</p>
                 </div>
              </div>
              <div class="col-xs-5 text-right">
                 <div class="product-price1">110.000đ</div>
              </div>
           </div>
           <div class="row ht-mgb12">
              <div class="col-xs-6">
                 <div class="product-detail">
                    <p style="font-weight: 700">Tổng chi phí</p>
                 </div>
              </div>
              <div class="col-xs-6 text-right">
                 <div class="product-price">
                    <span class="prink">110.000đ
                    </span>
                 </div>
              </div>
           </div>
           <button class="btn btn-block btn-printnow"><i class="fa fa-shopping-basket"></i> đặt thiết kế ngay</button>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-12 col-xs-12 content-productdetail" id="ct__tk-scroll">
     <div class="col-md-9 col-xs-12 left-content-fe">
        <div class="inner_title text-left">
           <p class="des">chi tiết về sản phẩm</p>
           <h2 class="h2">
              <span>mô tả mẫu danh thiếp <span class="green">pg-10983</span></span>
           </h2>
           <span class="number"><img src="img/icon/gach-den.jpg"></span>
        </div>
        <div class="col-md-12 col-xs-12 ht-cmt-now">
           <span class="code-unknown">100 bình luận</span> về bài viết này- <a href="#cmt-now-id">Bình luận ngay</a>
        </div>
        <div class="col-xs-12 text-content">
           <?=$model->content;?>
           <div class="advisory-form">
            <form class="input-group advisory-bar" action="">
              <input value="" type="text" class="input-group-field advisory-text" name="phone" id="advisory_text" placeholder="Số điện thoại">
              <a href="javascript::void(0)" id="advisory_button">Tư vấn ngay</a>
            </form>
           </div>
           <hr>
        </div>
     </div>
     <div class="col-md-3 col-xs-12 ht-news-leftct">
        <div class="ht-left-1">
           <div class="inner_title text-left">
              <p class="des">câu hỏi thường gặp</p>
              <h2 class="h2">
                 <span>hỏi đáp</span>
              </h2>
              <span class="number"><img src="img/icon/gach-den.jpg"></span>
           </div>
           <div class="col-xs-12 bt-4new">
              <div class="panel-group">
                 <div class="panel panel-default">
                    <div class="panel-heading">
                       <h4 class="panel-title">
                          <a data-toggle="collapse" href="#collapse1"><img src="img/icon/icn.jpg"> Bao giờ tôi có thể nhận tờ rơi</a>
                       </h4>
                    </div>
                    <div style="padding: 10px;background:#f5f5f5" id="collapse1" class="panel-collapse collapse">
                       Tốc độ vận chuyển sẽ phụ thuộc vào giấy và kích cỡ bạn chọn cho Flyers, nhưng có thể nhanh nhất là 2 ngày.
                    </div>
                 </div>
                 <div class="panel panel-default">
                    <div class="panel-heading">
                       <h4 class="panel-title">
                          <a data-toggle="collapse" href="#collapse2"><img src="img/icon/icn.jpg"> Bao giờ tôi có thể nhận tờ rơi</a>
                       </h4>
                    </div>
                    <div style="padding: 10px;background:#f5f5f5" id="collapse2" class="panel-collapse collapse">
                       Tốc độ vận chuyển sẽ phụ thuộc vào giấy và kích cỡ bạn chọn cho Flyers, nhưng có thể nhanh nhất là 2 ngày.
                    </div>
                 </div>
                 <div class="panel panel-default">
                    <div class="panel-heading">
                       <h4 class="panel-title">
                          <a data-toggle="collapse" href="#collapse3"><img src="img/icon/icn.jpg"> Bao giờ tôi có thể nhận tờ rơi</a>
                       </h4>
                    </div>
                    <div style="padding: 10px;background:#f5f5f5" id="collapse3" class="panel-collapse collapse">
                       Tốc độ vận chuyển sẽ phụ thuộc vào giấy và kích cỡ bạn chọn cho Flyers, nhưng có thể nhanh nhất là 2 ngày.
                    </div>
                 </div>
              </div>
           </div>
           <a class="btn-pro-detail btn">Xem chi tiết <i class="fa fa-long-arrow-right"></i></a>
        </div>
        <div class="col-xs-12 ht-left-2">
           <div class="inner_title text-left">
              <p class="des">cập nhật tin tức xu hướng thiết kế</p>
              <h2 class="h2">
                 <span>bài viết tờ rơi</span>
              </h2>
              <span class="number"><img src="img/icon/gach-den.jpg"></span>
           </div>
           <div class="col-xs-12 sidebar-content">
              <ul class="sidebar-news-list list-unstyled">
                 <li>
                    <a href="#" class="news-thumb"><img src="img/w2.jpg" alt=""></a>
                    <div class="news-detail">
                       <h4 class="news-title"><a href="#" class="new-title">Cảm hứng từ huyền thoại Piet Mondrian với thiết kế</a></h4>
                       <div class="news-meta"><i class="fa fa-clock"></i> 27/02/2017</div>
                    </div>
                 </li>
                 <li>
                    <a href="#" class="news-thumb"><img src="img/w2.jpg" alt=""></a>
                    <div class="news-detail">
                       <h4 class="news-title"><a href="#" class="new-title">Cảm hứng từ huyền thoại Piet Mondrian với thiết kế</a></h4>
                       <div class="news-meta"><i class="fa fa-clock"></i> 27/02/2017</div>
                    </div>
                 </li>
                 <li>
                    <a href="#" class="news-thumb"><img src="img/w2.jpg" alt=""></a>
                    <div class="news-detail">
                       <h4 class="news-title"><a href="#" class="new-title">Cảm hứng từ huyền thoại Piet Mondrian với thiết kế</a></h4>
                       <div class="news-meta"><i class="fa fa-clock"></i> 27/02/2017</div>
                    </div>
                 </li>
                 <li>
                    <a href="#" class="news-thumb"><img src="img/w2.jpg" alt=""></a>
                    <div class="news-detail">
                       <h4 class="news-title"><a href="#" class="new-title">Cảm hứng từ huyền thoại Piet Mondrian với thiết kế</a></h4>
                       <div class="news-meta"><i class="fa fa-clock"></i> 27/02/2017</div>
                    </div>
                 </li>
                 <li>
                    <a href="#" class="news-thumb"><img src="img/w2.jpg" alt=""></a>
                    <div class="news-detail">
                       <h4 class="news-title"><a href="#" class="new-title">Cảm hứng từ huyền thoại Piet Mondrian với thiết kế </a></h4>
                       <div class="news-meta"><i class="fa fa-clock"></i> 27/02/2017</div>
                    </div>
                 </li>
              </ul>
           </div>
           <div class="text-center">
              <button class="btn ht-btn-green btn-new-left">xem nhiều hơn <i class="fa fa-caret-right"></i>
              </button>
           </div>
           <div class="banner-cate-leftsmall">
              <div class="banner-item">
                 <img class="img-responsive" src="img/1_15.jpg" alt="">
                 <div class="text-banner align-left">
                    <div class="hr">
                       <p class="title-lv1">lĩnh vực du lịch</p>
                       <h2 class="title-lv2">tờ rơi du lịch</h2>
                    </div>
                    <h3 class="title-lv4">Mẫu danh thiếp <span class="white">PG10334</span></h3>
                    <p class="title-lv6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    <h4 class="title-lv5">Giá chỉ từ <span class="gold3">30k</span></h4>
                    <a href="/collections/all" class="btn-page-primary" title="Mua ngay"> <span>xem chi tiết</span><i class="fa fa-chevron-right"></i> </a>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
  <div class="col-xs-12">
     <div class="ap__desgin">
      <div class="col-md-12 title-product">
         <div class="col-md-6 col-xs-12 pd-0__design">
            <h3 class="ht-title text-uppercase with-bb title-chan">ấn phẩm <span class="prink">thiết kế khác</span>
            </h3>
         </div>
         <div class="col-md-6 col-xs-12 pd-0__design"></div>
      </div>
      <div class="ap__content">
         <div class="col-md-3 col-xs-12 pd-0">
            <div class="ht-product-card h-shadow">
               <div class="product-image">
                  <a href="#" class="image-wrap">
                  <img src="img/10.1_05.png" alt="">
                  </a>
               </div>
               <div class="product-detail clearfix">
                  <h3 class="pro-name"><a href="#" title="#">Thiết kế logo</a></h3>
                  <div class="bt-item__ap">
                     <div class="price-1">
                        <i class="fa fa-lightbulb"></i>
                        <b>1230</b> mẫu đã thiết kế
                     </div>
                     <div class="price-1 next-page">
                        <i class="fa fa-arrow-right"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-3 col-xs-12 pd-0">
            <div class="ht-product-card h-shadow">
               <div class="product-image">
                  <a href="#" class="image-wrap">
                  <img src="img/10.1_05.png" alt="">
                  </a>
               </div>
               <div class="product-detail clearfix">
                  <h3 class="pro-name"><a href="#" title="#">Thiết kế logo</a></h3>
                  <div class="bt-item__ap">
                     <div class="price-1">
                        <i class="fa fa-lightbulb"></i>
                        <b>1230</b> mẫu đã thiết kế
                     </div>
                     <div class="price-1 next-page">
                        <i class="fa fa-arrow-right"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-3 col-xs-12 pd-0">
            <div class="ht-product-card h-shadow">
               <div class="product-image">
                  <a href="#" class="image-wrap">
                  <img src="img/10.1_05.png" alt="">
                  </a>
               </div>
               <div class="product-detail clearfix">
                  <h3 class="pro-name"><a href="#" title="#">Thiết kế logo</a></h3>
                  <div class="bt-item__ap">
                     <div class="price-1">
                        <i class="fa fa-lightbulb"></i>
                        <b>1230</b> mẫu đã thiết kế
                     </div>
                     <div class="price-1 next-page">
                        <i class="fa fa-arrow-right"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-3 col-xs-12 pd-0">
            <div class="ht-product-card h-shadow">
               <div class="product-image">
                  <a href="#" class="image-wrap">
                  <img src="img/10.1_05.png" alt="">
                  </a>
               </div>
               <div class="product-detail clearfix">
                  <h3 class="pro-name"><a href="#" title="#">Thiết kế logo</a></h3>
                  <div class="bt-item__ap">
                     <div class="price-1">
                        <i class="fa fa-lightbulb"></i>
                        <b>1230</b> mẫu đã thiết kế
                     </div>
                     <div class="price-1 next-page">
                        <i class="fa fa-arrow-right"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-3 col-xs-12 pd-0">
            <div class="ht-product-card h-shadow">
               <div class="product-image">
                  <a href="#" class="image-wrap">
                  <img src="img/10.1_05.png" alt="">
                  </a>
               </div>
               <div class="product-detail clearfix">
                  <h3 class="pro-name"><a href="#" title="#">Thiết kế logo</a></h3>
                  <div class="bt-item__ap">
                     <div class="price-1">
                        <i class="fa fa-lightbulb"></i>
                        <b>1230</b> mẫu đã thiết kế
                     </div>
                     <div class="price-1 next-page">
                        <i class="fa fa-arrow-right"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-3 col-xs-12 pd-0">
            <div class="ht-product-card h-shadow">
               <div class="product-image">
                  <a href="#" class="image-wrap">
                  <img src="img/10.1_05.png" alt="">
                  </a>
               </div>
               <div class="product-detail clearfix">
                  <h3 class="pro-name"><a href="#" title="#">Thiết kế logo</a></h3>
                  <div class="bt-item__ap">
                     <div class="price-1">
                        <i class="fa fa-lightbulb"></i>
                        <b>1230</b> mẫu đã thiết kế
                     </div>
                     <div class="price-1 next-page">
                        <i class="fa fa-arrow-right"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-3 col-xs-12 pd-0">
            <div class="ht-product-card h-shadow">
               <div class="product-image">
                  <a href="#" class="image-wrap">
                  <img src="img/10.1_05.png" alt="">
                  </a>
               </div>
               <div class="product-detail clearfix">
                  <h3 class="pro-name"><a href="#" title="#">Thiết kế logo</a></h3>
                  <div class="bt-item__ap">
                     <div class="price-1">
                        <i class="fa fa-lightbulb"></i>
                        <b>1230</b> mẫu đã thiết kế
                     </div>
                     <div class="price-1 next-page">
                        <i class="fa fa-arrow-right"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
    </div>
  </div>
</div>
<?php
$this->registerCssFile('/css/jquery.datetimepicker.css', ['depends' => [ JqueryAsset::className() ], 'defer'=>true]);
$this->registerCssFile('/css/desgin.css', ['depends' => [ JqueryAsset::className() ], 'defer'=>true]);
$this->registerJsFile('/js/jquery.datetimepicker.js', ['depends' => [ JqueryAsset::className() ], 'defer'=>true]);
$this->registerCssFile("/libs/owlcarousel/assets/owl.carousel.min.css", ['depends' => [JqueryAsset::className()], 'media' => true]);
$this->registerJsFile('/libs/owlcarousel/owl.carousel.min.js', ['depends' => [ JqueryAsset::className() ], 'defer'=>true]);
$js = <<< EOD
  $('body').on('click', '.img-load', function(){
    const dId = $(this).attr('data-id');
    $('#photoZoom').attr('src', $(this).attr('src'));
    $('.owl-stage').find('.photo-item').each(function(){
      if($(this).attr('data-item') == dId){
        $(this).addClass('active');
      } else $(this).removeClass('active');
    });
  });
  $("#singleProductPhotoCarousel.owl-carousel.show-04-items").owlCarousel({
   loop: true,
        margin: 10,
        dots: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 3,
                nav: true
            },
            600: {
                items: 3,
                nav: false
            },
            1000: {
                items: 3,
                nav: true,
                loop: false
            }
        }
    });
  $(function(){
    function addDays( days ) {
      var result = new Date();
      result.setDate(result.getDate() + days);
      return result;
    }
    $("#endDate").datetimepicker({
      lang: 'vi',
      format: 'd/m/Y',
      timepicker: false,
      minDate: addDays(3),
      onChangeDateTime: function (selectedDate) {
        const diffTime = Math.abs(selectedDate - new Date());
        const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
        so_ngay = diffDays;
        $('#sub-date').html(diffDays + ' ngày làm việc');
      }
    });
    $('body').on('click', '#advisory_button', function () {
      const phone = $('#advisory_text').val();
      var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
      if(phone !==''){
        if (vnf_regex.test(phone) == false){
          alert('Số điện thoại của bạn không đúng định dạng!');
        } else {
          $("#thank-detail").modal("show");
          $.post('/product/email-tv',{phone: phone,url: window.location.href},function(data){});
        }
      } else {
        alert('Bạn chưa điền số điện thoại!');
      }
    });
    $('body').on('click', '.btn-printnow', function () {
      const _uri = '/thiet-ke/gui-yeu-cau?id={$model->id}&so_ngay=' + so_ngay + '&goi=' + goi;
      window.location.href = _uri;
      return false;
    });
  });
EOD;
$this->registerJs($js);
?>