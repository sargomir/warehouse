<?php

use app\modules\warehouse\Warehouse as Module;

/* @var $this yii\web\View */
/* @var $model app\models\Manufacturers */

$this->title = Module::t('app', 'Manufacturers');
$this->params['breadcrumbs'][] = ['label' => Module::t('app', 'Manufacturers'), 'url' => ['manufacturers/index']];
$this->params['breadcrumbs'][] = ['label' => $model->manufacturer_id];
?>

<div class="manufacturers-update">
    <?= $this->render('_form', [
        'model' => $model,
    	'create' => true,
    ]) ?>
</div>
