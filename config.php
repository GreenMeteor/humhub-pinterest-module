<?php

namespace humhub\modules\pinterest;

return [
    'id' => 'pinterest',
    'class' => 'humhub\modules\pinterest\Module',
    'namespace' => 'humhub\modules\pinterest',
    'events' => [
        [
            'class' => \humhub\modules\dashboard\widgets\Sidebar::class,
            'event' => \humhub\modules\dashboard\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\pinterest\Events',
                'addPinterestFrame'
            ]
        ],
        [
            'class' => \humhub\modules\space\widgets\Sidebar::class,
            'event' => \humhub\modules\space\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\pinterest\Events',
                'addPinterestFrame'
            ]
        ],
        [
            'class' => \humhub\modules\admin\widgets\AdminMenu::class,
            'event' => \humhub\modules\admin\widgets\AdminMenu::EVENT_INIT,
            'callback' => [
                'humhub\modules\pinterest\Events',
                'onAdminMenuInit'
            ]
        ]
    ]
];
?>
