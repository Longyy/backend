<?php
/**
 * Created by PhpStorm.
 * User: longyongyu186
 * Date: 2017-02-10
 * Time: 15:44
 */
header('Content-Type: text/html; charset=utf-8');
$data = [
    'aaData' => [
        [
            1,
            "基本面夺555",
            "什么呀5566",
            1
        ],
        [
            2,
            "rule_show",
            "权限规则显示",
            1
        ],
        [
            3,
            "rule_save",
            "权限规则编辑",
            1
        ],
        [
            4,
            "rule_del",
            "权限规则删除",
            1
        ],
        [
            5,
            "account/show",
            "帐户显示权限",
            1
        ],
        [
            6,
            "account/edit",
            "帐户修改权限",
            1
        ],
        [
            7,
            "account/save",
            "帐户编辑权限",
            1
        ],[
            8,
            "account/save",
            "帐户编辑权限",
            1
        ],[
            9,
            "account/save",
            "帐户编辑权限",
            1
        ],[
            10,
            "account/save",
            "帐户编辑权限",
            1
        ],[
            11,
            "account/save",
            "帐户编辑权限",
            1
        ],

    ],
    'iTotalDisplayRecords' => 11,
    'iTotalRecords' => 11,
    "sEcho" => "1"
];
echo json_encode($data);