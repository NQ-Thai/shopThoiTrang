@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="row">
        @foreach ($viewData['products'] as $product)
            <div class="col-md-4 col-lg-3 mb-2">
                <div class="card">
                    <img src="{{ asset('/storage/' . $product->getImage()) }}" class="card-img-top">
                    <div class="card-body text-center">
                        <a href="{{ route('product.show', ['id' => $product->getId()]) }}" class="btn bg-primary text-white">
                            {{ $product->getName() }}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <head>

    
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
            rel="stylesheet">
    
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
