<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\ticketss $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ticketsses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ticketss-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'Ticket_ID',
            'Acctivity',
            'Issue_Discription',
            'Requested_By',
            'Office',
            'Priority',
            'Status',
            'Assigned_To',
            'Date_Resolved',
            'Remarks',
        ],
    ]) ?>

</div>
