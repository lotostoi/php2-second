<?php

return [
    'namespaces_Controllers' => "app\\controllers\\",
    'templates' => $_SERVER['CONTEXT_DOCUMENT_ROOT'] . "/../twigViews/",
    'BIG'=> 'src/bigimages/',
    'SMALL' =>'src/smallimages/',
    'STOR_FOR_IMG' => 'src/img/store/',
    'components' => [
        'Db' => [
            'class' => app\engine\Db::class,
            'driver' => 'mysql',
            'host' => 'localhost:3306',
            'login' => 'lotos',
            'password' => 'XrTA2B2Igm3AzBPR',
            'database' => 'my_portfolio',
            'charset' => 'utf8'
        ],
        'Request' => ['class' => app\engine\Request::class],
        'Session' => ['class' => app\engine\Session::class],
        'LoaderImages' => ['class' => app\engine\LoaderImages::class],
        'ReviewsRepository' => ['class' => app\model\repositories\reviews\ReviewsRepository::class],
        'WorkRepository' => ['class' => app\model\repositories\work\WorkRepository::class],
        'WorkToTagsRepository' => ['class' => app\model\repositories\work\WorkToTagsRepository::class],
        'TagsRepository' => ['class' => app\model\repositories\work\TagsRepository::class],
        'UsersRepository' => ['class' => app\model\repositories\UsersRepository::class],
        'HashesRepository' => ['class' => app\model\repositories\HashesRepository::class],
    ],
];
