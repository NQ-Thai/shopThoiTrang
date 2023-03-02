<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
         rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="{{ asset('/css/admin.css') }}" rel="stylesheet" />
    <title>@yield('title', 'Admin - Online Store')</title>
</head>

<body>`
    <div class="row g-0">
<!-- sidebar -->
<div class="p-3 col fixed text-white bg-secondary">
    <a href="{{ route('admin.home.index') }}" class="text-white text-decoration-none">
        <span class="fs-4">Trang Admin</span>
    </a>
    <hr />
    <ul class="nav flex-column">
        <li><a href="{{ route('admin.home.index') }}" 
            class="nav-link text-white">- Admin - Trang chủ</a></li>
        <li><a href="{{ route('admin.product.index') }}" 
            class="nav-link text-white">- Admin - Sản phẩm</a></li>
        <li>
            <a href="{{ route('home.index') }}" 
                class="mt-3 btn bg-info text-white">Trở về trang chính</a>
        </li>
    </ul>
</div>
<!-- sidebar -->
        <div class="col content-grey">
            <nav class="p-3 shadow text-end">
                <span class="profile-font">Trang Admin</span>
            </nav>
            <div class="g-0 m-5">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
</body>

</html>
