<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Wedding;
use App\Models\User;

class SiteWeddingController extends Controller
{
    protected $wedding = '';

    public function __construct()
    {
        $this->wedding = new Wedding();
    }

    /**
     * 招待状登録フォーム画面を表示
     *
     */
    public function showCreate()
    {
        return view('wedding.site.index');
    }

    /**
     * 招待状を登録する
     */
    public function executeStore(StoreRequest $request)
    {
        $registerdWeddingData = $this->wedding->storeWedding($request);
        if ($registerdWeddingData) {
            if ($registerdWeddingData->attend == 1) {
                return view('wedding.site.guide');
            } elseif ($registerdWeddingData->attend == 0) {
                return view('wedding.site.non_participation');
            }
        }
        return abort(500);
    }

    /**
     * 登録情報を表示
     */
    public function showRegister()
    {
        $username = session('simple_auth')[0];
        $userId = User::where('name', $username)->value('id');
        // 登録データ
        $registerdData = Wedding::where('user_id', $userId)->first();
        // パートナーデータ
        $partnerOne = $registerdData->partner_name_one ? 1 : 0;
        $partnerTwo = $registerdData->partner_name_two ? 1 : 0;
        $partnerThree = $registerdData->partner_name_three ? 1 : 0;
        $partnerCount = $partnerOne + $partnerTwo + $partnerThree;

        return view('wedding.site.showregister', ['registerdData' => $registerdData, 'partnerCount' => $partnerCount]);
    }
}
