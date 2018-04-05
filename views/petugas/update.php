<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Petugas */

$this->title = 'Update Petugas: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Petugas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idpetugas, 'url' => ['view', 'id' => $model->idpetugas]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="petugas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
