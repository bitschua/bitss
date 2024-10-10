<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Cctvform $model */

$this->title = 'Update Cctvform: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cctvforms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cctvform-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
