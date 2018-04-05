<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Detailpenjualan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detailpenjualan-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <#?= $form->field($model, 'nofaktur')->textInput(['maxlength' => true]) ?> -->
	<?= $form->field($model, 'nofaktur')->dropDownList($listnofaktur) ?>
	<?= $form->field($model, 'kodebarang')->dropDownList($listkodebarang) ?>
    <!-- <#?= $form->field($model, 'kodebarang')->textInput(['maxlength' => true]) ?> -->
    
    <?= $form->field($model, 'jumlah')->textInput() ?>

    <?= $form->field($model, 'subtotal')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
