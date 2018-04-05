<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name='Aplikasi Penjualan',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'Petugas', 'url' => ['/petugas/index']],
            ['label' => 'Distributor', 'url' => ['/distributor/index']],
            [
                    'label' => 'Data Barang',
                    'icon' => 'share',
                    'url' => '#',
                    'items' => [
            ['label' => 'Barang', 'url' => ['/barang/index']],
            ['label' => 'Jenis Barang', 'url' => ['/jenis/index']],
            ['label' => 'Barang Masuk', 'url' => ['/brgmasuk/index']],
            ['label' => 'Detail Barang Masuk', 'url' => ['/detailbrgmasuk/index']],
                        
                ],
            ],

            [
            'label' => 'Data Penjualan',
            'icon' => 'share',
            'url' => '#',
            'items' => [
            ['label' => 'Penjualan', 'url' => ['/penjualan/index']],
            ['label' => 'Detail Penjualan', 'url' => ['/detailpenjualan/index']],
                    
                ],
            ],

              [
            'label' => 'Some tools',
            'icon' => 'share',
            'url' => '#',
            'items' => [
                ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
        
            ],
            ],
            Yii::$app->user->isGuest ? (
        
                ['label' => 'Login', 'url' => ['/site/login']]
                
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
