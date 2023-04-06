<!DOCTYPE html>
<html lang="ja">
@include('site_header')

<body class="body_index">
    <section class="p-4 pb-5">
        <div class="container mt-5 bg-dairiseki_top" data-aos="fade-down" data-aos-delay="300" data-aos-duration="3000" data-aos-offset="120">
            <div class="row align-items-center text-center pt-2">
                <div class="col-xs-12 order-lg-1 col-lg-12 ">

                    @if ($errors->any())
                    <div class="pt-3" style="color:red; font-size:1.0rem;">
                        @foreach ($errors->all() as $error)
                        {{ $error }}<br>
                        @endforeach
                    </div>
                    @endif

                    <form method="post" action="{{ url('wedding') }}">
                        @csrf

                        <div class="form-group mt-5">
                            <h3 class="mb-3"><span class="event-msg pink_gold" style="font-style: italic; font-size: 1.8rem;">~ 招待状 ~</span></h3>
                            <div class="login_input m-auto">
                                <div for="name" class="text-left" style="font-size:1.6rem;">
                                    お名前(ひらがな)
                                </div>
                                <input autocomplete="off" id="loginusername" name="loginusername" class="form-control shadow-lg bg-white rounded" value="{{ old('loginusername') }}" style="text-align: center;" type="text" placeholder="例)さとうゆうや">
                                <div class="row text-left ml-1">
                                    <p class="webfont" style="font-size:1.1rem;">※フルネームで入力して下さい</p>
                                </div>
                                <div class="text-left mt-2" style="font-size:1.6rem;">
                                    パスワード
                                </div>
                                <input autocomplete="off" id="password" name="password" class="form-control shadow-lg bg-white rounded" style="text-align: center;" type="tel" placeholder="0000">
                                <!-- <div class="row text-left ml-1">
                                    <p class="webfont" style="font-size:1.1rem;">※半角数値で入力してください</p>
                                </div> -->
                            </div>
                        </div>

                        <div class="form-group m-5 text-center pb-1">
                            <button type="submit" class="btn btn-primary" style="box-shadow: 8px 8px 8px #ffcdf3;">
                                ログイン
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('footer')

    <!-- 背景に星を降らせるアニメーションを読み込み -->
    <script type="text/javascript" src="{{ asset('js/star.js') }}"></script>

    <!--スクロールアニメーションを読み込み -->
    <script type="text/javascript" src="{{ asset('js/scroll.js') }}"></script>

</body>

</html>
