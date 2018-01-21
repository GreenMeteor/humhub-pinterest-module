<?php

use yii\helpers\Url;
use humhub\libs\Html;
use humhub\models\Setting;

\humhub\modules\pinterest\Assets::register($this);
?>

<div class="panel panel-default panel-pinterest" id="panel-pinterest">
    <?= \humhub\widgets\PanelMenu::widget(['id' => 'panel-pinterest']); ?>
  <div class="panel-heading">
    <?=Yii::t('PinterestModule.base', '<strong>Pinterest</strong>'); ?>
  </div>
  <div class="panel-body">

<?= Html::beginTag('div') ?>
<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="<?= $pinterestUrl ?>"></a>

<script async defer src="//assets.pinterest.com/js/pinit.js"></script>

<?= Html::endTag('div'); ?>
</div>
</div>
