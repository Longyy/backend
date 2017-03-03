<?php
sleep(4);
//header("Content-type:application/json");
header('Content-Type: text/html; charset=utf-8');
$data = [
    'status' => 0,
    'msg' => '插入成功！',
];
echo json_encode($data);