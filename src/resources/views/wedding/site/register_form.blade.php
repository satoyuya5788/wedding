<section class="p-2 mb-5" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000" data-aos-offset="120">
    <div class="container mt-5 w-100 h-100">

        <div class="col-xs-12 order-lg-1 col-lg-12 bg-white" style="box-shadow: 20px 10px 20px #cccccc; font-size:1.5rem">
            <div class="register_input_row">
                <div class="col-xs-12 text-center col-lg-12 mt-5">
                    <p class="h4 register-msg dark_gold">
                        お手数ですが出席情報を
                        <br>
                        ご入力して下さい
                        <br>
                        <br>
                        <span class="strong-msg">2022.4.15</span>
                        <br>
                        <br>
                        までにご返信を
                        <br>
                        お願い申し上げます
                    </p>
                </div>
            </div>

            <hr>

            <form method="POST" action="{{ route('store') }}" onsubmit="return false;">
                @csrf
                <div class="form-group mt-2 clearfix">
                    <span class="badge badge-danger m-2">必須</span>
                    <div class="row">
                        <div class=" col-xs-6 col-lg-6 text-center attendance mb-5" style="float:left; text-align: center; ">
                            <input class="responsive_label p-3 form-control" type="radio" name="attend" value="1" id="attendance" checked="">
                            <label class="label col-xs-6 col-lg-6" for="attendance" style="font-size: 1.7rem;">出席<span class="en_attend_decline">attend</span></label>
                        </div>
                        <div class="col-xs-6 col-lg-6 text-center absence" style="float:left; text-align: center;">
                            <input class="responsive_label p-3 form-control" type="radio" name="attend" value="0" id="absence">
                            <label class=" label col-xs-6 col-lg-6" for="absence">欠席<span class="en_attend_decline">decline</span></label>
                        </div>
                    </div>
                    <div class="text-center mt-3" style="font-size: 0.9rem;">※必ずどちらかを選択して下さい</div>
                </div>
                <hr>
                <div class="form-group mt-2 clearfix">
                    <span class="badge badge-danger m-2">必須</span>
                    <div class="row">
                        <div class=" col-xs-6 col-lg-6 text-center man mb-5" style="float:left; text-align: center;">
                            <input class="responsive_label_human p-3 form-control" type="radio" name="human" value="1" id="man" checked="">
                            <label class="label col-xs-6 col-lg-6" for="man">新郎のご友人様<span class="en_attend_decline" style="font-size: 1.5rem;">佐藤 佑也</span></label>
                        </div>
                        <div class="col-xs-6 col-lg-6 text-center woman" style="float:left; text-align: center;">
                            <input class="responsive_label_human p-3 form-control" type="radio" name="human" value="2" id="woman">
                            <label class="label col-xs-6 col-lg-6" for="woman">新婦のご友人様<span class="en_attend_decline" style="font-size: 1.5rem;">湯川智子</span></label>
                        </div>
                    </div>
                    <div class="text-center mt-3" style="font-size: 0.9rem;">※必ずどちらかを選択して下さい</div>
                </div>
                <hr>

                <div class="form-group mt-5 clearfix">
                    <span class="badge badge-danger">必須</span>
                    <label for="name" class="ml-2" style="font-size:1.3rem;">
                        名前(漢字)
                    </label>
                    <div class="clearfix register_input_row">
                        <input id="name" name="name" class="form-control shadow-lg col-xs-6 bg-white rounded harf-input" value="{{ old('name') }}" type="text" placeholder="(姓)">
                        <input id="name_low" name="name_low" class="form-control shadow-lg col-xs-5 ml-1 round harf-input" value="{{ old('name_low') }}" type="text" placeholder="(名)">
                    </div>
                    @if ($errors->has('name'))
                    <div class="text-danger" style="font-size:1.1rem;">
                        {{ $errors->first('name') }}
                    </div>
                    @endif
                    @if ($errors->has('name_low'))
                    <div class="text-danger" style="font-size:1.1rem;">
                        {{ $errors->first('name_low') }}
                    </div>
                    @endif
                </div>

                <div class="form-group mt-5 clearfix">
                    <span class="badge badge-danger">必須</span>
                    <label for="name_kana" class=" ml-2" style="font-size:1.3rem;">
                        名前(かな)
                    </label>
                    <div class="clearfix register_input_row">
                        <input id="name_kana" name="name_kana" class="form-control shadow-lg col-xs-6 bg-white rounded harf-input" value="{{ old('name_kana') }}" type="text" placeholder="(せい)">
                        <input id="name_kana_low" name="name_kana_low" class="form-control shadow-lg col-xs-5 ml-1 bg-white rounded harf-input" value="{{ old('name_kana_low') }}" type="text" placeholder="(めい)">
                    </div>
                    @if ($errors->has('name_kana'))
                    <div class="text-danger" style="font-size:1.1rem;">
                        {{ $errors->first('name_kana') }}
                    </div>
                    @endif
                    @if ($errors->has('name_kana_low'))
                    <div class="text-danger" style="font-size:1.1rem;">
                        {{ $errors->first('name_kana_low') }}
                    </div>
                    @endif
                </div>
                <div class="form-group mt-5">
                    <span class="badge badge-danger">必須</span>
                    <label for="post_num" class=" ml-2" style="font-size:1.3rem;">
                        郵便番号
                    </label>
                    <div class="register_input_row">
                        <input id="post_num" name="post_num" class="form-control shadow-lg col-xs-12 bg-white rounded" value="{{ old('post_num') }}" type="tel" placeholder="1112222">
                        <span class="" style="font-size:1.0rem;">※ハイフン(-)なしで入力して下さい</span>
                    </div>
                    @if ($errors->has('post_num'))
                    <div class="text-danger" style="font-size:1.1rem;">
                        {{ $errors->first('post_num') }}
                    </div>
                    @endif
                </div>
                <div class="form-group mt-5">
                    <span class="badge badge-danger">必須</span>
                    <label for="adress" class=" ml-2" style="font-size:1.3rem;">
                        住所
                    </label>
                    <div class="register_input_row">
                        <input id="adress" name="adress" class="form-control shadow-lg col-xs-12  bg-white rounded" value="{{ old('adress') }}" type="text" placeholder="東京都港区白金台1-1-1">
                    </div>
                    @if ($errors->has('adress'))
                    <div class="text-danger" style="font-size:1.1rem;">
                        {{ $errors->first('adress') }}
                    </div>
                    @endif
                </div>
                <div class="form-group mt-5">
                    <span class="badge badge-secondary">任意</span>
                    <label for="building" class="ml-2" style="font-size:1.3rem;">
                        建物名
                    </label>
                    <div class="register_input_row">
                        <input id="building" name="building" class="form-control shadow-lg col-xs-12  bg-white rounded" value="{{ old('building') }}" type="text" placeholder="アパート・マンション名・その他">
                    </div>
                    @if ($errors->has('building'))
                    <div class="text-danger" style="font-size:1.1rem;">
                        {{ $errors->first('building') }}
                    </div>
                    @endif
                </div>
                <div class="form-group mt-5">
                    <span class="badge badge-danger">必須</span>
                    <label for="phone_num" class=" ml-2" style="font-size:1.3rem;">
                        電話番号
                    </label>
                    <div class="register_input_row">
                        <input id="phone_num" name="phone_num" placeholder="11122223333" class="form-control shadow-lg col-xs-12  bg-white rounded" value="{{ old('phone_num') }}" type="tel">
                        <span class="" style="font-size:1.0rem;">※ハイフン(-)なしで入力して下さい</span>
                    </div>
                    @if ($errors->has('phone_num'))
                    <div class="text-danger" style="font-size:1.1rem;">
                        {{ $errors->first('phone_num') }}
                    </div>
                    @endif
                </div>

                <div class="form-group mt-5 clearfix">
                    <span class="badge badge-secondary">任意</span>
                    <label for="name" class="ml-2" style="font-size:1.3rem;">
                        お連れ様のお名前(漢字)
                    </label>
                    <div class="register_input_row">
                        <input id="partner_name_one" name="partner_name_one" class="mb-1 form-control shadow-lg col-xs-3 bg-white rounded one-third-input" value="{{ old('partner_name_one') }}" type="text" placeholder="佐藤一郎">
                        <input id="partner_name_two" name="partner_name_two" class="mb-1 form-control shadow-lg col-xs-3 round one-third-input" value="{{ old('partner_name_two') }}" type="text" placeholder="佐藤二郎">
                        <input id="partner_name_three" name="partner_name_three" class="mb-1 form-control shadow-lg col-xs-3 round one-third-input" value="{{ old('partner_name_three') }}" type="text" placeholder="佐藤三郎">
                    </div>
                    <div class="" style="font-size:1.0rem;">※お連れ様がいらっしゃる場合はお名前を漢字でご記入下さい</div>
                    @if ($errors->has('partner_name_one'))
                    <div class="text-danger" style="font-size:1.1rem;">
                        {{ $errors->first('partner_name_one') }}
                    </div>
                    @endif
                    @if ($errors->has('partner_name_two'))
                    <div class="text-danger" style="font-size:1.1rem;">
                        {{ $errors->first('partner_name_two') }}
                    </div>
                    @endif
                    @if ($errors->has('partner_name_three'))
                    <div class="text-danger" style="font-size:1.1rem;">
                        {{ $errors->first('partner_name_three') }}
                    </div>
                    @endif
                </div>

                <div class="form-group mt-5">
                    <span class="badge badge-secondary">任意</span>
                    <label for="allergies" class="ml-2" style="font-size:1.3rem;">
                        アレルギー
                    </label>
                    <div class="register_input_row">
                        <input id="allergies" name="allergies" class="form-control shadow-lg col-xs-12 bg-white rounded " value="{{ old('allergies') }}" type="text" placeholder="(例)　本人:リンゴ,　一郎:イチゴ">
                        <div class="" style="font-size:1.0rem;">
                            ※お連れ様の分も記入して下さい<br>
                            <span class="allergy_attendation">
                                アレルギーがある方には別途で専用のURLをお送りいたします</span>
                        </div>
                    </div>
                    @if ($errors->has('allergies'))
                    <div class="text-danger" style="font-size:1.1rem;">
                        {{ $errors->first('allergies') }}
                    </div>
                    @endif
                </div>

                <div class="form-group mt-5">
                    <span class="badge badge-secondary">任意</span>
                    <label for="content" class="ml-2" style="font-size:1.3rem;">
                        メッセージ
                    </label>
                    <textarea id="content" name="content" class="form-control shadow-lg p-3  bg-white rounded" rows="6">{{ old('content') }}</textarea>
                    @if ($errors->has('content'))
                    <div class="text-danger" style="font-size:1.1rem;">
                        {{ $errors->first('content') }}
                    </div>
                    @endif
                </div>

                <div class="form-group m-5 text-center pb-1">
                    <button type="button" class="btn btn-blue" onclick="if(confirm('この内容で送信してよろしいですか？')) {submit();}">
                        送信する
                    </button>
                </div>
            </form>
            <hr>
            <p class="common_font my-1" style="font-family: 'shippori mincho b1', serif;">※一度送信してしまうとご登録内容を修正できなくなります</p>
            <p class="common_font" style="font-family: 'shippori mincho b1', serif;">
                ※ご不明点またはご登録内容の訂正がしたい場合はLINEや電話にてご連絡下さい</p><br>
        </div>
    </div>
</section>
