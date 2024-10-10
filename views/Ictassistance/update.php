<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Ictassistance $model */

$this->title = 'Update Ictassistance: ' . $model->ictnumber;
$this->params['breadcrumbs'][] = ['label' => 'Ictassistances', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ictnumber, 'url' => ['view', 'ictnumber' => $model->ictnumber]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ictassistance-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
