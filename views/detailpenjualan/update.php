<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Detailpenjualan */

$this->title = 'Update Detailpenjualan: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Detailpenjualans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_detailpenjualan, 'url' => ['view', 'id' => $model->id_detailpenjualan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detailpenjualan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'listnofaktur' => $listnofaktur,
        'listkodebarang' => $listkodebarang
    ]) ?>

</div>
