<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PostingRequest $model */

$this->title = 'Create Posting Request';
$this->params['breadcrumbs'][] = ['label' => 'Posting Requests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posting-request-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
