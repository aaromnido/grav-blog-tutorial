<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav-blog-tutorial/user/config/plugins/backup-manager.yaml',
    'modified' => 1487886910,
    'data' => [
        'enabled' => true,
        'backup' => [
            'testmode' => [
                'enabled' => true,
                'compressionratio' => 1.1999999999999999555910790149937383830547332763671875
            ],
            'phptimeout' => 600,
            'storage' => [
                'maxspace' => 10,
                'keepdays' => 10,
                'showbackups' => 50
            ],
            'log' => true,
            'ignore' => [
                'foldercase' => true,
                'toplevelfolders' => [
                    0 => 'webserver-configs',
                    1 => 'vendor',
                    2 => 'system',
                    3 => 'tmp',
                    4 => 'backup',
                    5 => 'bin',
                    6 => 'cache'
                ],
                'toplevelintersect' => true,
                'foldersintersect' => true,
                'forceaddasempty' => false,
                'filetypes' => [
                    0 => '.json',
                    1 => '.lock',
                    2 => '.git',
                    3 => '.gitignore',
                    4 => '.html',
                    5 => '.txt'
                ],
                'folders' => [
                    0 => 'webserver-configs',
                    1 => 'vendor',
                    2 => 'system',
                    3 => 'tmp',
                    4 => 'backup',
                    5 => 'bin',
                    6 => 'cache'
                ]
            ]
        ]
    ]
];
