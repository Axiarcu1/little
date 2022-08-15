@extends('layouts.temp')
@section('contents')
    <div class="background-img">
        <img src="images/bg.png">
    </div>
    <div class="payment-header">Thanh toán</div>
    <div class="payment-content">
        <div class="payment-bkgrd-1">
            <div class="payment-layer-1"></div>
            <div class="payment-layer-2"></div>
            <div class="payment-layer-3"></div>
            <div class="payment-layer-4"></div>
        </div>
        <div class="payment-bkgrd-2">
            <div class="payment-layer-5"></div>
            <div class="payment-layer-6"></div>
            <div class="payment-layer-7"></div>
            <div class="payment-layer-8"></div>
        </div>
        <img src="images/paymentpage/Vector (3).png" alt="" class="payment-vector">
        <a href="#">
            <button class="pay-button">Thanh toán</button>
        </a>
        <div class="payment-money">
            Số tiền thanh toán
            <input type="text" name="" id="">
        </div>
        <div class="payment-amount">
            Số lượng vé
            <div><input type="number" name="" id=""> vé</div>
        </div>
        <div class="payment-date">
            Ngày sử dụng
            <input type="date" name="" id="">
        </div>
        <div class="payment-name">
            Thông tin liên hệ
            <input type="text" name="" id="">
        </div>
        <div class="payment-tele">
            Số điện thoại
            <input type="number" name="" id="">
        </div>
        <div class="payment-email">
            Email
            <input type="text" name="" id="">
        </div>
        <div class="payment-content-2">
            <div class="payment-card">
                Số thẻ
                <input type="text" name="" id="">
            </div>
            <div class="payment-cardname">
                Họ tên chủ thẻ
                <input type="text" name="" id="">
            </div>
            <div class="payment-expired">
                Ngày hết hạn
                <input type="date" name="" id="">
                
            </div>
            <div class="payment-code">
                CVV/CVC
                <input type="number" name="" id="">
            </div>
        </div>
        <button type="button" class="payment-calendar">
            <img src="images/homepage/calendar.png" alt="" class="button-icon-1">
        </button>
    </div>
    <img src="images/paymentpage/Trini_Arnold_Votay1 2.png" alt="" class="payment-img">
    <div class="payment-obj-1">
        <img src="images/paymentpage/Group.png" alt="">
        <p>VÉ CỔNG - VÉ GIA ĐÌNH</p>
    </div>
    <div class="payment-obj-2">
        <img src="images/paymentpage/Group.png" alt="">
        <p>THÔNG TIN THANH TOÁN</p>
    </div>
@endsection