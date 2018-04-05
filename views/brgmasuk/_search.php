<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BrgmasukSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="brgmasuk-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nonota') ?>

    <?= $form->field($model, 'tglmasuk') ?>

    <?= $form->field($model, 'iddistributor') ?>

    <?= $form->field($model, 'idpetugas') ?>

    <?= $form->field($model, 'total') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
