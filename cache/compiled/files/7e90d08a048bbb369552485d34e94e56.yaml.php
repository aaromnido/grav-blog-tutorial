<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav-blog-tutorial/user/config/plugins/git-sync.yaml',
    'modified' => 1487872646,
    'data' => [
        'enabled' => true,
        'text_var' => 'Custom Text added by the **Git Sync** plugin (disable plugin to remove)',
        'folders' => [
            0 => 'pages'
        ],
        'repository' => 'https://github.com/aaromnido/grav-blog-tutorial.git',
        'user' => 'aaromnido',
        'password' => 'gitsync-def50200d44a5ff03a59fcda51b6dce3ba3e85526f991605af991e82b03e929ca19b11ab75edc7d2275fdcdbb5862c5126282753f170fc7a1e9ed7d15af2c7930478043528247fb35ab4d1afc83ca528e87e427bfe11a682a35b23d9a13f68794da344081c0c62ee3c5de56836e990725e348a74a151c7ec508d92b7',
        'webhook' => '/_git-sync',
        'branch' => 'master',
        'remote' => [
            'name' => 'origin',
            'branch' => 'master'
        ],
        'git' => [
            'author' => 'gituser',
            'name' => 'GitSync',
            'email' => 'git-sync@trilby.media',
            'bin' => 'git'
        ],
        'logging' => false
    ]
];
