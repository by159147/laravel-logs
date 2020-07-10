<?php


return [
    /*
    |--------------------------------------------------------------------------
    | Pattern and storage path settings
    |--------------------------------------------------------------------------
    |
    | The env key for pattern and storage path with a default value
    |
    */
    'max_file_size' => 52428800, // size in Byte
    'pattern'       => env('LOGVIEWER_PATTERN', '*.log'),


    //远程主机营业填写 ssh 本地主机直接填写storage_path  ssh占不支付下个版本
    'app'=>[
        'default'=>[
            'storage_path'=>env('LOGVIEWER_STORAGE_PATH', storage_path('logs')),
        ],

        'user'=>[
            'user'=>'',
            'password'=>'',
            'port'=>'',
            'storage_path'=>'',
        ]

    ],
];
