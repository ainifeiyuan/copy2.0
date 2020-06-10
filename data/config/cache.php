<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// +----------------------------------------------------------------------
// | 缓存设置
// +----------------------------------------------------------------------
return [

    // 驱动方式：使用复合缓存类型
    'type'  =>  'complex',
    // 默认使用的缓存
    'default'   =>  [
        // 驱动方式
        'type'   => 'file',
        // 缓存保存目录
        'path'   => '../data/runtime/cache/',
        // 缓存前缀
        'prefix' => 'thinkgrab',
        // 缓存有效期 0表示永久缓存
        'expire' => 0,
    ],
    // redis缓存
    'redis'   =>  [
        'type'   => 'Redis',
        'host'   => '127.0.0.1',
        'port'   => '6379',
        'password' => '',
        'timeout'=> 3600
    ],
];
