<?php

return [
    'namespaces_Controllers' => "app\\controllers\\",
    'templates' => $_SERVER['CONTEXT_DOCUMENT_ROOT'] . "/../twigViews/",
    'BIG' => 'src/img/works/bigimages/',
    'SMALL' => 'src/img/works/smallimages/',
    'USER_SMALL' => 'src/img/users/small/',
    'USER_BIG' => 'src/img/users/big/',
    'STOR_FOR_IMG' => 'src/img/store/',
    'AMOUNT_REVIEVS' => 3,
    'components' => [
        'VK' => [
            'class' => app\model\VK::class,
            'id' => "7732862",
            'sicret_key' => "6ASPAMRTdJF9ZGnGh9Zn",
            "redirect" => "http://php" . "/authorization/enterVK"
        ],
        'FB' => [
            'class' => app\model\FB::class,
            'id' => "836893896877665",
            'sicret_key' => "a71ee9339580a71db101ac7f5b35e01c",
            "redirect" => "http://php" . "/authorization/enterFB"
        ],

        'Db' => [
            'class' => app\engine\Db::class,
            'driver' => 'mysql',
            'host' => 'localhost:3307',
            'login' => 'lotos',
            'password' => 'XrTA2B2Igm3AzBPR',
            'database' => 'my_portfolio',
            'charset' => 'utf8'
        ],
        'Request' => ['class' => app\engine\Request::class],
        'Session' => ['class' => app\engine\Session::class],
        'Email' => ['class' => app\engine\Email::class],
        'LoaderImages' => ['class' => app\engine\LoaderImages::class],
        'ReviewsRepository' => ['class' => app\model\repositories\reviews\ReviewsRepository::class],
        'WorkRepository' => ['class' => app\model\repositories\work\WorkRepository::class],
        'WorkToTagsRepository' => ['class' => app\model\repositories\work\WorkToTagsRepository::class],
        'TagsRepository' => ['class' => app\model\repositories\work\TagsRepository::class],
        'UsersRepository' => ['class' => app\model\repositories\UsersRepository::class],
        'HashesRepository' => ['class' => app\model\repositories\HashesRepository::class],
    ],
];
