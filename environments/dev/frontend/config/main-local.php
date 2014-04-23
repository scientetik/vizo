<?php
return [
    'bootstrap' => ['gii','debug'],
    'modules' => [
        'gii' => [
            'class' => 'yii\gii\Module',
            'allowedIPs' => ['127.0.0.1', '::1', '192.168.0.*', '192.168.1.33'] // adjust this to your needs        
        ],
        'debug' => [
            'class' => 'yii\debug\Module',
            'allowedIPs' => ['127.0.0.1', '::1', '192.168.0.*', '192.168.1.33'] // adjust this to your needs        
        ],
    ],
];
