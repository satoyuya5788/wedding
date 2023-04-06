<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;
use App\Models\User;

class SimpleLoginController extends Controller
{

    public function authjudge(Request $request)
    {
        if (session("simple_auth")) {
            $name = session("simple_auth");
            $pageFlg = User::where('name', $name)->value('page_flg');
            switch ($pageFlg) {
                case '0':
                    return view("wedding.site.index");
                    break;
                case '1':
                    return view("wedding.site.guide");
                    break;
                case '2':
                    return view("wedding.site.non_participation");
                    break;
                default:
                    return abort(500);
                    break;
            }
        } else {
            return redirect("home");
        }
        return abort(500);
    }


    public function login(StoreRequest $request)
    {
        //入力内容をチェックする
        $name = preg_replace("/( |　)/", "", $request->input("loginusername"));
        $pass = $request->password;
        $userData = User::where('name', $name)
        ->where('password', $pass)
        ->first();

        //ログイン成功
        if ($userData) {
            $pageFlg = User::where('name', $name)->value('page_flg');

            session()->put("simple_auth", [$name, $pageFlg, $pass]);

            switch ($pageFlg) {
                case '0':
                    return redirect(route('site'));
                    break;
                case '1':
                    return view("wedding.site.guide");
                    break;
                case '2':
                    return view("wedding.site.non_participation");
                    break;
                default:
                    return abort(500);
                    break;
            }
        }

        //ログイン失敗
        return redirect("/home")->withErrors([
            "login" => "入力情報に誤りがあります"
        ])->withInput();
    }
}
