<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\Penjualan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penjualan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nofaktur')->textInput(['maxlength' => true]) ?>

<!--     <#?= $form->field($model, 'tglpenjualan')->textInput() ?> -->
    <?= $form->field($model, 'tglpenjualan')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false, 
         // modify template for custom rendering
        'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'dd-M-yyyy'
        ]
        ]);?>

    <?= $form->field($model, 'idpetugas')->dropDownList($listPetugas,['prompt'=>'-pilih petugas-'])->label('Nama Petugas') ?>

    <?= $form->field($model, 'bayar')->textInput() ?>

    <?= $form->field($model, 'sisa')->textInput() ?>

    <?= $form->field($model, 'total')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
