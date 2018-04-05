<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Distributor */

$this->title = 'Update Distributor: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Distributors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->iddistributor, 'url' => ['view', 'id' => $model->iddistributor]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="distributor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
