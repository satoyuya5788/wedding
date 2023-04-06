<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;
use App\Models\AdminUser;

class AdminLoginController extends Controller
{

    public function authjudge(Request $request)
    {
        if (session("admin_auth")) {
            return redirect(route('list'));
        } else {
            return redirect(route('admin_home'))->withErrors([
                "message" => "ログインし直して下さい"
            ]);
            return abort(500);
        }
    }

    public function login(StoreRequest $request)
    {
        //入力内容をチェックする
        $name = $request->input("admin_user");
        $password = $request->input("admin_password");

        // 登録時にユニークバリデーションを設定してるため、入力値の存在チェックだけで認証
        $adminUserData = AdminUser::where('name', $name)
            ->where('password', $password)
            ->first();

        //ログイン成功
        if ($adminUserData) {
            session()->put("admin_auth", $adminUserData);
            return redirect(route('list'));
        }

        //ログイン失敗
        return redirect(route('admin_home'))->withErrors([
            "message" => "ログイン情報が違います"
        ])->withInput();
    }
}
