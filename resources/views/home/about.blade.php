@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<head>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
   <!-- Contact Section Begin -->
   <section class="contact bg-light spad">
       <div class="container">
           <div class="row">
               <div class="col-lg-6 col-md-6">
                   <div class="contact__text">
                       <div class="section-title">
                           <span>Thông tin Liên Hệ</span>
                           <h2>Liên hệ</h2>
                           <p>Như bạn có thể mong đợi về một công ty khởi đầu là nhà thầu nội thất cao cấp, chúng tôi trả
                                chú ý nghiêm ngặt.</p>
                       </div>
                       <ul>
                         
                           <li>
                               <h4>Địa chỉ</h4>
                               <p>334 Nguyễn Văn Nghi Quận Gò Vấp TPHCN <br />+0328979070</p>
                           </li>
                       </ul>
                   </div>
               </div>
               <div class="col-lg-6 col-md-6">
                   <div class="contact__form">
                       <form action="#">
                           <div class="row">
                               <div class="col-lg-6">
                                   <input type="text" placeholder=Tên">
                               </div>
                               <div class="col-lg-6">
                                   <input type="text" placeholder="Email">
                               </div>
                               <div class="col-lg-12">
                                   <textarea placeholder="Message"></textarea>
                                   <button type="submit" class="site-btn">Gửi tin nhắn</button>
                               </div>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- Contact Section End -->

   <!-- Js Plugins -->
</body>

    <head>
    
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
            rel="stylesheet">
    
        <!-- Css Styles -->
        {{-- <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css"> --}}
        {{-- <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
        <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
        <link rel="stylesheet" href="css/nice-select.css" type="text/css">
        <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css"> --}}
        <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container text-white">
            <div class="row ">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                        <p class="text-white">Khách hàng là trung tâm của mô hình kinh doanh độc đáo của chúng tôi, bao gồm thiết kế.</p>
                        <a href="#"><img src="img/payment.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6 class="text-white">Bán hàng</h6>
                        <ul>
                            <li><a class="text-white" href="Sanpham.php">Cửa hàng quần áo</a></li>
                            <li><a class="text-white" href="Tintuc.php">Xu hướng </a></li>
                            <li><a class="text-white" href="Sanpham.php">Phụ kiện</a></li>
                            <li><a class="text-white" href="Sanpham.php">Sale</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6 class="text-white">Shop Thời Trang</h6>
                        <ul>
                            <li><a class="text-white" href="Lienhe.php">Liên hệ</a></li>
                            <li><a class="text-white" href="Lienhe.php">Phương thức thanh toán</a></li>
                            <li><a class="text-white" href="Lienhe.php">Trả lại và trao đổi</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>Mới</h6>
                        <div class="footer__newslatter">
                            <p class="text-white">
                            Hãy là người đầu tiên biết về những người mới đến, sách tìm kiếm, bán hàng và khuyến mãi!</p>
                            <form action="#">
                                <input class="text-white" type="text" placeholder="Your email">
                                <button type="submit"><span class="icon_mail_alt"></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
    
    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->
@endsection
