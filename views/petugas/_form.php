<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Petugas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="petugas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idpetugas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namapetugas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telpon')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
