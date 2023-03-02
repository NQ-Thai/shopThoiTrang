@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="card">
        <div class="card-header">
            Mua thành công
        </div>
        <div class="card-body">
            <div class="alert alert-success" role="alert">
                Chúc mừng , Đã mua thành công. Số của đơn hàng là
                <b>#{{ $viewData['order']->getId() }}</b>
            </div>
        </div>
    </div>
@endsection
