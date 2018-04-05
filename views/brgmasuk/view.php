<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Brgmasuk */

$this->title = $model->nonota;
$this->params['breadcrumbs'][] = ['label' => 'Brgmasuks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="brgmasuk-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->nonota], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->nonota], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nonota',
            'tglmasuk',
            'iddistributor',
            'idpetugas',
            'total',
        ],
    ]) ?>

</div>
