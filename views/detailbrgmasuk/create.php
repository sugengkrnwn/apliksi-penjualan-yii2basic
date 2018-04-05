<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Detailbrgmasuk */

$this->title = 'Create Detailbrgmasuk';
$this->params['breadcrumbs'][] = ['label' => 'Detailbrgmasuks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detailbrgmasuk-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
