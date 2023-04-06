<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;
use Illuminate\Support\Facades\Redirect;
use App\Models\Wedding;
use App\Models\User;

class WeddingController extends Controller
{

    protected $wedding = '';

    public function __construct()
    {
        $this->wedding = new Wedding();
    }

    /**
     * 招待状一覧を表示
     *
     * @param
     * @return view
     * ユウヤ
     */
    public function showList(Request $request)
    {
        list($weddings, $friendCount, $humanFlg, $attendCount, $partnerCount) = $this->wedding->getAllWeddingData($request);

        return view('wedding.admin.list', [
            'weddings' => $weddings,
            'friendCount' => $friendCount,
            'humanFlg' => $humanFlg,
            'attendCount' => $attendCount,
            'partnerCount' => $partnerCount,
        ]);
    }

    /**
     * 追加登録フォームを表示
     *
     * @param
     * @return view
     * ユウヤ
     */
    public function create()
    {

        return view('wedding.admin.create');
    }

    /**
     * 追加登録処理
     *
     * @param
     * @return view
     * ユウヤ
     */
    public function adminStore(StoreRequest $request)
    {
        $registerdWeddingData = $this->wedding->adminStoreWedding($request);
        if ($registerdWeddingData) {
            list($weddings, $friendCount, $humanFlg, $attendCount, $partnerCount) = $this->wedding->getAllWeddingData($request);

            \Session::flash('flash_message', '登録に成功しました');
            return Redirect::route('list', compact(
                'weddings',
                'friendCount',
                'attendCount',
                'humanFlg',
                'partnerCount',
            ));
        }
        return abort(500);
    }

    /**
     * ログインユーザ登録
     *
     * @param
     * @return view
     * ユウヤ
     */
    public function loginUserCreate()
    {
        $userData = User::orderBy('password', 'asc')->get();
        // テスト用データ（パスワードが9000以上はカウントしない）
        $notAnswered = User::where('page_flg', 0)->where('password', '<', 9000)->count();
        $attendance = User::where('page_flg', 1)->where('password', '<', 9000)->count();
        $notAttendance = User::where('page_flg', 2)->where('password', '<', 9000)->count();

        // ゆうやとさとこで誰が未回答か分けるため、そのクラスもこちらで送る
        $userNewData = [];
        $trBgStyle = '';
        $category = '';
        foreach ($userData as $user) {
            $notAnswerdNum = mb_substr($user->password, 1, 1);

            if ($user->page_flg === 0 && $notAnswerdNum === '1') {
                // 未回答かつユウヤ
                $trBgStyle = 'YuyasLoginUserStatusFlg';
            } elseif ($user->page_flg === 0 && $notAnswerdNum === '2'){
                // 未回答かつさとこ
                $trBgStyle = 'SatokosLoginUserStatusFlg';
            } elseif ($notAnswerdNum === '9') {
                $trBgStyle = 'testUser';
            } elseif ($notAnswerdNum !== '9' && $user->page_flg === 1) {
                $trBgStyle = '';
            } elseif ($notAnswerdNum !== '9' && $user->page_flg === 2) {
                $trBgStyle = 'notAttendace';
            } else {
                return abort(404);
            }

            $categoryNum = mb_substr($user->password, 0, 1);
            if ($categoryNum === '1') {
                $category = '家族';
            } elseif ($categoryNum === '2'){
                $category = '親族';
            } elseif ($categoryNum === '3') {
                $category = '友人';
            } elseif ($categoryNum === '4') {
                $category = '会社';
            } elseif ($categoryNum === '5') {
                $category = '恩師';
            } elseif ($categoryNum === '9') {
                // テスト用
                $category = 'テスト用';
            } else {
                return abort(404);
            }

            $pushData = [
                'name' => $user->name,
                'password' => $user->password,
                'page_flg' => $user->page_flg,
                'created_at' => $user->created_at,
                'category' => $category,
                'trBgStyle' => $trBgStyle,
            ];
            array_push($userNewData, $pushData);
        }

        return view(
            'wedding.admin.loginuser_create',
            [
                'userData' => $userNewData,
                'notAnswered' => $notAnswered,
                'attendance' => $attendance,
                'notAttendance' => $notAttendance
            ]
        );
    }
    /**
     * ログインユーザ登録
     *
     * @param
     * @return view
     * ユウヤ
     */
    public function loginUserStore(StoreRequest $request)
    {
        $loginUserData = $this->wedding->loginUserStore($request);
        if ($loginUserData) {
            // \Session::flash('flash_message', '登録に成功しました!');
            return redirect(route('loginuser.create'));
        }
        return abort(500);
    }

    /**
     * 招待状詳細を表示
     *
     * @param
     * @return view
     */
    public function showDetail($id)
    {
        $wedding = $this->wedding->getOnlyOneWedding($id);
        if (empty($wedding)) {
            \Session::flash('flash_message', 'データがありませんでした');
            return redirect(route('list'));
        }

        return view('wedding.admin.detail', ['wedding' => $wedding]);
    }

    /**
     * 招待状編集フォーム画面を表示
     *
     */
    public function showEdit($id)
    {
        $wedding = $this->wedding->getOnlyOneWedding($id);
        if (empty($wedding)) {
            \Session::flash('flash_message', 'データがありませんでした');
            return redirect(route('list'));
        }

        return view('wedding.admin.edit', ['wedding' => $wedding]);
    }

    /**
     * 招待状を更新する
     */
    public function executeUpdate(Request $request)
    {
        $this->wedding->updateWedding($request);

        list($weddings, $friendCount, $humanFlg, $attendCount, $partnerCount) = $this->wedding->getAllWeddingData($request);

        \Session::flash('flash_message', '更新に成功しました');
        return view('wedding.admin.list', [
            'weddings' => $weddings,
            'friendCount' => $friendCount,
            'humanFlg' => $humanFlg,
            'attendCount' => $attendCount,
            'partnerCount' => $partnerCount,
        ]);
    }
}
