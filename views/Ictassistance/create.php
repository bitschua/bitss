<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Ictassistance $model */

/**$this->title = 'Create Ictassistance';*/
$this->params['breadcrumbs'][] = ['label' => 'Ictassistances', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ictassistance-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
