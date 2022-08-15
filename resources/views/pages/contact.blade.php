@extends('layouts.temp')
@section('contents')
    <div class="background-img">
        <img src="images/bg.png" alt="">
        <div class="contact-text-1">Liên hệ</div>
    </div>
    <div class="contact-img"></div>
    <div class="contact-content">
        <div class="contact-bkgrd-group">
            <div class="contact-layer-1"></div>
            <div class="contact-layer-2"></div>
            <div class="contact-layer-3"></div>
            <div class="contact-layer-4"></div>
            <a href="#">
                <button class="contact-button">Gửi liên hệ</button>
            </a>
        </div>
        <div class="contact-phone">
            <div class="contact-phone-bkgrd">
                <div class="contact-phone-layer-1"></div>
                <div class="contact-phone-layer-2"></div>
                <div class="contact-phone-layer-3"></div>
                <div class="contact-phone-layer-4"></div>
            </div>
            <img src="images/contactpage/telephone 2.png" alt="" class="phone-symbol">
            <div class="contact-text-5">
                Điện thoại:
                <p>+84 145 689 798</p>
            </div>
        </div>

        <div class="contact-mail">
            <div class="contact-mail-bkgrd">
                <div class="contact-mail-layer-1"></div>
                <div class="contact-mail-layer-2"></div>
                <div class="contact-mail-layer-3"></div>
                <div class="contact-mail-layer-4"></div>
            </div>
            <img src="images/contactpage/mail-inbox-app 1.png" alt="" class="mail-symbol">
            <div class="contact-text-4">
                Email:
                <p>investigate@your-site.com</p>
            </div>
        </div>

        <div class="contact-addr">
            <div class="contact-address-bkgrd">
                <div class="contact-addr-layer-1"></div>
                <div class="contact-addr-layer-2"></div>
                <div class="contact-addr-layer-3"></div>
                <div class="contact-addr-layer-4"></div>
            </div>
            <img src="images/contactpage/adress 1.png" alt="" class="addr-symbol">
            <div class="contact-text-3">
                Địa chỉ:
                <p>86/33 Âu Cơ, Phường 9, Quận Tân Bình, TP. Hồ Chí Minh</p>
            </div>
        </div>
        <div class="contact-text-2">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac mollis justo. Etiam volutpat tellus quis risus volutpat, ut posuere ex facilisis.
        </div>
        <div class="input-frame-1">
            <form>
                <textarea name="message" class="contact-message" cols="30" rows="10" placeholder="Lời nhắn"></textarea>
            </form>
        </div>
        <div class="input-frame-2">
            <div class="input-frame-3">
                <input type="text" placeholder="Tên" class="contact-name">
                <input type="text" placeholder="Số điện thoại" class="contact-tele">
            </div>
            <div class="input-frame-4">
                <input type="text" placeholder="Email" class="contact-e-address">
                <input type="text" placeholder="Địa chỉ" class="contact-address">
            </div>
        </div>
    </div>
@endsection