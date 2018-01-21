<?php

namespace humhub\modules\pinterest\widgets;

use Yii;
use yii\helpers\Url;
use humhub\libs\Html;
use humhub\components\Widget;

/**
 *
 * @author Felli
 */
class PinterestFrame extends Widget
{
    public $contentContainer;

    /**
     * @inheritdoc
     */
    public function run()
    {
        $url = Yii::$app->getModule('pinterest')->getServerUrl() . '';
        return $this->render('pinterestframe', ['pinterestUrl' => $url]);
    }
}
