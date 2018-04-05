<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Detailpenjualan */

$this->title = 'Create Detailpenjualan';
$this->params['breadcrumbs'][] = ['label' => 'Detailpenjualans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detailpenjualan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'listnofaktur' => $listnofaktur,
            'listkodebarang' => $listkodebarang
    ]) ?>

</div>
