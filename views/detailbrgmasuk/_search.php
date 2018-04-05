<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DetailbrgmasukSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detailbrgmasuk-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_dtlbrgmasuk') ?>

    <?= $form->field($model, 'nonota') ?>

    <?= $form->field($model, 'kodebarang') ?>

    <?= $form->field($model, 'jumlah') ?>

    <?= $form->field($model, 'subtotal') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
