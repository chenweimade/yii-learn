<?php
use common\widgets\Menu;

echo Menu::widget(
    [
        'options' => [
            'class' => 'sidebar-menu'
        ],
        'items' => [
            [
                'label' => Yii::t('app', 'Dashboard'),
                'url' => Yii::$app->homeUrl,
                'icon' => 'fa-dashboard',
                'active' => Yii::$app->request->url === Yii::$app->homeUrl
            ],
            [
                'label' => Yii::t('app', 'Settings'),
                'url' => ['/setting'],
                'icon' => 'fa fa-spinner',
                'active' => Yii::$app->request->url === "/setting" 
            ],
            [
                'label' => Yii::t('app', 'System'),
                'url' => ['#'],
                'icon' => 'fa fa-cog',
                'options' => [
                    'class' => 'treeview',
                ],
                'items' => [
                    [
                        'label' => Yii::t('app', 'User'),
                        'url' => ['/user/index'],
                        'icon' => 'fa fa-user',
                        //'visible' => (Yii::$app->user->identity->username == 'admin'),
                    ],
                    [
                        'label' => Yii::t('app', 'Role'),
                        'url' => ['/role/index'],
                        'icon' => 'fa fa-lock',
                    ],
                ],
            ],
	    [
                'label' => Yii::t('app', 'Blog'),
                'url' => ['#'],
                'icon' => 'fa fa-cog',
                'options' => [
                    'class' => 'treeview',
                ],
                'items' => [
                    [
                        'label' => Yii::t('app', 'Catalog'),
                        'url' => ['/blog/blog-catalog'],
                        'icon' => 'fa fa-user',
                    ],
                    [
                        'label' => Yii::t('app', 'Post'),
                        'url' => ['/blog/blog-post'],
                        'icon' => 'fa fa-lock',
                    ],
		    [
                        'label' => Yii::t('app', 'Comment'),
                        'url' => ['/blog/blog-comment'],
                        'icon' => 'fa fa-user',
                    ],
                    [
                        'label' => Yii::t('app', 'Tag'),
                        'url' => ['/blog/blog-tag'],
                        'icon' => 'fa fa-lock',
                    ],
                ],
            ],
        ]
    ]
);
