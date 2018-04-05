<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Barang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="barang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kodebarang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namabarang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kodejenis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'harganet')->textInput() ?>

    <?= $form->field($model, 'hargajual')->textInput() ?>

    <?= $form->field($model, 'stok')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
