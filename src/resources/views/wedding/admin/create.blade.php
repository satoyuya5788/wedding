@extends('layout')
@section('title', '招待状：編集')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h2 class="text-center text-info">参加者追加登録</h2>
        <hr>
        <form method="POST" action="{{ route('admin.store') }}" onSubmit="return checkSubmit()">
            @csrf

            <div class="form-group mt-5 p-4 clearfix">
                <div class="row">
                    <div class="col-sm-6 text-center mt-3" style="float:left;">

                        <input class="form-control p-3" type="checkbox" name="listchart" value="1">
                        <strong class="col-6">席次表作成済み</strong>
                    </div>
                    <div class="col-sm-6 text-center mt-3" style="float:left;">
                        <span class="col-xs-6">￥</span>
                        <input class="col-xs-6" style="color:red; text-align:center; " type="text" name="present"
                            value="{{ old('present') }}">
                        <div>
                            <strong>お渡し代金</strong>
                        </div>
                    </div>
                    <span class="attention" id="e_com_0_0"></span>
                </div>
            </div>
            <hr>

            <div class="form-group text-center">
                <label for="memo" class="text-info h3">
                    メモ
                </label>
                <textarea id="memo" name="memo" class="form-control shadow-lg p-3 mb-5 rounded" rows="7"></textarea>
                @if ($errors->has('memo'))
                <div class="text-danger">
                    {{ $errors->first('memo') }}
                </div>
                @endif
            </div>

            <div class="form-group mt-5 clearfix">
                <div class="row ">
                    <div class="col-xs-6 col-lg-6 text-center attendance" style="float:left; text-align: center; ">
                        <input class="responsive_label p-3 form-control" type="radio" name="attend" value="1"
                            id="attendance" checked="">
                        <label class="label col-xs-6 col-lg-6" for="attendance">出席</label>
                    </div>
                    <div class="col-xs-6 col-lg-6 text-center absence" style="float:left; text-align: center;">
                        <input class="responsive_label p-3 form-control" type="radio" name="attend" value="0"
                            id="absence">
                        <label class="label col-xs-6 col-lg-6" for="absence">欠席</label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="form-group mt-5 clearfix">
                <div class="row ">
                    <div class="col-xs-6 col-lg-6 text-center man" style="float:left; text-align: center;">
                        <input class="responsive_label_human p-3 form-control" type="radio" name="human" value="1"
                            id="man" checked="">
                        <label class="label col-xs-6 col-lg-6" for="man">ゆうやの友人</label>
                    </div>
                    <div class="col-xs-6 col-lg-6 text-center woman" style="float:left; text-align: center;">
                        <input class="responsive_label_human p-3 form-control" type="radio" name="human" value="2"
                            id="woman">
                        <label class="label col-xs-6 col-lg-6" for="woman">さとこの友人</label>
                    </div>
                </div>
            </div>
            <hr>

            <div class="form-group mt-5 clearfix">
                <span class="badge badge-danger">必須</span>
                <label for="name" class=" ml-3">
                    名前
                </label>
                <div class="clearfix row">
                    <input id="name" name="name" class="form-control shadow-lg col-xs-6 bg-white rounded harf-input"
                        value="{{ old('name') }}" type="text" placeholder="(姓)">
                    <input id="name_low" name="name_low" class="form-control shadow-lg col-xs-5 ml-1 round harf-input"
                        value="{{ old('name_low') }}" type="text" placeholder="(名)">
                </div>
                @if ($errors->has('name'))
                <div class="text-danger">
                    {{ $errors->first('name') }}
                </div>
                @endif
                @if ($errors->has('name_low'))
                <div class="text-danger">
                    {{ $errors->first('name_low') }}
                </div>
                @endif
            </div>

            <div class="form-group mt-5 clearfix">
                <span class="badge badge-danger">必須</span>
                <label for="name_kana" class=" ml-3">
                    かな
                </label>
                <div class="clearfix row">
                    <input id="name_kana" name="name_kana"
                        class="form-control shadow-lg col-xs-6 bg-white rounded harf-input"
                        value="{{ old('name_kana') }}" type="text" placeholder="(せい)">
                    <input id="name_kana_low" name="name_kana_low"
                        class="form-control shadow-lg col-xs-5 ml-1 bg-white rounded harf-input"
                        value="{{ old('name_kana_low') }}" type="text" placeholder="(めい)">
                </div>
                @if ($errors->has('name_kana'))
                <div class="text-danger">
                    {{ $errors->first('name_kana') }}
                </div>
                @endif
                @if ($errors->has('name_kana_low'))
                <div class="text-danger">
                    {{ $errors->first('name_kana_low') }}
                </div>
                @endif
            </div>
            <div class="form-group mt-5">
                <span class="badge badge-danger">必須</span>
                <label for="post_num" class=" ml-3">
                    郵便番号
                </label>
                <div class="row">
                    <input id="post_num" name="post_num" class="form-control shadow-lg col-xs-12 bg-white rounded"
                        value="{{ old('post_num') }}" type="tel" placeholder="(1112222)">
                    <span class="" style="font-size:1.2rem;">※ハイフン（-） なしで入力して下さい</span>
                </div>
                @if ($errors->has('post_num'))
                <div class="text-danger">
                    {{ $errors->first('post_num') }}
                </div>
                @endif
            </div>
            <div class="form-group mt-5">
                <span class="badge badge-danger">必須</span>
                <label for="adress" class=" ml-3">
                    住所
                </label>
                <div class="row">
                    <input id="adress" name="adress" class="form-control shadow-lg col-xs-12  bg-white rounded"
                        value="{{ old('adress') }}" type="text" placeholder="都道府県　市町村　番地">
                </div>
                @if ($errors->has('adress'))
                <div class="text-danger">
                    {{ $errors->first('adress') }}
                </div>
                @endif
            </div>
            <div class="form-group mt-5">
                <label for="building" class="">
                    建物名
                </label>
                <div class="row">
                    <input id="building" name="building" class="form-control shadow-lg col-xs-12  bg-white rounded"
                        value="{{ old('building') }}" type="text" placeholder="アパート・マンション名・その他">
                </div>
                @if ($errors->has('building'))
                <div class="text-danger">
                    {{ $errors->first('building') }}
                </div>
                @endif
            </div>
            <div class="form-group mt-5">
                <span class="badge badge-danger">必須</span>
                <label for="phone_num" class=" ml-3">
                    電話番号
                </label>
                <div class="row">
                    <input id="phone_num" name="phone_num" placeholder="11122223333"
                        class="form-control shadow-lg col-xs-12  bg-white rounded" value="{{ old('phone_num') }}"
                        type="tel">
                    <span class="" style="font-size:1.2rem;">※ハイフン（-） なしで入力して下さい</span>
                </div>
                @if ($errors->has('phone_num'))
                <div class="text-danger">
                    {{ $errors->first('phone_num') }}
                </div>
                @endif
            </div>

            <div class="form-group mt-5 clearfix">
                <label for="name" class="">
                    お連れ様のお名前
                </label>
                <div class="clearfix row">
                    <input id="partner_name_one" name="partner_name_one"
                        class="form-control shadow-lg col-xs-3 bg-white rounded one-third-input"
                        value="{{ old('partner_name_one') }}" type="text" placeholder="佐藤太郎">
                    <input id="partner_name_two" name="partner_name_two"
                        class="form-control shadow-lg col-xs-3 ml-1 round one-third-input"
                        value="{{ old('partner_name_two') }}" type="text" placeholder="佐藤花子">
                    <input id="partner_name_three" name="partner_name_three"
                        class="form-control shadow-lg col-xs-3 ml-1 round one-third-input"
                        value="{{ old('partner_name_three') }}" type="text" placeholder="佐藤一郎">
                </div>
                <span class="" style="font-size:1.2rem;">※お連れ様がいらっしゃる場合はお名前をご記入下さい</span>
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
                <label for="allergies" class="">
                    アレルギー
                </label>
                <div class="row">
                    <input id="allergies" name="allergies" class="form-control shadow-lg col-xs-12 bg-white rounded "
                        value="{{ old('allergies') }}" type="text" placeholder="(例)　本人:リンゴ,　一郎:イチゴ">
                    <span class="" style="font-size:1.2rem;">※お連れ様の分も記入して下さい</span>
                </div>
                @if ($errors->has('allergies'))
                <div class="text-danger">
                    {{ $errors->first('allergies') }}
                </div>
                @endif
            </div>

            <div class="form-group mt-5">
                <label for="content" class="">
                    メッセージ
                </label>
                <textarea id="content" name="content" class="form-control shadow-lg p-3  bg-white rounded"
                    rows="6">{{ old('content') }}</textarea>
                @if ($errors->has('content'))
                <div class="text-danger">
                    {{ $errors->first('content') }}
                </div>
                @endif
            </div>
            <div class="form-group m-5 text-center pb-1">
                <button type="submit" class="btn btn-info">
                    送信する
                </button>
            </div>
        </form>
    </div>
</div>
<script>
function checkSubmit() {
    if (window.confirm('更新してよろしいですか？')) {
        return true;
    } else {
        return false;
    }
}
</script>
@endsection