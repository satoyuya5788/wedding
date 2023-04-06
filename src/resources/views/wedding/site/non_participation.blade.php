<!DOCTYPE html>
<html lang="ja">
@include('site_header')

<body class="body_nonparticipation">

    <video src="{{ asset('img/countDown_video.mp4') }}" autoplay playsinline muted loop style="opacity:0.8;"></video>

    @if(session("simple_auth")[0] === "さとうとしお" || session("simple_auth")[0] === "さとうりょうた" || session("simple_auth")[0] ===
    "さとうけいすけ")
    <section class="mt-4 p-4 mb-3">
        <div class="container mt-5 mb-2 bg-dairiseki_top p-2" data-aos="fade-down" data-aos-delay="200" data-aos-duration="3000" data-aos-offset="120">
            <div class="row align-items-center text-center">
                <div class="col-xs-12 order-lg-1 col-lg-12 pt-5 pb-4 family-msg">
                    <p class="mb-3">Dear</p>
                    <p style="font-size:1.6rem;">
                        お父さん
                    </p>
                    <p style="font-size:1.6rem;">
                        お母さん
                    </p>
                    <p style="font-size:1.6rem;">
                        　　圭介兄ちゃん
                    </p>
                    <p style="font-size:1.6rem;">
                        　　涼太兄ちゃん
                    </p>
                    <br>
                    <p style="font-size:1.3rem;" class="text-nowrap">
                        このページは
                    </p>
                    <p style="font-size:1.3rem;" class="text-nowrap">
                        佐藤佑也様のご家族しか
                    </p>
                    <p style="font-size:1.3rem;" class="text-nowrap">
                        閲覧できません
                    </p>
                    <p style="font-size:1.3rem;" class="text-nowrap mt-1">
                        ダウンロードしたい場合は
                    </p>
                    <p style="font-size:1.3rem;" class="text-nowrap">
                        写真を長押しして下さい
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div class="m-1 mt-5 mb-5 sticky-top p-1" style="text-align: right;">
        <a href="/site/wedding/guidehappouen" class="btn btn-pink mr-1" data-aos="fade-down" data-aos-delay="150" data-aos-duration="500" data-aos-offset="100">案内状へ戻る</a>
    </div>
    @elseif(session("simple_auth")[0] === "ゆかわじゅんじ" || session("simple_auth")[0] === "ゆかわあいこ")
    <section class="mt-4 p-4 mb-3">
        <div class="container mt-5 mb-2 bg-dairiseki_top p-2" data-aos="fade-down" data-aos-delay="200" data-aos-duration="3000" data-aos-offset="120">
            <div class="row align-items-center text-center">
                <div class="col-xs-12 order-lg-1 col-lg-12 pt-5 pb-4 family-msg">
                    <p class="mb-3">Dear</p>
                    <p style="font-size:1.3rem;" class="text-nowrap">
                        このページは
                    </p>
                    <p style="font-size:1.3rem;" class="text-nowrap">
                        湯川智子様のご家族しか
                    </p>
                    <p style="font-size:1.3rem;" class="text-nowrap">
                        閲覧できません
                    </p>
                    <p style="font-size:1.3rem;" class="text-nowrap mt-1">
                        ダウンロードしたい場合は
                    </p>
                    <p style="font-size:1.3rem;" class="text-nowrap">
                        写真を長押しして下さい
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div class="m-1 mt-5 mb-5 sticky-top p-1" style="text-align: right;">
        <a href="/site/wedding/guidehappouen" class="btn btn-pink mr-1">案内状へ戻る</a>
    </div>
    @elseif(session("simple_auth")[0] === "うえぶせあやこ")
    <section class="mt-4 p-4 mb-3">
        <div class="container mt-5 mb-2 bg-dairiseki_top p-2" data-aos="fade-down" data-aos-delay="200" data-aos-duration="3000" data-aos-offset="120">
            <div class="row align-items-center text-center">
                <div class="col-xs-12 order-lg-1 col-lg-12 pt-5 pb-4 family-msg">
                    <p class="mb-3">Dear</p>
                    <p style="font-size:1.6rem;">
                        上伏　智志　様
                    </p>
                    <p style="font-size:1.6rem;">
                        　　　綾子　様
                    </p>
                    <p style="font-size:1.6rem;">
                        　　　智遥　様
                    </p>
                    <p style="font-size:1.6rem;">
                        　　　智葉　様
                    </p>
                    <br>
                    <p style="font-size:1.3rem;" class="text-nowrap">
                        このページは
                    </p>
                    <p style="font-size:1.3rem;" class="text-nowrap">
                        湯川智子様のご家族しか
                    </p>
                    <p style="font-size:1.3rem;" class="text-nowrap">
                        閲覧できません
                    </p>
                    <p style="font-size:1.3rem;" class="text-nowrap mt-1">
                        ダウンロードしたい場合は
                    </p>
                    <p style="font-size:1.3rem;" class="text-nowrap">
                        写真を長押しして下さい
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div class="m-1 mt-5 mb-5 sticky-top p-1" style="text-align: right;">
        <a href="/site/wedding/guidehappouen" class="btn btn-pink mr-1">案内状へ戻る</a>
    </div>

    @else
    <section class="mt-3 p-4 pt-2">
        <div class="container box_msg p-5" style="box-shadow: 20px 20px 20px #ddd8d8;" data-aos="fade-down" data-aos-delay="200" data-aos-duration="3000" data-aos-offset="120">
            <div class="col-xs-12 order-lg-1 col-lg-12 text-center webfont" style="font-size:0.8rem; display:inline-block;">
                <p class="thanks-msg">
                    ご入力ありがとうございました
                </p>
                <p class="thanks-msg">
                    結婚式ではお会いできませんが
                </p>
                <p class="thanks-msg">
                    私たちのこれからを温かく見守ってくださるよう
                </p>
                <p class="thanks-msg" style="white-space: nowrap;">
                    お願い申し上げます
                </p>
                <br>
                <br>
                <p class="thanks-msg">
                    心ばかりではございますが
                </p>
                <p class="thanks-msg">
                    前撮りの写真をお送りいたします
                </p>
            </div>
        </div>
    </section>

    @if(session("simple_auth"))
    <div class="m-1 mt-5 mb-5 sticky-top p-1" style="text-align: right;">
        <a href="{{ route('site') }}" class="btn btn-pink">招待状へ戻る</a>
    </div>
    <p class="mb-2 h6 fontstyle" style="color: white; text-align:center; font-size:1.2rem;">ダウンロードしたい場合は</p>
    <p class="h6  mt-3 fontstyle" style="color: white; text-align:center; font-size:1.2rem;">写真を長押しして下さい</p>
    <br>
    <div class="arrow" style="margin:0 auto">
        <div class="down"> </div>
    </div>
    @endif
    @endif


    <section class="participation_image_size">
        <div class="container" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-offset="120">
            <div class="row align-items-center text-center">
                <div class="col-xs-12 order-lg-1 col-lg-12 bg-dairiseki-text">
                    <img id="image-main" class="notification_image_fluid" src="{{ asset('img/DSC_0731.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="participation_image_size">
        <div class="container" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-offset="120">
            <div class="row align-items-ce  nter text-center">
                <div class="col-xs-12 order-lg-1 col-lg-12 bg-dairiseki-text">
                    <img id="image-main" class="notification_image_fluid" src="{{ asset('img/DSC_0791.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="participation_image_size">
        <div class="container" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-offset="120">
            <div class="row align-items-center text-center">
                <div class="col-xs-12 order-lg-1 col-lg-12 bg-dairiseki-text">
                    <img id="image-main" class="notification_image_fluid" src="{{ asset('img/DSC_0817.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="participation_image_size">
        <div class="container" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-offset="120">
            <div class="row align-items-center text-center">
                <div class="col-xs-12 order-lg-1 col-lg-12 bg-dairiseki-text">
                    <img id="image-main" class="notification_image_fluid" src="{{ asset('img/DSC_0844.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="participation_image_size">
        <div class="container" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-offset="120">
            <div class="row align-items-center text-center">
                <div class="col-xs-12 order-lg-1 col-lg-12 bg-dairiseki-text">
                    <img id="image-main" class="notification_image_fluid" src="{{ asset('img/DSC_0874.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="participation_image_size">
        <div class="container" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-offset="120">
            <div class="row align-items-center text-center">
                <div class="col-xs-12 order-lg-1 col-lg-12 bg-dairiseki-text">
                    <img id="image-main" class="notification_image_fluid" src="{{ asset('img/DSC_0881.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="participation_image_size">
        <div class="container" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-offset="120">
            <div class="row align-items-center text-center">
                <div class="col-xs-12 order-lg-1 col-lg-12 bg-dairiseki-text">
                    <img id="image-main" class="notification_image_fluid" src="{{ asset('img/DSC_1002-min.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="participation_image_size">
        <div class="container" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-offset="120">
            <div class="row align-items-center text-center">
                <div class="col-xs-12 order-lg-1 col-lg-12 bg-dairiseki-text">
                    <img id="image-main" class="notification_image_fluid" src="{{ asset('img/DSC_1012.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="participation_image_size">
        <div class="container" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-offset="120">
            <div class="row align-items-center text-center">
                <div class="col-xs-12 order-lg-1 col-lg-12 bg-dairiseki-text">
                    <img id="image-main" class="notification_image_fluid" src="{{ asset('img/DSC_1031.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="participation_image_size">
        <div class="container" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-offset="120">
            <div class="row align-items-center text-center">
                <div class="col-xs-12 order-lg-1 col-lg-12 bg-dairiseki-text">
                    <img id="image-main" class="notification_image_fluid" src="{{ asset('img/DSC_1044-min.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="participation_image_size">
        <div class="container" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-offset="120">
            <div class="row align-items-center text-center">
                <div class="col-xs-12 order-lg-1 col-lg-12 bg-dairiseki-text">
                    <img id="image-main" class="notification_image_fluid" src="{{ asset('img/DSC_1062-min.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="participation_image_size">
        <div class="container" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-offset="120">
            <div class="row align-items-center text-center">
                <div class="col-xs-12 order-lg-1 col-lg-12 bg-dairiseki-text">
                    <img id="image-main" class="notification_image_fluid" src="{{ asset('img/DSC_1120.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="participation_image_size">
        <div class="container" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-offset="120">
            <div class="row align-items-center text-center">
                <div class="col-xs-12 order-lg-1 col-lg-12 bg-dairiseki-text">
                    <img id="image-main" class="notification_image_fluid" src="{{ asset('img/DSC_1169.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="participation_image_size">
        <div class="container" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-offset="120">
            <div class="row align-items-center text-center">
                <div class="col-xs-12 order-lg-1 col-lg-12 bg-dairiseki-text">
                    <img id="image-main" class="notification_image_fluid" src="{{ asset('img/DSC_1188.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('footer')

    <!-- Bootstrap core JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!--スクロールアニメーションを読み込み -->
    <script type="text/javascript" src="{{ asset('js/scroll.js') }}"></script>

</body>

</html>
