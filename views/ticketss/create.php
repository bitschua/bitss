<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ticketss $model */

$this->title = 'Create Ticketss';
$this->params['breadcrumbs'][] = ['label' => 'Ticketsses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ticketss-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
