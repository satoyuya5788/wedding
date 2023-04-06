@extends('layout')
@section('title', '招待状：編集')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h2 class="text-center text-info">ログインユーザー登録</h2>
        <hr>
        <form method="POST" action="{{ route('admin.loginuser.store') }}" onSubmit="return checkSubmit()">
            @csrf

            <div class="form-group mt-5" style="text-align: center;">
                <p class="" style="font-size: 1.0rem;">
                    ※友人側（サイト側）のログインフォームはひらがなフルネームだけでログインできるように設定
                </p>
                <p class="" style="font-size: 1.0rem;">
                サイトを使ってもらう友人の名前をこのフォームで先に登録しておく
                </p>
                <p class="mb-5" style="font-size: 1.0rem;">

                </p>
                <label for="name" class=" ml-3 h3">
                    名前(フルネームをひらがなで入力)
                </label>
                <div class="row">
                    <input id="username" name="username" class="form-control shadow-lg col-xs-6 bg-white rounded" style="text-align: center;" value="{{ old('username') }}" type="text" placeholder="ひらがなたろう">
                </div>
                <br>
                <label for="name" class=" ml-3 h3">
                    パスワード4桁(0から始まるパスワードはNG)
                </label>
                <div class="row">
                    <input id="password" name="password" class="form-control shadow-lg col-xs-6 bg-white rounded" style="text-align: center;" value="" type="number" placeholder="">
                </div>
                @if ($errors->has('username'))
                <div class="text-danger">
                    {{ $errors->first('username') }}
                </div>
                @endif
                @if ($errors->has('password'))
                <div class="text-danger">
                    {{ $errors->first('password') }}
                </div>
                @endif
            </div>
            <div class="form-group m-5 text-center pb-1">
                <button type="submit" class="btn btn-info">
                    登録する
                </button>
                <a class="btn btn-secondary ml-5" href="{{ route('list') }}">
                    戻る
                </a>
            </div>
          </form>

          <hr>
          <span style="font-size: 1.5rem;">※ページの種類</span>
            <ul>
                <li>未回答（招待状ページ）<span class="h3 text-danger">{{ $notAnswered }}</span></li>
                <li>出席　（案内状ページ）<span class="h3 text-primary">{{ $attendance }}</span></li>
                <li>欠席　（写真のページ）<span class="h3 text-primary">{{ $notAttendance }}</span></li>
            </ul>
          <span style="font-size: 1.5rem;">※パスワードのルール</span>
            <ul>
                <li>下１,２桁目⇨連番</li>
                <li>下３桁目⇨1:ゆうや側<div class="yuyasBgSquare"></div>, 2:さとこ側<div class="satokosBgSquare"></div></li>
                <li>下４桁目 = カテゴリ ⇨1:家族, 2:親族, 3:友人, 4:会社, 5:恩師, 9:テスト用
                </li>
            </ul>
            <hr>
          <table class="table table-condensed col-lg-12 col-xs-12 col-sm-12">
            <tr>
                <th style="white-space: nowrap;">カテゴリ</th>
                <th style="white-space: nowrap;">名前(かな)</th>
                <th style="white-space: nowrap;">パスワード</th>
                <th style="white-space: nowrap;">回答状況</th>
                <th style="white-space: nowrap;">ユーザー登録日</th>
            </tr>
            @foreach ($userData as $user)
            <tr class="{{ $user['trBgStyle'] }}">
                <td style="font-weight:bold;">{{ $user['category'] }}</td>
                <td style="font-weight:bold;">{{ $user['name'] }}</td>
                <td style="font-weight:bold;">{{ $user['password'] }}</td>
                @if($user['page_flg'] == 0)
                <td id="statusFlg" class="page" style="font-size:1.1rem; color:red;">未回答</td>
                @elseif($user['page_flg'] == 1)
                <td id="statusFlg" class="page" style="font-size:1.2rem; color:blue;">出席</td>
                @elseif($user['page_flg'] == 2)
                <td id="statusFlg" class="page">欠席</td>
                @endif
                <td>{{ $user['created_at'] }}</td>
            </tr>
            @endforeach
        </table>

    </div>
</div>
<script>
function checkSubmit(){
if(window.confirm('登録してよろしいですか？')){
    return true;
} else {
    return false;
}
}
</script>
<style>
table.table tr:first-child{
  background-color:	#C0C0C0;
}
</style>
@endsection
