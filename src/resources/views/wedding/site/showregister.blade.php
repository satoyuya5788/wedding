<!DOCTYPE html>
<html lang="ja">
@include('site_header')

<!-- 案内状専用のCSS読み込み！桜降らせるアニメーション！ -->
<link href="{{ asset('css/bloom_guide_register.css') }}" rel="stylesheet">

<body class="body_guide_showregister cherry-blossom-container_register">

    <section class="p-4 mt-3">
        <div class="container  mb-2 bg_guide_showregister p-2" data-aos="fade-down" data-aos-delay="200" data-aos-duration="2000" data-aos-offset="120">
            <div class="row align-items-center text-center">
                <div class="col-xs-12 order-lg-1 col-lg-12 show-msg">
                    <p style="font-size:2.0rem;" class="p-2">ご登録情報</p>
                    <img src="{{ asset('img/巻物のフリーアイコン_1.svg') }}" alt="" width="30" class="mb-2">
                    <table id="registerdData" class="mb-3" style="margin:auto; font-size:1.1rem;">
                        <tr class="m-2">
                            <th>出欠</th>
                            <td>:</td>
                            @if($registerdData->attend == 1)
                            <td>出席</td>
                            @else
                            <td>欠席</td>
                            @endif
                        </tr>
                        <tr class="m-2">
                            <th>ご友人</th>
                            <td>:</td>
                            @if($registerdData->human == 1)
                            <td>新郎(佐藤佑也)</td>
                            @else
                            <td>新婦(湯川智子)</td>
                            @endif
                        </tr>
                        <tr class="m-2">
                            <th>お名前</th>
                            <td>:</td>
                            <td>{{ $registerdData->name }} {{ $registerdData->name_low }} 様</td>
                        </tr>
                        <tr class="m-2">
                            <th>郵便番号</th>
                            <td>:</td>
                            <td>{{ $registerdData->post_num }}</td>
                        </tr>
                        <tr class="m-2">
                            <th>住所</th>
                            <td>:</td>
                            <td>{{ $registerdData->adress }}</td>
                        </tr>
                        <tr class="m-2">
                            <th>建物名</th>
                            <td>:</td>
                            <td>{{ $registerdData->building }}</td>
                        </tr>
                        <tr class="m-2">
                            <th>電話番号</th>
                            <td>:</td>
                            <td>{{ $registerdData->phone_num }}</td>
                        </tr>

                        @if($partnerCount == 1)
                        <tr class="m-2">
                            <th>お連れ様</th>
                            <td>:</td>
                            <td>{{ $registerdData->partner_name_one }}</td>
                        </tr>
                        @elseif($partnerCount == 2)
                        <tr class="m-2">
                            <th>お連れ様</th>
                            <td>:</td>
                            <td>{{ $registerdData->partner_name_one }}</td>
                        </tr>
                        <tr class="m-2">
                            <th></th>
                            <td>:</td>
                            <td>{{ $registerdData->partner_name_two }}</td>
                        </tr>
                        @elseif($partnerCount == 3)
                        <tr class="m-2">
                            <th>お連れ様</th>
                            <td>:</td>
                            <td>{{ $registerdData->partner_name_one }}</td>
                        </tr>
                        <tr class="m-2">
                            <th></th>
                            <td>:</td>
                            <td>{{ $registerdData->partner_name_two }}</td>
                        </tr>
                        <tr class="m-2">
                            <th></th>
                            <td>:</td>
                            <td>{{ $registerdData->partner_name_three }}</td>
                        </tr>
                        @else
                        <tr class="m-2">
                            <th>お連れ様</th>
                            <td>:</td>
                            <td></td>
                        </tr>
                        @endif

                        <tr class="m-2">
                            <th>アレルギー</th>
                            <td>:</td>
                            <td>{{ $registerdData->allergies }}</td>
                        </tr>
                        <tr>
                            <th colspan="3" style="height:10px"></th>
                        </tr>

                        <tr>
                            <td colspan="3" class="text_break">※ご登録情報にお間違いがある場合はLINEにてご連絡をお願い致します
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <div class="mt-2 mb-5 p-1" style="text-align: center;">
        <a href="/site/wedding/guidehappouen" class="btn btn-pink text-nowrap">案内状へ戻る</a>
    </div>


    <!-- Footer -->
    @include('footer')

    <!--桜降らせるJSを読み込み -->
    <script type="text/javascript" src="{{ asset('js/bloom_guide_register.js') }}"></script>

    <!--スクロールアニメーションを読み込み -->
    <script type="text/javascript" src="{{ asset('js/scroll.js') }}"></script>

</body>

</html>
