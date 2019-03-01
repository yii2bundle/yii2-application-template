<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii2rails\extension\web\helpers\Page;
use yii2lab\navigation\domain\widgets\Alert;
use yii2lab\applicationTemplate\backend\assets\AppAsset;

AppAsset::register($this);
?>

<?php Page::beginDraw(['class' => "hold-transition login-page"]) ?>

	<?= Alert::widget() ?>
	
	<?= $content ?>

<?php Page::endDraw() ?>
