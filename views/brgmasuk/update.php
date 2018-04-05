<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Brgmasuk */

$this->title = 'Update Brgmasuk: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Brgmasuks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nonota, 'url' => ['view', 'id' => $model->nonota]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="brgmasuk-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
