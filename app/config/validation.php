<?php

return array(
    'case' => array(
        'store' => array(
            'rules' => array(
                'title'     => 'required',
                'date'      => 'required|date_format:Y-m-d',
                'place'     => 'required',
                'target'    => 'required',
                'content'   => 'required',
                'privacy_case' => 'required|in:public,protect,private,secret',
                'privacy_complainant' => 'required|in:public,protect-name,protect-dep,private'
            ),
            'messages' => array(
                'title.required'    => '標題為必填欄位',
                'date.required'     => '事發日期為必填欄位',
                'date.date_format'  => '事發日期請以yyyy-mm-dd的格式填寫',
                'place.required'    => '事發地點為必填欄位',
                'target.required'   => '申訴對象為必填欄位',
                'content.required'  => '申訴內容為必填欄位',
                'privacy_case.in'   => '案件隱私設定的值有誤！',
                'privacy_complainant.in' => '申訴者隱私設定的直有誤！'
            )
        ),

        'update' => array(
            'files' => array(
                'rules' => array(
                    'title'     => 'required',
                    'date'      => 'required|date_format:Y/m/d',
                    'place'     => 'required',
                    'target'    => 'required',
                    'content'   => 'required',
                    'privacy_case' => 'in:public,protect,private,secret',
                    'privacy_complainant' => 'in:public,protect-name,protect-dep,private'
                ),
                'messages' => array(
                    'title.required'    => '標題為必填欄位',
                    'date.required'     => '事發日期為必填欄位',
                    'date.date_format'  => '事發日期請以yyyy/mm/dd的格式填寫',
                    'place.required'    => '事發地點為必填欄位',
                    'target.required'   => '申訴對象為必填欄位',
                    'content.required'  => '申訴內容為必填欄位',
                    'privacy_case.in'   => '案件隱私設定的值有誤！',
                    'privacy_complainant.in' => '申訴者隱私設定的直有誤！'
                )
            ),
            'manage' => array(
                'rules' => array(
                    'case_status'   => 'required|in:todo,doing,done',
                    'reply_status'  => 'required|in:on,off',
                ),
                'messages' => array(
                    'case_status.required'  => '案件狀態為必填欄位',
                    'case_status.in'        => '案件狀態選項不合法',
                    'reply_status.required' => '留言狀態為必填欄位',
                    'reply_status.in'       => '留言狀態選項不合法'
                )
            ),
        ),
    ),
    'register' => array(
        'rules' => array(
            'username'  => 'required',
            'number'    => 'required',
            'department'=> 'required',
            'grade'     => 'required',
            'name'      => 'required',
            'phone'     => 'required',
            'email'     => 'required',
        ),
        'messages' => array(
            'username.required'  => '使用者名稱讀取失敗！',
            'number.required'    => '學號讀取失敗！',
            'department.required'=> '科系讀取失敗！',
            'grade.required'     => '年級讀取失敗！',
            'name.required'      => '姓名讀取失敗！',
            'phone.required'     => '電話讀取失敗！',
            'email.required'     => '信箱讀取失敗！'
        )
    ),
    'reply' => array(
        'store' => array(
            'rules' => array(
                'case_id'   => 'required',
                'content'   => 'required',
            ),
            'messages' => array(
                'case_id.required'  => '讀取案件代號失敗',
                'content.required'  => '您必須填寫留言內容！',
            )
        )
    ),
    'manager' => array(
        'store' => array(
            'rules' => array(
                'username'  => 'required|exists:appeal_ilt_users,username',
                'title'     => 'required'
            ),
            'messages' => array(
                'username.required' => '使用者名稱（ID）為必填欄位',
                'username.exists'   => '您所輸入的使用者並不存在',
                'title.required'    => '頭銜為必填欄位'
            )
        ),
        'update' => array(
            'type' => array(
                'rules' => array(
                    'type'  => 'required|in:files,status',
                ),
                'messages' => array(
                    'type.required' => '您沒有指定要更新的類型',
                    'type.in'       => '您指定要更新的類型不存在'
                )
            ),
            'files' => array(
                'rules' => array(
                    'title'  => 'required',
                ),
                'messages' => array(
                    'title.required' => '頭銜為必填欄位',
                )
            ),
            'status' => array(
                'rules' => array(
                    'reason'    => 'required',
                    'status'    => 'required|in:stop,recover'
                ),
                'messages' => array(
                    'reason.required'   => '理由為必填欄位',
                    'status.required'   => '狀態類型為必填欄位',
                    'status.in'         => '您指定的狀態類型不存在'
                )
            ),
        ),
        'delete' => array(
            'rules' => array(
                'username'  => 'required',
                'name'      => 'required',
                'reason'    => 'required',
                'id'        => 'exists:appeal_managers,u_id'
            ),
            'messages' => array(
                'username.required' => '使用者名稱（ID）為必填欄位',
                'name.required'     => '管理員名稱為必填欄位',
                'reason.required'   => '刪除理由為必填欄位',
                'id.exists'         => '該管理員並不存在！'
            )
        ),
    ),

);