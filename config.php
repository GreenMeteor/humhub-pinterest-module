<?php

namespace humhub\modules\pinterest;

return [
    'id' => 'pinterest',
    'class' => 'humhub\modules\pinterest\Module',
    'namespace' => 'humhub\modules\pinterest',
    'events' => [
        [
            'class' => \humhub\modules\dashboard\widgets\Sidebar::className(),
            'event' => \humhub\modules\dashboard\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\pinterest\Events',
                'addPinterestFrame'
            ]
        ],
        [
            'class' => \humhub\modules\space\widgets\Sidebar::className(),
            'event' => \humhub\modules\space\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\pinterest\Events',
                'addPinterestFrame'
            ]
        ],
        [
            'class' => \humhub\modules\admin\widgets\AdminMenu::className(),
            'event' => \humhub\modules\admin\widgets\AdminMenu::EVENT_INIT,
            'callback' => [
                'humhub\modules\pinterest\Events',
                'onAdminMenuInit'
            ]
        ]
    ]
];
?>
