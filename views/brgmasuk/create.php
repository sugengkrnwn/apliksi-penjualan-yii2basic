<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Brgmasuk */

$this->title = 'Create Brgmasuk';
$this->params['breadcrumbs'][] = ['label' => 'Brgmasuks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="brgmasuk-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
