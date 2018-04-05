<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Detailbrgmasuk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detailbrgmasuk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nonota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kodebarang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah')->textInput() ?>

    <?= $form->field($model, 'subtotal')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
