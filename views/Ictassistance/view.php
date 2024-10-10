<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Ictassistance $model */

$this->title = $model->ictnumber;
$this->params['breadcrumbs'][] = ['label' => 'Ictassistances', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>


<style>

.ictassistance-view {
    font-family: Arial, sans-serif;
    padding: 20px;
    padding: 10px 20px;
        font-size: 12px;
        border-radius: 5px;
        background-color: skyblue;
        border-color: black;
        
        text-transform: uppercase;
}

</style>



<div class="ictassistance-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'ictnumber' => $model->ictnumber], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'ictnumber' => $model->ictnumber], [
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
            'ictnumber',
            'date',
            'device_name',
            'office_division',
            'property_no',
            'nature_of_request',
            'brand_and_model',
            'inclusion_accessories',
            'diagnosis',
            'action_taken',
            'performed_by',
            'acknowledge_by',
            'reviewed_by',
            'completed_date',
            'date_of_approval',
            'needs_procurement',
            
        ],
    ]) ?>

</div>
