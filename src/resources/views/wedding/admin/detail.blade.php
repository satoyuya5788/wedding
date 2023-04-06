@extends('layout')
@section('title', '招待状：詳細')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h2 style="text-align: center;">出席情報詳細</h2>
        <div class="m-5 text-right">
            <a class="btn btn-secondary" href="{{ route('list') }}">
                戻る
            </a>
        </div>
        <hr>
        @csrf
        <div class="form-group mt-5 p-4 clearfix">
            <div class="row ">
                <div class="col-sm-6 text-center mt-3" style="float:left;">
                    @if($wedding->listchart)
                    <strong style="font-size:2rem; color:blue;">〇</strong>
                    @else
                    <strong style="font-size:2rem;">未</strong>
                    @endif
                    <div><strong class="col-6">席次表作成済み</strong></div>
                </div>
                <div class="col-sm-6 text-center mt-4" style="float:left;">
                    <span class="col-xs-6">￥</span>
                    <input class="col-xs-6" style="color:red; text-align:center; " type="text" name="present"
                        value="{{ $wedding->present }}" disabled>
                    <div>
                        <strong>お渡し代金</strong>
                    </div>

                </div>
                <span class="attention" id="e_com_0_0"></span>
            </div>
        </div>
        <hr class="mt-5">
        <div class="form-group text-center">
            <label for="memo" class="text-info h3">
                メモ
            </label>
            <textarea disabled id="memo" name="memo" class="form-control shadow-lg p-3 mb-5 rounded"
                rows="7">{{ $wedding->memo }}</textarea>
            @if ($errors->has('memo'))
            <div class="text-danger">
                {{ $errors->first('memo') }}
            </div>
            @endif
        </div>

        <div class="form-group mt-5 clearfix">
            <div class="row ">
                <div class="col-sm-6 text-center" style="float:left;">

                    @if($wedding->attend)
                    <input class="form-control p-3" type="radio" name="attend" value="1" checked="true">
                    <strong class="col-6">出席</strong>
                </div>
                <div class="col-sm-6 text-center" style="float:left;">
                    <input class="form-control p-3" type="radio" name="attend" value="0" disabled>
                    <strong class="col-6">欠席</strong>
                    @else
                    <input class="form-control p-3" type="radio" name="attend" value="1" disabled>
                    <strong class="col-6">出席</strong>
                </div>
                <div class="col-sm-6 text-center" style="float:left;">
                    <input class="form-control p-3" type="radio" name="attend" value="0" checked="true">
                    <strong class="col-6">欠席</strong>
                    @endif
                </div>
                <span class="attention" id="e_com_0_0"></span>
            </div>
        </div>
        <hr>

        <div class="form-group mt-5 clearfix">
            <div class="row ">
                <div class="col-sm-6 text-center" style="float:left;">
                    @if($wedding->human == 1)
                    <input class=" p-3 form-control" type="radio" name="human" value="1" checked="true">
                    <strong class="col-6">新郎のご友人様</strong>
                </div>
                <div class="col-sm-6 text-center" style="float:left;">
                    <input class=" p-3 form-control" type="radio" name="human" value="2" disabled>
                    <strong class="col-6">新婦のご友人様</strong>
                    @else
                    <input class=" p-3 form-control" type="radio" name="human" value="1" disabled>
                    <strong class="col-6">新郎のご友人様</strong>
                </div>
                <div class="col-sm-6 text-center" style="float:left;">
                    <input class=" p-3 form-control" type="radio" name="human" value="2" checked="true">
                    <strong class="col-6">新婦のご友人様</strong>
                    @endif
                </div>
                <span class="attention" id="e_com_0_0"></span>
            </div>
        </div>
        <hr>

        <div class="form-group mt-5 clearfix">
            <span class="badge badge-danger">必須</span>
            <label for="name" class="text-info ml-3">
                名前
            </label>
            <div class="clearfix">
                <input disabled id="name" name="name" class="form-control shadow-lg p-3 rounded harf-input"
                    value="{{ $wedding->name }}" type="text" placeholder="(姓)">
                <input disabled id="name_low" name="name_low" class="form-control shadow-lg p-3 ml-1 round harf-input"
                    value="{{ $wedding->name_low }}" type="text" placeholder="(名)">
            </div>
            @if ($errors->has('name'))
            <div class="text-danger">
                {{ $errors->first('name') }}
            </div>
            @endif
        </div>

        <div class="form-group mt-5 clearfix">
            <span class="badge badge-danger">必須</span>
            <label for="name_kana" class="text-info ml-3">
                名前(かな)
            </label>
            <div class="clearfix">
                <input disabled id="name_kana" name="name_kana" class="form-control shadow-lg p-3 rounded harf-input"
                    value="{{ $wedding->name_kana }}" type="text" placeholder="(せい)">
                <input disabled id="name_kana_low" name="name_kana_low"
                    class="form-control shadow-lg p-3-5 ml-1 rounded harf-input" value="{{ $wedding->name_kana_low }}"
                    type="text" placeholder="(めい)">
            </div>
            @if ($errors->has('name_kana'))
            <div class="text-danger">
                {{ $errors->first('name_kana') }}
            </div>
            @endif
        </div>
        <div class="form-group mt-5">
            <span class="badge badge-danger">必須</span>
            <label for="post_num" class="text-info ml-3">
                〒:郵便番号 <span class="ml-5" style="font-size:0.8em;">※ハイフン（-） なしで入力して下さい</span>
            </label>
            <input disabled id="post_num" name="post_num" class="form-control shadow-lg rounded"
                value="{{ $wedding->post_num }}" type="tel" placeholder="(1112222)">
            @if ($errors->has('post_num'))
            <div class="text-danger">
                {{ $errors->first('post_num') }}
            </div>
            @endif
        </div>
        <div class="form-group mt-5">
            <span class="badge badge-danger">必須</span>
            <label for="adress" class="text-info ml-3">
                住所
            </label>
            <input disabled id="adress" name="adress" class="form-control shadow-lg p-3 mb-5 rounded"
                value="{{ $wedding->adress }}" type="text" placeholder="都道府県　市町村　番地">
            @if ($errors->has('adress'))
            <div class="text-danger">
                {{ $errors->first('adress') }}
            </div>
            @endif
        </div>
        <div class="form-group mt-5">
            <label for="building" class="text-info">
                建物名
            </label>
            <input disabled id="building" name="building" class="form-control shadow-lg p-3 mb-5 rounded"
                value="{{ $wedding->building }}" type="text" placeholder="アパート・マンション名・その他">
            @if ($errors->has('building'))
            <div class="text-danger">
                {{ $errors->first('building') }}
            </div>
            @endif
        </div>
        <div class="form-group mt-5">
            <span class="badge badge-danger">必須</span>
            <label for="phone_num" class="text-info ml-3">
                電話番号 <span class="ml-5" style="font-size:0.8em;">※ハイフン（-） なしで入力して下さい</span>
            </label>
            <input disabled id="phone_num" name="phone_num" placeholder="11122223333"
                class="form-control shadow-lg p-3 mb-5 rounded" value="{{ $wedding->phone_num }}" type="tel">
            @if ($errors->has('phone_num'))
            <div class="text-danger">
                {{ $errors->first('phone_num') }}
            </div>
            @endif
        </div>

        <div class="form-group mt-5 clearfix">
            <label for="name" class="text-info">
                お連れ様のお名前 <span class="ml-5" style="font-size:0.8em;">※お連れ様がいらっしゃる場合はお名前をご記入下さい</span>
            </label>
            <div class="clearfix">
                <input disabled id="partner_name_one" name="partner_name_one"
                    class="form-control shadow-lg  rounded one-third-input" value="{{ $wedding->partner_name_one }}"
                    type="text" placeholder="(例)佐藤　太郎">
                <input disabled id="partner_name_two" name="partner_name_two"
                    class="form-control shadow-lg ml-3 round one-third-input" value="{{ $wedding->partner_name_two }}"
                    type="text" placeholder="(例)佐藤　花子">
                <input disabled id="partner_name_three" name="partner_name_three"
                    class="form-control shadow-lg ml-3 round one-third-input" value="{{ $wedding->partner_name_three }}"
                    type="text" placeholder="(例)佐藤　一郎">
            </div>
            @if ($errors->has('name'))
            <div class="text-danger">
                {{ $errors->first('name') }}
            </div>
            @endif
        </div>

        <div class="form-group mt-5">
            <label for="allergies" class="text-info">
                アレルギー<span class="ml-5" style="font-size:0.8em;">※お連れ様の分も記入して下さい</span>
            </label>
            <input disabled id="allergies" name="allergies" class="form-control shadow-lg p-3 rounded mb-5"
                value="{{ $wedding->allergies }}" type="text" placeholder="(例)　本人:リンゴ,　一郎:イチゴ">
            @if ($errors->has('allergies'))
            <div class="text-danger">
                {{ $errors->first('allergies') }}
            </div>
            @endif
        </div>

        <div class="form-group">
            <label for="content" class="text-info">
                メッセージ
            </label>
            <textarea disabled id="content" name="content" class="form-control shadow-lg p-3 mb-5 rounded"
                rows="6">{{ $wedding->content }}</textarea>
            @if ($errors->has('content'))
            <div class="text-danger">
                {{ $errors->first('content') }}
            </div>
            @endif
        </div>
        <div class="m-5">
            <a class="btn btn-secondary" href="{{ route('list') }}">
                戻る
            </a>
        </div>

        <input type="hidden" name="id" value="{{ $wedding->id }}">
        </form>
    </div>
</div>
<style>
input[disabled] {
    color: black;
    font-weight: bold;
}

textarea[disabled] {
    color: black;
    font-weight: bold;
}
</style>
@endsection('content')