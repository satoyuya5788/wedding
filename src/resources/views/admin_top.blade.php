@extends('layout')
@section('title', '招待状')
@section('content')

    <section class="">
        <div class="container mt-5" data-aos="fade-in" data-aos-delay="200" data-aos-duration="2000" data-aos-offset="120">
            <div class="row align-items-center text-center">
                <div class="col-xs-12 order-lg-1 col-lg-12 ">
                    @if ($errors->any())
                        <div style="color:red; font-size:1.3rem;">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="post" action="{{ route('admin_login') }}">
                        @csrf

                        <div class="form-group">
                            <p style="font-size:1.8rem; font-weight:bold;">出席情報管理</p>
                            <p class="mb-3" style="font-size:1.8rem; font-weight:bold;">ログイン画面</p>
                            <label for="name" class="mt-3" style="font-size:1.6rem;">
                                ユーザーID
                            </label>
                            <div class="row">

                                <input id="admin_user" style="text-align:center;" name="admin_user"
                                    class="form-control shadow-lg col-xs-12 bg-white rounded center-block"
                                    value="{{ old('admin_user') }}" type="text">
                            </div>
                            <label for="name" class="" style="font-size:1.6rem;">
                                パスワード
                            </label>
                            <div class="row">

                                <input id="admin_password" style="text-align:center;" name="admin_password"
                                    class="form-control shadow-lg col-xs-12 bg-white rounded center-block"
                                    value="{{ old('admin_password') }}" type="text">
                            </div>
                        </div>

                        <div class="form-group m-5 text-center pb-1">
                            <button type="submit" class="btn btn-primary">
                                ログイン
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
