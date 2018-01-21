<?php

namespace humhub\modules\pinterest;

use Yii;
use yii\helpers\Url;
use humhub\modules\pinterest\widgets\PinterestFrame;
use humhub\models\Setting;

class Events extends \yii\base\Object
{

    public static function onAdminMenuInit(\yii\base\Event $event)
    {
        $event->sender->addItem([
            'label' => Yii::t('PinterestModule.base', 'Pinterest Settings'),
            'url' => Url::toRoute('/pinterest/admin/index'),
            'group' => 'settings',
            'icon' => '<i class="fab fa-pinterest"></i>',
            'isActive' => Yii::$app->controller->module && Yii::$app->controller->module->id == 'pinterest' && Yii::$app->controller->id == 'admin',
            'sortOrder' => 650
        ]);
    }

public static function addPinterestFrame($event)
    {
        if (Yii::$app->user->isGuest) {
            return;
        }
        $event->sender->view->registerAssetBundle(Assets::className());
        $event->sender->addWidget(PinterestFrame::className(), [], [
            'sortOrder' => Setting::Get('timeout', 'pinterest')
        ]);
    }
}
