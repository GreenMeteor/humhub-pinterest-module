<?php

namespace humhub\modules\pinterest\models;

use Yii;

/**
 * ConfigureForm defines the configurable fields.
 */
class ConfigureForm extends \yii\base\Model
{

    public $serverUrl;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['serverUrl', 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'serverUrl' => Yii::t('PinterestModule.base', 'Pinterest URL:'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'serverUrl' => Yii::t('PinterestModule.base', 'e.g. https://pinterest.com/{username}'),
        ];
    }

    public function loadSettings()
    {
        $this->serverUrl = Yii::$app->getModule('pinterest')->settings->get('serverUrl');

        return true;
    }

    public function save()
    {
        Yii::$app->getModule('pinterest')->settings->set('serverUrl', $this->serverUrl);

        return true;
    }

}
