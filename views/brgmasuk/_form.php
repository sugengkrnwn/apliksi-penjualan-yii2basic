<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\Brgmasuk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="brgmasuk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nonota')->textInput(['maxlength' => true]) ?>

<!--     <#?= $form->field($model, 'tglmasuk')->textInput(['maxlength' => true]) ?> -->
    <?= $form->field($model, 'tglmasuk')->widget(
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

    <?= $form->field($model, 'iddistributor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idpetugas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
