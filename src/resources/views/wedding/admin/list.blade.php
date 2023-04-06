@extends('layout')
@section('title', '招待状')
@section('content')
<div class="row">
    <div class="col-lg-12 col-xs-12">
        @if($humanFlg == 1)
        <p class="text-info h2" style="text-align:center;">参加者一覧(ゆうや)</p>

        <div class="h4" style="text-align: center;">
            <div>
                出席<span class="text-danger" style="font-size:2rem;">{{ $attendCount + $partnerCount }}</span>人:
                欠席<span class="text-danger">{{ $friendCount - $attendCount }}</span>人
            </div>
            <div>
                世帯数：<span class="text-danger">{{ $friendCount }}</span>
            </div>
        </div>
        @elseif($humanFlg == 2)
        <p class="text-info h2" style="text-align:center;">参加者一覧(さとこ)</p>
        <div class="h4" style="text-align: center;">
            <div>
                出席<span class="text-danger" style="font-size:2rem;">{{ $attendCount + $partnerCount }}</span>人:
                欠席<span class="text-danger">{{ $friendCount - $attendCount }}</span>人
            </div>
            <div>
                世帯数：<span class="text-danger">{{ $friendCount }}</span>
            </div>
        </div>
        @elseif($friendCount == 0)
        <h2 class="text-info" style="text-align:center;">まだ回答されていません</span></h2>
    </div>
</div>
@endif

@if(session('flash_message'))
<p class="text-danger">
    {{ session('flash_message') }}
</p>
@endif
<button type="button" class="btn btn-warning mb-3 m-3" onclick="location.href='/admin/wedding/loginuser/create'">
    サイト側：ユーザー登録/一覧
</button>
<button type="button" class="btn btn-primary mb-3 m-3" onclick="location.href='/admin/wedding/create'">
    出席情報追加登録
</button>
<table class="table table-condensed col-lg-12 col-xs-12 col-sm-12">
    <tr>
        <th style="white-space: nowrap;">カテゴリ</th>
        <th style="white-space: nowrap;">名前(かな)</th>
        <th style="white-space: nowrap;">参加/不参加</th>
        <th style="white-space: nowrap;">{{ __('messages.list.phone_num') }}</th>
        <th style="white-space: nowrap;">お連れ様</th>
        <th style="white-space: nowrap;">アレルギー</th>
        <th style="white-space: nowrap;">回答日</th>
        <th style="white-space: nowrap;">{{ __('messages.button.edit') }}</th>
        <th style="white-space: nowrap;">席次表</th>
        <th style="white-space: nowrap;">お渡し代</th>
        <th style="white-space: nowrap;">{{ __('messages.button.detail') }}</th>
    </tr>
    @foreach ($weddings as $wedding)
    <tr>
        <td>{{ $wedding->group_category }}</td>
        <td style="font-weight:bold;">{{ $wedding->full_name }}</td>
        @if($wedding->attend)
        <td style="font-size:1.5rem;">〇</td>
        @else
        <td style="color: red; font-size:1.5rem">×</td>
        @endif
        <td style="word-break: break-all;">{{ $wedding->phone_num }}</td>
        @if($wedding->partner == 0)
        <td></td>
        @else
        <td class="partner">{{ $wedding->partner }}</td>
        @endif
        <td class="allergies" style="font-weight:bold; color: red; font-size:1.4rem; white-space: nowrap;">
            {{ $wedding->allergies }}</td>
        <td>{{ $wedding->created_at }}</td>
        <td><button type="button" class="btn btn-info"
                onclick="location.href='/admin/wedding/edit/{{ $wedding->id }}'">編集</button></td>
        <td>
            @if($wedding->listchart)
            <strong style="color: blue;"> 〇</strong>
            @else
            <strong> 未</strong>
            @endif
        </td>
        <td>
            @if($wedding->present)
            <strong>￥{{ number_format($wedding->present) }}</strong>
            @else
            <strong></strong>
            @endif
        </td>
        <td><button type="button" class="btn btn-success"
                onclick="location.href='/admin/wedding/{{ $wedding->id }}'">詳細</button></td>
    </tr>
    @endforeach
</table>
</div>
</div>
<script>
$('.partner:contains(1)').parent("tr").css("background-color", "#FFEEFF");
$('.partner:contains(2)').parent("tr").css("background-color", "#FFEEFF");
$('.partner:contains(3)').parent("tr").css("background-color", "#FFEEFF");
$('td:contains("×")').parent("tr").css("background-color", "#EEEEEE");
// $('.allergies').parent("tr").css("background-color", "#FFFF77");
</script>
<style>
table.table tr:first-child {
    background-color: #C0C0C0;
}
</style>
@endsection('content')