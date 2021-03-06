<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | 總管理員設置
    |--------------------------------------------------------------------------
    |
    | 資料庫所設定的管理者，僅是可以管理學權申訴案的「管理者（學權鬥士）」
    | 這邊說設定的管理者，則是可以增設、停復權「管理者（學權鬥士）」的「總管理者(root, administrator)」
    | 在陣列中輸入該總管理者的使用者名稱，即會在該總管理者登入時，賦予權限
    |
    */

    'admin' => array('foo', 'bar', 'foobar'),

    /*
    |--------------------------------------------------------------------------
    | 伊爾特會員系統設置
    |--------------------------------------------------------------------------
    |
    | 目前本網站是使用伊爾特會員系統作為登入的途徑，
    | 請在這邊填寫您的伊爾特會員系統的相關OAuth2參數
    |
    */

    'ilt_provider' => array(
        'key'        => 'KEY',
        'secret'     => 'SECRET',
        'host_url'   => 'https://domain/oauth',
        'scope'      => 'user.login.basic+user.login.student+user.info.basic+user.info.student+user.info.personal',
    ),

    /*
    |--------------------------------------------------------------------------
    | 網站各項用詞設置
    |--------------------------------------------------------------------------
    |
    | 在這裡將許多容易因為地方進行客製化的用詞建立成設定檔
    | 如此一來就能在不更動view的情況下更改名稱
    | 也方便管理，改一個地方就能完成所有的網站用詞客製化
    |
    */

    'site' => array(
        'title' => 'Appeal Manage System',
        'name' => '權益申訴系統',
        'tab' => array(
            'list'      => '申訴清單',
            'view'      => '內文檢視',
            'appeal'    => '我要申訴',
            'manager'   => '捍權團隊',
        ),
        'maintainer' => 'YOUR_ORGANIZARION_NAME',
    ),
);
