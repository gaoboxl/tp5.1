<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件


if (!function_exists('pr')) {

    function pr($data)
    {
       echo "<pre>";
	   print_r($data);
    }
}

if (!function_exists('api')) {

    function api($status, $msg, $data=[])
    {
       return json(['status'=>1,'msg'=>$msg,'data'=>$data]);
    }
}