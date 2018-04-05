<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DistributorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="distributor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'iddistributor') ?>

    <?= $form->field($model, 'namadistributor') ?>

    <?= $form->field($model, 'alamat') ?>

    <?= $form->field($model, 'kotasal') ?>

    <?= $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'telpon') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
