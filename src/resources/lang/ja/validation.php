<?php

return [

    /*
    |--------------------------------------------------------------------------
    | バリデーション言語行
    |--------------------------------------------------------------------------
    |
    | 以下の言語行はバリデタークラスにより使用されるデフォルトのエラー
    | メッセージですサイズルールのようにいくつかのバリデーションを
    | 持っているものもありますメッセージはご自由に調整して下さい
    |
    */

    'accepted'             => ':attributeを承認して下さい',
    'active_url'           => ':attributeが有効なURLではありません',
    'after'                => ':attributeには:dateより後の日付を指定して下さい',
    'after_or_equal'       => ':attributeには:date以降の日付を指定して下さい',
    'alpha'                => ':attributeはアルファベットのみがご利用できます',
    'alpha_dash'           => ':attributeはアルファベットとダッシュ(-)及び下線(_)がご利用できます',
    'alpha_num'            => ':attributeはアルファベット数字がご利用できます',
    'array'                => ':attributeは配列でなくてはなりません',
    'before'               => ':attributeには:dateより前の日付をご利用下さい',
    'before_or_equal'      => ':attributeには:date以前の日付をご利用下さい',
    'between'              => [
        'numeric' => ':attributeは:minから:maxの間で指定して下さい',
        'file'    => ':attributeは:min kBから:max kBの間で指定して下さい',
        'string'  => ':attributeは:min文字から:max文字の間で指定して下さい',
        'array'   => ':attributeは:min個から:max個の間で指定して下さい',
    ],
    'boolean'              => ':attributeはtrueかfalseを指定して下さい',
    'confirmed'            => ':attributeと確認フィールドとが一致していません',
    'date'                 => ':attributeには有効な日付を指定して下さい',
    'date_equals'          => ':attributeには:dateと同じ日付けを指定して下さい',
    'date_format'          => ':attributeは:format形式で指定して下さい',
    'different'            => ':attributeと:otherには異なった内容を指定して下さい',
    'digits'               => ':attributeは:digits桁で指定して下さい',
    'digits_between'       => ':attributeは:min桁から:max桁の間で指定して下さい',
    'dimensions'           => ':attributeの図形サイズが正しくありません',
    'distinct'             => ':attributeには異なった値を指定して下さい',
    'email'                => ':attributeには有効なメールアドレスを指定して下さい',
    'ends_with'            => ':attributeには:valuesのどれかで終わる値を指定して下さい',
    'exists'               => '選択された:attributeは正しくありません',
    'file'                 => ':attributeにはファイルを指定して下さい',
    'filled'               => ':attributeに値を指定して下さい',
    'gt'                   => [
        'numeric' => ':attributeには:valueより大きな値を指定して下さい',
        'file'    => ':attributeには:value kBより大きなファイルを指定して下さい',
        'string'  => ':attributeは:value文字より長く指定して下さい',
        'array'   => ':attributeには:value個より多くのアイテムを指定して下さい',
    ],
    'gte'                  => [
        'numeric' => ':attributeには:value以上の値を指定して下さい',
        'file'    => ':attributeには:value kB以上のファイルを指定して下さい',
        'string'  => ':attributeは:value文字以上で指定して下さい',
        'array'   => ':attributeには:value個以上のアイテムを指定して下さい',
    ],
    'image'                => ':attributeには画像ファイルを指定して下さい',
    'in'                   => '選択された:attributeは正しくありません',
    'in_array'             => ':attributeには:otherの値を指定して下さい',
    'integer'              => ':attributeは整数で指定して下さい',
    'ip'                   => ':attributeには有効なIPアドレスを指定して下さい',
    'ipv4'                 => ':attributeには有効なIPv4アドレスを指定して下さい',
    'ipv6'                 => ':attributeには有効なIPv6アドレスを指定して下さい',
    'json'                 => ':attributeには有効なJSON文字列を指定して下さい',
    'lt'                   => [
        'numeric' => ':attributeには:valueより小さな値を指定して下さい',
        'file'    => ':attributeには:value kBより小さなファイルを指定して下さい',
        'string'  => ':attributeは:value文字より短く指定して下さい',
        'array'   => ':attributeには:value個より少ないアイテムを指定して下さい',
    ],
    'lte'                  => [
        'numeric' => ':attributeには:value以下の値を指定して下さい',
        'file'    => ':attributeには:value kB以下のファイルを指定して下さい',
        'string'  => ':attributeは:value文字以下で指定して下さい',
        'array'   => ':attributeには:value個以下のアイテムを指定して下さい',
    ],
    'max'                  => [
        'numeric' => ':attributeには:max以下の数字を指定して下さい',
        'file'    => ':attributeには:max kB以下のファイルを指定して下さい',
        'string'  => ':attributeは:max文字以下で指定して下さい',
        'array'   => ':attributeは:max個以下指定して下さい',
    ],
    'mimes'                => ':attributeには:valuesタイプのファイルを指定して下さい',
    'mimetypes'            => ':attributeには:valuesタイプのファイルを指定して下さい',
    'min'                  => [
        'numeric' => ':attributeには:min以上の数字を指定して下さい',
        'file'    => ':attributeには:min kB以上のファイルを指定して下さい',
        'string'  => ':attributeは:min文字以上で指定して下さい',
        'array'   => ':attributeは:min個以上指定して下さい',
    ],
    'not_in'               => '選択された:attributeは正しくありません',
    'not_regex'            => ':attributeの形式が正しくありません',
    'numeric'              => ':attributeには数字を指定して下さい',
    'present'              => ':attributeが存在していません',
    'regex'                => ':attributeに正しい形式を指定して下さい',
    'required'             => ':attributeを入力して下さい',
    'required_if'          => ':otherが:valueの場合:attributeも指定して下さい',
    'required_unless'      => ':otherが:valuesでない場合:attributeを指定して下さい',
    'required_with'        => ':valuesを指定する場合は:attributeも指定して下さい',
    'required_with_all'    => ':valuesを指定する場合は:attributeも指定して下さい',
    'required_without'     => ':valuesを指定しない場合は:attributeを指定して下さい',
    'required_without_all' => ':valuesのどれも指定しない場合は:attributeを指定して下さい',
    'same'                 => ':attributeと:otherには同じ値を指定して下さい',
    'size'                 => [
        'numeric' => ':attributeは:sizeを指定して下さい',
        'file'    => ':attributeのファイルは:sizeキロバイトでなくてはなりません',
        'string'  => ':attributeは:size文字で指定して下さい',
        'array'   => ':attributeは:size個指定して下さい',
    ],
    'starts_with'          => ':attributeには:valuesのどれかで始まる値を指定して下さい',
    'string'               => ':attributeは文字列を指定して下さい',
    'timezone'             => ':attributeには有効なゾーンを指定して下さい',
    'unique'               => ':attributeの値は既に存在しています',
    'uploaded'             => ':attributeのアップロードに失敗しました',
    'url'                  => ':attributeに正しい形式を指定して下さい',
    'uuid'                 => ':attributeに有効なUUIDを指定して下さい',

    /*
    |--------------------------------------------------------------------------
    | Custom バリデーション言語行
    |--------------------------------------------------------------------------
    |
    | "属性.ルール"の規約でキーを指定することでカスタムバリデーション
    | メッセージを定義できます指定した属性ルールに対する特定の
    | カスタム言語行を手早く指定できます
    |
    */

    'custom' => [
        '属性名' => [
            'ルール名' => 'カスタムメッセージ',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | カスタムバリデーション属性名
    |--------------------------------------------------------------------------
    |
    | 以下の言語行は例えば"email"の代わりに「メールアドレス」のように
    | 読み手にフレンドリーな表現でプレースホルダーを置き換えるために指定する
    | 言語行ですこれはメッセージをよりきれいに表示するために役に立ちます
    |
    */

    'attributes' => [
        'admin_user'  => 'ユーザーID',
        'admin_password'  => 'パスワード',
        'loginusername'  => 'お名前',
        'password'  => 'パスワード',
        'username'  => '名前(かな)',
        'attend'    => '出席か欠席',
        'human'     => '新郎のご友人様か新婦のご友人様',
        'name'      => '名前(姓)',
        'name_low'  => '名前(名)',
        'name_kana' => '名前（せい）',
        'name_kana_low' => '名前（めい）',
        'post_num'  => '郵便番号',
        'adress'    => '住所',
        'building'  => '建物名',
        'phone_num' => '電話番号',
        'partner_name_one'      => 'お連れ様の名前',
        'partner_name_two'      => 'お連れ様の名前',
        'partner_name_three'    => 'お連れ様の名前',
        'allergies' => 'アレルギー',
        'content'   => 'メッセージ',
],

];
