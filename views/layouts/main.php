<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    
    <style>
        /* Custom styles for header and logo */
        .navbar-brand img {
            height: 40px; /* Adjust the logo height */
            margin-right: 20px; /* Spacing between the logo and brand name */
        }
        
        .navbar-nav {
            margin-left: auto; /* Pushes the navigation items to the right */
        }

        /* Navbar link colors */
        .navbar-dark .navbar-nav .nav-link {
            color: rgba(255, 255, 255, 0.8); /* Light color for links */
        }

        .navbar-dark .navbar-nav .nav-link:hover {
            color: rgba(255, 255, 255, 1); /* Full white on hover */
        }

        /* Navbar background color */
        .navbar-dark {
            background-color: #343a40; /* Dark grey background */
        }
    </style>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header id="header">
    <?php
    NavBar::begin([
        'brandLabel' => Html::img(Yii::getAlias('@web/image/bits.png'), [
            'alt' => 'Bits Logo', 
            'class' => 'img-fluid',
            'style' => 'height: 50px;' // Ensuring the height is set
        ]) . ' ' . Yii::$app->name, // Logo and brand name
        'brandUrl' => Yii::$app->homeUrl,
        'options' => ['class' => 'navbar-expand-md navbar-dark bg-dark fixed-top'],
    ]);

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            [
                'label' => 'Request form',
                'items' => [
                    ['label' => 'CCTV review', 'url' => ['cctv/create']],
                    ['label' => 'BAFE Website posting', 'url' => ['posting-request/create']],
                    ['label' => 'ICT Service Support', 'url' => ['/ictassistance/create']],
                ],
            ],
            ['label' => 'ICT Assistance', 'url' => ['/ictassistance/index']],
            ['label' => 'CCTV form', 'url' => ['cctv/index']],
            ['label' => 'BAFE posting form', 'url' => ['posting-request/index']],
            ['label' => 'TICKETING', 'url' => ['ticketss/index']],
            
            Yii::$app->user->isGuest
                ? ['label' => 'Login', 'url' => ['/site/login']]
                : '<li class="nav-item">'
                    . Html::beginForm(['/site/logout'])
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'nav-link btn btn-link logout']
                    )
                    . Html::endForm()
                    . '</li>',
        ]
    ]);
    
    NavBar::end();
    ?>
</header>

<main id="main" class="flex-shrink-0" role="main">
    <div class="container">
        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer id="footer" class="mt-auto py-3 bg-light">
    <div class="container">
        <div class="row text-muted">
            <div class="col-md-6 text-center text-md-start">&copy; My Company <?= date('Y') ?></div>
            <div class="col-md-6 text-center text-md-end"><?= Yii::powered() ?></div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
