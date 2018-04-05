<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Detailbrgmasuk */

$this->title = 'Update Detailbrgmasuk: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Detailbrgmasuks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_dtlbrgmasuk, 'url' => ['view', 'id' => $model->id_dtlbrgmasuk]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detailbrgmasuk-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
