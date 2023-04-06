<!DOCTYPE html>
<html lang="ja">
@include('site_header')

<!-- 案内状専用のCSS読み込み！桜降らせるアニメーション！ -->
<link href="{{ asset('css/bloom_guide.css') }}" rel="stylesheet">
<!-- 携帯用のCSS -->
<link rel="stylesheet" href="{{ asset('css/media.css') }}" media="screen and (max-width:700px)">

<body class="body_guide cherry-blossom-container">

    <section class="">
        <div class="row bg-top2 image-fluid">
            <div class="text-center text-white p-5 mt-2 guide_main_box" style="font-size: 1.2rem; ">
                <div id="guide_msg">
                    <span class="text-wrapper">
                        <p id="display_none" class="mb-2 display_none"><span class="letters fontstyle">Thank You</span>
                        </p>
                        <p class="mt-2 display_none"><span class="letters fontstyle">会える日を楽しみにしています</span></p>
                </div>
            </div>
        </div>
    </section>

    @if(session("simple_auth"))
    <div class="m-5 p-1" style="text-align: center;">
        <a href="{{ route('site') }}" class="btn btn-pink text-nowrap" data-aos="fade-down" data-aos-delay="300"
            data-aos-duration="2000" data-aos-offset="120">招待状へ戻る</a>
    </div>
    @endif

    <div class="m-1 sticky-top p-1" style="text-align: left;">
        <div class="container  bg_guide_show_top p-2" data-aos="slide-right" data-aos-delay="200"
            data-aos-duration="1200" data-aos-offset="100">
            <div class="row text-left">
                <div class="col-xs-12 order-lg-1 col-lg-12 show-msg">
                    <p class="font_size_small">
                        @if(\App\Models\Wedding::getMessageCategoryFlg() === 'parent')

                            当日は<span class="font-weight-bold">午前9時15分迄</span>に
                            <br>
                            <span class="font-weight-bold">本館4階ご親族控え室</span>へ
                            </br>
                            お越しください

                            @elseif (\App\Models\Wedding::getMessageCategoryFlg() === 'relatives')

                            ご親族の皆様は<br>
                            当日 <span class="font-weight-bold">午前9時30分迄</span>に
                            <br>
                            <span class="font-weight-bold">本館4階ご親族控え室</span>へ
                            </br>
                            お越しください

                            @else

                            当日は<span class="font-weight-bold">午前10時00分迄</span>に
                            <br>
                            <span class="font-weight-bold">本館4階ご来賓控え室</span>へ
                            </br>
                            お越しください

                        @endif
                </div>
                </p>
            </div>
        </div>
    </div>
    </div>


    <section class="mt-4 p-4">
        <div class="container bg_guide_1 p-2" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000"
            data-aos-offset="120">
            <div class="row align-items-center text-center">
                <div class="col-xs-12 order-lg-1 col-lg-12 bg-dairiseki-text pt-4 pb-4">
                    <p>
                    <div class="event-msg-1 gold text-nowrap">WEDDING CEREMONY
                        <br>
                        <br>
                        <strogn style="font-size: 2.2rem;">挙式</strogn>
                        <br>
                        <br>
                        <strogn style="font-size: 2.0rem;">会場：5F セイジ</strogn>
                    </div>
                    </p>
                    <img src="{{ asset('img/松の葉の無料アイコン_1.svg') }}" alt="" width="30" class="mt-4">
                    <p style="font-size:1.8rem" class="mt-3">2022.5.29 (日)</p>
                    <p style="font-size:2.0rem">10:15</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-4 p-4 mb-5">
        <div class="container mt-5 mb-5 bg_guide_2 p-2" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000"
            data-aos-offset="120">
            <div class="row align-items-center text-center">
                <div class="col-xs-12 order-lg-1 col-lg-12 pt-4 pb-4">
                    <p>
                    <div class="event-msg-1 pink_gold">WEDDING RECEPTION
                        <br>
                        <br>
                        <strong style="font-size: 2.2rem;">披露宴</strong>
                        <br>
                        <br>
                        <strogn style="font-size: 2.0rem;">会場：ニュイ</strogn>
                    </div>
                    </p>
                    <img src="{{ asset('img/笹の葉のアイコン_1.svg') }}" alt="" width="30" class="mt-4">
                    <p style="font-size:1.8rem" class="mt-3">2022.5.29 (日)</p>
                    <p style="font-size:2.0rem">11:30</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5 p-4 mb-4">
        <div class="container bg-countdown" data-aos="fade-down" data-aos-delay="200" data-aos-duration="1000"
            data-aos-offset="120">
            <div class="row align-items-center text-center">
                <div class="col-xs-12 order-lg-1 col-lg-12 my-3 bg-countdown-text" style="font-style: italic;">
                    @if(date('Y/m/d H:i:s' ) <= date('2022/05/29 00:00:00')) <span
                        style=" font-size: 2.5rem; white-space: nowrap;">Count Down</span>
                        <br>
                        <br>
                        <span style="font-size: 1.9rem;">To 2022.5.29</span>
                        <br>
                        <img src="{{ asset('img/event_ttl_bg01.svg') }}" alt="" class="mt-3" width="30">
                        <br>
                        <div class="p-2" style="text-align: center; white-space: nowrap; width: 100%">
                            <div style="font-size:1.5rem"><span style=" font-size: 2.5rem;" class="countDownText"
                                    id="countDown_date"></span>days
                                <span style="font-size: 2.0rem;" class="countDownText"
                                    id="countDown_date_hours"></span>hours
                            </div>
                        </div>
                        <div class="mb-4" style="text-align: center; white-space: nowrap;">
                            <div style=" font-size:1rem"><span style="font-size: 2.0rem;" class="countDownText"
                                    id="countDown_date_minutes"></span>minutes
                                <span style="font-size: 2.0rem;" class="countDownText"
                                    id="countDown_date_seconds"></span>seconds
                            </div>
                        </div>
                        @else
                        <span style="font-size: 3rem; white-space: nowrap;">count down</span>
                        <br>
                        <br>
                        <span style="font-size: 2rem;">to 2022.5.29</span>
                        <br>
                        <br>
                        <img src="{{ asset('img/cooltext405310273163516.png') }}" alt="" ><br>
                        <img src="{{ asset('img/cooltext405310163566475.png') }}" alt="">
                        <br>
                        <br>
                        @endif
                </div>
            </div>
        </div>
    </section>

    <section class="mt-2 p-4 mb-5" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000"
        data-aos-offset="400">
        <div class="container mt-5 bg_guide_3 p-4">
            <div class="row align-items-center text-center">
                <div class="col-xs-12 order-lg-1 col-lg-12 bg-map2-text dark_gold"
                    style="text-align: left; margin:0 auto;">
                    <p class="fontstyle mb-5" style="font-size: 1.8rem; text-align:center;">～式場案内～</p>
                    <p class="fontstyle" style="font-size: 1.6rem;">八芳園</p>
                    <br>
                    <p class="fontstyle" style="font-size: 1.2rem; white-space: nowrap;">東京都港区白金台1-1-1</p>
                    <br>
                    <p class="fontstyle" style="white-space: nowrap; font-size:1.6rem;">0570-064-128(代表)</p>
                    <br>
                    <a href="https://happo-en.com/banquet/about/" target="_blank" rel="noopener noreferrer"
                        class="p-2 h4 text_link_under" style="white-space: nowrap; text-align:center;">
                        <p class=" mb-5" style="text-align:center; font-size: 1.5rem;">公式ホームページへ</p>
                    </a>
                    <br>
                    地図
                    <div><iframe src="https://www.google.com/maps/d/embed?mid=1fqhy8ZLBTlRoZvouSREKg-eC2QQ&hl=ja"
                            class="w-100 m-1" style="height:300px"></iframe></div>
                    <p class="fontstyle mt-4" style="text-align:center; font-size:1.2rem;">
                        【電車でお越しの方】
                    </p>
                    <p class="mb-4 mt-1 fontstyle" style="text-align:center; font-size:1.2rem;">
                        <span class="text-nowrap">最寄駅は<span class="font-weight-bold" style="font-size:1.32rem;">白金台駅</span>になります</span><br>
                        <span class="text-nowrap">２番出口を出るとすぐ左側に</span><br>
                        <span class="text-nowrap">「八芳園」と書いてある</span><br>
                        <span class="text-nowrap">大きな目印が見えます</span><br>
                        <span class="text-nowrap">徒歩２分程で到着します</span>
                    </p>
                    <p class="mb-3 h6 fontstyle mt-4" style="text-align:center; font-size:1.2rem;">
                        アクセスの詳細は
                        <br>
                        <span class="text-nowrap">下記URLをご覧下さい</span>
                    </p>
                    <!-- <p class="h6 mb-4 mt-3 fontstyle" style="text-align:center; font-size:1.2rem;">
                        車 電車
                        <br>
                        <span class="text-nowrap">バス タクシー等で</span>
                        <br>
                        <span class="text-nowrap">ご来場の方</span>
                    </p> -->
                    <div class="text-center">
                        <a href="https://happo-en.com/banquet/access/" target="_blank" rel="noopener noreferrer"
                            class="btn btn-blue rounded-pill h3 pl-4 pr-4"
                            style="white-space: nowrap; font-size:1.4rem; font-style:italic;">
                            アクセスの詳細
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if(mb_substr(session("simple_auth")[2], 0, 1) === '1')
    <section class="mt-4 p-4 mb-3">
        <div class="container mt-5 mb-2 bg_guide_family p-2" data-aos="fade-up" data-aos-delay="200"
            data-aos-duration="1000" data-aos-offset="120">
            <div class="row align-items-center text-center">
                <div class="col-xs-12 order-lg-1 col-lg-12 p-2 family-msg">
                    <p style="font-size:1.5rem;">ご家族の皆様へ</p>
                    <img src="{{ asset('img/笹の葉のフリーアイコン.svg') }}" alt="" class="m-3" width="25">
                    <p style="font-size:1.3rem;">
                        前撮りの写真を
                    </p>
                    <p style="font-size:1.3rem;">
                        お送り致します
                    </p>
                    <br>
                    <p style="font-size:1.3rem;">
                        下のボタンより
                    </p>
                    <p style="font-size:1.3rem;">
                        閲覧して下さい
                    </p>
                    <div class="m-4 p-1" style="text-align: center;">
                        <a href="/site/wedding/imagehappouen" class="btn btn-blue text-nowrap">前撮りの写真へ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    <section class="mt-4 p-4 mb-3">
        <div class="container mt-5 mb-2 bg_guide_show p-2" data-aos="fade-up" data-aos-delay="200"
            data-aos-duration="1000" data-aos-offset="120">
            <div class="row align-items-center text-center">
                <div class="col-xs-12 order-lg-1 col-lg-12 pt-4 pb-4 show-msg">
                    <p style="font-size:1.5rem;">ご登録情報の確認</p>
                    <!-- <img src="{{ asset('img/竹アイコン1.svg') }}" alt="" class="m-5" width="25"> -->
                    <div class="p-1 mt-3" style="text-align: center;">
                        <a href="{{ route('showregister') }}" class="btn btn-green text-nowrap">ご登録情報へ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if(session("simple_auth"))
    <div class="m-5 p-1" style="text-align: center;">
        <a href="{{ route('site') }}" class="btn btn-pink text-nowrap">招待状へ戻る</a>
    </div>
    @endif


    <section style="border: 5px double white;" class="m-3 p-2">
        <div class="col-xs-12 order-lg-1 col-lg-12 bg-map2-text" style="margin:0 auto;">
            <p class="mb-3 fontstyle guide_corona_message--title">※新型コロナウイルスの対策</p>
            <p class="mb-2 fontstyle guide_corona_message">
                当日会場では以下の対策を徹底してまいります
            </p>

            <div class="index_corona_attension">
                1 アルコール消毒液の設置<br>
                2 館内消毒・換気・席の配置<br>
                3 検温・検査・マスクの着用<br><br>
            </div>


            <p class="mb-2 h6 fontstyle guide_corona_message">
                また状況の変化に伴う<br>延期等のご連絡は<br>
                個別に電話・LINE等で<br>ご連絡申し上げる予定です
            </p>
        </div>
    </section>

    <!-- Footer -->
    @include('footer')

    <!--桜降らせるJSを読み込み -->
    <script type="text/javascript" src="{{ asset('js/bloom_guide.js') }}"></script>

    <!--スクロールアニメーションを読み込み -->
    <script type="text/javascript" src="{{ asset('js/scroll.js') }}"></script>

    <!--countdownを読み込み -->
    <script type="text/javascript" src="{{ asset('js/countdown.js') }}"></script>

    <!--ヘッダー画像のテキストアニメーションを読み込み -->
    <script type="text/javascript" src="{{ asset('js/animation_for_guide.js') }}"></script>

</body>

</html>